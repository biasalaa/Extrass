@extends('template.template')

@section('main')
<table id="file_export" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $a)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $a->nama }}</td>
            <td>{{ $a->email }}</td>
            <td>
                <button style="background-color: yellow;" class="btn"><a  href="/contact/{{ $a->id }}" style="color: black;"><i class="fas fa-eye"></i></a></button>
                <form action="/contact/{{ $a->id }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method("DELETE")
                    <button class="btn" style="background-color: red;" style="color: white;"><i class="fas fa-trash"></i></a></button>
                </form>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection