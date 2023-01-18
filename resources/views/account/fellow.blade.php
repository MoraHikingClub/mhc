@extends('layouts.master-social')

@section('title', 'Mora Hiking Club | Fellow Member Registration')

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
                <!-- <div class="row"> -->
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe9QoZPEbcWEPDmM7H8RycexHwNUXaiE3Uhh8YDlW1z-Iksvw/viewform?embedded=true" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                <!-- </div> -->
                {!! Form::close() !!}
            </div>
    @if(!Session::has('success') )
        </div>
    @endif
    </div>
@endsection