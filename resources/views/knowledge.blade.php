@extends('layouts.master')

@section('title')
Mora Hiking Club | Hiking Knowledge
@endsection

@section('content')

@include('layouts.social')
<div class="knowledge-contain">
    <div class="container">
        <div class="row margin-bottom">
            <div class="col-md-12">
                <p class="text-light">If you're gearing up to head out on a hike, you certainly want to make sure you
                    have all the right equipment and knowledge to gain the most output otherwise your trip will quickly
                    become an uncomfortable experience.
                    <h5 class="text-light">That why we are here to help you</h5>
                </p>
            </div>
        </div>
        <ul class="nav nav-tabs" id="knowledgeTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="knot-tab" data-toggle="tab" href="#knot" role="tab" aria-controls="knot"
                    aria-selected="true"><i class="fa fa-link"></i> Knots</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="firstaid-tab" data-toggle="tab" href="#firstaid" role="tab"
                    aria-controls="firstaid" aria-selected="false"><i class="fa fa-medkit"></i> First Aid</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="map-tab" data-toggle="tab" href="#map" role="tab" aria-controls="map"
                    aria-selected="false"><i class="fa fa-map"></i> Map reading</a>
            </li>
        </ul>
        <div class="tab-content knowledge-tab" id="knowledgeTabContent">
            <div class="tab-pane fade show active" id="knot" role="tabpanel" aria-labelledby="knot-tab">
                @php
                    $i=0;
                @endphp
                @foreach($knowledges as $knowledge)
                @if($knowledge->type == 'knot')
                @php
                    $i++;
                @endphp
                <div class="card mb-3 gallery-card">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $knowledge->title }}</h5>
                                <p class="card-text">
                                    {{ substr(strip_tags($knowledge->content), 0, 300) }}{{ strlen(strip_tags($knowledge->content))>300 ? '...' : '' }}
                                </p>
                                <p class="card-text">
                                    <i class="fa fa-eye view-count-icon"></i> {{ $knowledge->visit_count }}
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated
                                        {{ date('M j, Y h:ia', strtotime($knowledge->updated_at)) }}</small></p>
                                {{ Html::linkRoute('knowledge.singleCard', 'Read more', [$knowledge->id], ['class' => 'btn btn-success'])}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            @if($knowledge->featured_img)
                            <div class="gallery-item">
                                <img src="{{ $knowledge->featured_img }}" class="card-img gallery-img"
                                    alt="{{ $knowledge->title }}">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @if(!$i)
                    <h3 class="text-light text-center">When you reach the end of your rope, tie a <big><b>knot</b></big> int it and hnag on.</h3>
                @endif
            </div>
            <div class="tab-pane fade" id="firstaid" role="tabpanel" aria-labelledby="firstaid-tab">
                @php
                    $i=0;
                @endphp
                @foreach($knowledges as $knowledge)
                @if($knowledge->type == 'firstaid')
                @php
                    $i++;
                @endphp
                <div class="card mb-3 gallery-card">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $knowledge->title }}</h5>
                                <p class="card-text">
                                    {{ substr(strip_tags($knowledge->content), 0, 300) }}{{ strlen(strip_tags($knowledge->content))>300 ? '...' : '' }}
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated
                                        {{ date('M j, Y h:ia', strtotime($knowledge->updated_at)) }}</small></p>
                                {{ Html::linkRoute('knowledge.singleCard', 'Read more', [$knowledge->id], ['class' => 'btn btn-success'])}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            @if($knowledge->featured_img)
                            <div class="gallery-item">
                                <img src="{{ $knowledge->featured_img }}" class="card-img gallery-img"
                                    alt="{{ $knowledge->title }}">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @if(!$i)
                    <h3 class="text-light text-center"><big><b>Safety</b></big> brings first aid to the uninjured.</h3>
                @endif
            </div>
            <div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="map-tab">
                @php
                    $i=0;
                @endphp
                @foreach($knowledges as $knowledge)
                @if($knowledge->type == 'map')
                @php
                    $i++;
                @endphp
                <div class="card mb-3 gallery-card">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $knowledge->title }}</h5>
                                <p class="card-text">
                                    {{ substr(strip_tags($knowledge->content), 0, 300) }}{{ strlen(strip_tags($knowledge->content))>300 ? '...' : '' }}
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated
                                        {{ date('M j, Y h:ia', strtotime($knowledge->updated_at)) }}</small></p>
                                {{ Html::linkRoute('knowledge.singleCard', 'Read more', [$knowledge->id], ['class' => 'btn btn-success'])}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            @if($knowledge->featured_img)
                            <div class="gallery-item">
                                <img src="{{ $knowledge->featured_img }}" class="card-img gallery-img"
                                    alt="{{ $knowledge->title }}">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @if(!$i)
                    <h3 class="text-light text-center">If you don't know where you are, a <big><b>map</b></big> won't help.</h3>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('stylesheets')
<style>
    ::-webkit-scrollbar {
        background: transparent;
    }

    ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.3);
    }

    .gallery-card:hover {
        transform: scale(1);
    }

    .nav-tabs>.nav-item>.nav-link {
        background: #28a745;
        color: #fff;
    }

    .nav-tabs>.nav-item>.nav-link.active {
        color: #495057;
        background-color: #fff;
    }

    .nav-tabs>.nav-item{
        padding:0 2px;
    }
</style>
@endsection