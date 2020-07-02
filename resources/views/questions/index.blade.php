@extends('adminlte.master')

@section('content')
  <div class="mx-2">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Question</th>
      </tr>
    </thead>
    <tbody>
      @foreach($questions as $key => $item)
        <tr>
          <td>{{$key + 1}}</td>
          <td>{{$item->content}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <a href="/questions/create"><button type="button" class="btn btn-outline-primary">Ask a Question</button></a>
  </div>
@endsection
