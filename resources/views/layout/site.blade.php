@include('layout._includes.topo')

@yield('conteudo')

@include('layout._includes.footer')

@hasSection('javascript')
  @yield('javascript')
@endif
