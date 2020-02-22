@if(Session::has('success') )
<div class="container">
    <div class="post-contain">
        <div class="alert alert-{{ Session::has('success') ? 'success' : 'danger' }}" role="alert">
            <div class="alert-icon">
                <i class="material-icons">check</i>
              </div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="material-icons">clear</i></span>
              </button>
            <b>{{ Session::has('success') ? 'Success:' : 'Error' }}</b> {{ Session::has('success') ? Session::get('success') : Session::get('error') }}
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