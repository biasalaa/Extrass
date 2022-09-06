@extends('template.template')

@section('main')
<form action="/userterdaftar" method="post" style="position:relative; margin-top:20px;">
    @csrf
    <select name="filter" class="browser-default" style="width: 120px; background-color: #1f2738; border: none; display: inline-block;">
        <option value="all">All</option>
        @foreach ($extra as $b)
        <option value="{{ $b->id }}"><a href="/test" style="color:white ;">{{ $b->nama_extra }}</a></option>
        @endforeach
    </select>
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
                <a href="/userterdaftar/{{ $a->id }}" style="color: yellow; margin-right:20px;"><i class="fas fa-eye"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection