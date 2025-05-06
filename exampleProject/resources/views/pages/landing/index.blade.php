@extends('layout.app')
@section('content')
<div class="container">
    <div class="text-success">
        <h1>To Do List</h1>
    </div>
    <form class="form" action="{{ route('landing.store') }}" method="POST">
        @csrf

        <div class="task">
            <input type="text" class="form-control" placeholder="Add a new task" name="title" required>
        </div>
        <div class="submitButton">
            <button type="submit" class="btn btn-primary">Add Task</button>
        </div>
    </form>
    <div class="table">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>John</td>
                <td>Doe</td>
                <td>@social</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>

@endsection
@push('css')
    <style>
       .task .form-control{
        width: 600px;
       }
       .form{
        display: flex;
        gap: 30px;
        padding-top: 100px;
        padding-left: 180px;
       }
       .text-success{
        align-items: center;
        padding-left:430px;
        margin-top: 100px    ;
       }

    </style>
@endpush
