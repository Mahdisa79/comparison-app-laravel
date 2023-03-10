@extends('customer.layouts.master')

{{-- @extends('customer.layouts.master-two-col') --}}



@section('content')

{{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> Well done! You have successfully read this important alert message.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div> --}}

<div class="slider-container"> 
    <div class="module sohomepage-slider ">
        <div class="yt-content-slider"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
            @foreach ( $homeSlides as $slide )
                
            <div class="yt-content-slide">
                <a href="{{$slide->url}}"><img  src="{{ asset($slide->image['indexArray']['userHome'])}}"
                    alt="{{$slide->title}}" class="img-responsive"></a>
            </div>

            @endforeach

        </div>
        
        {{-- <div class="loadeding"></div> --}}
    </div>            
</div>


<div class="content-main-w">
    <div class="container">
        <!-- So categories -->
        <div id="so_categories_51" class="so-categories module theme3 slider-cates5">                    
            <div class="modcontent">
                <div class="cat-wrap theme3">
                    @foreach ($brands as $brand )
                        
                    <div class="content-box">
                        <div class="image-cat">
                            
                            <a href="#"><img src="{{ asset($brand->logo['indexArray']['small'])}}" alt="image" /></a>                                
                        </div>                        
                        <div class="cat-title">
                            <a href="#">{{$brand->persian_name}}</a>
                        </div>                        
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
        <!-- end So categories -->

        <div class="module listingtab-layout5">
            <div class="pre_text">
                Top sale in the week              
            </div>                 
            <h3 class="modtitle"><span>پرفروش ترین ها</span></h3>
            <div class="modcontent">
                <div id="so_listing_tabs_4" class="so-listing-tabs first-load">
                    <div class="loadeding"></div>
                    <div class="ltabs-wrap">
                        <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="none" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="4" data-sm="3" data-xs="1" data-margin="30" data-type_show="loadmore">
                            <!--Begin Tabs-->
                            <div class="ltabs-tabs-wrap"> 
                            <span class="ltabs-tab-selected">Brake Parts</span> <span class="ltabs-tab-arrow">▼</span>
                                <div class="item-sub-cat">
                                    <ul class="ltabs-tabs cf">
                                        {{-- <li class="ltabs-tab tab-sel" data-category-id="34" data-active-content=".items-category-34"> <span class="ltabs-tab-label">Brake Parts</span> </li> --}}
                                        {{-- <li class="ltabs-tab " data-category-id="32" data-active-content=".items-category-32"> <span class="ltabs-tab-label">Lighting & Electical</span> </li> --}}
                                        {{-- <li class="ltabs-tab " data-category-id="33" data-active-content=".items-category-33"> <span class="ltabs-tab-label">Shock & Suspension</span> </li> --}}
                                    </ul>
                                </div>
                            </div>
                            <!-- End Tabs-->
                        </div>
                        <div class="wap-listing-tabs products-list grid">
                            <div class="ltabs-items-container">                                    
                                <!--Begin Items-->
                                <div class="ltabs-items ltabs-items-selected items-category-34" data-total="16">
                                    <div class="row">
         

                                     @foreach ($cars as $car )
                                         

                                    <div class="col-md-3">

                                        <div class="item">
                                            <div class="product-layout product-grid">                                                 
                                                <div class="product-item-container item--static">
                                                    <div class="left-block">
                                                        <div class="product-image-container second_img">
                                                            <a  title="{{$car->name}}">
                                                                <img src="{{ asset($car->image['indexArray']['medium'])}}" class="img-1 img-responsive" alt="image1">
                                                                <img src="{{ asset($car->image['indexArray']['medium'])}}" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group cartinfo--static">
                                                            
                                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                                            <button type="button" car-id = "{{$car->id}}" class="addToCart addToCompare" title="Add to cart">
                                                                <span>افزودن به لیست مقایسه</span>   
                                                            </button>
                                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>                                                    
                                                        </div>
                                                        <h4><a href="#" title="Sunt in culpa" target="_self">{{$car->name}}</a></h4>
                                                        <div class="price">
                                                          <span class="price">{{$car->price_us}}</span>
                                                        </div>
                                                    </div>
                                                
                                                </div>                                            
                                            </div>

                                        </div>  

                                    </div>

                                    @endforeach   



                                    </div>
                                    <div class="ltabs-loadmore" data-active-content=".items-category-31" data-rl_start="12" data-rl_total="12" data-ajaxurl="" data-rl_load="8" data-moduleid="253">
                                        <div class="ltabs-loadmore-btn loaded" data-label="All ready" style="display: inline-block;">                                                    
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="ltabs-items items-category-32 grid" data-total="16">
                                    <div class="ltabs-loading"></div>
                                    
                                </div>
                                <div class="ltabs-items  items-category-33 grid" data-total="16">
                                    <div class="ltabs-loading"></div>
                                </div>
                                <!--End Items-->
                            </div>
                        </div>
                        
                        
                    </div>   
                </div>
            </div>
        </div>

    </div>
    <div class="row-banners">
        <div class="banners banners1">
            <div class="item item1">
                <a href="#"><img src="{{ asset('customer-assets/image/catalog/banners/id5-bn1.jpg')}}" alt="banner"></a>
            </div>
            <div class="item item2">
                <a href="#"><img src="{{ asset('customer-assets/image/catalog/banners/id5-bn2.jpg')}}" alt="banner"></a>
            </div>
            <div class="item item3">
                <a href="#"><img src="{{ asset('customer-assets/image/catalog/banners/id5-bn3.jpg')}}" alt="banner"></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Col products simple-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="module product-simple">
                    <h3 class="modtitle">
                        <span>New Arrivals</span>
                    </h3>
                    <div class="modcontent">
                        <div id="so_extra_slider_31" class="so-extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class="yt-content-slider extraslider-inner" data-rtl="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-buttonpage="top">                                   
                                <div class="item">
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/2.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/3.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Doenpuis consuat" target="_self">Doenpuis consuat</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                              <span class="price">$76.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/8.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/6.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Drum stick tempo" target="_self">Drum stick tempo</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                              <span class="price">$65.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/11.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/10.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Lorem ipsum dolor" target="_self">Lorem ipsum dolor</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    <span class="price-new">$75.00</span>
                                                    <span class="price-old">$86.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/7.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/9.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Ercita tioni idunt" target="_self">Ercita tioni idunt</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                              <span class="price">$89.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="item">
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/3.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/7.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Lando duille short" target="_self">Lando duille short</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    <span class="price">$85.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/2.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/1.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Picanha porkcho" target="_self">Picanha porkcho</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    <span class="price-new">$85.00</span>
                                                    <span class="price-old">$96.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/8.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/7.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Xancetta bresao" target="_self">Xancetta bresao</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                              <span class="price">$45.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/9.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/6.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Picanha porkcho" target="_self">Picanha porkcho</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    <span class="price-new">$75.00</span>
                                                    <span class="price-old">$90.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="module product-simple">
                    <h3 class="modtitle">
                        <span>Recommened</span>
                    </h3>
                    <div class="modcontent">
                        <div id="so_extra_slider_31" class="so-extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class="yt-content-slider extraslider-inner" data-rtl="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-buttonpage="top">                                   
                                <div class="item">
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/1.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/3.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Ercita tioni idunt" target="_self">Ercita tioni idunt</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                              <span class="price">$89.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/5.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/6.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Drum stick tempo" target="_self">Drum stick tempo</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                              <span class="price">$65.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/4.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/7.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Picanha porkcho" target="_self">Picanha porkcho</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    <span class="price-new">$85.00</span>
                                                    <span class="price-old">$96.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/10.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/9.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Ercita tioni idunt" target="_self">Ercita tioni idunt</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                              <span class="price">$89.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="item">
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/6.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/7.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Mandouille short" target="_self">Mandouille short</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    <span class="price">$85.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/2.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/1.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Picanha porkcho" target="_self">Picanha porkcho</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    <span class="price-new">$85.00</span>
                                                    <span class="price-old">$96.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/8.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/7.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Xancetta bresao" target="_self">Xancetta bresao</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                              <span class="price">$45.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/9.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/6.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Picanha porkcho" target="_self">Picanha porkcho</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    <span class="price-new">$75.00</span>
                                                    <span class="price-old">$90.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 last-col">
                <div class="module product-simple">
                    <h3 class="modtitle">
                        <span>Most Viewed</span>
                    </h3>
                    <div class="modcontent">
                        <div id="so_extra_slider_32" class="so-extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class="yt-content-slider extraslider-inner" data-rtl="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-buttonpage="top">
                                <div class="item">
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/6.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/7.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Mandouille short" target="_self">Mandouille short</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    <span class="price">$85.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/2.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/1.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Picanha porkcho" target="_self">Picanha porkcho</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    <span class="price-new">$85.00</span>
                                                    <span class="price-old">$96.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/8.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/7.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Xancetta bresao" target="_self">Xancetta bresao</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                              <span class="price">$45.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/9.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/6.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Picanha porkcho" target="_self">Picanha porkcho</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    <span class="price-new">$75.00</span>
                                                    <span class="price-old">$90.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    src="{{ asset('customer-assets/image/catalog/demo/product/270/1.jpg')}}"
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/1.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/3.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Ercita tioni idunt" target="_self">Ercita tioni idunt</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                              <span class="price">$89.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/5.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/6.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Drum stick tempo" target="_self">Drum stick tempo</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                              <span class="price">$65.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/4.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/7.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Picanha porkcho" target="_self">Picanha porkcho</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                                <div class="price">
                                                    <span class="price-new">$85.00</span>
                                                    <span class="price-old">$96.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-container product-layout item-inner">
                                        <div class="item-image">
                                            <div class="product-image-container second_img">
                                                <a href="product.html">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/10.jpg')}}" class="img-1 img-responsive" alt="image1">
                                                    <img src="{{ asset('customer-assets/image/catalog/demo/product/270/9.jpg')}}" class="img-2 img-responsive" alt="image2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title"><a href="product.html" title="Ercita tioni idunt" target="_self">Ercita tioni idunt</a></div>
                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="price">
                                              <span class="price">$89.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col products simple-->
        </div>
    </div>

    <div class="row-brands">
        <div class="slider-brands container">           
            <div class="yt-content-slider contentslider" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="6" data-items_column0="6" data-items_column1="5" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                <div class="item"><a href="#"><img src="{{ asset('customer-assets/image/catalog/brands/b1.jpg')}}" alt="brand"></a></div>
                <div class="item"><a href="#"><img src="{{ asset('customer-assets/image/catalog/brands/b2.jpg')}}" alt="brand"></a></div>
                <div class="item"><a href="#"><img src="{{ asset('customer-assets/image/catalog/brands/b3.jpg')}}" alt="brand"></a></div>
                <div class="item"><a href="#"><img src="{{ asset('customer-assets/image/catalog/brands/b4.jpg')}}" alt="brand"></a></div>
                <div class="item"><a href="#"><img src="{{ asset('customer-assets/image/catalog/brands/b5.jpg')}}" alt="brand"></a></div>
                <div class="item"><a href="#"><img src="{{ asset('customer-assets/image/catalog/brands/b6.jpg')}}" alt="brand"></a></div>
                <div class="item"><a href="#"><img src="{{ asset('customer-assets/image/catalog/brands/b3.jpg')}}" alt="brand"></a></div>
            </div>
            
        </div>
    </div>

    <div class="container">
        <div class="module so-latest-blog blog-home">
            <div class="pre_text">Our recent posts</div>
            <h3 class="modtitle"><span>Latest blogs</span></h3>
            <div class="modcontent clearfix">
                <div class="so-blog-external buttom-type1 button-type1">
                    <div class="blog-external yt-content-slider contentslider" data-rtl="no" data-loop="no" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="3" data-items_column0="3" data-items_column1="2" data-items_column2="2" data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                        <div class="media">
                            <div class="item head-button">
                                <div class="media-left so-block">
                                    <a class="imag" href="#"><img src="{{ asset('customer-assets/image/catalog/blog/1.jpg')}}" alt="image" /></a>
                                </div>
                                <div class="media-body">
                                    <div class="media-content so-block">
                                        <div class="infos"><span class="media-date-added"> March 6th, 2019</span>By <span class="media-author">Wash upito</span></div>
                                        <h4 class="media-heading font-title head-item">
                                            <a href="#" title="Biten demons lector in henderit in vulp no sea takimata sanctus est" target="_self">Biten demons lector in henderit in ..</a>
                                        </h4>
                                        <div class="readmore font-title">
                                            <a href="#" target="_self"><span>Read more</span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item head-button">
                                <div class="media-left so-block">
                                    <a class="imag" href="#"><img src="{{ asset('customer-assets/image/catalog/blog/2.jpg')}}" alt="image" /></a>
                                </div>
                                <div class="media-body">
                                    <div class="media-content so-block">
                                        <div class="infos"><span class="media-date-added"> March 6th, 2019</span>By <span class="media-author">Wash upito</span></div>
                                        <h4 class="media-heading font-title head-item">
                                            <a href="#" title="Commodo laoreet semper tincidun  sit vel illum dolore eu feugiat" target="_self">Commodo laoreet semper tincidun sit ..</a>
                                        </h4>
                                        <div class="readmore font-title">
                                            <a href="#" target="_self"><span>Read more</span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item head-button">
                                <div class="media-left so-block">
                                    <a class="imag" href="#"><img src="{{ asset('customer-assets/image/catalog/blog/3.jpg')}}" alt="image" /></a>
                                </div>
                                <div class="media-body">
                                    <div class="media-content so-block">
                                        <div class="infos"><span class="media-date-added"> March 6th, 2019</span>By <span class="media-author">Wash upito</span></div>
                                        <h4 class="media-heading font-title head-item">
                                            <a href="#" title="Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse" target="_self">Duis autem vel eum iriure dolor ..</a>
                                        </h4>
                                        <div class="readmore font-title">
                                            <a href="#" target="_self"><span>Read more</span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row-color">
        <div class="block-services container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-margin1">
                    <div class="icon-service">
                        <div class="icon"><i class="pe-7s-car">&nbsp;</i></div>
                        <div class="text">
                            <h6>Free shipping</h6>
                            <p class="no-margin">On all orders over $99.00</p>
                        </div>
                    </div>
                </div>        
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-margin1">
                    <div class="icon-service">
                        <div class="icon"><i class="pe-7s-refresh-2">&nbsp;</i></div>
                        <div class="text">
                            <h6>30 days return</h6>
                            <p class="no-margin">You have 30 days to return</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-margin">
                    <div class="icon-service">
                        <div class="icon"><i class="pe-7s-door-lock">&nbsp;</i></div>
                        <div class="text">
                            <h6>Safe Shopping<br></h6>
                            <p class="no-margin">Payment 100% secure</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="icon-service">
                        <div class="icon"><i class="pe-7s-users">&nbsp;</i></div>
                        <div class="text">
                            <h6>Online support</h6>
                            <p class="no-margin">Contact us 24 hours a day</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
<script>

function successToast(message){
        var successToastTag = '<section class="toast-success toast-wrapper" data-delay="3000">\n' +    
        '<section class="toast-body py-3 d-flex bg-success text-white" style="background-color: #669751 ; color: #fff7f7" >\n' +
        '<small class="ml-auto ">' + message + '</small>\n'  +
            '</section>\n' +
            '</section>';

            $('.toast-wrapper').append(successToastTag);
            $('.toast-success').delay(3000).queue(function() {
                $(this).remove();
            })

    }


  $('.addToCompare').click(function() {

    var id = $(this).attr('car-id');


    // console.log(id);



    $.ajax({
            url : '/add-to-compare-list/'+id,
            type : "GET",
            success : function(response){

                console.log(response);
                if(response==1){
                    successToast('محصول با موفقیت به سبد خرید اضافه شد')
                }
                else if(response==2){
                    successToast('برای افزودن محصول به لیست مقایسه ابتدا باید لاگین کنید')
                }
                else if(response==3){
                    successToast('این محصول از قبل توی لیست مقایسه بوده')
                }
                else if(response==4){
                    successToast('حداکثر چهار محصول میتواند در لیست مقایسه باشد')
                }
            },
      
        });



  });


    
    


    $(document).ready(function(){
    //    console.log($('#toast-massage')); 
        // $('#toast-massage')
   });

</script>

@endsection


