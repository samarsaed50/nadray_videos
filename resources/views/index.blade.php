<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/fav.png">
    <title>Cannel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.11/css/perfect-scrollbar.css'>
<link rel='stylesheet' href='https://rawgit.com/kenwheeler/slick/master/slick/slick.css'>
<link rel='stylesheet' href='https://rawgit.com/kenwheeler/slick/master/slick/slick-theme.css'>
    <link rel='stylesheet' type='text/css' href="/css/style.css">
    <link rel='stylesheet' type='text/css' href="/css/style-search.css">
    <link rel='stylesheet' type='text/css' href="/css/style-playlist.css">
    <link rel='stylesheet' type='text/css' href="/css/spaces.css">
    
</head>
<body>
        <nav class="navbar  navbar-expand-md custom-navbar navbar-dark">
                <img class="navbar-brand" src="/images/logo.png" id="logo_custom" width="10%"  alt="logo">
                <!-- <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">-->
                    <!-- <span class="navbar-toggler-icon "></span> -->
                <!-- </button>  -->
                @if(Auth::check())
                <div style="margin-left:69% !important">
                        <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                 style="background-color: #e9ecef !important;">
                                 <img src="/images/user.png">
                                 {{ Auth::user()->first_name }}
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="#" id="settingsNav">Settings</a>
                                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">Sign out</a>    
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>                                       
                                </div>
                            </div>  
                </div>
                @endif
            </nav>

    <div class="jumbotron">
        <div class="text-center">
            <div class="row">
                <div class="col-md-12">
                    <img src="/images/H-logo.png">
                </div>
            </div>
                <div class="search-input" style="margin: 0 auto;">
                        <input type="text">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Search here</label>
                        <span class="fa fa-search"></span>
                        <span class="fa fa-close"></span>
                </div>    
                <div id="cat" style="display: flex">
                 <a href="details.html">
                     <h4 style="padding-right:5px; ">Master’s Degree in<br> The Humanitarian Action </h4>
                     <!-- <hr id="line"> -->
                 </a>
                 <a href="details.html"  class="verticalLine">
                        <h4 style="padding-left: 8px;">Master s Degree in <br>Awqaf</h4>
                    </a>
                </div> 
                @if(!Auth::check())
                <div id="sign" style="display: flex">
                        <h4 style="padding-right:5px; ">
                            <a href="{{ route('login') }}">Login |</a>
                        </h4>
                        <!-- <hr id="line"> -->
                  
                           <h4 style="padding-left: 8px;">
                               <a href="{{ route('register') }}">Register</a>                          
                            </h4>
                      
                   </div> 
                   @endif           
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-7">
                        <img src="/images/test.jpg">
                    </div>
                    <div class="col-md-5">
                        <a href="video-detail.html"><h2 class="sub">Video Title</h2></a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar tempor nibh.
                            Nullam eu congue justo. Donec eget dolor enim. Sed sed diam nulla. Quisque nisi eros, ultrices et ullamcorper eget,
                            dapibus vitae elit. Nunc mattis tempus lectus. Fusce consectetur interdum risus sit amet malesuada. Suspendisse viverra
                            dignissim nisi eget tempus.
                        </p>
                        <div style="display:flex">
                                <a href="#"> <i class="fa fa-thumbs-up sub" style="padding-right: 10px;"></i></a>
                                <a href="#"> <i class="fa fa-thumbs-down sub" style="padding-right: 10px;"></i></a>
                                <a href="#"> <i class="fa fa-clock-o sub"></i></a>
                             </div>
                    </div>
                </div>
                <div class="space-25"></div>
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="hint">Recent Lectures</h5>
                        <div class="space-5"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="/images/test.jpg">
                                <a href="video-detail.html"><i>Video Title</i></a>
                            </div>
                            <div class="col-md-3">
                                <img src="/images/test.jpg">
                                <a href="video-detail.html"><i>Video Title</i></a>
                            </div>
                            <div class="col-md-3">
                                <img src="/images/test.jpg">
                                <a href="video-detail.html"><i>Video Title</i></a>
                            </div>
                            <div class="col-md-3">
                                <div class="space-80"></div>
                                <a href="more.html">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-25"></div>
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="hint">Liked videos</h5>
                        <div class="space-5"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="/images/test.jpg">
                                <a href="video-detail.html"><i>Video Title</i></a>
                            </div>
                            <div class="col-md-3">
                                <img src="/images/test.jpg">
                                <a href="video-detail.html"><i>Video Title</i></a>
                            </div>
                            <div class="col-md-3">
                                <img src="/images/test.jpg">
                                <a href="video-detail.html"><i>Video Title</i></a>
                            </div>
                            <div class="col-md-3">
                                <div class="space-80"></div>
                                <a href="more.html">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-25"></div>
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="hint">Watch later</h5>
                        <div class="space-5"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="/images/test.jpg">
                                <a href="video-detail.html"><i>Video Title</i></a>
                            </div>
                            <div class="col-md-3">
                                <img src="/images/test.jpg">
                                <a href="video-detail.html"><i>Video Title</i></a>
                            </div>
                            <div class="col-md-3">
                                <img src="/images/test.jpg">
                                <a href="video-detail.html"><i>Video Title</i></a>
                            </div>
                            <div class="col-md-3">
                                <div class="space-80"></div>
                                <a href="more.html">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h3 class="hint">Most watched</h3>
                <div class="space-20"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <img src="/images/test.jpg">
                            </div>
                            <div class="col-md-5">
                                <a href="video-detail.html"><i>Video Title</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-10"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <img src="/images/test.jpg">
                            </div>
                            <div class="col-md-5">
                                <a href="video-detail.html"><i>Video Title</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-10"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <img src="/images/test.jpg">
                            </div>
                            <div class="col-md-5">
                                <a href="video-detail.html"><i>Video Title</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
            <!--<div class="video-playlist-wrap two-col">-->
              <!--<div class="player-wrap">-->
                <!--<div class="fluid-ratio-wrap">-->
                  <!--<div class="fluid-ratio-inner">-->
                    <!--<img class="img-responsive" src="http://placehold.it/1600x900">-->
                  <!--</div>-->
                <!--</div>-->
              <!--</div>-->
          <!---->
              <!--<div class="playlist-wrap">-->
                <!--<ul class="remove-bullets scroll-wrap">-->
                  <!--<li class="playlist-item">-->
                    <!--<div class="thumb">-->
                      <!--<div class="fluid-ratio-wrap">-->
                        <!--<div class="fluid-ratio-inner"></div>-->
                      <!--</div>-->
                    <!--</div>-->
                    <!--<div class="details">Plalist Item 1</div>-->
                  <!--</li>-->
                  <!--<li class="playlist-item">-->
                    <!--<div class="thumb">-->
                      <!--<div class="fluid-ratio-wrap">-->
                        <!--<div class="fluid-ratio-inner"></div>-->
                      <!--</div>-->
                    <!--</div>-->
                    <!--<div class="details">Plalist Item 2</div>-->
                  <!--</li>-->
                  <!--<li class="playlist-item">-->
                    <!--<div class="thumb">-->
                      <!--<div class="fluid-ratio-wrap">-->
                        <!--<div class="fluid-ratio-inner"></div>-->
                      <!--</div>-->
                    <!--</div>-->
                    <!--<div class="details">Plalist Item 3</div>-->
                  <!--</li>-->
                  <!--<li class="playlist-item">-->
                    <!--<div class="thumb">-->
                      <!--<div class="fluid-ratio-wrap">-->
                        <!--<div class="fluid-ratio-inner"></div>-->
                      <!--</div>-->
                    <!--</div>-->
                    <!--<div class="details">Plalist Item 4</div>-->
                  <!--</li>-->
                  <!--<li class="playlist-item">-->
                    <!--<div class="thumb">-->
                      <!--<div class="fluid-ratio-wrap">-->
                        <!--<div class="fluid-ratio-inner"></div>-->
                      <!--</div>-->
                    <!--</div>-->
                    <!--<div class="details">Plalist Item 5</div>-->
                  <!--</li>-->
                  <!--<li class="playlist-item">-->
                    <!--<div class="thumb">-->
                      <!--<div class="fluid-ratio-wrap">-->
                        <!--<div class="fluid-ratio-inner"></div>-->
                      <!--</div>-->
                    <!--</div>-->
                    <!--<div class="details">Plalist Item 6</div>-->
                  <!--</li>-->
                  <!--<li class="playlist-item">-->
                    <!--<div class="thumb">-->
                      <!--<div class="fluid-ratio-wrap">-->
                        <!--<div class="fluid-ratio-inner"></div>-->
                      <!--</div>-->
                    <!--</div>-->
                    <!--<div class="details">Plalist Item 7</div>-->
                  <!--</li>-->
                  <!--<li class="playlist-item">-->
                    <!--<div class="thumb">-->
                      <!--<div class="fluid-ratio-wrap">-->
                        <!--<div class="fluid-ratio-inner"></div>-->
                      <!--</div>-->
                    <!--</div>-->
                    <!--<div class="details">Plalist Item 8</div>-->
                  <!--</li>-->
                  <!--<li class="playlist-item more">-->
                    <!--<a href="#">See More</a>-->
                  <!--</li>-->
                <!--</ul>-->
              <!--</div>-->
          <!---->
            <!--</div>-->
          </div>
          <footer class="kilimanjaro_area">
                <!-- Top Footer Area Start -->
                <div class="foo_top_header_one section_padding_100_70">
                    <div class="container" style="background:#15151e">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="kilimanjaro_part">
                                    <h5>About Us</h5>
                                    <p>                         
                                        Lifelong learning is vital for everybody, no matter the age or
                                        level of education. And eLearning is accessible to everyone
                                        throughout the day. This makes it possible for all to learn
                                        the subject at their own pace and in comfortable settings.
                                    </p>
                                </div>
                                <div class="kilimanjaro_part m-top-15">
                                    <h5>Social Links</h5>
                                    <ul class="kilimanjaro_social_links">
                                        <li><a href="https://www.facebook.com/nadraycom" class="footerL"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                        <li><a href="https://twitter.com/nadraycom" class="footerL"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="kilimanjaro_part">
                                    <h5>Navigation</h5>
                                    <ul class=" kilimanjaro_widget">
                                        <li><a href="more.html" class="footerL">Popular</a></li>
                                        <li><a href="#" class="footerL">Liked videos</a></li>
                                        <li><a href="#" class="footerL">Watch later</a></li>
                                        <li><a href="#" class="footerL">Master’s Degree in The Humanitarian Action</a></li>
                                        <li><a href="#" class="footerL">Master s Degree in Awqaf</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="kilimanjaro_part">
                                    <h5>Latest Videos</h5>
                                    <div class="kilimanjaro_blog_area">
                                        <div class="kilimanjaro_thumb">
                                            <img class="img-fluid" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">
                                        </div>
                                        <a href="#" class="footerL">Your Blog Title Goes Here</a>
                                        <p class="kilimanjaro_date">21 Jan 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                    <div class="kilimanjaro_blog_area">
                                        <div class="kilimanjaro_thumb">
                                            <img class="img-fluid" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">
                                        </div>
                                        <a href="#" class="footerL">Your Blog Title Goes Here</a>
                                        <p class="kilimanjaro_date">21 Jan 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                    <div class="kilimanjaro_blog_area">
                                        <div class="kilimanjaro_thumb">
                                            <img class="img-fluid" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">
                                        </div>
                                        <a href="#" class="footerL">Your Blog Title Goes Here</a>
                                        <p class="kilimanjaro_date">21 Jan 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="kilimanjaro_part">
                                    <h5>Quick Contact</h5>
                                    <div class="kilimanjaro_single_contact_info">
                                            <h5>Address:</h5>
                                            <p>791 S Brookhurst St Anaheim,CA 92804</p>
                                        </div>
                                    <div class="kilimanjaro_single_contact_info">
                                        <h5>Phone:</h5>
                                        <p dir="rtl">6264 482 067 1+ <br> 0561 894 067 1+</p>
                                    </div>
                                    <div class="kilimanjaro_single_contact_info">
                                        <h5>Email:</h5>
                                        <p>info@nadray.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom Area Start -->
                <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
                    <div class="container" style="background: #15151e">
                        <div class="row">
                            <div class="col-12">
                                <p>2018 © Copyright Channel. All rights Reserved. Powered By <a href="http://smtfy.com/" style="color: #5e6c79 !important">SMTFY</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
         



          <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
          <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.11/js/min/perfect-scrollbar.jquery.min.js'></script>
          <script src='https://rawgit.com/kenwheeler/slick/master/slick/slick.js'></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script> -->
<script type="text/javascript" src="/js/index.js"></script>
<script type="text/javascript" src="/js/index-search.js"></script>
<script type="text/javascript" src="/js/index-playlist.js"></script>
</body>
</html>