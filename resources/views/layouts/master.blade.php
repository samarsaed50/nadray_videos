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
    <link rel='stylesheet' type='text/css' href="/css/style-playlist.css">
    <link rel='stylesheet' type='text/css' href="/css/spaces.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">     
       

</head>
<body>
        <nav class="navbar  navbar-expand-md custom-navbar navbar-dark">
                <img class="navbar-brand" src="/images/logo.png" id="logo_custom" width="10%"  alt="logo">
                <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse " id="collapsibleNavbar">
                    <ul class="navbar-nav m-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="/"><b>Home |</b></a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="details.html"><b>Master s Degree in Awqaf |</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="details.html"><b>Master’s Degree in The Humanitarian Action</b></a>
                        </li>
                    </ul>
                    <form class="form-inline ml-auto">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0 searchBtn" type="submit">Search</button>
                    </form>
                    <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                             style="background-color: #0d8b9e !important; border-color: #0d8b9e !important">
                             <img src="/images/user.png"></a>
                          
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#" id="settingsNav">Settings</a>
                              <a class="dropdown-item" href="#">Sign out</a>                              
                            </div>
                        </div> 
                </div>
            </nav>
            @yield('content')
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
<script>

    $(function(){
    $('.button-checkbox').each(function(){
		var $widget = $(this),
			$button = $widget.find('button'),
			$checkbox = $widget.find('input:checkbox'),
			color = $button.data('color'),
			settings = {
					on: {
						icon: 'glyphicon glyphicon-check'
					},
					off: {
						icon: 'glyphicon glyphicon-unchecked'
					}
			};

		$button.on('click', function () {
			$checkbox.prop('checked', !$checkbox.is(':checked'));
			$checkbox.triggerHandler('change');
			updateDisplay();
		});

		$checkbox.on('change', function () {
			updateDisplay();
		});

		function updateDisplay() {
			var isChecked = $checkbox.is(':checked');
			// Set the button's state
			$button.data('state', (isChecked) ? "on" : "off");

			// Set the button's icon
			$button.find('.state-icon')
				.removeClass()
				.addClass('state-icon ' + settings[$button.data('state')].icon);

			// Update the button's color
			if (isChecked) {
				$button
					.removeClass('btn-default')
					.addClass('btn-' + color + ' active');
			}
			else
			{
				$button
					.removeClass('btn-' + color + ' active')
					.addClass('btn-default');
			}
		}
		function init() {
			updateDisplay();
			// Inject the icon if applicable
			if ($button.find('.state-icon').length == 0) {
				$button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
			}
		}
		init();
	});
});
    </script>
</body>
</html>