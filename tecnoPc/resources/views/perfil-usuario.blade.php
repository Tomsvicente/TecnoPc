@extends("layouts.plantilla")

@section("title")
Perfil
@endsection

@section("section")

<div class="form-group perfil" >
    <div class="row">
    <form action="" >
        <h3>Perfil de usuario</h3>
        <label for="">Nombre de usuario</label>
        <input type="text" class="bt" value="Juan" disabled>
        <label for="">Apellido</label>
		<input type="text" class="bt" value="Gonzalez" disabled>
		<label for="">Email</label>
		<input type="email" value="mail" class=" bt" disabled>
		<label for="">Contraseña</label>
		<input type="password" value="clave" class="bt">
		<input type="submit" value="Modificar" class=" btn-guardar">
		<input type="submit" value="Salir" class="  btn-guardar">
    </form>
    </div>
</div>

@endsection
