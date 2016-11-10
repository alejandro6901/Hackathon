<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-color--grey-100">
    	<main class="mdl-layout__content">
    		<div class="mdl-card mdl-shadow--6dp">
    			<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
    				<h2 class="mdl-card__title-text">Register</h2>
    			</div>
           <div class="mdl-card__supporting-text">
            <div class="container">
              <form action="Hackathon/registerMusician" method="POST">
                <div class="mdl-textfield mdl-js-textfield">
                  <input  id="id_client" name="city" class="mdl-textfield__input" type="text"/>
                  <label class="mdl-textfield__label" for="id_client">City</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                  <input id="name" name="name" class="mdl-textfield__input" type="text"  />
                  <label class="mdl-textfield__label" for="name">Name</label>
                </div>
                <!-- Simple Select -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">

              <label >Instrument</label>
              <select class="mdl-textfield__input" name="instrument">
                <?php foreach ($instrument as $instrument):?>
                    <option value="<?php echo $instrument['id'] ?>"><?php echo $instrument['name']?></option>
                <?php endforeach;?>
              </select>
          </div>
               <div class="">
                 Género:
              <?php foreach ($genre as $genre):?>
                 <p>

                     <input type="checkbox" name="genre" value="<?php  echo $genre['id'] ?>"> <?php echo $genre['name']?>
                   <?php endforeach;?>

                 </p>

               </div>

              <button type = "submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                   Register
              </button>
              </form>
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
