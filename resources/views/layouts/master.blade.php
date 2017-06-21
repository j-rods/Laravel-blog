
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>My blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
  </head>
  
  <!--<head>-->
  <!--  <meta charset="utf-8">-->
  <!--  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
  <!--  <meta name="description" content="">-->
  <!--  <meta name="author" content="">-->
  <!--  <link rel="icon" href="../../favicon.ico">-->

  <!--  <title>Blog Template for Bootstrap</title>-->

    <!-- Bootstrap core CSS -->
  <!--  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
  <!--  <link href="blog.css" rel="stylesheet">-->
  <!--</head>-->
  
  


  <body>
    
    <!--<div class="blog-masthead">-->
    <!--  <div class="container">-->
    <!--    <nav class="nav blog-nav">-->
    <!--      <a class="nav-link active" href="#">Home</a>-->
    <!--      <a class="nav-link" href="#">New features</a>-->
    <!--      <a class="nav-link" href="#">Press</a>-->
    <!--      <a class="nav-link" href="#">New hires</a>-->
    <!--      <a class="nav-link" href="#">About</a>-->
    <!--    </nav>-->
    <!--  </div>-->
    <!--</div>-->

    <div class="collapse bg-inverse" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    @include ('layouts.nav')
    
    <div class="container">
      
      @yield ('content')
      
    </div>

    @include ('layouts.footer')

  </body>
  
</html>
