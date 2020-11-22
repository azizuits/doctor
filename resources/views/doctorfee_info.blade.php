@extends('layouts.admin')
@section('title')
    Add Doctor Information
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Doctor Fee Information</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{route('admin.doctorfeeprocess')}}" method="get" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="schedule"l>Schedule <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="schedule" id="schedule" placeholder="Schedule">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="fee"l>Fee <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="fee" id="fee" placeholder="fee">
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
