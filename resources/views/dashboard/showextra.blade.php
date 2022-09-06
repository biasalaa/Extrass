@extends('template.template')
<style>
    .coba h2, p{
        text-align: center;
    }

    .coba img{
        border-radius:20px ;
        width: 30% ;
        margin-left:700px;
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
    <div class="coba">
        <h2>{{ $data[0]->nama_extra }}</h2> 
        <p>Guru Pembimbing : {{ $data[0]->penanggung_jawab }}</p>
        {{-- <img src="{{ asset('assets/images/'.{{$data->foto}}) }}" alt=""> --}}
        {{-- <img src="{{ asset('assets/images/{{$data->foto }}') }}" alt=""> --}}

        <img src="{{ asset('img')}}/{{ $data[0]->foto}}" sty alt="" srcset="">
        <br><br>
        <h4>{{ $data[0]->deskripsi }}</h4>
    </div>
@endsection