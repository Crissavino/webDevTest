# Prueba técnica:

Cumpliendo con los objetivos propuestos en esta prueba técnico el ejercicio se desarrolla con una vista de index.php, en la cual se ven 3 botones:
* Video: Al clickear este boton, utilizo JS para cambiar el src del iframe para asi mostrar el video solicitado, y luego de 30 segundos vuelvo a mostrar la imagen del preview.
* Imagen: Cuando se clickea este boton muestra la imagen pedida, tambien por JS, durante los 30 segundos solicitados, para luego mostrar la imagen del preview.
* API: Una vez clickeado el boton muestra, en un costado de la pantalla, info que llega desde la API. Solo funciona cuando la info llega en formato XML, ya que el JSON esta mal formado y me es imposible mostrarlo sin que me de NULL.

Por otro lado en la parte de remote.php se tienen otros 3 botones, dependiendo cual se clicke envio, por JS, un location.href a index.php mandando por parametro el ch1, ch2, o ch3, acorde al boton clickeado.

Una vez en index.php recibe con la variable super globar $_GET el valor del parametro ch. Y de acuerdo a si es 1, 2 o 3 muestro el video que corresponde.
En esta pagina tambien lo que hago es, si no llega ningun parametro muestro de ante mano la imagen de preview.png.

Eso es todo.

Espero tengan en cuenta este ejercicio y lo mucho que puedo aprender y, por ende, aportar a su empresa.