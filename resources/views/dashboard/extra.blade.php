@extends('template.template')

@section('main')


<div class="container-fluid mt--6">
    <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-form" style="width:150px ;">Tambah Data</button>
            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">

                        <div class="modal-body p-0">

                            <div class="card bg-secondary border-0 mb-0">
                                <div class="card-header bg-transparent">
                                    <div class="text-muted text-center"><small>Tambah Data</small></div>
                                    <h2 class="text-center"><b>EXTRAKURIKULER</b></h2>
                                </div>

                                <div class="card-body px-lg-5 py-lg-5">

                                    <form role="form" method="POST" enctype="multipart/form-data" action="/dataextrakulikuler">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"></span>
                                                </div>
                                                <input class="form-control" name="nama_extra" placeholder="Nama Extra" type="text">
                                                @error("nama_extra")
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFileLang" name="file" lang="en">
                                                <label class="custom-file-label" for="customFileLang">Pilih File</label>
                                                @error("file")
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"></span>
                                                </div>
                                                <input class="form-control" name="pg" placeholder="Penanggung jawab" type="text">

                                                @error("pg")
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="card">
                                            <select class="form-control" name="category" data-toggle="select">
                                                @foreach($category as $a)
                                                <option value="{{$a->id}}">{{ $a->nama_category }}</option>
                                                @endforeach
                                            </select>
                                            @error("category")
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="form-control-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" resize="none" name="desc"></textarea>

                                            @error("desc")
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary my-4">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>




                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Penganggung Jawab</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($extra as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama_extra }}</td>
                        <td>{{ $d->penanggung_jawab }}</td>
                        <td>{{ $d->nama_category }}</td>
                        <td>
                            <button style="background-color: yellow;" class="btn"><a href="/dataextrakulikuler/{{ $d->id }}" style="color: black;"><i class="fas fa-eye"></i></a></button>
                            <button style="background-color: blue;" class="btn"><a href="/dataextrakulikuler/{{ $d->id }}/edit" class="text-info" style="color: white;"><i class="fas fa-edit"></i></a></button>
                            <form action="/dataextrakulikuler/{{ $d->id }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button style="background-color: red;" type="submit" class="btn"><a style="color: white;"><i class="fas fa-trash"></i></a></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>
@endsection