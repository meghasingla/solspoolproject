@extends('layout')
@section('content')

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Our Services</h2>
        
        <style>

       /* .bg-overlay  {
             padding: 0px 20px;
    height: 100%;
    width: 100%;

    /*background: linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.8)),url("../images/feature-man-3.jpg") center center no-repeat scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;


 
}</style>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="{{ route('services') }}" class="active">Services</a></li>
        </ol>
        <style>
        body {
background-image: linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.8)),url("../images/feature-man-3.jpg") ;
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

        /* body {
            padding: 0;margin: 0;
        }
        .baner {
            position: relative;
        }
        .baner img {
            width: 100%;
        }
        .baner-overlay {
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#1e5799+0,7db9e8+100&1+0,0.65+100 */
           /* background-image:url('../img/feature-man-3.jpg');
            background: -moz-linear-gradient(left, rgba(30,87,153,1) 0%, rgba(125,185,232,0.65) 100%); /* FF3.6-15 */
           /*background: -webkit-linear-gradient(left, rgba(30,87,153,1) 0%,rgba(125,185,232,0.65) 100%); /* Chrome10-25,Safari5.1-6 */
           /* background: linear-gradient(to right, rgba(30,87,153,1) 0%,rgba(125,185,232,0.65) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
           /* filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#a67db9e8',GradientType=1 ); /* IE6-9 
        }*/
       /* .baner-overlay {
            position: absolute;
            top: 0;left: 0;right: 0;bottom: 0;
        }
        ul li {
            /* color: ;
            color:white; */
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
     
 
}
.grid-container{
    /*width:1200px;
   /* grid-template-columns: auto auto ;
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
}
p.about-para-w3ls {
    color: #777;
    font-size: 16px;
    line-height: 0px;
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
   background: rgba(   213, 224, 236, 0.52);
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
    font-size: 1.6em;
    color: #000000;
    margin: 0.5em 0em 0.5em 0em;
    text-transform: capitalize;
    letter-spacing: 1px;
}
.advantage-block p {
    /*font-size: 16px;
    color: #000000;
    /* line-height: 1.8em; 
    text-align: left;
    padding-left: 3em;
    line-height: 35px;
    letter-spacing: .8px;
}
.advantage-grid {
    padding: 0;
}
.left-w3ls {
   /* border-right: 1px solid #b1b1b1;
}
.advantage-block .fa-credit-card,.advantage-block .fa-clock-o {
    color: #1569C7;
    font-size: 45px;
    margin-bottom: 10px;
}
.advantage-block p i {
    color: #1569C7;
    font-size: 13px;
    margin-right: 10px;
}
h2 {
    color: #fff;
    font-family: Georgia;
    font-size: 400%;
    padding: 30px;

}*/
body{background:#444}
.center-menu{margin:30px auto ;font-family: Georgia; float:none; border-radius: 5px;width: 100%;padding: 0px;padding-bottom: 50px;}
.center-menu ul{width:100%; padding-left:0;}
.center-menu ul li{width:100%; min-height:30px; margin-bottom:2px; background:#f4f4f4; list-style:none; padding:20px; 
font-family:"open sans", serif ;
   font-size:27px;}
.center-menu ul li i{font-size:20px; color:#ccc; padding-right:5px;}
 
.center-menu ul li a{color:#4f4f4f; display:block; text-decoration:none; width:100%;}
.center-menu ul li:nth-child(1){border-right: 5px solid #8d54a3}
.center-menu ul li:nth-child(2){border-right: 5px solid #6CC437}
.center-menu ul li:nth-child(3){border-right: 5px solid #f28c1d}
.center-menu ul li:nth-child(4){border-right: 5px solid #e94979}
.center-menu ul li:nth-child(5){border-right: 5px solid #00B0F0}
.center-menu ul li:nth-child(6){border-right: 5px solid #cc3333}
.center-menu ul li:nth-child(7){border-right: 5px solid #FABE09}
.center-menu ul li:nth-child(8){border-right: 5px solid #e94979}
.center-menu ul li:nth-child(9){border-right: 5px solid #8d54a3}
.center-menu ul li:nth-child(10){border-right: 5px solid #6CC437}
.center-menu ul li:nth-child(11){border-right: 5px solid #f28c1d}
.center-menu ul li:nth-child(12){border-right: 5px solid #e94979}
.center-menu ul li:nth-child(13){border-right: 5px solid #00B0F0}
.center-menu ul li:nth-child(14){border-right: 5px solid #F46652}
.center-menu ul li:nth-child(15){border-right: 5px solid #FABE09}
.center-menu ul li:nth-child(16){border-right: 5px solid #6CC437}
.center-menu ul li:nth-child(17){border-right: 5px solid #f28c1d}
.center-menu ul li:nth-child(18){border-right: 5px solid #e94979}
.center-menu ul li:nth-child(19){border-right: 5px solid #00B0F0}
.center-menu ul li:nth-child(20){border-right: 5px solid #F46652}
.center-menu ul li:nth-child(21){border-right: 5px solid #FABE09}




.center-menu ul li:hover a{color:#fff; text-decoration:none;}
.center-menu ul li:nth-child(1):hover{background-color:#8d54a3}
.center-menu ul li:nth-child(2):hover{background-color:#6CC437}
.center-menu ul li:nth-child(3):hover{background-color:#f28c1d}
.center-menu ul li:nth-child(4):hover{background-color:#e94979}
.center-menu ul li:nth-child(5):hover{background-color:#00B0F0}
.center-menu ul li:nth-child(6):hover{background-color:#cc3333}
.center-menu ul li:nth-child(7):hover{background-color:#FABE09}
.center-menu ul li:nth-child(8):hover{background-color:#e94979}
.center-menu ul li:nth-child(9):hover{background-color:#8d54a3}
.center-menu ul li:nth-child(10):hover{background-color:#6CC437}
.center-menu ul li:nth-child(11):hover{background-color:#f28c1d}
.center-menu ul li:nth-child(12):hover{background-color:#e94979}
.center-menu ul li:nth-child(13):hover{background-color:#00B0F0}
.center-menu ul li:nth-child(14):hover{background-color:#F46652}
.center-menu ul li:nth-child(15):hover{background-color:#FABE09}
.center-menu ul li:nth-child(16):hover{background-color:#6CC437}
.center-menu ul li:nth-child(17):hover{background-color:#f28c1d}
.center-menu ul li:nth-child(18):hover{background-color:#e94979}
.center-menu ul li:nth-child(19):hover{background-color:#00B0F0}
.center-menu ul li:nth-child(20):hover{background-color:#F46652}
.center-menu ul li:nth-child(21):hover{background-color:#FABE09}
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
    <header class="business-header bg-overlay ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12  text-center">
    <div class="row">
         <div class="advantages">
    <div class="">
        <div class="advantages-main">
               <!-- <h3 class="title-w3-agileits">Our Services</h3>-->
    <div class="advantage-bottom">
             <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
                <div class="advantage-block ">
        <div class="col-md-12">
<div class="col-md-3 center-menu">
 <ul>
    <h2>TRADING</h2>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> LED Lights and related accessories </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Solar Energy Solutions </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Plastic Granule</a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Textile Industry Solutions (Fabrics, Yarns, Machineries) </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Agriculture related solutions </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Import/Export </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Leather Products </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Dairy Products</a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Coal & Coke </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Flex & Vinyl </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> FMCG Products</a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Printing & Stationery </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Computers, Laptops and related products </a></li>
 </ul>  

  </div></div>
  </div>
             </div>
             <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
                <div class="advantage-block">

<div class="col-md-12">
<div class="col-md-3 center-menu">
 <ul>
      <h2>CONSULTANCY</h2>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Legal Advisory </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Banking/Financial Advisory </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Digital Solutions </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Software/App/Website Deve. </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Documents Verifications </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Loan Syndication </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Construction Contracts </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> EPC Work </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Dairy Projects</a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Import/Export Documentation </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Freight Forwarding Solutions (Domestic & International) </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Catering Services </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Manpower Supply Services</a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> BPO Solutions </a></li>
   <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i> Project Management Consultancy </a></li>
 </ul>  

  </div></div>
  </div>
             </div>
             </div>
        </div>
    </div>
      </div>
            </div>
        </div>
                    <!-- section header -->
                  
                    <!-- /section header -->

                    <!-- service -->
                    
                    <!-- /service -->

                    <!-- service -->
                    
                    <!-- /service -->

                    <!-- service -->
                   
                    <!-- /service -->

                    <!-- service -->
                    
                    <!-- /service -->

                    <!-- service -->
                   
                    <!-- /service -->

                    <!-- service -->
                    
                    <!-- /service -->
<!--
                </div>
    <div class="container">
        <div class="baner">
           <img width=100% src="images/feature-man-3.jpg" alt="" /></div>
            <div class="baner-overlay">
            </div>
        </div>
    <div class="advantages">
    <div class="">
        <div class="advantages-main">
                <h3 class="title-w3-agileits">Our Services</h3>
    <div class="advantage-bottom">
             <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
                <div class="advantage-block ">
                     <i class="fa fa-columns" aria-hidden="true"></i> 
                    <h4>TRADING</h4>
                    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>LED Lights and related accessories&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                    
                    <i class="fa fa-snowflake-o" aria-hidden="true"></i>Banquet facilities</p>

                <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Solar Energy Solutions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                   
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Plastic Granule</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Textile Industry Solutions (Fabrics, Yarns, Machineries)</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Agriculture related solutions</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Import/Export</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Leather Products</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Dairy Products</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Coal & Coke</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Flex & Vinyl</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>FMCG Products</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Printing & Stationery</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Computers, Laptops and related products</p>
                </div>
             </div>
             <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
                <div class="advantage-block">
                 <i class="fa fa-clock-o" aria-hidden="true"></i> 
                    <h4>CONSULTANCY</h4>
                  <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p> 
             <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Legal Advisory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                    
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Banking/Financial Advisory</p>

                <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Digital Solutions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                   
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Software/App/Website Deve.</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Documents Verifications</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Loan Syndication</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Construction Contracts</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>EPC Work</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Dairy Projects</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Import/Export Documentation</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Freight Forwarding Solutions (Domestic & International)</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Catering Services</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>Manpower Supply Services</p>
                    <p><i class="fa fa-snowflake-o" aria-hidden="true"></i>BPO Solutions&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-snowflake-o" aria-hidden="true"></i>Project Management Consultancy </p>
                     
                </div>
             </div>
             </div>
        </div>
    </div>
      </div>
            </div>
        </div>
    </header>
            
                  <p><i class="fa fa-check" aria-hidden="true"></i>Legal Advisory
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