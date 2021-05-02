@extends('layouts.master-social')

@section('title', 'Mora Hiking Club | Yo-Yo | Find my account')

@section('content')
@php
    $user = Auth::user();
@endphp
<div class="auth">
    @if(Session::has('error'))
            <div class="container">
                <div class="post-contain">
                    <div class="alert alert-{{ Session::has('success') ? 'success' : (Session::has('error') ? 'danger' : '' )}}" role="alert">
                        <div class="alert-icon">
                            @if(Session::has('success'))
                                <i class="material-icons">check</i>
                            @endif
                            @if(Session::has('error'))
                                <i class="material-icons">clear</i>
                            @endif
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                        <b>{{ Session::has('success') ? 'Success:' : (Session::has('error') ? 'Error' : '') }}</b> {{ Session::has('success') ? Session::get('success') : (Session::has('error') ? Session::get('error') : '') }}
                    </div>
                </div>
            </div>
            @endif
    @if(!(count($errors) > 0) || !Session::has('error'))
    <div class="post-contain">
        @endif
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="padding-left: 10px;padding-right: 10px;">
                        <div class="card-header card-header-success">
                            <div class="card-text">
                                <div class="text-center">
                                    <h4 class="card-title">Mora Hiking Club | Yo-Yo | Find my account</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            {!! Form::model($user, ['route' => 'resetpassword.post', 'method' => 'POST']) !!}
                            <div class="row">
                                <div class="col-sm-12 form-group bmd-form-group padding-left-none ">
                                    {{ Form::label('email', 'Email address', ['class' => 'bmd-label-floating']) }}
                                    {{ Form::email('email', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-sm-3 col-sm-6">
                                    {{ Form::submit('Find my account', ['class' => 'btn btn-success btn-block', 'id' => 'signup-btn']) }}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(!(count($errors) > 0))
    </div>
    @endif
</div>
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $('#confirm').on('keyup',function(){
        if($('#password').val() == $('#confirm').val()){
            $('.form-control-feedback').html('<i class="material-icons">done</i>');
            $('#confirm-pass').addClass('has-success');
            $('#confirm-pass').removeClass('has-danger');
        }else{
            $('.form-control-feedback').html('<i class="material-icons">clear</i>');
            $('#confirm-pass').addClass('has-danger');
            $('#confirm-pass').removeClass('has-success');
        }
    });
</script>
@endsection