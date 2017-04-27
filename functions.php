<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
?>

<?php
// changing translations
#http://ronangelo.com/change-or-translate-text-on-a-wordpress-theme/
function ra_change_translate_text_multiple( $translated ) {
	$text = array(
		'فاقد اعتبار!' => 'نام کاربری یا رمز عبور اشتباه وارده شده است',
		'Sorry, but nothing matched your search terms. Please try again with some different keywords.' => 'متاسفم، چیزی مشابه جست و جوی شما پیدا نشد. لطفا  کلمات دیگری را برای جست و جو امتحان کنید',
		'Old Text 3' => 'New Translation 3',
		'Search …' => 'جست و جو',
		'Leave a comment' => 'ارسال نظر',
		'Category' => 'دسته بندی',
		'Read more' => 'متن کامل',
	);
	$translated = str_ireplace(  array_keys($text),  $text,  $translated );
	return $translated;
}
add_filter( 'gettext', 'ra_change_translate_text_multiple', 20 );
?>
