@extends('layouts.master-admin')

@section('title', 'Mora Hiking Club | Edit tag')

@section('content')
@if(!Session::has('success') )
<div class="post-contain">
    @endif
    <div class="container">
        <div class="row">
            <h1>Edit Tag</h1>
        </div>
        <div class="row">
            {{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) }}

            {{ Form::label('name', 'Tag name:')}}
            {{ Form::text('name', null, ['class' => 'form-control margin-bottom-low', 'maxlength' => '255', 'required' => '']) }}

            {{ Form::submit('Save changes', ['class' => 'btn btn-success']) }}

            {{ Form::close() }}
        </div>
    </div>
@if(!Session::has('success') )
</div>
@endif
@endsection