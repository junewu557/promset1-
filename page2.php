<!DOCTYPE html>
<html lang="en">

<?php
  get_header();
 ?>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">June
            <span class="text-primary">Wu</span>
          </h1>
          <div class="subheading mb-5">Shenzhen, (+86)13902473743 |
            <a href="mailto:sisu_wuwenjun@126.com">sisu_wuwenjun@126.com</a>
          </div>
          <p class="lead mb-5"><?php bloginfo("description") ?></p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-github"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </div>
        </div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">

              <?php

              <?php

                        if ( is_page('Airtable') ) {
                                    echo "<center>Cool! (Displayed by page2.php)</center>";
                                    $query = new AirpressQuery();
                                    $query->setConfig("Default");
                                    $query->table("Furniture");
                                    $query->addFilter("{Type}='Chairs'");

                                    $events = new AirpressCollection($query);

                                    foreach($events as $e){

                                            echo "<a href='/wp502a/furniture/".$e["ID"]."' target='_blank'>".$e["Name"]."</a>:<br>".
                                            substr($e["Description"],0,300)."<br><img src='".
                                            $e["Picture_id"]."'><hr><br>";
                                    }
                        }
                    ?>

        </div>
      </section>

    </div>

<?php get_footer(); ?>
