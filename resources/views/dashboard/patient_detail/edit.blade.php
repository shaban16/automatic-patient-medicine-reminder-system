@extends('layouts.main')

@section('title')
APMRS | Edit Patient
@endsection

@section('heading')
Editing Patient Detail
@endsection

@section('content')
<div class="row">

    <div class="col-md-8">
        <div class="card-box">
           
            <form class="form-horizontal" role="form" action="{{ route('patient_detail.update',$patientDetail->id) }}" method="POST" >
            	@csrf

                @method('PUT')

                <div class="form-group row">
                    <label for="name" class="col-3 col-form-label">Patient Name</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="name" required name="name" placeholder="Enter medicine name" value="{{$patientDetail->name}}">
                    </div>
                </div>
                          
                          <div class="form-group row">
                    <label for="name" class="col-3 col-form-label">Phone Number</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="Phone" required phone="phone" placeholder="Enter Phone Number" value="{{$patientDetail->phone}}">
                    </div>
                </div>   
                <div class="form-group row">
                    <label for="name" class="col-3 col-form-label">Disease Type</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="type" required type="type" placeholder="Enter Disease Type" value="{{$patientDetail->type}}">
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