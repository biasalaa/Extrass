@extends('template.template')

@section('main')
<div class="container mt--6">
    <!-- Table -->
    <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Datatable</h3>

        </div>
        <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Alamat</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->nama}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->message}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>





@endsection