@extends('adminlte.master')

@section('content')
  <div class="mx-2 py-2">
    <form action="/questions" method="POST">
      @csrf
      <div class="form-group">
        <label for="content">Question :</label>
        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        <button type="submit" class="btn btn-primary my-2">Submit</button>
      </div>
    </form>
  </div>
@endsection
