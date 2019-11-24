@extends('layouts.master-admin')

@section('title')
Mora Hiking Club | All knowledge cards
@endsection

@section('content')
@if(!Session::has('success') )
<div class="post-contain">
    @endif
    @php
        $i=0
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>All knowledge cards</h1>
            </div>
            <div class="col-md-4">
                <a href="{{ route('knowledge.create') }}" class="btn btn-lg btn-success btn-block">Create new card</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Content</th>
                        <th>Created At</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($knowledges as $knowledge)
                        <tr>
                            <td><strong>{{ ++$i }}</strong></td>
                            <td>{{ $knowledge->title }}</td>
                            <td>{{ $knowledge->type }}</td>
                            <td>{!! substr(strip_tags($knowledge->content), 0, 50) !!}{{ strlen(strip_tags($knowledge->content)) > 50 ? '...' : '' }}</td>
                            <td>{{ date('M j, Y h:ia', strtotime($knowledge->created_at)) }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-4">
                                        {!! Html::linkRoute('knowledge.show', 'View', [$knowledge->id], [ 'class' => 'btn btn-primary btn-block btn-sm']) !!}
                                    </div>
                                    <div class="col-sm-4">
                                        {!! Html::linkRoute('knowledge.edit', 'Edit', [$knowledge->id], [ 'class' => 'btn btn-success btn-block btn-sm']) !!}
                                    </div>
                                    <div class="col-sm-4">
                                        {!! Form::open(['route' => ['knowledge.destroy', $knowledge->id], 'method' => 'DELETE']) !!}

                                        {{ Form::submit('Delete', [ 'class' => 'btn btn-danger btn-block btn-sm']) }}

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {!! $knowledges->links(); !!}
                </div>
            </div>
        </div>
    </div>
    @if(!Session::has('success') )
</div>
@endif
@endsection