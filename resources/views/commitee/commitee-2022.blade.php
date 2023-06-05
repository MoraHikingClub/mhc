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
            
            <!--Executive members-->
            <section>
                <div class="row">
                    <div class="col text-center">
                            <h1>Executive Commitee</h1>
                    </div>
                </div>
                <div class="row top-padding justify-content-center" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Senior Treasurer' , 'name' => 'Senior lecturer Mr.Suranga Jayasena' , 'image' => asset('images/commitee/suranga.jpg') , 'email' => 'suranga@uom.lk' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'President' , 'name' => 'Gishan Dilruwan' , 'image' => asset('images/commitee/2022/Gishan Dilruwan.jpg') , 'email' => 'iamgishan@gmail.com' , 'fbusername' => 'https://www.facebook.com/gd.line.3' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Secratary' , 'name' => 'Ishani Dahanayaka' , 'image' => asset('images/commitee/2022/Ishani Dahanayaka.jpeg') , 'email' => 'ishanidahanayaka123@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2']) 
                    @include('layouts.round-card', [ 'role' => 'Assistant Secratary' , 'name' => 'Aditha Pathiraja' , 'image' => asset('images/commitee/2022/Aditha Pathiraja.jpg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])   
                </div>
                <div class="row top-padding scroll-commitee margin-bottom-low" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Administration Committee' , 'name' => 'Naveen Hedalla Arachchi' , 'image' => asset('images/commitee/2022/Naveen Hedalla Arachchi.png') , 'email' => 'naveen.hedallaarachchi@gmail.com' , 'fbusername' => 'https://www.facebook.com/naveen.hedallaarachchi/' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Media Committee' , 'name' => 'Thilina Mendis' , 'image' => asset('images/commitee/2022/Thilina Mendis.jpg') , 'email' => 'emmanuwel236@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Research & Development Committee' , 'name' => 'Dileepa Lakshan' , 'image' => asset('images/commitee/2022/Dileepa Lakshan.jpg') , 'email' => 'karunathilakadileepa@gmail.com' , 'fbusername' => 'https://www.facebook.com/Diliya073/' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>Finance Committee' , 'name' => 'yohan madusha' , 'image' => asset('images/commitee/2022/yohan madusha.jpeg') , 'email' => 'y.madusha97@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Vice President<br>health & Safety Committee' , 'name' => 'Deshan Chathuranga' , 'image' => asset('images/commitee/deshan.jpg') , 'email' => 'deshanc321@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])  
                </div>

                <div class="row">
                    <div class="col text-center">
                            <h1>Advisor Panel</h1>
                    </div>
                </div>
                <div class="row top-padding scroll-commitee margin-bottom-low" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => '' , 'name' => 'umesh mihiran' , 'image' => asset('images/commitee/2022/umesh mihiran.jpg') , 'email' => 'umeshmihiran@gmail.com' , 'fbusername' => 'https://www.facebook.com/umesh.mihiran' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => '' , 'name' => 'Daneesha Ranasinghe' , 'image' => asset('images/commitee/2022/Daneesha Ranasinghe.jpg') , 'email' => 'daneesharanasinghe@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => '' , 'name' => 'Sanduni Piumika' , 'image' => asset('images/commitee/2022/Sanduni Piumika.png') , 'email' => 'piumikasanduni55@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
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
                    @include('layouts.round-card', [ 'role' => 'Assistant Secratary' , 'name' => 'Aditha Pathiraja' , 'image' => asset('images/commitee/2022/Aditha Pathiraja.jpg') , 'email' => '#' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Senior Editor' , 'name' => 'Viraj Wijesooriya' , 'image' => asset('images/commitee/2022/Viraj Wijesooriya.jpg') , 'email' => 'virajwijesooriya99@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Junior editor' , 'name' => 'uditha herath' , 'image' => asset('images/commitee/2022/uditha herath.jpg') , 'email' => 'udithaherath97@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Junior editor' , 'name' => 'Chanuri Abhimani' , 'image' => asset('images/commitee/2022/Chanuri Abhimani.jpg') , 'email' => 'chanuriabhimani123@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Naveen Hedalla Arachchi' , 'image' => asset('images/commitee/2022/Naveen Hedalla Arachchi.png') , 'email' => 'naveen.hedallaarachchi@gmail.com' , 'fbusername' => 'https://www.facebook.com/naveen.hedallaarachchi/', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Senior Commitee Member' , 'name' => 'Reshaka Weerasinghe' , 'image' => asset('images/commitee/admin-4.jpg') , 'email' => '#' , 'fbusername' => '', 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'thanujaya gunasekera ' , 'image' => asset('images/commitee/2022/thanujaya gunasekera.jpeg') , 'email' => 'thanujaya.gunasekera5@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'pubudu dissanayake ' , 'image' => asset('images/commitee/2022/pubudu dissanayake.png') , 'email' => 'pubs98me@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Thathsarani Gamage ' , 'image' => asset('images/commitee/2022/Thathsarani Gamage.jpg') , 'email' => 'ggltthathsaranigamage@gmail.com ' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee member' , 'name' => 'Rashmi Anjana' , 'image' => asset('images/commitee/2022/RASHMI ANJANA.jpg') , 'email' => 'rashmianjana10@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Nikith Fernando' , 'image' => asset('images/commitee/2022/Nikith Fernando.jpg') , 'email' => 'nikithfrenando1999@gmail.com' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'yohan madusha' , 'image' => asset('images/commitee/2022/yohan madusha.jpeg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Senior Commitee Member' , 'name' => 'Harith hansaka' , 'image' => asset('images/commitee/2022/harith hansaka.jpeg') , 'email' => 'harithhansaka@hotmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee"  data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Lakshan Fernando' , 'image' => asset('images/commitee/2022/Lakshan Fernando.JPG') , 'email' => 'flakshan32@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee member' , 'name' => 'Aakil Ahmed ' , 'image' => asset('images/commitee/2022/Aakil Ahmed.jpg') , 'email' => 'ahamedaakil9900@gmail.com ' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Akesh Samuditha ' , 'image' => asset('images/commitee/2022/Akesh Samuditha.JPG') , 'email' => 'Gunathilakehaas.20@uom.lk' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => ' Vasuli Perera ' , 'image' => asset('images/commitee/2022/Vasuli Perera.jpg') , 'email' => 'vasulidp@gmail.com ' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Ashani Gammanpila' , 'image' => asset('images/commitee/2022/Ashani Gammanpila.jpg') , 'email' => 'ashanigammanpila@gmail.com' , 'fbusername' => '', 'colnum' => ' col-xs-2'])
            
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' ,'name' => 'Thilina Mendis' , 'image' => asset('images/commitee/2022/Thilina Mendis.jpg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Senior Commitee Member' , 'name' => 'Aditha Pathiraja' , 'image' => asset('images/commitee/2022/Aditha Pathiraja.jpg') , 'email' => 'adithapraween@gmail.com' , 'fbusername' => '' , 'colnum' => '-md-4'])
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Himanga Nimesh' , 'image' => asset('images/commitee/2022/Himanga Nimesh.jpg') , 'email' => 'himanganimesh@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'pubudu dissanayake' , 'image' => asset('images/commitee/2022/pubudu dissanayake.png') , 'email' => 'pubs98me@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'kavindu deshan' , 'image' => asset('images/commitee/2022/kavindu deshan.jpg') , 'email' => '#' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Sasmitha Rathnaweera' , 'image' => asset('images/commitee/2022/Sasmitha Rathnaweera.jpeg') , 'email' => 'sasmitharathnaweera@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Ashan Subodha' , 'image' => asset('images/commitee/2022/subodha.jpg') , 'email' => 'subodha162@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Sanggavi Thomas' , 'image' => asset('images/commitee/2022/Sanggavi Thomas.jpeg') , 'email' => 'sanggavithomas512@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])  
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
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Deshan Chathuranga' , 'image' => asset('images/commitee/deshan.jpg') , 'email' => 'deshanc321@gmail.com' , 'fbusername' => '', 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Senior Commitee Member' ,'name' => 'Kawmini Wijekoon' , 'image' => asset('images/commitee/kawmini.jpg') , 'email' => 'kawminiwijekoon@gmail.com' , 'fbusername' => 'https://www.facebook.com/kawminiwijekoon'   , 'colnum' => '-md-4'])
                    
                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Jayani Kaushalya' , 'image' => asset('images/commitee/2022/jayani kaushalya.jpg') , 'email' => 'jayani.18@itfac.mrt.ac.lk' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Harshana Wijesekara' , 'image' => asset('images/commitee/2022/harshana.png') , 'email' => 'harshanawijesekara727@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Manjitha Senanayake' , 'image' => asset('images/commitee/2022/Manjitha Senanayake.jpg') , 'email' => 'manjithasenanayake@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Pramodya Kulathunga' , 'image' => asset('images/commitee/2022/Pramodya Kulathunga.JPG') , 'email' => 'kpramodya1997@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Chathurika Wijesooriya' , 'image' => asset('images/commitee/2022/Chathurika Wijesooriya.jpg') , 'email' => 'chathurika.18@itfac.mrt.ac.lk' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
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
                    
                    @include('layouts.round-card', [ 'role' => 'Vice President' , 'name' => 'Dileepa Lakshan ' , 'image' => asset('images/commitee/2022/Dileepa Lakshan.jpg') ,'email' => 'karunathilakadileepa@gmail.com' , 'fbusername' => 'https://www.facebook.com/Diliya073/' , 'colnum' => '-md-4'])
                    @include('layouts.round-card', [ 'role' => 'Senior Commitee Member' , 'name' => 'Nimna Perera' , 'image' => asset('images/commitee/admin-5.jpg') , 'email' => 'nimnaperera98@gmail.com' , 'fbusername' => 'https://www.facebook.com/nnimna.perera/', 'colnum' => '-md-4'])

                </div>
                <div class="row top-padding scroll-commitee" data-entrance="from-bottom">
                    
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Malith Kiriarachchi' , 'image' => asset('images/commitee/2022/Malith Kiriarachchi.jpg') , 'email' => 'malithkavinde@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Vishaka Weligamage' , 'image' => asset('images/commitee/2022/Vishaka Weligamage.jpeg') , 'email' => 'Vishakashasanthi20@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Nimash Eshan' , 'image' => asset('images/commitee/2022/Nimash Eshan.jpg') , 'email' => 'nimash3eshan@gmail.com' , 'fbusername' => 'https://www.facebook.com/nimash0eshan/' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Sakya Thilakarathne' , 'image' => asset('images/commitee/2022/Sakya Thilakarathne.jpg') , 'email' => 'sakyathilakarathne96@gmail.com' , 'fbusername' => 'https://www.facebook.com/sakya.thilakarathne' , 'colnum' => ' col-xs-2'])
                    @include('layouts.round-card', [ 'role' => 'Commitee Member' , 'name' => 'Santhusha Isurinda' , 'image' => asset('images/commitee/2022/Santhusha Isurinda.jpg') , 'email' => 'santhushaisurinda1@gmail.com' , 'fbusername' => '' , 'colnum' => ' col-xs-2'])
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