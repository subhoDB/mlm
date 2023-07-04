<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberStoreRequest;
use App\Services\Member\MemberService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    /**
     * Buind dependent service here
     */
    public function __construct(protected MemberService $memberService)
    { }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = $this->memberService->index();
        // dump($members[0]->referrals);
        return view('member.listing', compact('members'));
    }

    /**
     * Display a listing of the resource.
     */
    public function show($introducer_key)
    {
        $members = $this->memberService->show($introducer_key);
        // dump($members[0]->referrals);
        // return view('member.listing', compact('members'));

        return $members;
    }

    /**
     * Store a newly created resource in storage.
     * @param MemberStoreRequest
     */
    // public function store(Request $request)
    public function store(MemberStoreRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'introducer_key' => ['required', 'unique:users'],
            'name'           => ['required'],
            'email'          => ['required', 'email', 'unique:users'],
            'date_of_birth'  => ['required', 'before:today'],
            'mobile'         => ['sometimes', 'digits:10'],
            'gender'         => ['sometimes'],
            'position'       => ['required'],
            'pan_number'     => ['required', 'regex:/^([A-Z]{5})(\d{4})([A-Z]{1})$/'],
            'password'       => ['required', 'min:8', 'max:50'],
        ], [
            'email.unique'      => 'The email address is already taken.',
            'pan_number.regex'  => 'The :attribute is not a valid PAN number.',
            'mobile.digits'     => 'The :attribute must be a 10-digit number.',
            'date_of_birth.before' => 'The :attribute must be a date in the past.',
            'password.min:8'    => 'The password must be at least 8 characters.'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $request->validated();

        $response = $this->memberService->create($validatedData);

        return redirect()->back()->with('success', 'Member created successfully');

        // Flash success message to session
        // $request->session()->flash('success', 'Data saved successfully.');
        
        // Redirect to a success page or back to the previous page
        // return redirect()->route('success.page');

        // dd($validatedData);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'        => ['required'],
            'position'  => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $response = $this->memberService->addMyNetwork($request);

        if($response == MemberService::USER_ALREADY_EXIST) {
            return redirect()->back()->with('error', MemberService::USER_ALREADY_EXIST);
        }

        // dd($response);
        return redirect()->back()->with('success', 'Member created successfully');
    }
}