@extends('layouts.admin')
@section('title')
    Schedule  Information
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Schedule Information</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{route('admin.scheduleprocess')}}" method="get">
                        <div class="row">
                            <div class="col-sm-6">
                        <div class="form-group">
                            <label for="schedule_1">Schedule-1:</label>
{{--                                <input type="text" class="form-control" name="schedule_1" id="schedule_1" placeholder="">--}}
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="3-4 PM" name="schedule1">
                                    <label class="form-check-label" for="inlineCheckbox1">3:00-4:00 PM</label>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6">
                        <div class="form-group">
                            <label for="schedule_2">Schedule-2:</label>
{{--                                <input type="text" class="form-control" name="schedule_2" id="schedule_2" placeholder="">--}}
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4-5 PM" name="schedule2">
                                    <label class="form-check-label" for="inlineCheckbox2">4:00-5:00 PM</label>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6">
                        <div class="form-group">
                            <label for="schedule_3" >Schedule3</label>
{{--                                <input type="text" class="form-control" name="schedule_3" id="schedule_3" placeholder="">--}}
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="6-7 PM" name="schedule3">
                                    <label class="form-check-label" for="inlineCheckbox3">6:00-7:00 PM</label>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6">
                        <div class="form-group">
                            <label for="schedule_4" >Schedule-4</label>
{{--                                <input type="text" name="schedule_4" class="form-control" id="schedule_4">--}}
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="7-8 PM" name="schedule4">
                                    <label class="form-check-label" for="inlineCheckbox4">7:00-8:00 PM</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Date of Birth</label>

                                    <input type="date" class="form-control" name="date">

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
