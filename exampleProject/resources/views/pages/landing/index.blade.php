@extends('layout.app')
@section('content')
<div class="container">
    <form class="form">
        <div class="task">
            <input type="text" class="form-control" placeholder="Add a new task">
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
        padding-top: 200px;
        padding-left: 180px;
       }

    </style>
@endpush
