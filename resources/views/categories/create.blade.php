@extends('layouts.app')
@section('content')

        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                <div class="card-header">Creating a New Category</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form method="POST" action="{{ route('categories.store') }}">
                                @csrf
                                Name:
                                <br>
                                <input type="text" name="name" class="rounded-md shadow-sm border-gray-300">
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

