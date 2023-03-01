@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="searc-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>próximos eventos</h2>
    <p>Veja os proximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="img/logo-ico.png" alt="{{ $event->title }}">
                <div class="card-body">
                    <div class="card-date">10/09/2023</div>
                    <div class="card-title">{{ $event->title }}</div>
                    <div class="card-participantes">X  Participantes</div>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection