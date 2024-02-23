<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Bootswatch: Cerulean</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" media="screen">
      <script type="text/javascript">
            //<![CDATA[
            base_url = '<?= base_url();?>';
            //]]>
        </script>
        <style>
            /* Always set the map height explicitly to define the size of the div
            * element that contains the map. */
            #map {
            height: 425px;
            }
            /* Optional: Makes the sample page fill the window. */
            html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            }
        </style>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI0fOhqfbclQLl5kKuesBoxVgL89ZauJs&callback=initMap" async defer></script>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
         <a class="navbar-brand" href="#">Honest Food</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
      </nav>
      <div class="clearfix">&nbsp;</div>
      <div class="container">
         <div class="row">
            <div class="col-sm-6">
               <div class="card border-secondary" style="max-width: 50rem;">
                  <div class="card-header">
                     <h4 class="card-title">Store Locator!</h4>
                  </div>
                  <div class="card-body">
                     <form action="<?php echo base_url().'address/find'?>" method="POST" id="address">
                        <fieldset>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Store Address</label>
                              <input type="address" class="form-control" name="address" id="address" aria-describedby="addressHelp" required="required" data-error="Please enter address" placeholder="Enter Store Address"
                              value="<?php echo !empty($_POST['address']) ?  $_POST['address']: '';?>">
                           </div>
                           <button type="submit" class="btn btn-primary float-right">Find Store</button>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div> 
            <div class="col-sm-6">
                <?php 
                
              
                
                if(!empty($address) && isset($address)) { 
                    $coordinates = explode(",",$address->coordinates);
                    ?>
                <div class="card bg-light mb-3" style="max-width: 50rem;">
                    <div class="card-header"><?php echo $address->name?></div>
                    <div class="card-body">
                        <h4 class="card-title">Placemark:</h4>
                        <p class="card-text">
                            <span class="badge badge-info">Address</span> : <?php echo $address->address?><br/>
                            <span class="badge badge-info">Latitude </span>  <?php echo $coordinates[0]?>
                            <span class="badge badge-info">Longitude  </span>  <?php echo $coordinates[1]?>
                        </p>
                        <div id="map"></div>
                    </div>
                </div>
                </div>
            </div>
        
        <?php } else { ?>
        
        <div class="alert alert-dismissible alert-warning">
        
            <h4 class="alert-heading">Warning!</h4>
            <p class="mb-0">Sorry, we didn't recognise that location. Please check and try again.</p>
        </div>
        
        <?php } ?>
        </div>
    </div>
    <script>
        var map;
            function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: <?php echo $coordinates[0]?>, lng: <?php echo $coordinates[1]?>},
                zoom: 8
            });
            }
    </script>
</body>