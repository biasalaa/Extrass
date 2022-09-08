@extends('template.template')

@section('main')


<div class="container mt--6">
    <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Data User Terdaftar</h3>

        </div>
        <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nomor Handphone</th>
                        <th>Extrakulikuler</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $a)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $a->nama }}</td>
                        <td>{{ $a->nohp }}</td>
                        <td>{{ $a->nama_extra }}</td>
                        <td><button class='btn'>{{ $a->status == 1 ? "active":"non active" }}</button></td>
                        <td>
                            <button style="" class="btn btn-info"><a href="/dataextrakulikuler/{{ $a->id }}" style="color: black;"><i class="fas fa-eye"></i></a></button>
                            <button class="btn btn-success"><a href="/dataextrakulikuler/{{ $a->id }}/edit" class="" style="color: white;"><i class="fas fa-edit"></i></a></button>
                            <form action="/dataextrakulikuler/{{ $a->id }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button style="" type="submit" class="btn btn-danger"><a style="color: white;"><i class="fas fa-trash"></i></a></button>
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