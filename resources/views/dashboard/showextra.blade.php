@extends('template.template')
<style>
    .coba h2, p{
        text-align: center;
    }

    .coba img{
        border-radius:20px ;
        width: 30% ;
        margin-left:480px;
    }
    .coba h4{
        width:100%  !important;
        text-align: center;
        margin: 0 !important;
    }
</style>

@section('main')


<button class="btn cyan waves-effect waves-light" type="submit" name="action"><a href="/dataextrakulikuler" style="text-decoration: none; color: white;">< Back</a>
</button>
    <div class="container-fluid mt-lg--6 ">
    <div class="card p-4">
        <div class="d-flex align-items-center justify-content-center flex-column">

        <h2>{{ $data[0]->nama_extra }}</h2> 
        <p>Guru Pembimbing : {{ $data[0]->penanggung_jawab }}</p>
        {{-- <img src="{{ asset('assets/images/'.{{$data->foto}}) }}" alt=""> --}}
        {{-- <img src="{{ asset('assets/images/{{$data->foto }}') }}" alt=""> --}}

        <img src="{{ asset('img')}}/{{ $data[0]->foto}}" class="rounded-lg" style="max-width:40%;" alt="" srcset="">
        <br><br>
        <p class="text-black">{{ $data[0]->deskripsi }}</p>
    </div>
    </div>
    </div>

@endsection