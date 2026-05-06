@extends('layouts.app')

@section('content')
    <div style="margin-bottom:24px;">
        <h2 style="margin:0;">Tambah Task Baru</h2>
        <p style="margin:6px 0 0; color:#6b7280;">Isi data task untuk disimpan.</p>
    </div>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        @include('tasks._form')
        <button type="submit" class="button">Simpan Task</button>
    </form>
@endsection
