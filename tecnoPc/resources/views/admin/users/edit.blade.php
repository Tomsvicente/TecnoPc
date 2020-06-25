@extends("layouts.plantilla")

@section("title")
TecnoPC
@endsection

@section("section")
  <main class="py-4">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Administrar {{ $user->name}}</div>

          <div class="card-body">
          <form class="" action="{{ route('admin.users.update',['user' => $user->id])}}" method="post">
            @csrf
            {{method_field('PUT')}}
            @foreach ($roles as $role)
              <div class="form-check">
                <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                  {{$user->hasAnyRole($role->name) ? 'checked' : ''}}>
                    <label> {{$role->name}}</label>
              </div>
            @endforeach
            <button type="submit" class="btn btn-success">
              Actualizar
            </button>
          </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
@endsection
