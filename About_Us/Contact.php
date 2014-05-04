<html>
<?php include '../data/common/head.php' ?>
<body>
    <center>
<div style="display:inline;">
        <div class = "first_contact">
        <!-- Full Start (This Contain Two tables (Right and Left)) -->
<table >
<tr>
<td>

    <!-- Left Table Start -->     
<table class="left_container" align="left" border="0" cellpadding="0" cellspacing="0">
    <!--First Row of Left Table start -->
<tr>
<td width="200px" valign="middle" style="text-align:left">
    <a href="../index.php"><img href="../index.php" style="margin-top:6px" border="0" src="../data/image/logo.jpg" width="200"
height="200" alt="indianopen" title="Sewa Bharti Bal Vidyalaya" /></a>
</td>
</tr>
<!--First Row of Left Table End -->


<!--Second Row of Left Table Start -->
<tr>
    <td width="200px" valign="top" style="height:377px;" >
<div>
<?php include '../data/common/left_menu.php'; ?>
<?php 
$currpage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
curPageName($currpage);
?>
</div>
 
<div>
<?php include '../data/common/quick_links.php'; ?>
</div>


    </td>
</tr>
<!--Second Row of Left Table Ends -->
</table>

    <!-- Left Table End -->

    <!-- Right Table Start -->
<table class="right_container" align="right" border="0" cellpadding="0"
    cellspacing="0" >
    <?php include '../data/common/main_menu.php'; ?>
    <?php include '../data/common/description.php' ?>

    <?php 
$currpageId = "contact";
descrip($currpageId); 
?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(26.884909,75.775548),
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.SATELLITE
        }
        var map = new google.maps.Map(map_canvas, map_options)
var marker = new google.maps.Marker({
    position: map.getCenter(),
    icon: {
      path: google.maps.SymbolPath.BACKWARD_CLOSED_ARROW,
      scale: 10
    },
    draggable: false,
    map: map
  });
            
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<tr >
<td>
<div id = "map_canvas"> </div>
</td>
</tr>

   
    <!-- Third Row of Right Table Ends -->
</table>

    <!-- Right Table End -->

</td>
</tr>
</table>

</div>


<div id = "footer">
 <?php include '../data/common/footer.php'; ?>
</div>

<!-- Full Table End -->

</center>

</body>
</html>


