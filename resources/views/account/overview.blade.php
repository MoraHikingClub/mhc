@extends('layouts.master-admin')

@section('title')
Mora Hiking Club | Overview
@endsection

@section('content')
<div class="post-contain">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card margin-bottom">
                    <div class="card-header">
                        Recent posts
                    </div>
                    <div class="card-body">
                        @if(count($posts)<1) <div class="card-title">
                            No posts yet.
                    </div>
                    <div class="card-text">
                        <a href="{{ route('posts.create',['post_type' => 'blog']) }}">Create new post</a>
                    </div>
                    @else
                    <div class="row">
                        <div class="col-md-6">
                    @php
                        $i=0;
                    @endphp
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Created At</th>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td><strong>{{ ++$i }}</strong></td>
                                <td>{{ $post->title }}</td>
                                <td>{!! substr(strip_tags($post->body), 0, 50)
                                    !!}{{ strlen(strip_tags($post->body)) > 50 ? '...' : '' }}</td>
                                <td>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        </div>
                        <div class="col-md-6">
                    <canvas id="postChart" width="100%"></canvas>
                    <script>
                            var ctx = document.getElementById('postChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: [
                                    @foreach($posts as $post)
                                        '{{ substr($post->title, 0, 20) }}',
                                    @endforeach
                                ],
                                datasets: [{
                                    label: '# of visit counts',
                                    data: [
                                        @foreach($posts as $post)
                                            {{ $post->visit_count }},
                                        @endforeach
                                    ],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                title:{
                                    display:true,
                                    text: 'Visit count on recent posts'
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                        </script>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card margin-bottom">
                <div class="card-header">
                    Recent news
                </div>
                <div class="card-body">
                    @if(count($news)<1) <div class="card-title">
                        No news yet.
                </div>
                <div class="card-text">
                    <a href="{{ route('posts.create',['post_type' => 'news']) }}">Create new news</a>
                </div>
                @else
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Created At</th>
                    </thead>
                    <tbody>
                        @foreach($news as $news1)
                        <tr>
                            <td><strong>{{ ++$i }}</strong></td>
                            <td>{{ $news1->title }}</td>
                            <td>{!! substr(($news1->body == '' ? $news1->slug : strip_tags($news1->body)), 0, 50)
                                !!}{{ strlen(($news1->body == '' ? $news1->slug : $news1->body)) > 50 ? '...' : '' }}
                            </td>
                            <td>{{ date('M j, Y h:ia', strtotime($news1->created_at)) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card margin-bottom">
                <div class="card-header">
                    Recent tags
                </div>
                <div class="card-body">
                    @if(count($news)<1) <div class="card-title">
                        No tags yet.
                </div>
                <div class="card-text">
                    <a href="{{ route('tags.index') }}">Create new tag</a>
                </div>
                @else
                <table class="table">
                        <thead>
                            <th>#</th>
                            <th>Tag Name</th>
                        </thead>
                        <tbody>
                            @foreach($tags as $tag)
                            <tr>
                                <td><strong>{{ $tag->id }}</strong></td>
                                <td>{{ $tag->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
        </div>
        <div class="col-md-8">
            <div class="card margin-bottom">
                <div class="card-header">
                    Recent albums
                </div>
                <div class="card-body">
                    @if(count($albums)<1) <div class="card-title">
                        No albums yet.
                </div>
                <div class="card-text">
                    <a href="{{ route('albums.create') }}">Create new album</a>
                </div>
                @else
                @php
                    $i=0;
                @endphp
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Album title</th>
                        <th>Album text</th>
                        <th>Created At</th>
                    </thead>
                    <tbody>
                        @foreach($albums as $album)
                        <tr>
                            <td><strong>{{ ++$i }}</strong></td>
                            <td>{{ $album->album_title }}</td>
                            <td>{!! substr(strip_tags($album->album_text), 0, 50) !!}{{ strlen(strip_tags($album->album_text)) > 50 ? '...' : '' }}</td>
                            <td>{{ date('M j, Y h:ia', strtotime($album->created_at)) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
    <div class="row">
            <div class="col-md-12">
                <div class="card margin-bottom">
                    <div class="card-header">
                        Recent knowledge cards
                    </div>
                    <div class="card-body">
                        @if(count($knowledges)<1) <div class="card-title">
                            No cards yet.
                    </div>
                    <div class="card-text">
                        <a href="{{ route('knowledge.create') }}">Create new card</a>
                    </div>
                    @else
                    <div class="row">
                        <div class="col-md-6">
                    @php
                        $i=0;
                    @endphp
                    <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Content</th>
                                <th>Created At</th>
                            </thead>
                            <tbody>
                                @foreach($knowledges as $knowledge)
                                <tr>
                                    <td><strong>{{ ++$i }}</strong></td>
                                    <td>{{ $knowledge->title }}</td>
                                    <td>{{ $knowledge->type }}</td>
                                    <td>{!! substr(strip_tags($knowledge->content), 0, 50) !!}{{ strlen(strip_tags($knowledge->content)) > 50 ? '...' : '' }}</td>
                                    <td>{{ date('M j, Y h:ia', strtotime($knowledge->created_at)) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                        <div class="col-md-6">
                    <canvas id="knowledgeChart" width="100%"></canvas>
                    <script>
                            var ctx = document.getElementById('knowledgeChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: [
                                    @foreach($knowledges as $knowledge)
                                        '{{ substr($knowledge->title, 0, 20) }}',
                                    @endforeach
                                ],
                                datasets: [{
                                    label: '# of visit counts',
                                    data: [
                                        @foreach($knowledges as $knowledge)
                                            {{ $knowledge->visit_count }},
                                        @endforeach
                                    ],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                title:{
                                    display:true,
                                    text: 'Visit count on recent knowledge cards'
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                        </script>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('stylesheets')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
@endsection