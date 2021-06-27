@extends('layout/master')
@section('Title','Types')
@section('types')
	        <div class="clear"></div> <div class="clear"></div>    <div class="container">
        <!-- Fullbanner -->
        <div class="row ad-container banner-top">
            <div class="col-lg-12">
                <div id="ad-center-980-1">
                
                </div>
            </div>
        </div>
        <!-- /Fullbanner -->
        
        <!-- Main content -->
        
        

        
                <!-- /random suggest -->
                <div class="row nominated-movie">
            <div class="col-lg-12">
                
                <div class="top-movie-list ">
                  
                    <div class="list_carousel">
                      
                        <ul id="movie-carousel-top">
                          @foreach($obj_slider as $obj_sli)
                            <li>
                                <a class="movie-item m-block"  href="{{URL('object/'.$obj_sli->id)}}"> 
                                  
                                    <div class="block-wrapper">
                                        <div class="movie-thumbnail ratio-box ratio-3_4">
                                            <div class="public-film-item-thumb ratio-content" style="">
                                                <img src="{{asset('/assets/images/'.$obj_sli->Images)}}"/>
                                            </div>
                                        </div>
                                        
                                        <div class="movie-meta">
                                            <div class="movie-title-1">
                                             {{$obj_sli->Title}}</div><span class="movie-title-2">Keppeki Danshi! Aoyama-kun</span><span class="movie-title-chap">403407 </span><span class="ribbon">12/12</span>
                                          </div>
                                          
                                    </div>
                                    
                                </a>
                            </li>
                     @endforeach
                        </ul>
                        
                        <div class="clear"></div><a id="prevTop" class="prev" rel="nofollow"><span class="arrow-icon left"></span></a><a id="nextTop" class="next" rel="nofollow"><span class="arrow-icon right"></span></a>
                    </div>
                    
                </div>
            </div>
</div>
         
         
        <div class="row">   
            
            
            <center>
            <div id="ccadnet_203_227" style="display: none;"></div>         
            <script type="text/javascript">         
            
                <!-- if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {                   -->
                <!-- //$('#ntv_1882986').html("<a href=\"http:\/\/game.kul.vn\/thosanx\/download-detect.html\" target=\"_blank\" rel=\"noopener\"><img src=\"https:\/\/lh3.googleusercontent.com\/CiRmqsTCBzYCCnENPRHKqGcKKasGDsaJ3gH2Kh4gT3qCcshKTYDXsaE1H9Wg_DURmVNdnK_Cr6OT6p9O8mesqw5AVBC3Gj-13s7AVNTFjZGyu3HqFGOkkuoNHnBxMgGE80zhNb5IPA=w300-h250-no\" alt=\"\" width=\"300\" height=\"250\" \/><\/a>"); -->
                
                
                <!-- } -->
                <!-- else{ -->
                <!-- $('#ccadnet_203_227').html("<script>\r\n        (function(w, d, a) {\r\n            if (w.ccnads) {\r\n                return ccnads(a);\r\n            }\r\n            if (w.ccnAdsQueue) {\r\n                return w.ccnAdsQueue.push(a);\r\n            }\r\n            w.ccnAdsQueue = [];\r\n            w.ccnAdsQueue.push(a);\r\n            var s = d.createElement(\'script\');\r\n            s.async = true;\r\n            s.src = \'https:\/\/cdn2.cache.vn\/banners\/sspAnetTest\/cc_ssp_new.js\';\r\n            d.head.appendChild(s);\r\n        })(window, document, {\r\n            id: \'ccadnet_203_227\',\r\n            fallback: function() {}\r\n        });\r\n    <\/script>"); -->
                
                <!-- } -->
                
            
            </script>
            </center>
            
            
            <div class="col-lg-8">
                <!-- movie_home2 -->
                   
                
                <div class="movie-list-index home-v2">
            @foreach($type_menu1 as $type1)
            <div class="block update">
                <div id="qc_clgt"> </div>
                    
                    <div class="widget-title">
                  <a href="{{URL('type/'.$type1->id)}}"> <h3 class="title">{{$type1->typeName}}</h3></a>
                   
                    <div class="clear"></div>
                    @foreach($obj_content as $obj_ct)
                    @if($type1->id == $obj_ct->type_id)
                    <div class="last-film-box-wrapper">
                    <div class="content" data-name="all">
                        <ul class="last-film-box" id="movie-last-movie">
                          
                           <li>
                                
                                <a class="movie-item m-block"  href="{{URL('object/'.$obj_ct->id)}}">
                                    
                                    <div class="block-wrapper">
                                        <div class="movie-thumbnail ratio-box ratio-3_4">
                                            <div class="public-film-item-thumb ratio-content" style="">
                                                <img src="{{asset('/assets/images/'.$obj_ct->Images)}}"/>
                                            </div>
                                        </div>
                                        
                                        <div class="movie-meta">
                                            <div class="movie-title-1">
                                             </div><span class="movie-title-2">{{$obj_ct->Title}}</span><span class="movie-title-chap">403407 </span><span class="ribbon">12/12</span>
                                          </div>
                                          
                                    </div>
                                </a>
                            </li>
                                                      
                        </ul>                  
                    </div>
                    </div>
                    @endif
                    @endforeach 
                    </div>   
                    <div class="clear"></div>       
                </div>  
        @endforeach
                
                </div>
                <div class="clear"></div>
                
                        
            </div>
            <!-- Sidebar -->
            <div class="col-lg-4">
                <div id = "qc_clgt_vuong" class="ad-container ad-top-300-250">                          
                </div>
                <div class="ad-container ad-top-300-250">

                <ins id="ccadnet_203_227" style="display: none;">
    <script>
        (function(w, d, a) {
            if (w.ccnads) {
                return ccnads(a);
            }
            if (w.ccnAdsQueue) {
                return w.ccnAdsQueue.push(a);
            }
            w.ccnAdsQueue = [];
            w.ccnAdsQueue.push(a);
            var s = d.createElement('script');
            s.async = true;
            s.src = 'https://cdn2.cache.vn/banners/sspAnetTest/cc_ssp_new.js';
            d.head.appendChild(s);
        })(window, document, {
            id: 'ccadnet_203_227',
            fallback: function() {}
        });
    </script>
