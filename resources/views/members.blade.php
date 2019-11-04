@extends('layouts.master')

@section('title')
    Mora Hiking Club | Members
@endsection

@section('content')

@include('layouts.social')
    <div class="members">
        <div class="container post-contain">
            <h2>Members</h2>
            <hr>
            @php
                $i=0;
            @endphp
            @foreach($members as $member)
            @if($i%2==0)
            <div class="row">
            @endif
                <div class="col-md-1">
                    <div class="members-circular">
                        <img src="{{ $member->image }}" alt="{{ $member->name }}">
                    </div>
                </div>
                <div class="col-md-5 margin-bottom">
                    <h5>{{ $member->name }}</h5>
                    <p>{{ $member->degree }}</p>
                    <p>{{ $member->faculty }}</p>
                    <ul class="list-unstyled">
                        <a class="team-social" href="mailto:{{ $member->email }}">
                            <i class="fa fa-envelope"></i>
                        </a>
                        @if($member->fb_link != '')
                        <a class="team-social" href="{{ $member->fb_link }}">
                            <i class="fa fa-facebook"></i>
                        </a>
                        @endif
                        @if($member->insta_link)
                        <a class="team-social" href="{{ $member->insta_link }}">
                            <i class="fa fa-instagram"></i>
                        </a>
                        @endif
                    </ul>
                </div>
                @if($i%2==1)
                </div>
                @endif
                @php
                    $i++;
                @endphp
            @endforeach
        </div>
    </div>
@endsection