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
                            <button style="background-color: blue;" class="btn"><a href="/category/{{ $a->id }}/edit" style="color: white;"><i class="fas fa-edit"></i></a></button>
                            <form action="/category/{{ $a->id }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button style="background-color: red;" class="btn" type="submit"><i class="fas fa-trash" style="color: white;"></i></button>
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