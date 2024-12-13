<?php 
include 'global/config.php';
include 'Conexion/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyWeb</title>
</head>
<body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="css/templatemo.css">
 
  <link rel="stylesheet" href="css/fontawesome.min.css">

    <!-- As a heading -->
    
     <!-- Header -->
     <nav class="navbar navbar-expand-lg navbar-light shadow">
      <div class="container d-flex justify-content-between align-items-center">

          <a class="navbar-brand text-success logo h2 align-self-center" href="indexprin.php">
              DISCK GROOVE
          </a>

          <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
              <div class="flex-fill">
                  <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="indexprin.php">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="about.html">About</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="contact.html">Contact</a>
                      </li>
                  </ul>
              </div>
              <div class="navbar align-self-center d-flex">
                  <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                      <div class="input-group">
                          <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                          <div class="input-group-text">
                              <i class="fa fa-fw fa-search"></i>
                          </div>
                      </div>
                  </div>
                  <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                      <i class="fa fa-fw fa-search text-dark mr-2"></i>
                  </a>
                  <a class="nav-icon position-relative text-decoration-none" href="#">
                      <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                      <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                  </a>
                  <a class="nav-icon position-relative text-decoration-none" href="CRUD.php">
                      <i class="fa fa-fw fa-user text-dark mr-3"></i>
                      <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                  </a>
              </div>
          </div>

      </div>
  </nav>
  <!-- Close Header -->

    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
      <div class="container text-light">
          <div class="w-100 d-flex justify-content-between">
              <div>
                  <i class="fa fa-envelope mx-2"></i>
                  <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                  <i class="fa fa-phone mx-2"></i>
                  <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
              </div>
              <div>
                  <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                  <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                  <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                  <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
              </div>
          </div>
      </div>
  </nav>
  <!-- Close Top Nav -->
 <!-- Start Banner Hero -->
 <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
      <div class="carousel-item active">
          <div class="container">
              <div class="row p-5">
                  <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                      <img class="img-fluid" src="imagenes/nosotros2.jpg" alt="">
                  </div>
                  <div class="col-lg-6 mb-0 d-flex align-items-center">
                      <div class="text-align-left align-self-center">
                          <h1 class="h1 text-success"><b>Disck Groove</b></h1>
                          <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
                          <p>
                              Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5 (beta 1). 
                              This template is 100% free provided by <a rel="sponsored" class="text-success" href="https://templatemo.com" target="_blank">TemplateMo</a> website. 
                              Image credits go to <a rel="sponsored" class="text-success" href="https://stories.freepik.com/" target="_blank">Freepik Stories</a>,
                              <a rel="sponsored" class="text-success" href="https://unsplash.com/" target="_blank">Unsplash</a> and
                              <a rel="sponsored" class="text-success" href="https://icons8.com/" target="_blank">Icons 8</a>.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="carousel-item">
          <div class="container">
              <div class="row p-5">
                  <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                      <img class="img-fluid" src="imagenes/nosotros2.jpg" alt="">
                  </div>
                  <div class="col-lg-6 mb-0 d-flex align-items-center">
                      <div class="text-align-left">
                          <h1 class="h1">Proident occaecat</h1>
                          <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                          <p>
                              You are permitted to use this Zay CSS template for your commercial websites. 
                              You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="carousel-item">
          <div class="container">
              <div class="row p-5">
                  <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                      <img class="img-fluid" src="imagenes/nosotros2.jpg" alt="">
                  </div>
                  <div class="col-lg-6 mb-0 d-flex align-items-center">
                      <div class="text-align-left">
                          <h1 class="h1">Repr in voluptate</h1>
                          <h3 class="h2">Ullamco laboris nisi ut </h3>
                          <p>
                              We bring you 100% free CSS templates for your websites. 
                              If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
      <i class="fas fa-chevron-left"></i>
  </a>
  <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
      <i class="fas fa-chevron-right"></i>
  </a>
</div>
<!-- End Banner Hero -->

 


 <!-- Start Featured Product -->
 <section class="bg-light">
  <div class="container py-5">
      <div class="row text-center py-3">
          <div class="col-lg-6 m-auto">
              <h1 class="h1">Featured Product</h1>
              <p>
                  Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  Excepteur sint occaecat cupidatat non proident.
              </p>
          </div>
      </div>
      <div class="row">

      <?php


        $sentencia=$pdo->prepare("SELECT * FROM `productos`");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
       
      ?>

      <?php foreach($listaProductos as $producto){?>

        <div class="col-12 col-md-4 mb-4">
              <div class="card h-100">
                  <a href="shop-single.html">
                      <img src="imagenes/product.jpg" class="card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <ul class="list-unstyled d-flex justify-content-between">
                          <li>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-muted fa fa-star"></i>
                              <i class="text-muted fa fa-star"></i>
                          </li>
                          <li class="text-muted text-right">$<?php echo $producto['precio'];?></li>
                      </ul>
                      <a href="shop-single.html" class="h2 text-decoration-none text-dark"><?php echo $producto['nombre'];?></a>
                      <p class="card-text">
                      <?php echo $producto['descripcion'];?>
                      </p>
                      <p class="text-muted">Reviews (<?php echo $producto['reviews'];?>)

                      <form action="" method="post">
                        <input type="text" name="id" id="id" value="<?php echo openssL_encrypt($producto['id'],COD,KEY);?>">
                        <input type="text" name="nombre" id="nombre" value="<?php echo openssL_encrypt( $producto['nombre'],COD,KEY);?>">
                        <input type="text" name="precio" id="precio" value="<?php echo openssL_encrypt( $producto['precio'],COD,KEY);?>">
                        <input type="text" name="cantidad" id="cantidad" value="<?php echo openssL_encrypt(1,COD,KEY);?>">
                      <a href="#" class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Comprar</a>
                      </form>
                      </p>
                  </div>
              </div>
          </div>

        <?php } ?>

      </div>
  </div>
