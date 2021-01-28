<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
    <!--begin::Aside-->
    <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #f9eae2;">
        <!--begin::Aside Top-->
        <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
            <!--begin::Aside header-->
            <a href="#" class="text-center mb-5">
                <?php echo $this->Html->image('logo.png', ['alt' => 'USL', 'class'=>'max-h-75px']); ?>
            </a>
            <!--end::Aside header-->

            <!--begin::Aside title-->
            <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">
                Universidad Santa Lucía<br/>
            </h3>
            <!--end::Aside title-->
        </div>
        <!--end::Aside Top-->
    </div>
    <!--begin::Aside-->
    <!--begin::Content-->
    <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
        <!--begin::Content body-->
        <div class="d-flex flex-column-fluid flex-center">
            <!--begin::Signin-->
            <div class="login-form login-signin">
                <!--begin::Form-->
                <?=$this->Form->create(null,['class'=>'form']) ?>
                    <!--begin::Title-->
                    <div class="pb-13 pt-lg-0 pt-5">
                        <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">¿Olvidó su contraseña?</h3>
                        <p class="text-muted font-weight-bold font-size-h4">Ingrese su dirección de correo electrónico institucional. Recibirá un mensaje al correo (Outlook) institucional con el enlace/link para poder recuperar su contraseña.</p>
                    </div>
                    <?= $this->Flash->render() ?>
                    <?= $this->Flash->render('auth') ?>
                    <!--begin::Title-->
                    <!--begin::Form group-->
                    <div class="form-group">
                        <label class="font-size-h6 font-weight-bolder text-dark">Correo Institucional</label>
                        <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="email" name="email" autocomplete="off" placeholder="Correo Institucional"/>
                    </div>
                    <!--end::Form group-->

                    <!--begin::Form group-->
                    <div class="form-group">
                        <div class="d-flex justify-content-between mt-n5">
                            <label class="font-size-h6 font-weight-bolder text-dark pt-5">Contraseña</label>
                            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'pedircontrasena']) ?>" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">
                                Recuperar contraseña
                            </a>
                        </div>
                        <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password" autocomplete="off" placeholder="Contraseña"/>
                    </div>
                    <!--end::Form group-->

                    <!--begin::Action-->
                    <div class="pb-lg-0 pb-5">
                        <button type="submit" id="kt_login_signin_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Acceder</button>
                    </div>
                    <!--end::Action-->
                <?= $this->Form->end() ?>
                <!--end::Form-->
            </div>
            <!--end::Signin-->
        </div>
        <!--end::Content body-->

        <!--begin::Content footer-->
        <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
            <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">
                <script>document.write(new Date().getFullYear());</script>&nbsp;&copy;&nbsp;Universidad Santa Lucía
            </div>
        </div>
        <!--end::Content footer-->
    </div>
    <!--end::Content-->
</div>