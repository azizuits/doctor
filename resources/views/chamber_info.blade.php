@extends('layouts.admin')
@section('title')
    Add Chamber Information
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Chamber Information</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{route('admin.chamberprocess')}}" method="get">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="chamber_name"l>Chamber Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="chamber_name" id="chamber_name" placeholder="Chamber Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="doctors_name"l>Doctor Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="doctors_name" id="doctors_name" placeholder="Doctor Name">
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
