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
                    @include('layouts.round-card', [ 'role' => 'Senior Treasurer' , 'name' => 'Senior lecturer Mr.Suranga Jayasena' , 'image' => asset('images/commitee/suranga.jpg') , 'email' => 'suranga@uom.lk' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'President' , 'name' => 'Thilina Mendis' , 'image' => asset('images/commitee/2023/EXCUTIVE_BOARD/PRESIDENT/THILINA MENDIS.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Secretary' , 'name' => 'Harshana wijesekara' , 'image' => asset('images/commitee/2023/EXCUTIVE_BOARD/SECRATOTY/HARSHANA WIJESEKARA.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2']) 
                    @include('layouts.round-card', [ 'role' => 'Assistant Secretary' , 'name' => 'Tharindi Heenkenda' , 'image' => asset('images/commitee/2023/EXCUTIVE_BOARD/ASISTANT_SECRETARY/THARINDHI HEENKENDA.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])   
                </div>
                <div class="row top-padding scroll-commitee margin-bottom-low" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Administration Committee' , 'name' => 'Thanujaya Gunasekara' , 'image' => asset('images/commitee/2023/EXCUTIVE_BOARD/VPs/THANUJAYA GUNASEKARA-VP ADMIN.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Media Committee' , 'name' => 'Sasmitha Rathnaweera' , 'image' => asset('images/commitee/2023/EXCUTIVE_BOARD/VPs/SASMITHA RATHNAWEERA-VP MEDIA.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Research & Development Committee' , 'name' => 'Ravindu Hettiarachchi' , 'image' => asset('images/commitee/2023/EXCUTIVE_BOARD/VPs/RAVINDU HETTIARACHCHI-VP RESEARCH AND DEVELOPMENT.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Finance Committee' , 'name' => 'Akesh Samuditha' , 'image' => asset('images/commitee/2023/EXCUTIVE_BOARD/VPs/AKESH SAMUDITHA-VP FINANCE.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Health & Safety Committee' , 'name' => 'Manjitha Senanayake' , 'image' => asset('images/commitee/2023/EXCUTIVE_BOARD/VPs/MANJITHA SENANAYAKE-VP HEALTH AND SAFETY.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])  
                </div>

                <div class="row">
                    <div class="col text-center">
                            <h1>Advisor Panel</h1>
                    </div>
                </div>
                <div class="row top-padding scroll-commitee margin-bottom-low" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => '' , 'name' => 'Dileepa Lakshan ' , 'image' => asset('images/commitee/2023/ADVISORS/DILEEPA LAKSHAN.png') ,'email' => 'karunathilakadileepa@gmail.com' , 'fbusername' => 'https://www.facebook.com/Diliya073/' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => '' , 'name' => 'Gishan Dilruwan' , 'image' => asset('images/commitee/2023/ADVISORS/GISHAN DILRUWAN.png') , 'email' => 'iamgishan@gmail.com' , 'fbusername' => 'https://www.facebook.com/gd.line.3' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => '' , 'name' => 'Ishani Dahanayaka' , 'image' => asset('images/commitee/2023/ADVISORS/ISHANI DAHANAYAKA.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
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
                    @include('layouts.round-card', [ 'role' => 'Senior Editor' , 'name' => 'Uditha Herath' , 'image' => asset('images/commitee/2023/EDITORIAL/Uditha Herath.jpg') , 'email' => 'virajwijesooriya99@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Junior editor' , 'name' => 'Geethma Prasadi' , 'image' => asset('images/commitee/2023/EDITORIAL/Geethma Prasadi.jpg') , 'email' => '#' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Junior editor' , 'name' => 'Navini Subodhani' , 'image' => asset('images/commitee/2023/EDITORIAL/Navini Subodhani.jpg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Junior editor' , 'name' => 'Jayabhawan Thevamanohara' , 'image' => asset('images/commitee/2023/EDITORIAL/Jayabhawan Thevamanohara.jpg') , 'email' => 'chanuriabhimani123@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                </div>
            </section>

            <!--Admin Commitee-->
            <section>
                <div class="row top-padding" data-entrance="from-bottom">
                    <div class="col-md-12 text-center">
                        <h2>Administration Committee</h2>
                    </div>
                </div>
                <div class="row top-padding justify-content-center"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Thanujaya Gunasekara' , 'image' => asset('images/commitee/2023/EXCUTIVE_BOARD/VPs/THANUJAYA GUNASEKARA-VP ADMIN.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Senior Committee Member' , 'name' => 'Naveen Hedalla Arachchi' , 'image' => asset('images/commitee/2022/Naveen Hedalla Arachchi.png') , 'email' => 'naveen.hedallaarachchi@gmail.com' , 'fbusername' => 'https://www.facebook.com/naveen.hedallaarachchi/', 'colnum' => '-md-4'])
                    
                </div>
                <div class="row top-padding scroll-commitee"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Anupa Alwis' , 'image' => asset('images/commitee/2023/ADMINISTRATION_COMMITTEE/ANUPA ALWIS.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Dinuwan Nishshanka' , 'image' => asset('images/commitee/2023/ADMINISTRATION_COMMITTEE/DINUWAN NISHSHANKA.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Kokila Jayasinghe' , 'image' => asset('images/commitee/2023/ADMINISTRATION_COMMITTEE/KOKILA JAYASINGHE.png') , 'email' => '#' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee member' , 'name' => 'Pasan Gunathunga' , 'image' => asset('images/commitee/2023/ADMINISTRATION_COMMITTEE/PASAN GUNATHUNGA.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Prabhavi Tissera' , 'image' => asset('images/commitee/2023/ADMINISTRATION_COMMITTEE/PRABHAVI TISSERA.png') , 'email' => '#' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Akesh Samuditha' , 'image' => asset('images/commitee/2023/EXCUTIVE_BOARD/VPs/AKESH SAMUDITHA-VP FINANCE.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Senior Committee Member' , 'name' => 'yohan madusha' , 'image' => asset('images/commitee/2022/yohan madusha.jpeg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Miththika Samarathunga' , 'image' => asset('images/commitee/2023/FINANCE_COMMITTEE/MITHTHIKA SAMARATHUNGA.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee member' , 'name' => 'Sakila Mallikarachhi' , 'image' => asset('images/commitee/2023/FINANCE_COMMITTEE/SAKILA MALLIKARACHCHI.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Santhush Silva' , 'image' => asset('images/commitee/2023/FINANCE_COMMITTEE/SANTHUSH SILVA.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Saumya Madhubhashana' , 'image' => asset('images/commitee/2023/FINANCE_COMMITTEE/SAUMYA MADHUBHASHANA.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Vihanga Pathirate' , 'image' => asset('images/commitee/2023/FINANCE_COMMITTEE/VIHANGA PATHIRATE.png') , 'email' => '#' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
            
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
                    @include('layouts.round-card', [ 'role' => 'Vice President  ' , 'name' => 'Sasmitha Rathnaweera' , 'image' => asset('images/commitee/2023/EXCUTIVE_BOARD/VPs/SASMITHA RATHNAWEERA-VP MEDIA.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Senior Committee Member' ,'name' => 'Thilina Mendis' , 'image' => asset('images/commitee/2022/Thilina Mendis.jpg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Arunan Pandiyan' , 'image' => asset('images/commitee/2023/MEDIA/Arunan Pandiyan.jpg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Hasindu Rajapaksha' , 'image' => asset('images/commitee/2023/MEDIA/Hasindu Rajapaksha.jpg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Nisal Rajapaksha' , 'image' => asset('images/commitee/2023/MEDIA/Nisal Rajapaksha.jpg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Kanagaratnam Mathushanth' , 'image' => asset('images/commitee/2023/MEDIA/Kanagaratnam Mathushanth.jpg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Jayamadu Gammune' , 'image' => asset('images/commitee/2023/MEDIA/Jayamadu Gammune.jpg') , 'email' => 'subodha162@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Imesh Lakshan' , 'image' => asset('images/commitee/2023/MEDIA/Imesh Lakshan.jpg') , 'email' => 'sanggavithomas512@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])  
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Manjitha Senanayake' , 'image' => asset('images/commitee/2023/EXCUTIVE_BOARD/VPs/MANJITHA SENANAYAKE-VP HEALTH AND SAFETY.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])  
                    @include('layouts.round-card', [ 'role' => 'Senior Committee Member' , 'name' => 'Deshan Chathuranga' , 'image' => asset('images/commitee/deshan.jpg') , 'email' => 'deshanc321@gmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                    
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Dasuni Githmee' , 'image' => asset('images/commitee/2023/HEALTH/Dasuni Githmee.jpg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Sandaru Lokudadalla' , 'image' => asset('images/commitee/2023/HEALTH/Sandaru Lokudadalla.jpg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Sandaruwan Gangodawilage' , 'image' => asset('images/commitee/2023/HEALTH/Sandaruwan Gangodawilage.jpg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Sathyami Disanayaka' , 'image' => asset('images/commitee/2023/HEALTH/Sathyami Disanayaka.jpg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Vithakshana Siriwardhna' , 'image' => asset('images/commitee/2023/HEALTH/Vithakshana Siriwardhna.jpg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
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
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Research & Development Committee' , 'name' => 'Ravindu Hettiarachchi' , 'image' => asset('images/commitee/2023/EXCUTIVE_BOARD/VPs/RAVINDU HETTIARACHCHI-VP RESEARCH AND DEVELOPMENT.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Senior Committee Member' , 'name' => 'Dileepa Lakshan ' , 'image' => asset('images/commitee/2023/ADVISORS/DILEEPA LAKSHAN.png') ,'email' => 'karunathilakadileepa@gmail.com' , 'fbusername' => 'https://www.facebook.com/Diliya073/' , 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Bojitha Liyanage' , 'image' => asset('images/commitee/2023/RnD_ COMMITTEE/BOJITHA LIYANAGE.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Nirooshi Nethsarani' , 'image' => asset('images/commitee/2023/RnD_ COMMITTEE/NIROOSHI NETHSARANI.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Nimash Eshan' , 'image' => asset('images/commitee/2023/RnD_ COMMITTEE/NIMASH SUBASHINGHE.png') , 'email' => 'nimash3eshan@gmail.com' , 'fbusername' => 'https://www.facebook.com/nimash0eshan/' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Sakya Thilakarathne' , 'image' => asset('images/commitee/2023/RnD_ COMMITTEE/SAKYA THILAKARATHNA.png') , 'email' => 'sakyathilakarathne96@gmail.com' , 'fbusername' => 'https://www.facebook.com/sakya.thilakarathne' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Committee Member' , 'name' => 'Sanjula Abeysinghe' , 'image' => asset('images/commitee/2023/RnD_ COMMITTEE/SANJULA ABEYSINGHE.png') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
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