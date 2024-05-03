@extends('template.layout')

@section('content')
<br><table class="table table-striped table-hover table-bordered">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Post Title</th>
        <th>Author Name</th>
        <th>Publication_date</th>
        <th>Show</th>
    </tr>
    </thead>
    <tbody>
        @forelse ($post as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->Post_title}}</td>
                <td>{{$p->Author_name}}</td>
                <td>{{$p->Publication_Date}}</td>
                <td>
                    <a href="{{route('myblog.show',$p->id)}}" class="btn btn-warning">Show</a>
                </td>
                </tr>
        @empty
                <p>no data found</p>
        @endforelse
    </tbody>
</table>

@endsection
