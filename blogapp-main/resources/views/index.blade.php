@extends('layout.main')
@section('content')
<div class="container p-4">
    <div class="row">
        @foreach($blogs as $blog)
        <div class="col-md-4 shadow">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset($blog->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> {{$blog->title}}</h5>
                    <p class="card-text"> {{$blog->author}}</p>
                    <p class="card-text"> {{$blog->created_at->format('M d Y')}}</p>

                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection