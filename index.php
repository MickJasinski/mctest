<!DOCTYPE html>
<?php error_reporting(0);

if(isset($_POST['submit'])){
  $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
  $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
  $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
  $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
  if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
    $name_error = 'Invalid name';
  }
  if(!preg_match("/^[A-Za-z .'-]+$/", $subject)){
    $subject_error = 'Invalid subject';
  }
  if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
    $email_error = 'Invalid email';
  }
  if(strlen($message) === 0){
    $message_error = 'Your message should not be empty';
  }
}

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>micky.click - Web Designer and Developer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="aos/aos.css">
  <link rel="stylesheet" href="css/timeline.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="container-fluid">

  <div class="navbar">

    <!-- desktop navigation -->
    <div class="desktop-nav">
      <ul>
        <li>
          <a href="#home"><img src="icons/home.svg" alt="Home" style="filter:url(#dropshadow)"></a>
        </li>
        <li>
          <a href="#services" class="arrow"><img src="icons/info.svg" alt="What I do?" style="filter:url(#dropshadow)"></a>
        </li>
        <li>
          <a href="#lifecycle"><img src="icons/cycle.svg" alt="Project lifecycle" style="filter:url(#dropshadow)"></a>
        </li>
        <li>
          <a href="#contact"><img class="mail" src="icons/mail.svg" alt="Contact" style="filter:url(#dropshadow)"></a>
        </li>
      </ul>
    </div>

  </div>

  <div id="home">
    <div class="hometop">
      <div class="typing">
        <h1><span class="txt-rotate" data-period="2000" data-rotate='[ "Design.", "Development.", "Deployment.", "Maintenance.", "Web project fit to your needs." ]'></span></h1>
      </div>
    </div>
  </div>

  <!-- services -->
  <div id="services" class="screen">
    <div id="space">
      <div class="textbox tb-1" data-aos="fade-up" data-aos-delay="200" data-aos-easing="ease-in-out">
        <p>The Universe</p>
      </div>
      <div class="textbox tb-2" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-out">
        <p>of</p>
      </div>
      <div class="textbox tb-3" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease-in-out">
        <p>Possibilities</p>
      </div>
    </div>
    <div class="container">
      <div class="servicebox halfscreen row">
        <div class="serviceH col-sm-12 col-lg-4" data-aos="fade-left" data-aos-delay="200" data-aos-easing="ease-out">
          <img src="icons/design.svg" alt="Design">
          <h2>DESIGN</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia quisquam laborum illo cum, magni harum aut ad
            reiciendis. In quos incidunt provident.</p>
        </div>
        <div class="serviceH col-sm-12 col-lg-4" data-aos="fade-left" data-aos-delay="400" data-aos-easing="ease-out">
          <img src="icons/development.svg" alt="Design">
          <h2>DEVELOPMENT</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia quisquam laborum illo cum, magni harum aut ad
            reiciendis. In quos incidunt provident.</p>
        </div>
        <div class="serviceH col-sm-12 col-lg-4" data-aos="fade-left" data-aos-delay="600" data-aos-easing="ease-out">
          <img src="icons/deployment.svg" alt="Design">
          <h2>DEPLOYMENT</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia quisquam laborum illo cum, magni harum aut ad
            reiciendis. In quos incidunt provident.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- lifecycle -->
  <div id="lifecycle" class="">
    <div class="container">
      <div style="text-align: center;">
        <h2 class="pt-4">PROJECT'S LIFECYCLE</h2>
        <h4 class="pb-3 border-bottom mb-5">SIMPLY EXPLAINED</h4>
      </div>
      <div class="sections">
        <!--1st section-->
        <div class="row align-items-center how-it-works d-flex">
          <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
            <div class="timepoint font-weight-bold">1</div>
          </div>
          <div class="col-6" data-aos="fade-left" data-aos-delay="200" data-aos-easing="ease-out">
            <h5>DISCOVERY</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis itaque inventore minima rerum enim. Voluptatum, esse ea nostrum laudantium repellendus dignissimos a sapiente eaque eum quaerat neque laborum, ad quisquam amet. Autem dolore aperiam cumque in ipsa, laudantium exercitationem aliquam, nam magni, accusamus unde?</p>
          </div>
        </div>
        <!--path between 1-2-->
        <div class="row timeline">
          <div class="col-2">
            <div class="corner top-right"></div>
          </div>
          <div class="col-8">
            <hr/>
          </div>
          <div class="col-2">
            <div class="corner left-bottom"></div>
          </div>
        </div>
        <!--2nd section-->
        <div class="row align-items-center justify-content-end how-it-works d-flex">
          <div class="col-6 text-right" data-aos="fade-right" data-aos-delay="300" data-aos-easing="ease-out">
            <h5>DESIGN</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas distinctio libero cupiditate quae dolorum laborum qui enim quibusdam esse, eos optio debitis error facere nam, sapiente, inventore consectetur! Mollitia ab facere vitae architecto, porro animi. Commodi doloribus fugiat facere suscipit?</p>
          </div>
          <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
            <div class="timepoint font-weight-bold">2</div>
          </div>
        </div>
        <!--path between 2-3-->
        <div class="row timeline">
          <div class="col-2">
            <div class="corner right-bottom"></div>
          </div>
          <div class="col-8">
            <hr/>
          </div>
          <div class="col-2">
            <div class="corner top-left"></div>
          </div>
        </div>
        <!--3rd section-->
        <div class="row align-items-center how-it-works d-flex">
          <div class="col-2 text-center full2 d-inline-flex justify-content-center align-items-center">
            <div class="timepoint font-weight-bold">3</div>
          </div>
          <div class="col-6" data-aos="fade-left" data-aos-delay="400" data-aos-easing="ease-out">
            <h5>DEVELOPMENT</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium inventore, id aperiam tempore, saepe labore odit cupiditate aliquam, voluptas iusto fugit iste et facere aut repudiandae voluptatum! Eos repellat accusantium, dolor obcaecati aut corporis doloremque sit voluptatem, aliquam libero nostrum voluptatum ducimus! Ex perferendis unde non illum possimus.</p>
          </div>
          <div class="col-2">
            <div class="corner left-bottom"></div>
          </div>
        </div>
        <!--path between 3-4-->
        <div class="row timeline">
          <div class="col-2">
            <div class="corner top-right"></div>
          </div>
          <div class="col-8">
            <hr/>
          </div>
          <div class="col-2">
            <div class="corner left-bottom"></div>
          </div>
        </div>
        <!--4th section-->
        <div class="row align-items-center justify-content-end how-it-works d-flex">
          <div class="col-6 text-right" data-aos="fade-right" data-aos-delay="500" data-aos-easing="ease-out">
            <h5>DEPLOYMENT</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe perferendis non exercitationem quo blanditiis voluptatum dolores ullam, minus quis cumque quae accusamus laborum veritatis delectus laboriosam labore cum minima. Placeat quibusdam ab id ullam natus sed.</p>
          </div>
          <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
            <div class="timepoint font-weight-bold">4</div>
          </div>
        </div>
        <!--path between 4-5-->
        <div class="row timeline">
          <div class="col-2">
            <div class="corner right-bottom"></div>
          </div>
          <div class="col-8">
            <hr/>
          </div>
          <div class="col-2">
            <div class="corner top-left"></div>
          </div>
        </div>
        <!--5rd section-->
        <div class="row align-items-center how-it-works d-flex">
          <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
            <div class="timepoint font-weight-bold">5</div>
          </div>
          <div class="col-6" data-aos="fade-left" data-aos-delay="600" data-aos-easing="ease-out">
            <h5>MAINTENANCE</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem deserunt quo accusamus aliquid dignissimos! Rem natus sequi architecto enim, pariatur, alias laborum voluptas odit nam laboriosam assumenda ullam quasi tenetur, facere hic consequuntur eos? Illum inventore doloribus corrupti beatae veniam consectetur omnis.</p>
          </div>
          <div class="col-2">
            <div class="corner left-bottom"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="screen">

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      <label for="name">Name:</label><br>
      <input type="text" name="name">
      <p><?php if(isset($name_error)) echo $name_error; ?></p>
      <label for="subject">Subject:</label><br>
      <input type="text" name="subject">
      <p><?php if(isset($subject_error)) echo $subject_error; ?></p>
      <label for="email">Email:</label><br>
      <input type="text" name="email">
      <p><?php if(isset($email_error)) echo $email_error; ?></p>
      <label for="message">Message:</label><br>
      <textarea name="message"></textarea>
      <p><?php if(isset($message_error)) echo $message_error; ?></p>
      <input type="submit" name="submit" value="Submit">
      <?php 
        if(isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
          $to = 'youremail@addres.com'; // edit here
          $body = " Name: $name\n E-mail: $email\n Message:\n $message";
          if(mail($to, $subject, $body)){
            echo '<p style="color: green">Message sent</p>';
          }else{
            echo '<p>Error occurred, please try again later</p>';
          }
        }
      ?>
    </form>

  </div>

  <!-- scripts -->
  <script src="lib/jquery.min.js"></script>
  <script src="lib/particles.min.js"></script>
  <script src="js/particlesEditor.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script src="aos/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="js/scripts.js"></script>

</body>

</html>