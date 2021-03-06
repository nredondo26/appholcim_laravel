@extends('theme')

@section('contet')
<section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Alumnos</h2>
                    </header>

                    <!-- start: page -->
                 
 <section class="panel">
                            
<div class="row">
     <div class="col-sm-12">
                 <section class="panel">

   <form  class="form-horizontal form-label-left" method="post" action="{{URL::to('r-alumnos') }}">
    {{ csrf_field() }} 


    <div class="col-md-5 col-sm-5 col-xs-8">
                
                  <table class="" style="width:100%">
                    <tbody>
                    <tr>
                                           
                       <div class="form-group {{ $errors->has('nombre') ? 'has-error':'' }}">
                            <label class="control-label col-md-3 col-sm-5 col-xs-12" for="first-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombres </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span>
                            </label>
                            <div class="col-md-8 col-sm-10 col-xs-12">
                                {!! Form::text('nombre',null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                                {!! $errors->first('nombre','<span class="help-block">:message</span>')  !!}

                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('cc') ? 'has-error':'' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cedula</font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span>
                            </label>
                            <div class="col-md-8 col-sm-10 col-xs-12">
                                {!! Form::text('cc',null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                                {!! $errors->first('cc','<span class="help-block">:message</span>')  !!}

                            </div>
                        </div>

                    </tr>
                  </tbody>
              </table>
        <br>

                        <div class="form-group text-center">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button style="color: #ffffff; background-color: #ff7400" type="submit" class="btn btn-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Insertar Alumno</font></font></button>
                            </div>
                        </div>
                        
                       </form>
      </div>                     
    </form>

   
                            
                        </div>
                    </div>

            </section>

            @include('flash-message')
  
                    <!-- end: page -->
                </section>
@endsection