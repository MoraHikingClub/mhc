@extends('layouts.master-admin')

@section('title', 'Mora Hiking Club | All tags')

@section('content')
@if(!Session::has('success') )
<div class="post-contain">
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>All tags</h1>
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Tag Name</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($tags as $tag)
                        <tr>
                            <td><strong>{{ $tag->id }}</strong></td>
                            <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
                            <td>
                                <div class="row">
                                    
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="jumbotron">
                    {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
                    <h3>New tag</h3>
                    {{ Form::label('name', 'Tag name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control margin-bottom-low', 'maxlength' => '255', 'required' => '']) }}

                    {{ Form::submit('Create new tag', ['class' => 'btn btn-success btn-block']) }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @if(!Session::has('success') )
</div>
@endif
@endsection