</section>
<!-- End Featured Product -->

 <!-- Start Categories of The Month -->
 <section class="container py-5">
  <div class="row text-center pt-3">
      <div class="col-lg-6 m-auto">
          <h1 class="h1">Categories of The Month</h1>
          <p>
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
              deserunt mollit anim id est laborum.
          </p>
      </div>
  </div>
  <div class="row">
      <div class="col-12 col-md-4 p-5 mt-3">
          <a href="#"><img src="imagenes/cliente11.jpg" class=" img-fluid border"></a>
          <h5 class="text-center mt-3 mb-3">Watches</h5>
          
      </div>
      <div class="col-12 col-md-4 p-5 mt-3">
          <a href="#"><img src="imagenes/cliente11.jpg" class=" img-fluid border"></a>
          <h2 class="h5 text-center mt-3 mb-3">Shoes</h2>
          
      </div>
      <div class="col-12 col-md-4 p-5 mt-3">
          <a href="#"><img src="imagenes/cliente11.jpg" class="img-fluid border"></a>
          <h2 class="h5 text-center mt-3 mb-3">Accessories</h2>
        
      </div>
  </div>
</section>
<!-- End Categories of The Month -->


    <div class="container">
      <div class="row">
        <div class="col">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis suscipit consequuntur amet ullam quis illum ex beatae maxime omnis officia inventore aut animi adipisci harum fuga, totam modi at temporibus!</div>
        <div class="col">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   

    
<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
  <div class="container">
      <div class="row">

          <div class="col-md-4 pt-5">
              <h2 class="h2 text-success border-bottom pb-3 border-light logo">Disck Groove Shop</h2>
              <ul class="list-unstyled text-light footer-link-list">
                  <li>
                      <i class="fas fa-map-marker-alt fa-fw"></i>
                      123 Consectetur at ligula 10660
                  </li>
                  <li>
                      <i class="fa fa-phone fa-fw"></i>
                      <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                  </li>
                  <li>
                      <i class="fa fa-envelope fa-fw"></i>
                      <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                  </li>
              </ul>
          </div>

          <div class="col-md-4 pt-5">
              <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
              <ul class="list-unstyled text-light footer-link-list">
                  <li><a class="text-decoration-none" href="#">Luxury</a></li>
                  <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                  <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                  <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                  <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                  <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                  <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
              </ul>
          </div>

          <div class="col-md-4 pt-5">
              <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
              <ul class="list-unstyled text-light footer-link-list">
                  <li><a class="text-decoration-none" href="#">Home</a></li>
                  <li><a class="text-decoration-none" href="#">About Us</a></li>
                  <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                  <li><a class="text-decoration-none" href="#">FAQs</a></li>
                  <li><a class="text-decoration-none" href="#">Contact</a></li>
              </ul>
          </div>

      </div>

      <div class="row text-light mb-4">
          <div class="col-12 mb-3">
              <div class="w-100 my-3 border-top border-light"></div>
          </div>
          <div class="col-auto me-auto">
              <ul class="list-inline text-left footer-icons">
                  <li class="list-inline-item border border-light rounded-circle text-center">
                      <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                  </li>
                  <li class="list-inline-item border border-light rounded-circle text-center">
                      <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                  </li>
                  <li class="list-inline-item border border-light rounded-circle text-center">
                      <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                  </li>
                  <li class="list-inline-item border border-light rounded-circle text-center">
                      <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                  </li>
              </ul>
          </div>
          </div>
      </div>
  </div>

  <div class="w-100 bg-black py-3">
      <div class="container">
          <div class="row pt-2">
              <div class="col-12">
                  <p class="text-left text-light">
                      Copyright &copy; 2024 Company Name 
                      | Designed by <a rel="sponsored" href="" target="_blank">Cid Diaz Gilberto</a>
                  </p>
              </div>
          </div>
      </div>
  </div>

</footer>
<!-- End Footer -->

     <!-- Start Script -->
     <script src="js/jquery-1.11.0.min.js"></script>
     <script src="js/jquery-migrate-1.2.1.min.js"></script>
     <script src="js/bootstrap.bundle.min.js"></script>
     <script src="js/templatemo.js"></script>
     <script src="js/custom.js"></script>
     <!-- End Script -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
  
