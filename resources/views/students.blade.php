    <x-layout>
        <form action="/students" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name">
            <input type="number" name="age" placeholder="Age">
            <button type="submit">Add Student</button>
        </form>
        
        <form action="{{ url('/students') }}" method="GET" style="margin-bottom: 20px;">
            <input type="text" name="search" placeholder="Search students..." value="{{ request('search') }}">
            <button type="submit">Search</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>
                            <form action="/students/{{ $student->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                            </form>
                            <td>
                                <a href="/students/{{ $student->id }}/edit">Edit</a>
                            </td>
                        </td>   
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if(session('success'))
            <div style="color: green">{{ session('success') }}</div>
        @endif

        
    </x-layout>
