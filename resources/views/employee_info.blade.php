@extends('layouts.admin')
@section('title')
    Add Employee Information
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Employee Information</h4>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    <form action="{{route('admin.employeeprocess')}}" method="get">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="emp_name"l>Employee Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="emp_name" id="emp_name" placeholder="Employee Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Phone <span class="text-danger">*</span> </label>
                                    <input class="form-control" type="text" name="emp_phone"  placeholder="Employee Phone" id="phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="designation">Degree <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="designation" id="designation" placeholder="Employee Designation" >
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
                                            <input type="file" name="doct_photo" id="image" class="form-control">
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
    </div>

@endsection
