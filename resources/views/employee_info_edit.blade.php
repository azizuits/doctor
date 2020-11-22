@extends('layouts.admin')
@section('title')
    Add Employee Information
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card ">
                <div class="card-header">
                    <h1 class="text-center">Employee Information Update</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.employeeedit')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$data['id']}}"></input>
                        <div class="form-group row ">
                            <label for="emp_name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="emp_name" value="{{$data['name']}}" id="emp_name" placeholder="Employee Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emp_name" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="emp_phone" value="{{$data['phone']}}" id="emp_phone" placeholder="Employee Phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emp_designation" class="col-sm-2 col-form-label">Designation</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="designation" value="{{$data['designation']}}" id="emp_designation" placeholder="Employee Designation">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-8 ">
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
