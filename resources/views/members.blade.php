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
            @if($member->fname != 'Web')
                @if($i%2==0)
                <div class="row">
                @endif
                    <div class="col-md-1">
                        <div class="members-circular">
                            {{-- <img src="{{ ($member->image != '')? $member->image : asset('images/commitee/person.jpg') }}" alt="{{ $member->name }}"> --}}
                            <img src="{{ $member->gender == 'Male' ? asset('images/avatar/male.jpg') : asset('images/avatar/female.jpg') }}" class="img-fluid rounded-circle">
                        </div>
                    </div>
                    <div class="col-md-5 margin-bottom">
                        <h5>{{ $member->fname }} {{ $member->lname }}</h5>
                        <p>Faculty of {{ $member->faculty }}</p>
                        <p>{{ $member->degree }}</p>
                        <ul class="list-unstyled">
                            @if($member->email != '')
                            <a class="team-social" href="mailto:{{ $member->email }}">
                                <i class="fa fa-envelope"></i>
                            </a>
                            @endif
                            @if($member->fb_link != '')
                            <a class="team-social" href="{{ $member->fb_url }}">
                                <i class="fa fa-facebook"></i>
                            </a>
                            @endif
                            @if($member->insta_link)
                            <a class="team-social" href="{{ $member->insta_url }}">
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
                @endif
            @endforeach
        </div>
    </div>
@endsection