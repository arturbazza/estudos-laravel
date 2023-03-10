@extends('layouts.main')
     
@section('title', 'Fonzie Agência Virtual - Criar Evento')

@section('content')
     
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label class="title">Evento:</label>
            <input type="text" class="form-control" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label class="title">Cidade:</label>
            <input type="text" class="form-control" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label class="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label class="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <input type="submit" class="btn btm-primary" value="Criar Evento">
    </form>
</div>

@endsection   