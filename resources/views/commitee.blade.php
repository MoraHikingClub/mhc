@extends('layouts.master')

@section('title', 'Mora Hiking Club | Commitee')

@section('content')
    <!--content-->
    <!--content image-->
    @include('layouts.social')

    <div class="commitee-content">
            <div class="row">
                <div class="col text-center">
                    <p>Meet our precious team who work day night to give you the best experience</p>
                    <hr>
                </div>
            </div>

            <!--Executive Committee-->
            <section>
                <div class="row">
                    <div class="col text-center">
                            <h1>Executive Committee</h1>
                    </div>
                </div>
                <div class="row top-padding justify-content-center" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Senior Treasurer' , 'name' => 'Senior lecturer Mr.Suranga Jayasena' , 'image' => asset('images/commitee/SurangaNew.png') , 'email' => 'suranga@uom.lk' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'President' , 'name' => 'Harshana Wijesekara' , 'image' => asset('images/commitee/2024/Excom/President/Harshana.png') , 'email' => 'harshanawijesekara727@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Secretary' , 'name' => 'Tharindi Heenkenda' , 'image' => asset('images/commitee/2024/Excom/Secretary/Tharindi.png') , 'email' => 'tharindih99@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Assistant Secretary' , 'name' => 'Nijayee Umaya' , 'image' => asset('images/commitee/2024/Excom/Asst_Secretary/Umaya1.png') , 'email' => 'nijayeeumaya9@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                </div>
                <div class="row top-padding scroll-commitee margin-bottom-low" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Administration Committee' , 'name' => 'Ravindu Hettiarachchi' , 'image' => asset('images/commitee/2024/Excom/VP_Admin/Ravindu.png') , 'email' => 'ravindudil923@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Finance Committee' , 'name' => 'Sakila Mallikarachchi' , 'image' => asset('images/commitee/2024/Excom/VP_Finance/Sakila1.png') , 'email' => 'sakilamallikarachchi99@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Media Committee' , 'name' => 'Nisal Rajapaksha' , 'image' => asset('images/commitee/2024/Excom/VP_Media/Nisal1.png') , 'email' => 'nisalpoorna2020@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Research & Development Committee' , 'name' => 'Sanjula Abeysinghe' , 'image' => asset('images/commitee/2024/Excom/VP_R&D/Sanjula1.png') , 'email' => 'sanjulapawanee@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Health & Safety Committee' , 'name' => 'Harindu Jayasinghe' , 'image' => asset('images/commitee/2024/Excom/VP_Health&Safety/Harindu1.png') , 'email' => 'jayasinghaharindu2001@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                </div>

                <div class="row">
                    <div class="col text-center">
                            <h1>Advisor</h1>
                    </div>
                </div>
                <div class="row top-padding justify-content-center" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => '' , 'name' => 'Thilina Mendis ' , 'image' => asset('images/commitee/2024/Advisor/Thilina.png') ,'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])
                </div>

            </section>
            <!--Editors-->
            <section>
                <div class="row top-padding" data-entrance="from-bottom">
                    <div class="col-md-12 text-center">
                        <h2>Editorial Panel</h2>
                    </div>
                </div>
                <div class="row top-padding scroll-commitee"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Senior Editor' , 'name' => 'Geethma Prasadi' , 'image' => asset('images/commitee/2024/Editorial/Senior_Editor/Geethma1.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Junior Editor' , 'name' => 'Chamalka Sandamali' , 'image' => asset('images/commitee/2024/Editorial/Junior_Editors/Chamalka.png') , 'email' => '#' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Junior Editor' , 'name' => 'Enuri Vishvanath' , 'image' => asset('images/commitee/2024/Editorial/Junior_Editors/Enuri.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Junior Editor' , 'name' => 'Shehera Jayathilake' , 'image' => asset('images/commitee/2024/Editorial/Junior_Editors/Shehera.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                </div>
            </section>

            <!--Admin Committee-->
            <section>
                <div class="row top-padding" data-entrance="from-bottom">
                    <div class="col-md-12 text-center">
                        <h2>Administration Committee</h2>
                    </div>
                </div>
                <div class="row top-padding justify-content-center"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Ravindu Hettiarachchi' , 'image' => asset('images/commitee/2024/Excom/VP_Admin/Ravindu.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])

                </div>
                <div class="row top-padding scroll-commitee"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Vihanga Pathiraje' , 'image' => asset('images/commitee/2024/Administration/Vihanga.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Dulmi Jayarathne' , 'image' => asset('images/commitee/2024/Administration/Dulmi.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Kavini Sandeepani' , 'image' => asset('images/commitee/2024/Administration/Kavini.png') , 'email' => '#' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee member' , 'name' => 'Prabhavi Thissera' , 'image' => asset('images/commitee/2024/Administration/Prabhavi.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Induwara Ilukkumbura' , 'image' => asset('images/commitee/2024/Administration/Induwara.png') , 'email' => '#' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                </div>
            </section>

            <!--Finance Committee-->
            <section>
                <div class="row top-padding" data-entrance="from-bottom">
                    <div class="col-md-12 text-center">
                        <h2>Finance Committee</h2>
                    </div>
                </div>
                <div class="row top-padding justify-content-center" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Sakila Mallikarachchi' , 'image' => asset('images/commitee/2024/Excom/VP_Finance/Sakila1.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Gihini Udbhashini' , 'image' => asset('images/commitee/2024/Finance/Gihini.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee member' , 'name' => 'Duvindu Sahan' , 'image' => asset('images/commitee/2024/Finance/Duvindu.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Nidul Dulsara' , 'image' => asset('images/commitee/2024/Finance/Nidul.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Mathuragavan Raveendran' , 'image' => asset('images/commitee/2024/Finance/Ragavan.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Helani Rajapaksha' , 'image' => asset('images/commitee/2024/Finance/Helani1.png') , 'email' => '#' , 'fbusername' => '', 'colnum' => ' col-xs-2'])

                </div>
            </section>

            <!--Media Committee-->
            <section>
                <div class="row top-padding" data-entrance="from-bottom">
                    <div class="col-md-12 text-center">
                        <h2>Media Committee</h2>
                    </div>
                </div>
                <div class="row top-padding justify-content-center" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President  ' , 'name' => 'Nisal Rajapaksha' , 'image' => asset('images/commitee/2024/Excom/VP_Media/Nisal1.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Manjina Vishwajith' , 'image' => asset('images/commitee/2024/Media/Manjina1.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Yasanjala Ravinatha' , 'image' => asset('images/commitee/2024/Media/Yasanjala1.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Prabath Bandara' , 'image' => asset('images/commitee/2024/Media/Prabhath1.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Nipun Malinga' , 'image' => asset('images/commitee/2024/Media/Malinga1.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Zaky Ahamad' , 'image' => asset('images/commitee/2024/Media/Zaky1.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Kaveesha Kapuruge' , 'image' => asset('images/commitee/2024/Media/Kaveesha1.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                </div>
            </section>

            <!--R&D Committee-->
            <section>
                <div class="row top-padding" data-entrance="from-bottom">
                    <div class="col-md-12 text-center">
                        <h2>Research & Development Committee</h2>
                    </div>
                </div>
                <div class="row top-padding justify-content-center" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Sanjula Abeysinghe' , 'image' => asset('images/commitee/2024/Excom/VP_R&D/Sanjula1.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Amesha Ranasinghe' , 'image' => asset('images/commitee/2024/R&D/Amesha1.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Pahan Perera' , 'image' => asset('images/commitee/2024/R&D/Pahan.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Dokula Perera' , 'image' => asset('images/commitee/2024/R&D/Dokula.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Dilanka Heshan' , 'image' => asset('images/commitee/2024/R&D/Dilanka.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Nimsara Gamage' , 'image' => asset('images/commitee/2024/R&D/Nimsara1.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                </div>
            </section>

            <!--Health & Safety Committee-->
            <section>
                <div class="row top-padding" data-entrance="from-bottom">
                    <div class="col-md-12 text-center">
                        <h2>Health & Safety Committee</h2>
                    </div>
                </div>
                <div class="row top-padding justify-content-center" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Harindu Jayasinghe' , 'image' => asset('images/commitee/2024/Excom/VP_Health&Safety/Harindu1.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])

                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Dasuni Githmee' , 'image' => asset('images/commitee/2024/Health & Safety/Dasuni.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Kishan Mahendra' , 'image' => asset('images/commitee/2024/Health & Safety/Kishan.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Himash Ruwanga' , 'image' => asset('images/commitee/2024/Health & Safety/Himash.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Dinuwan Nissanka' , 'image' => asset('images/commitee/2024/Health & Safety/Dinuwan.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Thishala Thathsarani' , 'image' => asset('images/commitee/2024/Health & Safety/Thishala.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
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