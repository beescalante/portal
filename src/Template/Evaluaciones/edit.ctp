
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
                    Evaluaciones
                </h5>
                <!--end::Page Title-->

                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="" class="text-muted">
                            Contestar                            
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
            <div class="col-lg-12">
                <div class="card card-custom gutter-b">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Bottom-->
                        <div class="pt-2">
                            <!--begin::Text-->
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="font-weight-bold mr-2">Sede:</span>
                                        <a><?php echo $evaluacione->grupo->sede->nombre; ?></a>
                                    </td>
                                    <td>
                                        <span class="font-weight-bold mr-2">Materia:</span>
                                        <a><?php echo $evaluacione->grupo->materia->nombre; ?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-weight-bold mr-2">Carrera:</span>
                                        <span><?php echo $evaluacione->grupo->carrera->nombre; ?></span>
                                    </td>
                                    <td>
                                        <span class="font-weight-bold mr-2">Período:</span>
                                        <span><?php echo $evaluacione->grupo->periodo; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-weight-bold mr-2">Docente:</span>
                                        <span><?php echo $evaluacione->grupo->docente->nombre." ".$evaluacione->grupo->docente->apellido1; ?></span>
                                    </td>
                                    <td>
                                        <span class="font-weight-bold mr-2">Horario:</span>
                                        <span><?php echo $evaluacione->grupo->horario; ?></span>
                                    </td>
                                </tr>
                            </table>
                            <!--end::Text-->
                        </div>
                        <!--end::Bottom-->
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <div class="col-lg-12">
                <?= $this->Flash->render() ?>
                <div class="card card-custom">
                    <!--begin::Form-->
                    <?= $this->Form->create($evaluacione,['class'=>'form']) ?>
                        <div class="card-body">
                            <p class="text-dark-75 font-size-lg font-weight-normal mb-2">
                                Responda cuidadosamente todas las preguntas, todas las respuestas son obligatorias. Recuerde que esta encuesta es totalmente anónima.  
                            </p>
                            <br>
                            <h4><b>A. La profesora o profesor de este curso:</b></h4>
                            <hr style="border: 0;height: 1px;background: #333;background-image: linear-gradient(to right, #ccc, #333, #ccc);">
                            <div class="form-group row">
                                <label class="col-8 col-form-label"><b>1.</b> Entregó el programa del curso al inicio del mismo</label>
                                <div class="col-3 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p1" required value="1"/>
                                            <span></span>
                                            Sí
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p1" value="0"/>
                                            <span></span>
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-8 col-form-label"><b>2.</b> Explicó al inicio del curso la evaluación a utilizar durante el desarrollo del mismo.</label>
                                <div class="col-3 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p2" required value="1"/>
                                            <span></span>
                                            Sí
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p2" value="0"/>
                                            <span></span>
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <h4><b>B. La profesora o profesor de este curso:</b></h4>
                            <hr style="border: 0;height: 1px;background: #333;background-image: linear-gradient(to right, #ccc, #333, #ccc);">
                            <p class="text-dark-75 font-size-lg font-weight-normal mb-2">A continuación responda las siguientes preguntas haciendo clic sobre el valor de 1 a 10 que se ajuste a su criterio, donde 1 es el menor puntaje (muy negativo) y 10 es el mayor puntaje (muy positivo).</p>
                            <br>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>3.</b> Cumple con el horario establecido para desarrollar el curso</label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p3" value="1" />
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p3" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p3" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p3" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p3" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p3" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p3" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p3" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p3" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p3" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>4. </b>Demuestra que no improvisa y prepara su clase con antelación. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p4" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p4" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p4" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p4" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p4" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p4" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p4" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p4" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p4" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p4" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>5. </b>Muestra buen dominio de los temas que expone en la clase. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p5" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p5" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p5" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p5" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p5" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p5" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p5" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p5" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p5" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p5" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>6. </b>Le otorga ideas actualizadas e información importante para el desarrollo de la profesión.</label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                           <input type="radio" name="p6" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p6" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p6" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p6" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p6" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p6" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p6" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p6" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p6" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p6" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>7. </b>Crea un vínculo con la realidad de nuestro país, cuando el tema en cuestión se lo permite. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p7" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p7" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p7" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p7" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p7" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p7" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p7" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p7" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p7" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p7" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>8. </b>Aporta ejemplos fácilmente comprensibles. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p8" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p8" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p8" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p8" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p8" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p8" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p8" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p8" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p8" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p8" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>9. </b>Se muestra proclive a la aclaración de dudas planteadas por los estudiantes. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p9" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p9" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p9" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p9" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p9" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p9" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p9" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p9" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p9" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p9" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>10. </b>Ajusta la metodología utilizada a los criterios de evaluación que le fueron informados al inicio del curso. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p10" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p10" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p10" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p10" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p10" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p10" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p10" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p10" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p10" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p10" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>11. </b>Utiliza herramientas audiovisuales y recursos didácticos apropiados para el desarrollar la clase. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p11" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p11" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p11" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p11" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p11" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p11" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p11" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p11" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p11" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p11" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>12. </b>Centra sus clases en la materia y el desarrollo de competencias pertinentes sin desviarse a temas innecesarios o personales. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p12" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p12" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p12" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p12" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p12" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p12" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p12" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p12" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p12" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p12" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>13. </b>Muestra siempre interés para que todos sus estudiantes comprendan sus explicaciones. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p13" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p13" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p13" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p13" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p13" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p13" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p13" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p13" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p13" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p13" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>14. </b>Estimula la partición de los estudiantes en la clase. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p14" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p14" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p14" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p14" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p14" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p14" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p14" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p14" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p14" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p14" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>15. </b>Utiliza las exposiciones de estudiantes como apoyo ocasional a la clase, asumiendo la responsabilidad didáctica. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p15" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p15" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p15" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p15" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p15" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p15" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p15" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p15" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p15" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p15" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>16. </b>Fundamenta la materia que imparte con fuentes bibliográficas confiables. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p16" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p16" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p16" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p16" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p16" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p16" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p16" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p16" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p16" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p16" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>17. </b>Estimula a los estudiantes para formar criterios propios con respecto al análisis de la materia en cuestión. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p17" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p17" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p17" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p17" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p17" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p17" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p17" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p17" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p17" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p17" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>18. </b>Se muestra atento a la aclaración de dudas, al realizar evaluaciones y prácticas en la sede. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p18" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p18" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p18" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p18" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p18" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p18" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p18" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p18" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p18" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p18" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>19. </b>Mantiene una relación cordial con todo el grupo en general. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p19" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p19" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p19" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p19" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p19" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p19" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p19" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p19" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p19" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p19" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>20. </b>Promueve la importancia de la ética y los valores dentro de su formación profesional. </label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p20" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p20" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p20" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p20" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p20" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p20" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p20" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p20" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p20" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p20" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>21. </b>Informa de manera oportuna cuando ha tenido que ausentarse.</label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p21" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p21" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p21" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p21" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p21" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p21" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p21" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p21" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p21" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p21" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-5 col-form-label"><b>22. </b>Finalmente establezca la calificación general que usted le da al desempeño de esta profesora o profesor.</label>
                                <div class="col-7 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p22" required value="1"/>
                                            <span></span>
                                            1
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p22" value="2"/>
                                            <span></span>
                                            2
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p22" value="3"/>
                                            <span></span>
                                            3
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p22" value="4"/>
                                            <span></span>
                                            4
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p22" value="5"/>
                                            <span></span>
                                            5
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p22" value="6"/>
                                            <span></span>
                                            6
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p22" value="7"/>
                                            <span></span>
                                            7
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p22" value="8"/>
                                            <span></span>
                                            8
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p22" value="9"/>
                                            <span></span>
                                            9
                                        </label>
                                        <label class="radio radio-danger">
                                            <input type="radio" name="p22" value="10"/>
                                            <span></span>
                                            10
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Si tiene a bien: ¿Qué recomendación y/o comentario tiene usted para que esta profesora o profesor mejore su labor docente de ser necesario?</label>
                                <?php echo $this->Form->control('comentario',['label'=>false,'class'=>'form-control','placeholder'=>'Comentario Opcional','type'=>'textarea']); ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?= $this->Form->button(('Enviar'),['class'=>'btn btn-primary mr-2 btn-block btn-lg']) ?>
                        </div>
                    <?= $this->Form->end() ?>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
</div>
