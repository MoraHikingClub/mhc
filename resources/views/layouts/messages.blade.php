@if(Session::has('success') )
<div class="container">
    <div class="post-contain">
        <div class="alert alert-{{ Session::has('success') ? 'success' : 'danger' }}" role="alert">
            <strong>{{ Session::has('success') ? 'Success:' : 'Error' }}</strong> {{ Session::has('success') ? Session::get('success') : Session::get('error') }}
        </div>
    </div>
</div>
@endif

@if(count($errors) > 0)
<div class="container">
    <div class="post-contain">
        <div class="alert alert-danger" role="alert">
            <strong>Errors:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif