<!-- .header-bottom -->

<div class="header-bg-container fill"><div class="header-bg-image fill"></div><div class="header-bg-color fill"></div></div><!-- .header-bg-container -->   </div><!-- header-wrapper-->
</header>


<main id="main" class="">
<div id="content" class="content-area page-wrapper" role="main">
	<div class="row row-main">
		<div class="large-12 col">
			<div class="col-inner">
				
				
														
			<div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>
        <div class="account-container lightbox-inner">
        <div class="account-login-inner">
    <h3 class="uppercase">Đăng kí</h3>
    <form id="registrationForm" action="index.php?act=dangky" method="post">
        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="email">Email&nbsp;<span class="required">*</span></label>
            <input class="woocommerce-Input woocommerce-Input--text input-text" type="email" name="email" id="email" />
            <span class="error-message" id="emailError"></span>
        </p>
        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="username">Tên tài khoản&nbsp;<span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="user" id="user" />
            <span class="error-message" id="userError"></span>
        </p>
        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
            <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="pass" id="pass" />
            <span class="error-message" id="passError"></span>
        </p>
        <p class="form-row">
            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Ghi nhớ mật khẩu</span>
            </label>
            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="9b460c0cdd" />
            <input type="hidden" name="_wp_http_referer" value="/tai-khoan/" />
            <button type="submit" class="woocommerce-Button button woocommerce-form-login__submit" name="register">Đăng kí</button>
        </p>
        <p class="woocommerce-LostPassword lost_password">
            <a href="lost-password/index.html">Quên mật khẩu?</a>
        </p>
    </form>
</div>

<style>
.error-message {
    color: red;
    font-size: 12px;
}
</style>

<script>
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    var email = document.getElementById('email').value;
    var user = document.getElementById('user').value;
    var pass = document.getElementById('pass').value;

    var emailError = document.getElementById('emailError');
    var userError = document.getElementById('userError');
    var passError = document.getElementById('passError');

    emailError.textContent = '';
    userError.textContent = '';
    passError.textContent = '';

    var valid = true;

    if (!email) {
        emailError.textContent = 'Vui lòng nhập email.';
        valid = false;
    } else if (!validateEmail(email)) {
        emailError.textContent = 'Vui lòng nhập email hợp lệ.';
        valid = false;
    }

    if (!user) {
        userError.textContent = 'Vui lòng nhập tên tài khoản.';
        valid = false;
    }

    if (!pass) {
        passError.textContent = 'Vui lòng nhập mật khẩu.';
        valid = false;
    }

    if (!valid) {
        event.preventDefault();
    }
});

function validateEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
</script>

</div><!-- .account-login-container -->

</div>

						
												</div><!-- .col-inner -->
		</div><!-- .large-12 -->
	</div><!-- .row -->
</div>


</main><!-- #main -->

<footer id="footer" class="footer-wrapper">

		<section class="section section-footer" id="section_1275752504">
		<div class="bg section-bg fill bg-fill  bg-loaded" >

			
			
			

		</div><!-- .section-bg -->

		<div class="section-content relative">
			

<div class="row"  id="row-970371674">

<div class="col div-no-padding medium-3 small-12 large-3"  ><div class="col-inner"  >

<div class="logo-footer"><img class="alignnone size-full wp-image-293" src="././wp-content/uploads/2019/12/logo-1.png" alt="" width="300" height="150" /></div>
<ul class="list-menu">
<li><i class="fa fa-map-marker" aria-hidden="true"></i> 30 Đường 2/9, Phường Bình Hiên, Quận Hải Châu, Đà Nẵng</li>
<li><i class="fa fa-phone" aria-hidden="true"></i> <a title="0123456789" href="tel:0123456789">0123 456 789</a></li>
<li><i class="fa fa-envelope" aria-hidden="true"></i> <a title="evoteamthemes@gmail.com" href="mailto:evoteamthemes@gmail.com">evoteamthemes@gmail.com</a></li>
</ul>

</div></div>
<div class="col div-no-padding medium-3 small-12 large-3"  ><div class="col-inner"  >

