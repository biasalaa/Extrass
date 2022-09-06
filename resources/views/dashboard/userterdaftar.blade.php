@extends('template.template')

@section('main')
<form action="/userterdaftar" method="post" style="position:relative; margin-top:20px;">
    @csrf
    @if(isset($req))
    <select name="filter" class="browser-default" style="width: 120px; background-color: #1f2738; border: none; display: inline-block;">
        <option value="all">All</option>
        @foreach ($extra as $b)
        <option value="{{ $b->id }}" {{ $b->id == $req ? "selected" : ""}}><a href="/test" style="color:white ;">{{ $b->nama_extra }}</a></option>
        @endforeach
    </select>
    @else
    <select name="filter" class="browser-default" style="width: 120px; background-color: #1f2738; border: none; display: inline-block;">
        <option value="all">All</option>
        @foreach ($extra as $b)
        <option value="{{ $b->id }}"><a href="/test" style="color:white ;">{{ $b->nama_extra }}</a></option>
        @endforeach
    </select>
    @endif
    <button class="btn cyan waves-effect waves-light" type="submit" name="action">Filter
    </button>
</form>
<table border="1" id="file_export">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Handphone</th>
            <th>Extrakulikuler</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $a)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $a->nama }}</td>
            <td>{{ $a->nohp }}</td>
            <td>{{ $a->nama_extra }}</td>
            <td>    
                <button style="background-color: yellow;" class="btn"><a href="/userterdaftar/{{ $a->id }}" style="color: black;"><i class="fas fa-eye"></i></a></button>
                <button style="background-color: blue;" class="btn"><a href="/edituserterdaftar/{{ $a->p }}" class="text-info" style="color: white;"><i class="fas fa-edit"></i></a></button>
                <button class="btn" style="background-color: red;"><a href="/deleteuser/{{ $a->p }}" style="color: white; text-decoration:none;"><i class="fas fa-trash"></i></a></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection