<?php
// add a metabox to link a youtube video on a article

add_action( 'add_meta_boxes', 'init_youtube_linker' );
function init_youtube_linker()
{
     add_meta_box('id_ma_meta', 'Youtube video link', 'youtube_linker', 'post', 'normal', 'high');
}

function youtube_linker($post){
	$s = $data = get_post_meta($post->ID,'youtube_post_link',true);
	$html = '';
	// https://www.youtube.com/embed/Krfn05uifUE

	$s = explode('=', $s);
	$val = (isset($s[1])? $s[1] : $s[0]);
	if (!empty($data))
		$html .= '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$val.'" frameborder="0" allowfullscreen></iframe>';
	$html .= '<input type="text" name="youtube_post_link" value="'.$data.'" placeholder="add a youtube video link"/>';
	$html .= '<input type="submit" value="add"/>';
	echo $html;
}

add_action('save_post','save_youtube_linker');
function save_youtube_linker($post_ID){
	if(isset($_POST['youtube_post_link'])){
    	update_post_meta($post_ID,'youtube_post_link', esc_html($_POST['youtube_post_link']));
  	}
	// var_dump($_POST);
	// die();
}
?>