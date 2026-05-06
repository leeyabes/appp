@extends('layouts.app')

@section('content')
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:24px;">
        <div>
            <h2 style="margin:0;">Daftar Task</h2>
            <p style="margin:6px 0 0; color:#6b7280;">Kelola tugas harianmu dengan mudah.</p>
        </div>
        <a class="button" href="{{ route('tasks.create') }}">Tambah Task</a>
    </div>

    @if($tasks->isEmpty())
        <p>Tidak ada task. Silakan tambahkan task baru.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ ucfirst($task->status) }}</td>
                        <td>{{ $task->created_at->format('d M Y H:i') }}</td>
                        <td class="actions">
                            <a class="button" href="{{ route('tasks.show', $task) }}">Lihat</a>
                            <a class="button" href="{{ route('tasks.edit', $task) }}">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button danger" onclick="return confirm('Hapus task ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
