@extends('layouts.master-admin')

@section('title')
    Mora Hiking Club | Edit album
@endsection

@section('content')
    @if(!Session::has('success'))
    <div class="post-contain">
    @endif
    {!! Form::model($album, ['route' => ['albums.update', $album->id], 'method' => 'PUT']) !!}
        <div class="container">
            <div class="row">
                <div class="col-md-8 margin-bottom">
                    
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

                </div>
                <div class="col-md-4">
                    <div class="jumbotron">
                        <div class="row">
                            <div class="margin-bottom">
                                <small>
                                    <strong>
                                        Created :
                                    </strong><br>
                                    {{ date('M j, Y h:ia', strtotime($album->created_at)) }}<br>
                                    <strong>
                                        Last updated :
                                    </strong><br>
                                    {{ date('M j, Y h:ia', strtotime($album->updated_at)) }}
    
                                </small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block margin-bottom-low']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {!! Html::linkRoute('albums.index', '<< Back', null, [ 'class'=> 'btn btn-default btn-block']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
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