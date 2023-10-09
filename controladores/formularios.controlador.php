<?php
class ControladorFormularios
{
    /**
     * Registro
     */
    static public function ctrRegistro()
    {
        if (isset($_POST["registroNombre"])) {
            $tabla = "registros";
            $datos = array(
                "nombre" => $_POST["registroNombre"],
                "email" => $_POST["registroEmail"],
                "password" => $_POST["registroPassword"],
            );
            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
            return $respuesta;

        }
    }
    static public function ctrSeleccionarRegistros($item, $valor)
    {
        $tabla = "registros";
        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
        return $respuesta;
    }
    public function ctrIngreso()
    {
        if (isset($_POST["ingresoEmail"])) {
            $tabla = "registros";
            $item = "email";
            $valor = $_POST["ingresoEmail"];
            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
            //echo "<pre>"; print_r($respuesta); echo "</pre>";
            if (is_array($respuesta)) {
                if (
                    $respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST
                    ["ingresoPassword"]
                ) {

                    $_SESSION["validarIngreso"] = "ok";

                    echo '<script>
                if (window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                window.location = "index.php?pagina=table";
                </script>';
                    ;
                } else {
                    echo '<script>
                if (window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                    echo '<div class="alert alert-danger">Incorrect username or password</div>';
                }
            } else {
                echo '<script>
            if (window.history.replaceState){
                window.history.replaceState(null, null, window.location.href);
            }
            </script>';
                echo '<div class="alert alert-danger">Incorrect username or password</div>';
            }
        }
    }
    static public function ctrActualizarRegistro()
    {
        if (isset($_POST["updateNombre"])) {
            if ($_POST["updatePassword"] != "") {
                $password = $_POST["updatePassword"];
            } else {
                $password = $_POST["PasswordActual"];
            }
            $tabla = "registros";
            $datos = array(
                "id" => $_POST["idUsuario"],
                "nombre" => $_POST["updateNombre"],
                "email" => $_POST["updateEmail"],
                "password" => $password
            );
            $respuesta = ModeloFormularios::mdlActualizarRegistros($tabla, $datos);
            return $respuesta;

        }
    }
    public function ctrEliminarRegistro()
    {
        if (isset($_POST["eliminarRegistro"])) {
            $tabla = "registros";
            $valor = $_POST["eliminarRegistro"];
            $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);
            if ($respuesta == "ok") {
                echo '<script>if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                    }
                    window.location = "index.php?pagina=inicio";
                 </script>';
            }
        }
    }
}

?>