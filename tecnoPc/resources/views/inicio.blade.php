@extends("plantilla")

@section("title")
Inicio
@endsection

@section("section")

<div class="container">
    <div class="row">
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
                        <a href="">
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
            <div class="row">
                <div class="col-md-12">
                    <div class="contador">
                        <div class="buscador">
                            <form action="" class="form">
                                <input class="bs-text" type="text" id="bus" placeholder="Buscador de productos" name="bus">
                                <input class="lupita" type="submit" value="">
                            </form>
                            <div class="buscar" value=" "></div>
                            <div id="myDiv"></div>
                        </div>
                    </div>
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
                <div class="col-md-12 catalogo">
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
