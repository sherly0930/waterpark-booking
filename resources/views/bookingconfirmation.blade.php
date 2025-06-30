<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking Successful</title>
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

    <br><br><br>
    
    <p style="font-size:17px; text-align:center; font-size:24px">Thanks Sherly, your booking is confirmed!</p>

    <br>

    <div style="background-color:white; width:50%; margin:auto; text-align:left;">
        <p style="padding-left:25px; padding-top:25px; font-size:17px;"><strong>Date: </strong>{{$date}}</p>
        <p style="padding-left:25px; padding-top:25px; font-size:17px;"><strong>Ticket: </strong></p>
        <table class="table" style="font-size:14px; border-radius:5px; border: 3px solid #ccc;">
            <thead>
                <tr>
                    <th scope="col">Ticket Type</th>
                    <th scope="col">Price (RM)</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Adult (MyKad)<br>[130cm above]</td>
                    <td style="padding-left:26px;">40.00</td>
                    <td style="padding-left:29px;">1</td>
                </tr>
            </tbody>
        </table>
        <p style="padding-left:25px; padding-top:25px; font-size:17px;"><strong>Name: </strong>{{$name}}</p>
        <p style="padding-left:25px; padding-top:25px; font-size:17px;"><strong>IC: </strong>{{$ic}}</p>
        <p style="padding-left:25px; padding-top:25px; font-size:17px;"><strong>Contact Number: </strong>{{$contact}}</p>
        <p style="padding-left:25px; padding-top:25px; font-size:17px;"><strong>Email</strong>: </strong>{{$email}}</p>
        <p style="padding-left:25px; padding-top:25px; font-size:17px;"><strong>Country: </strong>{{$country}}</p>
        <br><br>
    </div>
  
    
    <br><br><br><br><br><br>

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