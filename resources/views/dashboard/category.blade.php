@extends('template.template')

@section('main')


<div class="container mt--6">
    <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-form" style="width:150px ;">Tambah Data</button>
            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">

                        <div class="modal-body p-0">
                            <div class="card bg-secondary border-0 mb-0">
                                <div class="card-header bg-transparent pb-5">
                                    <div class="text-muted text-center mt-2 mb-3"><small>Tambah Data</small></div>
                                    <h2 class="text-center"><b>CATEGORY EXTRAKURIKULER</b></h2>
                                </div>
                                <div class="card-body px-lg-5 py-lg-5">
                                    <form role="form" method="POST" action="category">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"></span>
                                                </div>
                                                <input class="form-control" name="nama_category" placeholder="Nama Category" type="text">
                                            </div>
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
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $a)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $a->nama_category }}</td>

                        <td>
                            <button  class="btn btn-success"><a href="/category/{{ $a->id }}/edit" style="color: white;"><i class="fas fa-edit"></i></a></button>
                            <form action="/category/{{ $a->id }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-danger" type="submit"><i class="fas fa-trash" style="color: white;"></i></button>
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