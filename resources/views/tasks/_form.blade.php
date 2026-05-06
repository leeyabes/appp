<div>
    <label for="title">Judul</label>
    <input id="title" class="input" type="text" name="title" value="{{ old('title', $task->title ?? '') }}" required>
    @error('title')<div class="error">{{ $message }}</div>@enderror
</div>

<div>
    <label for="description">Deskripsi</label>
    <textarea id="description" class="textarea" name="description" rows="6">{{ old('description', $task->description ?? '') }}</textarea>
    @error('description')<div class="error">{{ $message }}</div>@enderror
</div>

<div>
    <label for="status">Status</label>
    <select id="status" class="select" name="status">
        @php $current = old('status', $task->status ?? 'pending'); @endphp
        <option value="pending" {{ $current === 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="completed" {{ $current === 'completed' ? 'selected' : '' }}>Completed</option>
    </select>
    @error('status')<div class="error">{{ $message }}</div>@enderror
</div>
