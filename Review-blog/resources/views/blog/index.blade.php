@extends('dashboard.dashboard')
@section('blog')

<!-- Page Content -->
<div class="page-wrapper p-t-100 p-b-40">
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Slug</td>
            <td>Description</td>
            <td>Catagory</td>
            <td colspan=2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($blog as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->title}}</td>
            <td>{{$row->description}}</td>
            <td>{{$row->catagory}}</td>
            <td>
                <a href="{{ route('blog.edit',$row->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('blog.destroy', $row->id)}}" method="post"
                    onsubmit="return confirm('Do you really want to delete?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="col-sm-10 offset-sm-1">
    <tr>
        <td>
            <a class="btn btn-primary" href="{{ ('blog/create') }}">Add Blog</a>
        </td>
    </tr>
</div>
</div>
@endsection