<!DOCTYPE html>
<html lang="en">
<head>
    <title>Offers</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="travelbd Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/offers_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/offers_responsive.css')}}">
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
                            <div class="user_box_register user_box_link"><a href="{{route('logout')}}">logout</a></div>
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
                            <div class="logo"><a href="#"><img src="images/logo.png" alt="">travelbd</a></div>
                        </div>
                        <div class="main_nav_container ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item"><a href="{{route('user.home')}}">home</a></li>
                                <li class="main_nav_item"><a href="{{route('user.about')}}">about us</a></li>
                                <li class="main_nav_item"><a href="{{route('user.offer')}}">offers</a></li>
                                <li class="main_nav_item"><a href="{{route('user.blog')}}">news</a></li>
                                <li class="main_nav_item"><a href="{{route('user.contact')}}">contact</a></li>
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
                            <input type="search" class="search_content_input bez_1">
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
                <li class="menu_item"><a href="index.ejs">home</a></li>
                <li class="menu_item"><a href="{{route('user.about')}}">about us</a></li>
                <li class="menu_item"><a href="#">offers</a></li>
                <li class="menu_item"><a href="{{route('user.blog')}}">news</a></li>
                <li class="menu_item"><a href="{{route('user.contact')}}">contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->


    <!-- Offers -->

    <div class="offers">

        <!-- Search -->

        <div class="search">
            <div class="search_inner">

                <!-- Search Contents -->

                <div class="container fill_height no-padding">
                    <div class="row fill_height no-margin">
                        <div class="col fill_height no-padding">


                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Offers -->

        <div class="container">
            <div class="row">
                <div class="col-lg-1 temp_col"></div>
                <div class="col-lg-11">

                    <!-- Offers Sorting -->
                    <div class="offers_sorting_container">
                    </div>>
                </div>

                <div class="col-lg-12">
                    <!-- Offers Grid -->

                    <div class="offers_grid">

                        <!-- Offers Item -->

                        <div class="offers_item rating_4">
                            <div class="row">
                                <div class="col-lg-1 temp_col"></div>
                                <div class="col-lg-3 col-1680-4">
                                    <div class="offers_image_container">
                                        <!-- Image by https://unsplash.com/@kensuarez -->
                                        <div class="offers_image_background" ><img style="height: 200px;width:250px" src="{{asset('images/hotel/'.$hotel->image)}}"></div>
                                        <div class="offer_name"><a href="single_listing.ejs">{{$hotel->hname}}</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="offers_content">
                                        <div class="offers_price">{{$hotel->price}}<span></span></div>
                                        <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                        </div>
                                        <p class="offers_text">{{$hotel->address}}</p>
                                        <p class="offers_text">{{$hotel->phone}}</p>
                                        <div class="offers_icons">
                                            <ul class="offers_icons_list">
                                                <li class="offers_icons_item"><img src="{{asset('images/post.png')}}" alt=""></li>
                                                <li class="offers_icons_item"><img src="{{asset('images/compass.png')}}" alt=""></li>
                                                <li class="offers_icons_item"><img src="{{asset('images/bicycle.png')}}" alt=""></li>
                                                <li class="offers_icons_item"><img src="{{asset('images/sailboat.png')}}" alt=""></li>
                                            </ul>
                                        </div>
                                        <div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
                                        <div class="offer_reviews">
                                            <div class="offer_reviews_content">
                                                <div class="offer_reviews_title">very good</div>
                                                <div class="offer_reviews_subtitle">100 reviews</div>
                                            </div>
                                            <div class="offer_reviews_rating text-center">8.1</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Offers Item -->



                        <!-- Offers Item -->



                        <!-- Offers Item -->


                        <!-- Offers Item -->

                        <br>

                    </div>
                </div>

            </div>
        </div>
    </div>

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
                            <p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
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
                        <div class="footer_title">tags</div>
                        <div class="footer_content footer_tags">
                            <ul class="tags_list clearfix">
                                <li class="tag_item"><a href="#">design</a></li>
                                <li class="tag_item"><a href="#">fashion</a></li>
                                <li class="tag_item"><a href="#">music</a></li>
                                <li class="tag_item"><a href="#">video</a></li>
                                <li class="tag_item"><a href="#">party</a></li>
                                <li class="tag_item"><a href="#">photography</a></li>
                                <li class="tag_item"><a href="#">adventure</a></li>
                                <li class="tag_item"><a href="#">travel</a></li>
                            </ul>
                        </div>
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
                                    <div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
                                    <div class="contact_info_text">2556-808-8613</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
                                    <div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
                                    <div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>
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
                <div class="col-lg-3 order-lg-1 order-2  ">
                    <div class="copyright_content d-flex flex-row align-items-center">
                        <div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
                        <div class="footer_nav">
                            <ul class="footer_nav_list">
                                <li class="footer_nav_item"><a href="index.ejs">home</a></li>
                                <li class="footer_nav_item"><a href="{{route('user.about')}}">about us</a></li>
                                <li class="footer_nav_item"><a href="#">offers</a></li>
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

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('js/offers_custom.js')}}"></script>

</body>

</html>