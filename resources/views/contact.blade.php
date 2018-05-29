@extends('layout')
@section('content')

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
       
        <h2>Contact Us</h2>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="{{ route('contact') }}" class="active">Contact Us</a></li>
        </ol>
        <style>
body {
  background-image: linear-gradient(rgba(72, 153, 226,.8), rgba(72, 153, 226,.8)),url("../images/feature-man-3.jpg") ;
   /*<img src="paris.jpg" alt="Paris" class="center">*/
   /*background: linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.8)),url("../images/feature-man-3.jpg") ;*/
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
   padding: 0px 0px;
  
   /* background: rgba(0,0,0,.5);*/
   /*background-color: #cccccc;*/
}

       /* .bg-overlay  {
             padding: 0px 0px;
    height: 100%;
    width: 100%;

  /* background: linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.8)),url("../images/feature-man-3.jpg") center center no-repeat scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;


 
}</style>
    </section>
    <!-- End Banner area -->

    <!-- Map -->
 <!--   <div class="contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d233533.81021805512!2d90.44069804466251!3d23.85534870087626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1482565625375"></iframe>
         <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
  type="text/javascript"></script>
    </div>
     <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
        async defer></script> -->
    <!-- End Map -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <header class="business-header bg-overlay ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12  text-center">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">

                    <h2 style="text-align: left;" >Contact Info</h2>
                    <p style="text-align: left;"><b>SOLSPOOL TECHNOLOGIES PRIVATE LIMITED</b> <br><br>


<b style="text-align: left;">REGISTERED OFFICE:</b> - <br>

B-4, PLOT NO. 18, PATWARI COLONY,<br>
SUMITRA TOWER, ROAD NO. 14,<br>
JODLA POWER HOUSE ROAD JAIPUR <br>
RAJASTHAN 302013 INDIA<br><br>


<b style="text-align: left;">BRANCH OFFICE :-</b><br>

307/9, 2ND FLOOR, SHAHZADA BAGH <br>
INDUSTRIAL AREA, SHAHZADA BAGH, <br>
NEW DELHI – 110035<br><br>


<b style="text-align: left;">EMAIL ID: -</b> solspooltechno@gmail.com <br>
<b style="text-align: left;">MOB. NO: -</b> 8949410042 <br>
</p>
           <!--         <div class="location">
                        <div class="location_laft">
                            <a class="f_location" href="#">location</a>
                            <a href="#">phone</a>
                            <a href="#">fax</a>
                            <a href="#">email</a>
                        </div>
                        <div class="address">
                            <a href="#">Sector # 10, Road # 05, Plot # 31, Uttara, <br> Dhaka 1230 </a>
                            <a href="#">+880 123 456 789</a>
                            <a href="#">(626) 935-3026</a>
                            <a href="#">info@thethemspro.com</a>
                        </div>
                    </div> -->
                </div>
                <div class="col-sm-6 contact_info send_message">
                    <h2 style="text-align: left;">Send Us a Message</h2>
                    <form class="form-inline contact_box" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="name" class="form-control input_box" placeholder="Name *">
                     <!--   <input type="text" class="form-control input_box" placeholder="Last Name *"> -->
                        <input type="text" name="email" class="form-control input_box" placeholder="Your Email *">
                        <input type="text" name="phone" class="form-control input_box" placeholder="Phone Number">
                       <!-- <input type="text" class="form-control input_box" placeholder="Your Website"> -->
                        <textarea name="message" class="form-control input_box" placeholder="Message"></textarea>
                        <img src="captcha_code_file.php?rand=<?php echo rand(); ?>"
                        id="captchaimg" >
                        <label for="message">Enter the code above here :</label>
                        <input id="6_letters_code" name="6_letters_code" type="text">
                        <br>
                        <button type="submit" class="btn btn-default">Send Message</button>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif  
                    </form>
                </div>
            </div>
        </div>
         </div>
            </div>
        </div>
    </header>
</section>
    </section>
    <!-- End All contact Info -->

    @endsection