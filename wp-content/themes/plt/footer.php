<!--icon -->
        <!--<div class="icon">
            <a href="javascript:void(0);"><img src="<?php bloginfo('template_url');?>/images/contact.png" alt=""></a>
            <a href="javascript:void(0);"><img src="<?php bloginfo('template_url');?>/images/top.png" alt=""></a>
        </div>-->
    </div>
<!--footer -->
    <div class="footer">
        <div class="footer-box">
            <div class="links">
                <?php
                    if(function_exists('wp_nav_menu')) {
                        wp_nav_menu(array('theme_location'=>'footerMenu'));
                    }
                ?>
            </div>
            <p>
                <span>版权所有 <a href="javascript:void(0);">广东顺德食品药品教育服务网</a></span>
                <span class="location">地址：<a href="javascript:void(0);">广东省顺德市石岛管理区黄海中路218号</a></span>
                <span><?php echo get_option( 'zh_cn_l10n_icp_num' );?></span>
            </p>
        </div>
    </div>
    <script type='text/javascript'>
        (function(m, ei, q, i, a, j, s) {
            m[a] = m[a] || function() {
                (m[a].a = m[a].a || []).push(arguments)
            };
            j = ei.createElement(q),
                s = ei.getElementsByTagName(q)[0];
            j.async = true;
            j.charset = 'UTF-8';
            j.src = i + '?v=' + new Date().getUTCDate();
            s.parentNode.insertBefore(j, s);
        })(window, document, 'script', '//static.meiqia.com/dist/meiqia.js', '_MEIQIA');
        _MEIQIA('entId', 25898);
    </script>
	<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
	</body>
</html>