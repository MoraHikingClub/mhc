@extends('layouts.master-admin')

@section('title', 'Mora Hiking Club | Active users')

@section('content')
<div class="post-contain">
    <div class="container-fluid">
        <div class="row" style="margin-bottom:50px;">
            <div class="col-md-3">
                <input type="text" name="q" class="form-control" placeholder="Search name or membership ID..." id="search" style="border: 1px solid #ced4da;" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card margin-bottom-low">
                    <div class="card-header card-header-success">
                        Active users
                    </div>
                    <div class="card-body" style="overflow:scroll;">
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Membership ID</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Fullname</th>
                                <th>Date of birth</th>
                                <th>NIC No.</th>
                                <th>Gender</th>
                                <th>Contact no.</th>
                                <th>Email address</th>
                                <th>University ID No.</th>
                                <th>Faculty</th>
                                <th>Department</th>
                                <th>Level</th>
                                <th>Skills</th>
                                <th>Bio</th>
                                <th>FB account</th>
                                <th>Instagram account</th>
                                <th>Kin name</th>
                                <th>Kinship</th>
                                <th>Kin Contact no.</th>
                                <th>Kin Contact no.(optional)</th>
                                <th>Address</th>
                                <th>Blood group</th>
                                <th>First aid knowledge</th>
                                <th>Injuries</th>
                                <th>Longterm Medical Issues</th>
                                <th>Medicine</th>
                                <th>Account activated at</th>
                            </thead>
                            <tbody>
                                @php
                                $i=0;
                                @endphp
                                @foreach($users as $user)
                                @if($user->email != 'webadmin@morahiking.com')
                                @php
                                $i++;
                                @endphp
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $user->m_id }}</td>
                                    <td>{{ $user->fname }}</td>
                                    <td>{{ $user->lname }}</td>
                                    <td>{{ $user->fullname }}</td>
                                    <td>{{ $user->dob }}</td>
                                    <td>{{ $user->nic_no }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>{{ $user->contact_no }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->uni_reg_no }}</td>
                                    <td>{{ $user->faculty }}</td>
                                    <td>{{ $user->degree }}</td>
                                    <td>Level {{ $user->level }}</td>
                                    <td>{{ $user->skills }}</td>
                                    <td>{{ $user->bio }}</td>
                                    <td>{{ $user->fb_url }}</td>
                                    <td>{{ $user->insta_url }}</td>
                                    <td>{{ $user->kin_name }}</td>
                                    <td>{{ $user->kinship }}</td>
                                    <td>{{ $user->kin_no }}</td>
                                    <td>{{ $user->kin_no1 }}</td>
                                    <td>{{ $user->kin_address }}</td>
                                    <td>{{ $user->blood }}</td>
                                    <td>{{ $user->first_aid }}</td>
                                    <td>{{ $user->injury }}</td>
                                    <td>{{ $user->longterm_med_issue }}</td>
                                    <td>{{ $user->medicine }}</td>
                                    <td>{{ $user->acc_activated_at }}</td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
    const debounce = (callback,wait) => {
        let timeout;

        return (argument) => {
            clearTimeout(timeout);
            timeout = setTimeout(() => callback(argument), wait);
        };
    };

    $('#search').on('keyup', debounce(function() {
        var value = $('#search').val();
        $.ajax({
            type: 'get',
            url: "{{ route('admin.searchactiveusers')}}",
            data: {
                'q': value
            },
            success: function(data) {
                $('tbody').html(data);
            }
        });
    }, 500));
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
</script>
@endsection