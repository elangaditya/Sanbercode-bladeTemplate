@extends('adminlte.master')

@section('content')
  <div class="bg-light">
    <blockquote class="blockquote bg-light my-0">
      <p class="mb-0">{{$question[0]->content}}</p>
    </blockquote>

    <div class="mx-2">
      <table class="table">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col" style="width:95%">Answers</th>
        </tr>
      </thead>
      <tbody>
        @foreach($filtered as $key => $item)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->content}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="mx-2 pt-2">
      <form action="/answer/{{$id}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="content">Answers here :</label>
          <textarea class="form-control" id="content" name="content" rows="3"></textarea>
          <input type="hidden" id="questionId" name="questionId" value="{{$id}}">
          <button type="submit" class="btn btn-primary my-2">Submit</button>
        </div>
      </form>
    </div>
  </div>
  </div>

@endsection
