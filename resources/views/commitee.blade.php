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
                    @include('layouts.round-card', [ 'role' => 'Senior Treasurer' , 'name' => 'Senior lecturer Mr.Suranga Jayasena' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'suranga@uom.lk' , 'fbusername' => '' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'President' , 'name' => 'Hasitha Sandaruwan' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'hasitha.sandaruvan@gmail.com' , 'fbusername' => '' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Secratary' , 'name' => 'Theja Wijesiriwardane' , 'image' => asset('images/commitee/sec.jpg') , 'email' => 'thejahw@gmail.com' , 'fbusername' => 'https://www.facebook.com/theja.wijesiriwardane' , 'colnum' => '-md-4'])    
                </div>
                <div class="row top-padding scroll-commitee margin-bottom-low" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Assistant Secretary' , 'name' => 'Ramodha Pragnarathne' , 'image' => asset('images/commitee/as-sec.jpg') , 'email' => 'ramodhapragnarathne@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Administration Committee' , 'name' => 'Thilina Liyanage' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'imwageesha@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Financial Commitee' , 'name' => 'Thilina Dilshan' , 'image' => asset('images/commitee/finance-vp.jpg') , 'email' => 'thilina.dilshan14149@gmail.com' , 'fbusername' => 'https://www.facebook.com/ThiliDilz' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Media Commitee' , 'name' => 'Chathuranga Saman' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'cskmedia2@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Health & Safety Commitee' , 'name' => 'Kumashi Dasanayaka' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'k.s.dasanayaka@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Special Operations Commitee' , 'name' => 'Harith B. Gunathilaka' , 'image' => 'https://drive.google.com/uc?id=1dA9URe3ESMdPmDGBrBjsTrAsT5iyPp__' , 'email' => 'harithb7gunathilaka@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])   
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
                    @include('layouts.round-card', [ 'role' => 'Assistant Secretary' , 'name' => 'Ramodha Pragnarathne' , 'image' => asset('images/commitee/as-sec.jpg') , 'email' => 'ramodhapragnarathne@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Editor' , 'name' => 'Kasuni Gamage' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'kasunisdgamage@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Junior editor' , 'name' => 'Reshan Dissanayake' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'reshan.dissanayake96@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Junior editor' , 'name' => 'Hasitha Ilangakon' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'imhbi97@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Thilina Liyanage' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'imwageesha@gmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Advisor' , 'name' => 'Dimalka Nuwangi' , 'image' => asset('images/commitee/admin-ad.jpg') , 'email' => 'dabeyrathna3@gmail.com' , 'fbusername' => 'https://www.facebook.com/profile.php?id=100010774638254', 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Prabuddhika Ramawickrama' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'prabuddhikaghsk@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Yasara Dakshinabandara' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'yasaradakshinaphd@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee member' , 'name' => 'Pramuditha Kaluthanthri' , 'image' => asset('images/commitee/admin-2.jpg') , 'email' => 'hivinkaluthanthri@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Reshaka Weerasinghe' , 'image' => asset('images/commitee/admin-4.jpg') , 'email' => 'reshakalakshan@gmail.com' , 'fbusername' => 'https://m.facebook.com/reshaka.weerasinghe', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Nimna Perera' , 'image' => asset('images/commitee/admin-5.jpg') , 'email' => 'nimnaperera98@gmail.com' , 'fbusername' => 'https://www.facebook.com/nnimna.perera/', 'colnum' => ' col-xs-2'])
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Thilina Dilshan' , 'image' => asset('images/commitee/finance-vp.jpg') , 'email' => 'thilina.dilshan14149@gmail.com' , 'fbusername' => 'https://www.facebook.com/ThiliDilz', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Advisor' , 'name' => 'Hansa Tharuka' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'hansa.morasquad@gmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Harith hansaka' , 'image' => asset('images/commitee/finance-1.jpg') , 'email' => 'harithhansaka@gmail.com' , 'fbusername' => 'fb.com/harithhansaka' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee member' , 'name' => 'Dulan Chandrasiri' , 'image' => asset('images/commitee/person.jpg') , 'email' => '96dulanchandrasiri@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Daneesha Ranasinghe' , 'image' => asset('images/commitee/finance-3.jpg') , 'email' => 'daneesharanasinghe@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Nawodani Jayasooriya' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'nawojay@gmail.com' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee member' , 'name' => 'Chamin Naveendra' , 'image' => asset('images/commitee/finance-5.jpg') , 'email' => 'chaminnaveendra@gmail.com' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Chathuranga Saman' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'ucmsulo@gmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Advisor' , 'name' => 'Sulochana Udawela' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'cskmedia2@gmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                    
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Ravindu Nethmina' , 'image' => 'https://drive.google.com/uc?id=1A-TTn8O11NXB5UJWwceHrKrQvDGSJLWN' , 'email' => 'nethmina.kar@gmail.com' , 'fbusername' => 'https://www.facebook.com/ravindu.nethmina.3' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Kanishka Arsakulasooriya' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'kanishkaarsakulasooriya@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Sanoja Darshani' , 'image' => 'https://drive.google.com/uc?id=1jLF2LF2NrlNoLccvBDm1sG218AqiGJrU' , 'email' => 'sanojadarshani96@gmail.com' , 'fbusername' => 'https://www.facebook.com/sanojadarsika.sanojadarsika' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Binara Gunaratne' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'binaragunaratne@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Gihan Shanaka' , 'image' => 'https://drive.google.com/uc?id=1AT28q23gdMoDQnskjkEdWdCujSgLIwyW' , 'email' => 'gshanaka2@live.com' , 'fbusername' => 'https://www.facebook.com/GShanakaPhotography/' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Chandika Dilshan' , 'image' => asset('images/commitee/person.jpg') , 'email' => '' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Kanishka Gayan' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'thennakoontmkg95@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Nisal Harshana' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'nisalwidyarathna@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Kumashi Dasanayaka' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'k.s.dasanayaka@gmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Advisor' , 'name' => 'Gayan Deegala' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'gayandeegala@gmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                    
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Umaya Jayaratna' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'umaya.jayaratne95@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Sanduni Piumika' , 'image' => 'https://drive.google.com/uc?id=1H5xKb4dwI8A8lXx15OlyCmk5fw_dpeN9' , 'email' => 'piumikasanduni55@gmail.com' , 'fbusername' => 'https://www.facebook.com/sanduni.piumika.16' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Sadeepa Jayasinghe' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'Sadeepajayasinghe1115@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Shakya Dhammage' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'shakyddhammage@gmail.com' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Gajitha Kavinda' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'hmgk456@gmail.com' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Vishwa Wanniarachchi ' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'wkvishwa97@gmail.com' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                </div>
            </section>

            <!--Special Operation Commitee-->
            <section>
                <div class="row top-padding" data-entrance="from-bottom">
                    <div class="col-md-12 text-center">
                        <h2>Special Operations Commitee</h2>
                    </div>
                </div>
                <div class="row top-padding justify-content-center" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Harith B. Gunathilaka' , 'image' => 'https://drive.google.com/uc?id=1dA9URe3ESMdPmDGBrBjsTrAsT5iyPp__' , 'email' => 'harithb7gunathilaka@gmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Advisor' , 'name' => 'Kasun Weerasekara' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'kasun_weerasekara@icloud.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                    
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Amila M. Peiris' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'amila.mpeiris@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Chamara Jayasinghe' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'nuwanchamara976j@gmail.com' , 'fbusername' => 'https://www.facebook.com/nuwanjchama' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Umesh Mihiran ' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'umeshmihiran@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Kalana Sudaraka ' , 'image' => asset('images/commitee/person.jpg') , 'email' => '' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Bawantha Dilshan' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'bawanthadilshan96@gmail.com' , 'fbusername' => 'https://www.facebook.com/profile.php?id=100002939005855 ', 'colnum' => ' col-xs-2'])
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