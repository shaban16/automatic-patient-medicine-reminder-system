@extends('layouts.main')

@section('title')
APMRS | Edit Schedule
@endsection

@section('heading')
Editing  Schedule
@endsection

@section('content')
<div class="row">

    <div class="col-md-8">
        <div class="card-box">
           
            <form class="form-horizontal" role="form" action="{{ route('schedule.update',$schedule->id) }}" method="POST" >
            	@csrf

                @method('PUT')

                <div class="form-group row">
                    <label for="patient_name" class="col-3 col-form-label">  Patient Name</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="name" required name="patient_name" placeholder="Enter Patient name" value="{{$schedule->patient_name}}">
                </div>
                </div>
                    <div class="form-group row">
                    <label for="mobile_no" class="col-3 col-form-label">  Mobile Number</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="name" required name="mobile_no" placeholder="Enter phone Number" value="{{$schedule->mobile_no}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="type" class="col-3 col-form-label">Disease Type</label>
                    <div class="col-9">
                       <select class="custom-select mt-3 form-control" name="typex" required>
                            <option >Select diasese type</option>
                            <option {{$schedule->disease_type == "diabetic" ? 'selected':''}} value="diabetic">Diabetic </option>
                            <option {{$schedule->disease_type == "heart" ? 'selected':''}} value="heart">Heart </option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="medicine_name" class="col-3 col-form-label">  Medicine Name</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="name" required name="medicine_name" placeholder="Enter phone Number" value="{{$schedule->medicine_name}}">
                    </div>
                </div>

                     <div class="form-group row">
                    <label for="food_restricted" class="col-3 col-form-label">  Restricted Food</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="name" required name="food_restricted" placeholder="Enter phone Number" value="{{$schedule->food_restricted}}">
                    </div>
                </div>

                    <div class="form-group row">
                    <label for="medicine_time" class="col-3 col-form-label">  Medicine Time</label>
                    
                      <div class ="col-9">
                       <select class="custom-select mt-3 form-control" name="medicine_time" required>
                            <option >Select Time</option>
                            <option {{$schedule->medicine_time == "8:00 AM" ? 'selected':''}} value="8:00 AM">Morning</option>
                             <option {{$schedule->medicine_time == "12:00 PM" ? 'selected':''}} value="12:00 PM">Noon</option>
                             <option {{$schedule->medicine_time == "8:00 PM" ? 'selected':''}} value="8:00 PM">Evening</option>
                        </select>
                </div>
                </div>
                <div class="form-group mb-0 justify-content-end row">
                    <div class="col-9">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection