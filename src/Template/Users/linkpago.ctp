<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
    <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url(/img/bg-3.jpg);">
        <div class="login-form text-center p-7 position-relative overflow-hidden">
            <!--begin::Login Header-->
            <div class="d-flex flex-center mb-15">
                <a href="#">
                    <?php echo $this->Html->image('rostro.png', ['alt' => 'Logo', 'class'=>'max-h-75px']); ?>
                </a>
            </div>
            <!--end::Login Header-->

            <!--begin::Login Sign in form-->
            <div class="login-signin">
                <div class="mb-20">
                    <h3>Realizar un Pago</h3>
                    <div class="text-muted font-weight-bold">Ingrese los datos solicitados para completar su pago.</div>
                    <div class="text-muted font-weight-bold">Una vez que realice su pago el personal de <br>plataforma validará el mismo.</div>
                </div>
                <form class="form" id="kt_login_signin_form">
                    <div class="form-group mb-5">
                        <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Email" name="username" autocomplete="off" />
                    </div>
                    <div class="form-group mb-5">
                        <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password" />
                    </div>
                    <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                        <div class="checkbox-inline">
                            <label class="checkbox m-0 text-muted">
                                <input type="checkbox" name="remember" />
                                <span></span>
                                Remember me
                            </label>
                        </div>
                        <a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Forget Password ?</a>
                    </div>
                    <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Sign In</button>
                </form>
                <div class="mt-10">
                    <span class="opacity-70 mr-4">
                        Don't have an account yet?
                    </span>
                    <a href="javascript:;" id="kt_login_signup" class="text-muted text-hover-primary font-weight-bold">Sign Up!</a>
                </div>
            </div>
            <!--end::Login Sign in form-->
        </div>
    </div>
</div>