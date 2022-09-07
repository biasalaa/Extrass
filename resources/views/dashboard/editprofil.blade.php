@extends('template.template')

@section('main')
<div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
            <form action="/editprofil/{{$data->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <img src="{{asset('img')}}/{{auth()->user()->foto}}" class="img-fluid rounded-circle m-auto d-block" style="width: 300px;height:300px;" alt="">
                <input type="file" value="{{auth()->user()->foto}}" style="display:none;" name="" id="">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama Lengkap</label>
                        <input type="text" id="input-username" name="nama" value="{{$data->nama}}" class="form-control" placeholder="Username" value="lucky.jesse">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">nomor telepon</label>
                        <input type="number" id="input-email" name="nohp" value="{{$data->nohp}}"class="form-control" placeholder="jesse@example.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
    
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Alamat</label>
                        <textarea id="pg" name="alamat" name="alamat" class="form-control" style="height: 46px;">{{$data->alamat}}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <button class="btn btn-primary" type="submit">Ubah</button>
              </form>
            </div>
          </div>


</div>
@endsection