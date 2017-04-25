@if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    <strong>Success:</strong> {{Session::get('success')}}
  </div>

@endif

@if(Session::has('nosuccess'))
  <div class="alert alert-danger" role="alert">
    <strong>Alert:</strong> {{Session::get('nosuccess')}}
  </div>

@endif

@if(count($errors)> 0)
  <div class="alert alert-danger" role="alert">
    <strong>Errors:</strong>
    <ul>
    @foreach($errors->all() as $error)
      <li>
        {{$error}}
      </li>
    @endforeach
    </ul>
  </div>

@endif
