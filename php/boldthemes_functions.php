<?php


/**
 * Header headline output
 */
if ( ! function_exists( 'boldthemes_header_headline' ) ) {
	function boldthemes_header_headline() {
		$hide_headline = boldthemes_get_option( 'hide_headline' );
		if ( ( ! $hide_headline && ! is_404() && ! is_single() ) || is_search() ) {
			$extra_class = '';
			$title = wp_title( '', false );
			if ( HotelCaliforniaTheme::$boldthemes_page_for_header_id != '' ) {
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id( HotelCaliforniaTheme::$boldthemes_page_for_header_id ) );
			} else {
				if ( is_singular() ) {
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id() );
				} else {
					$feat_image = false;
				}
			}
			if ( $title != '' ) {
				$extra_class .= boldthemes_get_option( 'below_menu' ) ? ' topExtraSpaced' : ' topSemiSpaced';
				$extra_class .= $feat_image ? ' wBackground cover btDarkSkin' : '';
				echo '<section class="boldSection bottomSemiSpaced btPageHeadline gutter ' . $extra_class . '" style="background-image:url(' . $feat_image . ')"><div class="port btTextLeft">';
				echo boldthemes_get_heading_html( boldthemes_breadcrumbs(), $title,  '', 'large', 'top', '', '' );
				echo '</div></section>';
			}
			
		}
 	}
}


/**
 * Post media HTML
 *
 * @param string
 * @param array
 * @return string
 */
