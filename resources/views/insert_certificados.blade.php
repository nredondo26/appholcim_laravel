@extends('theme')

@section('contet')
<section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Certificado</h2>
                    
                       
                    </header>

                    <!-- start: page -->
                 

 <section class="panel">
                            
<div class="row">
     <div class="col-sm-12">
                 <section class="panel">

   <form  class="form-horizontal form-label-left" method="post" action="{{URL::to('r-certificados') }}">
    {{ csrf_field() }} 


    <div class="col-md-5 col-sm-5 col-xs-8">
                
                  <table class="" style="width:100%">
                    <tbody>
                    <tr>
                                           
                        <div class="form-group {{ $errors->has('cc_alumnos') ? 'has-error':'' }}">
                            <label class="control-label col-md-3 col-sm-5 col-xs-12" for="first-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cedula del Alumno</font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span>
                            </label>
                            <div class="col-md-12 col-sm-10 col-xs-12">
                                {!! Form::text('cc_alumnos',null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                                {!! $errors->first('cc_alumnos','<span class="help-block">:message</span>')  !!}
                            </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('fecha_aprobacion') ? 'has-error':'' }}">
                            <label class="control-label col-md-3 col-sm-5 col-xs-12" for="first-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha aprobacion</font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span>
                            </label>
                            <div class="col-md-12 col-sm-10 col-xs-12">
                                {!! Form::text('fecha_aprobacion',null, ['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'AAAA-MM-DD']) !!}
                                {!! $errors->first('fecha_aprobacion','<span class="help-block">:message</span>')  !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('id_cursos') ? 'has-error':'' }}">
                            <label class="control-label col-md-3 col-sm-5 col-xs-12" for="first-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Curso </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span>
                            </label>
                            <div class="col-md-12 col-sm-10 col-xs-12">
                            <select name="id_cursos" class="selectpicker" tabindex="-1">
                               <option>Seleccione un Curso</option>
                                @if($cursos->count())  
                                @foreach($cursos as $tv) 
                                
                                <option value="{{ $tv->id }}" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $tv->nombre }}</font></font></option>
                            
                                @endforeach 
                                @endif
                            </select>
                           </div>                      
                        </div>

                    </tr>
                  </tbody>
              </table>
        <br>
        <div class="form-group text-center">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button style="color: #ffffff; background-color: #ff7400" type="submit" class="btn btn-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Insertar Certificado</font></font></button>
                            </div>
                        </div>

      </div>                     
    </form>

   
                            
                        </div>
                    </div>

            </section>

            @include('flash-message')
  
                    <!-- end: page -->
                </section>
@endsection