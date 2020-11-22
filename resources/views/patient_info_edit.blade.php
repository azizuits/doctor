@extends('layouts.admin')
@section('title')
    Patient Information Update
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card ">
                <div class="card-header">
                    <h1 class="text-center">Patient Information Update</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.patientedit')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$data['id']}}">
                        <div class="form-group row ">
                            <label for="patient_name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="patient_name" value="{{$data['name']}}" id="patient_name" placeholder="Patient Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="patient_name" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="patient_phone" value="{{$data['phone']}}" id="patient_phone" placeholder="Patient Phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="disease" class="col-sm-2 col-form-label">Main Disease</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="disease" value="{{$data['main_disease']}}" id="disease" placeholder="disease">
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
