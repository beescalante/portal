<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-row-fluid bg-white" id="kt_login">
    <!--begin::Aside-->
    <div class="login-aside order-2 order-lg-1 d-flex flex-column-fluid flex-lg-row-auto bgi-size-cover bgi-no-repeat p-7 p-lg-10">
        <!--begin: Aside Container-->
        <div class="d-flex flex-row-fluid flex-column justify-content-between">
            <!--begin::Aside body-->
            <div class="d-flex flex-column-fluid flex-column flex-center mt-5 mt-lg-0">
                <a href="#" class="mb-15 text-center">
                    <?php echo $this->Html->image('logo_portal.png', ['alt' => 'Logo', 'class'=>'max-h-75px']); ?>
                </a>

                <!--begin::Signin-->
                <div class="login-form login-signin">
                    <div class="text-center mb-10 mb-lg-20">
                        <h2 class="font-weight-bold">¡Ingrese ahora!</h2>
                        <p class="text-muted font-weight-bold">Escriba su correo institucional y su contraseña de este portal</p>
                    </div>
                    <?= $this->Flash->render() ?>
                    <?= $this->Flash->render('auth') ?>
                    <!--begin::Form-->
                    <?=$this->Form->create(null,['class'=>'form fv-plugins-bootstrap fv-plugins-framework']) ?>
                        <div class="form-group py-3 m-0 fv-plugins-icon-container">
                            <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Email" placeholder="Correo Institucional" name="email" autocomplete="off">
                        </div>
                        <div class="form-group py-3 border-top m-0 fv-plugins-icon-container">
                            <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Password" placeholder="Contraseña" name="password" autocomplete="off">
                        </div>
                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-3">
                            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'pedircontrasena']) ?>" id="kt_login_forgot" class="text-muted text-hover-primary">Olvidé mi contraseña</a>
                        </div>

                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-2">
                            <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Acceder</button>
                        </div>
                    <?= $this->Form->end() ?>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->
            </div>
            <!--end::Aside body-->

            <!--begin: Aside footer for desktop-->
            <div class="d-flex flex-column-auto justify-content-between mt-15">
                <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">
                    <script>document.write(new Date().getFullYear());</script>&nbsp;&copy;&nbsp;Universidad Santa Lucía
                </div>
                <div class="d-flex order-1 order-sm-2 my-2">
                    <a href="https://portal.usl.ac.cr/politicas_privacidad_USL.pdf" class="text-muted text-hover-primary" target="_blank">Privacidad</a>
                    <a href="https://portal.usl.ac.cr/condiciones_uso_USL.pdf" class="text-muted text-hover-primary ml-4" target="_blank">Condiciones</a>
                    <a href="#" class="text-muted text-hover-primary ml-4" target="_blank">Soporte</a>
                </div>
            </div>
            <!--end: Aside footer for desktop-->
        </div>
        <!--end: Aside Container-->
    </div>
    <!--begin::Aside-->

    <!--begin::Content-->
    <div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid d-flex flex-column p-7" style="background-image: url(img/back3.jpg);">
        <!--begin::Content body-->
        <div class="d-flex flex-column-fluid flex-lg-center">
            <div class="d-flex flex-column justify-content-center">
                <h3 class="display-3 font-weight-bold my-7 text-white">¡Bienvenidos!</h3>
                <p class="font-weight-bold font-size-lg text-white opacity-80">
                    Ingrese a nuestro portal acádemico para estudiantes y docentes.
                </p>
            </div>
        </div>
        <!--end::Content body-->
    </div>
    <!--end::Content-->
</div>