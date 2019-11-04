@extends('layouts.master')

@section('title')
Mora Hiking Club | All posts
@endsection

@section('content')
@if(!Session::has('success') )
<div class="post-contain">
    @endif
    @php
        $i=0
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>All posts</h1>
            </div>
            <div class="col-md-4">
                <a href="{{ route('posts.create',['post_type' => 'blog']) }}" class="btn btn-lg btn-success btn-block">Create new post</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Created At</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td><strong>{{ ++$i }}</strong></td>
                            <td>{{ $post->title }}</td>
                            <td>{!! substr(strip_tags($post->body), 0, 50) !!}{{ strlen(strip_tags($post->body)) > 50 ? '...' : '' }}</td>
                            <td>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-4">
                                        {!! Html::linkRoute('posts.show', 'View', [$post->id], [ 'class' => 'btn btn-primary btn-block btn-sm']) !!}
                                    </div>
                                    <div class="col-sm-4">
                                        {!! Html::linkRoute('posts.edit', 'Edit', [$post->id], [ 'class' => 'btn btn-success btn-block btn-sm']) !!}
                                    </div>
                                    <div class="col-sm-4">
                                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                                        {{ Form::submit('Delete', [ 'class' => 'btn btn-danger btn-block btn-sm']) }}

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {!! $posts->links(); !!}
                </div>
            </div>
        </div>
    </div>
    @if(!Session::has('success') )
</div>
@endif
@endsection