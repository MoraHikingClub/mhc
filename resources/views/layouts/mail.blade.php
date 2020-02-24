@component('mail::message')
    <h1>Hey {{ $user->fname }},</h1>
    <p>You have requested for reset your password</p>
    
    <p>Please click the following button or follow the link</p>

    <a href="http://morahiking.com/auth/account/{{ $user->api_token }}/changepassword">http://morahiking.com/auth/account/{{ $user->api_token }}/changepassword</a>

    @component('mail::button', ['url' => 'http://morahiking.com/auth/account/'.$user->api_token.'/changepassword', 'color' => 'success'])
    Reset password
    @endcomponent
@endcomponent