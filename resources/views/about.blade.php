@extends('layout')
@section('content')
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>About Us</h2>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="{{ route('about') }}" class="active">About Us</a></li>
        </ol><style>
       /* .bg-overlay  {
             padding: 0px 0px;
             font-family: Georgia;
    height: 100%;
    width: 100%;

    background: linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.8)),url("../images/feature-man-3.jpg") center center no-repeat scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;


 
}*/
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
</style>
    </section>
    <!-- End Banner area -->
    <!-- About Us Area -->
    <section class="about_us_area row">
        <header class="business-header bg-overlay ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12  text-center">
          
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>SOLSPOOL</h2>
               <!-- <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4> -->
            </div>

            <div class="row about_row">
                <div class="col-md-5 col-sm-6 about_client about_pages_client">
                    <img src="images/feature-man-3.jpg" alt="">
                </div>
                <div class="who_we_area col-md-7 col-sm-6">
                    <div class="subtittle">
                        <h2>WHO WE ARE</h2>
                    </div>
                    <p align="justify">Established in the year 2013, Solspool Technologies Private limited is a team of individuals like; Farmers, Engineers, Chartered Accountants, Advocates, MBAs and Banking Person for ground level analysing of the facts of every transaction. Team Solspool analyse every transaction with regard to legality, financially, marketability etc, to give the best solution to aspirant.<br>
Team Solspool also works as a bridge between potential buyer and seller, who 
has knowledge of trading of particular goods but due to some constraint or due to complexities of various laws applicable to such transactions  drop their ideas of execution. We just help to move one level up : from planning to execution.<br>
We are committed to operating as a socially responsible business, to be the trusted partner for our stakeholders. We are mindful of the social issues around us and our obligation and ability to make a positive contribution to society and the environment.<br>
Solspool Technologies Private Limited is headquartered in Jaipur, India and has corporate office at New Delhi, India.
</p>
                    <a href="{{URL('contact')}}" class="button_all">Contact Now</a>
                </div>
            </div>
        </div>
          </div>
            </div>
        </div>
    </header>
    </section>
    <!-- End About Us Area -->
    <!-- call Area -->
  <!--  <section class="call_min_area">
        <div class="container">
            <h2>+880 123 456 789</h2>
            <p>Contact With Us. We are the top Construction Company. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="call_btn">
                <a href="#" class="button_all">GET IN TOUCH</a>
                <a href="#" class="button_all">QUICK QUOTE</a>
            </div>
        </div>
    </section>
    <!-- End call Area -->
    <!-- Our Features Area -->
  <!--  <section class="our_feature_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Features</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="feature_row row">
                <div class="col-md-6 feature_img">
                    <img src="images/feature-man.jpg" alt="">
                </div>
                <div class="col-md-6 feature_content">
                    <div class="subtittle">
                        <h2>WHY CHOOSE US</h2>
                        <h5>There are many variations of passages of Lorem Ipsum available.</h5>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">30+ YEARS OF EXPERIENCE</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">QUALIFIED EXPERTS</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">Best Customer Services</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Features Area -->
    <!-- Our Partners Area -->
  <!--  <section class="our_partners_area">
        <div class="book_now_aera">
            <div class="container">
                <div class="row book_now">
                    <div class="col-md-10 booking_text">
                        <h4>Booking now if you need build your dream home.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-md-2 p0 book_bottun">
                        <a href="#" class="button_all">book now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Partners Area -->
    <!-- Our Team Area -->
  <!--  <section class="our_team_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Team</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="row team_row">
                <div class="col-md-3 col-sm-6 wow fadeInUp">
                   <div class="team_membar">
                        <img src="images/team/tm-1.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Prodip Ghosh</a>
                            <h6>Founder &amp; CEO</h6>
                        </div>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                   <div class="team_membar">
                        <img src="images/team/tm-2.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Emran Khan</a>
                            <h6>Web-Developer</h6>
                        </div>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                   <div class="team_membar">
                        <img src="images/team/tm-3.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Prodip Ghosh</a>
                            <h6>Founder &amp; CEO</h6>
                        </div>
                   </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                   <div class="team_membar">
                        <img src="images/team/tm-4.jpg" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name">Jakaria Khan</a>
                            <h6>Founder &amp; CEO</h6>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
   <!- End Our Team Area -->
    
@endsection