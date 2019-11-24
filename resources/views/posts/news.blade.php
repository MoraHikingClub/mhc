@extends('layouts.master-admin')

@section('title')
Mora Hiking Club | All news
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
                <h1>All news</h1>
            </div>
            <div class="col-md-4">
                <a href="{{ route('posts.create',['post_type' => 'news']) }}" class="btn btn-lg btn-success btn-block">Create new news</a>
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
                        <th>Body</th>
                        <th>Created At</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($news as $news1)
                        <tr>
                            <td><strong>{{ ++$i }}</strong></td>
                            <td>{{ $news1->title }}</td>
                            <td>{!! substr(($news1->body == '' ? $news1->slug : strip_tags($news1->body)), 0, 50) !!}{{ strlen(($news1->body == '' ? $news1->slug : $news1->body)) > 50 ? '...' : '' }}</td>
                            <td>{{ date('M j, Y h:ia', strtotime($news1->created_at)) }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-4">
                                        {!! Html::linkRoute('posts.show', 'View', [$news1->id], [ 'class' => 'btn btn-primary btn-block btn-sm']) !!}
                                    </div>
                                    <div class="col-sm-4">
                                        {!! Html::linkRoute('posts.edit', 'Edit', [$news1->id], [ 'class' => 'btn btn-success btn-block btn-sm']) !!}
                                    </div>
                                    <div class="col-sm-4">
                                        {!! Form::open(['route' => ['posts.destroy', $news1->id], 'method' => 'DELETE']) !!}

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
                    {!! $news->links(); !!}
                </div>
            </div>
        </div>
    </div>
    @if(!Session::has('success') )
</div>
@endif
@endsection
