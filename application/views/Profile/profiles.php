<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-color--grey-100">
    	<main class="mdl-layout__content">
    		<div class="mdl-card mdl-shadow--6dp">
    			<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
            <?php foreach ($musician as $musicians):?>
    				<h2 class="mdl-card__title-text">Profile: <?php echo $musicians['name'] ?></h2>
          <?php endforeach; ?>
    			</div>
           <div class="mdl-card__supporting-text">
            <div class="container">


                <!-- Simple Select -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
                    <?php foreach ($instruments as $instrument):?>
                      <label >Instrument: <?php  echo $instrument['name'] ?> </label>
                   <?php endforeach; ?>


          </div>
               <div class="">
                 Género:  <label>Metal</label>
              <!-- <?php foreach ($genre as $genre):?> -->
                 <p>

                   <!-- <?php endforeach;?> -->
                 </p>

               </div>
            
                  <button type = "submit" name="submit" class="mdl-button mdl-js-button
                  mdl-button--raised mdl-button--colored">
                       Back
                  </button>


                </div>
              </div>
    			</div>
          </main>
    		</div>



<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/material.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/query.js"></script>
  </body>
</html>
