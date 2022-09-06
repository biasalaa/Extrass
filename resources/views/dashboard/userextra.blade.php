@extends('template.template')

@section('main')
    <h3>Nama Anda : {{ $nama[0]->nama}} </h3>
    <h4>Extra Diikuti :</h4>
    @foreach ($extra as $a)
        <ul>
            <li>{{ $a->nama_extra }}</li>
        </ul>
    @endforeach
@endsection