<table cellpadding="0" width="100%" cellspacing="0" border="0" bgcolor="#fff">
    <tbody>
        <tr>
            <td align="center">
                <table cellpadding="0" cellspacing="0" width="60%" border="0" style="border-collapse:collapse">
                    <tbody>
                        <tr>
                            <td style="padding-top:40px;padding-bottom:40px" align="center">
                                <table cellpadding="0" cellspacing="0" border="0" width="90%">
                                    <tbody>
                                        <tr>
                                            <td align="center">
                                                <img src="https://usantalucia.ac.cr/mail_usl/img/rostro.png" alt="USL" width="400">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="padding-top:30px;padding-bottom:15px;" bgcolor="#ffffff">
                                                <table cellpadding="0" cellspacing="0" border="0" width="90%">
                                                    <tbody>
                                                        <tr>
                                                            <td style="font-family:'Open Sans', sans-serif; font-size:32px;font-weight:900; color:#555555" align="center">
                                                               Solicitud de Matrícula #<?php echo $id; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding:30px;line-height:150%; font-family:Verdana; font-size:18px; color:#555555" align="justify">
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
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center">
                                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="75%" style="font-family:'Calibri','Helvetica Neue',Helvetica,Arial,sans-serif;">
                                                                                <p style="font-size:14px;color:#16870A">
                                                                                    <b>Enviado por <span class="il">Universidad Santa Luc&iacute;a</span>. <small style="color:#000000"></small></b>
                                                                                </p>
                                                                                <p style="font-size:12px;color:#555555">@2021 <span class="il">Universidad Santa Luc&iacute;a</span>
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td align="right">
                                                                <a href="https://www.facebook.com/usantalucia/" target="_blank"><img src="https://usantalucia.ac.cr/mail_usl/img/facebook.png" alt="usl" width="30" height="30"></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>