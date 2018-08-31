@extends('base')

@section('container')
	<section class="pages container">
		<div class="page page-contact">
			<h2 class="text-capitalize">contactanos</h2>
			<p>Si tienens alguna duda o necesitas algo en lo que nustra cominidad pueda apoyarte puedes decirnoslo.</p>
			<div class="divider-2" style="margin:25px 0;"></div>
			<div class="form-contact">
				<form method="POST" action="{{route('pages.contact.send')}}">
                    {{csrf_field()}} <!--{method_field('PUT')}}-->
					<div class="input-container container-flex space-between {{$errors->has('name') ? 'has-error' : ''}} {{$errors->has('email') ? 'has-error' : ''}}">
						<input name="name" type="text" placeholder="Tu nombre" class="input-name">
						{!!$errors->first('name','<span class="help-block">:message</span>')!!}
						<input name="email" type="text" placeholder="Correo electronico" class="input-email">{!!$errors->first('email','<span class="help-block">:message</span>')!!}
					</div>
					<div class="input-container {{$errors->has('asunto') ? 'has-error' : ''}}">
						<input name="asunto" type="text" placeholder="Asunto" class="input-subject">{!!$errors->first('asunto','<span class="help-block">:message</span>')!!}
					</div>
					<div class="input-container {{$errors->has('mensaje') ? 'has-error' : ''}}">
						<textarea name="mensaje" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>{!!$errors->first('mensaje','<span class="help-block">:message</span>')!!}
					</div>
					<div class="send-message">
                        <button type="submit" class="text-uppercase c-green">Enviar</button>
                    </div>
				</form>
			</div>
		</div>
	</section>
@endsection