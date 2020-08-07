<?php use Cake\Routing\Router; ?>
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
                            Nueva Solicitud                                
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
                                <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Período de Matrícula</a>
                                <div class="d-flex">
                                    <div class="d-flex align-items-center pr-5">
                                        <span class="svg-icon svg-icon-md svg-icon-primary pr-1">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Clock.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M12,22 C7.02943725,22 3,17.9705627 3,13 C3,8.02943725 7.02943725,4 12,4 C16.9705627,4 21,8.02943725 21,13 C21,17.9705627 16.9705627,22 12,22 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>                        
                                        <span class="text-muted font-weight-bold"><?php echo $periodo->fecha; ?></span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="svg-icon svg-icon-md svg-icon-primary pr-1">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-arrange.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z" fill="#000000"></path>
                                                <path d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z" fill="#000000" opacity="0.3"></path>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>                       
                                    <span class="text-muted font-weight-bold"><?php echo $periodo->nombre; ?></span>
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Top-->
                        <!--begin::Bottom-->
                        <div class="pt-3">
                            <!--begin::Text-->
                            <p class="text-dark-75 font-size-lg font-weight-normal pt-5 mb-2">
                                <?php echo $periodo->comentario; ?>
                                <br><br>
                                Usted se encuentra registrado en: <?php echo $estudiante->sede->nombre; ?>
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
                    <?= $this->Form->create($solicitude,['class'=>'form']) ?>
                        <div class="card-body">
                            <div class="form-group mb-8">
                                <div class="alert alert-custom alert-default" role="alert">
                                    <div class="alert-icon">
                                        <span class="svg-icon svg-icon-primary svg-icon-xl">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <div class="alert-text">
                                        Revise sus datos personales y confirme que la información aportada es verdadera y actualizada para continuar. Recuerde que esta información es importante para formalizar su matrícula y sea contactado sin contratiempos. Si sus datos están correctos no es neecsario que los modifique.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Correo Personal</label>
                                <?php echo $this->Form->control('emailp',['label'=>false,'class'=>'form-control','required'=>'required','placeholder'=>'Ingrese su correo electrónico personal','type'=>'email','value'=>$estudiante->emailp]); ?>
                            </div>
                            <div class="form-group">
                                <label>Teléfono</label>
                                <?php echo $this->Form->control('telefono',['label'=>false,'class'=>'form-control','required'=>'required','placeholder'=>'Ingrese su número de teléfono','type'=>'text','value'=>$estudiante->telefono,'maxlength'=>'10']); ?>
                                <small style="color: red;" id="alert2"></small>
                            </div>
                            <div class="form-group">
                                <label>Carrera a matricular:</label>
                                <?php echo $this->Form->control('carrera_id',['label'=>false,'class'=>'form-control form-control-solid','empty'=>'Seleccione','options'=>$carreras,'required'=>'required','onchange'=>'selectcarreras();']); ?>
                            </div>
                            <div class="form-group">
                                <label>Materias a cursar:</label>
                                <div class="checkbox-list" id="materias">
                                    Debe seleccionar una carrera primero...
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?= $this->Form->button(('Solicitar'),['class'=>'btn btn-primary mr-2','id'=>'reg']) ?>
                            <?= $this->Html->link(('Cancelar'),['action' => 'index'],['class' => 'btn btn-secondary']) ?>
                        </div>
                    <?= $this->Form->end() ?>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function selectcarreras() {
        $('#fondoloader').css('display','block');
        var carreraID = $('#carrera-id').val();
        $.ajax({
            dataType: "html",
            type: "POST",
            evalScripts: true,
            url: '<?php echo Router::url(array('controller'=>'Solicitudes','action'=>'selectmaterias'));?>',
            data: ({carreraid:carreraID}),
            headers: {
                'X-CSRF-Token': csrfToken
            },
            success: function (data, textStatus){
                $("#materias").html(data);
                $('#fondoloader').css('display','none');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
        return false;
    }
    $('#emailp').on('keyup', function (event) {
        this.value = this.value.replace(/[^a-z0-9-_@.]/g, '');
    });
    $('#telefono').on('keyup change', function (e) {
        e.preventDefault();
        /*restriccion de escritura*/
        var conteo = $('#telefono').val().length;
        this.value = this.value.replace(/[^0-9]/g, '');
        if(conteo<8 ){
            $('#alert2').text('El número de teléfono debe tener al menos 8 dígitos.');
            $("#reg").prop("disabled",true);
        }else{
            $('#alert2').text('');
            $("#reg").prop("disabled",false);
        } 
    });
</script>