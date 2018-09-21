<!DOCTYPE html>
<html>
<head>
  <title>@yield('titulo')</title>
  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
  <div class="header">
		<div class="logo">
			<img id="img" src="images/logoB.png" >
		</div> <!--logo-->
	</div><!--header-->

  <div class="menu">
    <div id="main">
      <div class="container">
        <nav>
          <div class="nav-fostrap">
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="javascript:void(0)">Atividades</a>
              </li>
              <li><a href="javascript:void(0)" >Petição<span class="arrow-down"></span></a>
                <ul class="dropdown">
                  <li><a href="montarPeticao.html">Montar Petição</a></li>
                  <li><a href="consulta_Peticao">Consultar</a></li>
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
                  <li><a href="cadastroCliente">Cadastrar</a></li>
                  <li><a href="consultaCliente">Consultar</a></li>
              </ul>
              <li><a href="javascript:void(0)" >Empresa<span class="arrow-down"></span></a>
              <ul class="dropdown">
                  <li><a href="cadastraEmpresa">Cadastrar</a></li>
                  <li><a href="consultaEmpresa">Consultar</a></li>
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





<div style="background:#ff0045">
  <h2>POR FAVOR NAO APAGUE AINDA ESTA AREA VERMELHA</h2>
  <ul class="side-nav" id="mobile">
   <li><a href="/">Home</a></li>
   @if(Auth::guest())
     <li><a href="{{route('login')}}">Login</a></li>
   @else
     <li><a href="#">{{Auth::user()->name}}</a></li>
     <li><a href="{{ route('login.sair') }}">Sair</a></li>
   @endif
  </ul>
</div>
