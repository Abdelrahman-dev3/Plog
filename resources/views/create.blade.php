@extends('layout.app')

@section('title', "Create Post")

@section('content')
<div class="card">
    <div class="card-header bg-light">Create New Post</div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="list-style: none;text-align: center">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card-body">
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input value="{{old('title')}}" type="text" class="form-control" id="title" name="title" >
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" >{{old('description')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="creator" class="form-label">Post Creator</label>
                <select class="form-select" id="creator" name="creator" >
                    @foreach ($users as $user)
                        <option value="{{$user['id']}}"> {{$user['name']}} </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection