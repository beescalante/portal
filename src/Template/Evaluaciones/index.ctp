<!-- begin::Subheader -->
<div class="subheader py-2 py-lg-6  subheader-transparent " id="kt_subheader">
    <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Mobile Toggle-->
            <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
                <span></span>
            </button>
            <!--end::Mobile Toggle-->

            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold my-1 mr-5">
                    Evaluaciones Docentes
                </h5>
                <!--end::Page Title-->
            </div>
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->
    </div>
</div>
<!-- end::Subheader -->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <?= $this->Flash->render() ?>
        <!-- begin::Notice -->
        <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
            <div class="alert-icon">
                <span class="svg-icon svg-icon-primary svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                            <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
                            <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>   
            </div>
            <div class="alert-text">
                En la Universidad Santa Lucía nos aseguramos de mantener la confidencialidad de las respuestas a cada una de sus evaluaciones, todas las evaluaciones son anónimas y servirán para que nuestra institución evalue aspectos de calidad académica en nuestra comunidad docente.
            </div>
        </div>
        <!-- end::Notice -->
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon"><i class="flaticon2-favourite text-primary"></i></span>
                    <h3 class="card-label">Evaluaciones pendientes</h3>
                </div>
            </div>
            <div class="card-body table-responsive">
                <!--begin: Datatable-->
                <table class="table table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_datatable" style="margin-top: 13px !important">
                    <thead>
                        <tr>
                            <th>Nro.</th>
                            <th>Periodo</th>
                            <th>Materia</th>
                            <th>Docente</th>
                            <th>Horario</th>
                            <th>Contestar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($evaluaciones->count()>0): ?>
                            <?php foreach ($evaluaciones as $evaluacion): ?>
                            <tr>
                                <td>
                                    <?= h($evaluacion->id) ?>
                                </td>
                                <td><?= h($evaluacion->grupo->periodo) ?></td>
                                <td><?= h($evaluacion->grupo->materia->nombre) ?></td>
                                <td><?= h($evaluacion->grupo->docente->nombre." ".$evaluacion->grupo->docente->apellido1) ?></td>
                                <td><?= h($evaluacion->grupo->horario) ?></td>
                                <td>
                                   <a href="<?= $this->Url->build(['controller' => 'Evaluaciones', 'action' => 'edit',$evaluacion->id]) ?>" class="btn btn-icon btn-success btn-sm mr-2" title="Contestar"><i class="fas fa-edit"></i></a>  
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8">
                                    No hay evaluaciones pendientes
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#kt_datatable').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ evaluaciones por página",
            "zeroRecords": "No hay registros que coincidan con esta búsqueda",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros válidos",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search":"Buscar:",
            "paginate": {
                "previous": "Anterior",
                "next":"Siguiente",
                "first":"Primero",
                "last":"Último"
            }
        },
        "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [5] }
        ],
        "processing": true,
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "Todo"] ],
        "pageLength": 25,
        "order": false
    });

} );
</script>