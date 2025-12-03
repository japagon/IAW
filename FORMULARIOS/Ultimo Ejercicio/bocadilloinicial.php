<!DOCTYPE html> 
<html> 
<head>
    <meta charset="UTF-8"/> <!-- SE CIERRA EL META -->
    <title> Telebirria </title>
</head>
<body>
    <h1>TELEBIRRIA</h1>
     <h2>PARA REALIZAR SU PEDIDO, RELLENE EL FORMULARIO</h2>
  <?php
    session_start();
  ?>
  <form action="bocadillo.php" method="post">
    
   <fieldset>
   <legend>Datos personales y envío</legend>
     <div><label>Nombre*  </label><input type="text" required="required" name="Nombre"/></div> <!--div es mas correcto que br -->
     <div><label>Apellidos*  </label><input type="text" name="Apellidos" required="required"/></div>
     <div><label>Domicilio*  </label><input type="text" name="Domicilio" required="required"/></div>
     <div><label>Localidad*  </label><input type="text" name="Localidad" required="required"/></div>
     <div><label>Código postal*  </label><input type="number" min="1000" max="52999" name="Codigo postal" required="required"/></div>
     <div><label>Teléfono*  </label><input type="tel" name="Telefono" required="required"/></div>
     <div><label>E-mail  </label><input type="email" name="E-mail"/></div>
     </fieldset>
     <!-- El atributo required sirve para establecer ese elemento como obligatorio.
      (Se tiene que rellenar SI O SI)-->

     <fieldset>
        <legend>Elija la opción de entrega</legend>
        <div><input id="recoger_en_local" type="radio" name="entrega" checked="checked" value="Listo para recoger en local"/>
        <label for="recoger_en_local">Recoger en el local </label>
        </div>
        <div><input id="envio_a_domicilio" type="radio" name="entrega" value="De camino al destino"/>
        <label for="envio_a_domicilio">Envío a domicilio</label>
        </div>
     <!-- el atributo checked sirve para que por defecto salga marcada esa opcion cuando abrimos el formulario-->
      </fieldset>
     <fieldset>
        <legend>¿Quiere que le enviemos nuestras ofertas?</legend>
        <div> <input id="ofertas_a_domicilio" type="checkbox" name="domicilio" checked="checked" value="domicilio"/> <label for="ofertas_a_domicilio">Envíar al domicilio</label></div>
         <div> <input id="ofertas_por_email" type="checkbox" name="email" checked="checked" value="email"/> <label for="ofertas_por_email">Enviar por email</label></div>
     </fieldset>

     <fieldset>
      <legend>Eliga su menu: </legend>
      <div><label>Tamaño del bocadillo</label></div>
      <select size="4" name="Tamano">
        <option value="pequeno">Pequeño</option>
        <option value="mediano" selected="selected">Mediano</option>
        <option value="grande">Grande</option>
        <option value="enorme">Enorme</option>
      </select>
      <div><label> Contenido del bocadillo </label></div>
    <select multiple="multiple" size="4" name="contenido[]">
      <option value="anchoas">Anchoas</option>
      <option value="calamares">Calamares</option>
      <option value="mejillones">Mejillones</option>
      <option value="jamon">Jamón</option>
      <option value="tortilla">Tortilla</option>
      <option value="carne_salsa">Carne en salsa</option>
      <option value="lomo">Lomo</option>
      <option value="panceta">Panceta</option>
      <option value="jirafa">Jirafa</option>
    </select>

    <div><label>Puede añadir alguna sugerencia </label></div>
      <textarea rows="8" cols="50" name="sugerencias" placeholder="Por ejemplo, Sin gluten..."></textarea>
     </fieldset>

     <input type="submit" value="Enviar datos"/> <!-- Boton de enviar que aparece al final del documento -->

     <!-- el atributo id sirve para la accesibilidad (el atributo for) que ponemos en el elemento label -->

   </form>
   </body>
   </html>