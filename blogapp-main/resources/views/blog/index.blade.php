@extends('admin.layout.main')
@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=0 ; @endphp
                @foreach($blogs as $blog)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$blog->title}}</td>
                    <td><img src="{{asset($blog->image)}}" alt="" width="50"></td>

                    <td>{{$blog->author}}</td>
                    <td>{{$blog->category->name}}</td>

                    <td>{{$blog->desc}}</td>

                    <td>
                        <a href="/edit-blog/{{$blog->id}}" class="btn btn-primary">Edit</a>
                        <a href="/delete-blog/{{$blog->id}}" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection