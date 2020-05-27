@extends("layouts.plantilla")

@section("title")
Inicio
@endsection

@section("section")

<div class="container">
    <div class="row " >
        <div class="col-md-3 margin_top10">
            <div class="titulo_pd categorias">
                <strong>PRODUCTOS</strong>
                <div>DESTACADOS >>></div>
            </div>
            <nav id="navcatal categorias">
                <div class="cont-nav categorias">
                    <ul id="acord">
                        <li class="strong">CATEGORIAS</li>
                        <a style="color:#E90523 !important" href="">
                            <li style="color:#E90523 !important">
                                <div class="box">
                                    <h4 style="color:#E90523 !important; font-weight:bold">LIQUIDACIÓN</h4>
                                </div>
                            </li>
                        </a>
                        <a style="color:#E90523 !important" href="">
                            <li style="color:#f19800 !important">
                                <div class="box">
                                    <h4 style="color:#f19800 !important; font-weight:bold">TIEMPO DE DESCUENTO</h4>
                                </div>
                            </li>
                        </a>
                        <a href="categoria">
                            <li>
                                <div class="box">
                                    <h3>OUTLET</h3>

                                </div>
                            </li>
                        </a>
                        <a href="">
                            <li>
                                <div class="box">
                                    <h3>CONSOLAS DE JUEGOS</h3>
                                </div>
                                <ul>
                                    <!--Subcategorias-->
                                </ul>
                            </li>
                        </a>
                        <a href="">
                            <li>
                                <div class="box">
                                    <h3>TABLET</h3>
                                </div>
                                <ul>
                                    <!--Subcategorias-->
                                </ul>
                            </li>
                        </a>
                        <a href="">
                            <li>
                                <div class="box">
                                    <h3>VIDEOJUEGOS</h3>
                                </div>
                                <ul>
                                    <!--Subcategorias-->
                                </ul>
                            </li>
                        </a>
                        <a href="">
                            <li>
                                <div class="box">
                                    <h3>HERRAMIENTAS</h3>
                                </div>
                                <ul>
                                    <!--Subcategorias-->
                                </ul>
                            </li>
                        </a>
                        <a href="">
                            <li>
                                <div class="box">
                                    <h3>CELULARES</h3>
                                </div>
                                <ul>
                                    <!--Subcategorias-->
                                </ul>
                            </li>
                        </a>
                        <a href="">
                            <li>
                                <div class="box">
                                    <h3>COMPUTACIÓN</h3>
                                </div>
                                <ul>
                                    <!--Subcategorias-->
                                </ul>
                            </li>
                        </a>
                        <a href="">
                            <li>
                                <div class="box">
                                    <h3>POWER BANK Y PILAS</h3>
                                </div>
                                <ul>
                                    <!--Subcategorias-->
                                </ul>
                            </li>
                        </a>
                        <a href="">
                            <li>
                                <div class="box">
                                    <h3>REPUESTOS NOTEBOOK</h3>
                                </div>
                                <ul>
                                    <!--Subcategorias-->
                                </ul>
                            </li>
                        </a>
                        <a href="">
                            <li>
                                <div class="box">
                                    <h3>AURICULARES Y MP3</h3>
                                </div>
                                <ul>
                                    <!--Subcategorias-->
                                </ul>
                            </li>
                        </a>
                        <a href="">
                            <li>
                                <div class="box">
                                    <h3>BAZAR</h3>
                                </div>
                                <ul>
                                    <!--Subcategorias-->
                                </ul>
                            </li>
                        </a>
                        <a href="">
                            <li>
                                <div class="box">
                                    <h3>ILUMINACIÓN</h3>
                                </div>
                                <ul>
                                    <!--Subcategorias-->
                                </ul>
                            </li>
                        </a>
                        <a href="">
                            <li>
                                <div class="box">
                                    <h3>ELECTRONICA</h3>
                                </div>
                                <ul>
                                    <!--Subcategorias-->
                                </ul>
                            </li>
                        </a>
                    </ul>
                    <!-- fin ul1-->
                </div>
            </nav>
        </div>

        <div class="col-md-9 margin_top10">
          <div class="page">
  <div class="page__demo">
    <form class="search">
      <div class="a-field search__field">
        <input type="text" id="query" class="r-text-field a-field__input search__input" placeholder="Ej: Placa de video" required>
        <button class="r-button search__button search__clear" type="reset">
          <span class="search__clear-label">Limpiar buscador</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.971 47.971" class="search__icon search__icon-clear">
            <path d="M28.228 23.986L47.092 5.122a2.998 2.998 0 0 0 0-4.242 2.998 2.998 0 0 0-4.242 0L23.986 19.744 5.121.88a2.998 2.998 0 0 0-4.242 0 2.998 2.998 0 0 0 0 4.242l18.865 18.864L.879 42.85a2.998 2.998 0 1 0 4.242 4.241l18.865-18.864L42.85 47.091c.586.586 1.354.879 2.121.879s1.535-.293 2.121-.879a2.998 2.998 0 0 0 0-4.242L28.228 23.986z"/>
          </svg>
        </button>
        <label class="a-field__label-wrap search__hint" for="query">
          <span class="a-field__label">Que estás buscando?</span>
        </label>
      </div>
      <button class="r-button search__button search__submit" type="submit">
        <span class="search__submit-label">Buscar</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966" class="search__icon search__icon-search">
          <path d="M55.146 51.887L41.588 37.786A22.926 22.926 0 0 0 46.984 23c0-12.682-10.318-23-23-23s-23 10.318-23 23 10.318 23 23 23c4.761 0 9.298-1.436 13.177-4.162l13.661 14.208c.571.593 1.339.92 2.162.92.779 0 1.518-.297 2.079-.837a3.004 3.004 0 0 0 .083-4.242zM23.984 6c9.374 0 17 7.626 17 17s-7.626 17-17 17-17-7.626-17-17 7.626-17 17-17z"/>
        </svg>
      </button>
    </form>
  </div>
