<?php
include "NavUpo.php";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/images.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="banner_content">
                        <br><br><br><br><br>

                        <div class="row">
                            <div class="col-12">
                            </div>
                            <div class="col-lg-8 mb-4 mb-lg-0">
                                    <h1>Novo sporočilo</h1>
									
                                    <form action="posiljanjeobvestila.php" method="post">
  <input type="hidden" name="formID" value="91623679779376" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">

      </li>
      <li class="form-line" data-type="control_radio" id="id_3">
        <div id="cid_3" class="form-input-wide">
          <div class="form-multiple-column" data-columncount="3" data-component="radio">
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_3_0" name="q3_feedbackType" value="Comments" />
              <label id="label_input_3_0" for="input_3_0"> Vprašanje </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_3_1" name="q3_feedbackType" value="Bug Reports" />
              <label id="label_input_3_1" for="input_3_1"> Obvestilo </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_3_2" name="q3_feedbackType" value="Questions" />
              <label id="label_input_3_2" for="input_3_2"> Zahteva </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textarea" id="id_4">
        <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4">
         Sporočilo:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input-wide jf-required">
          <textarea id="input_4" class="form-textarea validate[required]" name="q4_describeFeedback" cols="40" rows="6" data-component="textarea" required=""></textarea>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_8">
        <label class="form-label form-label-top form-label-auto" id="label_8" for="first_8">
          Prejemnik
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_8" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" id="first_8" name="q8_name[first]" class="form-textbox validate[required]" size="10" value="" data-component="first" aria-labelledby="label_8 sublabel_8_first" placeholder="Ime" required="" />
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" id="last_8" name="q8_name[last]" class="form-textbox validate[required]" size="15" value="" data-component="last" aria-labelledby="label_8 sublabel_8_last" placeholder="Priimek" required="" />
            </span>
          </div>
        </div>
      </li>
     
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <br>
           <button type="submit" name="submit" class="primary_btn button-contactForm" class="prijavabtn">Pošlji</button>
          
        </div>
     
  </div>
                                    </form>
                                    <?php
                                    require 'connect.php';
                                    ini_set('display_errors', 1);
                                    ini_set('display_startup_errors', 1);



                                    if (isset($_POST['sporočilo']) && isset($_POST['Pošlji'])) {
                                        $prejemnik = $_POST['prejemnik'];
                                        $sporočilo = $_POST['sporočilo'];
                                        $user_check = $_SESSION['upo-ime'];
                                        $sql = "INSERT INTO sporočila(pošiljatelj,prejemnik,sporočilo) VALUES ('" . $user_check . "','" . $prejemnik . "','" . $sporočilo . "')";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "Sporočilo uspešno poslano";
                                        } else {
                                            echo "Error: " . $sql . "<br>" . $conn->error;
                                        }


                                    }

                                    ?>
                            </div>

                        </div>
						
					

<script type="text/javascript">JotForm.ownerView=true;</script>
						
						
						
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="home_right_img">
                        <img class="img-fluid" src="img/273a20e19c.png" alt="">
                    </div>
                </div>
            </div>
        </div>
</section>
</html>