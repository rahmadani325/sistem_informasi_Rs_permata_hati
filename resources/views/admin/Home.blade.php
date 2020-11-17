@extends('admin.template.default')

@section('content')
<h1 class="text-bold">Dashboard</h1>
<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="{{ asset('images/rs.png') }}" alt="rumah sakit" width="340">
        </div>
        <div class="col-6">
            <p>Alamat : <span class="text-bold"> Jl Nangka, Bontomarannu, Gowa</span></p>
            <p>Fasilitas : <span class="text-bold">Poligigi, Polikandungan, UGD, ICU</span></p>
            <p>Email :<span class="text-bold"> permata.hati@gmail.com </span></p>
            <p>No Hp :<span class="text-bold"> 08222334455 </span></p>
        </div>
    </div>
</div>
@endsection