@extends('template.template')

@section('main')
    <div class="container">
        <h1 style="margin-bottom: 50px;">Edit User</h1>
        <form action="/userregister/{{ $data->id }}" method="POST" class="form-control">
            @csrf
            @method('PUT')
            <label for="nama">Nama :</label><input type="text" name="nama" required value="{{ $data->nama }}">
            @error('nama')
                <small style="color: red;">
                    {{$message}}
                </small>
            @enderror
            <label for="nama">No Hp :</label><input type="text" name="nohp" required value="{{ $data->nohp }}">
            @error('nohp')
                <small style="color: red;">
                    {{$message}}
                </small>
            @enderror
            <label for="nama">Alamat :</label><input type="text" name="alamat" required value="{{ $data->alamat }}">
            @error('alamat')
                <small style="color: red;">
                    {{$message}}
                </small>
            @enderror
            <label for="nama">Username :</label><input type="text" name="username" required value="{{ $data->username }}">
            @error('username')
                <small style="color: red;">
                    {{$message}}
                </small>
            @enderror
            <label for="nama">Password :</label><input type="password" name="password">
            <button type="submit" class="btn cyan waves-effect waves-light" style="margin-top: 30px;">Submit</button>
        </form>
    </div>
@endsection