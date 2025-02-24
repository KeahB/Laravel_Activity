@extends('layouts.app')

@section('title', 'Add Student')

@section('content')
<h1>Add Student</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required>
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>Age:</label>
    <input type="number" name="age" required>
    <button type="submit">Save</button>
</form>
@endsection