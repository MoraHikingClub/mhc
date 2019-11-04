@extends('layouts.master')

@section('title')
Mora Hiking Club | {{ $news->title }}
@endsection

@section('content')
<div class="container">
    @if(!Session::has('success')  )
    <div class="post-contain">
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-2">
                        {!! Html::linkRoute('posts.news', '<< Back', null, [ 'class'=> 'btn btn-default btn-sm btn-block']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="margin-bottom">
                            {{ $news->title }}
                        </h1>
                        <p>
                            {!! $news->body !!}
                        </p>
                        <div class="text-muted margin-bottom">
                            <small>
                                Created : {{ date('M j, Y h:ia', strtotime($news->created_at)) }}<br>
                                Last updated : {{ date('M j, Y h:ia', strtotime($news->updated_at)) }}
                            </small>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        @if(!Session::has('success') )
    </div>
    @endif
</div>
@endsection