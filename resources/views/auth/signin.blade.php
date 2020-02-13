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
                            <div class="card-header card-header-text card-header-success" style="margin-bottom: 30px;">
                                <div class="card-text">
                                    <div class="card-title text-center">
                                        <h4>Mora Hiking Club | Signin</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'signin']) !!}
                                <div class="form-group">
                                    {{ Form::text('email', null, ['class' => 'form-control margin-bottom-low', 'required' => '', 'maxlength' => '255', 'id' => 'emailinput']) }}
                                    <label for="input" class="control-label">Email address</label><i class="bar"></i>
                                </div>

                                <div class="form-group">
                                    {{ Form::password('password', ['class' => 'form-control margin-bottom-low', 'required' => '', 'maxlength' => '60', 'autocomplete' => ''])}}
                                    <label for="input" class="control-label">Password</label><i class="bar"></i>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" class="form-check-input" />
                                        <i class="helper"></i>
                                        Remember me
                                    </label>
                                </div>

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
    <script>
        $(document).ready(function(){
            $('#emailinput').keyup(function(){
                var VAL = this.value;

                var email = new RegExp('^[A-Za-z0-9._%+-]+@([A-Za-z0-9.-]+)\.([A-Za-z0-9]){2,4}$');

                if (email.test(VAL)) {
                    $('#email').addClass('has-success');
                    $('#email').removeClass('has-danger');

                }else{
                    $('#email').addClass('has-danger');
                    $('#email').removeClass('has-success');
                }
            });
        });
    </script>
    
@endsection

@section('stylesheets')
@endsection