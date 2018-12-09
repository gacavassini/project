@extends('layout.site')

@section('titulo',Route::currentRouteName())

@section('conteudo')

<div class="conteudo" id="contlog"> 

    
    <div class="conteudoLogin">
      <div class="login"> 
        <p style="font-size: 20px; text-align: center"><b>Login</b> </p>

        <form action="{{route('login.entrar')}}" method="post">
          {{ csrf_field() }}

          <div class="input-field">
             <label> <br>E-mail <br></label>
            <input class="campo" type="text" name="email">
           
          </div>
          <div class="input-field">
            <label>Senha <br></label> 
            <input class="campo" type="password" name="senha">
          </div>  
            <button id="enviar" ">Entrar</button>
        </div>  


      </form>
    </div><!-- fim da div conteudoLogin -->
    
</div>




@endsection
