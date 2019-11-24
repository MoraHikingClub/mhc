@extends('layouts.master-admin')

@section('title')
Mora Hiking Club | Create new Post
@endsection

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
@endsection

@section('content')
@if(!Session::has('success') )
<div class="post-contain">
    @endif
    <div class="container">
        <div class="row">
            <div class="col margin-bottom">
                <h1>Create new blog post</h1>
            </div>
        </div>
        {!! Form::open(['route' => 'posts.store']) !!}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, ['class' => 'form-control margin-bottom-low', 'required' => '', 'maxlength' => '255']) }}

        {{ Form::label('post_type', 'Post type:') }}
        {{ Form::select('post_type', [
            'blog' => 'Blog Post',
            'news' => 'News Post'
    ], null, ['class' => 'form-control margin-bottom-low', 'required' => '', 'disabled' => ''])}}

        {{ Form::label('tags', 'Tags:', ['id' => 'tags_label']) }}
        <select class="form-control margin-bottom-low select2-multi" name="tags[]" multiple="multiple" id="tags">
            @foreach($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>

        {{ Form::label('directlink','Direct link', ['id' => 'directlink1', 'style' => 'display:none;']) }}
        {{ Form::text('directlink', null, ['class' => 'form-control margin-bottom-low', 'style' => 'display:none;', 'placeholder' => 'If there is a direct link add it here...']) }}

        {{ Form::label('featuredimg', 'Featured image') }}
        <div class="row">
            <div class="col-sm-11">
                {{ Form::text('featured_img', null, ['class' => 'form-control margin-bottom-low', 'id' => 'featuredimg']) }}
            </div>
            <div class="col-sm-1">
                <a href="" class="btn btn-default" type="button" data-toggle="modal" data-target="#fileupload">
                    <img src="{{ asset('images\upload_icon.png') }}" width="16">
                </a>
            </div>
        </div>

        {{ Form::label('body', 'Post Content', ['id' => 'labelBody']) }}
        {{ Form::textarea('body', null, ['class' => 'form-control margin-bottom']) }}

        {{ Form::submit('Create Post', ['class' => 'btn btn-success btn-block']) }}
        {!! Html::linkRoute('posts.list', 'Cancel', null, [ 'class' => 'btn btn-danger btn-block margin-bottom']) !!}
        {!! Form::close() !!}
    </div>
    @if(!Session::has('success') )
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
                    src="{{ asset('filemanager\dialog.php?type=1&field_id=featuredimg') }}">
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
<script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>
<script type="text/javascript">
    $('.select2-multi').select2();

</script>
<script type="text/javascript">
    $('#post_type').change(function(){
            console.log($('#post_type').val());
            if($('#post_type').val()=='news'){
                $('.select2, #tags_label').css('display','none');
                $('#directlink,#directlink1').css('display','block');
                $('#labelBody').text('News Content');
            }else{
                $('.select2, #tags_label').css('display','block');
                $('#directlink,#directlink1').css('display','none');
                $('#labelBody').text('Post Content');  
            }
        });

        $(document).ready(function(){
            @if(Request::get('post_type') == 'blog')
                $('#post_type').val('blog');
            @elseif(Request::get('post_type') == 'news')
                $('#post_type').val('news');
            @endif

            if($('#post_type').val()=='news'){
                $('.select2, #tags_label').css('display','none');
                $('#directlink,#directlink1').css('display','block');
                $('#labelBody').text('News Content');
            }else{
                $('.select2, #tags_label').css('display','block');
                $('#directlink,#directlink1').css('display','none');
                $('#labelBody').text('Post Content');  
            }
        });

        jQuery(function ($) {        
            $('form').bind('submit', function () {
                $(this).find(':input').prop('disabled', false);
            });
        });

</script>
@endsection