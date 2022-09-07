<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Paul Pfeiffer Teacher Writer</title>
</head>

<body id="home" data-spy="scroll" data-target="#main-nav">
  <!-- START HERE -->

  <nav class="navbar navbar-expand-md navbar-light fixed-top py-4" id="main-nav">
    <div class="container">
      <a href="#home" class="navbar-brand">
        <img src="img/mlogo.png" width="50" height="50" alt="">
        <h3 class="d-inline align-middle">Misuxe</h3>
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#home" class="nav-link"><?php echo "arse lickers" ?>e</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About Me</a>
          </li>
          <li class="nav-item">
            <a href="#authors" class="nav-link">Courses</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- SHOWCASE -->

  <section id="showcase" class="py-5">
    <div class="primary-overlay text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center">
            <h1 class="display-2 mt-5 pt-5">
              Do what you dream of...
            </h1>
            <p class="lead">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, aliquam!
            </p>
            <a href="#" class="btn btn-outline-secondary btn-lg text-white">
            <i class="fas fa-arrow-right"></i>  Read More
            </a>

          </div>
          <div class="col-lg-6">
            <img src="img/book.png" alt="" class="img-fluid d-none d-lg-block">
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- NEWSLETTER -->

  <section id="newsletter" class="bg-dark text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <input type="text" class="form-control form-control-lg mb-resp" placeholder="Enter Name">
        </div>
        <!-- mb-resp to add space to the form when it stacks in  smaller screens -->
        <div class="col-md-4">
          <input type="email" class="form-control form-control-lg mb-resp" placeholder="Enter Email">
        </div>
        <div class="col-md-4">
          <button class="btn btn-primary btn-lg btn-block">
            <i class="fas fa-envelope-open-o"></i>Subscribe
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- BOXES -->

<section id="boxes" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card text-center border-primary mb-resp">
          <div class="card-body">
            <h3 class="text-primary">Be Better</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, ipsum.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center text-white bg-primary mb-resp">
          <div class="card-body">
            <h3 class="">Be Better</h3>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, ipsum.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center border-primary mb-resp">
          <div class="card-body">
            <h3 class="text-primary">Be Faster</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, ipsum.</p>
          </div>
        </div>
      </div>
        <div class="col-md-3">
          <div class="card text-center text-white bg-primary">
            <div class="card-body">
              <h3 class="">Be Stronger</h3>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, ipsum.</p>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<section id="about" class="py-5 text-center bg-light">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="info-header mb-5">
          <h1 class="text-primary pb-3">
            Why This Book?
          </h1>
          <p class="lead pb-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, obcaecati!
          </p>
        </div>

        <!-- ACCORDIAN -->
        <div id="accordian">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">
                <div href="#collapse1" data-toggle="collapse" data-parent="#accordian">
                  <i class="fas fa-arrow-circle-down"></i> Get Inspired
                </div>
              </h5>
            </div>
            <div id="collapse1" class="collapse show">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, architecto eveniet itaque, nulla dolores voluptas et deleniti sit autem harum, vel, a error fugit pariatur voluptates corrupti natus! Voluptas ipsam omnis dignissimos suscipit asperiores repellendus, ut dicta reprehenderit, sed minima repudiandae vitae, cupiditate enim! Aut culpa nesciunt accusamus quisquam iusto.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">
                <div href="#collapse2" data-toggle="collapse" data-parent="#accordian">
                  <i class="fas fa-arrow-circle-down"></i> Gain the knowledge
                </div>
              </h5>
            </div>
            <!-- remove show from the class as we only want the first to show -->
            <div id="collapse2" class="collapse">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, architecto eveniet itaque, nulla dolores voluptas et deleniti sit autem harum, vel, a error fugit pariatur voluptates corrupti natus! Voluptas ipsam omnis dignissimos suscipit asperiores repellendus, ut dicta reprehenderit, sed minima repudiandae vitae, cupiditate enim! Aut culpa nesciunt accusamus quisquam iusto.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">
                <div href="#collapse3" data-toggle="collapse" data-parent="#accordian">
                  <i class="fas fa-arrow-circle-down"></i> Open your mind
                </div>
              </h5>
            </div>
            <div id="collapse3" class="collapse">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, architecto eveniet itaque, nulla dolores voluptas et deleniti sit autem harum, vel, a error fugit pariatur voluptates corrupti natus! Voluptas ipsam omnis dignissimos suscipit asperiores repellendus, ut dicta reprehenderit, sed minima repudiandae vitae, cupiditate enim! Aut culpa nesciunt accusamus quisquam iusto.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- authors -->

