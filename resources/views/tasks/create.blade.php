@extends('layouts.layout')

@section('content')
    <h1>Create Task</h1>
    <form action="{{ route('task.assistant_create') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="titleId" name="title">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" class="form-control" id="descriptionId" name="description">
          </div>
          {{-- <div class="col-5">
            <label for="isCompleted" class="form-label">Is Completed</label>
            <input type="text" class="form-control" name="isCompleted" id="isCompletedId">
            </div> --}}
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    {{-- @extends('Layouts.layout')@section('content')    <h1>Create Task</h1>    <!--route('home.assistant_create') in web.php important add ->name(...)-->    <form class="col-12 d-flex justify-content-center align-items-center flex-column" action="{{route('home.assistant_create')}}" method="post">        @csrf <!--https://laravel.com/docs/11.x/csrf-->        <div class="col-5">            <label for="title" class="form-label">Title</label>            <input type="text" class="form-control" name="title" id="titleId">          </div>          <div class="col-5">            <label for="description" class="form-label">Description</label>            <input type="text" class="form-control" name="description" id="descriptionId">          </div>                    <button type="submit" class="btn btn-primary">Send</button>    </form>@endsection --}}
@endsection
