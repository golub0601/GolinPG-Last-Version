
<?php include 'db.php'; ?>

<?php
   global $connection;
   $query = "SELECT * FROM offices";
   $get_off = mysqli_query($connection, $query);
   while($row = mysqli_fetch_assoc($get_off)){
     $img = $row['image_source'];
     $city = $row['city'];
   ?>
    <div class="col-lg-3 col-sm-4" style="text-align: center;">
    <div class="feature-box text-center object-non-visible color_img"  data-animation-effect="fadeInDownSmall" data-effect-delay="300">
    <a href="#" style="position: relative;" class="on_hover_city"><img style="height: 240px; width: 240px;" class="img-responsive" src="img/ColorOffice/<?php echo $img ?>" alt=""></a>
    <p class="bottom_of_image_city"><?php echo $city ?></p>
    </div>
    </div>
<?php } ?>