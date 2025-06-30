<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rides & Attractions</title>
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

    /*Rides & attractions cards */  
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
        background-color: #f9f6f2;
}
.card-img-top{
    border-radius: 50px;
    padding: 20px;
}
.card{
    border-radius: 30px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
}
.card-body{
    padding: 25px;
    margin-top: -15px;
}

    /* Buy now button */
    .btn-primary{
        border-radius: 70px;
        width: 225px;
        height: 50px;
        
    }
    .btn-primary:hover{
        background-color:red;
        border: none;
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
            <li class="items" style="padding-right:25px;"><a href="fourthpage"> Booking </a> </li>
    </ul>

    <br><br><br><br>

    <p class="text-center" style="font-size:33px;"><strong>Rides & Attractions</strong></p>
    <br><br>

    <!-- Rides & Attractions cards-->
    <div class="container">
        <br><br>
        <!-- 1st row -->
        <div class="row">
            <div class="col-4">
                <div class="card" style="padding-bottom:27px;">
                    <img src="https://static.wixstatic.com/media/debb52_9d6c5c771de04e6a9b6b9028c9278aab~mv2.jpg/v1/fill/w_882,h_587,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/debb52_9d6c5c771de04e6a9b6b9028c9278aab~mv2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:20px; padding-left:15px;">TWISTY TUBE</h5>
                        <p class="card-text" style="font-size:15px; padding-left:15px; padding-right:15px;">This classic waterslide doesn't require a mat or tube, just your own body! 
                            You'll race down the open view slide before dropping into a splash pool. 
                            Be prepared for unexpected twists and turns! This slide is fun for all ages.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-4">
                <div class="card" style="padding-bottom:28px;">
                    <img src="https://img.freepik.com/premium-photo/people-having-fun-splashing-water-after-going-down-water-slide_368093-7336.jpg?w=826" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:20px; padding-left:15px;">SUNSHINE TRAIL RACER</h5>
                        <p class="card-text" style="font-size:15px; padding-left:15px; padding-right:15px;">The Sunshine Trail Racer gives you a thrill experience of a lifetime as you and your partner race down this coaster at full speed! 
                            Feel the gravitational pull as you twist and turn through the track, leaving your adrenaline pumping.</p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="padding-bottom:29px;">
                    <img src="https://live.staticflickr.com/7821/46317745285_34a5e0db9b_b.jpg" class="card-img-top" alt="..." height="245px;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:20px; padding-left:15px;">LITTLE SPLASH BOAT</h5>
                        <p class="card-text" style="font-size:15px; padding-left:15px; padding-right:15px;">A gentle boat ride that is perfect for young children and families. 
                            The ride takes you on a journey through a series of small waterfalls and water sprays. 
                            The boat gets a little bit wet, but it is all in good fun. The ride ends with a splash into a larger pool.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <!-- 2nd row -->

    <div class="container">
        <br><br>
        <!-- 1st row -->
        <div class="row">
            <div class="col-4">
                <div class="card" style="padding-bottom:27px;">
                    <img src="https://bloximages.newyork1.vip.townnews.com/fairfaxtimes.com/content/tncms/assets/v3/editorial/a/bb/abb014ae-f31d-11ec-89d5-c70beafe44cd/62b4a9122a0ef.image.jpg?resize=769%2C500" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:20px; padding-left:15px;">BUCKET SPLASH KINGDOM</h5>
                        <p class="card-text" style="font-size:15px; padding-left:15px; padding-right:15px;">Cool off and get drenched at the Bucket Splash Kingdom! 
                            Every 1-2 minutes, a big bucket of water dumps from above, soaking everyone below. 
                            It's the perfect place to have some fun and get splashed.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-4">
                <div class="card" style="padding-bottom:23px;">
                    <img src="http://www.mondialpools.com/newsite/images/mondial/mondialpools-slides-2-758x505.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:20px; padding-left:15px;">KIDS MANIA</h5>
                        <p class="card-text" style="font-size:15px; padding-left:15px; padding-right:15px;">A towering water slide starts at the top, sending riders plummeting down a steep drop, feeling the adrenaline rush as they fall. 
                            The slide ends with a refreshing splash into the pool below.</p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="padding-bottom:24px;">
                    <img src="http://www.mondialpools.com/newsite/images/mondial/ws-gal/mondialpools-water-slides-gal-1-635x506.jpg" class="card-img-top" alt="Blast Twister" height="245px;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:20px; padding-left:15px;">BLAST TWISTER</h5>
                        <p class="card-text" style="font-size:15px; padding-left:15px; padding-right:15px;">Riders start at the top of the slide and race down, feeling the wind in their hair and the water rushing over them. 
                            The slide 40 feet tall and 200 feet long is accessible to riders of all heights and weights.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <!-- 3rd row -->
    <div class="container">
        <br><br>
        <!-- 1st row -->
        <div class="row">
            <div class="col-4">
                <div class="card" style="padding-bottom:27px;">
                    <img src="https://bangiwonderland.com.my/wp-content/uploads/2023/07/IMG_2023-7-10-170411.jpg" class="card-img-top" alt="..." height="245px;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:20px; padding-left:15px;">TIDAL WAVE POOL</h5>
                        <p class="card-text" style="font-size:15px; padding-left:15px; padding-right:15px;">The ultimate artificial wave pool is the perfect place to relax and have fun with family and friends. 
                            Take a break from the thrill rides and enjoy the waves, swim and splash around, or simply float in a tube under the watchful eye of lifeguards.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-4">
                <div class="card" style="padding-bottom:49px;">
                    <img src="https://i1.wp.com/sunwaylagoon.com/wp-content/uploads/2021/07/WaterPark-0028-1.jpg?w=800&ssl=1" class="card-img-top" alt="..." height="246px;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:20px; padding-left:15px;">THE VORTEX</h5>
                        <p class="card-text" style="font-size:15px; padding-left:15px; padding-right:15px;">Descend from an 11-story tower into the swirling vortex of the Vuvuzela, the largest water slide in Malaysia. 
                            Experience the thrill of the rapids and the plunge into the unknown.</p>
                    </div>  
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="padding-bottom:69px;">
                    <img src="https://wetworld.my/shah-alam/wp-content/uploads/sites/11/2016/01/10-Pirate-Challenge.jpg" class="card-img-top" alt="Blast Twister" height="247px;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:20px; padding-left:15px;">ROPE CROSSING</h5>
                        <p class="card-text" style="font-size:15px; padding-left:15px; padding-right:15px;">Players must use their balance and agility to cross a series of hanging ropes suspended over the water, 
                            feeling the exhilaration as they conquer each obstacle.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br>

        <div class="row">
            <div class="col-5">
                <img src="https://splashoutlangkawi.com/home/wp-content/uploads/2020/06/feature_01.png" style="padding-left:410px">
            </div>
            <div class="col-7">
                <p style="font-size:24px">Get your tickets now!</p>
                <a href="thirdpage" class="btn btn-primary" style="font-size:18px; padding-top:10px">Buy now!</a>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- Footer -->
    <footer style="background-color:rgba(148, 84, 171, 0.865); color:white">
    <footer class="row">
  
      <!-- 1st row 1st column -->
      <div class="col-6">
        <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px; padding-left:15px"">
          <br>
          <!-- <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d254999.3989121986!2d101.56588785329666!3d2.995827734062484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d2.9129966!2d101.855325!4m5!1s0x31cc4c88dded3125%3A0xdb654cc77af0cdbc!2sSunway%20Lagoon%2C%203%2C%20Jalan%20PJS%2011%2F11%2C%20Bandar%20Sunway%2C%2047500%20Subang%20Jaya%2C%20Selangor%2C%20Malaysia!3m2!1d3.0693932!2d101.6067533!5e0!3m2!1sen!2sus!4v1699775422800!5m2!1sen!2sus" width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <br><br>
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
</html>