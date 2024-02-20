<?php

class AlumnosDisp {
      var $Id=0;
      private var $Nombre="SIN ESPECIFICAR";
      var $Apellido="SIN ESPECIFICAR";
      var $Edad=0;
      var $Correo="SIN ESPECIFICAR";
      var $Telefono="SIN ESPECIFICAR";
      var $direccion="SIN ESPECIFICAR";
      var $NIE="SIN ESPECIFICAR";
      var $UsuarioCreacion="SIN ESPECIFICAR";
      var $UsuarioModifica="SIN ESPECIFICAR";

      function __construct() {

      }
      /*DESEMCAPSULAR LA VARIABLE PRIVADA $NOMBRE*/
      function ObtenerNombre(){
            return $this-> Nombre;
      }
      /*DESEMCAPSULAR LA VARIABLE $APELLIDO*/
      function ObtenerApellido(){
            return $this-> Apellido;
      }
      /*VALIDACION DE LA VARIABLE SEA VALIDA*/
      function ValidarNombre($VNombre='SIN ESPECIFCAR')
      {
            $nombreActual = $this->ObtenerNombre();
      /*VALIDAR QUE LA VARIABLE NOMBRE SEA VALIDA*/
            if($nombreActual === $VNombre){
                  echo "El nombre es valido";
      }
            else {
                  echo "El nombre NO es valido";
            }

      }
       /*VALIDACION DE LA VARIABLE SEA VALIDA*/
      function ValidarApeliido($VApellido='SIN ESPECIFCAR')
      {
          $nombreApellido = $this->ObtenerApellido();
            if ($nombreApellido === $VApellido){
                  echo "El apellido es valido";
            }
            else{
                  echo "El apellido NO es valido";
            }
      }
}
?>
