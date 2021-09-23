@extends('layouts.main')

@section('title', 'Evento de comidas')

@section('content')

<div class="container-fluid">
    <div class="row">
    @if(session('msg'))
     <p class="msg">{{ session('msg') }}</p>
    @endif
    </div>
</div>


<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <!--BARRA DE PESQUISAR-->
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>  

<div id="events-container" class="col-md-12">
            <!--LOGICA DE ENCONTRAR-->
    @if($search)
    <h2>Buscando por: {{ $search }}</h2>
    @else
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    @endif


    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">{{$event->people}} Participantes</p>    
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach

        @if(count($events) == 0 && $search)
            <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos</a></p>
        @elseif(count($events) == 0)
            <p>Não há eventos disponíveis</p>
        @endif
    </div>
</div>


@endsection