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
                        <li><h3><a href="{{ route('past-commitee-2019') }}">Committee 2019/2020</a></h3>(President: Hasitha Sandaruwan)</li><br>
                        <li><h3><a href="{{ route('past-commitee-2020') }}">Committee 2020/2021</a></h3>(President: Ramodha Pragnarathne)</li><br>
                        <li><h3><a href="{{ route('past-commitee-2021') }}">Committee 2021/2022</a></h3>(President: Umesh Mihiran)</li><br>
                        <li><h3><a href="{{ route('past-commitee-2022') }}">Committee 2022/2023</a></h3>(President: Gishan Dilruwan)</li><br>
                        <li><h3><a href="{{ route('past-committee-2023') }}">Committee 2023/2024</a></h3>(President: Thilina Mendis)</li>

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