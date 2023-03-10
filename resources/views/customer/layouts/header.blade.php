    <!-- Header Container  -->
    <header id="header" class="typeheader-5">
        
        <!-- Header Top -->
        <div class="header-top hidden-compact"> 
            <div class="container">
                <div class="row">
                    <div class="header-top-left col-lg-3 col-md-4 hidden-sm hidden-xs">           
                        <div class="telephone ">
                            <i class="fa fa-phone"></i> Hotline: <a href="tel:888-943-446-000">888-943-446-000</a>
                        </div>
                    </div>
                    <div class="header-top-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <ul class="top-link list-inline lang-curr">
                            <li class="currency">
                                <div class="btn-group currencies-block">
                                    <form action="index.html" method="post" enctype="multipart/form-data" id="currency">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <span class="icon icon-credit "></span> $ US Dollar  <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu btn-xs">
                                            <li> <a href="#">(€)&nbsp;Euro</a></li>
                                            <li> <a href="#">(£)&nbsp;Pounds    </a></li>
                                            <li> <a href="#">($)&nbsp;US Dollar </a></li>
                                        </ul>
                                    </form>
                                </div>
                            </li>   
                            <li class="language">
                                <div class="btn-group languages-block ">
                                    <form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <img src="{{ asset('customer-assets/image/catalog/flags/gb.png')}}" alt="English" title="English">
                                            <span class="eng">English</span>
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            
                                            <li><a href="index.html"><img class="image_flag" src="{{ asset('customer-assets/image/catalog/flags/gb.png')}}" alt="English" title="English" /> English </a></li>
                                            <li> <a href="html_with_RTL/index.html"> <img class="image_flag" src="{{ asset('customer-assets/image/catalog/flags/ar.png')}}" alt="Arabic" title="Arabic" /> Arabic </a> </li>
                                        </ul>
                                    </form>
                                </div>
                                
                            </li>
                        </ul>
                        <ul class="top-log list-inline"> 
                            @if(auth()->check()) 
                            <li><i class="fa fa-user"></i>{{Auth::user()->name}} / </li><li><a href="{{route('auth.logout')}}">خروج</a></li>
                            @else     
                            <li><i class="fa fa-lock"></i><a href="{{route('auth.login-form')}}">ورود</a> / </li><li><a href="{{route('auth.register')}}">ثبت نام</a></li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>      
        </div>
        <div class="header-middle hidden-compact">
            <div class="container">
                <div class="row">           
                    <div class="logo-w col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="logo">
                           
                            <a href="index.html"><img  src="{{ asset('customer-assets/image/catalog/logo.png')}}" title="Your Store" alt="Your Store" /></a>
                        </div>                        
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 middle-right">
                        <div class="main-menu-w">
                            <div class="responsive so-megamenu megamenu-style-dev">
                                <nav class="navbar-default">
                                    <div class=" container-megamenu  horizontal open ">
                                        <div class="navbar-header">
                                            <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        
                                        <div class="megamenu-wrapper">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                        <li class="home hover">
                                                            <a href="index.html">Home</a>
                                                            <div class="sub-menu" style="width:100%;" >
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <a href="index.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="{{asset('customer-assets/image/catalog/menu/home1.jpg')}}" alt="image">
                                                                                    
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - (Default)</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home2.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="{{asset('customer-assets/image/catalog/menu/home2.jpg')}}" alt="image">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - Layout 2</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home3.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="{{asset('customer-assets/image/catalog/menu/home3.jpg')}}" alt="image">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - Layout 3</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home4.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="{{asset('customer-assets/image/catalog/menu/home4.jpg')}}" alt="image">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - Layout 4</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home5.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="{{asset('customer-assets/image/catalog/menu/home5.jpg')}}" alt="image">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - Layout 5</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home6.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="{{asset('customer-assets/image/catalog/menu/home5.jpg')}}" alt="image">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - Layout 6</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home7.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="{{asset('customer-assets/image/catalog/menu/home7.jpg')}}" alt="image">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - Layout 7</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home8.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="{{asset('customer-assets/image/catalog/menu/home8.jpg')}}" alt="image">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - Layout 8</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="html_with_RTL/index.html" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border"  src="{{asset('customer-assets/image/catalog/menu/rtl.jpg')}}" alt="image">
                                                                                   
                                                                                    
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - RTL</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        
                                                                        <!-- <div class="col-md-15">
                                                                            <a href="#" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/demo/feature/comming-soon.png" alt="">
                                                                                    
                                                                                </span> 
                                                                                <h3 class="figcaption">Comming soon</h3> 
                                                                            </a> 
                                                                            
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Features</strong>                                                                
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; right: auto;">
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#" class="title-submenu">Listing pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="category.html">Category Page 1 </a></li>
                                                                                        <li><a href="category-v2.html">Category Page 2</a></li>
                                                                                        <li><a href="category-v3.html">Category Page 3</a></li>
                                                                                    </ul>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#" class="title-submenu">Product pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="product.html">Product page 1</a></li>
                                                                                        <li><a href="product-v2.html">Product page 2</a></li>
                                                                                        <!-- <li><a href="product-v3.html">Image size - small</a></li> -->
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#" class="title-submenu">Shopping pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="cart.html">Shopping Cart Page</a></li>
                                                                                        <li><a href="checkout.html">Checkout Page</a></li>
                                                                                        <li><a href="compare.html">Compare Page</a></li>
                                                                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                                                                    
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#" class="title-submenu">My Account pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="login.html">Login Page</a></li>
                                                                                        <li><a href="register.html">Register Page</a></li>
                                                                                        <li><a href="my-account.html">My Account</a></li>
                                                                                        <li><a href="order-history.html">Order History</a></li>
                                                                                        <li><a href="order-information.html">Order Information</a></li>
                                                                                        <li><a href="return.html">Product Returns</a></li>
                                                                                        <li><a href="gift-voucher.html">Gift Voucher</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Pages</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 40%; ">
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item" href="faq.html">FAQ</a></li>
                                                                                
                                                                                <li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
                                                                                <li><a class="subcategory_item" href="contact.html">Contact us</a></li>
                                                                                <li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
                                                                                <li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
                                                                                <li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
                                                                                <li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Categories</strong>                                                             
                                                      
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; display: none;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-3 img img1">
                                                                                    
                                                                                    <a href="#"><img src="{{asset('customer-assets/image/catalog/menu/megabanner/image-1.jpg')}}" alt="banner1"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img2">
                                                                                    <a href="#"><img src="{{asset('customer-assets/image/catalog/menu/megabanner/image-2.jpg')}}" alt="banner2"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img3">
                                                                                    <a href="#"><img src="{{asset('customer-assets/image/catalog/menu/megabanner/image-3.jpg')}}" alt="banner3"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img4">
                                                                                    <a href="#"><img src="{{asset('customer-assets/image/catalog/menu/megabanner/image-4.jpg')}}" alt="banner4"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Automotive</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"  class="main-menu">Car Alarms and Security</a></li>
                                                                                            <li><a href="#"  class="main-menu">Car Audio &amp; Speakers</a></li>
                                                                                            <li><a href="#"  class="main-menu">Gadgets &amp; Auto Parts</a></li>
                                                                                            <li><a href="#"  class="main-menu">More Car Accessories</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Funitures</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"  class="main-menu">Bathroom</a></li>
                                                                                            <li><a href="#"  class="main-menu">Bedroom</a></li>
                                                                                            <li><a href="#"  class="main-menu">Decor</a></li>
                                                                                            <li><a href="#"  class="main-menu">Living room</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Jewelry &amp; Watches</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"  class="main-menu">Earings</a></li>
                                                                                            <li><a href="#"  class="main-menu">Wedding Rings</a></li>
                                                                                            <li><a href="#"  class="main-menu">Men Watches</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Electronics</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"  class="main-menu">Computer</a></li>
                                                                                            <li><a href="#"  class="main-menu">Smartphone</a></li>
                                                                                            <li><a href="#"  class="main-menu">Tablets</a></li>
                                                                                            <li><a href="#"  class="main-menu">Monitors</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Accessories</strong>
                                             
                                                            </a>
                                                
                                                        </li>
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="blog-page.html" class="clearfix">
                                                                <strong>Blog</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li>
                                                        
                                                        
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="search-header-w">
                            <div class="ico-search"><i class="fa fa-search"></i></div>                                
                              
                            <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                <form method="GET" action="index.html">
                                    <div id="search0" class="search input-group form-group">
                                        <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                            <select class="no-border" name="category_id">
                                                <option value="0">All Categories</option>
                                                <option value="78">Apparel</option>
                                                <option value="77">Cables &amp; Connectors</option>
                                                <option value="82">Cameras &amp; Photo</option>
                                                <option value="80">Flashlights &amp; Lamps</option>
                                                <option value="81">Mobile Accessories</option>
                                                <option value="79">Video Games</option>
                                                <option value="20">Jewelry &amp; Watches</option>
                                                <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
                                                <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option>
                                                <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
                                            </select>
                                        </div>

                                        <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Keyword here..." name="search">
                                
                                        <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                                    
                                    </div>
                                    <input type="hidden" name="route" value="product/search" />
                                </form>
                            </div>
                        </div>                                    
                    </div>
                </div>
                <div class="shopping_cart">
                    <div id="cart" class="btn-shopping-cart">
                        <a href="{{route('customer.compareList')}}"  class="btn-group top_cart dropdown-toggle" >
                            <div class="shopcart">
                                <span class="icon-c">
                                    <i class="fa fa-balance-scale"></i>
                                </span>
                                <div class="shopcart-inner">
                                    <p class="text-shopping-cart">
                                        مقایسه
                                    </p>
                                    <span class="total-shopping-cart cart-total-full">
                                    <span class="items_cart"></span><span class="items_cart2">   تعداد محصولات  {{ auth()->check() ? auth()->user()->compare->count() : '0'}}</span><span class="items_carts">$162.00</span>
                                    </span>
                                </div>
                            </div>
                        </a>

                    </div>
                </div> 
            </div>
            
        </div>

    </header>
    <!-- //Header Container  -->