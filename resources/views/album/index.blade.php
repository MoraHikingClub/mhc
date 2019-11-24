@extends('layouts.master-admin')

@section('title')
Mora Hiking Club | All albums
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
                <h1>All albums</h1>
            </div>
            <div class="col-md-4">
                <a href="{{ route('albums.create') }}" class="btn btn-lg btn-success btn-block">Create new album</a>
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
                        <th>Album title</th>
                        <th>Album text</th>
                        <th>Created At</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($albums as $album)
                        <tr>
                            <td><strong>{{ ++$i }}</strong></td>
                            <td>{{ $album->album_title }}</td>
                            <td>{!! substr(strip_tags($album->album_text), 0, 50) !!}{{ strlen(strip_tags($album->album_text)) > 50 ? '...' : '' }}</td>
                            <td>{{ date('M j, Y h:ia', strtotime($album->created_at)) }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-6">
                                        {!! Html::linkRoute('albums.edit', 'Edit', [$album->id], [ 'class' => 'btn btn-success btn-block btn-sm']) !!}
                                    </div>
                                    <div class="col-sm-6">
                                        {!! Form::open(['route' => ['albums.destroy', $album->id], 'method' => 'DELETE']) !!}

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
                    {!! $albums->links(); !!}
                </div>
            </div>
        </div>
    </div>
    @if(!Session::has('success') )
</div>
@endif
@endsection