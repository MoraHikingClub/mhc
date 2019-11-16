@extends('layouts.master')

@section('title')
    Mora Hiking Club | Create Knowledge card
@endsection

@section('content')
    @if(!Session::has('success'))
    <div class="post-contain">
    @endif
        <div class="container">
            <div class="row">
                <div class="col margin-bottom">
                    <h1>Create new knowledge card</h1>
                </div>
            </div>
            {!! Form::open(['route' => 'knowledge.store']) !!}
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
                        {{ Form::text('featured_img', null, ['class' => 'form-control margin-bottom-low', 'maxlength' => '255', 'id' => 'featured_img']) }}
                </div>
                <div class="col-sm-1">
                    <a href="" class="btn btn-default" type="button" data-toggle="modal" data-target="#fileupload">
                        <img src="{{ asset('images\upload_icon.png') }}" width="16">
                    </a>
                </div>
            </div>

            {{ Form::label('content', 'Content:') }}
            {{ Form::textarea('content', null, ['class' => 'form-control  margin-bottom-low']) }}

            {{ Form::submit('Create card', ['class' => 'btn btn-success btn-block']) }}
            {!! Html::linkRoute('knowledge.list', 'Cancel', null, ['class' => 'btn btn-danger btn-block margin-bottom']) !!}

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