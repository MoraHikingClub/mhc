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
                <div class="col-md-2">
                    <a href="{{ route('tags.index') }}" class="btn btn-block btn-default pull-right margin-bottom-low"><< Back</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('tags.edit', $tag->id ) }}" class="btn btn-block btn-success pull-right margin-bottom-low">Edit</a>
                </div>
                <div class="col-md-2">
                        {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE'])
                        !!}

                        {{ Form::submit('Delete', [ 'class' => 'btn btn-danger btn-block margin-bottom-low'])}}

                        {!! Form::close() !!}
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tag->posts as $post)
                            <tr>
                                <th>{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>
                                <td>
                                    @foreach($post->tags as $tag)
                                        <a href="{{ route('tags.show', $tag->id) }}"><span class="badge bg-dark text-white">{{ $tag->name }}</span></a>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('posts.show', $post->id ) }}" class="btn btn-default btn-block btn-sm">View</a>
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