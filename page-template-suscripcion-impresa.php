<?php
/*
Template name: Plantilla Suscripcion Impresa
*/
?>
<?php get_header(); ?>

    <!-- MAIN -->
    <main class="suscripcion-impresa mt-40 mb-70 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 text-center">
                    <div class="page-header text-center mt-40 mb-30">
                        <div class="text-section">Suscripción</div>
                        <div class="page-name">Revista Impresa</div>
                        <div class="font-small text-uppercase color-green">* Gratis Revista Digital</div>
                        <div class="divider">
                            <svg xmlns="http://www.w3.org/2000/svg" width="102" height="6" viewBox="0 0 102 6">
                                <g id="Grupo_523" data-name="Grupo 523" transform="translate(-1512 -432)">
                                    <rect id="Rectángulo_205" data-name="Rectángulo 205" width="34" height="6" transform="translate(1512 432)" fill="#00a44e" />
                                    <rect id="Rectángulo_206" data-name="Rectángulo 206" width="34" height="6" transform="translate(1546 432)" fill="#9cd42a" />
                                    <rect id="Rectángulo_207" data-name="Rectángulo 207" width="34" height="6" transform="translate(1580 432)" fill="#ffc405" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <picture class="d-block">
                        <img class="img-revista-impresa img-fluid" src="<?php echo get_template_directory_uri() . '/assets/imgs/theme/img-suscripcion-impreso.png'; ?>">
                    </picture>
                </div>
                <div class="col-lg-8 text-md-start">
                    <h5 class="text-uppercase font-sintony font-weight-bold mt-40 mb-15">Selecciona tu suscripción</h5>
                    <div class="suscripcion-precios card-group">
                        <div class="card year-01 text-center">
                            <div class="card-year">
                                <h2>1 Año</h2>
                                <p>12 Ejemplares</p>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title font-weight-bold">$49.989 <span class="font-medium">CLP</span></h2>
                                <a href="suscripcion-digital.html" type="submit" class="btn btn-black">Seleccionar</a>
                            </div>
                        </div>
                        <div class="card year-02 text-center">
                            <div class="card-year">
                                <h2>2 Años</h2>
                                <p>24 Ejemplares</p>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title font-weight-bold">$85.000 <span class="font-medium">CLP</span></h2>
                                <a href="suscripcion-digital.html" type="submit" class="btn btn-black">Seleccionar</a>
                            </div>
                        </div>
                        <div class="card year-03 text-center">
                            <div class="card-year">
                                <h2>3 Años</h2>
                                <p>36 Ejemplares</p>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title font-weight-bold">$122.000 <span class="font-medium">CLP</span></h2>
                                <a href="suscripcion-digital.html" type="submit" class="btn btn-black">Seleccionar</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-20 mb-20 text-center"><a href="">O suscribirse a la <strong>Revista Digital »</strong></a></div>
                    
                    <h5 class="text-uppercase font-sintony font-weight-bold mt-50 mb-15">Datos personales</h5>
                    <form  class="grey-input needs-validation" novalidate method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="nombre" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <input type="text" required class="form-control" name="apellido" placeholder="Apellido">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="rut" placeholder="RUT">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="telefono" placeholder="Teléfono">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="email" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                        
                    <h5 class="text-uppercase font-sintony font-weight-bold mt-40 mb-15">Dirección de envío</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="direccion" placeholder="Dirección">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="region" placeholder="Región">
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="comuna" placeholder="Comuna">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="ciudad" placeholder="Ciudad">
                                </div>
                            </div> 
                        </div>
                        
                    <h5 class="text-uppercase font-sintony font-weight-bold mt-40 mb-15">Facturación</h5> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h6>¿Deseas facturar?</h6>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="factura" id="SiFactura" value="SiFactura">
                                        <label class="form-check-label" for="SiFactura">Si</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="factura" id="NoFactura" value="NoFactura">
                                        <label class="form-check-label" for="NoFactura">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="razonSocial" placeholder="Razón Social">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="rut" placeholder="RUT">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="direccion" placeholder="Dirección">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="comuna" placeholder="Comuna">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="ciudad" placeholder="Ciudad">
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="giro" placeholder="Giro Comercial">
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="contacto" placeholder="Contacto">
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="telefono" placeholder="Teléfonos">
                                </div>
                            </div> 
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-black p-15" name="login">Siguiente</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </main>
    <!-- End Main content -->

<?php
get_sidebar();
get_footer();
?>