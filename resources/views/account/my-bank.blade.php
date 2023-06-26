<x-app-layout>
    <!--sidebar wrapper -->
    @include('inc.sidebar')
    <!--end sidebar wrapper -->
    <!--start header -->
    @include('inc.header')
    <!--end header -->

    <!-- Page Content -->
    <div class="wrapper">

        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">My Bank</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">My Bank</li>
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
                                    <div><i class="bx bxs-building me-1 font-22 text-primary"></i>
                                    </div>
                                    <h5 class="mb-0 text-primary">Update your bank details from here</h5>
                                </div>
                                <hr>
                                <form class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label for="inputFirstName" class="form-label">IFSC*</label>
                                        <input type="text" class="form-control" id="inputFirstName">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputLastName" class="form-label">Bank Name*</label>
                                        <input type="text" class="form-control" id="inputLastName">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail" class="form-label">Branch*</label>
                                        <input type="text" class="form-control" id="inputEmail">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword" class="form-label">A/C Number*</label>
                                        <input type="text" class="form-control" id="inputPassword">
                                    </div>
                                    <div class="col-6">
                                        <label for="inputAddress" class="form-label">A/C Holder Name*</label>
                                        <input type="text" class="form-control" id="inputPassword">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">A/C Type*</label>
                                        <select id="inputState" class="form-select">
                                            <option selected="">Savings</option>
                                            <option>Current</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="inputAddress2" class="form-label">PAN*</label>
                                        <input type="text" class="form-control" id="inputPassword">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary px-5 noHover">Submit</button>
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

</x-app-layout>