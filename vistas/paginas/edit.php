<?php

if (isset($_GET["id"])) {
    $item = "id";
    $valor = $_GET["id"];
    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
    //echo '<pre>'; print_r($usuario); echo '</pre>';
}

?>

<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<section class="banner__section">
    <div class="banner-overlay">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-12">
                    <div class="banner__content center">
                        <div class="banner__shape">
                            <img src="/html/assets/img/banner/banner-shape.png" alt="banner__shape">
                        </div>
                        <div class="banner__shape2">
                            <img src="assets/img/banner/banner-shape2.png" alt="banner__shape">
                        </div>
                        <div class="banner__shape3">
                            <img src="assets/img/banner/banner-shape3.png" alt="banner__shape">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center text-center">
                        <form method="post">
                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    </div>

                                    <input type="text" class="form-control" value="<?php echo $usuario["nombre"]; ?>" 
                                    placeholder="Enter name" id="names"
                                        name="updateNombre">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" value="<?php echo $usuario["email"]; ?>" 
                                    placeholder="Enter email" id="email"
                                        name="updateEmail">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Enter password" id="pwd"
                                        name="updatePassword">
                                        <input type="hidden" name="PasswordActual" value="<?php
                                        echo $usuario ["password"]; ?>">
                                        <input type="hidden" name="idUsuario" value="<?php
                                        echo $usuario ["id"]; ?>">
                                </div>
                            </div>
                           
                            <?php
                            $registro = ControladorFormularios::ctrRegistro();
                            if ($registro == "ok") {
                                echo '<script>if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                     }</script>';
                                echo '<div class="alert alert-success"> User updated </div>';
                            }
                            ?>
                            <?php  $actualizar = ControladorFormularios::ctrActualizarRegistro();
                            if ($actualizar == "ok") {
                                echo '<script>if(window.history.replaceState){
                                    window.history.replaceState(null, null, window.location.href);
                                 }</script>';
                                echo '<div class="alert alert-success"> User updated </div>
                                <script>
                                setTimeout(function(){
                                    window.location = "index.php?pagina=inicio";
                                },1600);
                                </script>
                                ';
                            }
                             ?>
                            <button type="submit" class="btn btn-primary ">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>