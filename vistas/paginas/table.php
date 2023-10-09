<?php

if (!isset($_SESSION["validarIngreso"])) {
    echo '<script>window.location="index.php?pagina=session";</script>';
    return;
} else {
    if ($_SESSION["validarIngreso"] != "ok") {
        echo '<script>window.location="index.php?pagina=session";</script>';
        return;
    }
}

?>
<!--==== Scroll-Up Section Here ======= -->
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!--==== Scroll-Up Section End ======= -->
<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Table
            </h1>
            <ul class="right__content">
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    Table
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section Here ========= -->
<?php
$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
//echo '<pre>'; print_r($usuarios); echo '</pre>';

?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Email</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $key => $value): ?>

            <tr>
                <td>
                    <?php echo ($key + 1); ?>
                </td>
                <td>
                    <?php echo $value["nombre"]; ?>
                </td>
                <td>
                    <?php echo $value["email"]; ?>
                </td>
                <td>
                    <?php echo $value["d"]; ?>
                </td>

                <td>
                    <div class="btn-group">
                        <div class="px-1">
                            <a href="index.php?pagina=edit&id=<?php echo $value["id"]; ?>" class="btn 
                        btn-warning"><i class="fas fa-pencil-alt"> </i></a>
                        </div>
                        <form method="post">
                            <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt">
                                </i></button>
                            <?php

                            $eliminar = new ControladorFormularios();
                            $eliminar->ctreliminarRegistro();

                            ?>
                        </form>
                    </div>
                </td>

            <?php endforeach ?>
    </tbody>
</table>