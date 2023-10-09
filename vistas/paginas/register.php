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
                           <label for="name">Name:</label>
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                              </div>

                              <input type="text" class="form-control" placeholder="Enter name" id="names"
                                 name="registroNombre">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="email">Email address:</label>
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                              </div>
                              <input type="email" class="form-control" placeholder="Enter email" id="email"
                                 name="registroEmail">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="pwd">Password:</label>
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                              </div>
                              <input type="password" class="form-control" placeholder="Enter password" id="pwd"
                                 name="registroPassword">
                           </div>
                        </div>
                        <div class="form-group form-check">
                           <label class="form-check-label">
                              <input class="form-check-input" type="checkbox"> Remember me
                           </label>
                        </div>
                        <?php
                  $registro = ControladorFormularios::ctrRegistro();
                  if ($registro == "ok"){
                     echo'<script>if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                     }</script>';
                     echo '<div class="alert alert-success"> User registered </div>';
                  }
                  ?>
                  <button type="submit" class="btn btn-primary ">Submit</button>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>