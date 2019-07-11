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

    </div>



    <!-- Search -->



    <!-- Intro -->

    <div class="intro">
        <div class="container" style="margin-left: 400px">
            {!! $chart->html() !!}
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

{!! Charts::scripts() !!}
{!! $chart->script() !!}
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