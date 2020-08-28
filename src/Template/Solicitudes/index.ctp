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
                    Solicitudes
                </h5>
                <!--end::Page Title-->

                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="" class="text-muted">
                            Ver solicitudes                                
                        </a>
                    </li>
                </ul>
                <!--end::Breadcrumb-->
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
                Si desea anular alguna solicitud de matrícula, deberá comuinicarse directamente con el personal de plataforma de su sede. Los estados de sus solicitudes corresponden a: <b>Revisión:</b> indica que su solicitud ya llegó a su sede y está por ser atendida, <b>Atendida:</b> indica que su solicitud ya fue atendida por el personal de plataforma, <b>Procesada:</b> indica que ya su matrícula fue formalizada y <b>Anulada:</b> indica que su solicitud fue anulada.
            </div>
        </div>
        <!-- end::Notice -->
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon"><i class="flaticon2-favourite text-primary"></i></span>
                    <h3 class="card-label">Mis solicitudes</h3>
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_datatable" style="margin-top: 13px !important">
                    <thead>
                        <tr>
                            <th>Nro. Solicitud</th>
                            <th>Cédula</th>
                            <th>Carrera</th>
                            <th>Sede</th>
                            <th>Período</th>
                            <th>Materias</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($solicitudes->count()>0): ?>
                            <?php foreach ($solicitudes as $solicitude): ?>
                            <tr>
                                <td>
                                    <?= h($solicitude->id) ?>
                                    <?php if($solicitude->notaest): ?>
                                        <a class="label pulse pulse-warning mr-10" data-toggle="tooltip" title="" data-original-title="Leer Nota" onclick="modal(<?php echo $solicitude->id; ?>)">
                                            <span class="svg-icon svg-icon-md">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L5,18 C3.34314575,18 2,16.6568542 2,15 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z M6.16794971,10.5547002 C7.67758127,12.8191475 9.64566871,14 12,14 C14.3543313,14 16.3224187,12.8191475 17.8320503,10.5547002 C18.1384028,10.0951715 18.0142289,9.47430216 17.5547002,9.16794971 C17.0951715,8.86159725 16.4743022,8.98577112 16.1679497,9.4452998 C15.0109146,11.1808525 13.6456687,12 12,12 C10.3543313,12 8.9890854,11.1808525 7.83205029,9.4452998 C7.52569784,8.98577112 6.90482849,8.86159725 6.4452998,9.16794971 C5.98577112,9.47430216 5.86159725,10.0951715 6.16794971,10.5547002 Z" id="Combined-Shape" fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                             </span>
                                             <span class="pulse-ring"></span>                      
                                        </a>
                                        <div class="modal fade" id="nota-<?php echo $solicitude->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true" data-backdrop="static">
                                            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Nota de Solicitud <?= h($solicitude->id) ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?= h($solicitude->notaest) ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </td>
                                <td><?= h($solicitude->cedula) ?></td>
                                <td><?= h($solicitude->carrera->nombre) ?></td>
                                <td><?= h($solicitude->sede->nombre) ?></td>
                                <td><?= h($solicitude->periodo) ?></td>
                                <td><?php foreach ($solicitude->materias as $materias): ?><?= h($materias->nombre).'<br> '; ?><?php endforeach; ?></td>
                                <td><?= h($solicitude->created->format('d/m/Y')." ".$solicitude->created) ?></td>
                                <td>
                                    <?php if($solicitude->status==1):?>
                                        <span class="label label-lg label-warning label-inline mr-2">Revisión</span>
                                    <?php elseif($solicitude->status==2): ?>
                                        <span class="label label-lg label-success label-inline mr-2">Procesada</span>
                                    <?php elseif($solicitude->status==3): ?>
                                        <span class="label label-lg label-danger label-inline mr-2">Anulada</span>
                                    <?php elseif($solicitude->status==4): ?>
                                        <span class="label label-lg label-info label-inline mr-2">Atendida</span>
                                    <?php endif; ?>
                                        
                                </td>

                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8">
                                    No hay registros
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
            "lengthMenu": "Mostrar _MENU_ solicitudes por página",
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
function modal(id){
    $('#nota-'+id).modal('show'); 
}
</script>