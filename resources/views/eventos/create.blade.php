<form method="POST" action="{{ route('eventos.store') }}">
    @csrf
  // formulario aquí 

 
  //aquí iría input nombre_concierto
  @error('nombre_concierto')
    <strong>{{message}}</strong>
  @enderror
  
  //aquí iría input fecha_realizacion
  @error('fecha_realizacion')
    <strong>{{message}}</strong>
  @enderror

  //aquí iría input id_recinto
  @error('id_recinto')
    <strong>{{message}}</strong>
  @enderror

  //aquí iría input id_grupos
  @error('id_grupos')
    <strong>{{message}}</strong>
  @enderror

  //aquí iría input num_espectadores
  @error('num_espectadores')
    <strong>{{message}}</strong>
  @enderror

  //aquí iría input id_promotor
  @error('id_promotor')
    <strong>{{message}}</strong>
  @enderror

  //aquí iría input id_medios
  @error('id_medios')
    <strong>{{message}}</strong>
  @enderror