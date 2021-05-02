@extends('layouts.master-social')

@section('title', 'Mora Hiking Club | Yo-Yo | Account')

@section('content')

@php
    $user = Auth::user();
@endphp
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
                {!! Form::open() !!}
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ $user->gender == 'Male' ? asset('images/avatar/male.jpg') : asset('images/avatar/female.jpg') }}" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <h4>Personal details</h4>
                            <!--Personal Details-->
                        </div>
                        <div class="row">
                            <div class="form-group bmd-form-group col-sm-6 padding-left-none">
                                {{ Form::label('fname', 'First Name', ['class' => 'bmd-label-floating']) }}
                                {{ Form::text('fname', $user->fname, ['class' => 'form-control', 'disabled' => '']) }}
                            </div>
                            <div class="form-group bmd-form-group col-sm-6 padding-left-none">
                                {{ Form::label('lname', 'Last Name', ['class' => 'bmd-label-floating']) }}
                                {{ Form::text('lname', $user->lname, ['class' => 'form-control', 'disabled' => '']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group bmd-form-group col-sm-12 padding-left-none">
                                {{ Form::label('fullname', 'Full Name', ['class' => 'bmd-label-floating']) }}
                                {{ Form::text('fullname', $user->fullname, ['class' => 'form-control', 'disabled' => '']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group bmd-form-group col-sm-3 padding-left-none" id="datepicker">
                                {{ Form::label('dob', 'Date of Birth', ['class' => 'bmd-label-floating']) }}
                                {{ Form::text('dob', date('M j, Y', strtotime($user->dob)), ['class' => 'form-control', 'disabled' => '']) }}
                            </div>
                            <div class="form-group bmd-form-group col-sm-3 padding-left-none">
                                {{ Form::label('nic_no', 'National ID Card No.', ['class' => 'bmd-label-floating']) }}
                                {{ Form::text('nic_no', $user->nic_no, ['class' => 'form-control', 'disabled' => '']) }}  
                            </div>
                            <div class="form-group bmd-form-group col-sm-2 padding-left-none">
                                {{ Form::label('gender', 'Gender', ['class' => 'bmd-label-floating']) }}
                                {{ Form::text('gender', $user->gender, ['class' => 'form-control', 'disabled' => '']) }}  
                            </div>
                            <div class="form-group bmd-form-group padding-left-none col-sm-4">
                                {{ Form::label('contact_no', 'Contact No.', ['class' => 'bmd-label-floating']) }}
                                {{ Form::text('contact_no', $user->contact_no, ['class' => 'form-control', 'disabled' => ''])}}
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <h4>Account Details</h4>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group bmd-form-group padding-left-none ">
                        {{ Form::label('email', 'Email', ['class' => 'bmd-label-floating']) }}
                        {{ Form::text('email', $user->email, ['class' => 'form-control', 'disabled' => '']) }}
                    </div>
                </div>
                <div class="row">
                    <h4>University Details</h4>
                    <!--University Details-->
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group bmd-form-group padding-left-none">
                        {{ Form::label('uni_reg_no', 'University Registration No.',['class'=>'bmd-label-floating']) }}
                        {{ Form::text('uni_reg_no', $user->uni_reg_no, ['class' => 'form-control', 'disabled' => '']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 form-group bmd-form-group padding-left-none">
                        {{ Form::label('faculty', 'Faculty') }}
                        {{ Form::text('faculty', $user->faculty, ['class' => 'form-control', 'disabled' => '']) }}
                    </div>
                    <div class="col-sm-5 form-group bmd-form-group padding-left-none">
                        {{ Form::label('degree', 'Degree program') }}
                        {{ Form::text('degree', $user->degree, ['class' => 'form-control', 'disabled' => '']) }}
                    </div>
                    <div class="col-sm-3 form-group bmd-form-group padding-left-none">
                        {{ Form::label('level', 'Level') }}
                        {{ Form::text('level', 'Level '.$user->level, ['class' => 'form-control', 'disabled' => '']) }}
                    </div>
                </div>
                <div class="row">
                    <h4>Club Details</h4>
                    <!--Club Details-->
                </div>

                @if($user->bio)
                <div class="row">
                    <div class="col-sm-12">
                        {{ Form::label('bio', 'Bio') }}
                        {{ Form::textarea('bio', $user->bio, ['class' => 'form-control', 'disabled' => '']) }}
                    </div>
                </div>
                @endif

                @if($user->fb_url)
                <div class="row">
                    <div class="col-sm-12">
                        {{ Form::label('fb_url', 'Facebook Url') }}
                        {{ Form::text('fb_url', $user->fb_url, ['class' => 'form-control', 'disabled' => '']) }}
                    </div>
                </div>
                @endif

                @if($user->insta_url)
                <div class="row">
                    <div class="col-sm-12">
                        {{ Form::label('insta_url', 'Instagram Url') }}
                        {{ Form::text('insta_url', $user->insta_url, ['class' => 'form-control', 'disabled' => '']) }}
                    </div>
                </div>
                @endif

                <div class="row">
                    <h4>Additional Details</h4>
                    <!--Additional Details-->
                </div>            
                <div class="row">
                    <div class="col-sm-12 form-group bmd-form-group padding-left-none">
                        {{ Form::label('kin_name', 'Next of Kin',['class'=>'bmd-label-floating']) }}
                        {{ Form::text('kin_name', $user->kin_name, ['class' => 'form-control', 'disabled' => '']) }}
                    </div>
                </div>            
                <div class="row">
                    <div class="col-sm-12 form-group bmd-form-group padding-left-none">
                        {{ Form::label('kinship', 'Kinship') }}            
                        {{ Form::text('kinship', $user->kinship, ['class' => 'form-control', 'disabled' => '']) }}
                    </div>
                </div>    
                <div class="row">
                    <div class="col-sm-6 form-group bmd-form-group padding-left-none">
                        {{ Form::label('kin_no', 'Contact No.',['class'=>'bmd-label-floating']) }}
                        {{ Form::text('kin_no', $user->kin_no, ['class' => 'form-control', 'disabled' => '']) }}
                    </div>

                    @if($user->kin_no1)
                    <div class="col-sm-6 form-group bmd-form-group padding-left-none">
                        {{ Form::label('kin_no1', 'Contact No.(Optional)',['class'=>'bmd-label-floating']) }}
                        {{ Form::text('kin_no1', $user->kin_no1, ['class' => 'form-control', 'disabled' => '']) }}
                    </div>
                    @endif

                </div>
                <div class="row">
                    <div class="col-sm-12 form-group bmd-form-group padding-left-none">
                        {{ Form::label('kin_address', 'Address',['class'=>'bmd-label-floating']) }}
                        {{ Form::text('kin_address', $user->kin_address, ['class' => 'form-control', 'disabled' => '']) }}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
    @if(!Session::has('success') )
        </div>
    @endif
    </div>
@endsection