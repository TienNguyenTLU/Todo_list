@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chỉnh sửa công việc</h2>
    
    <!-- Hiển thị lỗi nếu có -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form chỉnh sửa -->
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề công việc</label>
            <input type="text" name="title" id="title" class="form-control" 
                   value="{{ old('title', $task->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $task->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="due_date" class="form-label">Ngày hết hạn</label>
            <input type="date" name="due_date" id="due_date" class="form-control" 
                   value="{{ old('due_date', $task->due_date) }}">
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
