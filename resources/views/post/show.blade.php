@extends('template.layout')

@section('content')
<h1>Show the Details..</h1>
<table class="table table-striped table-bordered table-hover table-sm">
    <thead class="thead-dark">
        <tr>
            <th>Post Title</th>
            <th>Post_content</th>
            <th>Author Name</th>
            <th>Publication_date</th>
        </tr>
        </thead>
        <tbody>
            <tr>

                <td>{{$myblog->Post_title}}</td>
                <td>{{$myblog->Post_content}}</td>
                <td>{{$myblog->Author_name}}</td>
                <td>{{$myblog->Publication_Date}}</td></tr>
            </tbody>
</table>
@endsection
