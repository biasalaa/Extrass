@extends('template.template')

@section('main')



            <form action="/dataextrakulikuler/{{ $data->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" name="nama_extra" value="{{$data->nama_extra}}" type="text">
                        <label for="name">Nama Extra : </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="desc" name="desc" value="{{$data->deskripsi}}" type="text">
                        <label for="desc">Deskripsi</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <img src="{{ asset('img')}}/{{ $data->foto}}"  style="width:200px;" srcset="">
                        <input id="f" name="file" class="form-control" type="file">

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="pg" type="text" value="{{$data->penanggung_jawab}}"  name="pg" class="materialize-textarea" style="height: 46px;"></textarea>
                        <label for="pg">penanggung jawab</label>
                    </div>
                </div>
                <div class="row">
                    <select class="form-control" name="category">
                        <option>Pilih Kategory</option>
                        @foreach ($category as $d)
                        <option {{$data->category_id == $d->id ? "selected":""}} value="{{$d->id}}">{{$d->nama_category}}</option>
                        @endforeach
                    </select>
                </div>

                <button class="modal-action modal-close btn" type="button">close</button>
                <button class="btn cyan waves-effect waves-light" type="submit">simpan</button>
            </form>
      

@endsection