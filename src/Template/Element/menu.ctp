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
                                        <li class="menu-item"  aria-haspopup="true">
                                            <a  href="<?= $this->Url->build(['controller' => 'Solicitudes', 'action' => 'add']) ?>" class="menu-link ">
                                                <span class="menu-text">Nueva Solicitud</span>
                                                <span class="menu-desc"></span>
                                            </a>
                                        </li>
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