<section id="authors" class="my-5 text-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="info-header mb-5">
          <h1 class="text-primary pb-3">
            Meet The Authors
          </h1>
          <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati odio molestias adipisci cupiditate omnis fuga.
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
            <h3>Susan Williams</h3>
            <h5 class="class-muted">Lead Writer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt magnam cum quod nisi. Sint, impedit.</p>
            <div class="d-flex justify-content-center">
              <div class="p-4">
                <a href="http://facebook.com">
                  <i class="fab fa-facebook"></i>
                </a>
              </div>
              <div class="p-4">
                <a href="http://twitter.com">
                  <i class="fab fa-twitter"></i>
                </a>

              </div>

              <div class="p-4">
                <a href="http://instagram.com">
                  <i class="fab fa-instagram"></i>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="img/person2.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
            <h3>Susan Williams</h3>
            <h5 class="class-muted">Lead Writer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt magnam cum quod nisi. Sint, impedit.</p>
            <div class="d-flex justify-content-center">
              <div class="p-4">
                <a href="http://facebook.com">
                  <i class="fab fa-facebook"></i>
                </a>
              </div>
              <div class="p-4">
                <a href="http://twitter.com">
                  <i class="fab fa-twitter"></i>
                </a>

              </div>

              <div class="p-4">
                <a href="http://instagram.com">
                  <i class="fab fa-instagram"></i>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
            <h3>Susan Williams</h3>
            <h5 class="class-muted">Lead Writer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt magnam cum quod nisi. Sint, impedit.</p>
            <div class="d-flex justify-content-center">
              <div class="p-4">
                <a href="http://facebook.com">
                  <i class="fab fa-facebook"></i>
                </a>
              </div>
              <div class="p-4">
                <a href="http://twitter.com">
                  <i class="fab fa-twitter"></i>
                </a>

              </div>

              <div class="p-4">
                <a href="http://instagram.com">
                  <i class="fab fa-instagram"></i>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
            <h3>Susan Williams</h3>
            <h5 class="class-muted">Lead Writer</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt magnam cum quod nisi. Sint, impedit.</p>
            <div class="d-flex justify-content-center">
              <div class="p-4">
                <a href="http://facebook.com">
                  <i class="fab fa-facebook"></i>
                </a>
              </div>
              <div class="p-4">
                <a href="http://twitter.com">
                  <i class="fab fa-twitter"></i>
                </a>

              </div>

              <div class="p-4">
                <a href="http://instagram.com">
                  <i class="fab fa-instagram"></i>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- CONTACT -->
<section id="contact" class="bg-light py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <h3>Get in touch</h3>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, rerum.</p>
        <form action="">
          <div class="input-group input-group-lg mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="input-group input-group-lg mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-envelope"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Email">
          </div>
          <div class="input-group input-group-lg mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-pencil-alt"></i>
              </span>
            </div>
            <textarea class="form-control" placeholder="Message" rows="5"></textarea>
          </div>

          <input type="submit" name="" value="submit" class="btn btn-primary btn-block btn-lg">
        </form>
      </div>
      <div class="col-lg-3 align-self-center">
        <img src="img/mlogo.png" alt="" class="img-fluid">
      </div>
    </div>
  </div>
</section>


<!-- FOOTER -->
<footer id="main-footer" class="py-5 bg-primary  text-white">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-6 ml-auto">
        <p class="lead">
          Copywrite &copy <span id="year"></span>
        </p>
      </div>
    </div>
  </div>
</footer>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    // init scrollspy
    $('body').scrollspy({target: '#main-nav'});

    //smoothscroll
    //smooth scrollling
$('#main-nav a').on('click', function (event) {
  if(this.hash !== "") {
    event.preventDefault();

    const hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function () {
      window.location.hash = hash;
    });
  }
});
  </script>
</body>

</html>
