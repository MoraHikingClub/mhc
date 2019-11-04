@extends('layouts.master')

@section('title')
    Mora Hiking Club | {{ $tag->name }} Tag
@endsection


@section('content')
    @if(!Session::has('success') )
    <div class="post-contain">
        @endif
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>{{ $tag->name }} Tag <small>{{ $tag->posts()->count() }} Posts</small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Tags</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tag->posts as $post)
                            <tr>
                                <th>{{ $post->id }}</th>
                                <td><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></td>
                                <td>
                                    @foreach($post->tags as $tag)
                                        <a href="{{ route('tags.view', $tag->name) }}"><span class="badge bg-dark text-white">{{ $tag->name }}</span></a>
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    @if(!Session::has('success') )
    </div>
    @endif
@endsection