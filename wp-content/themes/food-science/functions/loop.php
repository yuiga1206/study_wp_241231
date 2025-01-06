<?php
/**
 * サムネイル表示を関数としてまとめる
 */
function display_thumbnail() {
  if(has_post_thumbnail()) {
    the_post_thumbnail('medium');
  } else {
    echo '<img src="'.get_template_directory_uri().'/assets/img/common/noimage.png" alt="">';
  }
}
