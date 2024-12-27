@extends('admin.layout.main')
@section('title','Create Page')
@section('style')

@endsection
@section('content')
<div class="container">
    <form action="/store-blog" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image" required>
        </div>
        <div class="form-group">
            <label for="name">Author</label>
            <input type="text" class="form-control" name="author" required>
        </div>
        <div class="form-group">
            <label for="name">Description</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="name">Category</label>
            <select class="form-control" name="category_id">
                @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection