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
                    <label for="name" class="col-3 col-form-label">Patient Name</label>
                    <div class="col-9">
                       <select class="custom-select mt-3 form-control" name="name" required>
                            <option selected>Select Patient Name</option>
                              @foreach($vars['patients'] as $patient)
                              <option value="{{$patient->name}}">{{$patient->name}}</option>
                              @endforeach
                        </select>
                    </div>
                </div> 

                <div class="form-group row">
                    <label for="mobile_no" class="col-3 col-form-label">Phone Number</label>
                    <div class="col-9">
                       <select class="custom-select mt-3 form-control" name="mobile_no" required>
                            <option selected>Select Patient Name</option>
                              @foreach($vars['patients'] as $patient)
                              <option value="{{$patient->phone}}">{{$patient->phone}}</option>
                              @endforeach
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


