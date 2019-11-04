@extends('layouts.master')

@section('title')
Mora Hiking Club | Sign up
@endsection

@section('content')
<div class="auth">
    @if(!(count($errors) > 0))
    <div class="post-contain">
        @endif
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title card-top text-center">
                            <h4>Mora Hiking Club | Signup</h4>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'signup']) !!}
                            <div class="form-row">
                                <h5>Personal details</h5>
                                <!--Personal Details-->
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    {{ Form::label('fname', 'First Name') }}
                                    {{ Form::text('fname', null, ['class' => 'form-control', 'required' => '']) }}
                                </div>
                                <div class="col-sm-6">
                                    {{ Form::label('lname', 'Last Name') }}
                                    {{ Form::text('lname', null, ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12">
                                    {{ Form::label('fullname', 'Full Name') }}
                                    {{ Form::text('fullname', null, ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    {{ Form::label('dob', 'Date of Birth') }}<br>
                                    {{ Form::date('dob', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                                </div>
                                <div class="col-sm-4">
                                    {{ Form::label('nic_no', 'National ID Card No.') }}
                                    {{ Form::text('nic_no', null, ['class' => 'form-control', 'required' => '', 'minlength' => '10', 'maxlength' => '12']) }}
                                </div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-3 offset-sm-1">
                                            {{ Form::label('gender', 'Gender') }}
                                        </div>
                                    </div>
                                    <div class="row margin-bottom-low">
                                        <div class="col-sm-4 offset-sm-1">
                                            {{ Form::radio('gender', 'Male') }}{{ Form::label('gender', 'Male') }}
                                        </div>
                                        <div class="col-sm-5">
                                            {{ Form::radio('gender', 'Female') }}{{ Form::label('gender', 'Female') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row margin-bottom">
                                <div class="col-sm-4">
                                    {{ Form::label('contact_no', 'Contact No.') }}
                                    {{ Form::text('contact_no', null, ['class' => 'form-control', 'required' => '', 'minlength' => '10', 'maxlength' => '10'])}}
                                </div>
                            </div>
                            <div class="form-row">
                                <h5>Account Details</h5>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12">
                                    {{ Form::label('email', 'Email') }}
                                    {{ Form::text('email', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}
                                </div>
                            </div>
                            <div class="form-row margin-bottom">
                                <div class="col-sm-6">
                                    {{ Form::label('password', 'Password') }}
                                    {{ Form::password('password', ['class' => 'form-control', 'required' => '', 'minlength' => '8', 'maxlength' => '60']) }}
                                </div>
                                <div class="col-sm-6">
                                    {{ Form::label('confirm', 'Confirm Password') }}
                                    {{ Form::password('confirm', ['class' => 'form-control', 'required' => '', 'minlength' => '8', 'maxlength' => '60']) }}
                                </div>
                            </div>
                            <div class="form-row">
                                <h5>University Details</h5>
                                <!--University Details-->
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    {{ Form::label('faculty', 'Faculty') }}
                                    {{ Form::select('faculty', [
                                        'Architecture'              => 'Faculty of Architecture', 
                                        'Business'                  => 'Faculty of Business', 
                                        'Engineering'               => 'Faculty of Engineering', 
                                        'Information Technology'    => 'Faculty of Information Technology'
                                        ], null, ['class' => 'form-control', 'required' => '', 'placeholder' => '']) }}
                                </div>
                                <div class="col-sm-6">
                                    {{ Form::label('degree', 'Degree program') }}
                                    {{ Form::select('degree', [
                                        'Architecture'                                  => 'Architecture',
                                        'Facilty Management'                            => 'Facilty Management',
                                        'Integrated Design'                             => 'Integrated Design',
                                        'Town and Country Planning'                     => 'Town and Country Planning',
                                        'Quantity Surveying'                            => 'Quantity Surveying',
                                        'Landscape Architecture'                        => 'Landscape Architecture',
                                        'Biomedical Engineering'                        => 'Biomedical Engineering',
                                        'Chemical Engineering'                          => 'Chemical Engineering',
                                        'Civil Engineering'                             => 'Civil Engineering',
                                        'Computer Science and Engineering'              => 'Computer Science and Engineering',
                                        'Electrical Engineering'                        => 'Electrical Engineering',
                                        'Electronic and Telecommunication Engineering'  => 'Electronic and Telecommunication Engineering',
                                        'Material Science Engineering'                  => 'Material Science Engineering',
                                        'Mechanical Engineering'                        => 'Mechanical Engineering',
                                        'Engineering(Common)'                           => 'Engineering(Common)',
                                        'Engineering(Earth Resource Management)'        => 'Engineering(Earth Resource Management)',
                                        'Engineering(Textile and Clothing Management)'  => 'Engineering(Textile and Clothing Management)',
                                        'Transport and Logistics Management'            => 'Transport and Logistics Management',
                                        'Information Technology'                        => 'Information Technology',
                                        'Information Technology and Management'         => 'Information Technology and Management',
                                        'Business Science'                              => 'Business Science',
                                        'Other'                                         => 'Other'
                                        ], null, ['class' => 'form-control', 'required' => '', 'placeholder' => '']) }}
                                </div>
                            </div>
                            <div class="form-row margin-bottom">
                                <div class="col-sm-6">
                                    {{ Form::label('uni_reg_no', 'University Registration No.') }}
                                    {{ Form::text('uni_reg_no', null, ['class' => 'form-control', 'required' => '', 'minlength' => '7', 'maxlength' => '7']) }}
                                </div>
                                <div class="col-sm-3">
                                    {{ Form::label('level', 'Level') }}
                                    {{ Form::select('level', [
                                        '1' => 'Level 1',
                                        '2' => 'Level 2',
                                        '3' => 'Level 3',
                                        '4' => 'Level 4',
                                        '5' => 'Level 5' 
                                        ], null, ['class' => 'form-control', 'required' => '', 'placeholder' => '']) }}
                                </div>
                            </div>
                            <div class="form-row">
                                <h5>Club Details</h5>
                                <!--Club Details-->
                            </div>
                            <div class="form-row margin-bottom-low">
                                <div class="col-sm-6">
                                    {{ Form::label('mem_cat', 'Membership Category') }}
                                    {{ Form::select('mem_cat', [
                                        '1' => '1 year',
                                        '2' => '2 years',
                                        '3' => '3 years',
                                        '4' => '4 years',
                                        '5' => '5 years'
                                        ], null, ['class' => 'form-control', 'required' => '']) }}
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col">
                                            {{ Form::label('join_date', 'Joined Date(Approximately)') }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            {{ Form::text('join_date_m', null, ['class' => 'form-control', 'maxlength' => '2', 'placeholder' => 'Month']) }}
                                        </div>
                                        <div class="col-sm-5">
                                            {{ Form::text('join_date_y', null, ['class' => 'form-control', 'maxlength' => '4', 'placeholder' => 'Year']) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12">
                                    {{ Form::label('skills[]', 'Skills') }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    {{ Form::checkbox('skills[]', 'Photography', null, ['class' => 'checkbox' , 'id' => 'skills']) }}{{ Form::label('skills', 'Photography') }}
                                </div>
                                <div class="col-sm-4">
                                    {{ Form::checkbox('skills[]', 'Videography', null, ['class' => 'checkbox' , 'id' => 'skills']) }}{{ Form::label('skills', 'Videography') }}
                                </div>
                                <div class="col-sm-4">
                                    {{ Form::checkbox('skills[]', 'Photo Editing', null, ['class' => 'checkbox' , 'id' => 'skills']) }}{{ Form::label('skills', 'Photo Editing') }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    {{ Form::checkbox('skills[]', 'Video Editing', null, ['class' => 'checkbox' , 'id' => 'skills']) }}{{ Form::label('skills', 'Video Editing') }}
                                </div>
                                <div class="col-sm-4">
                                    {{ Form::checkbox('skills[]', 'First Aid', null, ['class' => 'checkbox' , 'id' => 'skills']) }}{{ Form::label('skills', 'First Aid') }}
                                </div>
                                <div class="col-sm-4">
                                    {{ Form::checkbox('skills[]', 'Article Writing', null, ['class' => 'checkbox' , 'id' => 'skills']) }}{{ Form::label('skills', 'Article Writing') }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    {{ Form::checkbox('skills[]', 'Sponsorship Hunting', null, ['class' => 'checkbox' , 'id' => 'skills']) }}{{ Form::label('skills', 'Sponsorship Hunting') }}
                                </div>
                                <div class="col-sm-4">
                                    {{ Form::checkbox('skills[]', 'Fund Raising', null, ['class' => 'checkbox' , 'id' => 'skills']) }}{{ Form::label('skills', 'Fund Raising') }}
                                </div>
                                <div class="col-sm-4">
                                    {{ Form::checkbox('skills[]', 'Event Planning', null, ['class' => 'checkbox' , 'id' => 'skills']) }}{{ Form::label('skills', 'Event Planning') }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    {{ Form::checkbox('skills[]', 'Risk Management', null, ['class' => 'checkbox' , 'id' => 'skills']) }}{{ Form::label('skills', 'Risk Management') }}
                                </div>
                                <div class="col-sm-8">
                                    {{ Form::checkbox('skills[]', 'Designing(Photoshop, Coraldraw, Illustrator)', null, ['class' => 'checkbox' , 'id' => 'skills']) }}{{ Form::label('skills', 'Designing(Photoshop, Coraldraw, Illustrator)') }}
                                </div>
                            </div>
                            <div class="form-row margin-bottom-low">
                                <div class="col-sm-12">
                                    {{ Form::checkbox('skills[]', 'Web Designing and Development(HTML, PHP, CSS, JS)', null, ['class' => 'checkbox' , 'id' => 'skills']) }}{{ Form::label('skills', 'Web Designing and Development(HTML, PHP, CSS, JS)') }}
                                </div>
                            </div>
                            <div class="form-row margin-bottom-low">
                                <div class="col-sm-12">
                                    {{ Form::label('bio', 'Bio') }}

                                    <p class="description margin-bottom-low">Write a short description about you. This
                                        description will figured out in our official(<a href="/">morahiking.com</a>) as
                                        your membership profile.</p>
                                    <p class="description">Minimum 100 chracters: <span id="charcount">100</span> characters remaining.</p>

                                    {{ Form::textarea('bio', null, ['class' => 'form-control', 'minlength' => '100', 'rows' => '7']) }}
                                </div>
                            </div>
                            <div class="form-row margin-bottom-low">
                                <div class="col-sm-12">
                                    {{ Form::label('fb_url', 'Facebook Url') }}

                                    <p class="description">If you have a Facebook account enter your account link here.
                                    </p>

                                    {{ Form::text('fb_url', null, ['class' => 'form-control', 'placeholder' => 'Copy your facebook profile url here...']) }}
                                </div>
                            </div>
                            <div class="form-row margin-bottom">
                                <div class="col-sm-12">
                                    {{ Form::label('insta_url', 'Instagram Url') }}

                                    <p class="description">If you have a Instagram account enter your account link here.
                                    </p>

                                    {{ Form::text('insta_url', null, ['class' => 'form-control', 'placeholder' => 'Copy your instagram profile url here...']) }}
                                </div>
                            </div>
                            <div class="form-row">
                                <h5>Additional Details</h5>
                                <!--Additional Details-->
                                <p class="description margin-bottom-low">We need following information to take necessary
                                    actions in an emergency situation.</p>
                                <p class="description margin-bottom-low">Make sure about the accuracy of information
                                    that you are providing</p>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12">
                                    {{ Form::label('kin_name', 'Next of Kin') }}
                                    {{ Form::text('kin_name', null, ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12">
                                    {{ Form::label('kinship', 'Kinship') }}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            {{ Form::radio('kinship', 'Father') }}{{ Form::label('Father','Father') }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            {{ Form::radio('kinship', 'Mother') }}{{ Form::label('Mother','Mother') }}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            {{ Form::radio('kinship', 'Other') }}{{ Form::label('Other','Other') }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            {{ Form::text('kinship1', null, ['class' => 'form-control', 'placeholder' => 'Kinship...']) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    {{ Form::label('kin_no', 'Contact No.') }}
                                    {{ Form::text('kin_no', null, ['class' => 'form-control', 'required' => '', 'minlength' => '10', 'maxlength' => '10']) }}
                                </div>
                                <div class="col-sm-6">
                                    {{ Form::label('kin_no1', 'Contact No.(Optional)') }}
                                    {{ Form::text('kin_no1', null, ['class' => 'form-control', 'minlength' => '10', 'maxlength' => '10']) }}
                                </div>
                            </div>
                            <div class="form-row margin-bottom">
                                <div class="col-sm-12">
                                    {{ Form::label('kin_address', 'Address') }}
                                    {{ Form::text('kin_address', null, ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="form-row">
                                <h5>Medical Details</h5>
                                <!--Medical Details-->
                            </div>
                            <div class="form-row">
                                <div class="col-sm-3">
                                    {{ Form::label('blood','Blood type') }}
                                    {{ Form::select('blood',[
                                        'A+'    => 'A+',
                                        'B+'    => 'B+',
                                        'AB+'   => 'AB+',
                                        'O+'    => 'O+',
                                        'A-'    => 'A-',
                                        'B-'    => 'B-',
                                        'AB-'   => 'AB-',
                                        'O-'    => 'O-'
                                    ], null, ['class' => 'form-control', 'required' => '', 'placeholder' => '']) }}
                                </div>
                            </div>
                            <div class="form-row margin-bottom-low">
                                <div class="col-sm-12">
                                    {{ Form::label('first_aid','Skills in first aid') }}

                                    <p class="description margin-bottom-low">If you have any kind of knowledge about
                                        first aid please mention it here. And also if you followed any course in first
                                        mention them in here.</p>
                                    <p class="description">**If there is nothing to say please put 'No'</p>

                                    {{ Form::textarea('first_aid', 'No', ['class' => 'form-control', 'required' => '' ]) }}
                                </div>
                            </div>
                            <div class="form-row">
                                <strong>
                                    Allergies
                                </strong>
                            </div>
                            <div class="form-row margin-bottom-low">
                                <p class="description margin-bottom-low">If you have any allergies please mention them
                                    all in here.</p>

                                <p class="description">**If there is nothing to say please put 'No'</p>
                            </div>
                            <div class="form-row margin-bottom-low">
                                <div class="col-sm-12">
                                    {{ Form::label('med_allergy', 'Medicine Allergies')}}

                                    <p class="description">**If there is nothing to say please put 'No'</p>

                                    {{ Form::text('med_allergy', 'No', ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="form-row margin-bottom-low">
                                <div class="col-sm-12">
                                    {{ Form::label('food_allergy', 'Food Allergies')}}

                                    <p class="description">**If there is nothing to say please put 'No'</p>

                                    {{ Form::text('food_allergy', 'No', ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="form-row margin-bottom-low">
                                <div class="col-sm-12">
                                    {{ Form::label('other_allergy', 'Other Allergies')}}

                                    <p class="description margin-bottom-low">ex:-Allergies caused by pollen, biting of
                                        insects etc.</P>
                                    <p class="description">**If there is nothing to say please put 'No'</p>

                                    {{ Form::text('other_allergy', 'No', ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="form-row">
                                <strong>
                                    Special Medical Conditions
                                </strong>
                            </div>
                            <div class="form-row margin-bottom-low">
                                <p class="description margin-bottom-low">If you have any special medical conditions
                                    please mention them all below.</p>
                            </div>
                            <div class="form-row margin-bottom-low">
                                <div class="col-sm-12">
                                    {{ Form::label('injury', 'Injuries')}}

                                    <p class="description">**If there is nothing to say please put 'No'</p>

                                    {{ Form::text('injury', 'No', ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="form-row margin-bottom-low">
                                <div class="col-sm-12">
                                    {{ Form::label('longterm_med_issue', 'Long term medical issues')}}

                                    <p class="description margin-bottom-low">ex:Asthma, catalepsy etc.</p>
                                    <p class="description">**If there is nothing to say please put 'No'</p>

                                    {{ Form::text('longterm_med_issue', 'No', ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="form-row margin-bottom">
                                <div class="col-sm-12">
                                    {{ Form::label('medicine', 'Medicines')}}

                                    <p class="description margin-bottom-low">If you use any kind of medications please
                                        mention them all as the example below. Please use the same format and newline
                                        for each medicine.</p>
                                    <p class="description margin-bottom-low">ex:-Asthma - Inhaler</p>
                                    <p class="description">**If there is nothing to say please put 'No'</p>

                                    {{ Form::text('medicine', 'No', ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    {{ Form::submit('Submit', ['class' => 'btn btn-success btn-block', 'id' => 'signup-btn', 'disabled' => '']) }}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(!(count($errors) > 0))
    </div>
    @endif
</div>
@endsection

@section('script')
<style>
    body {
        background-attachment: fixed;
        background-image: url('{{ asset('/images/auth.jpg') }}');
        background-size: cover;
        padding-bottom: 150px;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $('#confirm').on('keyup',function(){
        if($('#password').val() == $('#confirm').val()){
            $('#confirm').addClass('validate-correct');
            $('#confirm').removeClass('validate-incorrect');
            $('#signup-btn').prop('disabled', false);
        }else{
            $('#confirm').addClass('validate-incorrect');
            $('#confirm').removeClass('validate-correct');
            $('#signup-btn').prop('disabled', true);
        }
    });
</script>
<script>
    $('#bio').on('keyup',function(){
        var x = $('#bio').val().length;
            if( x > 99){
                $('#bio').addClass('validate-correct');
                $('#bio').removeClass('validate-incorrect');
                if(x == 100){
                    $('#charcount').text(100-x);
                }
                $('#signup-btn').prop('disabled', false);
            }else{
                $('#bio').addClass('validate-incorrect');
                $('#bio').removeClass('validate-correct');
                $('#charcount').text(100-x);
                $('#signup-btn').prop('disabled', true);
            }
        });
</script>
@endsection

