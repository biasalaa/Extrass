@extends('template.template')

@section('main')
<a class="btn cyan waves-effect waves-light" href="/contact" style="text-decoration: none; color: white;">< Back</a>
    <div class="container">
        <h3>Nama : {{ $datas->nama }}</h3> <br>
        <h3>Email: {{ $datas->email }}</h3> <br>
        <h3>Message : {{ $datas->message }} </h3>
    </div>
@endsection