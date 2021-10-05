@extends('layout/master')
@section('Title','Object')
@section('object')
	  <!DOCTYPE html>
<html lang="vi-VN">
<div class="container">
        <!-- Fullbanner -->
        <div class="row ad-container banner-top">
            <div class="col-lg-12">
                <div class="ad-center-980">
            
                                    </div>
            </div>
        </div>
        <ol class="breadcrumb"><li><a href="https://anime47.com/"><span>HOME</span>
        </a><meta content="0" /></li>
        @foreach($type_menu as $typ1)
        <li itemprop="itemListElement" itemscope ><a  href=""><span>{{$typ1->typeName}}</span></a><meta itemprop="position" content="1" />
        </li>
        @endforeach
    	</ol>
        
         
        <div class="row">
        <center>
        <div id="qc_clgt"> </div>
        
            
            
            </center>
          
            <div class="col-lg-8">
                <!-- movie_home2 -->
                
                
                <div class="movie-info"><div class="block-movie-info movie-info-box">
                    <!-- phia tren + phia duoi ben trai -->
                    
 <style>.CS
STableGenerator {
    margin:0px;padding:0px;
    width:100%;
    border:1px solid #000000;
    
    -moz-border-radius-bottomleft:7px;
    -webkit-border-bottom-left-radius:7px;
    border-bottom-left-radius:7px;
    
    -moz-border-radius-bottomright:7px;
    -webkit-border-bottom-right-radius:7px;
    border-bottom-right-radius:7px;
    
    -moz-border-radius-topright:7px;
    -webkit-border-top-right-radius:7px;
    border-top-right-radius:7px;
    
    -moz-border-radius-topleft:7px;
    -webkit-border-top-left-radius:7px;
    border-top-left-radius:7px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
    width:100%;
    height:100%;
    margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
    -moz-border-radius-bottomright:7px;
    -webkit-border-bottom-right-radius:7px;
    border-bottom-right-radius:7px;
}
.CSSTableGenerator table tr:first-child td:first-child {
    -moz-border-radius-topleft:7px;
    -webkit-border-top-left-radius:7px;
    border-top-left-radius:7px;
}
.CSSTableGenerator table tr:first-child td:last-child {
    -moz-border-radius-topright:7px;
    -webkit-border-top-right-radius:7px;
    border-top-right-radius:7px;
}.CSSTableGenerator tr:last-child td:first-child{
    -moz-border-radius-bottomleft:7px;
    -webkit-border-bottom-left-radius:7px;
    border-bottom-left-radius:7px;
}.CSSTableGenerator tr:hover td{
    
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#ffaa56; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
    vertical-align:middle;
    
    
    border:1px solid #000000;
    border-width:0px 1px 1px 0px;
    text-align:left;
    padding:4px;
    font-size:12px;
    font-family:Arial;
    font-weight:bold;
    color:#000000;
}.CSSTableGenerator tr:last-child td{
    border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
    border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
    border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
        background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
    background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");  background: -o-linear-gradient(top,#ff7f00,bf5f00);

    background-color:#ff7f00;
    border:0px solid #000000;
    text-align:center;
    border-width:0px 0px 1px 1px;
    font-size:14px;
    font-family:Arial;
    font-weight:bold;
    color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
    background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
    background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");  background: -o-linear-gradient(top,#ff7f00,bf5f00);

    background-color:#ff7f00;
}
.CSSTableGenerator tr:first-child td:first-child{
    border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
    border-width:0px 0px 1px 1px;
}</style>
 <!-- Load Facebook SDK for JavaScript -->
  <script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=907721805949566";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="block-wrapper page-single" itemscope itemtype="https://schema.org/Movie">
                    <!-- Thông tin phim -->
                    <div class="movie-info">
                        <div class="block-movie-info movie-info-box">
                            <div class="row">
                                @foreach($object_id as $type)
                                <div class="col-6 movie-detail">
                                    <h1 class="movie-title"><span class="title-1">{{$type->Title}}</span><span class="title-2" itemprop="name">Nomad: Megalo Box 2</span><span class="title-year"> (2021)</span></h1>
                                    <div class="movie-meta-info">
                                        <dl class="movie-dl">
                                        <dt class="movie-dt">Trạng thái: </dt>
                                        <dd class="movie-dd imdb">11/??</dd>
                                        <br />
                                        <dt class="movie-dt">Thể loại: </dt>
                                        @foreach($type_menu as $typ)
                                        <dd class="movie-dd dd-cat">
                                        	<a href="">{{$typ->typeName}}</a>
                                        </dd>
                                        @endforeach
                                        <br />
                                        <dt class="movie-dt">Dạng Anime: </dt>
                                        <dd class="movie-dd">
                                        	<a href="danh-sach/tv-series/1.html">TV Series</a>
                                        </dd>
                                        <br />        
                                        <dt class="movie-dt">Season: </dt><dd class="movie-dd"><a href="https://anime47.com/tim-nang-cao/?status=&season=5&year=2021&sort=popular"> Mùa Xuân  Năm 2021</a></dd><br />       
                                        <dt class="movie-dt">Năm: </dt><dd class="movie-dd"><a href="https://anime47.com/tim-nang-cao/?status=&season=&year=2021&sort=popular">2021</a></dd><br />      
                                        <dt class="movie-dt">Lượt Xem: </dt><dd class="movie-dd">116745 Lượt xem</dd><br />     
                                        <!-- <dt class="movie-dt">Score:</dt> <dd class="movie-dd imdb">{film.SCORE}</dd><br /> -->
                                       
                                        </dl>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="box-rating">
                                    <b>Mới cập nhật: <div class="block2 servers"><div class="server" data-type="watch"><div class="name"> <img style="margin-top: -7px;" src="style/icon_server.png"> <span>Tổng Hợp</span>  </div><div class="episodes col-lg-12 col-md-12 col-sm-12"><ul>
                                    	<li>
                                    	<a href="" title="11">11</a>
                                    	</li>
                                    	<li>
                                    		<a href="" title="10">10</a>
                                    	</li>
                                    	<li>
                                    		<a href="" title="09">09</a>
                                    	</li>
                                    	<li>
                                    		<a href="" title="08">08</a>
                                    	</li>
                                    	<li>
                                    		<a href="" title="07">07</a>
                                    	</li>
                                    	<li>
                                    		<a href="" title="06">06</a>
                                    	</li>
                                    </ul>
                                </div>
                            </div>
                        </div></b>
                                    </div>
                                </div>
                               @endforeach
                                @foreach($object_id as $key)
                                <div class="col-6 movie-image">
                                    <div class="movie-l-img"><img src="{{asset('assets/images/'.$key->Images)}}" style="width:100%;height:100%;" />
                                        <ul class="btn-block">
                                                <li class="item"><a id="btn-film-watch" class="btn btn-green btn" id="favorite" href="javascript:void(0)" onclick="return favo(0,7909)"> Lưu lại</a></li>
                                                <li class="item"><a id="btn-film-watch" class="btn btn-red"  href="{{URL('detail/'.$key->id).'&1'}}">Xem Anime</a></li>
                                                
                                                
											</li>
                                        </ul>
                                    </div>
                                  @endforeach
                                    <!-- Bookmark-->
                                    
                                    <div class="tools-box">
                                        
                                        <div class="fb-save"  > </div> <!-- style="width: 100%; margin: 0px 0px 10px 25px;" -->
                                    </div>
                                    
                                    <!-- // Bookmark-->
                                </div>
                            </div>
                        </div>   

                    <!-- / Thông tin phim -->
                    
                    <blockquote class="block-movie-content">
                    <div class="content"
                    <span><div id="div1"></div></span>
                    </div>
                            <div class="clear"></div>
                    </blockquote>
                    
                    <blockquote class="block-movie-content">
                            <h2 class="movie-detail-h2">Nội dung</h2>
                            
                            
                            <div class="fb-like like-at-content" style="right: 55px!important;" data-href="https://anime47.com/phim/nomad-megalo-box-2/m7909.html" data-width="140" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
