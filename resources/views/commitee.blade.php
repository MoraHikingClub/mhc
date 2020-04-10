@extends('layouts.master')

@section('title')
    Mora Hiking Club | Commitee
@endsection

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
            
            <!--Executive members-->
            <section>
                <div class="row">
                    <div class="col text-center">
                            <h1>Executive Commitee</h1>
                    </div>
                </div>
                <div class="row top-padding justify-content-center" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Senior Treasurer' , 'name' => 'Senior lecturer Mr.Suranga Jayasena' , 'image' => asset('images/commitee/suranga.jpg') , 'email' => 'suranga@uom.lk' , 'fbusername' => '' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'President' , 'name' => 'Ramodha Pragnarathne' , 'image' => asset('images/commitee/as-sec.jpg') , 'email' => 'ramodhapragnarathne@gmail.com' , 'fbusername' => 'https://www.facebook.com/ramodha.pragnarathne' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Secratary' , 'name' => 'Umesh Mihiran ' , 'image' => asset('images/commitee/umesh.jpg') , 'email' => 'umeshmihiran@gmail.com' , 'fbusername' => 'https://www.facebook.com/umesh.mihiran' , 'colnum' => '-md-4'])    
                </div>
                <div class="row top-padding scroll-commitee margin-bottom-low" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Assistant Secretary' , 'name' => 'Kumashi Dasanayaka' , 'image' => 'https://drive.google.com/uc?id=1tYhdao5wX_6_rCeLneyMIGKcKfPULY2Q' , 'email' => 'k.s.dasanayaka@gmail.com' , 'fbusername' => 'https://www.facebook.com/kumashi.dasanayaka' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Administration Committee' , 'name' => 'Madushan Neranjana Karunathilake' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'neranjanmadush@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Financial Commitee' , 'name' => 'Nawodani Jayasooriya' , 'image' => 'https://drive.google.com/uc?id=1qtqXZ9HIoMrfWJkipXZ8a2703o9ptCYA' , 'email' => 'nawojay@gmail.com' , 'fbusername' => 'https://www.facebook.com/nawojay.5' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Media Commitee' , 'name' => 'Bawantha Dilshan' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'bawanthadilshan96@gmail.com' , 'fbusername' => 'https://www.facebook.com/profile.php?id=100002939005855 ' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Health & Safety Commitee' , 'name' => 'Kalana Sudaraka' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'sudarakasandanayaka@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Research & Development Commitee' , 'name' => 'Shakya Dhammage' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'shakyddhammage@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])   
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
                    @include('layouts.round-card', [ 'role' => 'Assistant Secretary' , 'name' => 'Kumashi Dasanayaka' , 'image' => 'https://drive.google.com/uc?id=1tYhdao5wX_6_rCeLneyMIGKcKfPULY2Q' , 'email' => 'k.s.dasanayaka@gmail.com' , 'fbusername' => 'https://www.facebook.com/kumashi.dasanayaka' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Senior Editor' , 'name' => 'Ishara Sandanuwan' , 'image' => asset('images/commitee/poliya.jpg') , 'email' => 'isharasandanuwan97@gmail.com' , 'fbusername' => 'https://www.facebook.com/ishara.sandanuwan.7' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Junior editor' , 'name' => 'Madhusha Bandara' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'madhushab007@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Junior editor' , 'name' => 'Punsala Sandaruni ' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'sanpunsala@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                </div>
            </section>

            <!--Admin Commitee-->
            <section>
                <div class="row top-padding" data-entrance="from-bottom">
                    <div class="col-md-12 text-center">
                        <h2>Administration Commitee</h2>
                    </div>
                </div>
                <div class="row top-padding justify-content-center"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Madushan Neranjana Karunathilake' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'neranjanmadush@gmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Advisor' , 'name' => 'Thilina Liyanage' , 'image' => 'https://drive.google.com/uc?id=1J_nAaRNEkTsWyn6z3XwhOrzpxAGT7D44' , 'email' => 'imwageesha@gmail.com' , 'fbusername' => 'https://www.facebook.com/wageesha.gayaneth', 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Yasara Dakshinabandara' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'yasaradakshinaphd@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Pasindu Sandaruwan ' , 'image' => asset('images/commitee/pasindu.jpg') , 'email' => 'pasindusandaruwan2012@gmail.com' , 'fbusername' => 'https://www.facebook.com/pasindu.sandaruwan.3975012' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Reshaka Weerasinghe' , 'image' => asset('images/commitee/admin-4.jpg') , 'email' => 'reshakalakshan@gmail.com' , 'fbusername' => 'https://m.facebook.com/reshaka.weerasinghe', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee member' , 'name' => 'Pramuditha Kaluthanthri' , 'image' => asset('images/commitee/admin-2.jpg') , 'email' => 'hivinkaluthanthri@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Yomali Rekha' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'yomalirekha1994@gmail.com' , 'fbusername' => 'https://www.facebook.com/yomali.rekha', 'colnum' => ' col-xs-2'])
                </div>
            </section>

            <!--Finance Commitee-->
            <section>
                <div class="row top-padding" data-entrance="from-bottom">
                    <div class="col-md-12 text-center">
                        <h2>Financial Commitee</h2>
                    </div>
                </div>
                <div class="row top-padding justify-content-center" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Nawodani Jayasooriya' , 'image' => 'https://drive.google.com/uc?id=1qtqXZ9HIoMrfWJkipXZ8a2703o9ptCYA' , 'email' => 'nawojay@gmail.com' , 'fbusername' => 'https://www.facebook.com/nawojay.5', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Advisor' , 'name' => 'Thilina Dilshan' , 'image' => asset('images/commitee/finance-vp.jpg') , 'email' => 'thilina.dilshan14149@gmail.com' , 'fbusername' => 'https://www.facebook.com/ThiliDilz', 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Harith hansaka' , 'image' => asset('images/commitee/finance-1.jpg') , 'email' => 'harithhansaka@gmail.com' , 'fbusername' => 'fb.com/harithhansaka' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee member' , 'name' => 'Gishan Dilruwan' , 'image' => asset('images/commitee/gishan.jpg') , 'email' => 'iamgishan@gmail.com' , 'fbusername' => 'https://www.facebook.com/gd.line.3' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Daneesha Ranasinghe' , 'image' => asset('images/commitee/finance-3.jpg') , 'email' => 'daneesharanasinghe@gmail.com' , 'fbusername' => 'https://www.facebook.com/daneesha.ranasinghe.5' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Deshan Chathuranga' , 'image' => asset('images/commitee/deshan.jpg') , 'email' => 'deshanc321@gmail.com' , 'fbusername' => 'https://www.facebook.com/deshanchathuranga.herath' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Ruwini Randika' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'gruwini97@gmail.com' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee member' , 'name' => 'Rashi Prabhath' , 'image' => asset('images/commitee/person.jpg') , 'email' => '' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                </div>
            </section>

            <!--Media Commitee-->
            <section>
                <div class="row top-padding" data-entrance="from-bottom">
                    <div class="col-md-12 text-center">
                        <h2>Media Commitee</h2>
                    </div>
                </div>
                <div class="row top-padding justify-content-center" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President' ,'name' => 'Bawantha Dilshan' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'bawanthadilshan96@gmail.com' , 'fbusername' => 'https://www.facebook.com/profile.php?id=100002939005855' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Advisor' , 'name' => 'Chathuranga Saman' , 'image' => asset('images/commitee/saman.jpg') , 'email' => 'ucmsulo@gmail.com' , 'fbusername' => 'http://www.facebook.com/cskmedia3', 'colnum' => '-md-4'])
                    
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Ravindu Nethmina' , 'image' => 'https://drive.google.com/uc?id=1A-TTn8O11NXB5UJWwceHrKrQvDGSJLWN' , 'email' => 'nethmina.kar@gmail.com' , 'fbusername' => 'https://www.facebook.com/ravindu.nethmina.3' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Pasindu Maduranga' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'pasindumaduranga9717@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Dewsara Nipun' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'ktdnipun@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Murukupillai Jagaprahaladan' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'bieberpragu@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Kawmini Wijekoon' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'kawminiwijekoon@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Madhavee Narampanawa' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'msnarampanawa@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                </div>
            </section>

            <!--Health & Safety Commitee-->
            <section>
                <div class="row top-padding" data-entrance="from-bottom">
                    <div class="col-md-12 text-center">
                        <h2>Health & Safety Commitee</h2>
                    </div>
                </div>
                <div class="row top-padding justify-content-center" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Kalana Sudaraka' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'sudarakasandanayaka@gmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Advisor' , 'name' => 'Gayan Deegala' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'gayandeegala@gmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                    
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Sanduni Piumika' , 'image' => 'https://drive.google.com/uc?id=1H5xKb4dwI8A8lXx15OlyCmk5fw_dpeN9' , 'email' => 'piumikasanduni55@gmail.com' , 'fbusername' => 'https://www.facebook.com/sanduni.piumika.16' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Virad Dilanka' , 'image' => asset('images/commitee/virad.jpg') , 'email' => 'viraddilanka2554@gamil.com' , 'fbusername' => 'https://www.facebook.com/virad.dilanka.5' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Kanishka Arsakulasooriya' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'kanishkaarsakulasooriya@gmail.com' , 'fbusername' => 'https://www.facebook.com/profile.php?id=100006721246525', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Miyuru Lakshan' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'miyurulakshan.ml@gmail.com' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Umaya Jayarathne' , 'image' => asset('images/commitee/umaya.jpg') , 'email' => 'umaya.jayaratne95@gmail.com' , 'fbusername' => 'https://www.facebook.com/profile.php?id=100009471010538', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Udara Bandara' , 'image' => asset('images/commitee/person.jpg') , 'email' => '' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                </div>
            </section>

            <!--Special Operation Commitee-->
            <section>
                <div class="row top-padding" data-entrance="from-bottom">
                    <div class="col-md-12 text-center">
                        <h2>Research & Development Commitee</h2>
                    </div>
                </div>
                <div class="row top-padding justify-content-center" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Shakya Dhammage' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'shakyddhammage@gmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Advisor' , 'name' => 'Harith B. Gunathilaka' , 'image' => 'https://drive.google.com/uc?id=1dA9URe3ESMdPmDGBrBjsTrAsT5iyPp__' , 'email' => 'harithb7gunathilaka@gmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                    
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Thathsara Munasingha ' , 'image' => asset('images/commitee/thatha.jpg') , 'email' => 'rthathsara96@gmail.com' , 'fbusername' => 'https://www.facebook.com/thathsara.munasingha' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Nimna Perera' , 'image' => asset('images/commitee/admin-5.jpg') , 'email' => 'nimnaperera98@gmail.com' , 'fbusername' => 'https://www.facebook.com/nnimna.perera/' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'I. B. Dileepa Jayasiri' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'dileepajayasiri@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Moksha Thisarani Kulathilaka' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'thisaranikulathilaka@gmail.com' , 'fbusername' => 'https://www.facebook.com/mokshakulathilaka22', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Ishani Dahanayaka ' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'chamudu.18@business.mrt.ac.lk' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
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