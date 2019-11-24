# planetas-crud

Crud de una tabla en php, con aproximación a MVC (MVP)

* `index.php` actua de router. Todas las acciones están en una clase controlador, representadas por métodos y se 
   accede a esas funcionalidades mediante el parámetro `controller`, excepto a la de la instalación, que está contenida en un 
   único script en el ámbito global, con dos vistas:¡.
* `instalacion` es el directorio del caso de uso de solicitar los datos de conexión cuando no 
   existe el fichero de configuracion.
* `controladores` el el directorio de los controladores. Solo hay uno, y la lógica de cada caso de uso se representa con 
   métodos de este controlador
* `vistas` es el directorio de los templates, excepto los de instalación, que están en su propio directorio. 
   Contienen código que visualiza los datos que dejan preparados los fragmentos de lógica. Los fragmentos de lógica se comunican con
   el orm, preparan los datos de la vista e invocan la vista
* `modelo` contiene el orm y las clases de soporte del modelo de datos.


