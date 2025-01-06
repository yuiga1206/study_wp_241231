<?php
/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');


/**
 * <title>の区切り文字を変更する
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator) {
  $separator = '|';
  return $separator;
}


/**
 * メインクエリを変更する
 */
add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query) {
  // 管理画面、メインクエリ以外には設定しない
  if(is_admin() || !$query->is_main_query()) {
    return;
  }

  // トップページの場合
  if($query->is_home()) {
    $query->set('posts_per_page', 3);
    return;
  }
}


/**
 * パスワード保護ページにて、タイトルの「保護中」の文字を削除する
 */
add_filter('protected_title_format', 'my_protected_title');
function my_protected_title($title) {
  return '%s';
}


/**
 * パスワード保護フォームをカスタマイズする
 */
add_filter('the_password_form', 'my_password_form');
function my_password_form() {
  remove_filter('the_content', 'wpautop');
  $wp_login_url = wp_login_url();
  $html = <<<HTML
    <p>パスワードを入力してください。<p>
    <form class="post-password-form" action="{$wp_login_url}?action=postpass" method="post">
      <input name="post_password" type="password" />
      <input type="submit" name="送信" value="送信" />
    </form>
HTML;
  return $html;
}


/**
 * REST APIにカスタムフィールドの値を含ませる
 */
add_action('rest_api_init', 'api_register_fields');
function api_register_fields() {
  register_rest_field(
    'food', // 投稿タイプを指定
    'price', // カスタムフィールドのキーを指定
    [
      'get_callback' => 'get_custom_field',
      'update_callback' => null,
      'schema' => null
    ]
  );
  register_rest_field(
    'food', // 投稿タイプを指定
    'calorie', // カスタムフィールドのキーを指定
    [
      'get_callback' => 'get_custom_field',
      'update_callback' => null,
      'schema' => null
    ]
  );
}
function get_custom_field($object, $field_name, $request) {
  return get_post_meta($object['id'], $field_name, true);
}


/**
 * REST APIを停止する
 */
// function stop_rest_api($access) {
//   return new WP_Error(
//     'rest_cannot_access',
//     'REST APIは使用できません',
//     ['status' => rest_authorization_required_code()]
//   );
// }
// add_filter('rest_authentication_errors', 'stop_rest_api');