<h3 class="title-footer">DANH MỤC SẢN PHẨM</h3>
<ul class="sidebar-wrapper ul-reset"><div id="nav_menu-6" class="col pb-0 widget widget_nav_menu"><div class="menu-danh-muc-san-pham-container"><ul id="menu-danh-muc-san-pham" class="menu"><li id="menu-item-424" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-424"><a href="././dong-ho-nam/index.html">Đồng hồ nam</a></li>
<li id="menu-item-425" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-425"><a href="././dong-ho-nu/index.html">Đồng hồ nữ</a></li>
<li id="menu-item-426" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-426"><a href="././kinh-ram/index.html">Kính râm</a></li>
<li id="menu-item-427" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-427"><a href="././phu-kien/index.html">Phụ kiện</a></li>
<li id="menu-item-428" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-428"><a href="././vong-tay/index.html">Vòng tay</a></li>
</ul></div></div></ul>


</div></div>
<div class="col div-no-padding medium-3 small-12 large-3"  ><div class="col-inner"  >

<h3 class="title-footer">LIÊN KẾT</h3>
<ul class="sidebar-wrapper ul-reset"><div id="nav_menu-7" class="col pb-0 widget widget_nav_menu"><div class="menu-menu-trang-chu-container"><ul id="menu-menu-trang-chu" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-387"><a href="././index.html">Trang chủ</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386"><a href="././gioi-thieu/index.html">Giới thiệu</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-389"><a href="././dong-ho-nam/index.html">Đồng hồ nam</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-390"><a href="././dong-ho-nu/index.html">Đồng hồ nữ</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-391"><a href="././phu-kien/index.html">Phụ kiện</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-388"><a href="././category/tin-tuc/index.html">Tin tức</a></li>
</ul></div></div></ul>


</div></div>
<div class="col div-no-padding medium-3 small-12 large-3"  ><div class="col-inner"  >

<h3 class="title-footer">ĐĂNG KÝ NHẬN TIN</h3>
<p>Nhận thông tin sản phẩm mới nhất, tin khuyến mãi và nhiều hơn nữa.</p>
<div role="form" class="wpcf7" id="wpcf7-f430-o1" lang="vi" dir="ltr">
<div class="screen-reader-response"></div>
<form action="https://dongho.giaodienwebmau.com/tai-khoan/#wpcf7-f430-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="430" />
<input type="hidden" name="_wpcf7_version" value="5.1.1" />
<input type="hidden" name="_wpcf7_locale" value="vi" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f430-o1" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="g-recaptcha-response" value="" />
</div>
<p><label><br />
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email của bạn" /></span> </label></p>
<p><input type="submit" value="Đăng ký" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>

	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1397523421">
								<div class="img-inner dark" >
			<img width="268" height="45" src="././wp-content/uploads/2019/12/visa.jpg" class="attachment-large size-large" alt="" />						
					</div>
								
<style scope="scope">

#image_1397523421 {
  width: 100%;
}
</style>
	</div>
	


</div></div>

</div>

		</div><!-- .section-content -->

		
<style scope="scope">

#section_1275752504 {
  padding-top: 30px;
  padding-bottom: 30px;
  background-color: rgb(233, 233, 233);
}
</style>
	</section>
	
<div class="absolute-footer dark medium-text-center small-text-center">
  <div class="container clearfix">

    
    <div class="footer-primary pull-left">
            <div class="copyright-footer">
        Copyright 2024 &copy; <strong>UX Themes</strong>      </div>
          </div><!-- .left -->
  </div><!-- .container -->
</div><!-- .absolute-footer -->
<a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle" id="top-link"><i class="icon-angle-up" ></i></a>

</footer><!-- .footer-wrapper -->

</div><!-- #wrapper -->

<!-- Mobile Sidebar -->
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar ">
        <ul class="nav nav-sidebar  nav-vertical nav-uppercase">
              <li class="header-search-form search-form html relative has-icon">
	<div class="header-search-form-wrapper">
		<div class="searchform-wrapper ux-search-box relative is-normal"><form role="search" method="get" class="searchform" action="https://dongho.giaodienwebmau.com/">
	<div class="flex-row relative">
						<div class="flex-col flex-grow">
			<label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label>
			<input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="s" />
			<input type="hidden" name="post_type" value="product" />
					</div><!-- .flex-col -->
		<div class="flex-col">
			<button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0">
				<i class="icon-search" ></i>			</button>
		</div><!-- .flex-col -->
	</div><!-- .flex-row -->
	<div class="live-search-results text-left z-top"></div>
