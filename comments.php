<?php

if ( post_password_required() ) {
	return;
}

function boldthemes_comment_form_before() {
    ob_start();
}
add_action( 'comment_form_before', 'boldthemes_comment_form_before' );

function boldthemes_comment_form_after() {
    $html = ob_get_clean();
    echo preg_replace(
        '/<h3 id="reply-title"(.*)>(.*)<\/h3>/',
        '<h4 id="reply-title"\1>\2</h4>',
        $html
    );
}
add_action( 'comment_form_after', 'boldthemes_comment_form_after' );

?>

<div id="comments" class="btCommentsBox">

	<?php if ( have_comments() ) : ?>

	<h4>
		<?php
			printf( _n( 'One comment', '%1$s comments', get_comments_number(), 'hotelcalifornia' ), number_format_i18n( get_comments_number() ), get_the_title() );
		?>
	</h4>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<?php 
			$prev_html = get_previous_comments_link( esc_html__( 'Older Comments', 'hotelcalifornia' ) );
			$next_html = get_next_comments_link( esc_html__( 'Newer Comments', 'hotelcalifornia' ) );
			if ( $prev_html != '' && $next_html != '' ) {
				echo get_previous_comments_link( esc_html__( 'Older Comments', 'hotelcalifornia' ) );
				echo '<span>|</span>';
				echo get_next_comments_link( esc_html__( 'Newer Comments', 'hotelcalifornia' ) );
			} else {
				echo get_previous_comments_link( esc_html__( 'Older Comments', 'hotelcalifornia' ) );
				echo get_next_comments_link( esc_html__( 'Newer Comments', 'hotelcalifornia' ) );
			}
			?>
		</nav><!-- #comment-nav-above -->
	<?php endif; // Check for comment navigation. ?>

	<ul class="comments">
		<?php
			wp_list_comments( array(
				'style'      => 'ul',
				'short_ping' => true,
				'callback'   => 'boldthemes_theme_comment'
			) );
		?>
	</ul><!-- .comments -->

	<?php if ( ! comments_open() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'hotelcalifornia' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php 
	
		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );
	
		$fields =  array(
			'author' =>
				'<div class="pcItem"><label for="author">' . esc_html__( 'Name', 'hotelcalifornia' ) . ( $req ? ' *' : '' ) . '</label>
				<p><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
				'" ' . $aria_req . ' /></p></div>',

			'email' =>
				'<div class="pcItem"><label for="email">' . esc_html__( 'Email', 'hotelcalifornia' ) . ( $req ? ' *' : '' ) . '</label>
				<p><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" ' . $aria_req . ' /></p></div>',

			'url' =>
				'<div class="pcItem"><label for="url">' . esc_html__( 'Website', 'hotelcalifornia' ) . '</label>' .
				'<p><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></p></div>',
		);
	
		$args = array(
		  'id_form'           => 'commentform',
		  'id_submit'         => 'submit',
		  'title_reply'       => esc_html__( 'Leave a Reply', 'hotelcalifornia' ),
		  'title_reply_to'    => esc_html__( 'Leave a Reply to %s', 'hotelcalifornia' ),
		  'cancel_reply_link' => esc_html__( 'Cancel Reply', 'hotelcalifornia' ),
		  'label_submit'      => esc_html__( 'Post Comment', 'hotelcalifornia' ),
		  
		  'submit_button' => '<button type="submit" value="' . esc_html__( 'Post Comment', 'hotelcalifornia' ) . '" id="btSubmit" class="btBtn btnFilledStyle btnExtraSmall btnNormalWidth btnAccentColor btnIco" name="submit" data-ico-fa="&#xf1d8;"><span>' . esc_html__( 'Post Comment', 'hotelcalifornia' ) . '</span></button>',

		  'comment_field' =>  '<div class="pcItem btComment"><label for="comment">' . _x( 'Comment', 'noun', 'hotelcalifornia' ) .
			'</label><p><textarea id="comment" name="comment" cols="30" rows="8" aria-required="true">' .
			'</textarea></p></div>',

		  'must_log_in' => '<p class="must-log-in">' .
			sprintf(
				wp_kses( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'hotelcalifornia' ), array( 'a' => array( 'href' => array() ) ) ),
				wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
			) . '</p>',

		  'logged_in_as' => '<p class="logged-in-as">' .
			sprintf(
				wp_kses( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'hotelcalifornia' ), array( 'a' => array( 'href' => array() ) ) ),
				admin_url( 'profile.php' ),
				$user_identity,
				wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
			) . '</p>',

		  'comment_notes_before' => '<p class="comment-notes">' .
			esc_html__( 'Your email address will not be published.', 'hotelcalifornia' ) . ' ' . ( $req ? esc_html__( 'Required fields are marked *', 'hotelcalifornia' ) : '' ) .
			'</p>',

		  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
		);
		comment_form( $args );
	?>

</div><!-- #comments -->