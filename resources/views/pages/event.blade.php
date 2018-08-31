@extends('base')

@section('container')
    <section class="posts container">
    	@foreach($events as $event)
        <article class="post">
    	    @if($event->foto != null)
                <figure>
                	<img src="/img/noticias/{{$event->foto}}" alt="" class="img-responsive">
                </figure>
                <!-- elseif($port->iframe)
                    <div class="video">
                        {!$port->iframe!!}
                    </div>-->
                @endif
                <div class="content-post">
                    <header class="container-flex space-between">
                        <div class="date">
                              <span class="c-gray-1">{{$event->fecha}}</span>
                        </div>
                    </header>
                    <h1>{{$event->title}}</h1>
                    <div class="divider"></div>
                <p><a href="{{route('event.show', $event)}}">Ler mas...</a></p>
                </div>
        </article>
        @endforeach
    </section>
@endsection