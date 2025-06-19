@extends('layout.app')

@section('title',"View")

@section('content')
<div class="card mb-3">
    <div class="card-header bg-light">Post Info</div>
    <div class="card-body">
        <h5 class="card-title">Title: {{ $post['title'] }}</h5>
        <p class="card-text">Description: {{ $post['description'] }}</p>
    </div>
</div>

<div class="card">
    <div class="card-header bg-light">Post Creator Info</div>
    <div class="card-body">
        <h5 class="card-title">Name: {{ $post->user->name }}</h5>
        <p class="card-text">Email: {{ $post->user->email }}</p>
        <p class="card-text">Created At: {{ $post->user->created_at }}</p>
    </div>
</div>
@endsection

