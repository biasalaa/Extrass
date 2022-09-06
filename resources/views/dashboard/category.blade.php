@extends('template.template')

@section('main')

<a class="waves-effect waves-light btn btn-success modal-trigger" href="#modal1">tambah category</a>


<div id="modal1" class="modal">
    <div class="modal-content">
        <div class="card-content">
            {{-- <h5 class="card-title activator">Basic Form<i class="material-icons right tooltipped" data-position="left" data-delay="50" data-tooltip="Get Code">more_vert</i></h5>  --}}
            <form action="/category" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" name="nama_category" type="text">
                        <label for="name">Nama Category : </label>

                        @error('nama_category')
                        <small>{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <button type="button" class="modal-action modal-close btn btn-danger">close</button>
                <button type="submit" class="btn btn-primary">tambah</button>
            </form>
        </div>
    </div>

</div>

<table id="file_export" border="1">
    <thead>
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
                <button class="btn"><a href="/category/{{ $a->id }}/edit"><i class="fas fa-edit"></i></a></button>
                <form action="/category/{{ $a->id }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn" type="submit"><i class="fas fa-trash" style="color: red;"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection