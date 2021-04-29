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
                    @include('layouts.round-card', [ 'role' => 'President' , 'name' => 'Umesh Mihiran' , 'image' => asset('images/commitee/umesh.jpg') , 'email' => 'umeshmihiran@gmail.com' , 'fbusername' => 'https://www.facebook.com/umesh.mihiran' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Secratary' , 'name' => 'Daneesha Ranasinghe ' , 'image' => asset('images/commitee/finance-3.jpg') , 'email' => 'daneesharanasinghe@gmail.com' , 'fbusername' => 'https://www.facebook.com/daneesha.ranasinghe.5' , 'colnum' => '-md-4'])    
                </div>
                <div class="row top-padding scroll-commitee margin-bottom-low" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Assistant Secretary' , 'name' => 'Gishan Dilruwan' , 'image' => asset('images/commitee/gishan.jpg') , 'email' => 'iamgishan@gmail.com' , 'fbusername' => 'https://www.facebook.com/gd.line.3' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Administration Committee' , 'name' => 'Reshaka Weerasinghe' , 'image' => asset('images/commitee/admin-4.jpg') , 'email' => 'reshakalakshan@gmail.com' , 'fbusername' => 'https://m.facebook.com/reshaka.weerasinghe' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Financial Commitee' , 'name' => 'Harith hansaka' , 'image' => asset('images/commitee/finance-1.jpg') , 'email' => 'harithhansaka@gmail.com' , 'fbusername' => 'fb.com/harithhansaka' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Media Commitee' , 'name' => 'Aditha Pathiraja' , 'image' => asset('images/commitee/aditha.jpg') , 'email' => 'adithapraween@gmail.com' , 'fbusername' => 'https://www.facebook.com/aditha.praween ' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Health & Safety Commitee' , 'name' => 'Sanduni Piumika' , 'image' => 'https://drive.google.com/uc?id=1H5xKb4dwI8A8lXx15OlyCmk5fw_dpeN9' , 'email' => 'piumikasanduni55@gmail.com' , 'fbusername' => 'https://www.facebook.com/sanduni.piumika.16' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Research & Development Commitee' , 'name' => 'Nimna Perera' , 'image' => asset('images/commitee/admin-5.jpg') , 'email' => 'nimnaperera98@gmail.com' , 'fbusername' => 'https://www.facebook.com/nnimna.perera/' , 'colnum' => ' col-xs-2'])   
                </div>

                <div class="row">
                    <div class="col text-center">
                            <h1>Advisor Panel</h1>
                    </div>
                </div>
                <div class="row top-padding justify-content-center" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Advisor' , 'name' => 'Ramodha Pragnarathne' , 'image' => asset('images/commitee/as-sec.jpg') , 'email' => 'ramodhapragnarathne@gmail.com' , 'fbusername' => 'https://www.facebook.com/ramodha.pragnarathne' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Advisor' , 'name' => 'Thilina Liyanage' , 'image' => 'https://drive.google.com/uc?id=1J_nAaRNEkTsWyn6z3XwhOrzpxAGT7D44' , 'email' => 'imwageesha@gmail.com' , 'fbusername' => 'https://www.facebook.com/wageesha.gayaneth' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Advisor' , 'name' => 'Nawodani Jayasooriya' , 'image' => 'https://drive.google.com/uc?id=1qtqXZ9HIoMrfWJkipXZ8a2703o9ptCYA' , 'email' => 'nawojay@gmail.com' , 'fbusername' => 'https://www.facebook.com/nawojay.5' , 'colnum' => '-md-4'])    
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
                    @include('layouts.round-card', [ 'role' => 'Assistant Secretary' , 'name' => 'Gishan Dilruwan' , 'image' => asset('images/commitee/gishan.jpg') , 'email' => 'iamgishan@gmail.com' , 'fbusername' => 'https://www.facebook.com/gd.line.3' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Senior Editor' , 'name' => 'Punsala Sandaruni ' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'sanpunsala@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Junior editor' , 'name' => 'Viraj Wijesooriya ' , 'image' => asset('images/commitee/viraj.jpg') , 'email' => 'virajwijesooriya99@gmail.com' , 'fbusername' => 'https://m.facebook.com/viraj.wijesooriya.79' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Junior editor' , 'name' => 'Rashmi Anjana ' , 'image' => asset('images/commitee/rashmi.jpg') , 'email' => 'rashmianjana10@gmail.com' , 'fbusername' => 'https://www.facebook.com/profile.php?id=100006450513423' , 'colnum' => ' col-xs-2'])
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Reshaka Weerasinghe' , 'image' => asset('images/commitee/admin-4.jpg') , 'email' => 'reshakalakshan@gmail.com' , 'fbusername' => 'https://m.facebook.com/reshaka.weerasinghe', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Senior Commitee Member' , 'name' => 'Yasara Dakshinabandara' , 'image' => asset('images/commitee/yasara.jpg') , 'email' => 'yasaradakshinaphd@gmail.com' , 'fbusername' => 'https://www.facebook.com/yasara.dakshinabandara', 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Ishani Dahanayaka ' , 'image' => asset('images/commitee/ishani.jpg') , 'email' => 'ishanidahanayaka123@gmail.com' , 'fbusername' => 'https://www.facebook.com/ishani.dahanayake.1' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Nikith Fernando ' , 'image' => asset('images/commitee/nikith.jpg') , 'email' => 'nikithfrenando1999@gmail.com' , 'fbusername' => 'https://www.facebook.com/nikith.fernando' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Anjula Herath ' , 'image' => asset('images/commitee/anjula.jpg') , 'email' => 'anjulaherath2000@gmail.com ' , 'fbusername' => 'https://www.facebook.com/anjula.herath.777', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee member' , 'name' => 'Miyuru Lakshan' , 'image' => asset('images/commitee/miyuru.jpg') , 'email' => 'Miyurulakshan.ml@gmail.com' , 'fbusername' => 'https://www.facebook.com/miyuru.gamage.73' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Ranul Navojith' , 'image' => asset('images/commitee/ranul.jpg') , 'email' => 'ranulnavoijith@gmail.com' , 'fbusername' => 'https://www.facebook.com/ranulz.dayarathne/a', 'colnum' => ' col-xs-2'])
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Harith hansaka' , 'image' => asset('images/commitee/finance-1.jpg') , 'email' => 'harithhansaka@gmail.com' , 'fbusername' => 'fb.com/harithhansaka', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Senior Commitee Member' , 'name' => 'Ishara sandanuwan' , 'image' => asset('images/commitee/poliya.jpg') , 'email' => 'isharasandanuwan97@gmail.com' , 'fbusername' => 'https://www.facebook.com/ishara.sandanuwan.7', 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Yohan Madusha' , 'image' => asset('images/commitee/yohan.jpg') , 'email' => 'y.madusha97@gmail.com' , 'fbusername' => 'https://www.facebook.com/ymadusha' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee member' , 'name' => 'Udara Bandara ' , 'image' => asset('images/commitee/udara.jpg') , 'email' => 'udarabandara31@gmail.com' , 'fbusername' => 'https://www.facebook.com/profile.php?id=100008708340787' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Deshan Chathuranga ' , 'image' => asset('images/commitee/deshan.jpg') , 'email' => 'deshanc321@gmail.com' , 'fbusername' => 'https://www.facebook.com/deshanchathuranga.herath' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Sithira Liyanage ' , 'image' => asset('images/commitee/sithira.jpeg') , 'email' => 'sithiraliyanage@gmail.com ' , 'fbusername' => 'https://www.facebook.com/sithira.liyanage.96' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Lakshan Fernando' , 'image' => asset('images/commitee/lakshan.jpg') , 'email' => 'flakshan32@gmail.com' , 'fbusername' => 'https://www.facebook.com/cfernando.lakshan/', 'colnum' => ' col-xs-2'])
                   
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' ,'name' => 'Aditha Pathiraja' , 'image' => asset('images/commitee/aditha.jpg') , 'email' => 'adithapraween@gmail.com' , 'fbusername' => 'https://www.facebook.com/aditha.praween ' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Senior Commitee Member' , 'name' => 'Bawantha Dilshan' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'bawanthadilshan96@gmail.com' , 'fbusername' => 'https://www.facebook.com/profile.php?id=100002939005855 ', 'colnum' => '-md-4'])
                    
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Ganguli Laksha' , 'image' => asset('images/commitee/ganguli.jpg') , 'email' => 'gangulilaksha.123@gmail.com' , 'fbusername' => 'https://www.facebook.com/ganguli.laksha/' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Chathurika Wijesooriya ' , 'image' => asset('images/commitee/chathurika.jpg') , 'email' => 'chathurikawijesooriya97@gmail.com' , 'fbusername' => 'https://www.facebook.com/chathurika.wijesooriya.14' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Jayani Weerasingha ' , 'image' => asset('images/commitee/jayani.jpg') , 'email' => 'jayani4775@gmail.com' , 'fbusername' => 'https://www.facebook.com/jayani.weerasingha.503' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Gayan Kodithuwakku' , 'image' => asset('images/commitee/gayan.jpg') , 'email' => 'gayan.lakshan9@gmail.com' , 'fbusername' => 'https://www,facebook.com/gayankod' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Dilshan Senarathna' , 'image' => asset('images/commitee/dilshan.jpg') , 'email' => 'dilshan.senarathna1998@gmail.com' , 'fbusername' => 'https://www.facebook.com/dilshan.senarathna.186/' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'vishwa wanniarachchi' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'vishwa97@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Sanduni Piumika' , 'image' => 'https://drive.google.com/uc?id=1H5xKb4dwI8A8lXx15OlyCmk5fw_dpeN9' , 'email' => 'piumikasanduni55@gmail.com' , 'fbusername' => 'https://www.facebook.com/sanduni.piumika.16', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Senior Commitee Member' , 'name' => 'Shakya Dhammage' , 'image' => asset('images/commitee/person.jpg') , 'email' => 'shakyddhammage@gmail.com' , 'fbusername' => 'https://www.facebook.com/shakya.dhammage.14', 'colnum' => '-md-4'])
                    
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Kawmini Wijekoon' , 'image' => asset('images/commitee/kawmini.jpg') , 'email' => 'kawminiwijekoon@gmail.com' , 'fbusername' => 'https://www.facebook.com/kawminiwijekoon' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Milan Madhushanka ' , 'image' => asset('images/commitee/milan.jpg') , 'email' => 'milanwithana97@gmail.com' , 'fbusername' => 'https://www.facebook.com/milan.withanage' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Shafni M.S.M ' , 'image' => asset('images/commitee/shafni.jpg') , 'email' => 'shafni.saneek@gmail.com' , 'fbusername' => 'https://www.facebook.com/mohamed.shafni.5055', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Ishanga srimal' , 'image' => asset('images/commitee/ishanga.jpg') , 'email' => 'ishangasrimal98@gmail.com' , 'fbusername' => 'https://www.facebook.com/ishanga.srimal.1', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Akila Sankalpa' , 'image' => asset('images/commitee/akila.jpg') , 'email' => 'akilasankalpaaa@gmail.com' , 'fbusername' => 'https://www.facebook.com/profile.php?id=100006252078144', 'colnum' => ' col-xs-2'])
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Nimna Perera' , 'image' => asset('images/commitee/admin-5.jpg') , 'email' => 'nimnaperera98@gmail.com' , 'fbusername' => 'https://www.facebook.com/nnimna.perera/', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Senior Commitee Member' , 'name' => 'Thathsara Munasingha ' , 'image' => asset('images/commitee/thatha.jpg') , 'email' => 'rthathsara96@gmail.com' , 'fbusername' => 'https://www.facebook.com/thathsara.munasingha', 'colnum' => '-md-4'])
                    
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Naveen Hedalla Arachchi ' , 'image' => asset('images/commitee/naveen.jpg') , 'email' => 'naveen.hedallaarachchi@gmail.com' , 'fbusername' => 'https://www.facebook.com/naveen.hedallaarachchi/' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Dileepa Lakshan Karunathilake' , 'image' => asset('images/commitee/dileepa.jpg') , 'email' => 'karunathilakadileepa@gmail.com' , 'fbusername' => 'https://www.facebook.com/Diliya073/' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Madhusha Bandara' , 'image' => asset('images/commitee/madhusha.jpg') , 'email' => 'madhusha.bandara.mcb@gmail.com' , 'fbusername' => 'https://www.facebook.com/madhusha.chathuranga.7', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Heshani Wickramarachchi ' , 'image' => asset('images/commitee/heshani.jpg') , 'email' => 'heshaniwick99@gmail.com' , 'fbusername' => 'https://www.facebook.com/heshani.wickramarachchi.925', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Dasith Amarasinghe ' , 'image' => asset('images/commitee/dasith.jpg') , 'email' => 'dasith.amarasinghe@gmail.com' , 'fbusername' => 'https://www.facebook.com/dasith.amarasinghe.9' , 'colnum' => ' col-xs-2'])
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