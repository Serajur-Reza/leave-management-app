@extends('common')

@section('content')

<form method="POST" action="{{ url('/dashboard') }}">
    @csrf
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Start</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">End</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputPassword3">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Apply</button>
</form>
@endsection