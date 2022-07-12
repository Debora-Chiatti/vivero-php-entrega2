<?php include('a-header.php')?>


<section class="banner">
    <h2> <?php echo'Contactanos'; ?></h2>
</section>




	<section>
		<form method="POST" class="div__form">
			<div class="div__form--div">
				<fieldset class="form__div--fieldset">
						<legend>Información Personal</legend>
						    <label for="nombre y apellido" class="label">Nombre y Apellido</label>
							<input type="text" name="nombre_y_apellido" id="llenar_formulario">
							<br>
							<br>
							<label for="telefono de contacto" class="label">Teléfono de Contacto</label>
							<input type="phone" name="phone">
							<br>
							<br>
							<label for="horario para ser contactado" class="label"> Horario para ser Contactado </label>
							<input type="text" type="number" name="horario_de_contacto">
							<br>
							<br>
							<label for="mail" class="label">Mail</label>
							<input type="mail" name="mail">
							<br>
							<br>	
				</fieldset>
			</div>
			<div class="div__form--div">
				<fieldset class="form__div--fieldset">
						<legend> ¿Qué Consulta tenés </legend>
							<textarea name="consulta" class="textarea" placeholder="Escriba aquí..."></textarea>
							<br>
							<br>
				</fieldset>
			</div>
			<div class="div__form--div">
					<input type="submit" value="enviar" class="send-button">
			</div>
		</form>
	</section>


    
    <?php include('a-footer.php')?>
