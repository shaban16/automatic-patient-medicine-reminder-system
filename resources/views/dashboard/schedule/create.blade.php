@extends('layouts.main')

@section('title')
APMRS | Create Medicine Schedule
@endsection

@section('heading')
Adding New Schedule
@endsection

@section('content')
<div class="row">

    <div class="col-md-8">
        <div class="card-box">
           
            <form class="form-horizontal" role="form" action="{{ route('schedule.store') }}" method="POST" >
            	@csrf

                <div class="form-group row">
                    <label for="patient_name" class="col-3 col-form-label">Patient Name</label>
                    <div class="col-9">
                       <select class="custom-select mt-3 form-control" name="patient_name" required>
                            <option selected>Select Patient Name</option>
                              @foreach($vars['patient'] as $patient)
                              <option value="{{$patient->name}}">{{$patient->name}}</option>
                              @endforeach
                        </select>
                    </div>
                </div> 

                <div class="form-group row">
                    <label for="mobile_no" class="col-3 col-form-label">Phone Number</label>
                    <div class="col-9">
                       <select class="custom-select mt-3 form-control" name="mobile_no" required>
                            <option selected>Select phone number</option>
                              @foreach($vars['patient'] as $patient)
                              <option value="{{$patient->phone}}">{{$patient->phone}}</option>
                              @endforeach
                        </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="disease_type" class="col-3 col-form-label">Disease Type</label>
                    <div class="col-9">
                       <select class="custom-select mt-3 form-control" name="disease_type" required>
                            <option selected>Select Disease type</option>
                            <option value="diabetic">Diabetic </option>
                            <option value="heart">Heart </option>
                        </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="medicine_name" class="col-3 col-form-label">medicine</label>
                    <div class="col-9">
                       <select class="custom-select mt-3 form-control" name="medicine_name" required>
                            <option selected>Select Medicine</option>
                              @foreach($vars['medicine'] as $medicine)
                              <option value="{{$medicine->name}}">{{$medicine->name}}</option>
                              @endforeach
                        </select>
                    </div>
                </div> 

                <div class="form-group row">
                    <label for="food_restricted" class="col-3 col-form-label">Restricted Food</label>
                    <div class="col-9">
                       <select class="custom-select mt-3 form-control" name="food_restricted" required>
                            <option selected>Select Restricted Food</option>
                              @foreach($vars['food'] as $food)
                              <option value="{{$food->name}}">{{$food->name}}</option>
                              @endforeach
                     </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="medicine_time" class="col-3 col-form-label">medicine Time</label>
                    <div class="col-9">
                       <select class="custom-select mt-3 form-control" name="medicine_time" required>
                            <option selected>Select Time</option>
                            <option value="8:00 AM">Morning</option>
                             <option value="12:00 PM">Noon</option>
                             <option value="8:00 PM">Evening</option>
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


