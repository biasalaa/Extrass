@extends('template.template')

@section('main')
<button class="btn cyan waves-effect waves-light" type="submit" name="action"><a href="/contact" style="text-decoration: none; color: white;">< Back</a>
</button>
    <div class="container">
        <h3>Nama : {{ $datas->nama }}</h3> <br>
        <h3>Email: {{ $datas->email }}</h3> <br>
        <h3>Message : {{ $datas->message }} </h3>
    </div>
@endsection