@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create new post</div>

                    <div class="card-body">
                        <form action="{{route('posts.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="description">
                                    Description
                                </label>
                                <textarea name="description" id="description" rows="10" placeholder="What would you like to share?" class="form-control"></textarea>
                            </div>

                            <div class="form-group mt-4 mb-2">
                                <button class="btn btn-primary" type="submit">Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection