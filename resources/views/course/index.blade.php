@extends('course.layout')
 
@section('content')
&nbsp;
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Course Management') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">

    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    &nbsp;
    <table class="table table-bordered text-center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($courses as $course)
        <tr>
            <td>{{ $course->CourseID }}</td>
            <td>{{ $course->CourseName }}</td>
            <td>
                <form action="{{ route('courses.destroy',$course->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('courses.show',$course->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('courses.edit',$course->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>&nbsp;
    <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <a class="btn btn-success btn-lg" href="{{ route('courses.create') }}"> Add New Course</a>
            </div>
        </div>
  
    {!! $courses->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
    
      
@endsection