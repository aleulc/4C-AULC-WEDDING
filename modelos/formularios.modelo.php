<?php
require_once "conexion.php";
class ModeloFormularios
{
    /**
     * Registro
     */
    static public function mdlRegistro($tabla, $datos)
    {
        $stmt = conexion::conectar()->prepare("INSERT INTO registros(nombre, email, password) 
VALUES (:nombre, :email,:password)");
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(conexion::conectar()->errorInfo());
        }

        $stmt = null;
    }
    static public function mdlSeleccionarRegistros($tabla, $item, $valor)
    {
        if ($item == null && $valor == null) {
            $stmt = conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') as d FROM 
            $tabla ORDER BY id DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            $stmt = conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') as d FROM 
            $tabla WHERE $item = :$item ORDER BY id DESC");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        }

        $stmt = null;
    }
    static public function mdlActualizarRegistros($tabla, $datos)
    {
        $stmt = conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, email=:email,
         password=:password WHERE id=:id");
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(conexion::conectar()->errorInfo());
        }

        $stmt = null;
    }
    static public function mdlEliminarRegistro($tabla, $valor)
    {

        $stmt = conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");

        $stmt->bindParam(":id", $valor, PDO::PARAM_INT);
        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(conexion::conectar()->errorInfo());
        }

        $stmt = null;

    }
}
?>