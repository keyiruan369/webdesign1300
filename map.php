<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Ithaca Apple Harvest Festival </title>
      <link rel="stylesheet" type="text/css" href="styles/main.css">
      <link rel="stylesheet" type="text/css" href="styles/headerfooter.css">
      <link href="http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic%7CDroid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
      <script src="js/map.js"></script>
  </head>
  <body>
    <div id="wrapper">
    <?php include "includes/header.php";?>
    <div id="map_container">
      <div id="map">
         <h1>Apple Harvest Festival Map</h1>
         <!-- This image belongs to Downtown Ithaca:
         Downtown Ithaca. (n.d.). Retrieved from http://www.downtownithaca.com/local/file_upload/images/Apple Harvest Map 2016.jpg -->
         <img src="images/applemap.jpg" alt="map">  
      </div>
      <div id="bus">  
          <h1>Bus Routes</h1>
          <div id="button_div">
              <button id="button1" onclick="image_slide(1);">Previous Route</button>
              <button id="button2" onclick="image_slide(0);">Next Route</button>
          </div> <!-- end of button_div -->
          <img id="default_bus" src="images/bus1.jpg" alt="bus1">
          <!-- bus1.jpg belongs to TCAT:
          TCAT. (n.d.). Retrieved from https://tcat.nextinsight.com/mrnpics/10_Jan2015.jpg -->
          <!-- bus2.jpg belongs to TCAT:
          TCAT. (n.d.). Retrieved from https://tcat.nextinsight.com/mrnpics/30_August2016.2.jpg -->
          <!-- bus3.jpg belongs to TCAT:
          TCAT. (n.d.). Retrieved from https://tcat.nextinsight.com/mrnpics/17_Summer2015.jpg -->
          <!-- bus4.jpg belongs to TCAT:
          TCAT. (n.d.). Retrieved from https://tcat.nextinsight.com/mrnpics/11_August2016_SNOW.jpg -->
      </div>  
    </div>
    <?php include "includes/footer.php"; ?>
  </div>
  </body>  
</html> 
