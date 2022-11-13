@extends('layouts.app')
@section('content')

        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                <div class="card-header">Creating Todos</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form method="POST" action="{{ route('posts.store') }}">
                                @csrf
                                Title:
                                <br>
                                <input type="text" name="title" class="rounded-md shadow-sm border-gray-300">
                                <br><br>
                                
                                Comments:
                                <br>
                                <textarea name="post_text" id="" cols="30" rows="10" class="rounded-md shadow-sm border-gray-300"></textarea>
                                <br><br>

                                Category
                                <br>

                                <select name="category_id" class="rounded-md shadow-sm border-gray-300" id="" placeholder="Choose Category">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>


                                <br><br>

                                <button type="submit" style="color:#fff; background-color: #000;" class="inline-flex items-center px-4 py-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">SAVE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

