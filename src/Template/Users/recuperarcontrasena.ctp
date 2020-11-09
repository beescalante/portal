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
                <!--begin::Forgot-->
                <div class="login-form login-signin">
                    <div class="text-center mb-10 mb-lg-20">
                        <h3 class="">Recuperar Contraseña</h3>
                        <p class="text-muted font-weight-bold">Ingrese su nueva contraseña con un mínimo de 6 caracteres y un máximo de 12. Esta contraseña NO es la misma que tiene asignada para el uso de Microsoft Teams. Usted deberá conservar ambas contraseñas.</p>
                    </div>
                    <?= $this->Flash->render() ?>
                    <!--begin::Form-->
                    <?=$this->Form->create(null,['class'=>'form']) ?>
                        <div class="form-group py-3 border-bottom mb-10">
                            <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" name="password1" autocomplete="new-password" placeholder="Nueva contraseña" maxlength="12" autofocus="true" required="required"/>
                        </div>
                        <div class="form-group py-3 border-bottom mb-10">
                            <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" name="password2" autocomplete="new-password" placeholder="Confirmar contraseña" maxlength="12" autofocus="true" required="required" />
                        </div>
                        <div class="form-group d-flex flex-wrap flex-center">
                            <button id="kt_login_forgot_submit" class="btn btn-primary  font-weight-bold px-9 py-4 my-3 mx-2">Enviar</button>
                            <a class="btn btn-light-primary  font-weight-bold px-9 py-4 my-3 mx-2" href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login']) ?>">Cancelar</a>
                        </div>
                    <?= $this->Form->end() ?>
                    <!--end::Form-->
                </div>
                <!--end::Forgot-->
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
                    <a href="https://usl.ac.cr/soporte-general" class="text-muted text-hover-primary ml-4" target="_blank">Soporte</a>
                </div>
            </div>
            <!--end: Aside footer for desktop-->
        </div>
        <!--end: Aside Container-->
    </div>
    <!--begin::Aside-->

    <!--begin::Content-->
    <div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid d-flex flex-column p-7" style="background-image: url(../img/back3.jpg);">
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
