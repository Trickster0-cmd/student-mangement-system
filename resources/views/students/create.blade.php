@extends('students.layout')

@section('content')

&nbsp;
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Create Student') }}</div>

                <div class="card-body">
                <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left text-center">
            <h2>Add New Student</h2>
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
   
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    &nbsp;
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student ID:</strong>
                <input type="number" id="studentid" name="studentid" class="form-control" placeholder="ID" required>
                  
            </div>
        </div>&nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                  
            </div>
        </div>&nbsp;
       
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                            <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>

                            
                                <select name="course" id="course" class="form-control">
                                    @foreach ($course as $course)
                                        <option value="{{ $course->CourseID }}">{{ $course->CourseName }}</option>
                                    @endforeach
                                </select>

                                @error('course')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

        </div>&nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Year:</strong>
                <input type="number" id="year" name="year" class="form-control" placeholder="Year" required>
                
            </div>
        </div>&nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>&nbsp;
        <div class="text-center">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
   
</form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection