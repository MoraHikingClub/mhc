@extends('layouts.master')

@section('title')
Mora Hiking Club | {{ $post->title }}
@endsection

@section('content')
<div class="container">
    @if(!Session::has('success')  )
    <div class="post-contain">
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-2">
                        {!! Html::link('blog', '<< Back', [ 'class'=> 'btn btn-default btn-sm btn-block']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="margin-bottom">
                            {{ $post->title }}
                        </h1>
                        <p>
                            {!! $post->body !!}
                        </p>
                        <div class="text-muted margin-bottom">
                            <small>
                                Created : {{ date('M j, Y h:ia', strtotime($post->created_at)) }}<br>
                                Last updated : {{ date('M j, Y h:ia', strtotime($post->updated_at)) }}
                            </small>
                        </div>
                        <hr>
                        <div class="tags margin-bottom">
                            @foreach($post->tags as $tag)
                            <a href="{{ route('tags.view', $tag->name) }}"><span class="badge bg-dark text-white">{{ $tag->name }}</span></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
                <div class="row margin-bottom">
                    <div class="col-md-9">
                        @if(!Auth::check())
                            {{ Form::text('name', null, ['class' => 'form-control margin-bottom-low', 'required' => '', 'placeholder' => 'Name', 'maxlength' => '255']) }}
                        @endif

                        {{ Form::textarea('comment', null, ['class' => 'form-control margin-bottom-low', 'required' => '', 'placeholder' => 'Comment', 'required' => '', 'rows' => '3' ]) }}
                    </div>
                    <div class="col-md-3">
                        {{ Form::submit('Add comment', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                    {{ Form::close() }}
                </div>
                @foreach($post->comments as $comment)
                    <div class="row">
                        <div class="col-md-12 margin-bottom comment">
                            <img src="{{ asset('images/commitee/person.jpg') }}" class="comment-author-img">
                            <div class="comment-content">
                                <div class="comment-name">
                                    <p><strong>{{ $comment->name }}</strong></p>
                                    <div class="text-muted">{{ date('F nS, Y - g:iA', strtotime($comment->created_at )) }}</div>
                                </div>
                                <div class="comment-comment">
                                    <p>{{ $comment->comment }}</p>
                                </div>
                                @if(Auth::check())
                                    @if(Auth::user()->fname.' '.Auth::user()->lname == $comment->name)
                                    {{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE', 'name' => 'form'.$comment->id ]) }}
                                        <p><small><a href="{{ route('comments.edit', $comment->id) }}">Edit</a>   <a href="#" onclick="form{{ $comment->id }}.submit();">Delete</a></small></p>
                                    {{ Form::close() }}
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @if(!Session::has('success') )
    </div>
    @endif
</div>
@endsection