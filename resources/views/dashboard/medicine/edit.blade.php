@extends('layouts.main')

@section('title')
APMRS | Edit Medicine
@endsection

@section('heading')
Editing  Medicine
@endsection

@section('content')
<div class="row">

    <div class="col-md-8">
        <div class="card-box">
           
            <form class="form-horizontal" role="form" action="{{ route('medicine.update',$medicine->id) }}" method="POST" >
            	@csrf

                @method('PUT')

                <div class="form-group row">
                    <label for="name" class="col-3 col-form-label">  Medicine Name</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="name" required name="name" placeholder="Enter medicine name" value="{{$medicine->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="type" class="col-3 col-form-label">Medicine Type</label>
                    <div class="col-9">
                       <select class="custom-select mt-3 form-control" name="type" required>
                            <option >Select Medicine type</option>
                            <option {{$medicine->type == "diabetic" ? 'selected':''}} value="diabetic">Diabetic Medicine</option>
                            <option {{$medicine->type == "heart" ? 'selected':''}} value="heart">Heart Medicine</option>
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