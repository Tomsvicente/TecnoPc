@extends("layouts.plantilla")

@section("title")
Carrito
@endsection

@section("section")
    @if (Session::has('cart'))
      <div class="row">

      <div class="shopping-cart">
  <!-- Title -->
  <div class="title">
    Carrito
  </div>

  <!-- Productos -->
  @foreach ($productos as $producto)
  <div class="item">
    <div class="buttons">
      <span class="fa fa-close"></span>
      <a href="{{ route('producto.remover', ['id' => $producto['item']['id']])}}"></a>
        </div>

    <div class="image">
      <img src="" alt="" />
    </div>

    <div class="description">
      <span>{{ $producto['item']['name']}}</span>
      <span></span>
    </div>

    <div class="quantity">
      <button class="plus-btn" type="button" name="button">
        <img src="plus.svg" alt="" />
        <a class="cart" href="{{ route('producto.agregarAlCarrito', ['id' => $producto['item']['id']])}}">
      </button>
      <input type="text" name="name" value="{{ $producto['qty']}}">
      <div class="">

      <button class="minus-btn" type="button" name="button">
        <a href="{{ route('producto.reducirUno', ['id' => $producto['item']['id']])}}"></a>
        <img src="minus.svg" alt="" />

      </button>

    </div>
    </div>
    <div class="total-price">Total : {{$producto['price']}}</div>
  </div>
@endforeach

<div class="row">
  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
    <strong>Total : {{$totalPrice}}</strong>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <a href="#" type="button" class="btn btn-success">Confirmar</a>
    </div>
  </div>
@else
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <h2>No tienes ningún producto en el carrito!</h2>
    </div>
  </div>
@endif
</div>
</div>

</div>
      {{-- <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
          <ul class="list-group">
            @foreach ($productos as $producto)
              <li class="list-group-item">
                <span class="badge">{{ $producto['qty']}}</span>
                <strong>{{ $producto['item']['name']}}</strong>
                <span class="label label-success">{{$producto['price']}}</span>
                <div class="btn-group">
                  <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" type="button">Quitar<span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="{{ route('producto.reducirUno', ['id' => $producto['item']['id']])}}">Quitar 1</a></li>
                    <li><a href="{{ route('producto.remover', ['id' => $producto['item']['id']])}}">Quitar todo</a></li>
                  </ul>
                </div>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
          <strong>Total : {{$totalPrice}}</strong>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
          <a href="#" type="button" class="btn btn-success">Confirmar</a>
        </div>
      </div>
    @else
      <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
          <h2>No tienes ningún producto en el carrito!</h2>
        </div>
      </div>
    @endif --}}




@endsection
