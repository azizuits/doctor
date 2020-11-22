@extends('layouts.admin')
@section('title')
   Add Patient Test
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Patient Test Information</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{route('admin.patienttestprocess')}}" method="get">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name"l>Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label id="des">Description</label>
                                    <textarea class="form-control" name="description" id="des" rows="3" cols="30"></textarea>
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
