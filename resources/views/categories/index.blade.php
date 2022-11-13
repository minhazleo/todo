@extends('layouts.app')
@section('content')
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="list-unstyled mb-0">
                                    <button style="color:#fff; background-color: #102055; padding: 10px; margin-top: 5px; margin-bottom: 20px;" onclick="window.location.href='{{ route('categories.create') }}';">Add New Category</button>
                                    <!-- <a href="{{ route('categories.create') }}">Add New Category</a> -->
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <form method="POST" action="{{ route('categories.destroy', $category) }}">
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
