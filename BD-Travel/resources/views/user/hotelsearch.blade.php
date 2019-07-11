<!DOCTYPE html>
<html lang="en">
<head>
    <title>Travel-BD</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="TravelBD Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('js/jqueryui/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/jqueryui/jquery-ui.structure.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/jqueryui/jquery-ui.theme.css')}}">



</head>

<body>
<div class="super_container">

    <!-- Header -->

    <header class="header">

        <!-- Top Bar -->

        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="phone">+45 345 3324 56789</div>
                        <div class="social">
                            <ul class="social_list">
                                <li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                <li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="user_box ml-auto">
                            <div class="user_box_login user_box_link"><a href="{{route('user.home')}}">Home</a></div>

                            <div class="user_box_register user_box_link"><a href="#">Profile | </a></div>

                            <div class="user_box_register user_box_link"><a href="{{route('logout')}}"> logout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <div class="logo"><a href="#"><img src="images/logo.png" alt="">travelBD</a></div>
                        </div>
                        <div class="main_nav_container ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item"><a href="{{route('user.home')}}">home</a></li>
                                <li class="main_nav_item"><a href="{{route('user.about')}}">about us</a></li>
                                <li class="main_nav_item"><a href="{{route('user.offer')}}">offers</a></li>
                                <li class="main_nav_item"><a href="{{route('user.blog')}}">news</a></li>
                                <li class="main_nav_item"><a href="{{route('user.contact')}}">contact</a></li>
                                <li class="main_nav_item"><a href="{{route('user.msearched')}}">Most Searched</a></li>
                                <li class="main_nav_item"><img src="{{asset('profilepic/'.$user->image)}}" style="height:40px;width:50px;border-radius: 25px"></li>
                            </ul>

                        </div>
                        <div class="content_search ml-lg-0 ml-auto">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
                                    <g>
                                        <g>
                                            <path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
                                        </g>
                                    </g>
                                </g>
							</svg>
                        </div>

                        <form id="search_form" class="search_form bez_1">
                            <input type="search" placeholder="Search.." class="search_content_input bez_1">
                        </form>

                        <div class="hamburger">
                            <i class="fa fa-bars trans_200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="menu_close_container"><div class="menu_close"></div></div>
            <div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
            <ul>
                <li class="menu_item"><a href="#">home</a></li>
                <li class="menu_item"><a href="{{route('user.about')}}">about us</a></li>
                <li class="menu_item"><a href="{{route('user.offer')}}">offers</a></li>
                <li class="menu_item"><a href="{{route('user.blog')}}">news</a></li>
                <li class="menu_item"><a href="{{route('user.contact')}}">contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->



    <!-- Search -->

    <div class="search" style="margin-top: 180px;height:100px">


        <!-- Search Contents -->

        <div class="container fill_height">
            <div class="row fill_height">
                <div class="col fill_height">

                    <!-- Search Tabs -->


                    <!-- Search Panel -->

                    <div class="search_panel active">
                        <form action="{{route('user.hotelsearch')}}" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">

                            <div class="search_item">
                                <div>Place Name</div>
                                <input type="text" name="placename" class="destination search_input" required="required" id="desSearch2">
                            </div>



                            <button class="button search_button" id="searchBtn" style="margin-right: 500px">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class="search_panel">
                        <form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">


                            <div class="search_item">
                                <div>Place Name</div>
                                <input type="text" class="destination search_input" required="required">
                            </div>

                            <div class="search_item">
                                <div>district</div>
                                <select name="district" id="district" required="required" class="dropdown_item_select search_input">
                                    <option></option>
                                    <option>Dhaka</option>
                                    <option>Sylhet</option>
                                    <option>Chittagong</option>
                                    <option>Rajshahi</option>
                                    <option>Khulna</option>
                                    <option>Barisal</option>
                                </select>
                            </div>


                            <div class="search_item">
                                <div>check in</div>
                                <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>check out</div>
                                <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>adults</div>
                                <select name="adults" id="adults_2" class="dropdown_item_select search_input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>

                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class="search_panel">
                        <form action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">

                            <div class="search_item">
                                <div>From</div>
                                <input type="text" class="destination search_input" required="required">
                            </div>

                            <div class="search_item">
                                <div>To</div>
                                <input type="text" class="destination search_input" required="required">
                            </div>

                            <div class="search_item">
                                <div>Date</div>
                                <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                            </div>

                            <div class="search_item">
                                <div>Car Type</div>
                                <select name="adults" id="adults_3" class="dropdown_item_select search_input">
                                    <option></option>
                                    <option>Private car</option>
                                    <option>Bus</option>
                                    <option>Hiace</option>
                                </select>

                            </div>
                            <div class="search_item">
                                <div>adults</div>
                                <select name="children" id="children_3" class="dropdown_item_select search_input">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class="search_panel">
                        <form action="#" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <div class="search_item">
                                <div>From</div>
                                <input type="text" class="destination search_input" required="required">
                            </div>

                            <div class="search_item">
                                <div>To</div>
                                <input type="text" class="destination search_input" required="required">
                            </div>

                            <div class="search_item">
                                <div>Date</div>
                                <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->




                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->

    <div class="intro">
        <div class="container">

            <div class="row intro_items">

                <!-- Intro Item -->
                @foreach($hotel as $hotel)
                    <div class="col-lg-4 intro_col">
                        <div class="intro_item">
                            <div class="intro_item_overlay"></div>
                            <!-- Image by https://unsplash.com/@dnevozhai -->
                            <div class="intro_item_background" style="background-image:url(images/hotel/{{$hotel->image}})"></div>
                            <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                                <div class="intro_date">May 25th - June 01st</div>
                                <div class="button intro_button"><div class="button_bcg"></div><a href="{{route('user.hoteldetail',['id'=>$hotel->id])}}">see more<span></span><span></span><span></span></a></div>
                                <div class="intro_center text-center">
                                    <h1>{{$hotel->hname}}</h1>
                                    <div class="intro_price">From {{$hotel->price}}</div>
                                    <div class="rating rating_4">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach

            <!-- Intro Item -->



                <!-- Intro Item -->



            </div>
        </div>
    </div>

    <!-- CTA -->


    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <!-- Footer Column -->
                <div class="col-lg-3 footer_column">
                    <div class="footer_col">
                        <div class="footer_content footer_about">
                            <div class="logo_container footer_logo">
                                <div class="logo"><a href="#"><img src="images/logo.png" alt="">travelbd</a></div>
                            </div>
                            <p class="footer_about_text">The world’s largest travel site. Know better. Book better. Go better.
                                At TravelBd, we believe in the power of travel </p>
                            <ul class="footer_social_list">
                                <li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-3 footer_column">
                    <div class="footer_col">
                        <div class="footer_title">blog posts</div>
                        <div class="footer_content footer_blog">

                            <!-- Footer blog item -->
                            <div class="footer_blog_item clearfix">
                                <div class="footer_blog_image"><img src="images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov"></div>
                                <div class="footer_blog_content">
                                    <div class="footer_blog_title"><a href="{{route('user.blog')}}">Travel with us this year</a></div>
                                    <div class="footer_blog_date">Nov 29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class="footer_blog_item clearfix">
                                <div class="footer_blog_image"><img src="images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie"></div>
                                <div class="footer_blog_content">
                                    <div class="footer_blog_title"><a href="{{route('user.blog')}}">New destinations for you</a></div>
                                    <div class="footer_blog_date">Nov 29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class="footer_blog_item clearfix">
                                <div class="footer_blog_image"><img src="images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87"></div>
                                <div class="footer_blog_content">
                                    <div class="footer_blog_title"><a href="{{route('user.blog')}}">Travel with us this year</a></div>
                                    <div class="footer_blog_date">Nov 29, 2017</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-3 footer_column">
                    <div class="footer_col">

                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-3 footer_column">
                    <div class="footer_col">
                        <div class="footer_title">contact info</div>
                        <div class="footer_content footer_contact">
                            <ul class="contact_info_list">
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
                                    <div class="contact_info_text"> 45b-c Dhaka</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
                                    <div class="contact_info_text">2556-808-8613</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
                                    <div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">travelbd@gmail.com</a></div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
                                    <div class="contact_info_text"><a href="#">www.travelbd.com</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Copyright -->

    <div class="copyright">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
                        <div class="footer_nav">
                            <ul class="footer_nav_list">
                                <li class="footer_nav_item"><a href="#">home</a></li>
                                <li class="footer_nav_item"><a href="{{route('user.about')}}">about us</a></li>
                                <li class="footer_nav_item"><a href="{{route('user.offer')}}">offers</a></li>
                                <li class="footer_nav_item"><a href="{{route('user.blog')}}">news</a></li>
                                <li class="footer_nav_item"><a href="{{route('user.contact')}}">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/jqueryui/jquery-ui.js')}}"></script>
<script src="{{asset('js/placeSearch.js')}}"></script>
<script src="{{asset('js/searchUpload.js')}}"></script>

</body>

</html>