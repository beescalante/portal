<div id="kt_header" class="header flex-column  header-fixed ">
    <!--begin::Top-->
    <div class="header-top">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Left-->
            <div class="d-none d-lg-flex align-items-center mr-3">
                <!--begin::Logo-->
                <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'home']) ?>" class="mr-20">
                    <?php echo $this->Html->image('portal_int.png', ['alt' => 'USL', 'class'=>'max-h-50px']); ?>
                </a>
                <!--end::Logo-->
            </div>
            <!--end::Left-->
            <!-- begin::Topbar -->
            <div class="topbar">
                <?php if($current_user['role_id']==3): ?>
                    <div class="dropdown">
                        <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="true">
                            <div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1 pulse pulse-white">
                                <span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3"></path>
                                            <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000"></path>
                                        </g>
                                    </svg><!--end::Svg Icon-->
                                </span>
                                <?php if($pagos->count()>0): ?>
                                    <span class="pulse-ring"></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if($pagos->count()>0): ?>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                <div class="d-flex flex-column pt-12 bg-dark-o-5 rounded-top">
                                    <h4 class="d-flex flex-center">
                                        <span class="text-dark">Notificaciones</span>
                                    </h4>
                                    <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary mt-3 px-8" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Pagos</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
                                        <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
                                            <div class="d-flex align-items-center mb-6">
                                                <div class="symbol symbol-40 symbol-light-primary mr-5">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                            <i class="flaticon2-notification text-primary"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <span class="text-dark text-hover-primary mb-1 font-size-lg">Importante</span>
                                                    <span class="text-muted">Tiene un pago pendiente por realizar</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <!-- begin::User -->
                <div class="topbar-item">
                    <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                        <div class="d-flex flex-column text-right pr-3">
                            <span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-md-inline"><?php echo $current_user['nombre']; ?></span>
                            <span class="text-white font-weight-bolder font-size-sm d-none d-md-inline"><?php echo $current_user['email']; ?></span>
                        </div>
                        <span class="symbol symbol-35">
                            <span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30"><?php echo substr($current_user['nombre'], 0, 1); ?></span>
                        </span>
                    </div>
                </div>
                <!-- end::User -->
            </div>
            <!-- end::Topbar -->
        </div>
        <!-- end::Container -->
    </div>
    <!-- end::Top -->
    <!-- begin::Bottom -->
    <div class="header-bottom">
        <!-- begin::Container -->
        <div class="container">
            <!-- begin::Header Menu Wrapper -->
            <div id="kt_header_menu_wrapper" class="header-menu-wrapper header-menu-wrapper-left">
                <!-- begin::Header Menu -->
                <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile  header-menu-layout-default ">
                    <!-- begin::Header Nav -->
                    <ul class="menu-nav">
                        <?php if($current_user['role_id']==3): ?>
                            <?php if($current_user['sede_id']==2 || $current_user['sede_id']==6): ?>
                                <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                    <a  href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Biblioteca</span>
                                        <span class="menu-desc">Material digital</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-left" >
                                        <ul class="menu-subnav">
                                            <li class="menu-item"  aria-haspopup="true">
                                                <a  href="https://accessmedicina.mhmedical.com/" class="menu-link" target="_blank">
                                                    <span class="menu-text">Ciencias de la Salud</span>
                                                    <span class="menu-desc"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                    <a  href="#" class="menu-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Próximamente...">
                                        <span class="menu-text">Empleabilidad</span>
                                        <span class="menu-desc">Bolsa de Empleo</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                    <a  href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Herramientas</span>
                                        <span class="menu-desc">Todas las aplicaciones</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-left" >
                                        <ul class="menu-subnav">
                                            <li class="menu-item"  aria-haspopup="true">
                                                <a  href="https://outlook.office365.com" class="menu-link"  target="_blank">
                                                    <span class="menu-text">Outlook</span>
                                                    <span class="menu-desc"></span>
                                                </a>
                                            </li>
                                            <li class="menu-item"  aria-haspopup="true">
                                                <a href="https://teams.microsoft.com/" class="menu-link " target="_blank">
                                                    <span class="menu-text">Teams</span>
                                                    <span class="menu-desc"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                    <?php if($current_user['sede_id']==2): ?>
                                        <a  href="https://usl-alajuela.msasoft.net" class="menu-link" target="_blank">
                                            <span class="menu-text">Matrícula</span>
                                            <span class="menu-desc">Realice su solicitud de matrícula</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                    <?php elseif($current_user['sede_id']==6): ?>
                                        <a  href="https://usl-sancarlos-msasoft.azurewebsites.net/Default" class="menu-link" target="_blank">
                                            <span class="menu-text">Matrícula</span>
                                            <span class="menu-desc">Realice su solicitud de matrícula</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                    <?php else: ?>
                                    <?php endif; ?>
                                </li>
                                <!-- <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                    <a  href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Académico</span>
                                        <span class="menu-desc">Consulte sus datos académicos</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-left" >
                                        <ul class="menu-subnav">
                                            <li class="menu-item"  aria-haspopup="true">
                                                <a  href="#" class="menu-link">
                                                    <span class="menu-text">Historial Académico</span>
                                                    <span class="menu-desc"></span>
                                                </a>
                                            </li>
                                            <li class="menu-item"  aria-haspopup="true">
                                                <a  href="#" class="menu-link">
                                                    <span class="menu-text">Plan de Estudios</span>
                                                    <span class="menu-desc"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li> -->
                            <?php else: ?>
                                <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                    <a  href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Biblioteca</span>
                                        <span class="menu-desc">Material digital</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-left" >
                                        <ul class="menu-subnav">
                                            <li class="menu-item"  aria-haspopup="true">
                                                <a  href="https://accessmedicina.mhmedical.com/" class="menu-link" target="_blank">
                                                    <span class="menu-text">Ciencias de la Salud</span>
                                                    <span class="menu-desc"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                    <a  href="#" class="menu-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Próximamente...">
                                        <span class="menu-text">Empleabilidad</span>
                                        <span class="menu-desc">Bolsa de Empleo</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                    <a  href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Herramientas</span>
                                        <span class="menu-desc">Todas las aplicaciones</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-left" >
                                        <ul class="menu-subnav">
                                            <li class="menu-item"  aria-haspopup="true">
                                                <a  href="https://outlook.office365.com" class="menu-link"  target="_blank">
                                                    <span class="menu-text">Outlook</span>
                                                    <span class="menu-desc"></span>
                                                </a>
                                            </li>
                                            <li class="menu-item"  aria-haspopup="true">
                                                <a href="https://teams.microsoft.com/" class="menu-link " target="_blank">
                                                    <span class="menu-text">Teams</span>
                                                    <span class="menu-desc"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                    <a  href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Matrícula</span>
                                        <span class="menu-desc">Realice su solicitud de matrícula</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-left" >
                                        <ul class="menu-subnav">
                                            <?php if($matriculacion==1):?>
                                                <li class="menu-item"  aria-haspopup="true">
                                                    <a  href="<?= $this->Url->build(['controller' => 'Solicitudes', 'action' => 'add']) ?>" class="menu-link ">
                                                        <span class="menu-text">Nueva Solicitud</span>
                                                        <span class="menu-desc"></span>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <li class="menu-item"  aria-haspopup="true">
                                                <a  href="<?= $this->Url->build(['controller' => 'Solicitudes', 'action' => 'index']) ?>" class="menu-link">
                                                    <span class="menu-text">Ver Solicitudes</span>
                                                    <span class="menu-desc"></span>
                                                </a>
                                            </li>
                                            <li class="menu-item"  aria-haspopup="true">
                                                <a  href="<?= $this->Url->build(['controller' => 'Cobros', 'action' => 'index']) ?>" class="menu-link ">
                                                    <span class="menu-text">Pagos de Matrícula</span>
                                                    <span class="menu-desc"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                    <a  href="#" class="menu-link menu-toggle" data-toggle="tooltip" data-placement="bottom" data-original-title="Próximamente...">
                                        <span class="menu-text">Académico</span>
                                        <span class="menu-desc">Consulte sus datos académicos</span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                    <!-- <div class="menu-submenu menu-submenu-classic menu-submenu-left" >
                                        <ul class="menu-subnav">
                                            <li class="menu-item"  aria-haspopup="true">
                                                <a  href="#" class="menu-link">
                                                    <span class="menu-text">Historial Académico</span>
                                                    <span class="menu-desc"></span>
                                                </a>
                                            </li>
                                            <li class="menu-item"  aria-haspopup="true">
                                                <a  href="#" class="menu-link">
                                                    <span class="menu-text">Plan de Estudios</span>
                                                    <span class="menu-desc"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </li>
                            <?php endif;?>
                        <?php else: ?>
                            <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                <a  href="javascript:;" class="menu-link menu-toggle">
                                    <span class="menu-text">Biblioteca</span>
                                    <span class="menu-desc">Material digital</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu menu-submenu-classic menu-submenu-left" >
                                    <ul class="menu-subnav">
                                        <li class="menu-item"  aria-haspopup="true">
                                            <a  href="https://accessmedicina.mhmedical.com/" class="menu-link" target="_blank">
                                                <span class="menu-text">Ciencias de la Salud</span>
                                                <span class="menu-desc"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                <a  href="#" class="menu-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Próximamente...">
                                    <span class="menu-text">Horarios</span>
                                    <span class="menu-desc">Clases Virtuales</span>
                                    <i class="menu-arrow"></i>
                                </a>
                            </li>
                            <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                <a  href="#" class="menu-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Próximamente...">
                                    <span class="menu-text">Listas</span>
                                    <span class="menu-desc">Estudiantes</span>
                                    <i class="menu-arrow"></i>
                                </a>
                            </li>
                            <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                <a  href="#" class="menu-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Próximamente...">
                                    <span class="menu-text">Centro de Soporte</span>
                                    <span class="menu-desc">FAQ</span>
                                    <i class="menu-arrow"></i>
                                </a>
                            </li>
                        <?php endif; ?> 
                    </ul>
                    <!-- end::Header Nav -->
                </div>
                <!-- end::Header Menu -->
            </div>
            <!-- end::Header Menu Wrapper -->
        </div>
        <!-- end::Container -->
    </div>
    <!-- end::Bottom -->
</div>