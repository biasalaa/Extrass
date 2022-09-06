@extends('template.template')

@section('main')
    <div class="container">
    <form action="/edituserterdaftar/{{ $data->p }}" method="POST">
        @csrf
        <h3>Nama : {{ $data->nama }}</h3>
        <select name="extra" id="">
            @foreach($extra as $a)
                <option value="{{ $a->id }}" {{ $data->extrakulikuler_id == $a->id ?  "selected" : ""}} >{{ $a->nama_extra }}</option>
            @endforeach
        </select>
        <button class="btn">Update</button>
    </form>
    </div>
@endsection