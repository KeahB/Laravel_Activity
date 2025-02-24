@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
<div class="container mt-4">
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $student->email) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="number" name="age" class="form-control" value="{{ old('age', $student->age) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Student</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection