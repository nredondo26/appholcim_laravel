<?php $__env->startSection('contet'); ?>
<section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Cursos</h2>
                    
                       
                    </header>

                    <!-- start: page -->
                 

 <section class="panel">
                            
<div class="row">
     <div class="col-sm-12">
                 <section class="panel">

   <form  class="form-horizontal form-label-left" method="post" action="<?php echo e(URL::to('r-cursos')); ?>">
    <?php echo e(csrf_field()); ?> 


    <div class="col-md-5 col-sm-5 col-xs-8">
                
                  <table class="" style="width:100%">
                    <tbody>
                    <tr>
                                           
                       <div class="form-group <?php echo e($errors->has('nombre') ? 'has-error':''); ?>">
                            <label class="control-label col-md-3 col-sm-5 col-xs-12" for="first-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombres </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span>
                            </label>
                            <div class="col-md-8 col-sm-10 col-xs-12">
                                <?php echo Form::text('nombre',null, ['class'=>'form-control col-md-7 col-xs-12']); ?>

                                <?php echo $errors->first('nombre','<span class="help-block">:message</span>'); ?>


                            </div>
                        </div>

                    </tr>
                  </tbody>
              </table>
        <br>
        <div class="form-group text-center">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button style="color: #ffffff; background-color: #ff7400" type="submit" class="btn btn-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Insertar Curso</font></font></button>
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