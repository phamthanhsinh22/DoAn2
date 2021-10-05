@extends('layout/master')
@section('title','day la trang index')
@section('detail')


<div class="container">
        <!-- Fullbanner -->
        <div class="row ad-container banner-top">
            <div class="col-lg-12">
                <div class="ad-center-980">
				                    </div>
            </div>
        </div>
		<div id="qc_clgt"> </div>

        <ol class="breadcrumb"><li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a>HOME</span></a></li>
        	@foreach($type_menu as $typ)
        	<li><a href=""><span itemprop="name">{{$typ->typeName}}</span></a></li>
        	@endforeach
        	</ol>
        	
		 
        <div class="row">
           
			
            <div class="col-lg-8">
                
			
                
				
                <div class="movie-info"><div class="block-movie-info movie-info-box">
				
					<!-- phia tren + phia duoi ben trai -->
                    <div class="block media" id="page-watch">
                                
                                
								                                    
                                 
                                    <div id="abd_mv">
                                    	
                                        <div id="player-area" style="width:100%;height:100%;">
                                        	@foreach($object_ID as $object)
                                        	
                                        	
                                        	<video autoplay controls height="450px" width="660px">
											  <source src="{{asset('assets/video/'.$object->Video)}}">
											</video>
                                        	
                                        	@endforeach
                                    	</div>
                                    	
                                    </div>
                                  
								<!--  -->
</div>
<div id="clicksv" style="padding-top: 15px; padding-bottom: 15px;" class="col-lg-12">	
<span class="btn btn-green active" title="Pc" id="sv9">Wa</span>
<span class="btn btn-green" title="Facebook phải cài Extension để tải nhanh" id="sv2">Fa</span>
<span class="btn btn-green" title="Hy" id="sv7">Hy</span>
<span class="btn btn-green" title="We" id="sv8">We</span>
<span class="btn btn-green" title="Fembed" id="sv4">Fe</span>
<div class="clear"></div>
</div>
<div class="user-action">
                            <div class="btn-cs toggle-light" data-on="Bật đèn" data-off="Tắt đèn"><i class="btn-cs-icon icon-light-sm"></i><div id="light-status">Tắt đèn</div></div>
							<a class="btn-cs add-favorite" rel="nofollow" id="favorite" href="javascript:void(0)" onclick="return favo(0,5901)"><i class="btn-cs-icon icon-add-sm"></i><span class="btn-text">Lưu</span></a>
							<div class="btn-cs toggle-size" data-on="Thu nhỏ" data-off="Phóng to" title="Phóng to/Thu nhỏ"><i class="btn-cs-icon icon-expand-sm"></i><span><div id="pttn">Phóng to</div></span></div>
                            <a class="btn-cs autoprev" href="{{URL('detail/'.$id_anime.'&'.($episode-1))}}" rel="nofollow" onclick="nextEpisodeHand('');"><i class="btn-cs-icon icon-autoprev-sm"></i><span>Prev</span></a>
							<a class="btn-cs autonext" href="{{URL('detail/'.$id_anime.'&'.($episode+1))}}" rel="nofollow" onclick="nextEpisodeHand('https://anime47.com/xem-phim-kuzu-no-honkai-ep-02/170017.html');"><i class="btn-cs-icon icon-autonext-sm"></i><span>Next</span></a>
                            <a class="btn-cs error-player" target="_blank" rel="nofollow" href="https://anime47.com/chuyen.php?url=aHR0cDovL3d3dy55YW1pLXNvcmEub3JnLw=="><i class="btn-cs-icon icon-error-sm"></i><span>Link Nguồn</span></a>
                            
                            <div class="btn-cs show_hide" href="javascript:void(0)" onclick="TaiAnime(170016);"><i class="btn-cs-icon icon-download-sm"></i><span>Download</span></div>	
                            <a class="btn-cs add-favorite" rel="nofollow" id="favorite" href="javascript:void(0)" onclick="return danhdau(0,5901,170016)"><i class="btn-cs-icon icon-add-sm"></i><span class="btn-text">Đánh Dấu Ep Đang Xem</span></a>
							
							<div class="btn-cs show_hide" href="javascript:void(0)" onclick="PhanPhim();"><i class="btn-cs-icon icon-capture-frame"></i><span>Phần##</span></div>
							<div class="btn-cs" id="btn-toggle-capture" title="Chụp ảnh"><i class="btn-cs-icon icon-capture-frame"></i><span>Chụp ảnh</span></div>							
							
							<!-- <div class="btn-cs" href="javascript:void(0)" >{film.server}</div> -->
 
 </div>
