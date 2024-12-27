@extends('admin.layout.main')
@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=0 ; @endphp
                @foreach($categories as $cat)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$cat->name}}</td>
                    <td><img src="{{asset($cat->image)}}" alt="" width="50"></td>
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection