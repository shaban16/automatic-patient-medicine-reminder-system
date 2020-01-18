@extends('layouts.main')

@section('title')
APMRS | Create Patient
@endsection

@section('heading')
Adding New Patient
@endsection

@section('content')
<div class="row">

    <div class="col-md-8">
        <div class="card-box">
           
            <form class="form-horizontal" role="form" action="{{ route('patient_detail.store') }}" method="POST" >
            	@csrf

                <div class="form-group row">
                    <label for="name" class="col-3 col-form-label">Full Name</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="name" required name="name" placeholder="Enter patient name">
                    </div>
                </div>     

                <div class="form-group row">
                    <label for="phone" class="col-3 col-form-label">Phone Number</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="phone" required name="phone" placeholder="Enter phone number">
                    </div>
                </div> 

                <div class="form-group row">
                    <label for="phone" class="col-3 col-form-label">Disease Type</label>
                    <div class="col-9">
                       <select class="custom-select mt-3 form-control" name="type" required>
                            <option selected>Select Disease type</option>
                            <option value="diabetic">Diabetic Disease</option>
                            <option value="heart">Heart Disease</option>
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


