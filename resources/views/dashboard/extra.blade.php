@extends('template.template')

@section('main')


<div class="container-fluid mt--6">
    <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-form">Form</button>
            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">

                        <div class="modal-body p-0">

                            <div class="card bg-secondary border-0 mb-0">
                                <div class="card-header bg-transparent pb-5">
                                    <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>


                                    <div class="btn-wrapper text-center">
                                        <a href="#" class="btn btn-neutral btn-icon">
                                            <span class="btn-inner--icon"><img src="../../assets-old/img/icons/common/github.svg"></span>
                                            <span class="btn-inner--text">Github</span>
                                        </a>
                                        <a href="#" class="btn btn-neutral btn-icon">
                                            <span class="btn-inner--icon"><img src="../../assets-old/img/icons/common/google.svg"></span>
                                            <span class="btn-inner--text">Google</span>
                                        </a>
                                    </div>


                                </div>
                                <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                        <small>Or sign in with credentials</small>
                                    </div>
                                    <form role="form">
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Email" type="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Password" type="password">
                                            </div>
                                        </div>
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                            <label class="custom-control-label" for=" customCheckLogin">
                                                <span class="text-muted">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary my-4">Sign in</button>
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