@extends('layouts.app')

@section('title', 'Students List')

@section('content')
<div class="container mt-4">
    <h1 class="mb-3">Students List</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>

    @if($students->isEmpty())
    <div class="alert alert-warning">No students found. Add a new student!</div>
    @else
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->age }}</td>
                <td>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection