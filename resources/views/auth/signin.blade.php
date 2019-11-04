@extends('layouts.master')

@section('title')
    Mora Hiking Club | Sign in
@endsection

@section('content')
    <div class="auth">
    @if(!Session::has('success') )
        <div class="post-contain">
    @endif
            <div class="container">
                @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        <strong>Error: </strong>{{ Session::get('error') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-title text-center card-top">
                                <h4>Mora Hiking Club | Signin</h4>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'signin']) !!}

                                {{ Form::label('email', 'Email:') }}
                                {{ Form::text('email', null, ['class' => 'form-control margin-bottom-low', 'required' => '', 'maxlength' => '255']) }}

                                {{ Form::label('password', 'Password:') }}
                                {{ Form::password('password', ['class' => 'form-control margin-bottom-low', 'required' => '', 'maxlength' => '60'])}}

                                {{ Form::checkbox('remember')}}{{ Form::label('remember', 'Remember me')}}

                                {{ Form::submit('Sign In', ['class' => 'btn btn-success btn-block'])}}

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @if(!Session::has('success') )
        </div>
    @endif
    </div>
@endsection

@section('script')
    <style>
        body{
            background-attachment: fixed;
            background-image: url('{{ asset('/images/auth.jpg') }}');
            background-size: cover;
        }
    </style>
@endsection