if ( ! function_exists( 'boldthemes_get_media_html' ) ) {
	function boldthemes_get_media_html( $type, $data ) {
		
		$html = '';
		
		if ( $type == 'image' ) {
		
			$data_attr = '';
			if ( isset( $data[2] ) ) {
				$data_attr = 'data-hw="' . esc_attr( $data[2] ) . '"';
			}
			$html = '<div class="btMediaBox" ' . $data_attr . '><div class="bpbItem">';
			$html .= '<a href="' . esc_url_raw( $data[0] ) . '"><img src="' . esc_url_raw( $data[1] ) . '" alt="' . esc_attr( basename( $data[1] ) ) . '"></a>';
			$html .= '</div></div>';
			
		} else if ( $type == 'image_single_post' ) {
		
			$data_attr = '';
			if ( isset( $data[2] ) ) {
				$data_attr = 'data-hw="' . esc_attr( $data[2] ) . '"';
			}
			$html = '<div class="btMediaBox" ' . $data_attr . '><div class="bpbItem">';
			$html .= '<img src="' . esc_url_raw( $data[1] ) . '" alt="' . esc_attr( basename( $data[1] ) ) . '">';
			$html .= '</div></div>';			
			
		} else if ( $type == 'gallery' ) {
			
			$data_attr = '';
			if ( isset( $data[1] ) ) {
				$data_attr = ' ' . 'data-hw="' . esc_attr( $data[1] ) . '"';
			}
			if ( isset( $data[2] ) ) {
				$html = '<div class="btMediaBox btCarouselSmallNav"' . sanitize_text_field( $data_attr ) . '>' . do_shortcode( '[gallery ids="' . join( ',', $data[0] ) . '" size="' . esc_attr( $data[2] ) . '"]' ) . '</div>';
			} else {
				$html = '<div class="btMediaBox btCarouselSmallNav"' . sanitize_text_field( $data_attr ) . '>' . do_shortcode( '[gallery ids="' . join( ',', $data[0] ) . '"]' ) . '</div>';
			}
			
		} else if ( $type == 'grid_gallery' ) {
			
			$html = '<div class="btMediaBox">' . do_shortcode( '[bt' . '_grid_gallery ids="' . join( ',', $data[0] ) . '" columns="' . esc_attr( $data[1] ) . '" has_thumb="' . esc_attr( $data[2] ) . '" format="' . esc_attr( $data[3] ) . '" lightbox="' . esc_attr( $data[4] ) . '" grid_gap="' . esc_attr( $data[5] ) . '"]' ) . '</div>';
			
		} else if ( $type == 'video' ) {
		
			$hw = 9 / 16;
			
			$html = '<div class="btMediaBox video" data-hw="' . esc_attr( $hw ) . '"><img class="aspectVideo" src="' . esc_url_raw( get_template_directory_uri() . '/gfx/video-16.9.png' ) . '" alt="' . esc_url_raw( get_template_directory_uri() . '/gfx/video-16.9.png' ) . '" role="presentation" aria-hidden="true">';

			if ( strpos( $data[0], 'vimeo.com/' ) > 0 ) {
				$video_id = substr( $data[0], strpos( $data[0], 'vimeo.com/' ) + 10 );
				$html .= '<ifra' . 'me src="' . esc_url_raw( 'http://player.vimeo.com/video/' . $video_id ) . '" allowfullscreen></ifra' . 'me>';
			} else {
				$yt_id_pattern = '~(?:http|https|)(?::\/\/|)(?:www.|)(?:youtu\.be\/|youtube\.com(?:\/embed\/|\/v\/|\/watch\?v=|\/ytscreeningroom\?v=|\/feeds\/api\/videos\/|\/user\S*[^\w\-\s]|\S*[^\w\-\s]))([\w\-]{11})[a-z0-9;:@#?&%=+\/\$_.-]*~i';
				$youtube_id = ( preg_replace( $yt_id_pattern, '$1', $data[0] ) );
				if ( strlen( $youtube_id ) == 11 ) {
					$html .= '<ifra' . 'me width="560" height="315" src="' . esc_url_raw( 'http://www.youtube.com/embed/' . $youtube_id ) . '" allowfullscreen></ifra' . 'me>';
				} else {
					$html = '<div class="btMediaBox video" data-hw="' . esc_attr( $hw ) . '">';				
					$html .= do_shortcode( $data[0] );
				}
			}
			
			$html .= '</div>';
			
			if ( $data[0] == '' ) {
				$html = '';
			}
			
		} else if ( $type == 'audio' ) {
		
			if ( strpos( $data[0], '</ifra' . 'me>' ) > 0 ) {
				$html = '<div class="btMediaBox audio">' . wp_kses( $data[0], array( 'iframe' => array( 'height' => array(), 'src' =>array() ) ) ) . '</div>';
			} else {
				$html = '<div class="btMediaBox audio">' . do_shortcode( $data[0] ) . '</div>';
			}
			
			if ( $data[0] == '' ) {
				$html = '';
			}
		
		} else if ( $type == 'link' ) {
		
			$html = '<div class="btMediaBox btLink"><p><a href="' . esc_url_raw( $data[0] ) . '">' . $data[1] . '</a></p><cite><a href="' . esc_url_raw( $data[0] ) . '">' . $data[0] . '</a></cite></div>';
			
			if ( $data[1] == '' || $data[0] == '' ) {
				$html = '';
			}
			
		} else if ( $type == 'quote' ) {
		
			$html = '<div class="btMediaBox btQuote"><p>' . $data[0] . '</p><cite>' . $data[1] . '</cite></div>';
			
			if ( $data[0] == '' || $data[1] == '' ) {
				$html = '';
			}
		
		}
		
		return $html;
	}
}

/**
 * Returns share icons HTML
 *
 * @return string
 */
if ( ! function_exists( 'boldthemes_get_share_html' ) ) {
	function boldthemes_get_share_html( $permalink, $type = 'blog', $size = 'btIcoExtraSmallSize', $style = 'btIcoOutlineType btIcoAccentColor' ) {
		$share_facebook = boldthemes_get_option( $type . '_share_facebook' );
		$share_twitter = boldthemes_get_option( $type . '_share_twitter' );
		$share_google_plus = boldthemes_get_option( $type . '_share_google_plus' );
		$share_linkedin = boldthemes_get_option( $type . '_share_linkedin' );
		$share_vk = boldthemes_get_option( $type . '_share_vk' );

		require_once( get_template_directory() . '/php/share.php' );

		$share_html = '';
		if ( $share_facebook || $share_twitter || $share_google_plus || $share_linkedin || $share_vk ) {
			
			if ( $share_facebook ) {
				$share_html .= boldthemes_get_icon_html( 'fa_f09a', boldthemes_get_share_link( 'facebook', $permalink ), '', $style . ' '  . $size );
			}
			if ( $share_twitter ) {
				$share_html .= boldthemes_get_icon_html( 'fa_f099', boldthemes_get_share_link( 'twitter', $permalink ), '', $style . ' '  . $size  );
			}
			if ( $share_linkedin ) {
				$share_html .= boldthemes_get_icon_html( 'fa_f0e1', boldthemes_get_share_link( 'linkedin', $permalink ), '', $style . ' '  . $size  );
			}
			if ( $share_google_plus ) {
				$share_html .= boldthemes_get_icon_html( 'fa_f0d5', boldthemes_get_share_link( 'google_plus', $permalink ), '', $style . ' '  . $size  );
			}
			if ( $share_vk ) {
				$share_html .= boldthemes_get_icon_html( 'fa_f189', boldthemes_get_share_link( 'vk', $permalink ), '', $style . ' '  . $size  );
			}
		}
		return $share_html;
	}
}

/**
 * Returns heading HTML
 *
 * @param string $superheadline
 * @param string $headline
 * @param string $subheadline
 * @param string $headline_size // small/medium/large/extralarge
 * @param string $dash // no/top/bottom
 * @param string $el_class
 * @param string $el_style
 * @return string
 */
if ( ! function_exists( 'boldthemes_get_heading_html' ) ) {
	function boldthemes_get_heading_html( $superheadline, $headline, $subheadline, $headline_size, $dash, $el_class, $el_style ) {

		if ( $superheadline != '' ) {
			$superheadline = '<div class="btSuperTitle"><span>' . $superheadline . '</span></div>';
		}

		if ( $subheadline != '' ) {
			$subheadline = '<div class="btSubTitle">' . $subheadline . '</div>';
		}
		
		$h_tag = 'h1';
		$class = '';

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = 'style="' . esc_attr( $el_style ) . '"';
		}

		if ( $headline_size != 'no' ) {
			$class .= $headline_size;
		}
		if ( $headline_size == 'extralarge' || $headline_size == 'huge' ) {
			$h_tag = 'h1';
		} else if ( $headline_size == 'large' ) {
			$h_tag = 'h2';
		} else if ( $headline_size == 'medium' ) {
			$h_tag = 'h3';
		} else {
			$h_tag = 'h4';
		}

		if ( $dash == 'yes' ) {
			$dash = 'top';
		}
		
		if( $dash != 'no' && $dash != '' ) {
			$dash = str_replace(' ', 'Dash ', $dash);
			$class .= ' btDash ' . $dash . 'Dash';
		}

		if ( $el_class != '' ) {
			$class .= ' ' . $el_class;
		}
		
		$output = '<header class="header btClear ' . $class . '" ' . $style_attr . '>';
		
		
        if ( $headline != '' || $superheadline != '' ) {
			$output .= '<div class="dash">';
			$output .= $superheadline;
			if ( $headline != '' ) {
				$pattern = "/<(b|u|i|em)([> ])/";
				$replace = '<$1 class="animate">';
				$headline = preg_replace($pattern, $replace, $headline);
				$output .= '<' . $h_tag . '><span class="headline">' . $headline . '</span></' . $h_tag . '>';
			}
			$output .= '</div>'; 	
		}
		
        $output .= $subheadline;
        $output .= '</header>';	

		return $output;
		
	}
}

