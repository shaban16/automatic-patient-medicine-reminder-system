@extends('layouts.main')

@section('title')
APMRS | Create Food
@endsection

@section('heading')
Adding New Diabetic Food
@endsection

@section('content')
<div class="row">

    <div class="col-md-8">
        <div class="card-box">
           
            <form class="form-horizontal" role="form" action="{{ route('diabetic_food.store') }}" method="POST" >
            	@csrf

                <div class="form-group row">
                    <label for="name" class="col-3 col-form-label">Food Name</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="name" required name="name" placeholder="Enter food name">
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