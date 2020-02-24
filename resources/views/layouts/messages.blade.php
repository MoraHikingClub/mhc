@if(Session::has('success'))
<div class="container">
    <div class="post-contain">
        <div class="alert alert-{{ Session::has('success') ? 'success' : (Session::has('error') ? 'danger' : '' )}}" role="alert">
            <div class="alert-icon">
                @if(Session::has('success'))
                    <i class="material-icons">check</i>
                @endif
                @if(Session::has('error'))
                    <i class="material-icons">clear</i>
                @endif
              </div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="material-icons">clear</i></span>
              </button>
            <b>{{ Session::has('success') ? 'Success:' : (Session::has('error') ? 'Error' : '') }}</b> {{ Session::has('success') ? Session::get('success') : (Session::has('error') ? Session::get('error') : '') }}
        </div>
    </div>
</div>
@endif

@if(count($errors) > 0)
<div class="container">
    <div class="post-contain">
        <div class="alert alert-danger" role="alert">
            <div class="alert-icon">
                <i class="material-icons">error_outline</i>
              </div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="material-icons">clear</i></span>
              </button>
            <b>Errors:</b>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif