@extends('theme')

@section('contet')
<section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Cursos</h2>
                    
                       
                    </header>

                    <!-- start: page -->
                 

            <section class="panel">
                            
                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="{{URL::to('insert_cursos')}}" class="fa fa-plus-square"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Listado de Cursos Disponibles</h2>
     
                            </header>
                   
                            <div class="panel-body">
                                <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>nombre</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($cursos as $conts)
                                      <tr class="gradeX">
                                        <td>{{ $conts->id }}</td>
                                        <td>{{ $conts->nombre }}</td>
    
                                    </tr>
                                     @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                         </div>
                        </div>
                    </div>

            </section>
  
                    <!-- end: page -->
                </section>
@endsection