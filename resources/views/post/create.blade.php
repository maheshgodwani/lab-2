@extends('template.layout')

@section('content')
<h1>Enter the Details</h1>
<div class="container">
<form action="{{route('myblog.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label >Post Title</label>
      <input type="text" class="form-control"  placeholder="Enter post Title" name="Post_title">
    </div>
    <div class="form-group">
        <label >Post content</label>
        <textarea class="form-control" id="editor" rows="3" name="Post_content"></textarea>
      </div>
      <div class="form-group">
        <label >Autho Name</label>
        <input type="text" class="form-control"  placeholder="Enter Author name" name="Author_name">
      </div>
      <div class="form-group">
        <label >Publication date</label>
        <input type="date" class="form-control"  placeholder="Enter Author name" name="Publication_Date">
      </div><br>
    <button type="submit" class="btn btn-warning">Submit</button><br><br><br><br><br>
  </form></div>
@endsection
