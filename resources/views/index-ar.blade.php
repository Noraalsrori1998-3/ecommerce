<!DOCTYPE html>
<html>
    <head>
        <title>My Frist Shooping</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{asset('shopping/fonts/css/all.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('shopping/css/jquery.bxslider.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('shopping/css/media.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('shopping/css/Category.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('shopping/css/‏‏Category1.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('shopping/css/‏‏Category2.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('shopping/css/‏‏‏‏Category2.css')}}" rel="stylesheet" type="text/css"/>

        <link href="{{asset('shopping/css/style.css')}}" rel="stylesheet" type="text/css"/>
    </head>
        <body>
            
           <div  id="wrapper">
             <div id="header">
                <a href="{{route('arabic')}}">العربية</a>
                <a href="file:///F:/%D9%85%D8%B4%D8%B1%D9%88%D8%B9%20%D8%A7%D9%84%D8%AA%D8%AE%D8%B1%D8%AC/Shooping/index.html">English</a>

                <br><br>
                <div id="subheader">
                    <div class="container">
                        <p>the world beast online shopping place</p>
                        <a href="#">Guest</a>
                        <a href="#">Consumer</a>
                        <a href="#">Download App</a>
                        <a href="#">Help</a>
                    </div>
                </div><br>
                        <div id="main-header">
                            <logo id="logo">
                                <span id="ist">MY</span>
                                <span id="iist">Shop.com</span>
                            </logo>
                            <div id="search">
                                <input class="search-area " type="text" name="text" placeholder="search here"/>
                                <input class="search-btn" type="submit" name="submit" value="SEARCH"/>
                            </div>
                        </div>
                            <div id="user-menu">
                                    <li><a href="file:///F:/%D9%85%D8%B4%D8%B1%D9%88%D8%B9%20%D8%A7%D9%84%D8%AA%D8%AE%D8%B1%D8%AC/%D8%A7%D9%84%D8%B3%D9%84%D8%A9/html1.html">Cart</a></li>
                        @if(!auth()->user())
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Login') }}</a>
                                </li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif
                            </div>
                        
            </div>
           <!--<select id="languge-selector">
                <option value="ar">العربية</option>
                <option value="en">English</option>

            </select>
            --> 
           <!-- <script src="languge.js">-->
            <div id="navigation">
                <a href="#" class="menu-togglr"><i class="fa fa-bars"></i></a>
                <nav id="mainav">
                    <a href="#">الرئيسية </a>
                    <a href="file:///F:/%D9%85%D8%B4%D8%B1%D9%88%D8%B9%20%D8%A7%D9%84%D8%AA%D8%AE%D8%B1%D8%AC/New%20%20Arrivals/index.html">المنتجات الجديدة </a>
                    <a href="#">Deals</a>
                    <a href="file:///F:/%D9%85%D8%B4%D8%B1%D9%88%D8%B9%20%D8%A7%D9%84%D8%AA%D8%AE%D8%B1%D8%AC/%D8%A7%D9%84%D8%A7%D9%82%D8%B3%D8%A7%D9%85/index.html">الاقسام</a>
                    <a href="#">Products</a>
                    <a href="#">Accessores</a>
                    <a href="#">Oreder</a>
                </nav>
            </div>
            
       
            <div id="slider">
                <ul class="bxslider">
                    <li><img src="{{asset('shopping/images/IMG-20230312-WA0016.jpg')}}"></li>
                    <li><img src="{{asset('shopping/images/pngtree-electronic-gadgets-device-digital-appliance-png-image_8368343.png')}}"></li>
                    <li><img src="{{asset('shopping/images/IMG-20230312-WA0017.jpg')}}"></li>
                    <li><img src="{{asset('shopping/images/IMG-20230307-WA0023.jpg')}}"></li>
                    <li><img src="{{asset('shopping/images/product-11.jpg')}}"></li>

                </ul>
            </div>
            <div class="container">
                <div id="heading-block">
                    <h2>Category</h2>

                </div>
                <a href="#">
                    <div class="catbox">
                        <img src="{{asset('shopping/images/IMG-20230221-WA0004.jpg')}}" alt="bags">
                        <span>bags</span>
                    </div>
                </a>
                <a href="#">
                    <div class="catbox">
                        <img src="{{asset('shopping/images/IMG-20230215-WA0116.jpg')}}" alt="Cosmetics">
                        <span>Cosmetics</span>
                    </div>
                </a>
                <a href="#">
                    <div class="catbox">
                        <img src="{{asset('shopping/images/IMG-20230310-WA0005.jpg')}}" alt="Shoes">
                        <span>Shoes</span>
                    </div>
                </a>
                <a href="#">
                    <div class="catbox">
                        <img src="{{asset('shopping/images/IMG-20230327-WA0028.jpg')}}" alt="Fragrances">
                        <span>Clothes</span>
                    </div>
                </a>
                <a href="#">
                    <div class="catbox">
                        <img src="{{asset('shopping/images/IMG-20230315-WA0004.jpg')}}" alt="Fragrances">
                        <span>Fragrances</span>
                    </div>
                </a>
                <a href="#">
                    <div class="catbox">
                        <img src="{{asset('shopping/images/14247976854.jpg')}}" alt="Fragrances">
                        <span>Electronics</span>
                    </div>
                </a>
                <a href="#">
                    <div class="catbox">
                        <img src="{{asset('shopping/images/967775283928_status_08d93be327a847a3935313ca82b6fd1d.jpg')}}" alt="Fragrances">
                        <span>Accessores</span>
                    </div>
                    <div class="catbox">
                        <img src="{{asset('shopping/images/images.jpg')}}" alt="Fragrances">
                        <span>Accessores</span>
                    </div>
                    <div class="catbox">
                        <img src="{{asset('images/IMG-20230219-WA0014.jpg')}}" alt="Fragrances">
                        <span>Accessores</span>
                    </div>
                </a>
            </div>
                <div id="heading-block">
                    <h2> Products</h2>
                </div>
                <div class="prod-container">
                    <div class="prod-box">
                        <img src="{{asset('shopping/images/IMG-20230221-WA0005.jpg')}}">
                        <div class="prod-trans">
                            <div class="ptod-fetuer">
                                <p>men suit</p>
                                <p style="color: #fff; font-weight:bpld;">Price $100</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <div class="prod-box">
                        <img src="{{asset('shopping/images/IMG-20230222-WA0009.jpg')}}">
                        <div class="prod-trans">
                            <div class="ptod-fetuer">
                                <p>men suit</p>
                                <p style="color: #fff; font-weight:bpld;">Price $100</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <div class="prod-box">
                        <img src="{{asset('shopping/images/IMG-20230309-WA0027.jpg')}}">
                        <div class="prod-trans">
                            <div class="ptod-fetuer">
                                <p>men suit</p>
                                <p style="color: #fff; font-weight:bpld;">Price $100</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <div class="prod-box">
                        <img src="{{asset('shopping/images/IMG-20230310-WA0011.jpg')}}">
                        <div class="prod-trans">
                            <div class="ptod-fetuer">
                                <p>men suit</p>
                                <p style="color: #fff; font-weight:bpld;">Price $100</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <div class="prod-box">
                        <img src="{{asset('shopping/images/IMG-20230317-WA0014.jpg')}}">
                        <div class="prod-trans">
                            <div class="ptod-fetuer">
                                <p>men suit</p>
                                <p style="color: #fff; font-weight:bpld;">Price $100</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <div class="prod-box">
                        <img src="{{asset('shopping/images/تنزيل (1).jpg')}}">
                        <div class="prod-trans">
                            <div class="ptod-fetuer">
                                <p>men suit</p>
                                <p style="color: #fff; font-weight:bpld;">Price $100</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <div class="prod-box">
                        <img src="{{asset('shopping/images/IMG-20230315-WA0011.jpg')}}">
                        <div class="prod-trans">
                            <div class="ptod-fetuer">
                                <p>men suit</p>
                                <p style="color: #fff; font-weight:bpld;">Price $100</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <div class="prod-box">
                        <img src="{{asset('shopping/images/IMG-20230327-WA0028.jpg')}}">
                        <button onclick="location.href='Category.html'">التفاصيل</button>
                        <div class="prod-trans">
                            <div class="ptod-fetuer">
                                <p>men suit</p>
                                <p style="color: #fff; font-weight:bpld;">Price $100</p>
                                <button onclick="location.href='Category.html';">Category.html </button>
                                <input type="button" value="Add to cart"><br>
                            </div>
                        </div>
                    </div>
                    <div class="prod-box">
                        <img src="{{asset('shopping/images/IMG-20230215-WA0010.jpg')}}">
                        <div class="prod-trans">
                            <div class="ptod-fetuer">
                                <p>Jewellery</p>
                                <p style="color: #fff; font-weight:bpld;">Price $100</p>
                                <button onclick="location.href='‏‏Category 1.html';">Category1.html </button>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <div class="prod-box">
                        <img src="{{asset('shopping/images/dekorativnaya-kosmetika-chto-eto-takoe-marki-i-sovety-po-vyboru-3.jpg')}}">
                        <div class="prod-trans">
                            <div class="ptod-fetuer">
                                <p>Cosmetics</p>
                                <p style="color: #fff; font-weight:bpld;">Price $100</p>
                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                    <div class="prod-box">
                        <img src="{{asset('shopping/images/IMG-20230313-WA0022.jpg')}}">
                        <div class="prod-trans">
                            <div class="ptod-fetuer">
                                <p>Cosmetics</p>
                                <p style="color: #fff; font-weight:bpld;">Price $100</p>
                                <button onclick="location.href='‏‏‏‏Category 2.html';">Category1.html </button>

                                <input type="button" value="Add to cart">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div id="heading-block">
                        <h2>Offers</h2>
                    </div>
                    <div class="offer">
                        <a href="#">
                            <img src="{{asset('shopping/images/logo-godrej.png')}}">
                        </a>
                    </div>
                    
                    <div class="offer">
                        <a href="#">
                            <img src="{{asset('shopping/images/logo-coca-cola.png')}}">
                        </a>
                    </div>
                </div>
                <div id="footer">
                    <div class="container">
                        <div class="footer_sub_1">
                            <h2>Our Story</h2>
                            <p>uiuoeruioyiuegvepoioyreuiyeuig 
                                uuygyfuer
                                iyuigyeuiryguiyughggufe
                                <span><a href="#">Read more</a></span>
                            </p>
                        </div>
                    </div>

                    <div class="footer_sub_2">
                        <h2> Important Links</h2>
                        <ul>
                           <li><a href="#">Home</a></li>
                           <li><a href="#">Nwe arrivals</a></li> 
                           <li><a href="#">Deals</a></li>
                            <li><a href="#">Elctronics</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Accessores</a></li>
                            <li><a href="#">Oreder</a></li>
                        </ul>
                    </div>
                    <div class="footer_sub_2">
                        <h2> Social Links</h2>
                        <ul>
                           <li><a href="#">Facebook</a></li>
                           <li><a href="#">Google+</a></li> 
                           <li><a href="#">Youtube</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Blogger</a></li>
                        </ul>
                    </div>
                    <div class="footer_sub_3">
                        <h2> Subscribe Us</h2>
                        <input type="text" name="subs" placeholder="write here your E-mail" class="subs">
                        <input type="submit" name="submit_btn" value="SUBSCRIBE" class="sub_btn">
                        <p class="sub_p">Enter your E-mail to get our notification. </p>
                    </div>
                </div>


            </div>
            <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>

            <script src="{{asset('shopping/js/jquery.bxslider.min.js')}}"></script>
            <script src="{{asset('shopping/js/my.js')}}"></script>
        </body>
</html>