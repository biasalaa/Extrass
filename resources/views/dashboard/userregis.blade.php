@extends('template.template')

@section('main')
<table border="1" id="file_export">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>No Hp</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $a)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $a->nama }}</td>
            <td>{{ $a->username }}</td>
            <td>{{ $a->nohp }}</td>
            <td>{{ $a->alamat }}</td>
            <td>
                <button style="background-color: blue;" class="btn"><a href="/userregister/{{ $a->id }}/edit" style="color: white;"><i class="fas fa-edit"></i></a></button>
                <form action="/userregister/{{ $a->id }}" method="post" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button style="background-color: red;" class="btn" type="submit" style="color: white;"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection