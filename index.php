<?php 
 include 'includes/db.php';
 include 'includes/meeting.php';
 include 'includes/images.php';
?>

<?php 
  //setting new meeting
  if (isset($_POST['submit_meeting'])){
    setNewMeeting();
  }
?>

<?php include 'includes/header.php'; ?>
        <!-- section start -->
        <!-- ================ -->
        <!-- dinamicno ucitavanje pozadine za meeting section -->
        <?php
         $name = 'background_for_meeting_section_index';
         $source = loadImage($name);
        ?>
        <section id="meeting_section_index" class="section" style="background-image: url(<?php echo $source;?>); background-size:100% 100%;">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h2 class="montBlackItalic title large dark" style="font-weight: bold; font-style: italic; margin-bottom: 0px;">AMPLITUDO</h2>
                <h2 class="montBlackItalic title large dark" style="font-weight: bold; font-style: italic; margin-top: 0px;">AFFILIATE OF GOLIN</h2>
                <div class="separator-2"></div>
                <p class="firaLight large" style="color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo deserunt tempora qui.</p>

 <?php include 'includes/popMeeting.php'; ?>

                <a href="index.php#" onclick="document.getElementById('myModal').style.display='block';" class="btn btn-xl montBold" style="color: #3e3e3e; font-weight: bold; margin-bottom: 150px; background-color: #f2cd29; border-radius: 10px; box-shadow: 0px 4px 0px 0px #3e3e3e; padding:5px; padding-right: 10px; padding-left: 10px; ;">ZAKAŽI SASTANAK</a>
              </div>
            </div>
          </div>
        </section>
        <!-- /section end -->

        <!-- section start -->

      <div id="page-start"></div>
        
        <!-- section end -->

        <!-- section start -->
        <div id="back_section" style="background-color: #f2cd29;margin-top: 40px;">
        <div class="row container section section_text" style="padding: auto; margin: auto;">
            <div id="PREM" class="col-md-6" style="padding: auto; margin: auto; ">

                <!-- dinamicno ucitavanje za EVENT MANAGMENT -->
              <?php     
               $query = "SELECT * FROM pr_and_em WHERE id = 2";
               $get_image = mysqli_query($connection, $query);
                if(!$get_image){
                  die(mysqli_error($connection));
                }
                while($row = mysqli_fetch_assoc($get_image)){
                  $source = $row['image_source'];
                  $title_EM = $row['title'];
                  $content_EM = $row['content'];
                }
              ?>
              <!-- /dinamicno ucitavanje za EVENT MANAGMENT -->

               <!-- dinamicno ucitavanje PR section -->
              <?php 
               $query = "SELECT * FROM pr_and_em WHERE id = 1";
               $get_image = mysqli_query($connection, $query);
                if(!$get_image){
                  die(mysqli_error($connection));
                }
                while($row = mysqli_fetch_assoc($get_image)){
                  $source_PR = $row['image_source'];
                  $title_PR = $row['title'];
                  $content_PR = $row['content'];
                }
              ?>
                <!-- /dinamicno ucitavanje PR section -->
                
                <img id="pr_and_com" class="img-responsive" src="img/PR&EM/<?php echo $source ?>"  style="width: 500px; height: 378px; padding-bottom: 30px;">
                <div id="paraf_pr">
                    <h1 class="montBlackItalic title_l"><?php echo $title_PR ?></h1>
                    <div class="firaLight"><?php echo $content_PR ?></div>
                </div>
            </div>
          <div id="EM" class="col-md-6" style="padding: auto; margin: auto;">

                <img id="evm" class="img-responsive" src="img/PR&EM/<?php echo $source_PR ?>" style="width: 500px; height: 378px; padding-bottom: 30px;">
                <div id="paraf_em">
                    <h1 class="montBlackItalic title_l"><?php echo $title_EM; ?></h1>
                    <div class="firaLight"><?php echo $content_EM; ?> </div>
                </div>
            </div>
          </div>
        </div>
     <!-- section end -->


      <!-- section start -->
      <!-- ================ -->
       <!-- dinamicno ucitavanje background za CLIENTS section -->
        <?php 
          $name = 'background_clients_section_index';
          $source = loadImage($name);
        ?>
       
      <section id="CL" class="dark-translucent-bg pv-30" style="clear: both; background-image:url(<?php echo $source; ?>); ">
        <div class="container" style="margin: auto; padding: auto;">
          <div class="row justify-content-md-center">
            <div class="col-md-8">
              <h2 class="text-center montBlack"><strong style="font-size:42px; color: #f2cd29"> CLIENTS </strong></h2>
              <div class="separator"></div>
              
            </div>
          </div>
          <div class="row" style="text-align: center;">

            <!-- Ucitavnje Clients section -->
            <?php  
               $query = "SELECT * FROM clients_imgs";
               $get_images = mysqli_query($connection, $query);
               
               while($row = mysqli_fetch_assoc($get_images)){
                 
                 $image_source = $row['image_source'];
                 $company =  $row['company'];  ?>

                  <div class="col-lg-4 col-sm-6">
                  <div class="pv-30 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                  <a href="#" style="position: relative;" class="on_hover"><img src="img/Fotke clients/<?php echo $image_source ?>" alt=""></a>
                  <p class="montBlack bottom_of_image"><?php echo $company ?></p>
                  </div>
                  </div>

           <?php  } ?>
              <div class="divIndicator"></div>
                  <div class="indicator1"></div>
                  <div class="indicator2"></div>
                  <div class="indicator3"></div>
              </div>    
        </div>
      </section>
      <!-- section end -->
        
        
        
      <!-- section start -->
      <div class="container" id="AU">
          <div class="row" >
            <div class="col-lg-12"  >
               <!-- dinamicno ucitavanje gifa -->
        <?php 
          $name = 'gif_index';
          $source = loadImage($name); 
        ?>
              <img src="<?php echo $source ?>" style="width: 250px; margin:auto; padding:auto; padding-bottom: 20px; padding-top: 20px;">
            </div>
          </div>
        </div>
        <!-- dinamicno background ABOUT US section -->
        <?php 
          $name = 'background_about_us_section_index';
          $source = loadImage($name);
        ?>

        <div class="section" style="background-image: url('<?php echo $source ?>'); background-size:100% 100%;">
         <div class="container">
          <div class="row">
            <div class="col-lg-12">

              <p class="firaSemiBold large_p">WE ARE THE REVELANCE AGENCY</p>
              <h4 class="fira" style="color: #f9f8ef; text-align: center; ">We are revelance obsessed. More imortantly, we are revelance equiped.</h4>
              <p class="firaLight" style="font-size: 14px; color: #f9f8ef; text-align: center; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae iusto eaque deleniti doloribus quos voluptatibus maxime aliquid blanditiis placeat alias earum fugiat quod quo inventore totam reprehenderit possimus, necessitatibus officiis.</p>
              <p class="firaLight" style="font-size: 14px; color: #f9f8ef; text-align: center; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptates adipisci sapiente sed ex dicta qui temporibus porro maxime numquam, tempore quibusdam hic quia inventore minima nihil quidem fugit provident tenetur aperiam quo suscipit.</p>
              <div class="separator" style="padding-bottom: 50px;"></div>
            </div>

                  <?php
                  $query = "SELECT * FROM about_us";
                  $get_divs = mysqli_query($connection, $query);
                  while($row = mysqli_fetch_assoc($get_divs)){
                    $img = $row['img_source'];
                    $title = $row['title'];
                    $content = $row['content'];
               ?> 
            
            <div class="col" style="background-color: black !important; margin-left: 5px; margin-right: 5px; margin-top: 5px;">
              <img src="img/ikonice krugovi/<?php echo $img ?>" alt="" style="margin: auto; padding: auto; margin-top: 20px;">
              <p class="montBold" style="font-size: 16px; color: #f9f8ef; text-align: center; padding-top: 15px; padding-bottom: 10px;"><?php echo $title; ?></p>
              <p class="firaLight" style="color: #ffffff; font-size: 14px;"><?php echo $content; ?></p>
            </div>
            <?php } ?>
            
            </div>
         
       </div>
       </div>
      <!-- section end -->

      <!-- section start -->
              <div class="section" id="offices">
                <div class="container" id="OFF">
                  <h2 class="montBlack text-center mt-4"><strong style="font-size: 42px; color: #fff;  text-decoration:underline; text-decoration-color: #f2cd29 ;"> OFFICES </strong></h2>
                  <h2 class="montBold text-center mt-4">
                    <strong style="font-size: 36px; color: #f2cd29">
                      <ul class="list-inline">
                        <li style="color: #fff;  text-decoration:underline; text-decoration-color: #f2cd29 ;" class="list-inline-item">EMEA</li> 
                        <li class="list-inline-item">AMERICAS</li> 
                        <li class="list-inline-item">ASIA</li>
                      </ul> 
                    </strong>
                  </h2>
                  
                  <div class="row">
                   <?php include 'includes/offices.php'; ?>
                    </div>
                </div>
              </div>
      <!-- section end -->

    <script>
      $('.modal').on('click', function () {document.getElementById('myModal').style.display='none';}).children().on('click', function (event) {
    event.stopPropagation();});
    </script> 

    <?php include 'includes/footer.php'; ?>

    