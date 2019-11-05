<div class="col{{ $colnum }} text-center">
    <div class="circular">
        <img src="{{ $image }}" class="img-circle" alt="{{ $role }}" />
    </div>
    <h5>{!! $role !!}</h5>
    <p>{{ $name }}</p>
    <ul class="list-unstyled">
        @if($email != '')
        <a class="team-social" href="mailto:{{ $email }}">
            <i class="fa fa-envelope social-env"></i>
        </a>
        @endif
        @if($fbusername != '')
        <a class="team-social" href="{{ $fbusername }}">
            <i class="fa fa-facebook social-fb"></i>
        </a>
        @endif
    </ul>
</div>