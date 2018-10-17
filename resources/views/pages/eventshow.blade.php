@extends('base')

@section('meta-title', $event->title)

@section('meta-description', $event->excerpt)

@section('container')
    <section class="posts container">
        <article class="post">
    	    @if($event->img != null)
                <figure>
                	<img src="/img/noticias/{{$event->img}}" alt="" class="img-responsive">
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
                    <p>{!!$event->excerpt!!}</p>
                    <p>Inicio: {{$event->hora}}</p>
                    <p>Costo: ${{$event->costo}}</p>
                    <p>Tlf: {{$event->tlf}}</p>
                    <p>Ubicación: <a href="{{$event->linkmaps}}">Maps</a></p>
                    <p>Paguina oficial: <a href="{{$event->link}}">Link</a></p>
                </div>
        </article>
    </section>
    <div class="buttons-social-media-share">
        <ul class="share-buttons">
            <center>
                    <p>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{request()->fullUrl()}}&title={{$event->title}}" 
                title="Compartir en Facebook" 
                target="_blank">
                            <img alt="Share on Facebook" src="/img/flat_web_icon_set/Facebook.png">
                        </a>
                    </p>
                        <a href="https://twitter.com/intent/tweet?u={{request()->fullUrl()}}&text={{$event->title}}&via=EmprendedoresSLP&hashtags=EmprendedoresSLP" 
                target="_blank" 
                title="Tweet">
                            <img alt="Tweet" src="/img/flat_web_icon_set/Twitter.png">
                        </a>
                        <a href="https://plus.google.com/share?url={{request()->fullUrl()}}&text={{$event->title}}" 
                target="_blank" 
                title="Compartir en Google+">
                            <img alt="Share on Google+" src="/img/flat_web_icon_set/Google.png">
                        </a>
                        <a href="http://pinterest.com/pin/create/button/?url={{request()->fullUrl()}}&description={{$event->title}}" 
                target="_blank" 
                title="Pin it">
                            <img alt="Pin it" src="/img/flat_web_icon_set/Pinterest.png">
                        </a>
            </center>
        </ul>
    </div>
@endsection