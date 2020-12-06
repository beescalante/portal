<script type="text/javascript" src="https://vpayment.verifika.com/VPOS2/js/modalcomercio.js" ></script>
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
                            Reportar pago con tarjeta                           
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
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-custom gutter-b">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Top-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45 symbol-light mr-5">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Clipboard.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"></path>
                                                <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"></path>
                                                <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"></rect>
                                                <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"></rect>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>                
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Info-->
                            <div class="d-flex flex-column flex-grow-1">
                                <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Importante</a>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Top-->
                        <!--begin::Bottom-->
                        <div class="pt-3">
                            <!--begin::Text-->
                            <p class="text-dark-75 font-size-lg font-weight-normal pt-5 mb-2">
                                Deberá completar los datos solicitados del tarjetahabiente, luego hacer clic en el botón de "Pagar" e ingresar los datos de la tarjeta.
                                <br><br>
                                Espere a que la pantalla de pago le arroje un resultado antes de retornar.
                            </p>
                            <!--end::Text-->
                        </div>
                        <!--end::Bottom-->
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <div class="col-lg-8">
                <?= $this->Flash->render() ?>
                <div class="card card-custom">
                    <!--begin::Form-->
                    <?php 
                        $acquirerId = $payme->acquirerid;
                        $idCommerce = $payme->idcommerce;
                        $purchaseOperationNumber = str_pad($cobro->id, 9, "0", STR_PAD_LEFT);
                        $purchaseAmount = $cobro->pagar.'00';
                        $purchaseCurrencyCode = $payme->purchasecurrencycode;
                        
                        //Clave SHA-2 de VPOS2
                        $claveSecreta = $payme->pasarela;

                        $purchaseVerification = openssl_digest($acquirerId . $idCommerce . $purchaseOperationNumber . $purchaseAmount . $purchaseCurrencyCode . $claveSecreta, 'sha512');
                    ?>
                    <?= $this->Form->create(null,['class'=>'form alignet-form-vpos2','id'=>'f1']) ?>
                        <input type="hidden" name ="acquirerId" value="<?php echo $acquirerId; ?>" />
                        <input type="hidden" name ="idCommerce" value="<?php echo $idCommerce; ?>" />
                        <input type="hidden" name="purchaseOperationNumber" value="<?php echo $purchaseOperationNumber; ?>" />
                        <input type="hidden" name="purchaseAmount" value="<?php echo $purchaseAmount; ?>" />
                        <input type="hidden" name="purchaseCurrencyCode" value="<?php echo $purchaseCurrencyCode; ?>" />
                        <input type="hidden" name="language" value="<?php echo $payme->language; ?>" />
                        <input type="hidden" name="shippingCountry" value="<?php echo $payme->shippingcountry; ?>" />
                        <input type="hidden" name="descriptionProducts" value="<?php echo $cobro->concepto; ?>" />
                        <input type="hidden" name="userCommerce" value="TestBeatriz" />
                        <input type="hidden" name="reserved1" value="ninguno" />
                        <input type="hidden" name="userCodePayme" value="<?php echo $cobro->cedula; ?>" />
                        <input type="hidden" name="programmingLanguage" value="<?php echo $payme->programminglanguage; ?>" />
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre del Tarjetahabiente</label>
                                        <?php echo $this->Form->control('shippingfirstname',['label'=>false,'class'=>'form-control form-control-solid','type'=>'text','required'=>'required','placeholder'=>'Escriba el Nombre','name'=>'shippingFirstName','autocomplete'=>'off','value'=>$student->nombre]); ?>
                                        <div class="invalid-feedback" id="alert1"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Apellido del Tarjetahabiente:</label>
                                        <?php echo $this->Form->control('shippinglastname',['label'=>false,'class'=>'form-control form-control-solid','type'=>'text','required'=>'required','placeholder'=>'Escriba el Apellido','name'=>'shippingLastName','autocomplete'=>'off','value'=>$student->apellido1]); ?>
                                        <div class="invalid-feedback" id="alert2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Correo del Tarjetahabiente:</label>
                                        <?php echo $this->Form->control('shippingemail',['label'=>false,'class'=>'form-control form-control-solid','type'=>'text','required'=>'required','placeholder'=>'Escriba el Correo','name'=>'shippingEmail','autocomplete'=>'off','value'=>$student->emailp]); ?>
                                        <div class="invalid-feedback" id="alert3"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Dirección del Tarjetahabiente:</label>
                                        <?php echo $this->Form->control('shippingaddress',['label'=>false,'class'=>'form-control form-control-solid','type'=>'text','required'=>'required','placeholder'=>'Escriba la Dirección','name'=>'shippingAddress','autocomplete'=>'off']); ?>
                                        <div class="invalid-feedback" id="alert4"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Código Postal</label>
                                        <?php echo $this->Form->control('shippingzip',['label'=>false,'class'=>'form-control form-control-solid','type'=>'text','required'=>'required','placeholder'=>'Escriba el Código','name'=>'shippingZIP','autocomplete'=>'off']); ?>
                                        <small class="invalid-feedback" id="alert5"></small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ciudad:</label>
                                        <?php echo $this->Form->control('shippingcity',['label'=>false,'class'=>'form-control form-control-solid','type'=>'text','required'=>'required','placeholder'=>'Escriba la Ciudad','name'=>'shippingCity','autocomplete'=>'off']); ?>
                                        <div class="invalid-feedback" id="alert6"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Provincia:</label>
                                        <?php echo $this->Form->control('shippingstate',['label'=>false,'class'=>'form-control form-control-solid','type'=>'text','required'=>'required','placeholder'=>'Escriba la Provincia','name'=>'shippingState','autocomplete'=>'off']); ?>
                                        <div class="invalid-feedback" id="alert7"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group validated">
                                        <label class="checkbox">
                                            <input type="checkbox" name="condiciones" required="required" id="condiciones">
                                            <span></span>
                                            <a href="#" data-toggle="modal" data-target="#modalCond"> Acepto los Términos y Condiciones</a>
                                        </label>
                                        <div class="invalid-feedback" id="alert8"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="purchaseVerification" value="<?php echo $purchaseVerification; ?>" />
                        <div class="card-footer">
                            <input type="button" class="btn btn-primary mr-2" onclick="verificar()" value="Pagar" id="sub">
                            <input type="hidden" class="btn btn-primary mr-2" onclick="javascript:AlignetVPOS2.openModal('','[3]')" id="pagar">
                            <?= $this->Html->link(('Cancelar'),['action' => 'index'],['class' => 'btn btn-secondary']) ?>
                        </div>
                    <?= $this->Form->end() ?>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-->
