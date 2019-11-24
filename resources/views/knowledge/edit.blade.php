@extends('layouts.master-admin')

@section('title')
    Mora Hiking Club | Edit knowledge card
@endsection

@section('content')
    @if(!Session::has('success'))
    <div class="post-contain">
    @endif
    {!! Form::model($knowledge, ['route' => ['knowledge.update', $knowledge->id], 'method' => 'PUT']) !!}
        <div class="container">
            <div class="row">
                <div class="col-md-8 margin-bottom">
                    
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', null, ['class' => 'form-control margin-bottom-low', 'required' => '', 'maxlength' => '255']) }}

                    {{ Form::label('type', 'Card type:') }}
                    {{ Form::select('type', [
                        'knot' => 'Knot',
                        'map' => 'Map reading',
                        'firstaid' => 'First Aid'
                    ], null,['class' => 'form-control', 'required' => '', 'placeholder' => '']) }}

                    {{ Form::label('featured_img', 'Featured image:') }}
                    <div class="row">
                        <div class="col-sm-11">
                                {{ Form::text('featured_img', null, ['class' => 'form-control margin-bottom-low', 'required' => '', 'maxlength' => '255', 'id' => 'featured_img']) }}
                        </div>
                        <div class="col-sm-1">
                            <a href="" class="btn btn-default" type="button" data-toggle="modal" data-target="#fileupload">
                                <img src="{{ asset('images\upload_icon.png') }}" width="16">
                            </a>
                        </div>
                    </div>

                    {{ Form::label('content', 'Content:') }}
                    {{ Form::textarea('content', null, ['class' => 'form-control  margin-bottom-low']) }}

                </div>
                <div class="col-md-4">
                    <div class="jumbotron">
                        <div class="row">
                            <div class="margin-bottom">
                                <small>
                                    <strong>
                                        Created :
                                    </strong><br>
                                    {{ date('M j, Y h:ia', strtotime($knowledge->created_at)) }}<br>
                                    <strong>
                                        Last updated :
                                    </strong><br>
                                    {{ date('M j, Y h:ia', strtotime($knowledge->updated_at)) }}
    
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
                                {!! Html::linkRoute('knowledge.list', '<< Back', null, [ 'class'=> 'btn btn-default btn-block']) !!}
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
                    src="{{ asset('filemanager\dialog.php?type=1&field_id=featured_img') }}">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.tiny.cloud/1/dflv1kec6z0gvxb8d4vg7epqxrjix9w0g7uo0uakrkqxovur/tinymce/5/tinymce.min.js">
</script>
<script>
    tinymce.init({
            selector:'textarea',
            height: 500,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
                ],
            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
            toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
            image_advtab: true ,
   
            external_filemanager_path:"/filemanager/",
            filemanager_title:"File Manager" ,
            external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
        });
</script>
@endsection