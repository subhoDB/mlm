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
					<div class="breadcrumb-title pe-3">My Account</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">My Profile</li>
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
									<div><i class="bx bxs-user me-1 font-22 text-primary"></i>
									</div>
									<h5 class="mb-0 text-primary">My Profile Details</h5>
								</div>
								<hr>
								<form class="row g-3">
									<div class="col-md-6">
										<label for="inputFirstName" class="form-label">Name</label>
										<input type="email" class="form-control" id="inputFirstName">
									</div>
									<div class="col-md-6">
										<label for="inputLastName" class="form-label">Father/Guardian Name</label>
										<input type="password" class="form-control" id="inputLastName">
									</div>
									<div class="col-md-6">
										<label for="inputEmail" class="form-label">Date of Birth</label>
										<input type="email" class="form-control" id="inputEmail">
									</div>
									<div class="col-md-6">
										<label for="inputPassword" class="form-label">Mobile</label>
										<input type="password" class="form-control" id="inputPassword">
									</div>
									<div class="col-6">
										<label for="inputAddress" class="form-label">Email ID</label>
										<input type="password" class="form-control" id="inputPassword">
									</div>
									<div class="col-6">
										<label for="inputAddress2" class="form-label">Aadhar</label>
										<input type="password" class="form-control" id="inputPassword">
									</div>
									<div class="col-md-6">
										<label for="inputCity" class="form-label">Gender</label>
										<select id="inputState" class="form-select">
											<option selected="">Male</option>
											<option>Female</option>
										</select>
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

</x-app-layout>
