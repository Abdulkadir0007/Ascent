<?php
    /**
     * Ascent For Style.
     *
     *  @package Ascent
     */

    if ( !defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }
    ;

    function ascent_style() {
        global $ascent;
    ?>
    <style>
        body{
            font-family:<?php print $ascent['body_tipo']['font-family'];?>;
            font-size:<?php print $ascent['body_tipo']['font-size'];?>;
            font-weight:                         <?php print $ascent['body_tipo']['font-weight'];?>;
            color:                   <?php print $ascent['body_tipo']['color'];?>;
            text-transform:                            <?php print $ascent['body_tipo']['text-transform'];?>;
            line-height:                         <?php print $ascent['body_tipo']['line-height'];?>;

        }

:root{
    /* menu tipograpy */
    --menu-font-family:<?php print $ascent['menu-trifo']['font-family'];?>;
    --menu-font-color:<?php print $ascent['menu-trifo']['color'];?>;
    --menu-font-weight:<?php print $ascent['menu-trifo']['font-weight'];?>;
    --menu-font-size:<?php print $ascent['menu-trifo']['font-size'];?>;
    --menu-font-height:<?php print $ascent['menu-trifo']['line-height'];?>;
    --menu-text-transform:<?php print $ascent['menu-trifo']['text-transform'];?>;
    --menu-text-padding:<?php print $ascent['menu-padding'];?>px;
    --menu-active-hover-color:<?php print $ascent['menu-active'];?>;

    --dordown-menu-width:<?php print $ascent['drop-width'];?>px;
    --dordown-font-size:<?php print $ascent['drp-font-size'];?>;
    --dordown-font-color:<?php print $ascent['drp-font-cl'];?>;
    --dordown-back-color:<?php print $ascent['drp-back-cl'];?>;
    --dordown-hov-color:<?php print $ascent['drp-hv-font'];?>;
    --dordown-hov-back:<?php print $ascent['drp-hov-back'];?>;

    /* top header style */
    --theader-background:<?php print $ascent['shead_back']?>;
    --theader-text-color:<?php print $ascent['sconav_color']?>;
    --theader-icon-color:<?php print $ascent['scicon_color']?>;
    --theader-mene-border:<?php print $ascent['shead_mncl']?>;


    --theadwbr-background:<?php print $ascent['shead_back2']?>;
    --theadwbr-bor-color:<?php print $ascent['shead_tbor']?>;
    --theadwbr-text-color:<?php print $ascent['sconav_color2']?>;
    --theadwbr-icon-color:<?php print $ascent['scicon_color2']?>;
    --theadwbr-mene-border:<?php print $ascent['shead_mncl2']?>;


    /* Project Taemplate Style */
    --project-image-back:<?php print $ascent['project_back_color']?>;
    --project-text-color:<?php print $ascent['project_text_color']?>;

    /* Boxed Padding */
    --boxed-padding:20px;
    --boxed-padding-top:<?php print $ascent['Layout_padding']['padding-top']?>;
    --boxed-padding-bottom:<?php print $ascent['Layout_padding']['padding-bottom']?>;
}
article.post-box p.article, .footer-wigets p,.blog-attr span,p,.wp-block-latest-comments__comment-meta,.project-list ul li a{
    font-family:<?php print $ascent['body_tipo']['font-family'];?>;
    font-size:<?php print $ascent['body_tipo']['font-size'];?>;
    font-weight:                 <?php print $ascent['body_tipo']['font-weight'];?>;
    color:           <?php print $ascent['body_tipo']['color'];?>;
    text-transform:                    <?php print $ascent['body_tipo']['text-transform'];?>;
    line-height:                 <?php print $ascent['body_tipo']['line-height'];?>;
}
.sidebar .wp-block-categories-list .cat-item a, .sidebar .wp-block-tag-cloud a, .sidebar .wp-block-page-list a, .sidebar .menu li a, .sidebar ul li a,a{
    font-family:<?php print $ascent['body_tipo']['font-family'];?>;
    font-size:<?php print $ascent['body_tipo']['font-size'];?>;
    font-weight:                 <?php print $ascent['body_tipo']['font-weight'];?>;
    color:           <?php print $ascent['body_link_color']['regular'];?>;
    text-transform:                    <?php print $ascent['body_tipo']['text-transform'];?>;
    line-height:                 <?php print $ascent['body_tipo']['line-height'];?>;
    background-color: transparent;
}
.footer-wigets .wp-block-categories-list .cat-item a, .footer-wigets .wp-block-tag-cloud a, .footer-wigets .wp-block-page-list a, .footer-wigets .menu li a, .footer-wigets ul li a,.blog-attr a,.wp-block-latest-comments__comment-meta a,a{
    font-family:<?php print $ascent['body_tipo']['font-family'];?>;
    font-size:<?php print $ascent['body_tipo']['font-size'];?>;
    font-weight:                 <?php print $ascent['body_tipo']['font-weight'];?>;
    color:           <?php print $ascent['body_link_color']['regular'];?>;
    text-transform:                    <?php print $ascent['body_tipo']['text-transform'];?>;
    line-height:                 <?php print $ascent['body_tipo']['line-height'];?>;
    background-color: transparent;
}
.sidebar .wp-block-categories-list .cat-item a:hover, .sidebar .wp-block-tag-cloud a:hover, .sidebar .wp-block-page-list a:hover, .sidebar .menu li a:hover, .sidebar ul li a:hover,.footer-wigets .wp-block-categories-list .cat-item a:hover, .footer-wigets .wp-block-tag-cloud a:hover, .footer-wigets .wp-block-page-list a:hover, .footer-wigets .menu li a:hover, .footer-wigets ul li a:hover,.blog-attr a:hover,.wp-block-latest-comments__comment-meta a:hover,a:hover{
    color:           <?php print $ascent['body_link_color']['hover'];?>;
}
.sidebar .wp-block-categories-list .cat-item a:visited, .sidebar .wp-block-tag-cloud a:visited, .sidebar .wp-block-page-list a:visited, .sidebar .menu li a:visited, .sidebar ul li a:visited,.footer-wigets .wp-block-categories-list .cat-item a:visited, .footer-wigets .wp-block-tag-cloud a:visited, .footer-wigets .wp-block-page-list a:visited, .footer-wigets .menu li a:visited, .footer-wigets ul li a:visited,.blog-attr a:visited,.wp-block-latest-comments__comment-meta a:visited,a:visited{
    color:           <?php print $ascent['body_link_color']['visited'];?>;
}

h2.logo-text{
   font-weight:                <?php print $ascent['logo-trifo']['font-weight'];?>;
   font-size:              <?php print $ascent['logo-trifo']['font-size'];?>;
   font-family:                <?php print $ascent['logo-trifo']['font-family'];?>;
   color:          <?php print $ascent['logo-trifo']['color'];?>;
   text-transform:                   <?php print $ascent['logo-trifo']['text-transform'];?>;
 }
h2.post-title a{
   font-weight:                <?php print $ascent['post-title']['font-weight'];?>;
   font-size:              <?php print $ascent['post-title']['font-size'];?>;
   font-family:                <?php print $ascent['post-title']['font-family'];?>;
   color:          <?php print $ascent['post-title']['color'];?>;
   text-transform:                   <?php print $ascent['post-title']['text-transform'];?>;
}
h2.page-title a,h2.page-title{
   font-weight:                <?php print $ascent['page-title']['font-weight'];?>;
   font-size:              <?php print $ascent['page-title']['font-size'];?>;
   font-family:                <?php print $ascent['page-title']['font-family'];?>;
   color:          <?php print $ascent['page-title']['color'];?>;
   text-transform:                   <?php print $ascent['page-title']['text-transform'];?>;
}
h2.wdtitle{
   font-weight:                <?php print $ascent['web_title_typo']['font-weight'];?>;
   font-size:              <?php print $ascent['web_title_typo']['font-size'];?>;
   font-family:                <?php print $ascent['web_title_typo']['font-family'];?>;
   color:          <?php print $ascent['web_title_typo']['color'];?>;
   text-transform:                   <?php print $ascent['web_title_typo']['text-transform'];?>;
   margin-bottom: 0;
}
h3.wdesc{
   font-weight:                <?php print $ascent['web_desc_typo']['font-weight'];?>;
   font-size:              <?php print $ascent['web_desc_typo']['font-size'];?>;
   font-family:                <?php print $ascent['web_desc_typo']['font-family'];?>;
   color:          <?php print $ascent['web_desc_typo']['color'];?>;
   text-transform:                   <?php print $ascent['web_desc_typo']['text-transform'];?>;
   margin-bottom: 0;
}
.sidebar .wp-block-search__label, .sidebar h2.widgettitle, .sidebar .wp-block-heading{
    margin-bottom:                   <?php print $ascent['side-title']['margin-bottom']?>;
   font-weight:                <?php print $ascent['side-title']['font-weight'];?>;
   font-size:              <?php print $ascent['side-title']['font-size'];?>;
   font-family:                <?php print $ascent['side-title']['font-family'];?>;
   color:          <?php print $ascent['side-title']['color'];?>;
   text-transform:                   <?php print $ascent['side-title']['text-transform'];?>;
}
.footer-wigets .wp-block-search__label, .footer-wigets h2.widgettitle, .footer-wigets .wp-block-heading{
    margin-bottom:                   <?php print $ascent['fotter-title']['margin-bottom']?>;
   font-weight:                <?php print $ascent['fotter-title']['font-weight'];?>;
   font-size:              <?php print $ascent['fotter-title']['font-size'];?>;
   font-family:                <?php print $ascent['fotter-title']['font-family'];?>;
   color:          <?php print $ascent['fotter-title']['color'];?>;
   text-transform:                   <?php print $ascent['fotter-title']['text-transform'];?>;
}
.g-maps iframe{
    width:           <?php print $ascent['maps_demen']['width'];?>;
    height:            <?php print $ascent['maps_height']['height'];?>;
    margin-top:                <?php print $ascent['maps-mar']['margin-top']?>;
}
<?php if ( $ascent['switch_bac_patt'] == false ): ?>
body{
    background-image:url(<?php print $ascent['opt-background']['background-image'];?>);
    background-color:<?php print $ascent['opt-background']['background-color'];?>;
    background-attachment:                           <?php print $ascent['opt-background']['background-attachment'];?>;
    background-position:<?php print $ascent['opt-background']['background-position'];?>;
    background-repeat:                       <?php print $ascent['opt-background']['background-repeat'];?>;
    background-size:                     <?php print $ascent['opt-background']['background-size'];?>;
}
<?php endif;?>

<?php if ( $ascent['switch_bac_patt'] == true ): ?>
<?php $backk = get_template_directory_uri();
        $pattern     = '/assets/images/pattern/pattern';
        $again       = $backk . $pattern;
    ?>
body{

    background-image:url(<?php print $again;
                             print $ascent['background_pattarn']?>.png)!important;

}
<?php endif;?>

<?php $break = $ascent['mobail-menu-brack'];
        $breaks      = $break - 1;
    ?>


@media only screen and (max-width:                                   <?php print $breaks?>px) {
  ul.main-menu li {
    display: block;
}
ul.main-menu li ul {
  position: static;
  width: 100%;
}
ul.main-menu li ul ul {
  position: static;
  width: 100%;
}
.search{
    display: none;
}
ul.main-menu li ul li {
	background-color:<?php print $ascent['mobail_menu_back'];?>!important;
}
ul.main-menu li ul li:hover {
	background-color:	                  <?php print $ascent['mobail_menu_back_hover'];?> !important;
}
ul.main-menu li ul li:hover ul li a {
	color:	       <?php print $ascent['Mobail_menu_text_typo']['color'];?> !important;
}
ul.main-menu li.current-menu-item a {
	color:	       <?php print $ascent['mobail_menu_text_hover'];?>;
}
ul.main-menu > li:hover a {
	color:	       <?php print $ascent['mobail_menu_text_hover'];?>;
}
ul.main-menu li.current-menu-item ul li a, ul.main-menu li:hover ul li a {
	color:	       <?php print $ascent['Mobail_menu_text_typo']['color'];?> !important;
}
ul.main-menu li ul li:hover a {
	color:	       <?php print $ascent['mobail_menu_text_hover'];?> !important;
}
ul.main-menu li ul li ul li:hover a {
	color:	       <?php print $ascent['mobail_menu_text_hover'];?> !important;
}
ul.main-menu li ul li ul li:hover ul li a {
	color:	       <?php print $ascent['Mobail_menu_text_typo']['color'];?> !important;
}
ul.main-menu li ul li ul li:hover ul li:hover a {
	color:	       <?php print $ascent['mobail_menu_text_hover'];?> !important;
}
}


.hc-nav-trigger span,
.hc-nav-trigger span::before,
.hc-nav-trigger span::after {
    background:                <?php print $ascent['mobail_menu_icon'];?>;
}
.hc-offcanvas-nav .nav-item-link,
.hc-offcanvas-nav li.nav-close a,
.hc-offcanvas-nav .nav-back a {
  padding-left: 17px;
  font-family:<?php print $ascent['Mobail_menu_text_typo']['font-family'];?>;
  font-size:             <?php print $ascent['Mobail_menu_text_typo']['font-size'];?>;
  color:         <?php print $ascent['Mobail_menu_text_typo']['color'];?>;
  z-index: 1;
  background: rgba(0, 0, 0, 0);
  border-bottom: 1px solid                           <?php print $ascent['mobail_menu_border'];?>;
  transition: .1s ease;
  line-height:               <?php print $ascent['Mobail_menu_text_typo']['line-height'];?>;
}
.hc-offcanvas-nav a.nav-next {
    border-left: 1px solid                           <?php print $ascent['mobail_menu_border'];?>;
    border-bottom: 1px solid                             <?php print $ascent['mobail_menu_border'];?>
}
.hc-offcanvas-nav .nav-content>h2,
.hc-offcanvas-nav .nav-content>h3,
.hc-offcanvas-nav .nav-content>h4,
.hc-offcanvas-nav .nav-content>h5,
.hc-offcanvas-nav .nav-content>h6 {
    color:           <?php print $ascent['Mobail_menu_text_typo']['color'];?>;
}
.hc-offcanvas-nav .nav-container,
.hc-offcanvas-nav .nav-wrapper,
.hc-offcanvas-nav ul {
    background:                <?php print $ascent['mobail_menu_back'];?>;
}
.hc-offcanvas-nav .nav-content>.nav-close:first-child a,
.hc-offcanvas-nav .nav-title+.nav-close a.has-label,
.hc-offcanvas-nav li.nav-close a,
.hc-offcanvas-nav .nav-back a {
    background:                <?php print $ascent['mobail_menu_back'];?>;
    border-top: 1px solid                          <?php print $ascent['mobail_menu_border'];?>;
    border-bottom: 1px solid                             <?php print $ascent['mobail_menu_border'];?>;
}
.hc-offcanvas-nav .nav-next span::before, .hc-offcanvas-nav .nav-back span::after {
	border-top: 2px solid	                      <?php print $ascent['Mobail_menu_text_typo']['color'];?>;
	border-left: 2px solid	                       <?php print $ascent['Mobail_menu_text_typo']['color'];?>;
}
.hc-offcanvas-nav .nav-next span::before, .hc-offcanvas-nav .nav-back span::before {
	border-top: 2px solid	                      <?php print $ascent['Mobail_menu_text_typo']['color'];?>;
	border-left: 2px solid	                       <?php print $ascent['Mobail_menu_text_typo']['color'];?>;
}
.hc-offcanvas-nav .nav-wrapper>.nav-content>ul:first-of-type>li:first-child:not(.nav-back):not(.nav-close)>.nav-item-wrapper>.nav-item-link+a {
    border-top: 1px solid                          <?php print $ascent['mobail_menu_border'];?>;
}

.hc-offcanvas-nav .nav-close-button span::before, .hc-offcanvas-nav .nav-close-button span::after {
	border-top: 2px solid	                      <?php print $ascent['Mobail_menu_text_typo']['color'];?>;
	border-left: 2px solid	                       <?php print $ascent['Mobail_menu_text_typo']['color'];?>;
}
.hc-offcanvas-nav .nav-content > .nav-close:first-child a, .hc-offcanvas-nav .nav-title + .nav-close a.has-label, .hc-offcanvas-nav li.nav-close a, .hc-offcanvas-nav .nav-back a {
	background:	            <?php print $ascent['mobail_menu_back'];?>;
	border-top: 1px solid	                      <?php print $ascent['mobail_menu_border'];?>;
	border-bottom: 1px solid	                         <?php print $ascent['mobail_menu_border'];?>;
}
.hc-offcanvas-nav:not(.touch-device) li:not(.nav-item-custom) a:not([disabled]):hover {
    background:                <?php print $ascent['mobail_menu_back_hover'];?>;
};
.erorr-img{
    background-image:url(<?php print $ascent['eror-img']['url']?>);
    margin: 10px;
    color: red;
}
<?php if ( $ascent['a_slider_indselect'] == 2 ): ?>
.carousel-indicators [data-bs-target] {
    width: 15px!important;
    height: 15px!important;
    border-radius: 50%!important;
}
<?php endif;?>
.carousel-indicators [data-bs-target] {
    background-color:                      <?php print $ascent['a_slider_color'];?>!important;
}
.carousel-caption h5.cursol-title{
   font-weight:                <?php print $ascent['a_slider-title']['font-weight'];?>;
   font-size:              <?php print $ascent['a_slider-title']['font-size'];?>;
   font-family:                <?php print $ascent['a_slider-title']['font-family'];?>;
   color:          <?php print $ascent['a_slider-title']['color'];?>;
   text-transform:                   <?php print $ascent['a_slider-title']['text-transform'];?>;
   line-height:                <?php print $ascent['a_slider-title']['line-height'];?>;
}
.carousel-caption p.cursol-text{
   font-weight:                <?php print $ascent['a_slider-text']['font-weight'];?>;
   font-size:              <?php print $ascent['a_slider-text']['font-size'];?>;
   font-family:                <?php print $ascent['a_slider-text']['font-family'];?>;
   color:          <?php print $ascent['a_slider-text']['color'];?>;
   text-transform:                   <?php print $ascent['a_slider-text']['text-transform'];?>;
   line-height:                <?php print $ascent['a_slider-text']['line-height'];?>;
}
.pagination a{
    color:           <?php print $ascent['pagination-text'];?>;
    font-size:<?php print $ascent['pagination-font'];?>;
}
.pagination span{
    font-size:<?php print $ascent['pagination-font'];?>;
}

.pagination span.current{
    color:           <?php print $ascent['pagination-active-color'];?>;
}
.pagination a:hover,.pagination .current{
    background:                <?php print $ascent['pagination-active-hover'];?>;
    color:           <?php print $ascent['pagination-active-color'];?>;
}
.breadcrumb-item+.breadcrumb-item::before {
    content: var(--bs-breadcrumb-divider, "<?php print $ascent['bread-author'];?>");
    color:           <?php print $ascent['bread-text'];?>;
    font-size:               <?php print $ascent['bread-font'];?>;
}
.breadcrumb a{
    color:           <?php print $ascent['bread-text'];?>;
    font-size:               <?php print $ascent['bread-font'];?>;
}

.breadcrumb a:hover{
    color:           <?php print $ascent['bread-hover'];?>;
}
<?php if ( is_user_logged_in() ): ?>
.header {
    top: 32px;
}
<?php else: ?>
.header{
    top: 0;
}
<?php endif;?>


footer.footer{
    background-image:url(<?php print $ascent['fttr-background']['background-image'];?>);
    background-color:<?php print $ascent['fttr-background']['background-color'];?>;
    background-attachment:                           <?php print $ascent['fttr-background']['background-attachment'];?>;
    background-position:<?php print $ascent['fttr-background']['background-position'];?>;
    background-repeat:                       <?php print $ascent['fttr-background']['background-repeat'];?>;
    background-size:                     <?php print $ascent['fttr-background']['background-size'];?>;
}
.footer-padding{
    padding-top:                 <?php print $ascent['fttr_padding']['padding-top'];?>;
    padding-bottom:                    <?php print $ascent['fttr_padding']['padding-bottom'];?>;
    padding-left:                  <?php print $ascent['fttr_padding']['padding-left'];?>;
    padding-right:                   <?php print $ascent['fttr_padding']['padding-right'];?>;
}
.sub-fotter{
    background-color:                      <?php print $ascent['sub_fttr_back'];?>;
    padding-top:                 <?php print $ascent['sub_fttr_padd']['padding-top'];?>;
    padding-bottom:                    <?php print $ascent['sub_fttr_padd']['padding-bottom'];?>;
    padding-left:                  <?php print $ascent['sub_fttr_padd']['padding-left'];?>;
    padding-right:                   <?php print $ascent['sub_fttr_padd']['padding-right'];?>;
}
.sub-fotter p{
    color:           <?php print $ascent['sub_fttr_text'];?>;
    font-size:               <?php print $ascent['fttr_text_size'];?>;
}
.sub-fotter .socail-icon ul li a {
    color:           <?php print $ascent['sub_fttr_icon'];?>;
}
.header {
    background-color:                      <?php print $ascent['headerr_back'];?>;
    padding-top:                 <?php print $ascent['header_padding'];?>px;
    padding-bottom:                    <?php print $ascent['header_padding'];?>px;
}
.header--fixed{
    background-color:                      <?php print $ascent['sti_headerr_back'];?>;
    padding-top:                 <?php print $ascent['sticky_header_padding'];?>px;
    padding-bottom:                    <?php print $ascent['sticky_header_padding'];?>px;
}
.header--fixed ul.main-menu>li>a ,.header--fixed  .search span.fa-search {
    color:           <?php print $ascent['sti_headerr_menu'];?>;
}
<?php if ( $ascent['sti_headerr'] == 1 ): ?>
.header {
    transition: all .1s ease-in-out;
    width: 100%;
    position: sticky;
    z-index: 999;
}
<?php endif;?>
<?php $width = $ascent['layout_width'];?>
<?php if ( $ascent['layout_switch'] == 1 ): ?>
@media only screen and (min-width: 1024px) {
body{
    max-width:           <?php print $width;?>;
    margin-left: auto;
    margin-right: auto;
    margin-top:<?php print $ascent['Layout-margin']['margin-top'];?>;
    margin-bottom:<?php print $ascent['Layout-margin']['margin-bottom'];?>;
}
}
<?php endif;?>
section.bgback{
    background-image:url(<?php print $ascent['main-content-background']['background-image'];?>);
    background-color:<?php print $ascent['main-content-background']['background-color'];?>;
    background-attachment:                           <?php print $ascent['main-content-background']['background-attachment'];?>;
    background-position:<?php print $ascent['main-content-background']['background-position'];?>;
    background-repeat:                       <?php print $ascent['main-content-background']['background-repeat'];?>;
    background-size:                     <?php print $ascent['main-content-background']['background-size'];?>;

    padding-top: 1em;
}
@media only screen and (min-width: 1024px) {
    .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    max-width:               <?php print $width;?>!important;
}
}
.searchs input[type="search"]{
    padding-left:                  <?php print $ascent['search-input-padding']['width'];?>px;
    padding-right:                   <?php print $ascent['search-input-padding']['width'];?>px;
    padding-top:                 <?php print $ascent['search-input-padding']['height'];?>px;
    padding-bottom:                    <?php print $ascent['search-input-padding']['height'];?>px;
    font-size:               <?php print $ascent['search-font']?>;
    color:            <?php print $ascent['search-color']?>;
    background-color:                      <?php print $ascent['search-background']?>;
    border-top:                <?php print $ascent['search-bordre']['border-top'];?>;
    border-bottom:                   <?php print $ascent['search-bordre']['border-bottom'];?>;
    border-left:                 <?php print $ascent['search-bordre']['border-left'];?>;
    border-right:                  <?php print $ascent['search-bordre']['border-right'];?>;
    border-style:<?php print $ascent['search-bordre']['border-style'];?>;
    border-color:<?php print $ascent['search-bordre']['border-color'];?>;
}
.searchs input[type="search"]:hover,.searchs input[type="search"]:focus,.searchs input[type="submit"]:active{
    outline: none;
    box-shadow: none;
    border-top:                <?php print $ascent['search-bordre']['border-top'];?>;
    border-bottom:                   <?php print $ascent['search-bordre']['border-bottom'];?>;
    border-left:                 <?php print $ascent['search-bordre']['border-left'];?>;
    border-right:                  <?php print $ascent['search-bordre']['border-right'];?>;
    border-style:<?php print $ascent['search-bordre']['border-style'];?>;
    border-color:<?php print $ascent['search-bordre']['border-color'];?>;
}
.seach-btn {
    background-color:                      <?php print $ascent['search-button-background']?>;
    padding-left:                  <?php print $ascent['search-button-padding']['width'];?>px;
    padding-right:                   <?php print $ascent['search-button-padding']['width'];?>px;
    border-radius: 0;
    color:           <?php print $ascent['search-button-color']?>;
    font-size:                    <?php print $ascent['search-button-font']?>;
    border-top:                <?php print $ascent['search-button-bordre']['border-top'];?>;
    border-bottom:                   <?php print $ascent['search-button-bordre']['border-bottom'];?>;
    border-left:                 <?php print $ascent['search-button-bordre']['border-left'];?>;
    border-right:                  <?php print $ascent['search-button-bordre']['border-right'];?>;
    border-style:<?php print $ascent['search-button-bordre']['border-style'];?>;
    border-color:<?php print $ascent['search-button-bordre']['border-color'];?>;
}
.seach-btn:hover{
    background-color:                      <?php print $ascent['search-button-background']?>;
    padding-left:                  <?php print $ascent['search-button-padding']['width'];?>px;
    padding-right:                   <?php print $ascent['search-button-padding']['width'];?>px;
    border-radius: 0;
    color:           <?php print $ascent['search-button-color']?>;
    font-size:                    <?php print $ascent['search-button-font']?>;
    border-top:                <?php print $ascent['search-button-bordre']['border-top'];?>;
    border-bottom:                   <?php print $ascent['search-button-bordre']['border-bottom'];?>;
    border-left:                 <?php print $ascent['search-button-bordre']['border-left'];?>;
    border-right:                  <?php print $ascent['search-button-bordre']['border-right'];?>;
    border-style:<?php print $ascent['search-button-bordre']['border-style'];?>;
    border-color:<?php print $ascent['search-button-bordre']['border-color'];?>;
}
.primary-button{
    background-color:                      <?php print $ascent['button-back']?>!important;
    border-radius:                   <?php print $ascent['button-radi']?>;
    color:           <?php print $ascent['button-text']?>;
    font-size:               <?php print $ascent['button-font']?>;
    text-decoration: none;
    padding-top:                 <?php print $ascent['pbutton-padding']['padding-top'];?>;
    padding-bottom:                    <?php print $ascent['pbutton-padding']['padding-bottom'];?>;
    padding-left:                  <?php print $ascent['pbutton-padding']['padding-left'];?>;
    padding-right:                   <?php print $ascent['pbutton-padding']['padding-right'];?>;
    transition: 0.3s;
    border: 0px!important;
}
.primary-button:hover,.primary-button:active{
    background-color:                      <?php print $ascent['button-hover-back']?>!important;
    color:           <?php print $ascent['button-hover-color']?>!important;
}
.cotact-form .form-control {
    font-size:<?php print $ascent['cform_inp_text']?>;
    background-color:<?php print $ascent['cform_inp_back']?>;
    color:<?php print $ascent['cform_inp_color']?>;
    border-top:                    <?php print $ascent['cform_inp_border']['border-top'];?>;
    border-bottom:                    <?php print $ascent['cform_inp_border']['border-bottom'];?>;
    border-left:                    <?php print $ascent['cform_inp_border']['border-left'];?>;
    border-right:                    <?php print $ascent['cform_inp_border']['border-right'];?>;
    border-style:                    <?php print $ascent['cform_inp_border']['border-style'];?>;
    border-color:                    <?php print $ascent['cform_inp_border']['border-color'];?>;
    border-radius    :<?php print $ascent['cform_inp_bor_redi']?>px;
}
.cotact-form  .form-control:focus {
    color:<?php print $ascent['cform_inp_color']?>;
    background-color:<?php print $ascent['cform_inp_back']?>;
    border: none;
    outline: 0;
    box-shadow: 0 0 0                      <?php print $ascent['cform_inp_shadow_width'] . 'px ';
                          print $ascent['cform_inp_back_fuc']?>;
}
.hovercover {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    width: 0;
    height: 100%;
    background-color: <?php print $ascent['hovercover_back']?>;
    transition: <?php print $ascent['hovercover_transition']?>s;
    opacity: <?php print $ascent['hovercover_opacity']?>;
}
.hovercover-title{
   font-weight:                <?php print $ascent['Hover_title_wide'];?>;
   font-size:              <?php print $ascent['Hover_title_sixe'];?>;
   color:          <?php print $ascent['Hover_title_color'];?>;
}
<?php print $ascent['css_editor'];?>
    </style>

    <?php

    }
    add_action( 'wp_head', 'ascent_style' );