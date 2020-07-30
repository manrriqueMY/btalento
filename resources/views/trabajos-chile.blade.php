@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="heading-title">        
            <h3>Trabajos exclusivos <small class="float-right"><strong>11 trabajos encontrados</strong></small></h3>
            
        </div>

        <div class="row">
            <div class="col-md-4">
                <div id="filtro">
                    <span><label>Filtrar Trabajos</label></span>
                    <div>
                        <br>
                        <label for="">Palabras Clave</label>
                        <div class="input-group  has-feedback">                        
                            <select name="" id="" class="custom-select">
                                <option value="">Todas</option>
                            </select>
                        </div>
                    </div> 
                    <div>
                        <br>
                        <label for="">Tipo de Oferta</label>
                        <div class="input-group  has-feedback">                        
                            <select name="" id="" class="custom-select">
                                <option value="">Todas</option>
                            </select>
                        </div>
                    </div> 
                    <div>
                        <br>
                        <label for="">Carrera</label>
                        <div class="input-group  has-feedback">                        
                            <select name="" id="" class="custom-select">
                                <option value="">Todas</option>
                            </select>
                        </div>
                    </div> 
                    <div>
                        <br>
                        <label for="">Comuna</label>
                        <div class="input-group  has-feedback">                        
                            <select name="" id="" class="custom-select">
                                <option value="">Todas</option>
                            </select>
                        </div>
                    </div> 
                    <div>
                        <br>
                        <label for="">Fecha de Publicación</label>
                        <div class="input-group  has-feedback">                        
                            <select name="" id="" class="custom-select">
                                <option value="">Todas</option>
                            </select>
                        </div>
                    </div>                
                    
                </div>
            </div>
            <div class="col-md-8">
                <div id="trabajos">
                    <div class="row">
                        <div class="col-xs-12 col-md-8 row">
                            <!--<div class="col-xs-12 col-md-4">
                                <a href="/empresa">
                                    <img class="img-responsive faa-horizontal animated-hover" height="75"
                                            src="//reqlut2.s3.amazonaws.com/uploads/logos/ef0168fd1028554079e3d8903f4f95daad2e2984-5242880.jpg">
                                </a>
                            </div>-->
                            <div class="col-xs-12 col-md-12" id="descripcion">
                                <div class="title">
                                    <a target="_blank" href="/trabajo">Jefe (a) Turno Perforación y Tronadura (14065) </a>
                                    <a class="btn btn-sm btn-voice"><i class="fa fa-volume-up"></i></a>
                                </div>

                                <div class="subtitle">
                                    <a href="/trabajar-en-antofagasta-minerals">Antofagasta Minerals</a>
                                    <span>&nbsp;·&nbsp;</span>
                                    <span itemprop="addressRegion">II Región de Antofagasta</span>
                                </div>

                                <div>
                                    <span class="tags">Profesional</span>
                                    <span class="tags">Ingeniería</span>
                                </div>

                                <div class="summary">
                                    <span>Indiferente (de 0 a más de 20 años de experiencia) </span>
                                    <a target="_blank" href="/trabajo">&nbsp;Ver más +</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="hidden-xs">
                                <p><strong>Fecha de publicación</strong></p>
                                <p class="date text-right-sm"> 26 de Jul, 2020</p>
                            </div>

                            <p><strong>Compartir</strong></p>
                            <div class="share text-right-sm mt10-xs">
                                <a href="#!" target="_blank"><i class="fab fa-facebook-square faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-twitter faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-linkedin faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-whatsapp faa-shake animated-hover"></i></a>
                            </div>
                            <a class="btn postula btn-primary btn-block faa-parent animated-hover" target="_blank" href="/trabajo">
                                Postular <i class="fa fa-chevron-circle-right faa-horizontal"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-8 row">
                            <!--<div class="col-xs-12 col-md-4">
                                <a href="/empresa">
                                    <img class="img-responsive faa-horizontal animated-hover" height="75"
                                            src="//reqlut2.s3.amazonaws.com/uploads/logos/ef0168fd1028554079e3d8903f4f95daad2e2984-5242880.jpg">
                                </a>
                            </div>-->
                            <div class="col-xs-12 col-md-12" id="descripcion">
                                <div class="title">
                                    <a target="_blank" href="/trabajo">Jefe (a) Turno Perforación y Tronadura (14065) </a>
                                    <a class="btn btn-sm btn-voice"><i class="fa fa-volume-up"></i></a>
                                </div>

                                <div class="subtitle">
                                    <a href="/trabajar-en-antofagasta-minerals">Antofagasta Minerals</a>
                                    <span>&nbsp;·&nbsp;</span>
                                    <span itemprop="addressRegion">II Región de Antofagasta</span>
                                </div>

                                <div>
                                    <span class="tags">Profesional</span>
                                    <span class="tags">Ingeniería</span>
                                </div>

                                <div class="summary">
                                    <span>Indiferente (de 0 a más de 20 años de experiencia) </span>
                                    <a target="_blank" href="/trabajo">&nbsp;Ver más +</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="hidden-xs">
                                <p><strong>Fecha de publicación</strong></p>
                                <p class="date text-right-sm"> 26 de Jul, 2020</p>
                            </div>

                            <p><strong>Compartir</strong></p>
                            <div class="share text-right-sm mt10-xs">
                                <a href="#!" target="_blank"><i class="fab fa-facebook-square faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-twitter faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-linkedin faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-whatsapp faa-shake animated-hover"></i></a>
                            </div>
                            <a class="btn postula btn-primary btn-block faa-parent animated-hover" target="_blank" href="/trabajo">
                                Postular <i class="fa fa-chevron-circle-right faa-horizontal"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-8 row">
                            <!--<div class="col-xs-12 col-md-4">
                                <a href="/empresa">
                                    <img class="img-responsive faa-horizontal animated-hover" height="75"
                                            src="//reqlut2.s3.amazonaws.com/uploads/logos/ef0168fd1028554079e3d8903f4f95daad2e2984-5242880.jpg">
                                </a>
                            </div>-->
                            <div class="col-xs-12 col-md-12" id="descripcion">
                                <div class="title">
                                    <a target="_blank" href="/trabajo">Jefe (a) Turno Perforación y Tronadura (14065) </a>
                                    <a class="btn btn-sm btn-voice"><i class="fa fa-volume-up"></i></a>
                                </div>

                                <div class="subtitle">
                                    <a href="/trabajar-en-antofagasta-minerals">Antofagasta Minerals</a>
                                    <span>&nbsp;·&nbsp;</span>
                                    <span itemprop="addressRegion">II Región de Antofagasta</span>
                                </div>

                                <div>
                                    <span class="tags">Profesional</span>
                                    <span class="tags">Ingeniería</span>
                                </div>

                                <div class="summary">
                                    <span>Indiferente (de 0 a más de 20 años de experiencia) </span>
                                    <a target="_blank" href="/trabajo">&nbsp;Ver más +</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="hidden-xs">
                                <p><strong>Fecha de publicación</strong></p>
                                <p class="date text-right-sm"> 26 de Jul, 2020</p>
                            </div>

                            <p><strong>Compartir</strong></p>
                            <div class="share text-right-sm mt10-xs">
                                <a href="#!" target="_blank"><i class="fab fa-facebook-square faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-twitter faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-linkedin faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-whatsapp faa-shake animated-hover"></i></a>
                            </div>
                            <a class="btn postula btn-primary btn-block faa-parent animated-hover" target="_blank" href="/trabajo">
                                Postular <i class="fa fa-chevron-circle-right faa-horizontal"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-8 row">
                            <!--<div class="col-xs-12 col-md-4">
                                <a href="/empresa">
                                    <img class="img-responsive faa-horizontal animated-hover" height="75"
                                            src="//reqlut2.s3.amazonaws.com/uploads/logos/ef0168fd1028554079e3d8903f4f95daad2e2984-5242880.jpg">
                                </a>
                            </div>-->
                            <div class="col-xs-12 col-md-12" id="descripcion">
                                <div class="title">
                                    <a target="_blank" href="/trabajo">Jefe (a) Turno Perforación y Tronadura (14065) </a>
                                    <a class="btn btn-sm btn-voice"><i class="fa fa-volume-up"></i></a>
                                </div>

                                <div class="subtitle">
                                    <a href="/trabajar-en-antofagasta-minerals">Antofagasta Minerals</a>
                                    <span>&nbsp;·&nbsp;</span>
                                    <span itemprop="addressRegion">II Región de Antofagasta</span>
                                </div>

                                <div>
                                    <span class="tags">Profesional</span>
                                    <span class="tags">Ingeniería</span>
                                </div>

                                <div class="summary">
                                    <span>Indiferente (de 0 a más de 20 años de experiencia) </span>
                                    <a target="_blank" href="/trabajo">&nbsp;Ver más +</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="hidden-xs">
                                <p><strong>Fecha de publicación</strong></p>
                                <p class="date text-right-sm"> 26 de Jul, 2020</p>
                            </div>

                            <p><strong>Compartir</strong></p>
                            <div class="share text-right-sm mt10-xs">
                                <a href="#!" target="_blank"><i class="fab fa-facebook-square faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-twitter faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-linkedin faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-whatsapp faa-shake animated-hover"></i></a>
                            </div>
                            <a class="btn postula btn-primary btn-block faa-parent animated-hover" target="_blank" href="/trabajo">
                                Postular <i class="fa fa-chevron-circle-right faa-horizontal"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-8 row">
                            <!--<div class="col-xs-12 col-md-4">
                                <a href="/empresa">
                                    <img class="img-responsive faa-horizontal animated-hover" height="75"
                                            src="//reqlut2.s3.amazonaws.com/uploads/logos/ef0168fd1028554079e3d8903f4f95daad2e2984-5242880.jpg">
                                </a>
                            </div>-->
                            <div class="col-xs-12 col-md-12" id="descripcion">
                                <div class="title">
                                    <a target="_blank" href="/trabajo">Jefe (a) Turno Perforación y Tronadura (14065) </a>
                                    <a class="btn btn-sm btn-voice"><i class="fa fa-volume-up"></i></a>
                                </div>

                                <div class="subtitle">
                                    <a href="/trabajar-en-antofagasta-minerals">Antofagasta Minerals</a>
                                    <span>&nbsp;·&nbsp;</span>
                                    <span itemprop="addressRegion">II Región de Antofagasta</span>
                                </div>

                                <div>
                                    <span class="tags">Profesional</span>
                                    <span class="tags">Ingeniería</span>
                                </div>

                                <div class="summary">
                                    <span>Indiferente (de 0 a más de 20 años de experiencia) </span>
                                    <a target="_blank" href="/trabajo">&nbsp;Ver más +</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="hidden-xs">
                                <p><strong>Fecha de publicación</strong></p>
                                <p class="date text-right-sm"> 26 de Jul, 2020</p>
                            </div>

                            <p><strong>Compartir</strong></p>
                            <div class="share text-right-sm mt10-xs">
                                <a href="#!" target="_blank"><i class="fab fa-facebook-square faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-twitter faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-linkedin faa-shake animated-hover"></i></a>
                                <a href="#!" target="_blank"><i class="fab fa-whatsapp faa-shake animated-hover"></i></a>
                            </div>
                            <a class="btn postula btn-primary btn-block faa-parent animated-hover" target="_blank" href="/trabajo">
                                Postular <i class="fa fa-chevron-circle-right faa-horizontal"></i>
                            </a>
                        </div>
                    </div>
                </div>    
            </div>     
        </div>          
    </div>
</div>

@endsection

@push('css')
<link rel="stylesheet" href="/assets/css/custom/trabajos.css">
@endpush

@push('js')

@endpush