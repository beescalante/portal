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
                    Matrícula
                </h5>
                <!--end::Page Title-->

                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="" class="text-muted">
                            Pagos de matrícula                         
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
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"></path>
                            <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>   
            </div>
            <div class="alert-text">
                Para realizar o reportar los pagos en línea de su matrícula, abonos, letras de cambio o trámites deberá haberse comunicado con su sede para que el personal de cajas le genere el cobro a su cuenta. Una vez generado el cobro, usted podrá verlo en la siguiente lista y gestionarlo.
            </div>
        </div>
        <!-- end::Notice -->
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon"><i class="flaticon2-favourite text-primary"></i></span>
                    <h3 class="card-label">Mis pagos</h3>
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_datatable" style="margin-top: 13px !important">
                    <thead>
                        <tr>
                        <th>Nro.Cobro</th>
                        <th>Cédula</th>
                        <th>Concepto</th>
                        <th>Total Pagar</th>
                        <th>Sede</th>
                        <th>Estado</th>
                        <th>Referencia</th>
                        <th>Creado</th>
                        <th>Fecha de Pago</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cobros as $cobro): ?>
                    <tr>
                        <td><?= h($cobro->id) ?></td>
                        <td><?= h($cobro->cedula) ?></td>
                        <td><?= h($cobro->concepto) ?></td>
                        <td><?php echo $this->Number->format($cobro->pagar, ['places' => 2,'before' => '₡']) ?></td>
                        <td><?= h($cobro->sede->nombre) ?></td>
                        <td>
                            <?php if($cobro->status==1): ?>
                                <span class="label label-lg label-warning label-inline mr-2">Pendiente</span>
                            <?php elseif($cobro->status==2):?>
                                <span class="label label-lg label-success label-inline mr-2">Aceptado</span>
                            <?php elseif($cobro->status==3):?>
                                <span class="label label-lg label-info label-inline mr-2">Revisión</span>
                            <?php elseif($cobro->status==4):?>
                                <span class="label label-lg label-danger label-inline mr-2">Fallido</span>
                            <?php else: ?>
                                <span class="label label-lg label-danger label-inline mr-2">Anulado</span>
                            <?php endif; ?>
                        </td>
                        <td><?= h($cobro->referencia) ?></td>
                        <td><?= h($cobro->created) ?></td>
                        <td>
                            <?php
                                if($cobro->fechapago){
                                    echo $cobro->fechapago->format('d/m/Y h:i:sa');
                                }else{
                                    echo "S/I";
                                }
                            ?>  
                            </td>
                        <td>
                            <a href="<?= $this->Url->build(['controller' => 'Cobros', 'action' => 'view',$cobro->id]) ?>" class="btn btn-sm btn-clean btn-icon" title="Ver pago"><i class="la la-eye"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
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
        "pageLength": 25
    });

} );   
</script>