<div class="box-rating">

	<div class="slidingDiv" style="display:none">
		<div style="text-align:center;z-index:8;line-height:1.5em;font-weight:bold;font-size:14px;color:#FFFFFF;font-weight:bold;">
			<div id="taiphim">
			<!-- xuat hien o day -->
			

			
			<!-- ket thuc tai phim -->
			</div><!-- Download --></div></div>
<div id="thongbao">			
<div style="text-align: center;"><h3 style="color: #ea730ce8;">Nếu xem cảm thấy bị chậm thì bấm vào server khác để xem nhé mọi người ( mấy nút We,Hy,Fe.. ấy)</h3></div>
<p style="text-align: center;">Ủng hộ và donate cho Yamisora<a href="http://www.yami-sora.org/" target="_blank"> tại đây</a></p>
<div id="quanque"></div>
			<center>
			
			<script>			
			
			
				if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {					
				//$('#quanque').html("<a style=\'border:none;display: block;  margin-left: auto;  margin-right: auto;\' href=\"http:\/\/game.kul.vn\/thosanx\/download-detect.html\" target=\"_blank\" rel=\"noopener\"><img src=\"https:\/\/lh3.googleusercontent.com\/CiRmqsTCBzYCCnENPRHKqGcKKasGDsaJ3gH2Kh4gT3qCcshKTYDXsaE1H9Wg_DURmVNdnK_Cr6OT6p9O8mesqw5AVBC3Gj-13s7AVNTFjZGyu3HqFGOkkuoNHnBxMgGE80zhNb5IPA=w300-h250-no\" alt=\"\" width=\"300\" height=\"250\" \/><\/a>");
					window.onload = function(){
						if(!window.BB_a) { BB_a = [];} if(!window.BB_ind) { BB_ind = 0; } if(!window.BB_vrsa) { BB_vrsa = 'v3'; }if(!window.BB_r) { BB_r = Math.floor(Math.random()*1000000000)} BB_ind++; BB_a.push({ "pl" : 2000375, "index": BB_ind});
					};
				var cpmstar_rnd=Math.round(Math.random()*999999);
var cpmstar_pid=74432;
document.writeln("<SCR"+"IPT language='Javascript' src='//server.cpmstar.com/view.aspx?poolid="+cpmstar_pid+"&script=1&rnd="+cpmstar_rnd+"'></SCR"+"IPT>");

				}
				
			
			</script>
			</center>
