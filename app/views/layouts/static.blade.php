<!DOCTYPE html>
<html lang="en">
<head>
  @include('_partials.head')
</head>
<body data-spy="scroll" data-target="#header" class="landing">
  @include('_partials.header.headerstatic')
  <section id="content">
    <div class="main-visual">
      <div class="bg-inverse">
        <div class="container text-center">
          <h1 class="animated fadeInUp">Mobile first web app template with rich<br> HTML, CSS, and JS components.</h1>
          <p>
            <a href="http://themeforest.net/item/first-mobile-first-web-app-theme/5002403" target="_blank" class="btn btn-lg btn-danger animated fadeInLeft m-l m-r m-b">Download first</a>
            <a href="index.html" target="_blank" class="btn btn-lg btn-primary animated fadeInRight m-l m-r m-b">Live preview</a>
          </p>
        </div>
      </div>
    </div>
    <div id="about">
      <div class="container">
        <p>&nbsp;</p>
        <div class="text-center m-large">
          <h2 class="font-thin">About this project</h2>
          <p>Responsive mobile first web app / admin dashboard template with flat ui</p>
        </div>
        <div class="text-center">
          <img src="images/responsive.png">
        </div>
        <div class="row m-large">
          <div class="col-lg-6 col-sm-6 media">
            <span class="btn btn-circle btn-lg btn-default pull-left"><i class="fa fa-mobile-phone"></i></span>
            <div class="media-body">
              <h3 class="m-t-none">Web app</h3>
              <p>first contains many mobile app widgets and components, it's fully responsive, it can run on all the size of the screen.</p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 media m-t-none">
            <span class="btn btn-circle btn-lg btn-default pull-left"><i class="fa fa-signal"></i></span>
            <div class="media-body">
              <h3 class="m-t-none">Admin dashboard</h3>
              <p>first also can be used as admin dashboard, it has tables, charts and other useful components for admin management.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-primary" id="features">
      <div class="container">
        <p>&nbsp;</p>
        <div class="text-center m-large">
          <h2 class="font-thin">Features</h2>
          <p>Lightweight with rich components</p>
        </div>
        <div class="row m-large">
          <div class="col-lg-4 col-sm-4">
            <p class="text-center"><span class="btn btn-circle btn-lg btn-white"><i class="fa fa-bold"></i></span></p>
            <div>
              <h3 class="text-center">Bootstrap 3.0</h3>
              <p>This project is based on Bootstrap 3. the sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-4">
            <p class="text-center"><span class="btn btn-circle btn-lg btn-warning"><i class="fa fa-bolt"></i></span></p>
            <div>
              <h3 class="text-center">Lightweight</h3>
              <p>We only choose the lightweight plugins, but with rich functions. we use tiny components, css and js size is first consideration.</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-4">
            <p class="text-center"><span class="btn btn-circle btn-lg btn-danger"><i class="fa fa-html5"></i></span></p>
            <div>
              <h3 class="text-center">HTML5 & CSS3</h3>
              <p>first use HTML5 and CSS3 to build the components. the pages use header, nav, section to build the layout. this project have a good color scheme, can easy to change.</p>
            </div>
          </div>
        </div>        
      </div>
    </div>
    <div>
      <div class="container">
        <div class="row m-large">
          <div class="col-lg-4 col-sm-4">
            <p class="text-center"><span class="btn btn-circle btn-lg btn-primary"><i class="fa fa-tablet"></i></span></p>
            <div>
              <h3 class="text-center">Mobile first</h3>
              <p>This project is fully responsive, but it's mobile first. it provide the off screen nav, and almost all the widgets are copatible to all the screen sizes.</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-4">
            <p class="text-center"><span class="btn btn-circle btn-lg btn-default"><i class="fa fa-briefcase"></i></span></p>
            <div>
              <h3 class="text-center">Rich components</h3>
              <p>We build many components for your project need. also they are extensible and easy to customize. </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-4">
            <p class="text-center"><span class="btn btn-circle btn-lg btn-success"><i class="fa fa-refresh"></i></span></p>
            <div>
              <h3 class="text-center">Keep updating</h3>
              <p>We will keep update this project, we will keep adding new widgets and components.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-light" id="screenshot">
      <div class="container gallery">
        <div class="row m-large gallery">
          <div class="col-lg-3 col-6">
            <a href="images/render-1.jpg" class="thumbnail" target="_blank"><img src="images/render-1-thumb.jpg"></a>
          </div>
          <div class="col-lg-3 col-6">
            <a href="images/render-2.jpg" class="thumbnail" target="_blank"><img src="images/render-2-thumb.jpg"></a>
          </div>
          <div class="col-lg-3 col-6">
            <a href="images/render-3.jpg" class="thumbnail" target="_blank"><img src="images/render-3-thumb.jpg"></a>
          </div>
          <div class="col-lg-3 col-6">
            <a href="images/render-4.jpg" class="thumbnail" target="_blank"><img src="images/render-4-thumb.jpg"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-inverse clearfix">
      <div class="container text-center m-large">
        <h2 class="font-thin">Thank you for watching!</h2>
        <p>&nbsp;</p>
        <a href="#content"><i class="fa fa-arrow-up"></i><br>Back to top</a>
      </div>
    </div>
  </section>
  <!-- / header -->

  @include('_partials.footer.footerstatic')
</body>
</html>