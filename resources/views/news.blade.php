@extends('layouts.master')

@section('title')
Mora Hiking Club | News
@endsection

@section('content')

@include('layouts.social')

<div class="news-contain">
    <div class="container">
        <div class="card-columns">
            @foreach($news as $news1)
                <div class="card">
                    @if($news1->featured_img)
                        <img src="{{ $news1->featured_img }}" class="card-img-top" alt="{{ $news1->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $news1->title }}</h5>
                        <p class="card-text">{!! substr(strip_tags($news1->body), 0, 300) !!}</p>
                        <a {{ (strstr($news1->slug, 'http') ? 'target="_blank"' : '') }} href="{{ (strstr($news1->slug, 'http') ? $news1->slug : 'news/'.$news1->slug) }}">
                            <button class="btn btn-success">Read more</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        @if(!count($news)>0)
            <div class="news-text-bg">
                <h3 class="text-center text-white">No any news yet, stay tuned!.</h3>
                <h5 class="text-center text-white">If you have any, <a href="{{ route('contact') }}">Let us know</a></h5>
            </div>
        @endif
    </div>
</div>
@endsection