</div>
<p></p>
</div>  
<script data-cfasync="false">
var count=32,counter=setInterval(timer,1e3);function timer(){(count-=1)<=0&&clearInterval(counter)}function PhanPhim(){document.getElementById("taiphim").innerHTML="<a href=/phim/kuzu-no-honkai/m5901.html>Phần Anime</a>  <a href=/phim/kuzu-no-honkai-uoc-nguyen-cua-ke-can-ba/m6081.html>LIVE</a>  "}function TaiAnime(){var e;(e=window.XMLHttpRequest?new XMLHttpRequest:new ActiveXObject("Microsoft.XMLHTTP")).onreadystatechange=function(){4==e.readyState&&200==e.status&&(document.getElementById("taiphim").innerHTML=e.responseText)},e.open("GET","https://anime47.com/player/no_link.html",!0),e.setRequestHeader("Content-type","application/x-www-form-urlencoded"),e.send()}function leftArrowPressed(){$(".autoprev").trigger("click")}function rightArrowPressed(){$(".autonext").trigger("click")}$(document).ready(function(){$(".slidingDiv").hide(),$(".show_hide").show(),$(".show_hide").click(function(){$(".slidingDiv").slideToggle()})}),$(function(){$(".remove-ad").click(function(){}),setTimeout(function(){$(".remove-ad").trigger("click")},3e4)}),document.onkeydown=function(e){switch((e=e||window.event).keyCode){case 188:leftArrowPressed();break;case 190:rightArrowPressed()}};
	
		
(function($) {
function player_post(t, a) {
    $.ajax({
        url: "https://anime47.com/player/player.php",
        type: "post",
        dataType: "text",
        data: {
            ID: t,
            SV: a
        },
        success: function(t) {
            $("#media").html(t)
        }
    })
}
    $(document).ready(function() {
	var macdinh = 9;
	var id_ep = 170016
	 player_post(id_ep,macdinh);
     $('#sv8').click(function(e) {$('#clicksv .btn').removeClass('active');$('#sv8').addClass('active');$('#media').empty();player_post(170016,8);});$('#sv9').click(function(e) {$('#clicksv .btn').removeClass('active');$('#sv9').addClass('active');$('#media').empty();player_post(170016,9);});$('#sv4').click(function(e) {$('#clicksv .btn').removeClass('active');$('#sv4').addClass('active');$('#media').empty();player_post(170016,4);});$('#sv7').click(function(e) {$('#clicksv .btn').removeClass('active');$('#sv7').addClass('active');$('#media').empty();player_post(170016,7);});$('#sv2').click(function(e) {$('#clicksv .btn').removeClass('active');$('#sv2').addClass('active');$('#media').empty();player_post(170016,2);});$('#sv11').click(function(e) {$('#clicksv .btn').removeClass('active');$('#sv11').addClass('active');$('#media').empty();player_post(170016,11);});;	
	 
	 
    });
})(jQuery);		




			
</script>

<div class="block2 servers"><div class="server" data-type="watch"><div class="name"><img style="margin-top: -7px;" src=""> <span>Yamisora</span>  </div><div class="episodes col-lg-12 col-md-12 col-sm-12">
    <ul>
        
    <li><a href="" class="active btn-episode" group="1">01</a></li>
    <li><a href="" class="active btn-episode" group="2">02</a></li>
    <li><a href="" class="active btn-episode" group="3">03</a></li>
        
    </ul>
</div></div></div>
<form class="comment-form" method="post"> <input type="hidden" name="storyID" id="storyID" value="24491"> <input type="hidden" name="replyTo" value="0">
                    <textarea aria-label="Bình luận" id="comment-message" name="message" placeholder="Nội dung bình luận tối thiểu 15 ký tự, tối đa 500 ký tự!"></textarea>
                    <input type="hidden" name='id_anime' value="{{$typ->typeName}}">
                    <p id="comment-char-count">Số ký tự: <span>0</span></p>
                    <div class="text-right">
                        <button type="submit"><i class="fa-paper-plane"></i> Gửi</button>
                    </div>
</form>
<script data-cfasync="false">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=907721805949566";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

           
				</div></div>
                <div class="clear"></div>
            </div>
            <!-- Sidebar -->
            <div class="sidebar col-lg-4 col-md-4" id="sidebar">
				<div id="qc_clgt_vuong" class="ad-container ad-top-300-250"><a href="https://lixi88vip.com/reg.shtml?id=4776050"><img src="https://img.anime47.com/imgur/XQx02CK.gif"></a><br><a href="https://game.taib52.club/?a=b52_cpd-anime47_mimi&amp;utm_medium=Top&amp;utm_source=anime47.com&amp;utm_campaign=CPD"><img src="https://img.anime47.com/imgur/12yY3gC.gif"></a></div>	
        
				
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
            <div class="list-top-movie-item-info"><span class="list-top-movie-item-vn">{{$obj->Title}}</span><span class="list-top-movie-item-en"> </span><span class="list-top-movie-item-view">3720 Lượt xem</span></div>
        </a>
        
    </li>
  @endforeach      
</ul>
</div>

             
                    </div>
                    
                </div>
 <div class="clear"></div>
                
                
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
                        <div class="ad-center-980"></div>
                    </div>
                </div>
            </div>
            <!-- /Footer banner -->
        </div>
        <!-- /Main content -->
    </div>

@endsection