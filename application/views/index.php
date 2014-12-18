
    <div>
      <div id="page-wrapper">
        <div class="container-fluid">
              
          <div class="row">
            <div class="col-lg-12 text-center v-center">
              <h1>Calculadora Maya</h1>
              <p class="cuerpo">convierte números del sistema decimal a vigesimal maya</p>
              <br><br><br>
          
              <form class="col-lg-12" id="convertir" action="<?php echo base_url(); ?>index.php/calculadora/convertir" method="POST">
                <div class="input-group" >
                  <input class="form-control input-lg" id="numero" name="numero" placeholder="Ingresa el número a calcular" type="text" maxlength="10" autofocus>
                  <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="submit">OK</button></span>
                </div>

                <?php
                  //despliega mensaje de error
                  if($this->session->userdata('error')!=FALSE){
                    echo " <div class='alert alert-danger' role='alert'>
                      <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                      <span class='sr-only'>Error:</span>";
                    echo $this->session->userdata('error'); 
                    echo "</div>";
                  }
                ?>

              </form>
            </div>
          </div> 
        </div>
      </div>
    </div>


