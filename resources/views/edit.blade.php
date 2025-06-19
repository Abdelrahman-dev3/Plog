@extends('layout.app')

@section('title', "edit Post")

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
        <form action="{{route('post.update', $posts['id'] )}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" value="{{ $posts['title'] }} " name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{$posts['description']}}</textarea>
            </div>
            <div class="mb-3">
                <label for="creator" class="form-label">Post Creator</label>
                <select class="form-select" id="creator" name="creator" required>
                @foreach ($users as $user)
                    <option  {{ $user['id'] === $posts->user->id ? 'selected' : '' }} value="{{$user['id']}}"> {{$user['name']}} </option>
                @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection