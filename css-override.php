<?php
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars ) ) {
	$boldthemes_crush_vars = BoldThemesFramework::$crush_vars;
}
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars_def ) ) {
	$boldthemes_crush_vars_def = BoldThemesFramework::$crush_vars_def;
}
if ( isset( $boldthemes_crush_vars['logoIndent'] ) ) {
	$logoIndent = $boldthemes_crush_vars['logoIndent'];
} else {
	$logoIndent = "0";
}
if ( isset( $boldthemes_crush_vars['headingFont'] ) ) {
	$headingFont = $boldthemes_crush_vars['headingFont'];
} else {
	$headingFont = "Playfair Display";
}
if ( isset( $boldthemes_crush_vars['headingSuperTitleFont'] ) ) {
	$headingSuperTitleFont = $boldthemes_crush_vars['headingSuperTitleFont'];
} else {
	$headingSuperTitleFont = "Lato";
}
if ( isset( $boldthemes_crush_vars['headingSubTitleFont'] ) ) {
	$headingSubTitleFont = $boldthemes_crush_vars['headingSubTitleFont'];
} else {
	$headingSubTitleFont = "Playfair Display";
}
if ( isset( $boldthemes_crush_vars['menuFont'] ) ) {
	$menuFont = $boldthemes_crush_vars['menuFont'];
} else {
	$menuFont = "Lato";
}
if ( isset( $boldthemes_crush_vars['bodyFont'] ) ) {
	$bodyFont = $boldthemes_crush_vars['bodyFont'];
} else {
	$bodyFont = "Playfair Display";
}
if ( isset( $boldthemes_crush_vars['accentColor'] ) ) {
	$accentColor = $boldthemes_crush_vars['accentColor'];
} else {
	$accentColor = "#B71234";
}
$accentColorDark = CssCrush\fn__l_adjust( $accentColor." -15" );$accentColorLight = CssCrush\fn__l_adjust( $accentColor." 5" );if ( isset( $boldthemes_crush_vars['alternateColor'] ) ) {
	$alternateColor = $boldthemes_crush_vars['alternateColor'];
} else {
	$alternateColor = "#584528";
}
if ( isset( $boldthemes_crush_vars['logoHeight'] ) ) {
	$logoHeight = $boldthemes_crush_vars['logoHeight'];
} else {
	$logoHeight = "60";
}
$css_override = sanitize_text_field("input:not([type='checkbox']):not([type='radio']):not([type='submit']):not([type='button']),
textarea,
select{
    font-family: {$headingFont};}
input:not([type='checkbox']):not([type='radio']):not([type='submit']):focus:not([type='button']):focus,
textarea:not([type='checkbox']):not([type='radio']):focus{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.btLightSkin input:not([type='checkbox']):not([type='radio']):not([type='submit']):focus:not([type='button']):focus,
.btDarkSkin .btLightSkin input:not([type='checkbox']):not([type='radio']):not([type='submit']):focus:not([type='button']):focus,
.btLightSkin textarea:not([type='checkbox']):not([type='radio']):focus,
.btDarkSkin .btLightSkin textarea:not([type='checkbox']):not([type='radio']):focus{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
a:hover{
    color: {$accentColor};}
dt{
    font-family: {$headingSuperTitleFont};}
dd{font-family: {$headingSuperTitleFont};}
select,
input{font-family: {$bodyFont};}
body{font-family: \"{$bodyFont}\",Arial,sans-serif;}
h1,
h2,
h3,
h4,
h5,
h6{font-family: \"{$headingFont}\";}
.btDarkSkin .btHeadlineAccentColor h1,
.btDarkSkin .btHeadlineAccentColor h2,
.btDarkSkin .btHeadlineAccentColor h3,
.btDarkSkin .btHeadlineAccentColor h4,
.btDarkSkin .btHeadlineAccentColor h5,
.btDarkSkin .btHeadlineAccentColor h6,
.btLightSkin .btDarkSkin .btHeadlineAccentColor h1,
.btLightSkin .btDarkSkin .btHeadlineAccentColor h2,
.btLightSkin .btDarkSkin .btHeadlineAccentColor h3,
.btLightSkin .btDarkSkin .btHeadlineAccentColor h4,
.btLightSkin .btDarkSkin .btHeadlineAccentColor h5,
.btLightSkin .btDarkSkin .btHeadlineAccentColor h6,
.btLightSkin .btHeadlineAccentColor h1,
.btLightSkin .btHeadlineAccentColor h2,
.btLightSkin .btHeadlineAccentColor h3,
.btLightSkin .btHeadlineAccentColor h4,
.btLightSkin .btHeadlineAccentColor h5,
.btLightSkin .btHeadlineAccentColor h6,
.btDarkSkin .btLightSkin .btHeadlineAccentColor h1,
.btDarkSkin .btLightSkin .btHeadlineAccentColor h2,
.btDarkSkin .btLightSkin .btHeadlineAccentColor h3,
.btDarkSkin .btLightSkin .btHeadlineAccentColor h4,
.btDarkSkin .btLightSkin .btHeadlineAccentColor h5,
.btDarkSkin .btLightSkin .btHeadlineAccentColor h6{color: {$accentColor};}
.btDarkSkin .btHeadlineAlternateColor h1,
.btDarkSkin .btHeadlineAlternateColor h2,
.btDarkSkin .btHeadlineAlternateColor h3,
.btDarkSkin .btHeadlineAlternateColor h4,
.btDarkSkin .btHeadlineAlternateColor h5,
.btDarkSkin .btHeadlineAlternateColor h6,
.btLightSkin .btDarkSkin .btHeadlineAlternateColor h1,
.btLightSkin .btDarkSkin .btHeadlineAlternateColor h2,
.btLightSkin .btDarkSkin .btHeadlineAlternateColor h3,
.btLightSkin .btDarkSkin .btHeadlineAlternateColor h4,
.btLightSkin .btDarkSkin .btHeadlineAlternateColor h5,
.btLightSkin .btDarkSkin .btHeadlineAlternateColor h6,
.btLightSkin .btHeadlineAlternateColor h1,
.btLightSkin .btHeadlineAlternateColor h2,
.btLightSkin .btHeadlineAlternateColor h3,
.btLightSkin .btHeadlineAlternateColor h4,
.btLightSkin .btHeadlineAlternateColor h5,
.btLightSkin .btHeadlineAlternateColor h6,
.btDarkSkin .btLightSkin .btHeadlineAlternateColor h1,
.btDarkSkin .btLightSkin .btHeadlineAlternateColor h2,
.btDarkSkin .btLightSkin .btHeadlineAlternateColor h3,
.btDarkSkin .btLightSkin .btHeadlineAlternateColor h4,
.btDarkSkin .btLightSkin .btHeadlineAlternateColor h5,
.btDarkSkin .btLightSkin .btHeadlineAlternateColor h6{color: {$alternateColor};}
.btPreloader .animation .preloaderLogo{height: {$logoHeight}px;}
.btAccentColorBackground{background-color: {$accentColor} !important;}
.mainHeader:not(.gutter) > .port{
    padding: 0 {$logoIndent}px;}
.btLightSkin.btMenuBelowLogo,
.btLightSkin.btMenuBelowLogo .btLogoArea.menuHolder,
.btDarkSkin.btMenuBelowLogo .btLightSkin .btLogoArea.menuHolder{border-bottom: 1px solid {$alternateColor};}
.menuPort{font-family: \"{$menuFont}\";}
.btTextLogo{
    line-height: {$logoHeight}px;}
.btLogoArea .logo img{height: {$logoHeight}px;}
.btHorizontalMenuTrigger{
    line-height: {$logoHeight}px;
    width: {$logoHeight}px;
    -webkit-box-shadow: 0 0 0 0 {$accentColor} inset,0 0 0 transparent;
    box-shadow: 0 0 0 0 {$accentColor} inset,0 0 0 transparent;}
.btLightSkin .btHorizontalMenuTrigger:hover,
.btDarkSkin .btLightSkin .btHorizontalMenuTrigger:hover{-webkit-box-shadow: 0 0 0 {$logoHeight}px {$accentColor} inset,0 0 0 1px #fff;
    box-shadow: 0 0 0 {$logoHeight}px {$accentColor} inset,0 0 0 1px #fff;}
.btDarkSkin .btHorizontalMenuTrigger:hover,
.btLightSkin .btDarkSkin .btHorizontalMenuTrigger:hover{-webkit-box-shadow: 0 0 0 {$logoHeight}px {$accentColor} inset,0 0 0 1px #fff;
    box-shadow: 0 0 0 {$logoHeight}px {$accentColor} inset,0 0 0 1px #fff;}
.btMenuHorizontal .menuPort nav > ul > li:after{
    -webkit-box-shadow: 0 0 0 0 {$accentColor} inset;
    box-shadow: 0 0 0 0 {$accentColor} inset;}
.btMenuHorizontal .menuPort nav > ul > li.on:after{-webkit-box-shadow: 0 0 0 20px {$accentColor} inset;
    box-shadow: 0 0 0 20px {$accentColor} inset;}
.btMenuHorizontal .menuPort nav > ul > li > ul li.current-menu-ancestor > a,
.btMenuHorizontal .menuPort nav > ul > li > ul li.current-menu-item > a{color: {$accentColor} !important;}
.btMenuHorizontal .menuPort nav > ul > li > ul li:after{
    -webkit-box-shadow: 0 0 0 0 {$accentColor} inset;
    box-shadow: 0 0 0 0 {$accentColor} inset;}
.btMenuHorizontal .menuPort nav > ul > li > ul li.on:after,
.btMenuHorizontal .menuPort nav > ul > li > ul li.current-menu-item:after{-webkit-box-shadow: 0 0 0 5px {$accentColor} inset;
    box-shadow: 0 0 0 5px {$accentColor} inset;}
.btDarkSkin .menuPort ul > li > ul > li > a,
.btLightSkin .btDarkSkin .menuPort ul > li > ul > li > a{color: {$alternateColor};}
.btDarkSkin .menuPort ul > li > ul > li.on > a,
.btLightSkin .btDarkSkin .menuPort ul > li > ul > li.on > a{color: {$accentColor};}
.btLightSkin .menuPort ul > li a,
.btDarkSkin .btLightSkin .menuPort ul > li a{color: {$alternateColor};}
.btLightSkin .menuPort ul > li.on > a,
.btDarkSkin .btLightSkin .menuPort ul > li.on > a{color: {$accentColor};}
.btLightSkin .menuPort ul > li > ul > li > a,
.btDarkSkin .btLightSkin .menuPort ul > li > ul > li > a{color: {$alternateColor};}
.btLightSkin .menuPort ul > li > ul > li.on > a,
.btDarkSkin .btLightSkin .menuPort ul > li > ul > li.on > a{color: {$accentColor};}
.btMenuVertical nav li.current-menu-ancestor > a,
.btMenuVertical nav li.current-menu-item > a{color: {$accentColor} !important;}
.subToggler{
    line-height: {$logoHeight}px;}
.btLightSkin .subToggler,
.btDarkSkin .btLightSkin .subToggler{color: {$alternateColor};}
.subToggler:before{
    font: normal 32px/{$logoHeight}px Icon7Stroke;}
.btLightSkin .menuPort ul ul .subToggler,
.btDarkSkin .btLightSkin .menuPort ul ul .subToggler{color: {$alternateColor};}
.btDarkSkin .menuPort ul ul .subToggler,
.btLightSkin .btDarkSkin .menuPort ul ul .subToggler{color: {$alternateColor};}
.on > .subToggler{
    color: {$accentColor};}
body.btMenuHorizontal .logo{margin-left: -{$logoIndent}px;}
body.btMenuHorizontal .menuPort ul ul{
    font-family: {$headingFont};}
body.btMenuHorizontal .menuPort ul ul:after{
    background-color: {$accentColor};}
body.btMenuHorizontal:not(.btMenuBelowLogo) .menuPort nav > ul > li > ul{top: {$logoHeight}px;}
body.btMenuHorizontal .menuPort > nav > ul > li.btMenuWideDropdown > ul > li > a{
    border-bottom: 1px solid {$accentColor};}
.btMenuHorizontal .mainHeader > .port:before{
    background-color: {$accentColor};}
.btMenuHorizontal:not(.btMenuBelowLogo) .topBarInMenu{height: {$logoHeight}px;}
.btMenuHorizontal:not(.btMenuBelowLogo) .menuPort nav > ul > li > a{line-height: {$logoHeight}px;}
body.btMenuHorizontal.btHideMenu .btShowMenu .btHorizontalMenuTrigger span.btIco a.btIcoHolder:before{color: {$accentColor};}
.btVerticalMenuTrigger{
    line-height: {$logoHeight}px;
    width: {$logoHeight}px;
    -webkit-box-shadow: 0 0 0 0 {$accentColor} inset,0 0 0 transparent;
    box-shadow: 0 0 0 0 {$accentColor} inset,0 0 0 transparent;}
.btLightSkin .btVerticalMenuTrigger:hover,
.btDarkSkin .btLightSkin .btVerticalMenuTrigger:hover,
.btLightSkin.btMenuVerticalOn .btVerticalMenuTrigger,
.btDarkSkin.btMenuVerticalOn .btLightSkin .btVerticalMenuTrigger{-webkit-box-shadow: 0 0 0 {$logoHeight}px {$accentColor} inset,0 0 0 1px #fff;
    box-shadow: 0 0 0 {$logoHeight}px {$accentColor} inset,0 0 0 1px #fff;}
.btDarkSkin .btVerticalMenuTrigger:hover,
.btLightSkin .btDarkSkin .btVerticalMenuTrigger:hover,
.btDarkSkin.btMenuVerticalOn .btVerticalMenuTrigger,
.lightSkin.btMenuVerticalOn .btDarkSkin .btVerticalMenuTrigger{-webkit-box-shadow: 0 0 0 {$logoHeight}px {$accentColor} inset,0 0 0 1px #fff;
    box-shadow: 0 0 0 {$logoHeight}px {$accentColor} inset,0 0 0 1px #fff;}
body.btMenuVertical ul ul li.on .subToggler{color: {$accentColor} !important;}
.btLightSkin.btMenuVertical > .menuPort .btCloseVertical:before,
.btDarkSkin .btLightSkin.btMenuVertical > .menuPort .btCloseVertical:before{color: {$accentColor};}
.btIconWidget .btIconWidgetTitle{font-family: {$headingFont};}
.btLightSkin .btIconWidget .btIconWidgetTitle,
.btDarkSkin .btLightSkin .btIconWidget .btIconWidgetTitle{color: {$alternateColor};}
.btIconWidget .btIconWidgetText{font-family: {$bodyFont};}
.btLightSkin .btIconWidget .btIconWidgetText,
.btDarkSkin .btLightSkin .btIconWidget .btIconWidgetText{color: {$accentColor};}
.btLightSkin .btIconWidget .btIco.btIcoDefaultColor span,
.btDarkSkin .btLightSkin .btIconWidget .btIco.btIcoDefaultColor span,
.btLightSkin .btIconWidget .btIco.btIcoDefaultType.btIcoDefaultColor .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIconWidget .btIco.btIcoDefaultType.btIcoDefaultColor .btIcoHolder:before{color: {$alternateColor};}
.btLightSkin .btIconWidget .btIco.btIcoDefaultColor:hover span,
.btDarkSkin .btLightSkin .btIconWidget .btIco.btIcoDefaultColor:hover span,
.btLightSkin .btIconWidget .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIconWidget .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before{color: {$accentColor};}
.btDarkSkin .btIconWidget .btIco.btIcoDefaultColor:hover span,
.btLightSkin .btDarkSkin .btIconWidget .btIco.btIcoDefaultColor:hover span,
.btDarkSkin .btIconWidget .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
.btLightSkin .btDarkSkin .btIconWidget .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before{color: {$accentColor};}
.btLightSkin .btSpecialHeaderIcon.btIconWidget .btIco.btIcoDefaultColor span,
.btDarkSkin .btLightSkin .btSpecialHeaderIcon.btIconWidget .btIco.btIcoDefaultColor span,
.btLightSkin .btSpecialHeaderIcon.btIconWidget .btIco.btIcoDefaultType.btIcoDefaultColor .btIcoHolder:before,
.btDarkSkin .btLightSkin .btSpecialHeaderIcon.btIconWidget .btIco.btIcoDefaultType.btIcoDefaultColor .btIcoHolder:before{color: {$accentColor};}
.btLightSkin .btSpecialHeaderIcon.btIconWidget .btIco.btIcoDefaultColor:hover span,
.btDarkSkin .btLightSkin .btSpecialHeaderIcon.btIconWidget .btIco.btIcoDefaultColor:hover span,
.btLightSkin .btSpecialHeaderIcon.btIconWidget .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
.btDarkSkin .btLightSkin .btSpecialHeaderIcon.btIconWidget .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before{color: {$alternateColor};}
.btMenuHorizontal .topBarInLogoArea{
    height: {$logoHeight}px;}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell{border: 0 solid {$accentColor};}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell .btIconWidgetTitle{
    font-family: {$menuFont};}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell .btIconWidgetText{
    font-family: {$headingFont};}
.btLightSkin .topBarInLogoArea .topBarInLogoAreaCell .btIconWidgetTitle,
.btDarkSkin .btLightSkin .topBarInLogoArea .topBarInLogoAreaCell .btIconWidgetTitle{color: {$alternateColor};}
.btLightSkin .topBarInLogoArea .topBarInLogoAreaCell .btIconWidgetText,
.btDarkSkin .btLightSkin .topBarInLogoArea .topBarInLogoAreaCell .btIconWidgetText{color: {$accentColor};}
.btMenuVertical .topBarInLogoArea .btIconWidgetTitle{font-family: {$menuFont};}
.btMenuVertical .topBarInLogoArea .btIconWidgetText{font-family: {$headingFont};}
.topBar .widget_search input[type=\"text\"],
.topBarInMenu .widget_search input[type=\"text\"]{
    font-family: {$headingFont};}
.btLightSkin .topBar .widget_search input[type=\"text\"],
.btLightSkin .topBarInMenu .widget_search input[type=\"text\"],
.btDarkSkin .btLightSkin .topBar .widget_search input[type=\"text\"],
.btDarkSkin .btLightSkin .topBarInMenu .widget_search input[type=\"text\"]{
    color: {$alternateColor};}
.btLightSkin .topBar .widget_search input[type=\"text\"]:hover,
.btLightSkin .topBarInMenu .widget_search input[type=\"text\"]:hover,
.btDarkSkin .btLightSkin .topBar .widget_search input[type=\"text\"]:hover,
.btDarkSkin .btLightSkin .topBarInMenu .widget_search input[type=\"text\"]:hover,
.btLightSkin .topBar .widget_search input[type=\"text\"]:focus,
.btLightSkin .topBarInMenu .widget_search input[type=\"text\"]:focus,
.btDarkSkin .btLightSkin .topBar .widget_search input[type=\"text\"]:focus,
.btDarkSkin .btLightSkin .topBarInMenu .widget_search input[type=\"text\"]:focus{-webkit-box-shadow: 0 -1px 0 0 {$alternateColor} inset !important;
    box-shadow: 0 -1px 0 0 {$alternateColor} inset !important;}
.btLightSkin .topBar .widget_search button,
.btLightSkin .topBarInMenu .widget_search button,
.btDarkSkin .btLightSkin .topBar .widget_search button,
.btDarkSkin .btLightSkin .topBarInMenu .widget_search button{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.btLightSkin .topBar .widget_search button:hover,
.btLightSkin .topBarInMenu .widget_search button:hover,
.btDarkSkin .btLightSkin .topBar .widget_search button:hover,
.btDarkSkin .btLightSkin .topBarInMenu .widget_search button:hover{-webkit-box-shadow: 0 0 0 20px {$accentColor} inset;
    box-shadow: 0 0 0 20px {$accentColor} inset;}
.btDarkSkin .topBar .widget_search button:hover,
.btDarkSkin .topBarInMenu .widget_search button:hover,
.btLightSkin .btDarkSkin .topBar .widget_search button:hover,
.btLightSkin .btDarkSkin .topBarInMenu .widget_search button:hover{
    color: {$accentColor};}
.btSearchInner.btFromTopBox{
    background: {$accentColorDark};}
.btSearchInner.btFromTopBox button:before{
    color: {$accentColor};}
.btSiteFooterWidgets .port{
    border-top: 4px solid {$accentColor};}
.btSiteFooterWidgets .btIconWidgetTitle{
    font-family: {$menuFont};}
.btSiteFooterWidgets .btIconWidgetText{
    font-family: {$headingFont};}
.btLightSkin .btSiteFooterWidgets .btIconWidgetTitle,
.btDarkSkin .btLightSkin .btSiteFooterWidgets .btIconWidgetTitle{color: {$alternateColor};}
.btLightSkin .btSiteFooterWidgets .btIconWidgetText,
.btDarkSkin .btLightSkin .btSiteFooterWidgets .btIconWidgetText{color: {$accentColor};}
.btSiteFooter .copyLine{
    font-family: {$headingSuperTitleFont};}
.btSiteFooter .menu{
    font-family: {$headingSuperTitleFont};}
.btLightSkin footer.btDarkSkin,
.btDarkSkin .btLightSkin footer.btDarkSkin{background: {$alternateColor};}
.btLightSkin .btSiteFooterWidgets h4,
.btDarkSkin .btLightSkin .btSiteFooterWidgets h4{color: {$accentColor};}
.btLightSkin .btSiteFooter,
.btDarkSkin .btLightSkin .btSiteFooter{background: {$alternateColor};}
footer.btDarkSkin{background: {$alternateColor};}
.btDarkSkin .btSiteFooterWidgets,
.btLightSkin .btDarkSkin .btSiteFooterWidgets{background: {$alternateColor};}
.sticky .headline:before{
    color: {$accentColor};}
.headline a{color: {$accentColor};}
.btPortfolioSingleItemColumns dt{color: {$accentColor};}
.btArticleListItem.btBlogColumnView .btArticleListBodyAuthor a,
.btPostSingleItemColumns .btArticleListBodyAuthor a{color: {$accentColor} !important;}
.vcard .posted{
    font-family: {$headingSuperTitleFont};}
.commentTxt p.edit-link a,
.commentTxt p.reply a{font-family: {$headingSuperTitleFont};}
.commentTxt p.edit-link a:hover,
.commentTxt p.reply a:hover{color: {$accentColor};}
.commentTxt p.edit-link a:before,
.commentTxt p.reply a:before{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.commentTxt p.edit-link a:hover:before,
.commentTxt p.reply a:hover:before{
    -webkit-box-shadow: 0 0 0 20px {$accentColor} inset;
    box-shadow: 0 0 0 20px {$accentColor} inset;}
.btBox > h4:after,
.btCustomMenu > h4:after{
    border-bottom: 3px solid {$accentColor};}
.btBox ul,
.btCustomMenu ul{
    font-family: {$headingFont};}
.btBox ul li a:hover,
.btCustomMenu ul li a:hover{color: {$accentColor};}
.btLightSkin .btCustomMenu ul li.current-menu-item a,
.btDarkSkin .btLightSkin .btCustomMenu ul li.current-menu-item a{
    color: {$accentColor};}
.btDarkSkin .btCustomMenu ul li.current-menu-item a,
.btLightSkin .btDarkSkin .btCustomMenu ul li.current-menu-item a{
    color: {$accentColor};}
.btCustomMenu ul li.current-menu-item a:before{background: {$accentColor};}
.btBox.widget_calendar table caption{background: {$accentColor};
    font-family: \"{$headingFont}\";}
.btBox.widget_calendar table thead th{
    font-family: \"{$headingFont}\";}
.btBox.widget_calendar table tbody td a{
    -webkit-box-shadow: 0 0 0 28px {$accentColor} inset;
    box-shadow: 0 0 0 28px {$accentColor} inset;}
.btBox.widget_calendar table tbody td a:hover{-webkit-box-shadow: 0 0 0 2px {$accentColor} inset;
    box-shadow: 0 0 0 2px {$accentColor} inset;
    color: {$accentColor};}
.btBox.widget_archive ul li a:hover,
.btBox.widget_categories ul li a:hover,
.btBox.widget_product_categories ul li a:hover,
.btBox.widget_pages ul li a:hover,
.btCustomMenu ul li a:hover,
.btBox.widget_meta ul li a:hover,
.btBox.widget_nav_menu ul li a:hover,
.btBox.widget_rss ul li a:hover,
.btBox.widget_recent_entries ul li a:hover,
.btBox.widget_archive ul li.current-cat a,
.btBox.widget_categories ul li.current-cat a,
.btBox.widget_product_categories ul li.current-cat a,
.btBox.widget_pages ul li.current-cat a,
.btCustomMenu ul li.current-cat a,
.btBox.widget_meta ul li.current-cat a,
.btBox.widget_nav_menu ul li.current-cat a,
.btBox.widget_rss ul li.current-cat a,
.btBox.widget_recent_entries ul li.current-cat a{
    color: {$accentColor};}
.btBox.widget_archive ul li a:hover:before,
.btBox.widget_categories ul li a:hover:before,
.btBox.widget_product_categories ul li a:hover:before,
.btBox.widget_pages ul li a:hover:before,
.btCustomMenu ul li a:hover:before,
.btBox.widget_meta ul li a:hover:before,
.btBox.widget_nav_menu ul li a:hover:before,
.btBox.widget_rss ul li a:hover:before,
.btBox.widget_recent_entries ul li a:hover:before,
.btBox.widget_archive ul li.current-cat a:before,
.btBox.widget_categories ul li.current-cat a:before,
.btBox.widget_product_categories ul li.current-cat a:before,
.btBox.widget_pages ul li.current-cat a:before,
.btCustomMenu ul li.current-cat a:before,
.btBox.widget_meta ul li.current-cat a:before,
.btBox.widget_nav_menu ul li.current-cat a:before,
.btBox.widget_rss ul li.current-cat a:before,
.btBox.widget_recent_entries ul li.current-cat a:before{
    background: {$accentColor};}
.btDarkSkin .btBox.widget_archive ul li a:hover,
.btLightSkin .btDarkSkin .btBox.widget_archive ul li a:hover,
.btDarkSkin .btBox.widget_categories ul li a:hover,
.btLightSkin .btDarkSkin .btBox.widget_categories ul li a:hover{border-bottom: 1px solid {$accentColor};}
.btBox.widget_rss li a.rsswidget{font-family: \"{$headingFont}\";}
.btBox.widget_rss li cite:before{
    color: {$accentColor};}
.btBox .btSearch input[type=\"text\"],
.btBox .btSearch input[type=\"search\"],
form.woocommerce-product-search input[type=\"text\"],
form.woocommerce-product-search input[type=\"search\"]{
    font-family: {$headingFont};}
.btLightSkin .btBox .btSearch input[type=\"text\"],
.btDarkSkin .btLightSkin .btBox .btSearch input[type=\"text\"],
.btLightSkin .btBox .btSearch input[type=\"search\"],
.btDarkSkin .btLightSkin .btBox .btSearch input[type=\"search\"],
.btLightSkin form.woocommerce-product-search input[type=\"text\"],
.btDarkSkin .btLightSkin form.woocommerce-product-search input[type=\"text\"],
.btLightSkin form.woocommerce-product-search input[type=\"search\"],
.btDarkSkin .btLightSkin form.woocommerce-product-search input[type=\"search\"]{
    color: {$alternateColor};}
.btLightSkin .btBox .btSearch input[type=\"text\"]:hover,
.btDarkSkin .btLightSkin .btBox .btSearch input[type=\"text\"]:hover,
.btLightSkin .btBox .btSearch input[type=\"text\"]:focus,
.btDarkSkin .btLightSkin .btBox .btSearch input[type=\"text\"]:focus,
.btLightSkin .btBox .btSearch input[type=\"search\"]:hover,
.btDarkSkin .btLightSkin .btBox .btSearch input[type=\"search\"]:hover,
.btLightSkin .btBox .btSearch input[type=\"search\"]:focus,
.btDarkSkin .btLightSkin .btBox .btSearch input[type=\"search\"]:focus,
.btLightSkin form.woocommerce-product-search input[type=\"text\"]:hover,
.btDarkSkin .btLightSkin form.woocommerce-product-search input[type=\"text\"]:hover,
.btLightSkin form.woocommerce-product-search input[type=\"text\"]:focus,
.btDarkSkin .btLightSkin form.woocommerce-product-search input[type=\"text\"]:focus,
.btLightSkin form.woocommerce-product-search input[type=\"search\"]:hover,
.btDarkSkin .btLightSkin form.woocommerce-product-search input[type=\"search\"]:hover,
.btLightSkin form.woocommerce-product-search input[type=\"search\"]:focus,
.btDarkSkin .btLightSkin form.woocommerce-product-search input[type=\"search\"]:focus{-webkit-box-shadow: 0 -1px 0 0 {$alternateColor} inset !important;
    box-shadow: 0 -1px 0 0 {$alternateColor} inset !important;}
.btLightSkin .btBox .btSearch button,
.btDarkSkin .btLightSkin .btBox .btSearch button,
.btLightSkin .btBox .btSearch input[type=submit],
.btDarkSkin .btLightSkin .btBox .btSearch input[type=submit],
.btLightSkin form.woocommerce-product-search button,
.btDarkSkin .btLightSkin form.woocommerce-product-search button,
.btLightSkin form.woocommerce-product-search input[type=submit],
.btDarkSkin .btLightSkin form.woocommerce-product-search input[type=submit]{
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.btLightSkin .btBox .btSearch button:hover,
.btDarkSkin .btLightSkin .btBox .btSearch button:hover,
.btLightSkin form.woocommerce-product-search button:hover,
.btDarkSkin .btLightSkin form.woocommerce-product-search button:hover{-webkit-box-shadow: 0 0 0 20px {$accentColor} inset;
    box-shadow: 0 0 0 20px {$accentColor} inset;}
.btDarkSkin .btBox .btSearch button:hover,
.btLightSkin .btDarkSkin .btBox .btSearch button:hover,
.btDarkSkin form.woocommerce-product-search button:hover,
.btLightSkin .btDarkSkin form.woocommerce-product-search button:hover{
    color: {$accentColor};}
form.wpcf7-form .wpcf7-submit,
form.wpcf7-form .btBookingNext{font-family: \"{$headingSuperTitleFont}\";
    background-color: {$accentColor};
    border: 2px solid {$accentColor};}
.btLightSkin form.wpcf7-form .wpcf7-submit:hover,
.btDarkSkin .btLightSkin form.wpcf7-form .wpcf7-submit:hover,
.btLightSkin form.wpcf7-form .btBookingNext:hover,
.btDarkSkin .btLightSkin form.wpcf7-form .btBookingNext:hover{
    border: 2px solid {$accentColor};
    color: {$accentColor};}
form.wpcf7-form input[type=\"text\"],
form.wpcf7-form input[type=\"password\"],
form.wpcf7-form input[type=\"email\"],
form.wpcf7-form input[type=\"date\"],
form.wpcf7-form textarea,
form.wpcf7-form .fancy-select .trigger{
    font-family: {$headingFont};}
.btLightSkin form.wpcf7-form input[type=\"text\"]:focus,
.btDarkSkin .btLightSkin form.wpcf7-form input[type=\"text\"]:focus,
.btLightSkin form.wpcf7-form input[type=\"password\"]:focus,
.btDarkSkin .btLightSkin form.wpcf7-form input[type=\"password\"]:focus,
.btLightSkin form.wpcf7-form input[type=\"email\"]:focus,
.btDarkSkin .btLightSkin form.wpcf7-form input[type=\"email\"]:focus,
.btLightSkin form.wpcf7-form input[type=\"date\"]:focus,
.btDarkSkin .btLightSkin form.wpcf7-form input[type=\"date\"]:focus,
.btLightSkin form.wpcf7-form textarea:focus,
.btDarkSkin .btLightSkin form.wpcf7-form textarea:focus,
.btLightSkin form.wpcf7-form .fancy-select .trigger.open,
.btDarkSkin .btLightSkin form.wpcf7-form .fancy-select .trigger.open{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.btLightSkin form.wpcf7-form span.wpcf7-not-valid-tip,
.btDarkSkin .btLightSkin form.wpcf7-form span.wpcf7-not-valid-tip,
.btLightSkin form.wpcf7-form div.wpcf7-validation-errors,
.btDarkSkin .btLightSkin form.wpcf7-form div.wpcf7-validation-errors{color: {$alternateColor};
    border-color: {$alternateColor};}
.btLightSkin form.wpcf7-form div.wpcf7-mail-sent-ok,
.btDarkSkin .btLightSkin form.wpcf7-form div.wpcf7-mail-sent-ok{color: {$accentColor};
    border-color: {$accentColor};}
.btLightSkin .fancy-select .trigger.open,
.btDarkSkin .btLightSkin .fancy-select .trigger.open{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.fancy-select ul.options > li:hover{color: {$accentColor} !important;}
.widget_shopping_cart .total{border-top: 2px solid {$accentColor};}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove:hover{background-color: {$accentColor};}
.widget_price_filter .ui-slider .ui-slider-handle{
    background: {$accentColor};
    border-color: {$accentColor};}
.widget_layered_nav ul li.chosen a:hover:before,
.widget_layered_nav ul li a:hover:before,
.widget_layered_nav_filters ul li.chosen a:hover:before,
.widget_layered_nav_filters ul li a:hover:before{background-color: {$accentColor};}
.btBox .tagcloud a,
.btTags ul a{
    background: {$accentColor};
    border: 2px solid {$accentColor};
    font-family: {$headingSuperTitleFont};}
.btBox .tagcloud a:hover,
.btTags ul a:hover{
    color: {$accentColor};}
.header .btSubTitle .btArticleCategories a:not(:first-child):before,
.header .btSuperTitle .btArticleCategories a:not(:first-child):before{
    background-color: {$accentColor};}
.btContentHolder blockquote{
    font-family: \"{$headingFont}\";}
.btContentHolder table tr th,
.btContentHolder table thead tr th{font-family: {$headingSuperTitleFont};
    background: {$accentColor};}
.btContentHolder table tbody tr:nth-child(even) th,
.btContentHolder table thead tr:nth-child(even) th,
.btContentHolder table tfoot tr:nth-child(even) th{background: {$accentColor};}
.btContentHolder table tbody tr:nth-child(odd) th,
.btContentHolder table thead tr:nth-child(odd) th,
.btContentHolder table tfoot tr:nth-child(odd) th{background: {$accentColorLight};}
.post-password-form input[type=\"password\"]{
    font-family: {$headingFont};}
.btLightSkin .post-password-form input[type=\"password\"]:focus,
.btDarkSkin .btLightSkin .post-password-form input[type=\"password\"]:focus{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;}
.post-password-form input[type=\"submit\"]{
    background: {$accentColor};
    border: 2px solid {$accentColor};
    font-family: \"{$headingSuperTitleFont}\";}
.post-password-form input[type=\"submit\"]:hover{
    color: {$accentColor};}
.btPagination{font-family: \"{$headingSuperTitleFont}\";}
.btPagination .paging a:after{
    -webkit-box-shadow: 0 0 0 20px {$accentColor} inset;
    box-shadow: 0 0 0 20px {$accentColor} inset;}
.btPagination .paging a:hover:after{color: {$accentColor};
    -webkit-box-shadow: 0 0 0 2px {$accentColor} inset;
    box-shadow: 0 0 0 2px {$accentColor} inset;}
.comment-respond .btnOutline button[type=\"submit\"]{font-family: \"{$headingFont}\";}
a#cancel-comment-reply-link:hover{color: {$accentColor};}
span.btHighlight{
    background-color: {$accentColor};}
a.btContinueReading{font-family: {$headingSuperTitleFont};
    background: {$accentColor};
    border: 2px solid {$accentColor};}
a.btContinueReading:hover{color: {$accentColor};}
.asgItem.title a{color: {$accentColor};}
.header .btSuperTitle{font-family: \"{$headingSuperTitleFont}\";}
.header .btSubTitle{font-family: \"{$headingSubTitleFont}\";}
.btDarkSkin .btDash.bottomDash.btBottomDashAccentColor .dash:after,
.btLightSkin .btDarkSkin .btDash.bottomDash.btBottomDashAccentColor .dash:after,
.btLightSkin .btDash.bottomDash.btBottomDashAccentColor .dash:after,
.btDarkSkin .btLightSkin .btDash.bottomDash.btBottomDashAccentColor .dash:after{border-bottom-color: {$accentColor};}
.btDarkSkin .btDash.bottomDash.btBottomDashAlternateColor .dash:after,
.btLightSkin .btDarkSkin .btDash.bottomDash.btBottomDashAlternateColor .dash:after,
.btLightSkin .btDash.bottomDash.btBottomDashAlternateColor .dash:after,
.btDarkSkin .btLightSkin .btDash.bottomDash.btBottomDashAlternateColor .dash:after{border-bottom-color: {$alternateColor};}
.header.small .dash:after,
.header.small .dash:before{
    border-bottom: 2px solid {$accentColor};}
.header.medium .dash:after,
.header.medium .dash:before{
    border-bottom: 2px solid {$accentColor};}
.btLightSkin .btText a,
.btDarkSkin .btLightSkin .btText a,
.btDarkSkin .btText a,
.btLightSkin .btDarkSkin .btText a{color: {$accentColor};}
.btIco .btIcoHolder:before{color: {$accentColor};}
.btIco.btIcoAccentColor .btIcoHolder:before,
.btIco.btIcoAccentColor:hover .btIcoHolder:before{color: {$accentColor};}
.btIco.btIcoAlternateColor .btIcoHolder:before,
.btIco.btIcoAlternateColor:hover .btIcoHolder:before{color: {$alternateColor};}
.btIco.btIcoWhiteType .btIcoHolder:before{
    color: {$accentColor};}
.btIco.btIcoFilledType.btIcoAccentColor .btIcoHolder:before,
.btIco.btIcoOutlineType.btIcoAccentColor:hover .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1em {$accentColor} inset;
    box-shadow: 0 0 0 1em {$accentColor} inset;}
.btIco.btIcoFilledType.btIcoAccentColor:hover .btIcoHolder:before,
.btIco.btIcoOutlineType.btIcoAccentColor .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset;
    box-shadow: 0 0 0 1px {$accentColor} inset;
    color: {$accentColor};}
.btIco.btIcoFilledType.btIcoAlternateColor .btIcoHolder:before,
.btIco.btIcoOutlineType.btIcoAlternateColor:hover .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1em {$alternateColor} inset;
    box-shadow: 0 0 0 1em {$alternateColor} inset;}
.btIco.btIcoFilledType.btIcoAlternateColor:hover .btIcoHolder:before,
.btIco.btIcoOutlineType.btIcoAlternateColor .btIcoHolder:before{-webkit-box-shadow: 0 0 0 1px {$alternateColor} inset;
    box-shadow: 0 0 0 1px {$alternateColor} inset;
    color: {$alternateColor};}
.btLightSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,
.btLightSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,
.btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
.btDarkSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,
.btDarkSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,
.btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before{color: {$accentColor};}
.btIcoAccentColor span{color: {$accentColor};}
.btIcoDefaultColor:hover span{color: {$accentColor};}
.btBtn{font-family: \"{$headingSuperTitleFont}\";}
.btnFilledStyle.btnAccentColor,
.btnOutlineStyle.btnAccentColor:hover{background-color: {$accentColor};
    border: 2px solid {$accentColor};}
.btnOutlineStyle.btnAccentColor,
.btnFilledStyle.btnAccentColor:hover{
    border: 2px solid {$accentColor};
    color: {$accentColor};}
.btnOutlineStyle.btnAccentColor span,
.btnFilledStyle.btnAccentColor:hover span,
.btnOutlineStyle.btnAccentColor span:before,
.btnFilledStyle.btnAccentColor:hover span:before,
.btnOutlineStyle.btnAccentColor a,
.btnFilledStyle.btnAccentColor:hover a,
.btnOutlineStyle.btnAccentColor .btIco a:before,
.btnFilledStyle.btnAccentColor:hover .btIco a:before,
.btnOutlineStyle.btnAccentColor button,
.btnFilledStyle.btnAccentColor:hover button{color: {$accentColor} !important;}
.btnBorderlessStyle.btnAccentColor span,
.btnBorderlessStyle.btnNormalColor:hover span,
.btnBorderlessStyle.btnAccentColor span:before,
.btnBorderlessStyle.btnNormalColor:hover span:before,
.btnBorderlessStyle.btnAccentColor a,
.btnBorderlessStyle.btnNormalColor:hover a,
.btnBorderlessStyle.btnAccentColor .btIco a:before,
.btnBorderlessStyle.btnNormalColor:hover .btIco a:before,
.btnBorderlessStyle.btnAccentColor button,
.btnBorderlessStyle.btnNormalColor:hover button{color: {$accentColor};}
.btnFilledStyle.btnAlternateColor,
.btnOutlineStyle.btnAlternateColor:hover{background-color: {$alternateColor};
    border: 2px solid {$alternateColor};}
.btnOutlineStyle.btnAlternateColor,
.btnFilledStyle.btnAlternateColor:hover{
    border: 2px solid {$alternateColor};
    color: {$alternateColor};}
.btnOutlineStyle.btnAlternateColor span,
.btnFilledStyle.btnAlternateColor:hover span,
.btnOutlineStyle.btnAlternateColor span:before,
.btnFilledStyle.btnAlternateColor:hover span:before,
.btnOutlineStyle.btnAlternateColor a,
.btnFilledStyle.btnAlternateColor:hover a,
.btnOutlineStyle.btnAlternateColor .btIco a:before,
.btnFilledStyle.btnAlternateColor:hover .btIco a:before,
.btnOutlineStyle.btnAlternateColor button,
.btnFilledStyle.btnAlternateColor:hover button{color: {$alternateColor} !important;}
.btnBorderlessStyle.btnAlternateColor span,
.btnBorderlessStyle.btnAlternateColor span:before,
.btnBorderlessStyle.btnAlternateColor a,
.btnBorderlessStyle.btnAlternateColor .btIco a:before,
.btnBorderlessStyle.btnAlternateColor button{color: {$alternateColor};}
.btCounterHolder{
    font-family: \"{$headingSuperTitleFont}\";}
.btCounterHolder .btCountdownHolder .days_text,
.btCounterHolder .btCountdownHolder .hours_text,
.btCounterHolder .btCountdownHolder .minutes_text,
.btCounterHolder .btCountdownHolder .seconds_text{
    color: {$accentColor};}
.btProgressContent{
    font-family: \"{$headingSuperTitleFont}\";}
.btProgressContent .btProgressAnim{background-color: {$accentColor};}
.btProgressBarLineStyle .btProgressContent .btProgressAnim{
    color: {$accentColor};
    border-bottom: 4px solid {$accentColor};}
.btProgressContent .btProgressAnim span:before{
    border-color: {$accentColor} transparent transparent transparent;}
.bpgPhoto .captionPane{
    background-color: {$accentColor};}
.btPriceTable .btPriceTableHeader{background: {$accentColor};}
.btPriceTableSticker > div{
    font-family: {$headingSuperTitleFont};
    background: {$accentColor};}
.btPriceTableSticker > div:before{
    border-left: 3px solid {$accentColorDark};
    border-top: 3px solid {$accentColorDark};}
.btPriceTableSticker > div:after{
    border-right: 3px solid {$accentColorDark};
    border-top: 3px solid {$accentColorDark};}
.btGridContent .header .btSuperTitle a:hover{color: {$accentColor};}
.btCatFilter{
    font-family: {$headingSuperTitleFont};}
.btCatFilter .btCatFilterItem:after{
    background: {$accentColor};}
.btCatFilter .btCatFilterItem:hover{color: {$accentColor};}
.btCatFilter .btCatFilterItem.active{color: {$accentColor};}
.btMediaBox.btQuote p,
.btMediaBox.btLink p{
    color: {$accentColor};}
.btMediaBox.btQuote p a,
.btMediaBox.btLink p a{color: {$accentColor};}
.btMediaBox.btQuote cite,
.btMediaBox.btLink cite{
    border-top: 2px solid {$accentColor};
    font-family: {$headingSuperTitleFont};}
h4.nbs a .nbsImage .nbsImgHolder{
    border: 2px solid {$accentColor};}
h4.nbs a .nbsItem .nbsDir{
    color: {$accentColor};
    font-family: \"{$headingSuperTitleFont}\";}
h4.nbs a:before,
h4.nbs a:after{
    background-color: {$accentColor};
    border: {$accentColor} 2px solid;}
.btCarouselSmallNav h4.nbs a:before,
.btCarouselSmallNav h4.nbs a:after{
    background-color: {$accentColor};}
h4.nbs.nsPrev a:hover:before,
h4.nbs.nsNext a:hover:after{
    color: {$accentColor};}
.slided .slick-dots li.slick-active button,
.slided .slick-dots li.slick-active button:hover{
    -webkit-box-shadow: 0 0 0 10px {$accentColor} inset;
    box-shadow: 0 0 0 10px {$accentColor} inset;}
.btGetInfo{
    border: 1px solid {$accentColor};}
.btInfoBarMeta p{
    font-family: {$headingSuperTitleFont};}
.btInfoBarMeta p strong{color: {$accentColor};}
.recentTweets small:before{
    color: {$accentColor};}
.tabsHeader li{
    font-family: \"{$headingSuperTitleFont}\";}
.btLightSkin .tabsHeader li.on,
.btDarkSkin .btLightSkin .tabsHeader li.on,
.btDarkSkin .tabsHeader li.on,
.btLightSkin .btDarkSkin .tabsHeader li.on,
.btLightSkin .tabsHeader li.on:hover,
.btDarkSkin .btLightSkin .tabsHeader li.on:hover,
.btDarkSkin .tabsHeader li.on:hover,
.btLightSkin .btDarkSkin .tabsHeader li.on:hover{
    background: {$accentColor};}
.btLightSkin .tabsHeader li:hover,
.btDarkSkin .btLightSkin .tabsHeader li:hover{background: {$alternateColor};}
.btDarkSkin .tabsHeader li:hover,
.btLightSkin .btDarkSkin .tabsHeader li:hover{background: {$alternateColor};}
.tabsVertical .tabAccordionTitle{
    font-family: \"{$headingSuperTitleFont}\";}
.tabsVertical .tabAccordionTitle:hover{background: {$alternateColor};}
.tabsVertical .tabAccordionTitle.on{background: {$accentColor};}
.btLatestPostsContainer .btLatestPostContentFooter{font-family: {$headingSuperTitleFont};}
.btLatestPostsContainer .btLatestPostContentFooter .btArticleComments:before,
.btLatestPostsContainer .btLatestPostContentFooter .btArticleCategories:before,
.btLatestPostsContainer .btLatestPostContentFooter .btArticleAuthor:before,
.btLatestPostsContainer .btLatestPostContentFooter .btArticleDate:before{
    color: {$accentColor};}
.demos span{
    background-color: {$accentColor};}
.ui-datepicker.ui-widget,
.btDatePicker#ui-datepicker-div{font-family: {$bodyFont};}
.ui-datepicker.ui-widget .ui-datepicker-header{background: {$accentColor};}
.ui-datepicker.ui-widget tbody tr td a.ui-state-default.ui-state-active{-webkit-box-shadow: 0 0 0 20px {$alternateColor} inset;
    box-shadow: 0 0 0 20px {$alternateColor} inset;}
.ui-datepicker.ui-widget tbody tr td a.ui-state-default.ui-state-highlight{-webkit-box-shadow: 0 0 0 20px {$accentColor} inset;
    box-shadow: 0 0 0 20px {$accentColor} inset;}
.ui-datepicker.ui-widget tbody tr td a.ui-state-default.ui-state-hover{-webkit-box-shadow: 0 0 0 2px {$accentColor} inset;
    box-shadow: 0 0 0 2px {$accentColor} inset;
    color: {$accentColor};}
.btAnimNav li.btAnimNavDot{
    color: {$accentColor};
    font-family: {$headingFont};}
.btAnimNav li.btAnimNavNext,
.btAnimNav li.btAnimNavPrev{
    background-color: {$accentColor};}
.btAnimNav li.btAnimNavNext:hover,
.btAnimNav li.btAnimNavPrev:hover{
    color: {$accentColor};}
.headline b.animate.animated{color: {$alternateColor};}
p.demo_store{
    background-color: {$accentColor};}
.woocommerce .woocommerce-error,
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-message,
.woocommerce-page .woocommerce-error,
.woocommerce-page .woocommerce-info,
.woocommerce-page .woocommerce-message{
    border-top: 2px solid {$accentColor};}
.woocommerce .woocommerce-info a: not(.button),
.woocommerce .woocommerce-message a: not(.button),
.woocommerce-page .woocommerce-info a: not(.button),
.woocommerce-page .woocommerce-message a: not(.button){color: {$accentColor};}
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-message,
.woocommerce-page .woocommerce-info,
.woocommerce-page .woocommerce-message{border-top-color: {$accentColor};}
.woocommerce .woocommerce-message:before,
.woocommerce .woocommerce-info:before,
.woocommerce-page .woocommerce-message:before,
.woocommerce-page .woocommerce-info:before{
    color: {$accentColor};}
.woocommerce .btWooCommerce a.button,
.woocommerce .btSidebar .woocommerce a.button,
.woocommerce .woocommerce a.button,
.woocommerce .btComments a.button,
.woocommerce .btWooCommerce input[type=\"submit\"],
.woocommerce .btSidebar .woocommerce input[type=\"submit\"],
.woocommerce .woocommerce input[type=\"submit\"],
.woocommerce .btComments input[type=\"submit\"],
.woocommerce .btWooCommerce button[type=\"submit\"],
.woocommerce .btSidebar .woocommerce button[type=\"submit\"],
.woocommerce .woocommerce button[type=\"submit\"],
.woocommerce .btComments button[type=\"submit\"],
.woocommerce .btWooCommerce input.button,
.woocommerce .btSidebar .woocommerce input.button,
.woocommerce .woocommerce input.button,
.woocommerce .btComments input.button,
.woocommerce .btWooCommerce input.alt:hover,
.woocommerce .btSidebar .woocommerce input.alt:hover,
.woocommerce .woocommerce input.alt:hover,
.woocommerce .btComments input.alt:hover,
.woocommerce .btWooCommerce a.button.alt:hover,
.woocommerce .btSidebar .woocommerce a.button.alt:hover,
.woocommerce .woocommerce a.button.alt:hover,
.woocommerce .btComments a.button.alt:hover,
.woocommerce .btWooCommerce .button.alt:hover,
.woocommerce .btSidebar .woocommerce .button.alt:hover,
.woocommerce .woocommerce .button.alt:hover,
.woocommerce .btComments .button.alt:hover,
.woocommerce .btWooCommerce button.alt:hover,
.woocommerce .btSidebar .woocommerce button.alt:hover,
.woocommerce .woocommerce button.alt:hover,
.woocommerce .btComments button.alt:hover,
.woocommerce-page .btWooCommerce a.button,
.woocommerce-page .btSidebar .woocommerce a.button,
.woocommerce-page .woocommerce a.button,
.woocommerce-page .btComments a.button,
.woocommerce-page .btWooCommerce input[type=\"submit\"],
.woocommerce-page .btSidebar .woocommerce input[type=\"submit\"],
.woocommerce-page .woocommerce input[type=\"submit\"],
.woocommerce-page .btComments input[type=\"submit\"],
.woocommerce-page .btWooCommerce button[type=\"submit\"],
.woocommerce-page .btSidebar .woocommerce button[type=\"submit\"],
.woocommerce-page .woocommerce button[type=\"submit\"],
.woocommerce-page .btComments button[type=\"submit\"],
.woocommerce-page .btWooCommerce input.button,
.woocommerce-page .btSidebar .woocommerce input.button,
.woocommerce-page .woocommerce input.button,
.woocommerce-page .btComments input.button,
.woocommerce-page .btWooCommerce input.alt:hover,
.woocommerce-page .btSidebar .woocommerce input.alt:hover,
.woocommerce-page .woocommerce input.alt:hover,
.woocommerce-page .btComments input.alt:hover,
.woocommerce-page .btWooCommerce a.button.alt:hover,
.woocommerce-page .btSidebar .woocommerce a.button.alt:hover,
.woocommerce-page .woocommerce a.button.alt:hover,
.woocommerce-page .btComments a.button.alt:hover,
.woocommerce-page .btWooCommerce .button.alt:hover,
.woocommerce-page .btSidebar .woocommerce .button.alt:hover,
.woocommerce-page .woocommerce .button.alt:hover,
.woocommerce-page .btComments .button.alt:hover,
.woocommerce-page .btWooCommerce button.alt:hover,
.woocommerce-page .btSidebar .woocommerce button.alt:hover,
.woocommerce-page .woocommerce button.alt:hover,
.woocommerce-page .btComments button.alt:hover{
    border: 2px solid {$accentColor};
    font-family: {$headingSuperTitleFont};
    background-color: {$accentColor};}
.woocommerce .btWooCommerce a.button:hover,
.woocommerce .btSidebar .woocommerce a.button:hover,
.woocommerce .woocommerce a.button:hover,
.woocommerce .btComments a.button:hover,
.woocommerce .btWooCommerce input[type=\"submit\"]:hover,
.woocommerce .btSidebar .woocommerce input[type=\"submit\"]:hover,
.woocommerce .woocommerce input[type=\"submit\"]:hover,
.woocommerce .btComments input[type=\"submit\"]:hover,
.woocommerce .btWooCommerce .button:hover,
.woocommerce .btSidebar .woocommerce .button:hover,
.woocommerce .woocommerce .button:hover,
.woocommerce .btComments .button:hover,
.woocommerce .btWooCommerce button:hover,
.woocommerce .btSidebar .woocommerce button:hover,
.woocommerce .woocommerce button:hover,
.woocommerce .btComments button:hover,
.woocommerce .btWooCommerce input.alt,
.woocommerce .btSidebar .woocommerce input.alt,
.woocommerce .woocommerce input.alt,
.woocommerce .btComments input.alt,
.woocommerce .btWooCommerce a.button.alt,
.woocommerce .btSidebar .woocommerce a.button.alt,
.woocommerce .woocommerce a.button.alt,
.woocommerce .btComments a.button.alt,
.woocommerce .btWooCommerce .button.alt,
.woocommerce .btSidebar .woocommerce .button.alt,
.woocommerce .woocommerce .button.alt,
.woocommerce .btComments .button.alt,
.woocommerce .btWooCommerce button.alt,
.woocommerce .btSidebar .woocommerce button.alt,
.woocommerce .woocommerce button.alt,
.woocommerce .btComments button.alt,
.woocommerce-page .btWooCommerce a.button:hover,
.woocommerce-page .btSidebar .woocommerce a.button:hover,
.woocommerce-page .woocommerce a.button:hover,
.woocommerce-page .btComments a.button:hover,
.woocommerce-page .btWooCommerce input[type=\"submit\"]:hover,
.woocommerce-page .btSidebar .woocommerce input[type=\"submit\"]:hover,
.woocommerce-page .woocommerce input[type=\"submit\"]:hover,
.woocommerce-page .btComments input[type=\"submit\"]:hover,
.woocommerce-page .btWooCommerce .button:hover,
.woocommerce-page .btSidebar .woocommerce .button:hover,
.woocommerce-page .woocommerce .button:hover,
.woocommerce-page .btComments .button:hover,
.woocommerce-page .btWooCommerce button:hover,
.woocommerce-page .btSidebar .woocommerce button:hover,
.woocommerce-page .woocommerce button:hover,
.woocommerce-page .btComments button:hover,
.woocommerce-page .btWooCommerce input.alt,
.woocommerce-page .btSidebar .woocommerce input.alt,
.woocommerce-page .woocommerce input.alt,
.woocommerce-page .btComments input.alt,
.woocommerce-page .btWooCommerce a.button.alt,
.woocommerce-page .btSidebar .woocommerce a.button.alt,
.woocommerce-page .woocommerce a.button.alt,
.woocommerce-page .btComments a.button.alt,
.woocommerce-page .btWooCommerce .button.alt,
.woocommerce-page .btSidebar .woocommerce .button.alt,
.woocommerce-page .woocommerce .button.alt,
.woocommerce-page .btComments .button.alt,
.woocommerce-page .btWooCommerce button.alt,
.woocommerce-page .btSidebar .woocommerce button.alt,
.woocommerce-page .woocommerce button.alt,
.woocommerce-page .btComments button.alt{
    color: {$accentColor};}
.woocommerce p.lost_password:before,
.woocommerce-page p.lost_password:before{
    color: {$accentColor};}
.woocommerce form.login p.lost_password a:hover,
.woocommerce-page form.login p.lost_password a:hover{color: {$accentColor};}
.woocommerce div.product .stock,
.woocommerce-page div.product .stock{color: {$accentColor};}
.woocommerce div.product .woocommerce-product-gallery.images .woocommerce-product-gallery__trigger:after,
.woocommerce-page div.product .woocommerce-product-gallery.images .woocommerce-product-gallery__trigger:after{
    -webkit-box-shadow: 0 0 0 2em {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    box-shadow: 0 0 0 2em {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;}
.woocommerce div.product .woocommerce-product-gallery.images .woocommerce-product-gallery__trigger:hover:after,
.woocommerce-page div.product .woocommerce-product-gallery.images .woocommerce-product-gallery__trigger:hover:after{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    box-shadow: 0 0 0 1px {$accentColor} inset,0 0 0 2em rgba(255,255,255,.5) inset;
    color: {$accentColor};}
.woocommerce div.product a.reset_variations:hover,
.woocommerce-page div.product a.reset_variations:hover{color: {$accentColor};}
.woocommerce nav.woocommerce-pagination ul li a:focus,
.woocommerce nav.woocommerce-pagination ul li a:hover,
.woocommerce nav.woocommerce-pagination ul li a.next,
.woocommerce nav.woocommerce-pagination ul li a.prev,
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce-page nav.woocommerce-pagination ul li a:focus,
.woocommerce-page nav.woocommerce-pagination ul li a:hover,
.woocommerce-page nav.woocommerce-pagination ul li a.next,
.woocommerce-page nav.woocommerce-pagination ul li a.prev,
.woocommerce-page nav.woocommerce-pagination ul li span.current{background: {$accentColor};}
.woocommerce .woocommerce-result-count,
.woocommerce-page .woocommerce-result-count{
    font-family: {$headingSuperTitleFont};}
.woocommerce .star-rating span:before,
.woocommerce-page .star-rating span:before{
    color: {$accentColor};}
.woocommerce p.stars a[class^=\"star-\"].active:after,
.woocommerce p.stars a[class^=\"star-\"]:hover:after,
.woocommerce-page p.stars a[class^=\"star-\"].active:after,
.woocommerce-page p.stars a[class^=\"star-\"]:hover:after{color: {$accentColor};}
.woocommerce-cart table.cart td.product-remove a.remove{
    color: {$accentColor};
    border: 1px solid {$accentColor};}
.woocommerce-cart table.cart td.product-remove a.remove:hover{background-color: {$accentColor};}
.woocommerce-cart .cart_totals .discount td{color: {$accentColor};}
.woocommerce-account header.title .edit{
    color: {$accentColor};}
.woocommerce-account header.title .edit:before{
    color: {$accentColor};}
.btLightSkin.woocommerce-page .product .headline a:hover,
.btDarkSkin .btLightSkin.woocommerce-page .product .headline a:hover,
.btDarkSkin.woocommerce-page .product .headline a:hover,
.btLightSkin .btDarkSkin.woocommerce-page .product .headline a:hover{color: {$accentColor};}
.btQuoteBooking .btContactNext{
    background: {$accentColor};
    border: {$accentColor} 2px solid;
    font-family: {$headingSuperTitleFont};}
.btQuoteBooking .btQuoteBookingForm.btActive .btContactNext{
    font-family: {$headingSuperTitleFont};}
.btQuoteBooking .btContactNext:hover,
.btQuoteBooking .btContactNext:active{color: {$accentColor};}
.btLightSkin .btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner,
.btDarkSkin .btLightSkin .btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner{background: {$accentColor};}
.btDarkSkin .btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner,
.btLightSkin .btDarkSkin .btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner{background: {$accentColor};}
.btQuoteBooking .btQuoteItem textarea{
    font-family: {$headingFont} !important;}
.btQuoteBooking .btQuoteItem textarea:focus{
    border: 1px solid {$accentColor};}
.btQuoteBooking .dd.ddcommon.borderRadiusTp .ddTitleText,
.btQuoteBooking .dd.ddcommon.borderRadiusBtm .ddTitleText{
    border-color: {$accentColor};}
.btQuoteBooking .ui-slider .ui-slider-handle{
    background: {$accentColor};
    font-family: {$headingSuperTitleFont};}
.btQuoteBooking .btQuoteBookingForm .btQuoteTotal{
    background: {$accentColor};}
.btQuoteBooking .btQuoteTotalText{
    font-family: {$headingSuperTitleFont};}
.btLightSkin .btQuoteBooking .btContactFieldMandatory input:focus,
.btDarkSkin .btLightSkin .btQuoteBooking .btContactFieldMandatory input:focus{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset !important;
    box-shadow: 0 0 0 1px {$accentColor} inset !important;}
.btLightSkin .btQuoteBooking .btContactFieldMandatory textarea:focus,
.btDarkSkin .btLightSkin .btQuoteBooking .btContactFieldMandatory textarea:focus{border-color: {$accentColor} !important;}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea{border: 1px solid {$accentColor} !important;
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset !important;
    box-shadow: 0 0 0 1px {$accentColor} inset !important;}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText{border: 1px solid {$accentColor} !important;
    -webkit-box-shadow: 0 0 0 1px {$accentColor} inset !important;
    box-shadow: 0 0 0 1px {$accentColor} inset !important;}
.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusTp .ddTitleText{-webkit-box-shadow: 0 0 0 1px {$accentColor} inset !important;
    box-shadow: 0 0 0 1px {$accentColor} inset !important;}
.btQuoteBooking .btSubmitMessage{color: {$accentColor};}
.btDatePicker .ui-datepicker-header{
    background-color: {$accentColor};}
.btLightSkin .btQuoteBooking .dd.ddcommon.borderRadiusTp .ddTitleText,
.btDarkSkin .btLightSkin .btQuoteBooking .dd.ddcommon.borderRadiusTp .ddTitleText,
.btLightSkin .btQuoteBooking .dd.ddcommon.borderRadiusBtm .ddTitleText,
.btDarkSkin .btLightSkin .btQuoteBooking .dd.ddcommon.borderRadiusBtm .ddTitleText{border: 1px solid {$accentColor};}
.btQuoteBooking .ddTitleText .ddlabel{
    font-family: {$headingFont} !important;}
.btQuoteBooking .btContactSubmit{
    background-color: {$accentColor};
    border: 2px solid {$accentColor};
    font-family: {$headingSuperTitleFont};}
.btQuoteBooking .btContactSubmit:hover{
    color: {$accentColor};}
.btPayPalButton:hover{-webkit-box-shadow: 0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);
    box-shadow: 0 0 0 {$accentColor} inset,0 1px 5px rgba(0,0,0,.2);}
@media (max-width: 1400px){.header.large .dash:after,
.header.large .dash:before{
    border-bottom: 2px solid {$accentColor};}
.header.medium .dash:after,
.header.medium .dash:before{
    border-bottom: 2px solid {$accentColor};}
}@media (max-width: 767px){.btArticleListItem .btArticleFooter .btShareArticle:before{
    background-color: {$accentColor};}
}.wp-block-button__link:hover{color: {$accentColor} !important;}
", array() );