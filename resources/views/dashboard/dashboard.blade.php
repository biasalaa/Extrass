@extends('template.template')

@section('main')
@if (Auth::user()->role == 'admin')
<div class="row">
    <div class="col l3 m6 s12">
        <div class="card success-gradient card-hover">
            <div class="card-content">
                <div class="d-flex no-block align-items-center">
                    <div>
                        <h2 class="white-text m-b-5">{{ $extra }}</h2>
                        <h6 class="white-text op-5">Jumlah Extra</h6>
                    </div>
                    <div class="ml-auto">
                        <span class="white-text display-6"><i class="material-icons">receipt</i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col l3 m6 s12">
        <div class="card success-gradient card-hover">
            <div class="card-content">
                <div class="d-flex no-block align-items-center">
                    <div>
                        <h2 class="white-text m-b-5">{{ $biodata }}</h2>
                        <h6 class="white-text op-5 text-darken-2">Jumlah User</h6>
                    </div>
                    <div class="ml-auto">
                        <span class="white-text display-6"><i class="fas fa-users"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif(Auth::user()->role == 'user')
<h3><b>Extrakurikuler</b></h3>
<?php
$a=array("warning-gradien","success-gradient","info-gradient","primary-gradient");  
$random_keys=array_rand($a,4);
$i = 1;
?>

<div class="row">
    @foreach($extraAll as $s)
    <div class="col l3 m6 s12">
        @php
        if(count($a) <= $i) $i = 1;
        @endphp
        <div class="card <?=  $a[$random_keys[$i++]] ?> card-hover">
            <div class="card-content">
                <div class="d-flex no-block align-items-center">
                    <div>
                        <h2 class="white-text m-b-5">{{ $s->dataUser }} </h2>
                        <h6 class="white-text op-5">Mendaftar</h6>
                    </div>
                    <div class="ml-auto">
                        <span class="white-text">{{$s->nama_extra}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endforeach

</div>
@endif
@endsection