@extends('layouts.master-admin')

@section('title')
Mora Hiking Club | {{ $knowledge->title }}
@endsection

@section('content')
<div class="container">
    @if(!Session::has('success') )
    <div class="post-contain">
        @endif
        <div class="row">
            <div class="col-md-8">
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

            <!-- only visible to editors -->
            <div class="col-md-4">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('knowledge.edit', 'Edit', [$knowledge->id], [ 'class' => 'btn btn-success
                            btn-block margin-bottom-low']) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(['route' => ['knowledge.destroy', $knowledge->id], 'method' => 'DELETE']) !!}

                            {{ Form::submit('Delete', [ 'class' => 'btn btn-danger btn-block margin-bottom-low'])}}

                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Html::linkRoute('knowledge.list', '<< Back', null, [ 'class'=> 'btn btn-default btn-block'])
                                !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of editor section -->

    </div>
    @if(!Session::has('success') )
    </div>
    @endif
</div>
@endsection