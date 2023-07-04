<x-app-layout>
    <!--sidebar wrapper -->
    @include('inc.sidebar')
    <!--end sidebar wrapper -->

    <!--start header -->
    @include('inc.header')
    <!--end header -->

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Member</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Member</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row row-cols-1 row-cols-1">
                <div class="col">
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary"></i></div>
                                <h5 class="mb-0 text-primary">Member Lists</h5>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Member Name</th>
                                            <th scope="col">Introducer Id</th>
                                            <th scope="col">Mobile Number</th>
                                            <th scope="col">Email Id</th>
                                            <th scope="col">Date of birth</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Position</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @dd($members) --}}
                                        @forelse ($members[0]->referrals as $key => $member)
                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td>{{ $member->referralUsers->name }}</td>
                                                <td>{{ $member->referralUsers->introducer_key }}</td>
                                                <td>{{ $member->referralUsers->mobile }}</td>
                                                <td>{{ $member->referralUsers->email }}</td>
                                                <td>{{ $member->referralUsers->date_of_birth }}</td>
                                                {{-- <td>{{ $member->referralUsers->pan_number }}</td> --}}
                                                <td>{{ ucwords($member->referralUsers->gender) }}</td>
                                                <td>{{ ucwords($member->position) }}</td>
                                            </tr>
                                        @empty
                                            <!-- Handle empty referrals case -->
                                            <tr>
                                                <td colspan="9">No members found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{-- <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        </li>
                                    </ul>
                                </nav> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page wrapper -->
    @include('inc.footer')
</x-app-layout>