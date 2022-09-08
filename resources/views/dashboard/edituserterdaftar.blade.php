@extends('template.template')

@section('main')
    <div class="container-fluid mt-lg--6">
        <div class="card p-4">

    <form action="/edituserterdaftar/{{ $data->p }}" method="POST">
        @csrf
        @method("put")
        <h3>Nama : {{ $data->nama }}</h3>
        <select name="extra" id="" class="form-control mb-3">
            @foreach($extra as $a)
                <option value="{{ $a->id }}" {{ $data->extrakulikuler_id == $a->id ?  "selected" : ""}} >{{ $a->nama_extra }}</option>
            @endforeach
        </select>
        @error('extra')
                <small style="color: red;">
                    {{$message}}
                </small>
        @enderror
        <a href="/userterdaftar"><button  class="btn btn-danger">Kembali</button></a>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
    </div>
    </div>

@endsection