</div>


            <div class="row">
                <div class="col-md-12">
                    <a href="productoDetalle">
                        <div class="producto_destacado">
                            <img src="img/accesorios-pc.jpg" alt="combo" width="30%">
                            <div class="cont_texto_des">
                                <h3>PRODUCTO DESTACADO</h3>
                                <p>COMBO GAMER TECLADO MOUSE Y AURICULARES</p>
                                <div class="precio_des"> $2940
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--Productos-->
            <div class="row">
                <div class="col-md-12 catalogo" style="left:4%">
                  <div class="el-wrapper">
      <div class="box-up">
        <img class="img" src="img/MouseAsus.png" alt="">
        <div class="img-info">
          <div class="info-inner">
            <span class="p-name">Mouse Asus</span>
            <span class="p-company">Computacion</span>
          </div>
          <div class="a-size">DPI asignables : <span class="size">Gamer</span></div>
        </div>
      </div>

      <div class="box-down">
        <div class="h-bg">
          <div class="h-bg-inner"></div>
        </div>

        <a class="cart" href="#">
          <span class="price">$120</span>
          <span class="add-to-cart">
            <span class="txt">Agregar al carrito</span>
          </span>
        </a>
      </div>
    </div>
    <div class="el-wrapper">
<div class="box-up">
<img class="img" src="img/MouseAsus.png" alt="">
<div class="img-info">
<div class="info-inner">
<span class="p-name">Mouse Asus</span>
<span class="p-company">Computacion</span>
</div>
<div class="a-size">DPI asignables : <span class="size">Gamer</span></div>
</div>
</div>

<div class="box-down">
<div class="h-bg">
<div class="h-bg-inner"></div>
</div>

<a class="cart" href="#">
<span class="price">$120</span>
<span class="add-to-cart">
<span class="txt">Agregar al carrito</span>
</span>
</a>
</div>
</div>
<div class="el-wrapper">
<div class="box-up">
<img class="img" src="img/MouseAsus.png" alt="">
<div class="img-info">
<div class="info-inner">
<span class="p-name">Mouse Asus</span>
<span class="p-company">Computacion</span>
</div>
<div class="a-size">DPI asignables : <span class="size">Gamer</span></div>
</div>
</div>

<div class="box-down">
<div class="h-bg">
<div class="h-bg-inner"></div>
</div>

<a class="cart" href="#">
<span class="price">$120</span>
<span class="add-to-cart">
<span class="txt">Agregar al carrito</span>
</span>
</a>
</div>
</div>
<div class="el-wrapper">
<div class="box-up">
<img class="img" src="img/MouseAsus.png" alt="">
<div class="img-info">
<div class="info-inner">
<span class="p-name">Mouse Asus</span>
<span class="p-company">Computacion</span>
</div>
<div class="a-size">DPI asignables : <span class="size">Gamer</span></div>
</div>
</div>

<div class="box-down">
<div class="h-bg">
<div class="h-bg-inner"></div>
</div>