</form>
</div>	</div>
</li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-387"><a href="././index.html" class="nav-top-link">Trang chủ</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386"><a href="././gioi-thieu/index.html" class="nav-top-link">Giới thiệu</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-389"><a href="././dong-ho-nam/index.html" class="nav-top-link">Đồng hồ nam</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-390"><a href="././dong-ho-nu/index.html" class="nav-top-link">Đồng hồ nữ</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-391"><a href="././phu-kien/index.html" class="nav-top-link">Phụ kiện</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-388"><a href="././category/tin-tuc/index.html" class="nav-top-link">Tin tức</a></li>
<li class="account-item has-icon menu-item">
<a href="index.html"
    class="nav-top-link nav-top-not-logged-in">
    <span class="header-account-title">
    Đăng nhập  </span>
</a><!-- .account-login-link -->

</li>
        </ul>
    </div><!-- inner -->
</div><!-- #mobile-menu -->
	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<script type='text/javascript' src='././././use.fontawesome.com/2deb5ba708578a.js?ver=4.9.24'></script>
<script type='text/javascript' src='././wp-content/plugins/cf7-icons-and-labels/js/cf7_script578a.js?ver=4.9.24'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/dongho.giaodienwebmau.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/plugins/contact-form-7/includes/js/scripts3c21.js?ver=5.1.1'></script>
<script type='text/javascript' src='././wp-content/plugins/devvn-quick-buy/js/jquery.validate.min4c71.js?ver=2.1.3'></script>
<script type='text/javascript' src='././wp-includes/js/underscore.min4511.js?ver=1.8.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-includes/js/wp-util.min578a.js?ver=4.9.24'></script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"R\u1ea5t ti\u1ebfc, kh\u00f4ng c\u00f3 s\u1ea3n ph\u1ea9m n\u00e0o ph\u00f9 h\u1ee3p v\u1edbi l\u1ef1a ch\u1ecdn c\u1ee7a b\u1ea1n. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c.","i18n_make_a_selection_text":"Ch\u1ecdn c\u00e1c t\u00f9y ch\u1ecdn cho s\u1ea3n ph\u1ea9m tr\u01b0\u1edbc khi cho s\u1ea3n ph\u1ea9m v\u00e0o gi\u1ecf h\u00e0ng c\u1ee7a b\u1ea1n.","i18n_unavailable_text":"R\u1ea5t ti\u1ebfc, s\u1ea3n ph\u1ea9m n\u00e0y hi\u1ec7n kh\u00f4ng t\u1ed3n t\u1ea1i. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c."};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.mincd70.js?ver=3.8.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var devvn_quickbuy_array = {"ajaxurl":"https:\/\/dongho.giaodienwebmau.com\/wp-admin\/admin-ajax.php","siteurl":"https:\/\/dongho.giaodienwebmau.com","popup_error":"\u0110\u1eb7t h\u00e0ng th\u1ea5t b\u1ea1i. Vui l\u00f2ng \u0111\u1eb7t h\u00e0ng l\u1ea1i. Xin c\u1ea3m \u01a1n!","out_of_stock_mess":"H\u1ebft h\u00e0ng!","price_decimal":".","num_decimals":"0","price_thousand":",","currency_format":"\u20ab","qty_text":"S\u1ed1 l\u01b0\u1ee3ng","name_text":"H\u1ecd v\u00e0 t\u00ean l\u00e0 b\u1eaft bu\u1ed9c","phone_text":"S\u1ed1 \u0111i\u1ec7n tho\u1ea1i l\u00e0 b\u1eaft bu\u1ed9c","valid_phone_text":"Nh\u1eadp l\u1ea1i s\u1ed1 \u0111i\u1ec7n tho\u1ea1i l\u00e0 b\u1eaft bu\u1ed9c","valid_phone_text_equalto":"Vui l\u00f2ng nh\u1eadp l\u1ea1i c\u00f9ng s\u1ed1 \u0111i\u1ec7n tho\u1ea1i","email_text":"Email l\u00e0 b\u1eaft bu\u1ed9c","quan_text":"Qu\u1eadn huy\u1ec7n l\u00e0 b\u1eaft bu\u1ed9c","xa_text":"X\u00e3\/Ph\u01b0\u1eddng l\u00e0 b\u1eaft bu\u1ed9c","address_text":"S\u1ed1 nh\u00e0, t\u00ean \u0111\u01b0\u1eddng l\u00e0 b\u1eaft bu\u1ed9c"};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/plugins/devvn-quick-buy/js/devvn-quick-buy4c71.js?ver=2.1.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Xem gi\u1ecf h\u00e0ng","cart_url":"https:\/\/dongho.giaodienwebmau.com\/gio-hang\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.mincd70.js?ver=3.8.3'></script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min0ba6.js?ver=1.0.6'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"M\u1eadt kh\u1ea9u m\u1ea1nh kh\u00f4ng x\u00e1c \u0111\u1ecbnh","short":"R\u1ea5t y\u1ebfu","bad":"Y\u1ebfu","good":"Trung b\u00ecnh","strong":"M\u1ea1nh","mismatch":"M\u1eadt kh\u1ea9u kh\u00f4ng kh\u1edbp"};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-admin/js/password-strength-meter.min578a.js?ver=4.9.24'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_password_strength_meter_params = {"min_password_strength":"3","stop_checkout":"","i18n_password_error":"Vui l\u00f2ng nh\u1eadp m\u1eadt kh\u1ea9u kh\u00f3 h\u01a1n.","i18n_password_hint":"G\u1ee3i \u00fd: M\u1eadt kh\u1ea9u ph\u1ea3i c\u00f3 \u00edt nh\u1ea5t 12 k\u00fd t\u1ef1. \u0110\u1ec3 n\u00e2ng cao \u0111\u1ed9 b\u1ea3o m\u1eadt, s\u1eed d\u1ee5ng ch\u1eef in hoa, in th\u01b0\u1eddng, ch\u1eef s\u1ed1 v\u00e0 c\u00e1c k\u00fd t\u1ef1 \u0111\u1eb7c bi\u1ec7t nh\u01b0 ! \" ? $ % ^ & )."};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.mincd70.js?ver=3.8.3'></script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.mincd70.js?ver=3.8.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_bbd060294f6a20f87f5690314eef6995","fragment_name":"wc_fragments_bbd060294f6a20f87f5690314eef6995","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.mincd70.js?ver=3.8.3'></script>
<script type='text/javascript' src='././wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search12f9.js?ver=3.10.0'></script>
<script type='text/javascript' src='././wp-content/plugins/mega_main_menu/src/js/frontende7f3.js?ver=2.1.7'></script>
<script type='text/javascript' src='././wp-includes/js/hoverIntent.minc245.js?ver=1.8.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var flatsomeVars = {"ajaxurl":"https:\/\/dongho.giaodienwebmau.com\/wp-admin\/admin-ajax.php","rtl":"","sticky_height":"70","lightbox":{"close_markup":"<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>","close_btn_inside":false},"user":{"can_edit_pages":false}};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/themes/flatsome/assets/js/flatsome12f9.js?ver=3.10.0'></script>
<script type='text/javascript' src='././wp-content/themes/flatsome/assets/libs/infinite-scroll.pkgd.min459e.js?ver=3.0.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var flatsome_infinite_scroll = {"scroll_threshold":"400","fade_in_duration":"300","type":"spinner","list_style":"grid","history":"push"};
/* ]]> */
</script>
<script type='text/javascript' src='././wp-content/themes/flatsome/inc/extensions/flatsome-infinite-scroll/flatsome-infinite-scroll7ef2.js?ver=1.5'></script>
<script type='text/javascript' src='././wp-content/themes/flatsome/assets/js/woocommerce12f9.js?ver=3.10.0'></script>
<script type='text/javascript' src='././wp-includes/js/wp-embed.min578a.js?ver=4.9.24'></script>

</body>

<!-- Mirrored from dongho.giaodienwebmau.com/tai-khoan/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jul 2024 14:04:40 GMT -->
</html>
