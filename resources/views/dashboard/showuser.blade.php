@extends('template.template')

@section('main')
<button class="btn cyan waves-effect waves-light" type="submit" name="action"><a href="/userterdaftar" style="text-decoration: none; color: white;">< Back</a>
</button>
    <div style="margin-left: 200px; margin-top: 100px;">
        <h1>Biodata User</h1> <br>
        <h3>Nama : {{ $datas->nama }}</h3> <br>
        <h3>No Handphone: {{ $datas->nohp }}</h3> <br>
        <h3>Alamat : {{ $datas->alamat }} </h3> <br>
        <h3>Mengikuti Extra :</h3>
        @foreach ($extra as $a)
            <h3> - {{$a->nama_extra }}</h3>
        @endforeach
        <br>
        <button class="btn" style="background-color: red;"><a href="/deleteuser/{{ $a->id }}" style="color: white; text-decoration:none;">Delete User</a></button>
    </div>
@endsection