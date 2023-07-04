<x-app-layout>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.css"> --}}
    <!--sidebar wrapper -->
    @include('inc.sidebar')
    <!--end sidebar wrapper -->

    <!--start header -->
    @include('inc.header')
    <!--end header -->

    <style>
        .is-invalid {
            border-color: red;
        }
    </style>
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Add Member</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Member</li>
                        </ol>
                    </nav>
                </div>
            </div>

            {{-- Success and error messages start  --}}
            <br />
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif            
            {{-- Success and error messages end  --}}

            <!--end breadcrumb-->
            <div class="row row-cols-1 row-cols-1">
                <div class="col">
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary"></i></div>
                                <h5 class="mb-0 text-primary">Add Member Details</h5>
                            </div>
                            <hr>
                            <form class="row g-3" method="POST" action="{{ route('member.store') }}" id="add-member-form">
                                @csrf
                                <input type="hidden" id="id" value="" name="id" readonly>
                                <input type="hidden" id="introducer_key" value="FT{{ date('Hims') }}" name="introducer_key" readonly>
                                <div class="col-md-6">
                                    <label for="introducer_id" class="form-label">Introducer ID</label>
                                    <input type="text" class="form-control" id="introducer_id" name="introducer_id" autocomplete="off">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputMenberName" class="form-label">Member Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="inputMenberName" name="name" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="inputEmail" class="form-label">Email ID</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="inputEmail" name="email" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="inputDate" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control  @error('date_of_birth') is-invalid @enderror" id="inputDate" value="{{ old('date_of_birth') }}" name="date_of_birth" required>
                                    @error('date_of_birth')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="inputPanNumber" class="form-label">Pan Number</label>
                                    <input type="text" class="form-control @error('pan_number') is-invalid @enderror" id="inputPanNumber" value="{{ old('pan_number') }}" name="pan_number" required>
                                    @error('pan_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="inputMobile" class="form-label">Mobile</label>
                                    <input type="number" class="form-control @error('mobile') is-invalid @enderror" id="inputMobile" value="{{ old('mobile') }}" name="mobile" required>
                                    @error('mobile')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="inputPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword" name="password" autocomplete="off">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>                 

                                <div class="col-md-2" style="padding-left: 40px;">
                                    <label class="form-label">Position</label>
                                    <div class="position-div">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="position" id="inputPositionLeft" value="left" checked required>
                                            <label class="form-check-label" for="inputPositionLeft">Left</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="position" id="inputPositionRight" value="right" required>
                                            <label class="form-check-label" for="inputPositionRight">Right</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="inputGender" class="form-label">Gender</label>
                                    <select id="inputGender" class="form-select @error('gender') is-invalid @enderror" name="gender" required>
                                        <option selected="">Male</option>
                                        <option>Female</option>
                                    </select>
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> 

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-5">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page wrapper -->
    @include('inc.footer')
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script> --}}
</x-app-layout>


<script>
    // Your JavaScript code here
    document.getElementById('introducer_id').addEventListener('keyup', function(event) {
        // Handle the keyup event
        // Access the input value using event.target.value
        // console.log('Input value:', event.target.value);

        var inputValue = event.target.value;
        // Check if the inputValue length is 8
        // if (inputValue.length === 8) {
        var apiUrl = "{{ url('member-show/') }}" + '/'+ inputValue;

        // Make a GET request
        fetch(apiUrl, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            // Handle the response data
            console.log(data);

            const updateMemberRoute = '{{ route('member.update') }}';
            const form = document.getElementById('add-member-form');
            form.action = updateMemberRoute;

            document.getElementById('id').value = data.id;
            document.getElementById('introducer_id').value = data.introducer_key;
            document.getElementById('inputMenberName').value = data.name;
            document.getElementById('inputEmail').value = data.email;
            document.getElementById('inputDate').value = data.date_of_birth;
            document.getElementById('inputPanNumber').value = data.pan_number;
            document.getElementById('inputMobile').value = data.mobile;
            const genderSelect = document.getElementById('inputGender');
            for (let i = 0; i < genderSelect.options.length; i++) {
                const option = genderSelect.options[i];
                if (option.value.toLowerCase() === data.gender.toLowerCase()) {
                    option.selected = true;
                }
            }
            document.getElementById('inputPassword').value = '';
        })
        .catch(error => {
            // Handle any errors
            console.error(error);
        });
        // }
    });
</script>