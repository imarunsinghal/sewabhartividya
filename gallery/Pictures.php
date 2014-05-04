<html>
<?php include '../data/common/head.php' ?>
<body>
    <center>
<div style="display:inline;">
        <div class = "first_gallery">
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
        
<?php include '../data/common/left_menu.php'; ?>
<?php 
$currpage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
curPageName($currpage);
?>
        </div>
        
        <div >
<?php include '../data/common/quick_links.php' ?>
        

    </td>
</tr>
<!--Second Row of Left Table Ends -->
</table>

    <!-- Left Table End -->

    <!-- Right Table Start -->
<table class="right_container" align="right" border="0" cellpadding="0"
    cellspacing="0" >
   <?php include '../data/common/main_menu.php' ?> 

    <!-- Third Row of Right Table starts -->
    <tr>
        
        <td align="left"  >
            <div class = "extractor" align="center">
            <div class = "Mrsextractor" align="center">
            <div class = "Mrsextractor_1" align = "Center">
                Photo Gallery
            </div>
            <hr>
            <div class = "Mrsextractor_2" align = "Center">
                <img src="../data/image/gallery.jpg" width="700" height="120" />
            </div>
            <div class = "Mrsextractor_2" align = "Center">
                <div class="thumbnail">
                    <a href = "../data/image/1.jpg" target ="_blank">
    <img src="../data/image/1_1.jpg" width="120"
    height="160">
</a>
                        </div>
                       <div class="thumbnail">
                    <a href = "../data/image/2.jpg" target ="_blank">
    <img src="../data/image/2_1.jpg" width="120"
                            height="160">
</a>
                        </div>
                       <div class="thumbnail">
                    <a href = "../data/image/3.jpg" target ="_blank">
    <img src="../data/image/3_1.jpg" width="120"
                            height="160">
</a>
                        </div>
                       <div class="thumbnail">
                    <a href = "../data/image/4.jpg" target ="_blank">
    <img src="../data/image/4_1.jpg" width="120"
                            height="160">
</a>
                        </div>
                       <div class="thumbnail">
                    <a href = "../data/image/5.jpg" target ="_blank">
    <img src="../data/image/5_1.jpg" width="120"
                            height="160">
</a>
                        </div> 
                       <div class="thumbnail">
                    <a href = "../data/image/6.jpg" target ="_blank">
    <img src="../data/image/6_1.jpg" width="120"
                            height="160">
</a>
                        </div> 
                       <div class="thumbnail">
                    <a href = "../data/image/7.jpg" target ="_blank">
    <img src="../data/image/7_1.jpg" width="120"
                            height="160">
</a>
                        </div> 
                       <div class="thumbnail">
                    <a href = "../data/image/8.jpg" target ="_blank">
    <img src="../data/image/8_1.jpg" width="120"
                            height="160">
</a>
                        </div> 
                         <div class="thumbnail">
                    <a href = "../data/image/9.jpg" target ="_blank">
    <img src="../data/image/9_1.jpg" width="120"
                            height="160">
</a>
                        </div> 
                         <div class="thumbnail">
                    <a href = "../data/image/10.jpg" target ="_blank">
    <img src="../data/image/10_1.jpg" width="120"
                            height="160">
</a>
                        </div> 
                         <div class="thumbnail">
                    <a href = "../data/image/11.jpg" target ="_blank">
    <img src="../data/image/11_1.jpg" width="120"
                            height="160">
</a>
                        </div> 
                         <div class="thumbnail">
                    <a href = "../data/image/12.jpg" target ="_blank">
    <img src="../data/image/12_1.jpg" width="120"
                            height="160">
</a>
                        </div> 
                         <div class="thumbnail">
                    <a href = "../data/image/13.jpg" target ="_blank">
    <img src="../data/image/13_1.jpg" width="120"
                            height="160">
</a>
                        </div> 
                         <div class="thumbnail">
                    <a href = "../data/image/14.jpg" target ="_blank">
    <img src="../data/image/14_1.jpg" width="120"
                            height="160">
</a>
                        </div> 
 


  

            </div>
            </div>
            </div>
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
<?php include '../data/common/footer.php' ?> 

</div>
<!-- Full Table End -->

</center>

</body>
</html>


