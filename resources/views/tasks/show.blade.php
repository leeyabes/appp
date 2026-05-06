@extends('layouts.app')

@section('content')
    <div style="margin-bottom:24px;">
        <h2 style="margin:0;">Detail Task</h2>
        <p style="margin:6px 0 0; color:#6b7280;">Lihat detail lengkap task ini.</p>
    </div>

    <div style="margin-bottom:24px;">
        <p><strong>Judul:</strong> {{ $task->title }}</p>
        <p><strong>Status:</strong> {{ ucfirst($task->status) }}</p>
        <p><strong>Deskripsi:</strong></p>
        <div style="padding:16px; background:#f8fafc; border:1px solid #e5e7eb; border-radius:10px;">{{ $task->description ?: 'Tidak ada deskripsi' }}</div>
        <p style="margin-top:16px; color:#6b7280;">Dibuat pada {{ $task->created_at->format('d M Y H:i') }}</p>
    </div>

    <div class="actions">
        <a class="button" href="{{ route('tasks.edit', $task) }}">Edit</a>
        <a class="button" href="{{ route('tasks.index') }}">Kembali</a>
    </div>
@endsection
