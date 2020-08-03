<?php for ($x = 1; $x <= $carrera->bloques;  $x++): ?>
	<?php 
		
		if($x==1){
			$c="I";
		}elseif($x==2){
			$c="II";
		}
		elseif($x==3){
			$c="III";
		}
		elseif($x==4){
			$c="IV";
		}
		elseif($x==5){
			$c="V";
		}
		elseif($x==6){
			$c="VI";
		}
		elseif($x==7){
			$c="VII";
		}
		elseif($x==8){
			$c="VIII";
		}
		elseif($x==9){
			$c="IX";
		}
		elseif($x==10){
			$c="X";
		}
		elseif($x==11){
			$c="XI";
		}
		elseif($x==12){
			$c="XII";
		}

	?>
    <b><h4>CUATRIMESTRE <?php echo $c; ?></h4></b>
    <?php foreach ($materias as $materia ): ?>
       <?php if($materia->bloque==$x): ?>
		    <label class="checkbox">
		        <input type="checkbox" name="materias[_ids][]" value="<?php echo $materia->id; ?>" id="materias-ids-<?php echo $materia->id; ?>">
		            <span></span>
		            <b><?php echo $materia->codigo; ?> </b>&nbsp;<?php echo $materia->nombre; ?> 
		            <?php if(!empty($materia->requisitos)):?>
		               |&nbsp;<b> Requisito:</b>&nbsp;<?php echo $materia->requisitos; ?> 
		            <?php endif; ?>
		    </label>
		<?php endif; ?>
	<?php endforeach; ?>                            
<?php endfor; ?>