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
                    <li class="breadcrumb-item">
                        <a href="" class="text-muted">
                            Ver pago #<?php echo $cobro->id; ?>             
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
        <div class="card card-custom overflow-hidden">
            <div class="card-body p-0">
                <!-- begin: Invoice-->
                <!-- begin: Invoice header-->
                <div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">
                    <div class="col-md-9">
                        <div class="d-flex justify-content-between flex-column flex-md-row">
                            <h1 class="display-4 font-weight-boldest mb-10">DETALLE DEL COBRO</h1>
                            <div class="d-flex flex-column align-items-md-end px-0">
                                <!--begin::Logo-->
                                <a href="#" class="mb-5">
                                    <?php echo $this->Html->image('portal_int2.png', ['alt' => 'portal','width'=>'150']); ?>
                                </a>
                                <!--end::Logo-->
                                <span class=" d-flex flex-column align-items-md-end opacity-70">
                                    <span><?php echo $cobro->sede->nombre; ?></span>
                                    <span>Teléfono: <?php echo $cobro->sede->telefono; ?></span>
                                </span>
                            </div>
                        </div>
                        <div class="border-bottom w-100"></div>
                        <div class="d-flex justify-content-between pt-6">
                            <div class="d-flex flex-column flex-root">
                                <span class="font-weight-bolder mb-2">ESTADO</span>
                                <span class="opacity-70">
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
                                </span>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <span class="font-weight-bolder mb-2">FECHA</span>
                                <span class="opacity-70"><?php echo $cobro->created; ?></span>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <span class="font-weight-bolder mb-2">CONCEPTO</span>
                                <span class="opacity-70"><?php echo $cobro->concepto; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice header-->

                <!-- begin: Invoice body-->
                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                    <div class="col-md-9">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pl-0 font-weight-bold text-muted  text-uppercase">Descripción</th>
                                        <th class="text-right font-weight-bold text-muted text-uppercase"></th>
                                        <th class="text-right font-weight-bold text-muted text-uppercase"></th>
                                        <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Monto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="font-weight-boldest border-bottom-0">
                                        <td class="border-top-0 pl-0 py-4">Subtotal</td>
                                        <td class="border-top-0 text-right py-4"></td>
                                        <td class="border-top-0 text-right py-4"></td>
                                        <td class="text-danger border-top-0 pr-0 py-4 text-right"><?php echo $this->Number->format($cobro->subtotal, ['places' => 2,'before' => '₡']) ?></td>
                                    </tr>
                                    <tr class="font-weight-boldest border-bottom-0">
                                        <td class="border-top-0 pl-0 py-4">Descuento</td>
                                        <td class="border-top-0 text-right py-4"></td>
                                        <td class="border-top-0 text-right py-4"></td>
                                        <td class="text-danger border-top-0 pr-0 py-4 text-right"><?php echo $this->Number->format($cobro->descuento, ['places' => 2,'before' => '₡']) ?></td>
                                    </tr>
                                    <tr class="font-weight-boldest border-bottom-0">
                                        <td class="border-top-0 pl-0 py-4">Impuesto</td>
                                        <td class="border-top-0 text-right py-4"></td>
                                        <td class="border-top-0 text-right py-4"></td>
                                        <td class="text-danger border-top-0 pr-0 py-4 text-right"><?php echo $this->Number->format($cobro->impuesto, ['places' => 2,'before' => '₡']) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice body-->

                <!-- begin: Invoice footer-->
                <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                    <div class="col-md-9">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold text-muted  text-uppercase">MÉTODO</th>
                                        <th class="font-weight-bold text-muted  text-uppercase">NRO. COBRO</th>
                                        <th class="font-weight-bold text-muted  text-uppercase">FECHA PAGO</th>
                                        <th class="font-weight-bold text-muted  text-uppercase">TOTAL A PAGAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="font-weight-bolder">
                                        <td><?php echo $cobro->tipo; ?></td>
                                        <td><?php echo $cobro->id; ?></td>
                                        <td>
                                            <?php 
                                                if($cobro->fechapago){
                                                    echo $cobro->fechapago; 
                                                }else{
                                                    echo "Pago sin realizarse";
                                                }
                                            ?>   
                                        </td>
                                        <td class="text-danger font-size-h3 font-weight-boldest"><?php echo $this->Number->format($cobro->pagar, ['places' => 2,'before' => '₡']) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice footer-->

                <!-- begin: Invoice action-->
                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                    <div class="col-md-9">
                        <div class="d-flex justify-content-between">
                            <?php if($cobro->status==1 && $cobro->tipo=="Transferencia  Depósito Bancario"): ?>
                                <?= $this->Html->link(('Reportar Pago'),['controller'=>'Cobros','action' => 'reportar',$cobro->id],['class' => 'btn btn-primary font-weight-bold']) ?>
                            <?php elseif($cobro->status==2 && $cobro->tipo=="Transferencia  Depósito Bancario"): ?>
                                <?php echo $this->Html->link('Ver Comprobante', '/files/cobros/img/'.$cobro->img_dir.'/'.$cobro->img.'', ['target'=>'_blank', 'class'=>'btn btn-light-primary font-weight-bold']);?>
                            <?php elseif($cobro->status==3 && $cobro->tipo=="Transferencia Depósito Bancario"): ?>
                                <?php echo $this->Html->link('Ver Comprobante', '/files/cobros/img/'.$cobro->img_dir.'/'.$cobro->img.'', ['target'=>'_blank', 'class'=>'btn btn-light-primary font-weight-bold']);?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice action-->
                <!-- end: Invoice-->
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>