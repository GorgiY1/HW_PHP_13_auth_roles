@extends('layouts.layout')

@section('content')
    <h1>List Tasks</h1>
    <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Operations</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)

                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    {{-- <td>{{ $task->isCompleted }}</td> --}}
                    <td>

                            <a href="{{ route('task.edit', $task->id) }}">Edit</a>

                            <form style="display: contents" action="{{ route('task.destroy', $task->id) }}" method="POST" class="table_menu">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>

                    </td>
                </tr>

            @endforeach
        </tbody>
      </table>
@endsection
