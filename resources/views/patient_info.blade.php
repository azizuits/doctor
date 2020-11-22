@extends('layouts.admin')
@section('title')
	Add Patient Information
@endsection
@section('content')
	<div class="page-wrapper">
		<div class="content">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<h4 class="page-title">Add Patient Information</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<form action="{{route('admin.patientprocess')}}" method="get">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="patient_name"l>Patient Name <span class="text-danger">*</span></label>
									<input class="form-control" type="text" name="patient_name" id="patient_name" placeholder="Patient Name">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="patient_phone">Patient Phone <span class="text-danger">*</span> </label>
									<input class="form-control" type="text" name="patient_phone"  placeholder="Patient Phone" id="patient_phone">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="disease">Disease <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="disease" id="disease" placeholder="Disease" >
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="image">Photo</label>
									<div class="profile-upload">
										<div class="upload-img">
											<img alt="" src="{{asset('assets/img/user.jpg')}}">
										</div>
										<div class="upload-input">
											<input type="file" name="patient_photo" id="image" class="form-control">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-t-20 text-center">
							<button class="btn btn-primary submit-btn">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	
	</div>

@endsection
