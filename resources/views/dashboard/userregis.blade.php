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
                            <button  class="btn btn-success"><a href="/userregister/{{ $d->id }}/edit" class="text-white" ><i class="fas fa-edit"></i></a></button>
                            <form action="/userregister/{{ $d->id }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><a ><i class="fas fa-trash"></i></a></button>
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