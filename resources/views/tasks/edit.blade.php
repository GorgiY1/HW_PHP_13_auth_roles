@extends('layouts.layout')

@section('content')
    <h1>Edit Task</h1>
    <form action="{{ route('task.update', $task->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="titleId" name="title" value="{{ $task->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" class="form-control" id="descriptionId" name="description" value="{{ $task->description }}">
        </div>
        {{-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="isCompletedId" name="isCompleted" {{ $task->isCompleted ? 'checked' : '' }}>
            <label for="isCompletedId" class="form-check-label">Is Completed</label>
        </div> --}}
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
