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
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $key=> $task)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $task->title }}</td>
                    <td>
                        @if ($task->Done==0)
                        <span class="badge bg-warning">Not Completed</span>

                        @else
                        <span class="badge bg-warning"> Completed</span>

                        @endif
                    </td>
                    <td>
                        <a href="{{ route('landing.delete',$task->id) }}" class="btn btn-danger"></a>
                    </td>
                  </tr>

                @endforeach


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
