@extends('layouts.master')

@section('title'){{ 'Mora Hiking Club | '.$knowledge->title }}@endsection

@section('content')
<div class="container">
    @if(!Session::has('success')  )
    <div class="post-contain">
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-2">
                        {!! Html::linkRoute('knowledge.index', '<< Back',null, [ 'class'=> 'btn btn-default btn-sm btn-block']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="margin-bottom">
                            {{ $knowledge->title }}
                        </h1>
                        <p>
                            {!! $knowledge->content !!}
                        </p>
                        <p class="card-text">
                            <i class="fa fa-eye view-count-icon"></i> {{ $knowledge->visit_count }}
                        </p>
                        <div class="text-muted margin-bottom">
                            <small>
                                Created : {{ date('M j, Y h:ia', strtotime($knowledge->created_at)) }}<br>
                                Last updated : {{ date('M j, Y h:ia', strtotime($knowledge->updated_at)) }}
                            </small>
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