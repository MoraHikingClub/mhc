@extends('layouts.master-admin')

@section('title')
    Mora Hiking Club | Create album
@endsection

@section('content')
    @if(!Session::has('success'))
    <div class="post-contain">
    @endif
        <div class="container">
            <div class="row">
                <div class="col margin-bottom">
                    <h1>Create new album</h1>
                </div>
            </div>
            {!! Form::open(['route' => 'albums.store']) !!}
            {{ Form::label('album_title', 'Album title:') }}
            {{ Form::text('album_title', null, ['class' => 'form-control margin-bottom-low', 'required' => '', 'maxlength' => '255']) }}

            {{ Form::label('album_url', 'Album url:') }}
            {{ Form::text('album_url', null, ['class' => 'form-control margin-bottom-low', 'required' => '', 'maxlength' => '255']) }}

            {{ Form::label('album_img', 'Album image:') }}
            <div class="row">
                <div class="col-sm-11">
                        {{ Form::text('album_img', null, ['class' => 'form-control margin-bottom-low', 'required' => '', 'maxlength' => '255', 'id' => 'album_img']) }}
                </div>
                <div class="col-sm-1">
                    <a href="" class="btn btn-default" type="button" data-toggle="modal" data-target="#fileupload">
                        <img src="{{ asset('images\upload_icon.png') }}" width="16">
                    </a>
                </div>
            </div>

            {{ Form::label('album_text', 'Album text:') }}
            {{ Form::textarea('album_text', null, ['class' => 'form-control  margin-bottom-low', 'required' => '', 'rows' => '5']) }}
            {{ Form::submit('Create album', ['class' => 'btn btn-success btn-block']) }}
            {!! Html::linkRoute('albums.index', 'Cancel', null, ['class' => 'btn btn-danger btn-block margin-bottom']) !!}

            {!! Form::close() !!}
        </div>
    @if(!Session::has('success'))
    </div>
    @endif
<!-- Modal -->
<div class="modal fade" id="fileupload" tabindex="-1" role="dialog" aria-labelledby="fileuploadTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fileuploadTitle">File upload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="550" frameborder="0"
                    src="{{ asset('filemanager\dialog.php?type=1&field_id=album_img') }}">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection