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
          <div class="logo-container">
            <div class="logo">
              <img src="images/logo.svg" />
            </div>
          </div>
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
    <section class="container-fluid work-container about-us col-sm-12">
      <div class="bg-frame">
        <img class="about-us-bg" src="/images/bg-about-us.png" />
      </div>
    </section>
    <section class="container-fluid work-container about-us2 col-sm-12">
      <div class="bg-frame">
        <img class="about-us-bg" src="/images/bg-about-us.png" />
      </div>
    </section>
  </main>
  <?php include("includes/footer.inc.php"); ?>
