@extends("plantilla")

@section("title")
TecnoPC
@endsection

@section("section")


        <div class="container">
                <div class="row margin_top90">
                    <div class="col-md-6">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                            <img src="img/MouseAsus.png">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-right-pr">
                            <h1>MOUSE ASUS BOTONES ASIGNABLES</h1>
                            <h3>COMPUTACIÓN</h3>
                            <p>                                </p>
                            <div class="precios_detalle">
                                Precio: $600
                                    </div>
                                </div>
                                    <div class="agregar">
                                        <form id="form100" action="">
                                            <input name="cantidad" type="text" id="cantidad" class="cant_cat" value="1">
                                            <input type="submit" class="prod_bot_comprar" value="Agregar al pedido">
                                        </form>
                                    </div>
                                    <div class="caja_estado">Stock</div>
                                    </div>
                    </div><!-- fin info producto -->
                </div>
@endsection
