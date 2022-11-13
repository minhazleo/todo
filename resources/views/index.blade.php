@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                                <button style="color:#fff; background-color: #102055; padding: 10px; margin-top: 5px; margin-bottom: 20px;" onclick="window.location.href='{{ route('posts.create') }}';">Add a New Todo</button>
                                <button style="color:#fff; background-color: #102055; padding: 10px; margin-left: 537px; margin-top: 5px; margin-bottom: 20px;" onclick="window.location.href='{{ route('categories.create') }}';">Add a New Category</button>
                                <!-- <a href="{{ route('posts.create') }}">Add New Todo</a> -->
                                    <ul class="list-unstyled mb-0">
                                      @foreach($posts as $post)
                                    </ul>
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="small text-muted">{{ $post->created_at }}</div>
                                            <h2 class="card-title">{{ $post->title }}</h2>
                                            <p class="card-text">{{ $post->category->name }}</p>
                                            <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                            <!-- <p class="card-text">{{ $post->post_text }}</p> -->
                                        </div>
                                    </div>
                                    @endforeach
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                </div>
            </div>
        </div>
@endsection