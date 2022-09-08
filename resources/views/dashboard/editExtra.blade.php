@extends('template.template')

@section('main')


<div class="container-fluid ">
    <div class="card p-5">
            <form action="/dataextrakulikuler/{{ $data->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="row mb-4">
                    <div class="input-field col s12">
                        <label class="mb-2 mt-4" for="name">Nama Extra : </label>
                        <input class="form-control" id="name" name="nama_extra" value="{{$data->nama_extra}}" type="text">
                        @error('nama_extra')
                            <small style="color: red;">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="input-field col s12">
                        <label class="mb-2 mt-4" for="desc">Deskripsi</label>
                        <textarea name="desc" id="" cols="30" rows="5" class="form-control">{{$data->deskripsi}}</textarea>
                        @error('desc')
                            <small style="color: red;">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="input-field col s12">
                    <img src="{{ asset('img')}}/{{ $data->foto}}"  style="width:200px;" srcset="">
                        <input class="form-control" id="f" name="file" class="form-control" type="file">

                    </div>
                    @error('file')
                        <small style="color: red;">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <div class="row mb-4">
                    <div class="input-field col s12">
                        <label class="mb-2 mt-4" for="pg">penanggung jawab</label>
                        <input class="form-control" id="pg" type="text" value="{{$data->penanggung_jawab}}"  name="pg" class="materialize-textarea" style="height: 46px;"></textarea>
                        @error('pg')
                            <small style="color: red;">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                </div>
                <div class="row mb-4">
                <div class="input-field col s12">

                <label class="mb-2 mt-4" for="pg">Pilih Extra</label>

                    <select class="form-control" name="category">
                        <option>Pilih Kategory</option>
                        @foreach ($category as $d)
                        <option {{$data->category_id == $d->id ? "selected":""}} value="{{$d->id}}">{{$d->nama_category}}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <small style="color: red;">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                </div>

                <a href="/dataextrakulikuler"><button class="btn btn-danger" type="button">close</button></a>
                <button class="btn btn-success" type="submit">simpan</button>
            </form>
    </div>
            </div>
      

@endsection