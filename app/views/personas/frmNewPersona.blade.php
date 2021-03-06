@extends('layout')

@section('content')
    <h1>Formulario de Registro </h1>
        @if(Session::has('confirm'))
	            <div class="alert-box success round">
	                {{ Session::get('confirm') }}
	            </div>
	    @endif

    {{ Form::open(['route' => 'regPersona','files' => true,'method' => 'POST', 'role' => 'form']) }}
    <div class="row-fluid">
        <div class="col-lg-4">
                <div class="form-group">
                    {{ Form::label('nombre','Nombre') }}
                    {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                    {{ $errors->first('nombre','<p class=" btn-danger active">:message</p>') }}

                </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                {{ Form::label('apellidoP','Apellido Paterno') }}
                {{ Form::text('apellidoP',null, ['class' => 'form-control']) }}
                {{ $errors->first('apellidoP','<p class=" btn-danger active">:message</p>') }}

            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                {{ Form::label('apellidoM','Apellido Materno') }}
                {{ Form::text('apellidoM',null, ['class' => 'form-control']) }}
                {{ $errors->first('apellidoM','<p class=" btn-danger active">:message</p>') }}

            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="col-lg-2">
            <div class="form-group">
                {{ Form::label('dni','DNI') }}
                {{ Form::text('dni', null, ['class' => 'form-control','pattern' => '[0-9]{8}']) }}
                {{ $errors->first('dni','<p class=" btn-danger active">:message</p>') }}
             </div>

        </div>

        <div class="col-lg-3">
            <div class="form-group">
                {{ Form::label('direccion','Direccion') }}
                {{ Form::text('direccion', null, ['class' => 'form-control']) }}
                {{ $errors->first('direccion','<p class=" btn-danger active">:message</p>') }}
             </div>

        </div>
        <div class="col-lg-3">
            <div class="form-group">
                {{ Form::label('correo','correo') }}
                {{ Form::email('correo', null,['class' => 'form-control']) }}
                {{ $errors->first('correo','<p class=" btn-danger active">:message</p>') }}

            </div>

        </div>
        <div class="col-lg-2">
            <div class="form-group">
                {{ Form::label('telefono','Telefono') }}
                {{ Form::text('telefono',null, ['class' => 'form-control']) }}
                {{ $errors->first('telefono','<p class=" btn-danger active">:message</p>') }}

            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                {{ Form::label('celular','Celular') }}
                {{ Form::text('celular',null, ['class' => 'form-control']) }}
                {{ $errors->first('celular','<p class=" btn-danger active">:message</p>') }}

            </div>
        </div>

    </div>

    <div class="row-fluid">
        <div class="col-lg-4">
            <div class="form-group">
                {{ Form::label('foto','Imagen') }}
                {{ Form::file('foto'); }}
                {{ $errors->first('foto','<p class=" btn-danger active">:message</p>') }}

            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                {{ Form::label('nivel','Nivel') }}
                {{ Form::select('nivel', array(null=>'Ninguno','Primaria' => 'Primaria', 'Secundaria' => 'Secundaria'),'Ninguno',['class' => 'form-control']) }}
                {{ $errors->first('grado','<p class=" btn-danger active">:message</p>') }}

            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                {{ Form::label('grado','Grado') }}
                {{ Form::select('grado', array(null=>'Ninguno','1' => '1', '2' => '2','3' => '3','4' => '4','5' => '5','6' => '6'),'Ninguno',['class' => 'form-control']) }}
                {{ $errors->first('grado','<p class=" btn-danger active">:message</p>') }}

            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                {{ Form::label('seccion','Seccion') }}
                {{ Form::select('seccion', array(null=>'Ninguno','A' => 'A', 'B' => 'B','C' => 'C'),'Ninguno',['class' => 'form-control']) }}
                {{ $errors->first('seccion','<p class=" btn-danger active">:message</p>') }}

            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-lg-12">
            <p>
                <input type="submit" value="Register" class="btn btn-success"/>
            </p>
        </div>

    </div>


    {{ Form::close() }}





    <script>
    $(document).ready(function (){
       /* Valida el tamaño maximo de un archivo adjunto */
       $('#foto').change(function (){

         var sizeByte = this.files[0].size;
         var siezekiloByte =(sizeByte / 1024);

         if(siezekiloByte > 1900){
             alert('El tamaño supera el limite permitido');
             $(this).val('');
         }
       });
    });
    </script>

@endsection                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               