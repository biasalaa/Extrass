@extends('template.template')

@section('main')

@if (Session::has('error'))
<div class="alert alert-danger">{{ Session::get('error') }}</div>
@endif


<form method="post" action="pilextra" style="display:flex">
    @csrf
    <select class="form-control w-100" style="width:50%;" name="extra">
        <option>Pilih Extra</option>
        @foreach ($extra as $i)
        <option value="{{$i->id}}" style="color: white;">{{$i->nama_extra}}</option>
        @endforeach
    </select>
    <button class="btn" type="submit" style="margin-left: 30px;">Ikuti extra</button>
</form>

<br>

<h3>Extra Yang Di Ikuti</h3>
<table id="file_export" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Extra</th>
            <th>kategori</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($data as $a)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $a->nama_extra }}</td>
            <td>{{ $a->nama_category }}</td>
            <td>
                <form action="/pilextra" method="post">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection