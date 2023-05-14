@extends('students.layout')

@section('content')
&nbsp;
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Edit Student') }}</div>

                <div class="card-body">
            <div class="row">
                 <div class="col-lg-12 margin-tb">
                    <div class="text-center">
                      <h2>Edit student</h2>
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
  
    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student ID:</strong>
                <input type="text" name="studentid" id="studentid" class="form-control" placeholder="ID" value="{{ $student->studentid }}" required>
            </div>
         </div>&nbsp;
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ $student->name }}" class="form-control" required>
            </div>
         </div>&nbsp;
         <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
                            <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>

                            
                                <select name="course" id="course" class="form-control" value>
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
                <label for="year">Year:</label>
                <input type="number" id="year" name="year" class="form-control" value="{{ $student->year }}" required>
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
@endsection