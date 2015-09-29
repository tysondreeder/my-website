<!DOCTYPE html>
<html lang="en">
<?php set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] ); ?>
<?php include("includes/head.inc.php"); ?>
<body id="home">
  <?php include("includes/header.inc.php"); ?>
  <?php include("includes/overlay.inc.php"); ?>
  <main id="work-overview">
    <section class="intro-container">
      <article class="title-container">
        <section class="text-center uppercase">
          <div class="title pt3">
            <p class="focused">user focused</p> 
            <p class="strategy-design">
              <span class="strategy">strategy</span> 
              + 
              <span class="design">design</span>
            </p>
          </div>
        </section>
      </article>
    </section>
    <section class="container-fluid work-container about-us">
      <img class="about-us-computer col-sm-6 col-sm-offset-1" src="/images/about-us-macbook.png" />
      <div class="work-block col-sm-5">
        <p class="company">Mutual of Omaha</p>
        <h1 class="work-name">About Us</h1>
        <p class="work-done">Design + Development + Strategy</p>
        <p class="intro">The About Us section for Mutual of Omaha.com</p>
        <div class="button-container">
          <a class="button left">See the Project</a>
          <a class="button">Go to the Website</a>
        </div>
      </div>
    </section>
<!--     <section class="container-fluid work-container about-us middle">
      <img class="about-us-computer col-sm-6 col-sm-offset-1" src="/images/about-us-macbook.png" />
      <div class="work-block col-sm-5">
        <p class="company">Mutual of Omaha</p>
        <h1 class="work-name">About Us</h1>
        <p class="work-done">Design + Development + Strategy</p>
        <p class="intro">The About Us section for Mutual of Omaha.com</p>
        <div class="button-container">
          <a class="button left">See the Project</a>
          <a class="button">Go to the Website</a>
        </div>
      </div>
    </section> -->
  </main>
  <?php include("includes/footer.inc.php"); ?>
