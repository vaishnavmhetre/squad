@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row justify-content-between">
                            <div class="col-6 text-left mt-2">
                                <h5>Recent Posts</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{route('posts.create')}}" class="btn btn-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @forelse($posts as $post)
                    <a href="blah#">
                        <div class="card mt-4">
                            <div class="card-header">
                            <span class="float-left">
                                <a href="#">
                                    {{$post->creator->name}}
                                </a>
                            </span>
                                <span class="float-right text-muted">
                                <small>
                                    {{$post->created_at->diffForHumans()}}
                                </small>
                            </span>
                            </div>
                            <div class="card-body pb-2">
                                <p class="float-left">{{$post->description}}

                                    <small>
                                        <a href="{{$post->link()}}">Show more...</a>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="well text-muted text-center mt-4">
                        We have no posts for now :(
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection