@extends('layouts.master-social')

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
                        <div class="alert-icon">
                            <i class="material-icons">error_outline</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                            <b>Error: </b>{{ Session::get('error') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header card-header-text card-header-success">
                                <div class="card-text">
                                    <div class="card-title text-center">
                                        <h4>Mora Hiking Club | Signin</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'signin','autocomplete'=>'off']) !!}
                                <div class="form-group bmd-form-group">
                                    <label for="email" class="bmd-label-floating" style="position: absolute;left:40px;">Email address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">email</i>
                                            </span>
                                        </div>
                                        
                                        {{ Form::text('email', null, ['class' => 'form-control margin-bottom-low', 'required' => '', 'maxlength' => '255']) }}
                                    </div>
                                </div>

                                <div class="form-group bmd-form-group">
                                    <label for="password" class="bmd-label-floating"  style="position: absolute;left:40px;">Password</label><i class="bar"></i>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">lock</i>
                                            </span>
                                        </div>
                                        {{ Form::password('password', ['class' => 'form-control margin-bottom-low', 'required' => '', 'maxlength' => '60'])}}
                                    </div>
                                </div>
                                <div class="form-check margin-bottom"  style="padding-left:5px;">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember">
                                        Remember me
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                {{-- <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" class="form-check-input" />
                                        <i class="helper"></i>
                                        Remember me
                                    </label>
                                </div> --}}

                                {{ Form::submit('Sign In', ['class' => 'btn btn-success btn-block'])}}
                                <div style="margin-top:20px">
                                    Don't have an account? {!!Html::link(route('signup'),'Join us now',['class' => 'text-info']) !!}<br>
                                    Forgot your password? {!!Html::link(route('resetpassword.view'),'Reset password',['class' => 'text-info']) !!}
                                </div>
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