<?php
/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');


/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support('menus');


/**
 * Contact Form 7のときには整形機能をOFFにする
 */
add_filter('wpcf7_autop_or_not', 'my_wpcf7_autop');
function my_wpcf7_autop() {
  return false;
}


/**
 * ブロックエディターにCSSを読み込む
 */
add_action('after_setup_theme', 'my_editor_support');
function my_editor_support() {
  add_theme_support('editor-styles');
  add_editor_style('assets/css/editor-style.css');
}


/**
 * 表示するブロックをコントロールする
 */
// add_filter('allowed_block_types_all', 'my_allowed_block_types_all', 10, 2);
// function my_allowed_block_types_all($allowed_blocks, $editor_context) {
//   $allowed_blocks = [
//     'core/heading', // 見出し
//     'core/paragraph', // 段落
//     'core/list', // リスト
//   ];
//   // 固定ページの投稿タイプ「page」を指定
//   if('page' === $editor_context->post->post_type) {
//     $allowed_blocks[] = 'core/image'; // 画像
//   }
//   return $allowed_blocks;
// }


/**
 * 管理者の権限グループを設定する
 */
add_action('admin_init', 'my_admin_init');
function my_admin_init() {
  // 権限を取得
  $role = get_role('administrator');
  // 権限を追加するとき
  $role->add_cap('edit_foods');
  $role->add_cap('edit_others_foods');
  $role->add_cap('edit_private_foods');
  $role->add_cap('edit_published_foods');
  $role->add_cap('published_foods');
  $role->add_cap('read_private_foods');
  // 権限を削除するとき
  $role->remove_cap('delete_foods');
  $role->remove_cap('delete_others_foods');
  $role->remove_cap('delete_private_foods');
  $role->remove_cap('delete_published_foods');
}
