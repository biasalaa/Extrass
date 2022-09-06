@extends('template.template')

@section('main')

<a class="btn btn-succes waves-effect waves-light modal-trigger" href="#modal1">tambah extra</a>


<div id="modal1" class="modal">
    <div class="modal-content">
        <div class="card-content">
            <h5 class="card-title activator">Tambah Extra</h5>
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
                <div class="row">
                    <select class="form-control" name="category">
                        <option>Pilih Kategory</option>
                        @foreach ($category as $d)
                        <option value="{{$d->id}}">{{$d->nama_category}}</option>
                        @endforeach
                    </select>
                </div>

                <button class="modal-action modal-close btn" type="button">close</button>
                <button class="btn cyan waves-effect waves-light" type="submit">simpan</button>
            </form>
        </div>
    </div>

</div>

<table id="file_export" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Penganggung Jawab</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($extra as $a)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $a->nama_extra }}</td>
            <td>{{ $a->penanggung_jawab }}</td>
            <td>{{ $a->nama_category }}</td>
            <td>
                <button class="btn"><a href="/dataextrakulikuler/{{ $a->id }}" style="color: yellow;"><i class="fas fa-eye"></i></a></button>
                <button class="btn"><a href="/dataextrakulikuler/{{ $a->id }}/edit" class="text-info"><i class="fas fa-edit"></i></a></button>
                <form action="/dataextrakulikuler/{{ $a->id }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn"><a style="color: red;"><i class="fas fa-trash"></i></a></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection