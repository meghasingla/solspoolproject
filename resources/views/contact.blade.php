@extends('layout')
@section('content')

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Contact Us</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#" class="active">Contact Us</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Map -->
    <div class="contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d233533.81021805512!2d90.44069804466251!3d23.85534870087626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1482565625375"></iframe>
         <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
  type="text/javascript"></script>
    </div>
     <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
        async defer></script>
    <!-- End Map -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>Contact Info</h2>
                    <p><b>SOLSPOOL TECHNOLOGIES PRIVATE LIMITED</b> <br><br>


<b>REGISTERED OFFICE:</b> - <br>

B-4, PLOT NO. 18, PATWARI COLONY,<br>
SUMITRA TOWER, ROAD NO. 14,<br>
JODLA POWER HOUSE ROAD JAIPUR <br>
RAJASTHAN 302013 INDIA<br><br>


<b>BRANCH OFFICE :-</b><br>

307/9, 2ND FLOOR, SHAHZADA BAGH <br>
INDUSTRIAL AREA, SHAHZADA BAGH, <br>
NEW DELHI – 110035<br><br>


<b>EMAIL ID: -</b> SOLSPOOLTECHNO@GMAIL.COM <br>
<b>MOB. NO: -</b> 8949410042 <br>
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
                    <h2>Send Us a Message</h2>
                    <form class="form-inline contact_box">
                        <input type="text" class="form-control input_box" placeholder="First Name *">
                     <!--   <input type="text" class="form-control input_box" placeholder="Last Name *"> -->
                        <input type="text" class="form-control input_box" placeholder="Your Email *">
                        <input type="text" class="form-control input_box" placeholder="Phone Number">
                       <!-- <input type="text" class="form-control input_box" placeholder="Your Website"> -->
                        <textarea class="form-control input_box" placeholder="Message"></textarea>
                        <img src="captcha_code_file.php?rand=<?php echo rand(); ?>"
                        id="captchaimg" >
                        <label for="message">Enter the code above here :</label>
                        <input id="6_letters_code" name="6_letters_code" type="text">
                        <br>
                        <button type="submit" class="btn btn-default">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

    @endsection