</ins>

<div class="ad_location" id="ads_location"></div>               
                </div>
                <div class="right-box top-film">
                    
                    
                    <h2 class="right-box-header star-icon"><span>Xem Nhiều Nhất</span></h2>
                    <span class="tabs"><div class="tab active" data-name="day" data-target=".right-box.top-film .content"><div class="name"><a title="Day" href="DAY">Ngày</a></div></div>
                                
                                
                                
                                 </span>
                    <div class="right-box-content">
                    
                    
<div class="content" data-name="day">
<ul class="list-top-movie">
  @foreach($obj_slider as $obj)
        <li class="list-top-movie-item" id="list-top-movie-item">
        
        <a class="list-top-movie-link"  href="">
            <span class="status">12/12</span>
            <div class="list-top-movie-item-thumb" ></div>
            <div class="list-top-movie-item-info"><span class="list-top-movie-item-vn">{{$obj->Title}}</span><span class="list-top-movie-item-en"> Okami-San and ...</span><span class="list-top-movie-item-view">3720 Lượt xem</span></div>
        </a>
        
    </li>
  @endforeach      
</ul>
</div>

             
                    </div>
                    
                </div>
                <div class="clear"></div>
                <div class="ad-container ad-top-300-250">
                <ins id="ccadnet_203_227" style="display: none;">
    <script>
        (function(w, d, a) {
            if (w.ccnads) {
                return ccnads(a);
            }
            if (w.ccnAdsQueue) {
                return w.ccnAdsQueue.push(a);
            }
            w.ccnAdsQueue = [];
            w.ccnAdsQueue.push(a);
            var s = d.createElement('script');
            s.async = true;
            s.src = 'https://cdn2.cache.vn/banners/sspAnetTest/cc_ssp_new.js';
            d.head.appendChild(s);
        })(window, document, {
            id: 'ccadnet_203_227',
            fallback: function() {}
        });
    </script>
</ins>

<div class="ad_location" id="ads_location"></div>               
                </div>  
               
                
                
                <div class="ad-container right-box ad-300">
                                    </div>
                <div class="clear"></div>
                <!-- /Ad: Sidebanner -->
            </div>
            <div class="clear"></div>
            <!-- /Sidebar -->
            <!-- Footer banner -->
            <div class="container ad-container banner-footer" id="footer-banner">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- ad center 2-->
                        <div class="ad-center-980">
                        
                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer banner -->
        </div>
        <!-- /Main content -->
    </div>
@endsection