/**
 * Returns icon HTML
 *
 * @param string $icon
 * @param string $url
 * @param string $text
 * @param string $el_class 
 * @return string
 */
 if ( ! function_exists( 'boldthemes_get_icon_html' ) ) {
	function boldthemes_get_icon_html( $icon, $url, $text, $el_class, $target = '', $el_style = '' ) {
		
		$icon_set = substr( $icon, 0, 2 );
		$icon = substr( $icon, 3 );
		
		if( substr( $url, 0, 3 ) == 'www' ) $url = 'http://' . $url;

		$link = '';
		
		if ( $url != '' && $url != '#' && substr( $url, 0, 4 ) != 'http' && substr( $url, 0, 5 ) != 'https' && substr( $url, 0, 6 ) != 'mailto' ) {
			$link = boldthemes_get_permalink_by_slug( $url );
		} else {
			$link = $url;
		}
		

		if ( $text != '' ) $text = '<span>' . $text . '</span>';

		if ( $link == '' ) {
			$ico_tag = 'span ';
			$ico_tag_end = 'span';	
		} else {
			$target_attr = 'target="_self"';
			if ( $target != '' ) $target_attr = ' target="' . ( $target ) . '"';
			$ico_tag = 'a href="' . esc_url_raw( $link ) . '" ' . $target_attr ;
			//$ico_tag = 'a href="' . esc_url_raw( $link ) . '" ' ;
			$ico_tag_end = 'a';
		}

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . ' style="' . esc_attr( $el_style ) . '"';
		}

		return '<span class="btIco ' . esc_attr( $el_class ) . '"' . $style_attr . '><' . $ico_tag . ' data-ico-' . esc_attr( $icon_set ) . '="&#x' . esc_attr( $icon ) . ';" class="btIcoHolder">' . $text . '</' . $ico_tag_end . '></span>';
	}
}


/**
 * Returns button HTML
 *
 * @param string $icon
 * @param string $url
 * @param string $text
 * @param string $el_class 
 * @param string $el_style 
 * @param string $target 
 * @return string
 */
 if ( ! function_exists( 'boldthemes_get_button_html' ) ) {
	function boldthemes_get_button_html( $icon, $url, $text, $el_class, $el_style = '', $target = '' ) {
		
		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = 'style="' . esc_attr( $el_style ) . '"';
		}

		if ( $url == '' ) {
			$url = '#';
		}

		if ( $text != '' ) {
			$text = '<span class="btnInnerText">' . $text . '</span>';
		}

		if ( is_array( $el_class ) ) $el_class = implode( ' ', $el_class );

		if ( $icon == '' || $icon == 'no_icon' ) {
			$el_class .= " btnNoIcon";
		}

		$link = "";
	
		if ( $url != '' && $url != '#' && substr( $url, 0, 4 ) != 'http' && substr( $url, 0, 5 ) != 'https'  && substr( $url, 0, 6 ) != 'mailto' ) {
			$link = boldthemes_get_permalink_by_slug( $url );
		} else {
			$link = $url;
		}

		$output = '<a href="' . esc_attr( $link ) . '" class="btBtn ' . esc_attr( $el_class ) . '"' . ' ' . $style_attr . $target . '>';
			if ( $icon == '' || $icon == 'no_icon' ) {
				$output .= $text;
			} else {
				$output .= $text . boldthemes_get_icon_html( $icon, '', '', '' );
			}
		$output .= '</a>';
		
		return $output;
	}
}
/**
 * Logo
 */