<div  style="width: 76px!important;"  data-layout="button_count" data-show-faces="false" data-share="false"></div>
                            <div class="content" id="film-content" itemscope itemtype="http://schema.org/Review" itemprop="review">
                                @foreach($object_id as $type)
                                <div class="news-article">
                                <p><p>{{$type->Content}}</p></p>
                                </div>
                                @endforeach  
                                <p>Chúc các bạn <a href="" >xem anime vietsub</a> vui vẻ tại ANIME47.COM</p>
                                <span itemprop="author" class="hidden">@anime47.com</span>  
                                <!-- <p><div class="fb-comments" data-href="https://anime47.com/phim/nomad-megalo-box-2/m7909.html" data-num-posts="7" data-width="100%" data-colorscheme="dark" data-order-by="reverse_time"></div></p> -->
                                
                <form class="comment-form" name="id_anime" method="post">
                 {{csrf_field()}}
                 {{method_field('POST')}}
                 <input type="hidden" name="storyID" id="storyID" value="24491"> <input type="hidden" name="replyTo" value="0">
                 
                    <textarea aria-label="Bình luận" id="comment-message" name="message" placeholder="Nội dung bình luận tối thiểu 15 ký tự, tối đa 500 ký tự!"></textarea>
                    @foreach($object_id as $type)
                    <input type="hidden" name="id_anime" value="{{$type->id}}">
                    @endforeach
                    <p id="comment-char-count">Số ký tự: <span>0</span></p>
                    <div class="text-right">
                        <button type="submit"><i class="fa-paper-plane"></i> Gửi</button>
                    </div>
                </form>
                    </blockquote>
                    <div class="clear"></div>

</div></div>


<script type="text/javascript">
$(document).ready(function(){       
var fburl = "https://api.anime47.com/comment.php?url=https://anime47.com/phim/nomad-megalo-box-2/m7909.html"
var fb_count = null;
$.ajax({    
  url: ''+fburl+'',
  async: false,
  dataType: 'json',
  success: function (data) {
     fb_count =(data.engagement.comment_plugin_count);
    
  }
});
$.ajax({
                    url : "index.php",
                    type : "post",
                    dateType:"application/x-www-form-urlencoded",
                    data: {film_id: 7909, fbcount: fb_count},
                    success: function(jsonObject,status) {
                    //console.log("function() ajaxPost : " + data);

                    }
//document.write(fb_count);

});});
</script>   



 
<div class="clear"></div>

                
                    
                </div></div>
                <div class="clear"></div>
            </div>
            <!-- Sidebar -->
            <div class="col-lg-4 sidebar" id="sidebar">
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
                

@endsection