@extends("layouts.plantilla")

@section("title")
Perfil
@endsection

@section("section")


  <div class="py-4">
  <hr>
<div class="container">
    <div class="row">
  		<div class="col-sm-10">  <h2 style="font-size:3rem; font-weight:bold;">Bienvenido {{ $usuario ->name }} </h2> </div>
    	<div class="col-sm-2"></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->

      <div class="text-center">
        <img src="/cargas/avatares/{{$usuario->avatar}}" style="width:150px; height:150px;
        border-radius:50%; margin-right:25px; margin-bottom:25px; display:inline-block;" alt="Perfil imagen">
        <form enctype="multipart/form-data"  action="/perfil " method="post" class="texto-imagen">
        <h6 style="color:whitesmoke; font-family: 'Nunito', sans-serif; font-size:1rem">Cambiar imagen de perfil</h6>
        <input class="perfil-imagen" type="file" name="avatar">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

      </div></hr><br>


        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
        </ul>


          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="/perfilEditar" method="post" id="actualizarForm">
                      {{ csrf_field() }}

                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="name"><h4>Nombre</h4></label>
                              <input type="text" value="{{ $usuario ->name }}" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="{{ $usuario ->name }}" title="Colocá tu nombre">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                            <label for="surname"><h4>Apellido</h4></label>
                              <input type="text" value="{{ $usuario ->surname }}" class="form-control @error('surname') is-invalid @enderror" name="surname" id="surname" placeholder="{{ $usuario ->surname }}" title="Colocá tu apellido">
                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                      </div>

                      <div class="form-group">

                          <div class="col-xs-6">
                            <label for="domicilio"><h4>Domicilio</h4></label>
                              <input type="domicilio" value="{{ $usuario ->domicilio }}" class="form-control @error('domicilio') is-invalid @enderror" name="domicilio" id="domicilio" placeholder="{{ $usuario ->domicilio}}" title="Colocá tu direccion">
                                @error('domicilio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                        </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="password"><h4>Contraseña</h4></label>
                              <input type="password" value="{{ $usuario ->contraseña }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Contraseña" title="Colocá tu contraseña">
                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                            <label for="password-confirm"><h4>Confirmar contraseña</h4></label>
                              <input type="password" class="form-control" type="password" name="password_confirmation" id="password-confirm" placeholder="Verificar contraseña" title="Por favor repetí tu contraseña">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Guardar</button>
                               	<button class="btn btn-lg btn-success" type="reset"><i class="glyphicon glyphicon-repeat"></i> Resetear</button>
                            </div>
                      </div>
              	</form>
</form>

              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
</div>

@endsection
