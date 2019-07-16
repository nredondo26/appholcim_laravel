

<?php $__env->startSection('contet'); ?>
<section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Certificados</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="<?php echo e(URL::to('welcome')); ?>">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                            </ol>
                    
                            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>

                    <!-- start: page -->
                 

                   <section class="panel">
                            
                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="<?php echo e(URL::to('insert_certificados')); ?>" class="fa fa-plus-square"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Lista de Certificados Emitidos</h2>
     
                            </header>
                   
                            <div class="panel-body">
                                <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Fecha</th>
                                            <th>Cedula</th>
                                            <th>Nombre</th>
                                            <th>Curso</th>
                                            <th>Emitido Por</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $certificados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr class="gradeX">
                                        <td><?php echo e($conts->id); ?></td>
                                        <td><?php echo e($conts->fechaaprobacion); ?></td>
                                        <td><?php echo e($conts->cc_alumnos); ?></td>
                                        <td><?php echo e($conts->nomalumno); ?></td> 
                                        <td><?php echo e($conts->curnom); ?></td> 
                                        <td><?php echo e($conts->nombreusuario); ?></td>    
                                        
                                    </tr>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                         </div>
                        </div>
                    </div>

            </section>
  
                    <!-- end: page -->
                </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>