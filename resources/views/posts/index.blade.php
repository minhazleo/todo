@extends('layouts.app')
@section('content')
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                <div class="card-header">Todo List</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="list-unstyled mb-0">
                                    <button style="color:#fff; background-color: #102055; padding: 10px; margin-top: 5px; margin-bottom: 20px;" onclick="window.location.href='{{ route('posts.create') }}';">Add New Todo</button>
                                    <!-- <a style="color:#fff; background-color: #102055;" href="{{ route('posts.create') }}">Add New Todo</a> -->
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Todo</th>
                                                <th>Category</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($posts as $post)
                                                <tr>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->category->name }}</td>
                                                <td>
                                                    <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>

                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div> 
@endsection
