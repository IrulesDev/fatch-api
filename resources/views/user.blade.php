{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<div class="container">
    <h2 class="mb-4">Daftar Pengguna</h2>
    <a href="alquran.blade.php" class="bg-blue">alquran</a>
    <table class="table table-bordered" border="2" >
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 0 @endphp
            @foreach($users as $user)
                <tr>
                    <td>{{ $index++ }}</td>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

