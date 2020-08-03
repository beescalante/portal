<table class="table_full editable-bg-color bg_color_ffffff editable-bg-image" bgcolor="#ffffff" width="100%" align="center"  mc:repeatable="castellab" mc:variant="Header" cellspacing="0" cellpadding="0" border="0" style="background-image: url(#); background-repeat: no-repeat; background-position: center left; background-size: 100% 100%; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" background="#">
    <!-- padding-top -->
    <tr><td height="100"></td></tr>

    <!-- header -->
    <tr>
        <td>
            <table class="table1" width="800" align="center" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td bgcolor="#fcfcfc" style="padding-top: 30px;padding-right: 40px;padding-bottom: 0;padding-left: 40px; border: 1px solid #f2f2f2; border-radius: 5px;">
                        <!-- Logo -->
                        <table class="no_float" align="left" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="editable-img" align="center">
                                    <a href="#">
                                        <img editable="true" class="centerize" mc:edit="image101" src="https://usantalucia.ac.cr/mail_usl/img/rostro.png" style="display:block; line-height:0; font-size:0; border:0;" border="0" alt="image" width="300" />
                                    </a>
                                </td>
                            </tr>
                            <!-- margin-bottom -->
                            <tr><td height="30"></td></tr>
                        </table><!-- END logo -->

                        <!-- social icons -->
                        <table class="no_float" width="135" align="right" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <table width="135" align="center" border="0" cellspacing="0" cellpadding="0" style="max-width: 135px;">
                                        <tr>
                                            <td class="editable-img" align="center">
                                                <a href="#">
                                                    <img editable="true" class="centerize" mc:edit="image102" src="https://usantalucia.ac.cr/mail_usl/img/icons/social-icon-fb.png" style="display:block; line-height:0; font-size:0; border:0;" border="0" alt="image" />
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- margin-bottom -->
                            <tr><td height="30"></td></tr>
                        </table><!-- END social icons -->
                    </td>
                </tr>
            </table>
        </td>
    </tr><!-- END header -->

    <!-- horizontal gap -->
    <tr><td height="25"></td></tr>

    <!-- body -->
    <tr>
        <td>
            <table class="table1" width="800" align="center" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td bgcolor="#fcfcfc" style="padding: 40px 0;border: 1px solid #f2f2f2;border-radius: 5px;">
                        <!-- body-container -->
                        <table class="table1" width="480" align="center" border="0" cellspacing="0" cellpadding="0">

                            <!-- email heading -->
                            <tr>
                                <td align="center" mc:edit="text101" class="text_color_282828" style="line-height: 1;color: #282828; font-size: 18px; font-weight: 600; font-family: 'Open Sans', Helvetica, sans-serif; mso-line-height-rule: exactly;">
                                    <div class="editable-text">
                                        <span class="text_container">Solicitud de Matr&iacute;cula #<?php echo $id; ?></span>
                                    </div>
                                </td>
                            </tr><!-- END email heading -->

                            <!-- horizontal gap -->
                            <tr><td height="40"></td></tr>

                            <!-- main-icon -->
                            <tr>
                                <td class="editable-img" align="center">
                                    <a href="#">
                                        <img editable="true" mc:edit="image105" src="https://usantalucia.ac.cr/mail_usl/img/icons/circle-icon-user.png" style="display:block; line-height:0; font-size:0; border:0;" border="0" alt="image" />
                                    </a>
                                </td>
                            </tr><!-- END main-icon -->

                            <!-- horizontal gap -->
                            <tr><td height="35"></td></tr>

                            <!-- email details -->
                            <tr>
                                <td align="justify" mc:edit="text102" class="text_color_c6c6c6" style="line-height: 1.8;color: #c6c6c6; font-size: 14px; font-weight: 600; font-family: 'Open Sans', Helvetica, sans-serif; mso-line-height-rule: exactly;">
                                    <div class="editable-text">
                                        <span class="text_container">
                                            ¡Hola!
                                            <br>
                                            <br>
                                            A continuaci&oacute;n encontrar&aacute; los datos del estudiante que desea matricular. Recuerde validar todos los datos: requisitos de ingreso, materias elegidas, requisitos acad&eacute;micos, archivos adjuntos.
                                            <br>
                                            <br>
                                            Luego de validar los datos deber&aacute; comunicarse con el estudiante para hacerle saber el costo de la matr&iacute;cula, beneficios, entre otros.
                                            <br>
                                            <br>
                                            <b>DATOS DEL ESTUDIANTE:</b>
                                            <br>
                                            <br>
                                            <b>Nro. de Identificaci&oacute;n / C&eacute;dula:</b> <?php echo $cedula; ?>
                                            <br>
                                            <b>Per&iacute;odo:</b> <?php echo $periodo; ?>
                                            <br>
                                            <b>Sede:</b> <?php echo $sede; ?>
                                            <br>
                                            <b>Carrera:</b> <?php echo $carrera; ?>
                                            <br>
                                            <br>
                                            <b>MATERIAS A MATRICULAR:</b>
                                            <br>
                                            <?php foreach($materias as $materia): ?>
                                                <?php echo $materia->materia->codigo.' - '.$materia->materia->nombre;?>
                                                <br>
                                            <?php endforeach; ?>
                                        </span>
                                    </div>
                                </td>
                            </tr><!-- END email details -->

                            <!-- horizontal gap -->
                            <tr><td height="35"></td></tr>
                        </table><!-- END body-container -->
                    </td>
                </tr>
            </table>
        </td>
    </tr><!-- END body -->

    <!-- horizontal gap -->
    <tr><td height="40"></td></tr>

    <!-- footer -->
    <tr>
        <td>
            <table class="table1" width="800" align="center" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" mc:edit="text105" class="text_color_c6c6c6" style="line-height: 1;color: #c6c6c6; font-size: 14px; font-weight: 400; font-family: 'Open Sans', Helvetica, sans-serif; mso-line-height-rule: exactly;">
                        <div class="editable-text">
                            <span class="text_container">&copy; 2020 Universidad Santa Lucía. Todos los derechos.</span>
                        </div>
                    </td>
                </tr>
                <!-- horizontal gap -->
                <tr><td height="15"></td></tr>

                <tr>
                    <td align="center" mc:edit="text106" class="text_color_c6c6c6" style="line-height: 1;color: #c6c6c6; font-size: 14px; font-weight: 400; font-family: 'Open Sans', Helvetica, sans-serif; mso-line-height-rule: exactly;">
                        <div class="editable-text">
                            <span class="text_container"><a href="https://usl.ac.cr" target="_blank">www.usl.ac.cr</a></span>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr><!-- END footer -->

    <!-- padding-bottom -->
    <tr><td height="100"></td></tr>
</table>
