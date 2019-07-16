<?php $__env->startSection('contet'); ?>
<section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Certificado</h2>
                    
                       
                    </header>

                    <!-- start: page -->
                 

 <section class="panel">
                            
<div class="row">
     <div class="col-sm-12">
                 <section class="panel">

   <form  class="form-horizontal form-label-left" method="post" action="<?php echo e(URL::to('r-certificados')); ?>">
    <?php echo e(csrf_field()); ?> 


    <div class="col-md-5 col-sm-5 col-xs-8">
                
                  <table class="" style="width:100%">
                    <tbody>
                    <tr>
                                           
                        <div class="form-group <?php echo e($errors->has('cc_alumnos') ? 'has-error':''); ?>">
                            <label class="control-label col-md-3 col-sm-5 col-xs-12" for="first-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cedula del Alumno</font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span>
                            </label>
                            <div class="col-md-8 col-sm-10 col-xs-12">
                                <?php echo Form::text('cc_alumnos',null, ['class'=>'form-control col-md-7 col-xs-12']); ?>

                                <?php echo $errors->first('cc_alumnos','<span class="help-block">:message</span>'); ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('id_cursos') ? 'has-error':''); ?>">
                            <label class="control-label col-md-3 col-sm-5 col-xs-12" for="first-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Curso </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span>
                            </label>
                            <div class="col-md-8 col-sm-10 col-xs-12">
                            <select name="id_cursos" class="selectpicker" tabindex="-1">
                               <option>Seleccones un Curso</option>
                                <?php if($cursos->count()): ?>  
                                <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                
                                <option value="<?php echo e($tv->id); ?>" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo e($tv->nombre); ?></font></font></option>
                            
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                <?php endif; ?>
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

            <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  
                    <!-- end: page -->
                </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>