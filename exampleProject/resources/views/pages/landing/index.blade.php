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
