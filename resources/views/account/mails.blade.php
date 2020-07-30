@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
      <div class="col-md-8">
        <br>
        <div id="sub_menu">
            <div class="text-center">                
                <div class="row">
                  <div class="col-md-6">
                    <a class="link" href="/account/config">
                        Cuenta
                    </a>
                  </div>
                  <div class="col-md-6">
                      <a class="link selected" href="/account/mails">
                          Correos
                      </a>
                  </div>
                </div>
            </div>
        </div>
        <div class="box tb20">
            <h1 class="main">Configura los correos automáticos </h1>
            <div class="content_view">
                <form method="POST" id="mailForm" action="#">
                    <div class="row">
                        <div class="form-group col-md-12 col-sm-8 row">
                            <div class="col-md-8">
                                <label for="mail">Recibir mails de Talento Inclusivo</label>
                            </div>
                            <div class="col-md-4">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input" id="mail" name="example">
                                  <label class="custom-control-label" for="mail">Si</label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-md-12 col-sm-8 row">
                            <div class="col-md-8">
                                <label for="mailRecommend">Recomendaciones de ofertas</label>
                            </div>
                            <div class="col-md-4">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input" id="mailRecommend" name="example">
                                  <label class="custom-control-label" for="mailRecommend">Si</label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-md-12 col-sm-8 row">
                            <div class="col-md-8">
                                <label for="mailInvitation">Invitaciones de empresa a postular</label>
                            </div>
                            <div class="col-md-4">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input" id="mailInvitation" name="example">
                                  <label class="custom-control-label" for="mailInvitation">Si</label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-md-12 col-sm-8 row">
                            <div class="col-md-8">
                                <label for="mailOffer">Aviso de ofertas que calzan con mi perfil</label>
                            </div>
                            <div class="col-md-4">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input" id="mailOffer" name="example">
                                  <label class="custom-control-label" for="mailOffer">Si</label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-md-12 col-sm-8 row hidden">
                            <div class="col-md-8">
                                <label for="mailApplication">Confirmación de postulación</label>
                            </div>
                            <div class="col-md-4">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input" id="mailApplication" name="example">
                                  <label class="custom-control-label" for="mailApplication">Si</label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-md-12 col-sm-8 row">
                            <div class="col-md-8">
                                <label for="mailQuestion">Seguimiento de postulaciones</label>
                            </div>
                            <div class="col-md-4">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input" id="mailQuestion" name="example">
                                  <label class="custom-control-label" for="mailQuestion">Si</label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-md-12 col-sm-8 row">
                            <div class="col-md-8">
                                <label for="mailPoll">Encuestas</label>
                            </div>
                            <div class="col-md-4">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input" id="mailPoll" name="example">
                                  <label class="custom-control-label" for="mailPoll">Si</label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 col-sm-8 text-center">
                            <input type="submit" class="btn btn-primary" value="Guardar cambios">
                        </div>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
        <br>
    </div>
		@include('modal.perfil')
	</div>
</div>

@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/perfil.css">
@endpush