@extends('layout')
@section('content')

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Our Services</h2>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="{{ route('services') }}" class="active">Services</a></li>
        </ol>
        <style>
        ul li {
             color: #3c3c3c;
            color:black; 
        }

.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  background-color: #f5f5f5;
  padding: 10px;

    /*background-color: #f6b60b;*/
     
 
}
.grid-item {
  background-color: rgba(245, 245, 245, 0.8);
  grid-template-columns: auto auto ;
  /*border: 1px solid rgba(0, 0, 0, 0.8);*/
  padding: 40px;
  font-size: 30px;
  text-align: left;
     
    /*background-color: #f6b60b;*/
  
}
.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  /*border: 10px solid #f6b60b;*/
  text-align: left;
  font-size: 20px;
  padding:35px;
     
   /* background-color: #f6b60b;*/
}

</style>
    </section>
    <!-- End Banner area -->

    <!-- Our Services Area -->
    <section class="our_services_tow">
        <div class="container">
            <div class="architecture_area services_pages">
             <!--   <div class="portfolio_filter portfolio_filter_2">
                    <ul>
                        <li data-filter="*" class="active"><a href=""><i class="fa fa-wrench" aria-hidden="true"></i>ARCHITECTURE</a></li>
                        <li data-filter=".building"><a href=""><i class="fa fa-cogs" aria-hidden="true"></i>Building</a></li>
                        <li data-filter=".webdesign"><a href=""><i class="fa fa-cog" aria-hidden="true"></i>CONSTRUCTION</a></li>
                        <li data-filter=".adversting"><a href=""><i class="fa fa-heart" aria-hidden="true"></i>DESIGN</a></li>
                        <li data-filter=".painting"><a href=""><i class="fa fa-paint-brush" aria-hidden="true"></i>Painting</a></li>
                    </ul>
                </div> -->
              <!--  <div class="portfolio_item portfolio_2">
                   <div class="grid-sizer-2"></div>
                    <div class="single_facilities col-sm-7 painting building painting adversting">
                        <div class="who_we_area">
                            <div class="subtittle">

                                 <h2>TRADING</h2>


                            </div>-->
                            <div class="grid-container">
                                <div class="grid-item">
                                    <h2>TRADING</h2><BR>
                            <ul class ="a">
                             <li>LED Lights and related accessories</li>
                             <li>Solar Energy Solutions</li>
                            <li>Plastic Granule</li>
                            <li>Textile Industry Solutions (Fabrics, Yarns, Machineries)</li>
                            <li>Agriculture related solutions</li>
                            <li>Import/Export</li>
                            <li>Leather Products</li>
                            <li>Dairy Products</li>
                            <li>Coal & Coke</li>
                            <li>Flex & Vinyl</li>
                            <li>FMCG Products</li>
                            <li>Printing & Stationery</li>
                            <li>Computers, Laptops and related products</li>
                            </ul> </div>

                    
                        <!--    <a href="#" class="button_all">Contact Now</a> -->
                        
                  <!--  </div>
               
                   <div class="single_facilities col-sm-5 painting webdesign">
                        <img src="images/feature-man-4.jpg" alt="">
                    </div> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="architecture_area services_pages">

                <div class="portfolio_filter portfolio_filter_2">
                    <ul>
                        <li data-filter="*" class="active"><a href=""><i class="fa fa-wrench" aria-hidden="true"></i>ARCHITECTURE</a></li>
                        <li data-filter=".building"><a href=""><i class="fa fa-cogs" aria-hidden="true"></i>Building</a></li>
                        <li data-filter=".webdesign"><a href=""><i class="fa fa-cog" aria-hidden="true"></i>CONSTRUCTION</a></li>
                        <li data-filter=".adversting"><a href=""><i class="fa fa-heart" aria-hidden="true"></i>DESIGN</a></li>
                        <li data-filter=".painting"><a href=""><i class="fa fa-paint-brush" aria-hidden="true"></i>Painting</a></li>
                    </ul>
                </div> -->

               <!-- <div class="portfolio_item portfolio_2">
                 <div class="grid-sizer-2"></div>
                 
                    <div class="single_facilities col-sm-7 painting building painting adversting">

                        <div class="who_we_area">

                            <div class="subtittle">
                            <h2>CONSULTANCY</h2>
                           
                            </div>-->
                           <!--  <div class="grid-container">-->
                            <div class="grid-item">
                                <h2>CONSULTANCY</h2><BR>
                            <ul class="a">
                             <li>Legal Advisory</li>
                             <li>Banking/Financial Advisory</li>
                            <li>Digital Solutions</li>
                            <li>Software/App/Website Development</li>
                            <li>Project Management Consultancy</li>
                            <li>Loan Syndication</li>
                            <li>Project Finance</li>
                            <li>Construction Contracts</li>
                            <li>EPC Work</li>
                            <li>Dairy Projects</li>
                            <li>Import/Export Documentation</li>
                            <li>Freight Forwarding Solutions (Domestic & International)</li>
                            <li>Catering Services</li>
                            <li>Manpower Supply Services</li>
                            <li>BPO Solutions</li>
                            <li>Documents Verifications</li>
                            <li>Internal Audit</li>
                            <li>Management Audit</li>
                            <li>Leasing Solutions</li>
                            <li>Real Estate Advisory/Solutions</li>
                             <li> Sales/Marketing Solutions</li>
                            </ul> </div>
                        
                               <!--   <a href="#" class="button_all">Contact Now</a> -->
                        </div>
                    </div>
                </div>
                    <!-- <div class="single_facilities col-sm-5 painting webdesign">
                        <img src="images/feature-man-5.jpg" alt="">
                    </div> -->
                </div>
            </div>
        </div>

    </section>
    <!-- End Our Services Area -->

    <!-- Our Featured Works Area -->
   <!-- <section class="featured_works row" data-stellar-background-ratio="0.3">
        <div class="tittle wow fadeInUp">
            <h2>Our Featured Works</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class="featured_gallery">
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-1.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-2.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-3.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-4.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-5.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-6.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-7.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/gallery/gl-8.jpg" alt="">
                <div class="gallery_hover">
                    <h4>Bolt Apartments</h4>
                    <a href="#">VIEW PROJECT</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Featured Works Area -->

    <!-- Our Team Area -->
 <!--   <section class="our_team_area">
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
    <!-- End Our Team Area -->
@endsection