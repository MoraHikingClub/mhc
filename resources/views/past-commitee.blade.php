@extends('layouts.master')

@section('title', 'Mora Hiking Club | Commitee')

@section('content')
    <!--content-->
    <!--content image-->
    @include('layouts.social')

    <div class="commitee-content" style="height:100vh">
            <div class="row">
                <div class="col text-center">
                    <p>Meet our precious team who work day night to give you the best experience</p>
                    <hr>
                </div>
            </div>
            
            <!--Executive members-->
            <section >
                <div class="container">
                    <ul class="commitee-list">
                        <li><h3><a href="{{ route('past-commitee-2019') }}">Commitee 2019/2020</a></h3>(President: Hasitha Sandaruwan)</li><br>
                        <li><h3><a href="{{ route('past-commitee-2020') }}">Commitee 2020/2021</a></h3>(President: Ramodha Pragnarathne)</li><br>
                        <li><h3><a href="{{ route('past-commitee-2021') }}">Commitee 2021/2022</a></h3>(President: Gishan Dilruwan)</li>
                    </ul>
                </div>
                
            </section>
    </div>
@endsection

@section('stylesheets')
    <style>
        ::-webkit-scrollbar{
            background: transparent;
        }

        ::-webkit-scrollbar-thumb{
            border-radius: 10px;
            background: rgba(255,255,255,0.3);
        }
    </style>
@endsection