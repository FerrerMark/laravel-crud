<x-layout>
    <h2>Edit Student</h2>

    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT') 

        <input type="text" name="name" value="{{ $student->name }}" required>
        <input type="number" name="age" value="{{ $student->age }}" required>
        <button type="submit">Update Student</button>
    </form>
</x-layout>
