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
                    Mi perfil
                </h5>
                <!--end::Page Title-->

                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="" class="text-muted">
                            Editar                                
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
        <!--begin::Profile Change Password-->
        <div class="d-flex flex-row">
            <!--begin::Aside-->
            <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                <!--begin::Profile Card-->
                <div class="card card-custom card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::User-->
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center symbol-light-primary">
                                <span class="symbol-label font-size-h1"><?php echo substr($current_user['nombre'], 0, 1); ?></span>
                            </div>
                            <div>
                                <a class="font-weight-bolder font-size-h7 text-dark-75 text-hover-primary">
                                    <?php echo $docente->nombre.' '.$docente->apellido1.' '.$docente->apellido2; ?>
                                </a>
                                <div class="text-muted">
                                    <?php echo $docente->sede->nombre; ?>
                                </div>
                                <div class="mt-2">
                                    <p class="bg-primary text-white py-2 px-4"><?php echo $docente->grado->nombre; ?></p>
                                </div>
                            </div>
                        </div>
                        <!--end::User-->

                        <!--begin::Contact-->
                        <div class="py-9">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">Cédula:</span>
                                <a class="text-muted"><?php echo $docente->cedula; ?></a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">Correo Personal:</span>
                                <a class="text-muted"><?php echo $docente->emailp; ?></a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">Correo Institucional:</span>
                                <span class="text-muted"><?php echo $docente->emailu; ?></span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="font-weight-bold mr-2">Teléfono:</span>
                                <span class="text-muted"><?php echo $docente->telefono; ?></span>
                            </div>
                        </div>
                        <!--end::Contact-->

                        <!--begin::Nav-->
                        <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                            <div class="navi-item mb-2">
                                <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'miperfild']) ?>" class="navi-link py-4 active">
                                    <span class="navi-icon mr-2">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>       
                                    </span>
                                    <span class="navi-text font-size-lg">
                                        Editar datos personales
                                    </span>
                                </a>
                            </div>
                            <div class="navi-item mb-2">
                                <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'cambiarcontrasenad']) ?>" class="navi-link py-4">
                                    <span class="navi-icon mr-2">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>                    
                                    </span>
                                    <span class="navi-text font-size-lg">
                                        Cambiar mi contraseña
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Profile Card-->
            </div>
            <!--end::Aside-->

            <!--begin::Content-->
            <div class="flex-row-fluid ml-lg-8">
                <?= $this->Flash->render() ?>
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="card-header py-3">
                        <div class="card-title align-items-start flex-column">
                            <h3 class="card-label font-weight-bolder text-dark">Datos Personales</h3>
                            <span class="text-muted font-weight-bold font-size-sm mt-1">Editar mis datos</span>
                        </div>
                        <div class="card-toolbar">
                        <?= $this->Form->create($docente) ?>
                            <?= $this->Form->button(('Guardar'),['class'=>'btn btn-success mr-2']) ?>
                            <?= $this->Html->link(('Cancelar'),['controller'=>'Users','action' => 'home'],['class' => 'btn btn-secondary']) ?>
                        </div>
                    </div>
                    <!--end::Header-->

                    <!--begin::Form-->
                    
                        <div class="card-body">
                            <div class="alert alert-custom alert-light-danger fade show mb-10" role="alert">
                                <div class="alert-icon">
                                    <span class="svg-icon svg-icon-3x svg-icon-danger">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                                <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"></rect>
                                                <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"></rect>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>                        
                                </div>
                                <div class="alert-text font-weight-bold">
                                    Escriba cuidadodasamente todos sus datos. En caso de que no pueda modificar sus datos, comuníquelo directamente en su sede o a través del formulario de soporte detallando el problema.
                                </div>
                                <div class="alert-close">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-alert">Nombre</label>
                                <div class="col-lg-9 col-xl-6">
                                    <?php echo $this->Form->control('nombre',['label'=>false,'class'=>'form-control form-control-lg form-control-solid mb-2','placeholder'=>'Nombre completo','type'=>'text','autocomplete'=>'new-password','required'=>'required']); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-alert">Primer Apellido</label>
                                <div class="col-lg-9 col-xl-6">
                                    <?php echo $this->Form->control('apellido1',['label'=>false,'class'=>'form-control form-control-lg form-control-solid mb-2','placeholder'=>'Primer Apellido','type'=>'text','autocomplete'=>'new-password','required'=>'required']); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-alert">Segundo Apellido</label>
                                <div class="col-lg-9 col-xl-6">
                                    <?php echo $this->Form->control('apellido2',['label'=>false,'class'=>'form-control form-control-lg form-control-solid mb-2','placeholder'=>'Segundo Apellido','type'=>'text','autocomplete'=>'new-password']); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-alert">Correo Personal</label>
                                <div class="col-lg-9 col-xl-6">
                                    <?php echo $this->Form->control('emailp',['label'=>false,'class'=>'form-control form-control-lg form-control-solid mb-2','placeholder'=>'Ejem: micorreo@correo.com','type'=>'email','autocomplete'=>'new-password','required'=>'required']); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-alert">Teléfono</label>
                                <div class="col-lg-9 col-xl-6">
                                    <?php echo $this->Form->control('telefono',['label'=>false,'class'=>'form-control form-control-lg form-control-solid','placeholder'=>'Teléfono (8 caracteres)','type'=>'text','autocomplete'=>'new-password','required'=>'required']); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-alert">Grado Académico</label>
                                <div class="col-lg-9 col-xl-6">
                                    <?php echo $this->Form->control('grado_id',['label'=>false,'class'=>'form-control form-control-lg form-control-solid','empty'=>'Seleccione','required'=>'required','options'=>$grados]); ?>
                                </div>
                            </div>
                        </div>
                    <?= $this->Form->end() ?>
                    <!--end::Form-->
                </div>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Profile Change Password-->
     </div>
    <!--end::Container-->
</div>