<a class="cart" href="#">
<span class="price">$120</span>
<span class="add-to-cart">
<span class="txt">Agregar al carrito</span>
</span>
</a>
</div>
</div>
<div class="el-wrapper">
<div class="box-up">
<img class="img" src="img/MouseAsus.png" alt="">
<div class="img-info">
<div class="info-inner">
<span class="p-name">Mouse Asus</span>
<span class="p-company">Computacion</span>
</div>
<div class="a-size">DPI asignables : <span class="size">Gamer</span></div>
</div>
</div>

<div class="box-down">
<div class="h-bg">
<div class="h-bg-inner"></div>
</div>

<a class="cart" href="#">
<span class="price">$120</span>
<span class="add-to-cart">
<span class="txt">Agregar al carrito</span>
</span>
</a>
</div>
</div>
<div class="el-wrapper">
<div class="box-up">
<img class="img" src="img/MouseAsus.png" alt="">
<div class="img-info">
<div class="info-inner">
<span class="p-name">Mouse Asus</span>
<span class="p-company">Computacion</span>
</div>
<div class="a-size">DPI asignables : <span class="size">Gamer</span></div>
</div>
</div>

<div class="box-down">
<div class="h-bg">
<div class="h-bg-inner"></div>
</div>

<a class="cart" href="#">
<span class="price">$120</span>
<span class="add-to-cart">
<span class="txt">Agregar al carrito</span>
</span>
</a>
</div>
</div>
                    <a href="productoDetalle" class="box">
                        <div class="box-move">
                            <div>
                                <img src="img/MouseAsus.png" alt="MouseAsus" width="190">
                            </div>
                            <h2>MOUSE ASUS BOTONES ASIGNABLES </h2>
                            <div class="precios_general">
                                Precio: $600
                            </div>
                            <div class="agregar">
                                <form id="form100" action="compras_accion.php">
                                    <input name="cantidad" type="text" class="cant_cat" value="1">
                                    <input type="submit" class="prod_bot_comprar" value="Agregar al pedido">
                                </form>
                            </div>
                            <div class="caja_estado">Stock</div>
                        </div>
                    </a>
                    <a href="productoDetalle" class="box">
                        <div class="box-move">
                            <div>
                                <img src="img/MouseAsus.png" alt="MouseAsus" width="190">
                            </div>
                            <h2>MOUSE ASUS BOTONES ASIGNABLES </h2>
                            <div class="precios_general">
                                Precio: $600
                            </div>
                            <div class="agregar">
                                <form id="form100" action="compras_accion.php">
                                    <input name="cantidad" type="text" class="cant_cat" value="1">
                                    <input type="submit" class="prod_bot_comprar" value="Agregar al pedido">
                                </form>
                            </div>
                            <div class="caja_estado">Stock</div>
                        </div>
                    </a>
                    <a href="" class="box">
                        <div class="box-move">
                            <div>
                                <img src="img/MouseAsus.png" alt="MouseAsus" width="190">
                            </div>
                            <h2>MOUSE ASUS BOTONES ASIGNABLES </h2>
                            <div class="precios_general">
                                Precio: $600
                            </div>
                            <div class="agregar">
                                <form id="form100" action="compras_accion.php">
                                    <input name="cantidad" type="text" class="cant_cat" value="1">
                                    <input type="submit" class="prod_bot_comprar" value="Agregar al pedido">
                                </form>
                            </div>
                            <div class="caja_estado">Stock</div>
                        </div>
                    </a>
                    <a href="" class="box">
                        <div class="box-move">
                            <div>
                                <img src="img/MouseAsus.png" alt="MouseAsus" width="190">
                            </div>
                            <h2>MOUSE ASUS BOTONES ASIGNABLES </h2>
                            <div class="precios_general">
                                Precio: $600
                            </div>
                            <div class="agregar">
                                <form id="form100" action="compras_accion.php">
                                    <input name="cantidad" type="text" class="cant_cat" value="1">
                                    <input type="submit" class="prod_bot_comprar" value="Agregar al pedido">
                                </form>
                            </div>
                            <div class="caja_estado">Stock</div>
                        </div>
                    </a>
                    <a href="" class="box">
                        <div class="box-move">
                            <div>
                                <img src="img/MouseAsus.png" alt="MouseAsus" width="190">
                            </div>
                            <h2>MOUSE ASUS BOTONES ASIGNABLES </h2>
                            <div class="precios_general">
                                Precio: $600
                            </div>
                            <div class="agregar">
                                <form id="form100" action="compras_accion.php">
                                    <input name="cantidad" type="text" class="cant_cat" value="1">
                                    <input type="submit" class="prod_bot_comprar" value="Agregar al pedido">
                                </form>
                            </div>
                            <div class="caja_estado">Stock</div>
                        </div>
                    </a>
                    <a href="" class="box">
                        <div class="box-move">
                            <div>
                                <img src="img/MouseAsus.png" alt="MouseAsus" width="190">
                            </div>
                            <h2>MOUSE ASUS BOTONES ASIGNABLES </h2>
                            <div class="precios_general">
                                Precio: $600
                            </div>
                            <div class="agregar">
                                <form id="form100" action="compras_accion.php">
                                    <input name="cantidad" type="text" class="cant_cat" value="1">
                                    <input type="submit" class="prod_bot_comprar" value="Agregar al pedido">
                                </form>
                            </div>
                            <div class="caja_estado">Stock</div>
                        </div>
                    </a>
                    <a href="" class="box">
                        <div class="box-move">
                            <div>
                                <img src="img/MouseAsus.png" alt="MouseAsus" width="190">
                            </div>
                            <h2>MOUSE ASUS BOTONES ASIGNABLES </h2>
                            <div class="precios_general">
                                Precio: $600
                            </div>
                            <div class="agregar">
                                <form id="form100" action="compras_accion.php">
                                    <input name="cantidad" type="text" class="cant_cat" value="1">
                                    <input type="submit" class="prod_bot_comprar" value="Agregar al pedido">
                                </form>
                            </div>
                            <div class="caja_estado">Stock</div>
                        </div>
                    </a>
                    <a href="" class="box">
                        <div class="box-move">
                            <div>
                                <img src="img/MouseAsus.png" alt="MouseAsus" width="190">
                            </div>
                            <h2>MOUSE ASUS BOTONES ASIGNABLES </h2>
                            <div class="precios_general">
                                Precio: $600
                            </div>
                            <div class="agregar">
                                <form id="form100" action="compras_accion.php">
                                    <input name="cantidad" type="text" class="cant_cat" value="1">
                                    <input type="submit" class="prod_bot_comprar" value="Agregar al pedido">
                                </form>
                            </div>
                            <div class="caja_estado">Stock</div>
                        </div>
                    </a>
                    <a href="" class="box">
                        <div class="box-move">
                            <div>
                                <img src="img/MouseAsus.png" alt="MouseAsus" width="190">
                            </div>
                            <h2>MOUSE ASUS BOTONES ASIGNABLES </h2>
                            <div class="precios_general">
                                Precio: $600
                            </div>
                            <div class="agregar">
                                <form id="form100" action="compras_accion.php">
                                    <input name="cantidad" type="text" class="cant_cat" value="1">
                                    <input type="submit" class="prod_bot_comprar" value="Agregar al pedido">
                                </form>
                            </div>
                            <div class="caja_estado">Stock</div>
                        </div>
                    </a>
                    <a href="" class="box">
                        <div class="box-move">
                            <div>
                                <img src="img/MouseAsus.png" alt="MouseAsus" width="190">
                            </div>
                            <h2>MOUSE ASUS BOTONES ASIGNABLES </h2>
                            <div class="precios_general">
                                Precio: $600
                            </div>
                            <div class="agregar">
                                <form id="form100" action="compras_accion.php">
                                    <input name="cantidad" type="text" class="cant_cat" value="1">
                                    <input type="submit" class="prod_bot_comprar" value="Agregar al pedido">
                                </form>
                            </div>
                            <div class="caja_estado">Stock</div>
                        </div>
                    </a>
                    <a href="" class="box">
                        <div class="box-move">
                            <div>
                                <img src="img/MouseAsus.png" alt="MouseAsus" width="190">
                            </div>
                            <h2>MOUSE ASUS BOTONES ASIGNABLES </h2>
                            <div class="precios_general">
                                Precio: $600
                            </div>
                            <div class="agregar">
                                <form id="form100" action="compras_accion.php">
                                    <input name="cantidad" type="text" class="cant_cat" value="1">
                                    <input type="submit" class="prod_bot_comprar" value="Agregar al pedido">
                                </form>
                            </div>
                            <div class="caja_estado">Stock</div>
                        </div>
                    </a>
                    <a href="" class="box">
                        <div class="box-move">
                            <div>
                                <img src="img/MouseAsus.png" alt="MouseAsus" width="190">
                            </div>
                            <h2>MOUSE ASUS BOTONES ASIGNABLES </h2>
                            <div class="precios_general">
                                Precio: $600
                            </div>
                            <div class="agregar">
                                <form id="form100" action="compras_accion.php">
                                    <input name="cantidad" type="text" class="cant_cat" value="1">
                                    <input type="submit" class="prod_bot_comprar" value="Agregar al pedido">
                                </form>
                            </div>
                            <div class="caja_estado">Stock</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
