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
             color: ;
            color:white; 
        }

/*.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  background-color: grey;
  padding: 10px;
 /* display: flex;
  flex-direction: row;
  flex-wrap: wrap;

    background-color: #f6b60b;
     
 
}*/
.grid-container{
    width:1200px;
   /* grid-template-columns: auto auto ;*/
    min-height: 500px;
    background: grey;
    margin: 70px auto 0;

}
/*.grid-container .box{
    position:relative;
    width:300px;
    height:300px;
    backfgound:#ff0;
    margin:10px;

    box-sizing: border-box;
    display: inline-block;



}
.grid-container .box .imgBox{
    position: relative;
}

.grid-container .box .imgBox img{
max-width: 100%;
transition: tranform 2s;
    position:relative;
}
.grid-container .box:hover .imgBox img{
    transform: scale(1.2);
}
.grid-container:hover{
    background-color: #222222;
}
.grid-container .box .details .content{
    position:absolute;
    top:50%;
    transform: translateY(-50%);
    text-align:center;
    padding:15px;
    color:#fff;
}*/
/*.grid-item {
  background-color: rgba(245, 245, 245, 0.8);
  grid-template-columns: auto auto ;
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 40px;
  font-size: 30px;
  text-align: left;
     
    background-color: #f6b60b;
  
}
.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  border: 10px solid white;
  text-align: left;
  font-size: 20px;
  padding:35px;
     
    background-color: grey;
}*/
p.about-para-w3ls {
    color: #777;
    font-size: 16px;
    line-height: 33px;
    letter-spacing: 0.5px;
    margin-bottom: 2em;
}
.advantages {
    background: url(../images/back.jpg)no-repeat;
    min-height: 350px;
    background-size: cover;
    background-position: center;
    background-color: rgba(0, 0, 0, 0.8);
    position: relative;
    z-index: 1;
    padding-bottom: 40px;
    padding-top: 20px;
}
.advantage-block {
    padding:2em 2em;
    background: rgba(0, 0, 0, 0.52);
    text-align: center;
}
.advantage-block:hover {
    background: rgba(255, 255, 255, 0.22);
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
}
.advantage-block h4 {
    font-size: 1.5em;
    color: #000000;
    margin: 0.5em 0em 0.5em 0em;
    text-transform: capitalize;
    letter-spacing: 1px;
}
.advantage-block p {
    font-size: 16px;
    color: #000000;
    /* line-height: 1.8em; */
    text-align: left;
    padding-left: 3em;
    line-height: 35px;
    letter-spacing: .8px;
}
.advantage-grid {
    padding: 0;
}
.left-w3ls {
    border-right: 1px solid #b1b1b1;
}
.advantage-block .fa-credit-card,.advantage-block .fa-clock-o {
    color: #ffce14;
    font-size: 45px;
    margin-bottom: 10px;
}
.advantage-block p i {
    color: #ffce14;
    font-size: 13px;
    margin-right: 10px;
}
</style>
    </section>
    <!-- End Banner area -->

    <!-- Our Services Area -->
   <!--<section class="our_services_tow">
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
              <!--  <div class="portfolio_item portfolio_2">
                   <div class="grid-sizer-2"></div>
                    <div class="single_facilities col-sm-7 painting building painting adversting">
                        <div class="who_we_area">
                            <div class="subtittle">

                                 <h2>TRADING</h2>


                            </div>-->
                           
                    <!-- <div class="single_facilities col-sm-5 painting webdesign">
                        <img src="images/feature-man-5.jpg" alt="">
                    </div> 
                </div>
            </div>
        </div>

    </section>-->
    <div class="advantages">
    <div class="container">
        <div class="advantages-main">
               <!-- <h3 class="title-w3-agileits">Our Services</h3>-->
    <div class="advantage-bottom">
             <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
                <div class="advantage-block ">
                    <!-- <i class="fa fa-columns" aria-hidden="true"></i> -->
                    <h4>TRADING</h4>
                <!--    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p> -->
                <p><i class="fa fa-check" aria-hidden="true"></i>LED Lights and related accessories&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                    
                    <i class="fa fa-check" aria-hidden="true"></i>Banquet facilities</p>

                <p><i class="fa fa-check" aria-hidden="true"></i>Solar Energy Solutions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                   
                    <p><i class="fa fa-check" aria-hidden="true"></i>Plastic Granule</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Textile Industry Solutions (Fabrics, Yarns, Machineries)</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Agriculture related solutions</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Import/Export</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Leather Products</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Dairy Products</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Coal & Coke</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Flex & Vinyl</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>FMCG Products</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Printing & Stationery</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Computers, Laptops and related products</p>
                </div>
             </div>
             <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
                <div class="advantage-block">
            <!--        <i class="fa fa-clock-o" aria-hidden="true"></i> -->
                    <h4>CONSULTANCY</h4>
             <!--       <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p> -->
             <p><i class="fa fa-check" aria-hidden="true"></i>Legal Advisory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                    
                    <p><i class="fa fa-check" aria-hidden="true"></i>Banking/Financial Advisory</p>

                <p><i class="fa fa-check" aria-hidden="true"></i>Digital Solutions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                   
                    <p><i class="fa fa-check" aria-hidden="true"></i>Software/App/Website Deve.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Documents Verifications</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Loan Syndication</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Construction Contracts</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>EPC Work</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Dairy Projects</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Import/Export Documentation</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Freight Forwarding Solutions (Domestic & International)</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Catering Services</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Manpower Supply Services</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>BPO Solutions&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Project Management Consultancy </p>
                     
                </div>
             </div>
            
                  <!--  <p><i class="fa fa-check" aria-hidden="true"></i>Legal Advisory
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Banking/Financial Advisory &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Digital Solutions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Software/App/Website Deve.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Documents Verifications&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Loan Syndication&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Project Finance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Construction Contracts&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>EPC Work&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Dairy Projects&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Import/Export Documentation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Freight Forwarding Solutions (Domestic & International)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Catering Services&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Manpower Supply Services&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>BPO Solutions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Project Management Consultancy</p>
                    
                    
                    Documents Verifications




                </div>
             </div>-->
                    <!-- <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
                <div class="advantage-block">   
                        <p><i class="fa fa-check" aria-hidden="true"></i>Internal Audit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Management Audit</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Leasing Solutions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i>Real Estate Advisory/Solutions</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Sales/Marketing Solutions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                      </div>
             </div>-->
            <div class="clearfix"> </div>
            </div>
                </div>
    </div>
</div>
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