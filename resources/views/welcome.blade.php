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
                <img src="" alt="" class="src">
            </div>
        @endforeach
    </div>
</div>

@endsection