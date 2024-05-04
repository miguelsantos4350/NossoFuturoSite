@extends('distribution.layout')

@section('content')

<h2 class="h3">Criar um artigo</h2>
            <p class="text-big">Preencha os campos</p><br><br>

            <form role="form">
				
        <div class="form-group">
					 
					<label for="email">
						Email address
					</label>
					<input type="email" class="form-control" id="Email" />
				</div>
				<div class="form-group">
					 
					<label for="title">
						Titulo
					</label>
					<input type="assunto" class="form-control" id="assunto" />
				</div>
        <div class="form-group">
					 
           <label for="texto">
             Texto
           </label>
           <input type="textbox" class="form-control" id="text" />
         </div>
				<button type="submit" class="btn btn-primary">
					Enviar
				</button>
			</form>


@endsection