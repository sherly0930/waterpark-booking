<!DOCTYPE html>
<html lang="en">
<head>
  <title>Splashtacular Water Park Homepage</title>
  <!-- Bootstrap’s compiled CSS and JS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Link Boostrap CSS file in head tag-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Dependencies for date picker -->
   <!-- Bootstrap CSS -->
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <!-- Font Awesome CSS -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
   <!-- Bootstrap Datetimepicker CSS -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <!-- Moment.js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
   <!-- Bootstrap JS -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <!-- Bootstrap Datetimepicker JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

  <!-- Font Awesome for fa-phone & fa-envelope icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />
  
  <!-- Load all Font Awesome styles -->
  <link href="path_to_css_files/all.css" rel="stylesheet">

  <!-- Quantity increment btn -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    /* navbar */
  .logo {
    width: 80px;
    height: 80px;
    margin-right: auto;
    margin-top: 10px; 
    /*the margin top pushes the logo down by 10 pixels*/
    border-radius: 50%;;
  }  
  .container {
    list-style: none;
    display: flex;
    font-size: 23px;
    width: 100%;
  }
.items {
    padding-left: 24px;
    padding-top: 5px;
    margin-top: 24px;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 20px;
  }
  .items a {
    color:black;
    text-decoration: none;
    padding-left: 3px;
  }
.items a:hover {
    color: purple;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
}
/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.2s ease;
}
.active {
  background-color: #717171;
}
/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 4s;
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* Footer */
.map-container-2{
  overflow:hidden;
  padding-bottom:56.25%;
  position:relative;
  height:0;
}
.map-container-2 iframe{
  left:0;
  top:0;
  height:100%;
  width:100%;
  position:absolute;
}

/* Newsletter */
.newsletter {
padding: 80px 0;
}
.newsletter .content {
max-width: 650px;
margin: 0 auto;
text-align: center; 
position: relative;
z-index: 2; 
}
.newsletter .content h2 {
color: #243c4f;
margin-bottom: 40px; 
}
.newsletter .content .form-control {
height: 50px;
border-color: #ffffff;
border-radius:0;
font-size: 14px;
}
.newsletter .content.form-control:focus {
box-shadow: none;
border: 2px solid #243c4f;
}
.newsletter .content .btn {
min-height: 50px; 
border-radius:0;
background: #243c4f;
color: #fff;
font-weight:600;
font-size:14px;
}

/* Social media btn */
$redColor: rgba(244,67,54,1);
$blueColor:rgba(33,150,243,1);

