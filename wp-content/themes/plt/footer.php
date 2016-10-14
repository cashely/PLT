<!--icon -->
        <div class="icon">
            <a href="javascript:void(0);"><img src="images/contact.png" alt=""></a>
            <a href="javascript:void(0);"><img src="images/top.png" alt=""></a>
        </div>
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
	</body>
</html>