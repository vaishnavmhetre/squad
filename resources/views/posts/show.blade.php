@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                        <p class="float-left">{{$post->description}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @forelse($comments as $comment)
                    <a href="blah#">
                        <div class="card mt-4">
                            <div class="card-header">
                            <span class="float-left">
                                <a href="#">
                                    {{$comment->creator->name}}
                                </a>
                            </span>
                                <span class="float-right text-muted">
                                <small>
                                    {{$comment->created_at->diffForHumans()}}
                                </small>
                            </span>
                            </div>
                            <div class="card-body pb-2">
                                <p class="float-left">{{$comment->description}}</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="well text-muted text-center mt-4">
                        Be the first to comment here :)
                    </div>
                @endforelse
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <hr>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-md-8">
                @auth
                <form action="{{route('posts.comments.store', ['post_id' => $post->id])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="description">Have something to say?</label>
                        <textarea name="description" id="description" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Comment</button>
                    </div>
                </form>
                @else
                    <div class="well text-muted text-center ">
                        Please <a href="{{route('login')}}">sign in</a> to comment on this post
                    </div>
                @endauth
            </div>
        </div>
    </div>
@endsection