@extends("layouts.plantilla")

@section("title")
Contacto
@endsection

@section("section")


  <main class="py-4">


    <section class="container">
    <div class="row cliente-contacto">
        <div class="col-6 ">
        <form action="">
        <h3 class="text-upparcase text-left">Formulario de contacto</h3>
        <div class="form-group row">
        <label for="" class="col-2 col-form-label">Nombre</label>
        <input type="text" placeholder="Escribe tu nombre aqui" class="form-control col-10">
</div>
        <div class="form-group row">
            <label for=""  class="col-2 col-form-label">Apellido</label>
        <input type="text" placeholder="Escribe su Apellido aqui" class="form-control col-10">
        </div>
        <div class="form-group row">
            <label for=""  class="col-2 col-form-label">Email</label>
            <input type="email" placeholder="ingrese su email aqui" class="form-control col-10">

        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Comentarios</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escriba aqui"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-danger" type="submit">Enviar</button>
        </div>
        </div>
        </div>
    </form>
    <div>
    </section>
      </main>
@endsection
