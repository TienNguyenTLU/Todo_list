@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm công việc mới</h2>
    
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

    <!-- Form thêm task -->
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề công việc</label>
            <input type="text" name="title" id="title" class="form-control" 
                   value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="due_date" class="form-label">Ngày hết hạn</label>
            <input type="date" name="due_date" id="due_date" class="form-control" 
                   value="{{ old('due_date') }}">
        </div>

        <button type="submit" class="btn btn-success">Thêm</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
