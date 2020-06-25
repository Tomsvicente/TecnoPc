@extends("layouts.plantilla")

@section("title")
TecnoPC
@endsection

@section("section")
  <main class="py-4">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">Administrar Usuarios</div>
          <div class="card-body">
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Rol</th>
      <th scope="col">Cambiar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
      <tr>
        <th>{{$user->name}}</th>
        <th>{{$user->email}}</th>
        <th>{{implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</th>
        <th>
          <a href="{{route('admin.users.edit', $user->id)}}" class=" float-left">
            <button type="button" class="btn btn-white btn-animation-1" name="button">Editar</button>
          </a>
          <a href="{{route('admin.impersonate', $user->id)}}" class=" float-left">
            <button type="button" class="btn btn-white btn-animation-1" name="button">Previsualizar</button>
          </a>
          <form action="{{route('admin.users.destroy', $user->id)}}" method="post" class="float-left">
            @csrf
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-white btn-animation-1">Borrar</button>
          </form>
        </th>
      </tr>
    @endforeach
  </tbody>
</table>
{{$users->links()}}
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
@endsection