if ( ! function_exists( 'boldthemes_logo' ) ) {
	function boldthemes_logo( $type = 'header' ) {
		$logo = boldthemes_get_option( 'logo' );
		$alt_logo = boldthemes_get_option( 'alt_logo' );
		$hw = '';
		if ( $logo != '' ) {
			$image_id = 0;
			if( is_numeric( $logo ) ) {
				$image_id = $logo + 0;
			} else {
				$tmp = $logo;
				if ( strpos( $logo, '/wp-content' ) === 0 ) {
					$logo = get_home_url() . $logo;
				}
				$image_id = attachment_url_to_postid( $logo );
				if ( $image_id == 0 ) {
					$logo = $tmp;
				}
				$image_id = attachment_url_to_postid( $logo );
			}
			if( $image_id > 0) {
				$image = wp_get_attachment_image_src( $image_id, 'full' );
				if ( $image ) {
					$logo = $image[0];
					$width = $image[1];
					$height = $image[2];
					$hw = $width / $height;				
				} else {
					$logo = '';
				}
			} else {
				$logo = '';
			}
		}
		
		
		
		if ( $alt_logo != '' ) {
			$image_id = 0;
			if( is_numeric( $alt_logo ) ) {
				$image_id = $alt_logo + 0;
			} else {
				
				if ( strpos( $alt_logo, '/wp-content' ) === 0 ) {
					$alt_logo = get_site_url() . $alt_logo;
				}
				$image_id = attachment_url_to_postid( $alt_logo );			
			}
			
			
			if( $image_id > 0) {
				$image = wp_get_attachment_image_src( $image_id, 'full' );
				if ( $image ) {
					$alt_logo = $image[0];
					$width = $image[1];
					$height = $image[2];
					$hw = $width / $height;				
				} else {
					$alt_logo = '';
				}
			} else {
				$alt_logo = '';
			}
		}
		
		$home_link = home_url( '/' );
		if ( $logo != '' && $logo != ' ' ) {
			if ( $type == 'header' ) {
				echo '<a href="' . esc_url_raw( $home_link ) . '"><img class="btMainLogo" data-hw="' . esc_attr( $hw ) . '" src="' . esc_url_raw( $logo ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
				if ( $alt_logo != '' && $alt_logo != ' ' ) echo '<img class="btAltLogo" src="' . esc_url_raw( $alt_logo ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
				echo '</a>';
			} else if ( $type == 'footer' ) {
				echo '<a href="' . esc_url_raw( $home_link ) . '"><img src="' . esc_url_raw( $logo ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '"></a>';
			} else if ( $type == 'preloader' ) {
				echo '<img class="preloaderLogo" src="' . esc_url_raw( $logo ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" data-alt-logo="' . esc_attr( $alt_logo ) . '">';
			}
		} else {
			echo '<a href="' . esc_url_raw( $home_link ) . '" class="btTextLogo">' . get_bloginfo( 'name' ) . '</a>';
		}
	}
}

/**
 * Top bar HTML output
 */
 if ( ! function_exists( 'boldthemes_top_bar_html' ) ) {
	function boldthemes_top_bar_html( $type = 'top' ) {
		if ( is_active_sidebar( 'header_left_widgets' ) || is_active_sidebar( 'header_right_widgets' ) ) {
			if ( $type == 'top' ) { ?>
				<div class="topBar btClear">
					<div class="topBarPort port btClear">
						<?php if ( is_active_sidebar( 'header_left_widgets' ) && boldthemes_get_option( 'menu_type' ) != 'hLeftBelow' && boldthemes_get_option( 'menu_type' ) != 'hRightBelow' ) { ?>
						<div class="topTools btTopToolsLeft btTextLeft">
							<?php dynamic_sidebar( 'header_left_widgets' ); ?>
						</div><!-- /ttLeft -->
						<?php } ?>
						<?php if ( is_active_sidebar( 'header_right_widgets' ) ) { ?>
						<div class="topTools btTopToolsRight btTextRight">
							<?php dynamic_sidebar( 'header_right_widgets' ); ?>
						</div><!-- /ttRight -->
						<?php } ?>
					</div><!-- /topBarPort -->
				</div><!-- /topBar -->
			<?php } else if( $type == 'menu' ) { ?>
				<div class="topBarInMenu">
					<div class="topBarInMenuCell">
						<?php // dynamic_sidebar( 'header_left_widgets' ); ?>
						<?php dynamic_sidebar( 'header_right_widgets' ); ?>
					</div><!-- /topBarInMenu -->
				</div><!-- /topBarInMenuCell -->
			<?php }	else if( $type == 'menu-half' ) { ?>	
				<div class="topBarInLogoArea">
					<div class="topBarInLogoAreaCell">
						<?php dynamic_sidebar( 'header_left_widgets' ); ?>
					</div><!-- /topBarInLogoAreaCell -->
				</div><!-- /topBarInLogoArea -->		
			<?php }
		}

	}
}

/**
 * Preloader HTML output
 */
 if ( ! function_exists( 'boldthemes_preloader_html' ) ) {
	function boldthemes_preloader_html() {
		if ( ! boldthemes_get_option( 'disable_preloader' ) ) { ?>
			<div id="btPreloader" class="btPreloader fullScreenHeight">
				<div class="animation">
					<div><?php boldthemes_logo( 'preloader' ); ?></div>
					<div class="btLoader"></div>
					<p><?php echo boldthemes_get_option( 'preloader_text' ); ?></p>
				</div>
			</div><!-- /.preloader -->
		<?php }
	}
}

/**
 * Returns image with link HTML
 *
 * @param string $image
 * @param string $caption_text
 * @param string $size
 * @param string $url 
 * @param string $target
 * @param string $el_style 
 * @param string $el_class 
 * @return string
 */

 if ( ! function_exists( 'boldthemes_get_image_html' ) ) {
	function boldthemes_get_image_html( $image, $caption_title, $caption_text, $content, $size, $shape, $url, $target, $show_titles, $el_style, $el_class, $alt = '' ) {

		$el_style = sanitize_text_field( $el_style );
		$el_class = sanitize_text_field( $el_class );

		$target = ! empty( $target ) ? $target : '_self';

		if( $show_titles == 'yes' || $show_titles == "true" || $show_titles == 1 ) {
			$show_titles = true;
		} else {
			$show_titles = false;
		}
		
		if ( $size == '' ) $size = 'large';
		if ( $shape == 'circle' ) {
			$el_class .= ' btCircleImage';
		} else {
			if ( $show_titles ) $el_class .= ' btHasTitles';
		}
		if ( $content != '' ) $el_class .= ' btHasComplexContent'; 
			
		$style_html = '';
		if ( $el_style != '' ) {
			$style_html= ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}
		
		if ( $alt == '' && $image != '' ){
			$post_image = get_post( $image );
			if ( $post_image ) {
				$alt =  get_post_meta($post_image->ID, '_wp_attachment_image_alt', true) != '' ? get_post_meta($post_image->ID, '_wp_attachment_image_alt', true) : '';
			}
		}
		
		$output = '<div class = "btImage"><img src="' . esc_url_raw( $image ) . '" alt="' . esc_attr( $alt ) . '" ></div>';
		
		if ( strpos( $url, '<a href') === 0 ) {
			$link = $url;
	} else {
			$link = "";
			if ( $url != '' && $url != '#' && substr( $url, 0, 4 ) != 'http' && substr( $url, 0, 5 ) != 'https'  && substr( $url, 0, 6 ) != 'mailto' ) {
				$link = boldthemes_get_permalink_by_slug( $url );
			} else {
				$link = $url;
			}			
			$link = '<a href="' . esc_url_raw( $link ) . '" target="' . esc_attr( $target ) . '"></a>';
		}

		if ( $caption_title != '' || $caption_text != '' ) {
		}
		
		if ( $url != '' ) {
			$link_output = '<div class="bpgPhoto ' . $el_class . '" ' . $style_html . '> 
					' . $link . '
					<div class="boldPhotoBox"><div class="bpbItem">' . $output . '</div></div>
					<div class="captionPane btDarkSkin">
						<div class="captionTable">
							<div class="captionCell">
								<div class="captionTxt">';
									if ( $content != '' ) {
										$link_output .= $content;
									} else if ( $caption_title != '' || $caption_text != '' ) {
										$link_output .=	boldthemes_get_heading_html( $caption_text, $caption_title, '', 'medium', 'top', '', '' );
									}
			$link_output .=		'</div>
							</div>
						</div>
					</div>';
					if ( $show_titles ) {
						$link_output .= '
						<div class="btShowTitle">
							<div class="btShowTitleCaptionTxt">'
									. boldthemes_get_heading_html( $caption_text, $caption_title, '', 'medium', 'top', '', '' ) . 
								'</div>
						</div>';
					}
			$link_output .= '</div>';
			
			$output = $link_output;
		} else {
			$output = '<div class="bpgPhoto ' . $el_class . '" ' . $style_html . '>' . $output . '</div>';
		}
 		
		return $output;
	}


}	

/**
 * Returns the permalink for a page based on the incoming slug.
 *
 * @param   string  $slug   The slug of the page to which we're going to link.
 * @return  string          The permalink of the page
 */

 if ( ! function_exists( 'boldthemes_get_permalink_by_slug' ) ) {

	function boldthemes_get_permalink_by_slug($page_slug, $post_type = 'page' ) {
		global $wpdb;
		$page = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_name = %s AND post_type= %s", $page_slug, $post_type ) );
		if ( $page )
			return get_permalink( $page );

		return $page_slug;
	} 
}