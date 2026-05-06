@extends('layouts.app')

@section('content')
    <div style="margin-bottom:24px;">
        <h2 style="margin:0;">Edit Task</h2>
        <p style="margin:6px 0 0; color:#6b7280;">Perbarui informasi task.</p>
    </div>

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        @include('tasks._form')
        <button type="submit" class="button">Perbarui Task</button>
    </form>
@endsection
