@extends('layouts.master')

@section('title')
    Mora Hiking Club | Edit Comment
@endsection

@section('content')
@if(!Session::has('success') )
<div class="post-contain">
    @endif
    <div class="container">
        <div class="row">
            <h1>Edit Comment</h1>
        </div>
        <div class="row">
            {{ Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) }}

            {{ Form::label('comment', 'Comment:')}}
            {{ Form::textarea('comment', null, ['class' => 'form-control margin-bottom-low', 'required' => '', 'rows' => '3']) }}

            {{ Form::submit('Save changes', ['class' => 'btn btn-success']) }}

            {{ Form::close() }}
        </div>
    </div>
@if(!Session::has('success') )
</div>
@endif
@endsection
    