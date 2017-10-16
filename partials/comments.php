<?php 

$comment_args = array(

'fields' => apply_filters( 
	'comment_form_default_fields',
	array(
		'author' => '<p class="comment-form-author"><input id="author" placeholder="Your Name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',   

    	'email'  => '<p class="comment-form-email"><input id="email" placeholder="Email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',

    	'url'    => '<p class="comment-form-url"><input id="url" placeholder="Website" name="url" type="text" value="' . esc_attr(  $commenter['comment_author_url'] ) . '" size="30"' . $aria_req . ' />'.'</p>' ) ),

    	'comment_field' => '<p>' .
		'<textarea id="comment" placeholder="Comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' .
		'</p>',


    	'comment_notes_after' => '',
    	'comment_notes_before' => '',
    	'label_submit'=>'Post Your Comment'

);

?>

<?php


$comments = get_comments( array(
    'post_id' => get_the_ID(),
    'status' => 'approve',
) );
if ( !empty( $comments ) )
{

	?>

	<h3 class="comment-count"><?= count($comments) ?> Comments</h3>

	<?php
   
    wp_list_comments( array(
        'type'     => 'comment',
        'style' 	=> 'div'
    ), $comments );
  
}




comment_form($comment_args); 


?>