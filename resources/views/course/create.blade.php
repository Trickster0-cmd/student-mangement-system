@extends('course.layout')
  
@section('content')
&nbsp;
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Create Course') }}</div>

                <div class="card-body">
                <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h2>Add New course</h2>
        </div>
        
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
&nbsp;
<form action="{{ route('courses.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course ID:</strong>
                <input type="number" name="CourseID" class="form-control" placeholder="ID" required>
            </div>
         </div>&nbsp;
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="CourseName" class="form-control" placeholder="Course Name" required>
            </div>
         </div>&nbsp;
         <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>&nbsp;
        <div class="text-center">
            <a class="btn btn-primary" href="{{ route('courses.index') }}"> Back</a>
        </div>
    </div>
   
</form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection