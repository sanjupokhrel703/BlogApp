@extends('admin.layout.main')
@section('title','Update Page')
@section('content')
<div class="container">
    <form action="/update-blog" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="blog_id" value="{{$blog->id}}">
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control" value="{{$blog->title}}" name="name" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image" >
        </div>
        <div class="form-group">
            <label for="name">Author</label>
            <input type="text" class="form-control" value="{{$blog->author}}" name="author" required>
        </div>
        <div class="form-group">
            <label for="name">Description</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$blog->desc}}</textarea>
        </div>
        <div class="form-group">
            <label for="name">Category</label>
            <select class="form-control" name="category_id">
                @foreach ($categories as $item)
                <option value="{{$item->id}}" @if($blog->category_id == $item->id) selected @endif>{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection