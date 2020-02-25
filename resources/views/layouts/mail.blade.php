@component('mail::message')
    <h1>Hey {{ $user->fname }},</h1>
    You have requested for reset your password
    
    Please click the following button or follow the link

    http://morahiking.com/auth/account/{{ $user->api_token }}/changepassword

    @component('mail::button', ['url' => 'http://morahiking.com/auth/account/'.$user->api_token.'/changepassword', 'color' => 'success'])
    Reset password
    @endcomponent
@endcomponent