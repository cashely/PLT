<?php
	get_header();
?>
<!--banner -->
<div class="banner">
    <img src="<?php bloginfo('template_url'); ?>/images/location-banner.jpg" alt="">
</div>
<!--content -->
<div class="location">
    <span><img src="images/car.jpg" alt="">乘车路线：6路,9路,12路</span>
    <span><img src="images/iphone.jpg" alt="">联系电话：400-00-00</span>
    <span><img src="images/location.jpg" alt="">地址：顺德某某区某某路某号</span>
    <div id="allmap"></div>
    <script src="http://api.map.baidu.com/api?v=2.0&ak=XKZWFQtDs6DxGne8RebPZjibGyNY3cgY"></script>
    <script type="text/javascript">
	    var map = new BMap.Map("allmap");
	    var geocoder = new BMap.Geocoder();
	    geocoder.getPoint("广东省广州市天河区华穗路406号",function(point){
	        // 使用坐标点作为中心点,重新设置中心
	        map.centerAndZoom(point,18);
	        //map.setCenter(point);

	        var marker = new BMap.Marker(point);
	        map.addOverlay(marker);

	    },"广州市");
	    /*
	     向地图添加比例尺
	     */
	    var scale = new BMap.ScaleControl({
	        anchor : BMAP_ANCHOR_BOTTOM_RIGHT
	    });
	    map.addControl(scale);
	    /*
	     向地图添加缩放平移控件
	     */
	    var nav = new BMap.NavigationControl({
	        anchor : BMAP_ANCHOR_TOP_LEFT,
	        type : BMAP_NAVIGATION_CONTROL_SMALL
	    });
	    map.addControl(nav);
	</script>

<?php
	get_footer();
?>