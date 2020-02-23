@extends('layouts.master-social')

@section('title')
Mora Hiking Club | Yo-Yo | Edit account
@endsection

@section('content')
@php
    $user = Auth::user();
@endphp
<div class="auth">
    @if(!(count($errors) > 0))
    <div class="post-contain">
        @endif
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="padding-left: 10px;padding-right: 10px;">
                        <div class="card-header card-header-success">
                            <div class="card-text">
                                <div class="text-center">
                                    <h4 class="card-title">Mora Hiking Club | Yo-Yo | Edit Account</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            {!! Form::model($user, ['route' => 'account.update', 'method' => 'PUT']) !!}
                            <div class="row">
                                <h4>Personal details</h4>
                                <!--Personal Details-->
                            </div>
                            <div class="row">
                                <div class="form-group bmd-form-group col-sm-6 padding-left-none">
                                    {{ Form::label('fname', 'First Name', ['class' => 'bmd-label-floating']) }}
                                    {{ Form::text('fname', null, ['class' => 'form-control', 'required' => '']) }}
                                </div>
                                <div class="form-group bmd-form-group col-sm-6 padding-left-none">
                                    {{ Form::label('lname', 'Last Name', ['class' => 'bmd-label-floating']) }}
                                    {{ Form::text('lname', null, ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group bmd-form-group col-sm-12 padding-left-none">
                                    {{ Form::label('fullname', 'Full Name', ['class' => 'bmd-label-floating']) }}
                                    {{ Form::text('fullname', null, ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group bmd-form-group col-sm-4 padding-left-none" id="datepicker">
                                    {{ Form::label('dob', 'Date of Birth', ['class' => 'bmd-label-floating']) }}
                                    {{ Form::text('dob', date('m/d/Y', strtotime($user->dob)), ['class' => 'form-control datetimepicker']) }}
                                </div>
                                <div class="form-group bmd-form-group col-sm-4 padding-left-none">
                                    {{ Form::label('nic_no', 'National ID Card No.', ['class' => 'bmd-label-floating']) }}
                                    {{ Form::text('nic_no', null, ['class' => 'form-control', 'required' => '', 'minlength' => '10', 'maxlength' => '12']) }}  
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {{ Form::label('gender', 'Gender') }}<br>
                                        <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="gender" value="Male" {{ $user->gender=='Male'?'checked':''}}> Male
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="gender" value="Female" {{ $user->gender=='Female'?'checked':''}}> Female
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row margin-bottom">
                                <div class="form-group bmd-form-group padding-left-none col-sm-4">
                                    {{ Form::label('contact_no', 'Contact No.', ['class' => 'bmd-label-floating']) }}
                                    {{ Form::text('contact_no', null, ['class' => 'form-control', 'required' => '', 'minlength' => '10', 'maxlength' => '10'])}}
                                </div>
                            </div>
                            <div class="row">
                                <h4>Account Details</h4>
                            </div>
                            <div class="row margin-bottom">
                                <div class="col-sm-12 form-group bmd-form-group padding-left-none ">
                                    {{ Form::label('email', 'Email', ['class' => 'bmd-label-floating']) }}
                                    {{ Form::text('email', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}
                                </div>
                            </div>
                            <div class="row">
                                <h4>University Details</h4>
                                <!--University Details-->
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group bmd-form-group padding-left-none">
                                    {{ Form::label('uni_reg_no', 'University Registration No.',['class'=>'bmd-label-floating']) }}
                                    {{ Form::text('uni_reg_no', null, ['class' => 'form-control', 'required' => '', 'minlength' => '7', 'maxlength' => '7']) }}
                                </div>
                            </div>
                            <div class="row margin-bottom">
                                <div class="col-sm-4 form-group bmd-form-group padding-left-none">
                                    {{ Form::label('faculty', 'Faculty') }}
                                    {{ Form::select('faculty', [
                                        'Architecture'              => 'Faculty of Architecture', 
                                        'Business'                  => 'Faculty of Business', 
                                        'Engineering'               => 'Faculty of Engineering', 
                                        'Information Technology'    => 'Faculty of Information Technology'
                                        ], null, ['class' => 'form-control selectpicker', 'required' => '', 'placeholder' => '']) }}
                                </div>
                                <div class="col-sm-5 form-group bmd-form-group padding-left-none">
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
                                        'Engineering(Common/MPR)'                           => 'Engineering(Common)',
                                        'Engineering(Earth Resource Management)'        => 'Engineering(Earth Resource Management)',
                                        'Engineering(Textile and Clothing Management)'  => 'Engineering(Textile and Clothing Management)',
                                        'Transport and Logistics Management'            => 'Transport and Logistics Management',
                                        'Information Technology'                        => 'Information Technology',
                                        'Information Technology and Management'         => 'Information Technology and Management',
                                        'Business Science'                              => 'Business Science',
                                        'Other'                                         => 'Other'
                                        ], null, ['class' => 'form-control selectpicker', 'required' => '', 'placeholder' => '']) }}
                                </div>
                                <div class="col-sm-3 form-group bmd-form-group padding-left-none">
                                    {{ Form::label('level', 'Level') }}
                                    {{ Form::select('level', [
                                        '1' => 'Level 1',
                                        '2' => 'Level 2',
                                        '3' => 'Level 3',
                                        '4' => 'Level 4',
                                        '5' => 'Level 5' 
                                        ], null, ['class' => 'form-control selectpicker', 'required' => '', 'placeholder' => '']) }}
                                </div>
                            </div>
                            <div class="row">
                                <h4>Club Details</h4>
                                <!--Club Details-->
                            </div>
                            <div class="row margin-bottom-low">
                                {{-- <div class="col-sm-6">
                                    {{ Form::label('mem_cat', 'Membership Category') }}
                                    {{ Form::select('mem_cat', [
                                        '1' => '1 year',
                                        '2' => '2 years',
                                        '3' => '3 years',
                                        '4' => '4 years',
                                        '5' => '5 years'
                                        ], null, ['class' => 'form-control', 'required' => '']) }}
                                </div> --}}
                                {{-- <div class="col-sm-6">
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
                                </div> --}}
                            </div>
                            @php
                                $skills[] = explode('/',$user->skills);
                                print_r($skills[0]);
                            @endphp
                            <div class="row">
                                <div class="col-sm-12">
                                    {{ Form::label('skills[]', 'Skills') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            {{ Form::checkbox('skills[]', 'Photography', in_array('Photography',$skills[0]) , ['class' => 'form-check-input' , 'id' => 'skills']) }} Photography
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            {{ Form::checkbox('skills[]', 'Videography', in_array('Videography',$skills[0]), ['class' => 'form-check-input' , 'id' => 'skills']) }} Videography
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            {{ Form::checkbox('skills[]', 'Photo Editing', in_array('Photo Editing',$skills[0]), ['class' => 'form-check-input' , 'id' => 'skills']) }} Photo Editing
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            {{ Form::checkbox('skills[]', 'Video Editing', in_array('Video Editing',$skills[0]), ['class' => 'form-check-input' , 'id' => 'skills']) }} Video Editing
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            {{ Form::checkbox('skills[]', 'First Aid', in_array('First Aid',$skills[0]), ['class' => 'form-check-input' , 'id' => 'skills']) }} First Aid
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            {{ Form::checkbox('skills[]', 'Article Writing', in_array('Article Writing',$skills[0]), ['class' => 'form-check-input' , 'id' => 'skills']) }} Article Writing
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            {{ Form::checkbox('skills[]', 'Sponsorship Hunting', in_array('Sponsorship Hunting',$skills[0]), ['class' => 'form-check-input' , 'id' => 'skills']) }} Sponsorship Hunting
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            {{ Form::checkbox('skills[]', 'Fund Raising', in_array('Fund Raising',$skills[0]), ['class' => 'form-check-input' , 'id' => 'skills']) }} Fund Raising
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            {{ Form::checkbox('skills[]', 'Event Planning', in_array('Event Planning',$skills[0]), ['class' => 'form-check-input' , 'id' => 'skills']) }} Event Planning
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            {{ Form::checkbox('skills[]', 'Risk Management', in_array('Risk Management',$skills[0]), ['class' => 'form-check-input' , 'id' => 'skills']) }} Risk Management
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            {{ Form::checkbox('skills[]', 'Designing(Photoshop, Coraldraw, Illustrator)', in_array('Designing(Photoshop, Coraldraw, Illustrator)',$skills[0]), ['class' => 'form-check-input' , 'id' => 'skills']) }} Designing(Photoshop, Coraldraw, Illustrator)
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row margin-bottom-low">
                                <div class="col-sm-12">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            {{ Form::checkbox('skills[]', 'Web Designing and Development(HTML, PHP, CSS, JS)', in_array('Web Designing and Development(HTML, PHP, CSS, JS)',$skills[0]), ['class' => 'form-check-input' , 'id' => 'skills']) }}Web Designing and Development(HTML, PHP, CSS, JS)
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row margin-bottom-low">
                                <div class="col-sm-12">
                                    {{ Form::label('bio', 'Bio') }}

                                    <p class="description margin-bottom-low">Write a short description about you. This
                                        description will figured out in our official(<a href="/">morahiking.com</a>) as
                                        your membership profile.</p>
                                    <p class="description">Minimum 100 chracters: <span id="charcount">100</span> characters remaining.</p>

                                    {{ Form::textarea('bio', null, ['class' => 'form-control', 'minlength' => '100', 'rows' => '7']) }}
                                </div>
                            </div>
                            <div class="row margin-bottom-low">
                                <div class="col-sm-12">
                                    {{ Form::label('fb_url', 'Facebook Url') }}

                                    <p class="description">If you have a Facebook account enter your account link here.
                                    </p>

                                    {{ Form::text('fb_url', null, ['class' => 'form-control', 'placeholder' => 'Copy your facebook profile url here...']) }}
                                </div>
                            </div>
                            <div class="row margin-bottom">
                                <div class="col-sm-12">
                                    {{ Form::label('insta_url', 'Instagram Url') }}

                                    <p class="description">If you have a Instagram account enter your account link here.
                                    </p>

                                    {{ Form::text('insta_url', null, ['class' => 'form-control', 'placeholder' => 'Copy your instagram profile url here...']) }}
                                </div>
                            </div>
                            <div class="row">
                                <h4>Additional Details</h4>
                                <!--Additional Details-->
                            </div>
                            <div class="row">
                                <p class="description margin-bottom-low">We need following information to take necessary
                                    actions in an emergency situation.</p>
                                <p class="description margin-bottom-low">Make sure about the accuracy of information
                                    that you are providing</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group bmd-form-group padding-left-none">
                                    {{ Form::label('kin_name', 'Next of Kin',['class'=>'bmd-label-floating']) }}
                                    {{ Form::text('kin_name', null, ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group bmd-form-group padding-left-none">
                                    {{ Form::label('kinship', 'Kinship') }}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="kinship" value="Father" {{ $user->kinship=='Father' ? 'checked' : ''}}>
                                                    Father
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="kinship" value="Mother" {{ $user->kinship=='Mother' ? 'checked' : ''}}>
                                                    Mother
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="kinship" value="Other" {{ ($user->kinship!='Father' && $user->kinship!='Mother') ? 'checked' : ''}}>
                                                    Other
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            {{ Form::text('kinship1', ($user->kinship!='Father' && $user->kinship!='Mother') ? $user->kinship : '', ['class' => 'form-control', 'placeholder' => 'Kinship...']) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group bmd-form-group padding-left-none">
                                    {{ Form::label('kin_no', 'Contact No.',['class'=>'bmd-label-floating']) }}
                                    {{ Form::text('kin_no', null, ['class' => 'form-control', 'required' => '', 'minlength' => '10', 'maxlength' => '10']) }}
                                </div>
                                <div class="col-sm-6 form-group bmd-form-group padding-left-none">
                                    {{ Form::label('kin_no1', 'Contact No.(Optional)',['class'=>'bmd-label-floating']) }}
                                    {{ Form::text('kin_no1', null, ['class' => 'form-control', 'minlength' => '10', 'maxlength' => '10']) }}
                                </div>
                            </div>
                            <div class="row margin-bottom">
                                <div class="col-sm-12 form-group bmd-form-group padding-left-none">
                                    {{ Form::label('kin_address', 'Address',['class'=>'bmd-label-floating']) }}
                                    {{ Form::text('kin_address', null, ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="row">
                                <h4>Medical Details</h4>
                                <!--Medical Details-->
                            </div>
                            <div class="row">
                                <div class="col-sm-3 form-group bmd-form-group padding-left-none">
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
                            <div class="row margin-bottom-low">
                                <div class="col-sm-12 form-group bmd-form-group padding-left-none">
                                    {{ Form::label('first_aid','Skills in first aid') }}

                                    <p class="description margin-bottom-low">If you have any kind of knowledge about
                                        first aid please mention it here. And also if you followed any course in first
                                        mention them in here.</p>
                                    <p class="description">**If there is nothing to say please put 'No'</p>

                                    {{ Form::text('first_aid', 'No', ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            {{-- <div class="row">
                                <strong>
                                    Allergies
                                </strong>
                            </div>
                            <div class="row margin-bottom-low">
                                <p class="description margin-bottom-low">If you have any allergies please mention them
                                    all in here.</p>

                                <p class="description">**If there is nothing to say please put 'No'</p>
                            </div>
                            <div class="row margin-bottom-low">
                                <div class="col-sm-12">
                                    {{ Form::label('med_allergy', 'Medicine Allergies')}}

                                    <p class="description">**If there is nothing to say please put 'No'</p>

                                    {{ Form::text('med_allergy', 'No', ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="row margin-bottom-low">
                                <div class="col-sm-12">
                                    {{ Form::label('food_allergy', 'Food Allergies')}}

                                    <p class="description">**If there is nothing to say please put 'No'</p>

                                    {{ Form::text('food_allergy', 'No', ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="row margin-bottom-low">
                                <div class="col-sm-12">
                                    {{ Form::label('other_allergy', 'Other Allergies')}}

                                    <p class="description margin-bottom-low">ex:-Allergies caused by pollen, biting of
                                        insects etc.</P>
                                    <p class="description">**If there is nothing to say please put 'No'</p>

                                    {{ Form::text('other_allergy', 'No', ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div> --}}
                            <div class="row">
                                <strong>
                                    Special Medical Conditions
                                </strong>
                            </div>
                            <div class="row margin-bottom-low">
                                <p class="description margin-bottom-low">If you have any special medical conditions
                                    please mention them all below.</p>
                            </div>
                            <div class="row margin-bottom-low">
                                <div class="col-sm-12 form-group bmd-form-group padding-left-none">
                                    {{ Form::label('injury', 'Injuries')}}

                                    <p class="description">**If there is nothing to say please put 'No'</p>

                                    {{ Form::text('injury', 'No', ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="row margin-bottom-low">
                                <div class="col-sm-12 form-group bmd-form-group padding-left-none">
                                    {{ Form::label('longterm_med_issue', 'Long term medical issues')}}

                                    <p class="description margin-bottom-low">ex:Asthma, catalepsy etc.</p>
                                    <p class="description">**If there is nothing to say please put 'No'</p>

                                    {{ Form::text('longterm_med_issue', 'No', ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="row margin-bottom">
                                <div class="col-sm-12 form-group bmd-form-group padding-left-none">
                                    {{ Form::label('medicine', 'Medicines')}}

                                    <p class="description margin-bottom-low">If you use any kind of medications please
                                        mention them all as the example below. Please use the same format and newline
                                        for each medicine.</p>
                                    <p class="description margin-bottom-low">ex:-Asthma - Inhaler</p>
                                    <p class="description">**If there is nothing to say please put 'No'</p>

                                    {{ Form::text('medicine', 'No', ['class' => 'form-control', 'required' => '']) }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    {{ Form::submit('Update account', ['class' => 'btn btn-success btn-block', 'id' => 'signup-btn', 'disabled' => '']) }}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $('#bio').on('keyup',function(){
        var x = $('#bio').val().length;
            if( x > 99){
                $('#bio').addClass('validate-correct');
                $('#bio').removeClass('validate-incorrect');
                $('#charcount').text(0);
                $('#signup-btn').prop('disabled', false);
                $('.required').css('color','#4caf50');
            }else{
                $('#bio').addClass('validate-incorrect');
                $('#bio').removeClass('validate-correct');
                $('#charcount').text(100-x);
                $('#signup-btn').prop('disabled', true);
                $('.required').css('color','#f44336');
            }
        });
    $(document).ready(function(){
        var x = $('#bio').val().length;
            if( x > 99){
                $('#bio').addClass('validate-correct');
                $('#bio').removeClass('validate-incorrect');
                $('#charcount').text(0);
                $('#signup-btn').prop('disabled', false);
                $('.required').css('color','#4caf50');
            }else{
                $('#bio').addClass('validate-incorrect');
                $('#bio').removeClass('validate-correct');
                $('#charcount').text(100-x);
                $('#signup-btn').prop('disabled', true);
                $('.required').css('color','#f44336');
            }
        });
</script>
@endsection

@section('script1')
<script>
    $('.datetimepicker').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    },
    format:'L'
})
</script>
<script>
    $('#dob').focusout(function(){
        if($('#dob').val())
            $('#datepicker').addClass('is-filled');
        else
            $('#datepicker').removeClass('is-filled');
    });
</script>
@endsection