<div class="modal fade" id="modalCond" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Términos y Condiciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body" style="height: 300px;">
                <?= $this->element('terminos') ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#shippingfirstname').on('keyup change', function (e) {
        e.preventDefault();
        var nombre= $('#shippingfirstname').val();
        if(nombre == null || nombre == ""){
            $('#shippingfirstname').addClass('is-invalid');
            $('#alert1').text('Este campo es requerido');
            $('#sub').prop("disabled", true);
        }else{
            $('#shippingfirstname').removeClass('is-invalid');
            $('#alert1').text('');
            $('#sub').prop("disabled", false);
        }
    });

    $('#shippinglastname').on('keyup change', function (e) {
        e.preventDefault();
        var apellido= $('#shippinglastname').val();
        if(apellido == null || apellido == ""){
            $('#shippinglastname').addClass('is-invalid');
            $('#alert2').text('Este campo es requerido');
            $('#sub').prop("disabled", true);
        }else{
            $('#shippinglastname').removeClass('is-invalid');
            $('#alert2').text('');
            $('#sub').prop("disabled", false);
        }
    });

    $('#shippingemail').on('keyup change', function (e) {
        e.preventDefault();
        var email= $('#shippingemail').val();
        if(email == null || email == ""){
            $('#shippingemail').addClass('is-invalid');
            $('#alert3').text('Este campo es requerido');
            $('#sub').prop("disabled", true);
        }else{
            $('#shippingemail').removeClass('is-invalid');
            $('#alert3').text('');
            $('#sub').prop("disabled", false);
        }
    });

    $('#shippingaddress').on('keyup change', function (e) {
        e.preventDefault();
        var direccion= $('#shippingaddress').val();
        if(direccion == null || direccion == ""){
            $('#shippingaddress').addClass('is-invalid');
            $('#alert4').text('Este campo es requerido');
            $('#sub').prop("disabled", true);
        }else{
            $('#shippingaddress').removeClass('is-invalid');
            $('#alert4').text('');
            $('#sub').prop("disabled", false);
        }
    });

    $('#shippingzip').on('keyup change', function (e) {
        e.preventDefault();
        var zip= $('#shippingzip').val();
        if(zip == null || zip == ""){
            $('#shippingzip').addClass('is-invalid');
            $('#alert5').text('Este campo es requerido');
            $('#sub').prop("disabled", true);
        }else{
            $('#shippingzip').removeClass('is-invalid');
            $('#alert5').text('');
            $('#sub').prop("disabled", false);
        }
    });

    $('#shippingcity').on('keyup change', function (e) {
        e.preventDefault();
        var ciudad= $('#shippingcity').val();
        if(ciudad == null || ciudad == ""){
            $('#shippingcity').addClass('is-invalid');
            $('#alert6').text('Este campo es requerido');
            $('#sub').prop("disabled", true);
        }else{
            $('#shippingcity').removeClass('is-invalid');
            $('#alert6').text('');
            $('#sub').prop("disabled", false);
        }
    });

    $('#shippingstate').on('keyup change', function (e) {
        e.preventDefault();
        var provincia= $('#shippingstate').val();
        if(provincia == null || provincia == ""){
            $('#shippingstate').addClass('is-invalid');
            $('#alert7').text('Este campo es requerido');
            $('#sub').prop("disabled", true);
        }else{
            $('#shippingstate').removeClass('is-invalid');
            $('#alert7').text('');
            $('#sub').prop("disabled", false);
        }
    });

    function verificar(){
        var nombre= $('#shippingfirstname').val();
        if(nombre == null || nombre == ""){
            $('#shippingfirstname').addClass('is-invalid');
            $('#alert1').text('Este campo es requerido');;
        }else{
            $('#shippingfirstname').removeClass('is-invalid');
            $('#alert1').text('');
        }
        var apellido= $('#shippinglastname').val();
        if(apellido == null || apellido == ""){
            $('#shippinglastname').addClass('is-invalid');
            $('#alert2').text('Este campo es requerido');
        }else{
            $('#shippinglastname').removeClass('is-invalid');
            $('#alert2').text('');
        }

        var email= $('#shippingemail').val();
        if(email == null || email == ""){
            $('#shippingemail').addClass('is-invalid');
            $('#alert3').text('Este campo es requerido');
        }else{
            $('#shippingemail').removeClass('is-invalid');
            $('#alert3').text('');
        }

        var direccion= $('#shippingaddress').val();
        if(direccion == null || direccion == ""){
            $('#shippingaddress').addClass('is-invalid');
            $('#alert4').text('Este campo es requerido');
        }else{
            $('#shippingaddress').removeClass('is-invalid');
            $('#alert4').text('');
        }

        var zip= $('#shippingzip').val();
        if(zip == null || zip == ""){
            $('#shippingzip').addClass('is-invalid');
            $('#alert5').text('Este campo es requerido');
        }else{
            $('#shippingzip').removeClass('is-invalid');
            $('#alert5').text('');
        }

        var ciudad= $('#shippingcity').val();
        if(ciudad == null || ciudad == ""){
            $('#shippingcity').addClass('is-invalid');
            $('#alert6').text('Este campo es requerido');
        }else{
            $('#shippingcity').removeClass('is-invalid');
            $('#alert6').text('');
        }

        var provincia= $('#shippingstate').val();
        if(provincia == null || provincia == ""){
            $('#shippingstate').addClass('is-invalid');
            $('#alert7').text('Este campo es requerido');
        }else{
            $('#shippingstate').removeClass('is-invalid');
            $('#alert7').text('');
        }

        var condiciones= $('#condiciones');
        if ($(condiciones).is(':checked')) {
             $('#condiciones').removeClass('is-invalid');
            $('#alert8').text('');
            document.getElementById("pagar").click();
        } else {
           $('#condiciones').addClass('is-invalid');
            $('#alert8').text('Este campo es requerido');
        }
        
    }
</script>
