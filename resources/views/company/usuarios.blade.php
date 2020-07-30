@extends('layouts.app')
@section('content')

<div id="content-wrapper" class ="content-wrapper">
	<div class="container white_content">
	    <div class="row">
	        <div class="col-xs-12">
	            <div class="heading-title">
	                <h4>Usuarios con acceso a la empresa</h4>
	            </div>
	        </div>
	        
	        <div class="col-sm-9">
	            <div class="my_company">
	                <table class="table table-striped salary tb10-xs">
	                    <tbody>
	                        <tr>
	                            <th>Admin</th>
	                            <th class="hidden-xs">Nombre</th>
	                            <th class="hidden-xs">Rol</th>
	                            <th>Usuario</th>
	                        </tr>
	                        <tr>
	                            <td style="font-size: 16px; text-align: center; color: #99b83f;">
	                                <i class="fa fa-check-circle"></i>
	                            </td>
	                            <td class="hidden-xs">WERNER ATENCIO</td>
	                            <td class="hidden-xs">Administrador</td>
	                            <td>pascalwerner@hotmail.com</td>
	                        </tr>
	                        <tr>
	                            <td style="font-size: 16px; text-align: center; color: #99b83f;">

	                            </td>
	                            <td class="hidden-xs">Jhon Gomez</td>
	                            <td class="hidden-xs"></td>
	                            <td>freedemou@gmail.com</td>
	                        </tr>
	                        <tr>
	                            <td style="font-size: 16px; text-align: center; color: #99b83f;">

	                            </td>
	                            <td class="hidden-xs">manrrique meneses</td>
	                            <td class="hidden-xs"></td>
	                            <td>manrrique.my@gmail.com</td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
	        </div>
	        <div class="col-sm-3 hidden-xs">
	            <div class="advice">
	                <div class="title"><i class="fa fa-check-circle"></i> USUARIOS CON ACCESO</div>
	                <div class="text">
	                    Las cuentas permiten que varias personas trabajen de forma colaborativa en la gestión de las ofertas
	                    de su empresa en Talento Inclusivo.
	                </div>
	            </div>
				<br>
	            <div class="advice">
	                <div class="title"><i class="fa fa-check-circle"></i> DAR ACCESO</div>
	                <div class="text">
	                    Sólo el administrador puede dar o remover el acceso a los usuarios.
	                    <br><br>
	                </div>
	            </div>
	        </div>
	        
	    </div>
	</div>
</div>

@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/company.css">
@endpush