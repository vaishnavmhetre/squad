@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-2 pl-3 pr-3">
                        <div class="mt-2">
                                <span>
                                    <span class="h5">Recent Posts</span>
                                    <a href="{{route('posts.create')}}" class="btn btn-link pt-1">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-12">
                @if(count($posts->toArray()) > 0)
                    <div class="card-columns">
                        @foreach($posts as $post)
                            <div class="card mt-2" onclick="window.location = '{{$post->link()}}'" id="post-instance">
                                <div class="card-body p">
                                    <p>{{$post->description}}</p>
                                </div>
                                <div class="card-footer clearfix">
                                    <a href="#" class="float-left">
                                        {{$post->creator->name}}
                                    </a>
                                    <small class="float-right text-muted" style="margin-top: 3px;">
                                        {{$post->created_at->diffForHumans()}}
                                    </small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class=" col-md-12 text-muted text-center h4 mt-4">
                        We have no posts for you right now :(
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection