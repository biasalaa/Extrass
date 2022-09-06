@extends('template.template')

@section('main')
        <div class="container">
            <h5 class="card-title activator">Edit Profil</h5>
            <form action="/dataextrakulikuler" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" name="nama_extra" type="text">
                        <label for="name">Nama Extra : </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="desc" name="desc" type="text">
                        <label for="desc">Deskripsi</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="f" name="file" class="form-control" type="file">

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="pg" name="pg" class="materialize-textarea" style="height: 46px;"></textarea>
                        <label for="pg">penanggung jawab</label>
                    </div>
                </div>
                <button class="modal-action modal-close btn" type="button">close</button>
                <button class="btn cyan waves-effect waves-light" type="submit">simpan</button>
            </form>
        </div>
@endsection