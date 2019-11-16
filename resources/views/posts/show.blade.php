@extends('layouts.master')

@section('title')
Mora Hiking Club | {{ $post->title }}
@endsection

@section('content')
<div class="container">
    @if(!Session::has('success') )
    <div class="post-contain">
        @endif
        <div class="row">
            <div class="col-md-8">
                <h1 class="margin-bottom">
                    {{ $post->title }}
                </h1>
                <p>
                    {!! $post->body !!}
                </p>
                <p><i class="fa fa-eye view-count-icon"></i> {{ $post->visit_count }} <i class="fa fa-comment comment-count-icon"></i> {{ count($post->comments) }}</p>
                <div class="text-muted margin-bottom">
                    <small>
                        Created : {{ date('M j, Y h:ia', strtotime($post->created_at)) }}<br>
                        Last updated : {{ date('M j, Y h:ia', strtotime($post->updated_at)) }}
                    </small>
                </div>
                <hr>
                <div class="tags margin-bottom">
                    @foreach($post->tags as $tag)
                    <span class="badge bg-dark text-white">{{ $tag->name }}</span>
                    @endforeach
                </div>
                <div class="backend-comments">
                    <h3>Comments <small>{{ $post->comments()->count() }} total</small></h3>
                    <table class="table margin-bottom">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Comment</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($post->comments as $comment)
                                <tr>
                                    <td>{{ $comment->name }}</td>
                                    <td>{{ $comment->comment }}</td>
                                    <td>
                                        <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                                        {{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE', 'name' => 'form'.$comment->id ]) }}
                                        <a href="#" class="btn btn-danger btn-xs" onclick="form{{ $comment->id }}.submit();"><i class="fa fa-trash"></i></a>
                                        {{ Form::close() }}                                    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- only visible to editors -->
            <div class="col-md-4">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.edit', 'Edit', [$post->id], [ 'class' => 'btn btn-success
                            btn-block margin-bottom-low']) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                            {{ Form::submit('Delete', [ 'class' => 'btn btn-danger btn-block margin-bottom-low'])}}

                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Html::linkRoute('posts.list', '<< Back', null, [ 'class'=> 'btn btn-default btn-block'])
                                !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of editor section -->

    </div>
    @if(!Session::has('success') )
    </div>
    @endif
</div>
@endsection