@extends('template.template')

@section('main')


<div class="container mt--6">
    <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Datatable</h3>

        </div>
        <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($datas as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->username }}</td>
                        <td>{{ $d->nohp }}</td>
                        <td>{{ $d->alamat }}</td>
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