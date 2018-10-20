<!DOCTYPE html>
<html>
<head>
  <title>@yield('titulo')</title>
  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ url('/css/peticao.css') }}" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
  <div class="header">
		<div class="logo">
			<img id="img" src="{{ url('images/logoB.png') }}" >
		</div> <!--logo-->

		<div class="loginInfo" >
  			  <ul class="side-nav" id="mobile">
			   @if(Auth::guest())
			     <li><a href="{{route('login')}}">Login</a></li>
			   @else
			     <li>{{Auth::user()->name}}</li>
			     <li><a href="{{ route('login.sair') }}">Sair</a></li>
			   @endif
			  </ul>
		</div>
	</div><!--header-->

  <div class="menu">
    <div id="main">
      <div class="container">
        <nav>
          <div class="nav-fostrap">
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="javascript:void(0)">Atividades</a>
              </li>
              <li><a href="javascript:void(0)" >Petição<span class="arrow-down"></span></a>
                <ul class="dropdown">
                  <li><a href="{{ route('peticoes.novo') }}">Montar Petição</a></li>
                  <li><a href="{{ route('peticoes.index') }}">Consultar</a></li>
                  <li><a href="base">Base</a></li>
                  <li><a href="pedidos">Pedidos</a></li>
                </ul>
              </li>
              <li><a href="javascript:void(0)" >Entrevista<span class="arrow-down"></span></a>
                <ul class="dropdown">
                  <li><a href="novaEntrevista">Nova Entrevista</a></li>
                  <li><a href="consultaEntrevista">Consultar Entrevistas</a></li>
                  <li><a href="questoes">Questões</a></li>
                </ul>
              </li>
              <li><a href="javascript:void(0)" >Cliente<span class="arrow-down"></span></a>
              <ul class="dropdown">
                  <li><a href="{{ route('clientes.novo')}}">Cadastrar</a></li>
                  <li><a href="{{ route('clientes.listar')}}">Consultar</a></li>
              </ul>
              <li><a href="javascript:void(0)" >Empresa<span class="arrow-down"></span></a>
              <ul class="dropdown">
                  <li><a href="{{ route('empresas.novo')}}">Cadastrar</a></li>
                  <li><a href="{{ route('empresas.listar')}}">Consultar</a></li>
              </ul>

            </ul>
          </div>
          <div class="nav-bg-fostrap">
            <div class="navbar-fostrap"> <span></span> <span></span> <span></span> </div>
            <a href="" class="title-mobile">Libellus</a>
          </div>
        </nav>

      </div>
    </div>

  </div>
