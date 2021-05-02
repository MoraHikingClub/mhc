@extends('layouts.master-admin')

@section('title', 'Mora Hiking Club | Edit post')

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
@endsection

@section('content')
<div class="container">
    @if(!Session::has('success') )
    <div class="post-contain">
        @endif
        <div class="row">
            <div class="col-md-8 margin-bottom">
                {!! Form::model($post, ['route' => ['posts.update', $post->id ], 'method' => 'PUT']) !!}
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}

                {{ Form::label('post_type', 'Post type:') }}
                {{ Form::select('post_type', [
                    'blog' => 'Blog Post',
                    'news' => 'News Post'
                ], null, ['class' => 'form-control margin-bottom-low', 'required' => '', 'disabled' => ''])}}
                {{ Form::hidden('post_type', $post->post_type) }}

                @if($post->post_type == 'news')
                {{ Form::label('directlink','Direct link', ['id' => 'directlink1']) }}
                {{ Form::text('directlink', (strstr($post->slug, 'http') ? $post->slug : null), ['class' => 'form-control margin-bottom-low', 'placeholder' => 'If there is a direct link add it here...']) }}
                @else

                {{ Form::label('tags', 'Tags:', ['id' => 'tags_label']) }}
                {{ Form::select('tags[]', $tags, null, ['class' => 'form-control margin-bottom-low select2-multi', 'multiple' => 'multiple', 'id' => 'tags']) }}
                @endif

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

                {{ Form::label('body', ($post->post_type == 'news' ? 'News Content' : 'Post Content')) }}
                {{ Form::textarea('body', null, ['class' => 'form-control'])}}

            </div>
            <div class="col-md-4">
                <div class="jumbotron">
                    <div class="row">
                        <div class="margin-bottom">
                            <small>
                                <strong>
                                    Url :
                                </strong><br>
                                <a
                                    href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a><br>
                                <strong>
                                    Created :
                                </strong><br>
                                {{ date('M j, Y h:ia', strtotime($post->created_at)) }}<br>
                                <strong>
                                    Last updated :
                                </strong><br>
                                {{ date('M j, Y h:ia', strtotime($post->updated_at)) }}

                            </small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.show', 'Cancel', [$post->id], [ 'class' => 'btn btn-danger
                            btn-block margin-bottom-low']) !!}
                        </div>
                        <div class="col-sm-6">
                            {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block margin-bottom-low']) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Html::linkRoute(($post->post_type == 'blog' ? 'posts.list' : 'posts.news_list'), '<<
                                Back', null, [ 'class'=> 'btn btn-default btn-block']) !!}
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        @if(!Session::has('success') )
    </div>
    @endif
</div>
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
@endsection