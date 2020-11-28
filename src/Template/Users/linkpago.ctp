<script type="text/javascript" src="https://integracion.alignetsac.com/VPOS2/js/modalcomercio.js" ></script>
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
                    <div class="font-weight-bold">Ingrese los datos solicitados para completar su pago.</div>
                    <div class="font-weight-bold">Una vez que realice su pago el personal de <br>plataforma validará el mismo.</div>
                </div>
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
                        <input type="hidden" name="userCommerce" value="linkpago" />
                        <input type="hidden" name="reserved1" value="ninguno" />
                        <input type="hidden" name="userCodePayme" value="<?php echo $cobro->cedula; ?>" />
                        <input type="hidden" name="programmingLanguage" value="<?php echo $payme->programminglanguage; ?>" />
                    <h4><b>MONTO:</b> 
                        <?php
                            echo "¢ ".number_format($cobro->pagar, 2, ",", ".");
                        ?> 
                    </h4>
                    <h4><b>CONCEPTO: </b>
                        <?php
                            echo $cobro->concepto;
                        ?> 
                    </h4>
                    <div class="form-group mb-5">
                        <label>Nombre del Tarjetahabiente</label>
                        <?php echo $this->Form->control('shippingfirstname',['label'=>false,'class'=>'form-control form-control-solid','type'=>'text','required'=>'required','placeholder'=>'Escriba el Nombre','name'=>'shippingFirstName','autocomplete'=>'off']); ?>
                    </div>
                    <div class="form-group mb-5">
                        <label>Apellido del Tarjetahabiente:</label>
                        <?php echo $this->Form->control('shippinglastname',['label'=>false,'class'=>'form-control form-control-solid','type'=>'text','required'=>'required','placeholder'=>'Escriba el Apellido','name'=>'shippingLastName','autocomplete'=>'off']); ?>
                    </div>
                    <div class="form-group mb-5">
                        <label>Correo del Tarjetahabiente:</label>
                            <?php echo $this->Form->control('shippingemail',['label'=>false,'class'=>'form-control form-control-solid','type'=>'text','required'=>'required','placeholder'=>'Escriba el Correo','name'=>'shippingEmail','autocomplete'=>'off']); ?>
                    </div>
                    <div class="form-group mb-5">
                        <label>Dirección del Tarjetahabiente:</label>
                            <?php echo $this->Form->control('shippingaddress',['label'=>false,'class'=>'form-control form-control-solid','type'=>'text','required'=>'required','placeholder'=>'Escriba la Dirección','name'=>'shippingAddress','autocomplete'=>'off']); ?>
                    </div>
                    <div class="form-group mb-5">
                        <label>Código Postal</label>
                            <?php echo $this->Form->control('shippingzip',['label'=>false,'class'=>'form-control form-control-solid','type'=>'text','required'=>'required','placeholder'=>'Escriba el Código','name'=>'shippingZIP','autocomplete'=>'off']); ?>
                    </div>
                    <div class="form-group mb-5">
                        <label>Ciudad:</label>
                            <?php echo $this->Form->control('shippingcity',['label'=>false,'class'=>'form-control form-control-solid','type'=>'text','required'=>'required','placeholder'=>'Escriba la Ciudad','name'=>'shippingCity','autocomplete'=>'off']); ?>
                    </div>
                    <div class="form-group mb-5">
                        <label>Provincia:</label>
                            <?php echo $this->Form->control('shippingstate',['label'=>false,'class'=>'form-control form-control-solid','type'=>'text','required'=>'required','placeholder'=>'Escriba la Provincia','name'=>'shippingState','autocomplete'=>'off']); ?>
                    </div>
                    <input type="hidden" name="purchaseVerification" value="<?php echo $purchaseVerification; ?>" />
                    <input type="button" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4" onclick="javascript:AlignetVPOS2.openModal('https://integracion.alignetsac.com/')" value="Pagar">
                <?= $this->Form->end() ?>
                <div class="mt-10">
                    <span class="opacity-70 mr-4 text-muted">
                        Universidad Santa Lucía
                    </span>
                </div>
            </div>
            <!--end::Login Sign in form-->
        </div>
    </div>
</div>