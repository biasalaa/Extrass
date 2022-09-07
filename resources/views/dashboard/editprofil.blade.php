@extends('template.template')

@section('main')
        <div class="container">
            <h5 class="card-title activator">Edit Profil</h5>
            <form action="/editprofil/{{$data->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" value="{{$data->nama}}" name="nama" type="text">
                        <label for="name">Nama Extra : </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="desc" name="hp" value="{{$data->nohp}}" type="text">
                        <label for="desc">Deskripsi</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="pg" name="alamat" class="materialize-textarea" style="height: 46px;">{{$data->alamat}}</textarea>
                        <label for="pg">penanggung jawab</label>
                    </div>
                </div>
                <button class="btn cyan waves-effect waves-light" type="submit">simpan</button>
            </form>
        </div>
@endsection