.flex-center {
  width: 100%;
  min-height: 50vh;
  
  background: #000;
  
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.icon-3d {
  padding: 10px;
  -webkit-animation: icon3d 200ms 10;
  animation: icon3d 200ms 10;
  color: #fff;
  &:hover {
    -webkit-animation: icon3d 200ms infinite;
          animation: icon3d 200ms infinite;
  }
}

@keyframes icon3d {
  0% {
    text-shadow: 5px 4px $redColor, -5px -6px $blueColor;
  }
  25% {
    text-shadow: -5px -6px $redColor, 5px 4px $blueColor;
  }
  50% {
    text-shadow: 5px -4px $redColor, -8px 4px $blueColor;
  }
  75% {
    text-shadow: -8px -4px $redColor, -5px -4px $blueColor;
  }
  100% {
    text-shadow: -5px 0 $redColor, 5px -4px $blueColor;
  }
}
.c-item {
  height: 480px;
}
.c-img {
  height: 100%;
  object-fit: cover;
  filter: brightness(0.7);
}
</style>

<body style="background-color: rgba(226, 192, 246, 0.863)">

  <!-- Navbar-->
  <ul class="container">
    <img src="{{ asset('img/CompanyLogo.png') }}" alt="Company Logo" class="logo">
    <p style="margin-right: 290px; font-family: Lucida Handwriting; padding-top: 32px">Splashtacular Water Park</p>
      <li class="items" style="padding-right:25px;"><a href="/"> Home </a></li>
      <li class="items" style="padding-right:25px;"><a href="secondpage"> Attraction </a></li>
      <li class="items" style="padding-right:25px;"><a href="thirdpage"> Booking </a> </li>
  </ul>

  <!-- Slideshow -->
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="{{ asset('img/FirstPhoto.jpeg') }}" alt="Company Logo" style="width:100%">
    </div>
      
    <div class="mySlides fade">
      <img src="{{ asset('img/SecondPhoto.jpg') }}" alt="Company Logo" style="width:100%">
    </div>
      
    <div class="mySlides fade">
      <img src="{{ asset('img/ThirdPhoto.jpg') }}" alt="Company Logo" style="width:100%">
    </div>

    <br>

    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>

    <script>
    let slideIndex = 0;
    showSlides();
      
    function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
  </div>

  <br><br><br>

  <!-- A world of awesome moments -->
  <div style="padding-left:20px; background-color: rgba(148, 84, 171, 0.865); border-radius:5px; padding:5px;">
    <br>
      <h2 style="color: white">A World of Awesome Moments!</h2>
      <br>
      <h4 style="color: white">Cocooned by lush tropical jungle, natural hot springs, 400 million-year-old limestone hills and 88 attractions from 10 amazing parks. 
        Sunway Lost World Of Tambun makes a unique eco-adventure excursion for visitors of all ages.</h4>
    <br>
  </div>

  <br><br><br><br><br><br><br>
  
  <div>
    <p style="text-align:center; font-size:30px">ADRENALINE-PUMPING ADVENTURE</p>
    <h4 style="text-align:center">Embrace the thrill of riding towering waves at Stormy Seas, get soaked by a colossal water barrel at Tsunami Typhoon, 
      or conquer your fears on the heart-stopping 40-degree plunge of Whirlwind Whizz.</h4>
  </div>
      <br>

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    
        <div class="carousel-inner">
          <div class="carousel-item active c-item">
            <img src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTExL2ZsNTIyMzI0NzMwNjAtaW1hZ2UuanBn.jpg" class="d-block w-100 c-img" alt="Slide 1">
            <div class="carousel-caption top-0 mt-4">
              <!-- <p class="mt-5 fs-3 text-uppercase">Discover the hidden world</p> -->
              <h1 class="display-1 fw-bolder text-capitalize">Twisty Tube</h1>
              <a href="secondpage" class="btn btn-primary px-4 py-2 fs-5 mt-5">Explore More Attractions!</a>
            </div>
          </div>
          <div class="carousel-item c-item">
            <img src="https://img.freepik.com/premium-photo/people-having-fun-splashing-water-after-going-down-water-slide_368093-7336.jpg?w=826" class="d-block w-100 c-img" alt="Slide 2">
            <div class="carousel-caption top-0 mt-4">
              <p class="display-1 fw-bolder text-capitalize">Sunshine Trail Racer</p>
              <a href="secondpage" class="btn btn-primary px-4 py-2 fs-5 mt-5">Explore More Attractions!</a>
            </div>
          </div>
          <div class="carousel-item c-item">
            <img src="https://live.staticflickr.com/7821/46317745285_34a5e0db9b_b.jpg" class="d-block w-100 c-img" alt="Slide 3">
            <div class="carousel-caption top-0 mt-4">
              <p class="display-1 fw-bolder text-capitalize">Little Splash Boat</p>
              <a href="secondpage" class="btn btn-primary px-4 py-2 fs-5 mt-5">Explore More Attractions!</a>>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <!-- Footer -->
  <footer style="background-color:rgba(148, 84, 171, 0.865); color:white">
  <footer class="row">

    <!-- 1st row 1st column -->
    <div class="col-6">
      <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px; padding-left:15px"">
        <br>
        <!-- <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d254999.3989121986!2d101.56588785329666!3d2.995827734062484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d2.9129966!2d101.855325!4m5!1s0x31cc4c88dded3125%3A0xdb654cc77af0cdbc!2sSunway%20Lagoon%2C%203%2C%20Jalan%20PJS%2011%2F11%2C%20Bandar%20Sunway%2C%2047500%20Subang%20Jaya%2C%20Selangor%2C%20Malaysia!3m2!1d3.0693932!2d101.6067533!5e0!3m2!1sen!2sus!4v1699775422800!5m2!1sen!2sus" width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
        <br><br><br><br>

        <p><h4 style="padding-left:5px;">No.2, Persiaran Splash, Aquaverse City, 56100 Cheras, Kuala Lumpur.</h4></p>
        <br>
        <p style="font-size:20px; padding-left:5px">Opening hours</p>
        <p style="font-size:14.6px; padding-left:5px;">Monday to Friday: 12pm-8pm</p>
        <p style="font-size:14.6px; padding-left:5px;">Weekend & Public Holiday: 11am-8pm</p>
      </div>
    </div>
    
    <!-- 1st row 2nd column -->
    <div class="col-6" style="font-color:white">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->

      <section class="newsletter">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="content">
                <h2 style="color:white">SUBSCRIBE TO OUR NEWSLETTER</h2>
                <div class="input-group">
                  <input type="email" class="form-control" placeholder="Enter your email">
                  <span class="input-group-btn">
                    <button class="btn" type="submit">Subscribe Now</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        </section>

      <div>
        <p style="font-size:20px">About Us</p>
        <p style="padding-right:40px;font-size:13.6px">Splashtacular Water Park was founded in 2015, creating a water park that would provide families with an affordable and fun-filled day out. 
          We quickly became a popular destination for families from all over the region. In 2019, we underwent a major expansion, adding new water slides, pools, and attractions. 
          Today, Splashtacular Water Park is one of the largest and most popular water parks in the region.</p>
      </div>

      <br><br><br>

      <div>
        <p style="font-size:18px">Contact Us</p>
      </div>
      
      <!-- fa-envelope class from Font Awesome to represent an email icon -->
      <i class="fa fa-envelope fa-4x icon-3d fa-sm" style="color:white; font-size:16px; padding-left:4px;">&nbsp;&nbsp;splashtacularwpark@gmail.com</i>
      <!-- fa-phone class from Font Awesome to represent a phone icon -->
      <p><i class="fa fa-phone fa-4x icon-3d" style="font-size:16px; padding-left:4px;">&nbsp;&nbsp;03-90827371</i></p>
    </div>


  </footer>
  </footer>

</body>
<html>
    