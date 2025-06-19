@extends("layout.app")

@section('title', "Blog Posts")

@section('content')
<a href="{{ route('post.create') }}" class="btn btn-success mb-3">Create Post</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Posted By</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr >
            <td>{{ $post['id'] }}</td>
            <td>{{ $post['title'] }}</td>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post['created_at']->format('d/m/Y h:i:s') }}</td>
            <td>
                <a href="{{ route('post.show', $post['id']) }}" class="btn btn-primary">View</a>
                <a href="{{ route('post.edit', $post['id']) }}" class="btn btn-warning">Edit</a>
                <form style="display: inline" action="{{ route('post.destroy',$post['id']) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection




