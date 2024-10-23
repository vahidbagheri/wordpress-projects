<?php
/*
Plugin Name:  Citynet
Description:  افزونه پنل رزرواسیون سیتی نت
Plugin URI:   https://citynet.ir/
Author:       Citynet
Author URI:   https://citynet.ir/
Version:      5.5.343
Text Domain:  citynet_plugin
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/
// disable direct file access
if (!defined('ABSPATH')) {
	exit;
}
function citynet_load_textdomain()
{
	load_plugin_textdomain(
		'citynet_plugin',
		false,
		plugin_basename(dirname(__FILE__)) . '/languages'
	);
}
add_action('plugins_loaded', 'citynet_load_textdomain', 8);

include_once(ABSPATH . 'wp-admin/includes/plugin.php');
if (!is_plugin_active('advanced-custom-fields-pro/acf.php')) {
	define('MY_ACF_PATH', plugin_dir_path(__FILE__) . 'includes/acf/');
	define('MY_ACF_URL', plugin_dir_url(__FILE__) . 'includes/acf/');

	// Include the ACF plugin.
	include_once(MY_ACF_PATH . 'acf.php');

	// Customize the url setting to fix incorrect asset URLs.
	add_filter('acf/settings/url', 'my_acf_settings_url');
	function my_acf_settings_url($url)
	{
		return MY_ACF_URL;
	}
	// (Optional) Hide the ACF admin menu item.
	add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
	function my_acf_settings_show_admin($show_admin)
	{
		return false;
	}
}
//Returns ACF repeater fields values
function cn_repeater($field, $subfields, $lang_prefix = '')
{
	$rows = false;
	$result = [];

	$rows = (int) cn_option($field, $lang_prefix);
	if ($rows) :
		for ($row_index = 0; $row_index < $rows; $row_index++) :
			foreach ($subfields as $subfield) :
				$subfield_key = $field . '_' . $row_index . '_' . $subfield;
				$value = cn_option($subfield_key, $lang_prefix);
				$result[$row_index][$subfield] = $value;
			endforeach;
		endfor;
	endif;

	return $result;
}

function cn_option($field, $lang_prefix = '')
{
	return get_option('options' . $lang_prefix . '_' . $field);
}
// include plugin dependencies: admin only
if (is_admin()) {
	require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
}
//generate plugin pages
function cn_generate_pages()
{
	$pages =  [
		'hotel',
		'flight',
		'visa',
		'book',
		'ticket',
		'cip',
		'tour',
		'package',
		'flightplushotel',
		'insurance',
		'cipprint',
		'newcipprint',
		'subsidiary',
		'redirect',
		'manifest',
		'flightdeclaration',
		'boardpassengers',
		'panelReturn',
		'contracts',
		'contractsHTML',
		'purchasesHTML',
		'contractsHtml',
		'purchasesHtml',
		'financialreports',
		'cipfinancialreports',
		'print',
		'errorlogs',
		'baseInfo',
		'dashboard',
		'cipmanagement',
		'printTicket',
		'printContract',
		'recharge',
		'editProfile',
		'financialContracts',
		'purchases',
		'financialPurchases',
		'baggage',
		'cabinDeclaration',
		'commission',
		'costDeclaration',
		'editCabinDeclaration',
		'editFlight',
		'flightDeclaration',
		'editFlightDeclaration',
		'pathDeclaration',
		'rules',
		'userTreasury',
		'treasury',
		'seats',
		'ticketReport',
		'trackOrder',
		'currencyConvert',
		'stopFlights',
		'cnpwa',
		'pwaeditprofile',
		'cnsupport',
		'cnmenu',
		'pwaservices',
		'pwabuilding',
		'searchflight',
		'getpdf',
		'linkreports',
		'bankreports',
		'ledgersrequests',
		'visainventory',
		'loginwithtoken',
	];
	return $pages;
}
function cn_generate_real_pages()
{
	$real_pages = [
		['title' => 'dashboard', 'slug' => 'dashboard'],
		['title' => 'cipmanagement', 'slug' => 'cipmanagement'],
		['title' => 'cnpwa', 'slug' => 'cnpwa'],
		['title' => 'hotel', 'slug' => 'hotel'],
		['title' => 'flight', 'slug' => 'flight'],
		['title' => 'visa', 'slug' => 'visa'],
		['title' => 'book', 'slug' => 'book'],
		['title' => 'cip', 'slug' => 'cip'],
		['title' => 'tour', 'slug' => 'tour'],
		['title' => 'package', 'slug' => 'package'],
		['title' => 'flightplushotel', 'slug' => 'flightplushotel'],
		['title' => 'insurance', 'slug' => 'insurance'],
		['title' => 'cipprint', 'slug' => 'cipprint'],
		['title' => 'newcipprint', 'slug' => 'newcipprint'],
		['title' => 'subsidiary', 'slug' => 'subsidiary'],
		['title' => 'redirect', 'slug' => 'redirect'],
		['title' => 'boardpassengers', 'slug' => 'boardpassengers'],
		['title' => 'panelReturn', 'slug' => 'panelReturn'],
		['title' => 'contracts', 'slug' => 'contracts'],
		['title' => 'contractsHTML', 'slug' => 'contractsHTML'],
		['title' => 'purchasesHTML', 'slug' => 'purchasesHTML'],
		['title' => 'contractsHtml', 'slug' => 'contractsHtml'],
		['title' => 'purchasesHtml', 'slug' => 'purchasesHtml'],
		['title' => 'financialreports', 'slug' => 'financialreports'],
		['title' => 'cipfinancialreports', 'slug' => 'cipfinancialreports'],
		['title' => 'print', 'slug' => 'print'],
		['title' => 'errorlogs', 'slug' => 'errorlogs'],
		['title' => 'baseInfo', 'slug' => 'baseInfo'],
		['title' => 'printTicket', 'slug' => 'printTicket'],
		['title' => 'printContract', 'slug' => 'printContract'],
		['title' => 'recharge', 'slug' => 'recharge'],
		['title' => 'editProfile', 'slug' => 'editProfile'],
		['title' => 'financialContracts', 'slug' => 'financialContracts'],
		['title' => 'purchases', 'slug' => 'purchases'],
		['title' => 'financialPurchases', 'slug' => 'financialPurchases'],
		['title' => 'userTreasury', 'slug' => 'userTreasury'],
		['title' => 'treasury', 'slug' => 'treasury'],
		['title' => 'trackOrder', 'slug' => 'trackOrder'],
		['title' => 'currencyConvert', 'slug' => 'currencyConvert'],
		['title' => 'getpdf', 'slug' => 'getpdf'],
		//cipmanagement
		['title' => 'manifest', 'slug' => 'manifest'],
		['title' => 'flights', 'slug' => 'flights'],
		['title' => 'transfers', 'slug' => 'transfers'],
		['title' => 'businessReport', 'slug' => 'businessReport'],
		['title' => 'showPassenger', 'slug' => 'showPassenger'],
		['title' => 'operationsReport', 'slug' => 'operationsReport'],
		['title' => 'operationsTotalReport', 'slug' => 'operationsTotalReport'],
		['title' => 'flightsManifest', 'slug' => 'flightsManifest'],
		['title' => 'formflights', 'slug' => 'formflights'],
		['title' => 'suites', 'slug' => 'suites'],
		['title' => 'cipList', 'slug' => 'cipList'],
		//dashboard
		['title' => 'seats', 'slug' => 'seats'],
		['title' => 'automation', 'slug' => 'automation'],
		['title' => 'automationstart', 'slug' => 'automationstart'],
		['title' => 'rules', 'slug' => 'rules'],
		['title' => 'ticketReport', 'slug' => 'ticketReport'],
		['title' => 'baggage', 'slug' => 'baggage'],
		['title' => 'cabinDeclaration', 'slug' => 'cabinDeclaration'],
		['title' => 'commission', 'slug' => 'commission'],
		['title' => 'costDeclaration', 'slug' => 'costDeclaration'],
		['title' => 'editCabinDeclaration', 'slug' => 'editCabinDeclaration'],
		['title' => 'editFlight', 'slug' => 'editFlight'],
		['title' => 'flightdeclaration', 'slug' => 'flightdeclaration'],
		['title' => 'editFlightDeclaration', 'slug' => 'editFlightDeclaration'],
		['title' => 'pathDeclaration', 'slug' => 'pathDeclaration'],
		['title' => 'stopFlights', 'slug' => 'stopFlights'],
		//cnpwa
		['title' => 'pwaeditprofile', 'slug' => 'pwaeditprofile'],
		['title' => 'cnsupport', 'slug' => 'cnsupport'],
		['title' => 'cnmenu', 'slug' => 'cnmenu'],
		['title' => 'pwaservices', 'slug' => 'pwaservices'],
		['title' => 'pwabuilding', 'slug' => 'pwabuilding'],
		['title' => 'searchflight', 'slug' => 'searchflight'],
	];
	return $real_pages;
}
function cn_pages_with_parent($parent)
{
	if ($parent == 'cipmanagement')
		return [
			'manifest',
			'flights',
			'transfers',
			'businessReport',
			'showPassenger',
			'operationsReport',
			'operationsTotalReport',
			'flightsManifest',
			'formflights',
			'suites',
			'flightdeclaration',
			'cipList'
		];
	if ($parent == 'dashboard')
		return [
			'seats',
			'automation',
			'automationstart',
			'rules',
			'ticketReport',
			'baggage',
			'cabinDeclaration',
			'commission',
			'costDeclaration',
			'editCabinDeclaration',
			'editFlight',
			'flightDeclaration',
			'editFlightDeclaration',
			'pathDeclaration',
			'stopFlights'
		];
	else
		return [
			'pwaeditprofile',
			'cnsupport',
			'cnmenu',
			'pwaservices',
			'pwabuilding',
			'searchflight'
		];
}
// Adds custom classes to body tag
add_filter('body_class', function ($classes) {
	$classes[] = citynet_is_panel_pages() ? 'page-template-app-templates' : '';
	$url = strtok($_SERVER['REQUEST_URI'], '?');
	$url = trim($url, '/');
	$url = explode('/', $url);
	$url = implode('-', $url);
	$classes[] = citynet_is_panel_pages() ?  $url : '';
	return $classes;
});
function get_page_id($slug)
{
	$query = new WP_Query(
		array(
			'name' => $slug,
			'post_type' => 'page'
		)
	);
	$query->the_post();
	return get_the_ID();
}
function cn_is_multilang_active()
{
	return is_plugin_active('sitepress-multilingual-cms/sitepress.php');
}
//[citynet] shortcode for displaying app
function cn_generate_app($atts)
{
	return "<div id='app'></div>";
}
add_shortcode('citynet', 'cn_generate_app');

function cn_get_flight_page_id()
{
	if (cn_is_multilang_active()) {
		global $sitepress;
		$current_lang = ICL_LANGUAGE_CODE;
		$sitepress->switch_lang($current_lang);
	}
	$flight_page = get_posts(array(
		'name'           => 'flight',
		'posts_per_page' => 1,
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'fields' => 'ids'
	));
	$flight_page_id = [];
	if ($flight_page) {
		foreach ($flight_page as $page_id) {
			//wp_delete_post($post->ID, true);
			$flight_page_id[] = $page_id;
		}
		$flight_page_id = $flight_page_id[0];
	} else {
		if (cn_is_multilang_active()) {
			$sitepress->switch_lang($current_lang);
		}
		$flight_page = array(
			'post_title'  => 'flight',
			'post_name'   => 'flight',
			'post_status' => 'publish',
			'post_author' => 1,
			'post_type'   => 'page',
			'post_content' => '[citynet]'
		);
		$flight_page_id = wp_insert_post($flight_page);
	}
	return $flight_page_id;
}
function cn_get_tour_page_id()
{
	if (cn_is_multilang_active()) {
		global $sitepress;
		$current_lang = ICL_LANGUAGE_CODE;
		$sitepress->switch_lang($current_lang);
	}
	$tour_page = get_posts(array(
		'name'           => 'tour',
		'posts_per_page' => 1,
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'fields' => 'ids'
	));
	$tour_page_id = [];
	if ($tour_page) {
		foreach ($tour_page as $page_id) {
			//wp_delete_post($post->ID, true);
			$tour_page_id[] = $page_id;
		}
		$tour_page_id = $tour_page_id[0];
	} else {
		if (cn_is_multilang_active()) {
			$sitepress->switch_lang($current_lang);
		}
		$tour_page = array(
			'post_title'  => 'tour',
			'post_name'   => 'tour',
			'post_status' => 'publish',
			'post_author' => 1,
			'post_type'   => 'page',
			'post_content' => '[citynet]'
		);
		$tour_page_id = wp_insert_post($tour_page);
	}
	return $tour_page_id;
}
function cn_get_hotel_page_id()
{
	if (cn_is_multilang_active()) {
		global $sitepress;
		$current_lang = ICL_LANGUAGE_CODE;
		$sitepress->switch_lang($current_lang);
	}
	$hotel_page = get_posts(array(
		'name'           => 'hotel',
		'posts_per_page' => 1,
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'fields' => 'ids'
	));
	$hotel_page_id = [];
	if ($hotel_page) {
		foreach ($hotel_page as $page_id) {
			//wp_delete_post($post->ID, true);
			$hotel_page_id[] = $page_id;
		}
		$hotel_page_id = $hotel_page_id[0];
	} else {
		if (cn_is_multilang_active()) {
			$sitepress->switch_lang($current_lang);
		}
		$hotel_page = array(
			'post_title'  => 'hotel',
			'post_name'   => 'hotel',
			'post_status' => 'publish',
			'post_author' => 1,
			'post_type'   => 'page',
			'post_content' => '[citynet]'
		);
		$hotel_page_id = wp_insert_post($hotel_page);
	}
	return $hotel_page_id;
}

function cn_get_visa_page_id(){
	if (cn_is_multilang_active()) {
		global $sitepress;
		$current_lang = ICL_LANGUAGE_CODE;
		$sitepress->switch_lang($current_lang);
	}
	$visa_page = get_posts(array(
		'name'           => 'visa',
		'posts_per_page' => 1,
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'fields' => 'ids'
	));
	$hotel_page_id = [];
	if ($visa_page) {
		foreach ($visa_page as $page_id) {
			//wp_delete_post($post->ID, true);
			$visa_page_id[] = $page_id;
		}
		$visa_page_id = $visa_page_id[0];
	} else {
		if (cn_is_multilang_active()) {
			$sitepress->switch_lang($current_lang);
		}
		$visa_page = array(
			'post_title'  => 'visa',
			'post_name'   => 'visa',
			'post_status' => 'publish',
			'post_author' => 1,
			'post_type'   => 'page',
			'post_content' => '[citynet]'
		);
		$visa_page_id = wp_insert_post($visa_page);
	}
	return $visa_page_id;
}

function citynet_activate()
{
	$cn_pages_ids = [];
	$other_langs = [];
	if (cn_is_multilang_active()) {
		global $sitepress;
		$current_lang = ICL_LANGUAGE_CODE;
		$langs = cn_get_wpml_active_langs();
		foreach ($langs as $lang) {
			if ($lang != $current_lang) {
				$other_langs[] = $lang;
			}
		}
	}

	$cn_pages_ids = [];
	$flight_page_id = cn_get_flight_page_id();
	$tour_page_id = cn_get_tour_page_id();
	$hotel_page_id = cn_get_hotel_page_id();
	$visa_page_id = cn_get_visa_page_id();


	array_push($cn_pages_ids, $flight_page_id);
	array_push($cn_pages_ids, $tour_page_id);
	array_push($cn_pages_ids, $hotel_page_id);
	array_push($cn_pages_ids, $visa_page_id);



	if ($other_langs) {
		// Get original post's translation ID
		$trid = $sitepress->get_element_trid($flight_page_id, 'post_page');
		$trid_tour = $sitepress->get_element_trid($tour_page_id, 'post_page');
		$trid_hotel = $sitepress->get_element_trid($hotel_page_id, 'post_page');
		$trid_visa = $sitepress->get_element_trid($visa_page_id, 'post_page');



		foreach ($other_langs as $other_lang) {
			$sec_flight_page = apply_filters('wpml_object_id', $flight_page_id, 'page', false, $other_lang);
			$sec_tour_page = apply_filters('wpml_object_id', $tour_page_id, 'page', false, $other_lang);
			$sec_hotel_page = apply_filters('wpml_object_id', $hotel_page_id, 'page', false, $other_lang);
			$sec_visa_page = apply_filters('wpml_object_id', $visa_page_id, 'page', false, $other_lang);


			if (!$sec_flight_page) {
				$sec_flight_page_id = wp_insert_post([
					'post_title'   => 'flight',
					'post_name'    => 'flight-citynet',
					'post_status'  => 'publish',
					'post_author'  => 1,
					'post_type'    => 'page',
					'post_content' => '[citynet]'
				]);

				// Tell WPML the second post is a translation of the first
				$sitepress->set_element_language_details($sec_flight_page_id, 'post_page', $trid, $other_lang);
				wp_update_post(array(
					'ID' => $sec_flight_page_id,
					'post_name' => 'flight'
				));

				array_push($cn_pages_ids, $sec_flight_page_id);
			}
			if (!$sec_tour_page) {
				$sec_tour_page_id = wp_insert_post([
					'post_title'   => 'tour',
					'post_name'    => 'tour-citynet',
					'post_status'  => 'publish',
					'post_author'  => 1,
					'post_type'    => 'page',
					'post_content' => '[citynet]'
				]);
				$sitepress->set_element_language_details($sec_tour_page_id, 'post_page', $trid_tour, $other_lang);
				wp_update_post(array(
					'ID' => $sec_tour_page_id,
					'post_name' => 'tour'
				));
				array_push($cn_pages_ids, $sec_tour_page_id);
			}
			if (!$sec_hotel_page) {
				$sec_hotel_page_id = wp_insert_post([
					'post_title'   => 'hotel',
					'post_name'    => 'hotel-citynet',
					'post_status'  => 'publish',
					'post_author'  => 1,
					'post_type'    => 'page',
					'post_content' => '[citynet]'
				]);
				$sitepress->set_element_language_details($sec_hotel_page_id, 'post_page', $trid_hotel, $other_lang);
				wp_update_post(array(
					'ID' => $sec_hotel_page_id,
					'post_name' => 'hotel'
				));
				array_push($cn_pages_ids, $sec_hotel_page_id);
			}
			if (!$sec_visa_page) {
				$sec_visa_page_id = wp_insert_post([
					'post_title'   => 'visa',
					'post_name'    => 'visa-citynet',
					'post_status'  => 'publish',
					'post_author'  => 1,
					'post_type'    => 'page',
					'post_content' => '[citynet]'
				]);
				$sitepress->set_element_language_details($sec_visa_page_id, 'post_page', $trid_visa, $other_lang);
				wp_update_post(array(
					'ID' => $sec_visa_page_id,
					'post_name' => 'visa'
				));
				array_push($cn_pages_ids, $sec_visa_page_id);
			}
		}
	}

	add_option('citynet_pages_ids', implode(',', $cn_pages_ids));

	$default_options = [
		'cn_widget_theme' => 'default',
		'cn_panel_users_theme' => 'false'
	];
	foreach ($default_options as $option_name => $default_value) {
		add_option($option_name, $default_value);
	}

	//	add option to check if plugin wizard is enabled
	update_option("cn_show_my_plugin_wizard_notice", 1);
}
register_activation_hook(__FILE__, 'citynet_activate');

add_filter('acf/load_field/name=cn_mobile_codes', function ($field) {
	$field['choices'] = [];

	$string = file_get_contents(__DIR__ . "/assets/other/mobile_codes.json");
	$json_a = json_decode($string, true);

	foreach ($json_a as $key => $value) {
		$field['choices'][$key] = '+' . $value['code'] . ' ' . $value['name'];
	}
	return $field;
});

// select for cn_default_mobile_code
add_filter('acf/load_field/name=cn_default_mobile_code', function ($field) {
	$field['choices'] = [];

	$string = file_get_contents(__DIR__ . "/assets/other/mobile_codes.json");
	$json_a = json_decode($string, true);

	foreach ($json_a as $key => $value) {
		$field['choices'][$key] = '+' . $value['code'] . ' ' . $value['name'];
	}
	return $field;
});

// select for cn_default_nationality
add_filter('acf/load_field/name=cn_default_nationality', function ($field) {
	$field['choices'] = [];

	$string = file_get_contents(__DIR__ . "/assets/other/mobile_codes.json");
	$json_a = json_decode($string, true);

	foreach ($json_a as $key => $value) {
		$field['choices'][$key] =  $value['name'];
	}
	return $field;
});

// select for cn_country
add_filter('acf/load_field/name=cn-country', function ($field) {
	$field['choices'] = [];
	$string = file_get_contents(__DIR__ . "/assets/other/mobile_codes.json");
	$json_a = json_decode($string, true);
	foreach ($json_a as $key => $value) {
		$field['choices'][$key] =  $value['name'];
	}
	return $field;
});
//select for default value cn_country
add_filter('acf/load_value/name=cn-most-visited-countries', function ($value) {
	$value	= array();
	$value[] = array(
		'field_638f342a1e442' => 'ترکیه',
		'field_638f341e1e441' => 'TR',
	);
	$value[] = array(
		'field_638f342a1e442' => 'فرانسه',
		'field_638f341e1e441' => 'FR',
	);
	$value[] = array(
		'field_638f342a1e442' => 'امارات',
		'field_638f341e1e441' => 'AE',
	);
	$value[] = array(
		'field_638f342a1e442' => 'آلمان',
		'field_638f341e1e441' => 'DE',
	);
	$value[] = array(
		'field_638f342a1e442' => 'ارمنستان',
		'field_638f341e1e441' => 'AM',
	);
	$value[] = array(
		'field_638f342a1e442' => 'چین',
		'field_638f341e1e441' => 'CN',
	);
	$value[] = array(
		'field_638f342a1e442' => 'آذربایجان',
		'field_638f341e1e441' => 'AZ',
	);
	$value[] = array(
		'field_638f342a1e442' => 'اسپانیا',
		'field_638f341e1e441' => 'ES',
	);
	$value[] = array(
		'field_638f342a1e442' => 'عراق',
		'field_638f341e1e441' => 'IQ',
	);
	$value[] = array(
		'field_638f342a1e442' => 'تایلند',
		'field_638f341e1e441' => 'TH',
	);
	return $value;
});

function cn_admin_enqueue_scripts()
{
	wp_enqueue_script('cn-admin-js', plugin_dir_url(__FILE__) . 'admin/js/cn-admin.js', null, filemtime(plugin_dir_path(__FILE__) . 'admin/js/cn-admin.js'), true);
}

add_action('acf/input/admin_enqueue_scripts', 'cn_admin_enqueue_scripts');

add_action('init', function () {
	$plugin_pages = cn_generate_pages();
	foreach ($plugin_pages as  $page_slug) :
		if ($page_slug != 'flight' && $page_slug != 'tour' && $page_slug != 'hotel' && $page_slug != 'visa') {
			add_rewrite_rule($page_slug . '/?$', 'index.php?cn-plugin-page=' . $page_slug, 'top');
			add_rewrite_rule(strtolower($page_slug) . '/?$', 'index.php?cn-plugin-page=' . strtolower($page_slug), 'top');
		}
	endforeach;

	$plugin_pages_with_parent = cn_pages_with_parent('dashboard');
	foreach ($plugin_pages_with_parent as $page_slug) :
		add_rewrite_rule('dashboard/' . $page_slug . '/?$', 'index.php?cn-plugin-page=' . $page_slug, 'top');
		add_rewrite_rule('dashboard/' . strtolower($page_slug) . '/?$', 'index.php?cn-plugin-page=' . strtolower($page_slug), 'top');
	endforeach;

	$plugin_pages_with_parent = cn_pages_with_parent('cipmanagement');
	foreach ($plugin_pages_with_parent as $page_slug) :
		add_rewrite_rule('cipmanagement/' . $page_slug . '/?$', 'index.php?cn-plugin-page=' . $page_slug, 'top');
		add_rewrite_rule('cipmanagement/' . strtolower($page_slug) . '/?$', 'index.php?cn-plugin-page=' . strtolower($page_slug), 'top');
	endforeach;
	$plugin_pages_with_parent = cn_pages_with_parent('cnpwa');
	foreach ($plugin_pages_with_parent as $page_slug) :
		add_rewrite_rule('cnpwa/' . $page_slug . '/?$', 'index.php?cn-plugin-page=' . $page_slug, 'top');
		add_rewrite_rule('cnpwa/' . strtolower($page_slug) . '/?$', 'index.php?cn-plugin-page=' . strtolower($page_slug), 'top');
	endforeach;

	flush_rewrite_rules();

	// Add a custom capability for access specific roles to citynet settings
	// The 'can_manage_citynet_settings' capability checks in ./admin/admin-menu.php:15
	$roles = [
		'administrator' => true,
		'editor' => true
	];
	$citynet_cap = 'can_manage_citynet_settings';
	$grant_roles = apply_filters('citynet_manage_grant_roles', $roles, $citynet_cap);

	if ($grant_roles && is_array($grant_roles)) :
		foreach ($grant_roles as $role => $grant) :
			$role_object = get_role($role);
			if ($role_object) :
				$role_object->add_cap($citynet_cap, $grant);
			endif;
		endforeach;
	endif;

	// Check to remove manage capability for roles that granted from before, and now not allowed!
	global $wp_roles;
	if ($all_roles = $wp_roles->roles) :
		foreach ($all_roles as $role => $role_info) :
			if (isset($role_info['capabilities'][$citynet_cap]) && !isset($grant_roles[$role])) :
				$role_object = get_role($role);
				if ($role_object) :
					$role_object->remove_cap($citynet_cap);
				endif;
			endif;
		endforeach;
	endif;
}, 10, 0);

add_filter('query_vars', function ($vars) {
	foreach (['cn-plugin-page'] as $parameter) :
		$vars[] = $parameter;
	endforeach;
	return $vars;
});

add_action('parse_request', function ($query) {
	if (
		isset($query->query_vars['cn-plugin-page']) &&
		strtolower($query->query_vars['cn-plugin-page']) != 'panelreturn' &&
		strtolower($query->query_vars['cn-plugin-page']) != 'contractshtml' &&
		strtolower($query->query_vars['cn-plugin-page']) != 'flight' &&
		strtolower($query->query_vars['cn-plugin-page']) != 'loginwithtoken'
	) {
		set_query_var('citynet_plugin_page', $query->query_vars['cn-plugin-page']);
		include 'app-templates/cn-template.php';
		exit();
	} elseif (isset($query->query_vars['cn-plugin-page']) && strtolower($query->query_vars['cn-plugin-page']) == 'panelreturn') {
		set_query_var('citynet_plugin_page', $query->query_vars['cn-plugin-page']);
		include 'app-templates/cn-bank-return-template.php';
		exit();
	} elseif (isset($query->query_vars['cn-plugin-page']) && strtolower($query->query_vars['cn-plugin-page']) == 'contractshtml') {
		set_query_var('citynet_plugin_page', $query->query_vars['cn-plugin-page']);
		include 'app-templates/cn-contracts-html-template.php';
		exit();
	}elseif (isset($query->query_vars['cn-plugin-page']) && strtolower($query->query_vars['cn-plugin-page']) == 'loginwithtoken') {
		set_query_var('citynet_plugin_page', $query->query_vars['cn-plugin-page']);
		include 'app-templates/cn-login-with-token.php';
		exit();
	}
});
add_filter('document_title_parts', function ($title) {
	if (get_query_var('citynet_plugin_page')) :
		$plugin_pages = cn_generate_pages();
		foreach ($plugin_pages as $plugin_page) {
			$plugin_pages_title[$plugin_page] = $plugin_page;
		}
		$title['title'] = $plugin_pages_title[get_query_var('citynet_plugin_page')];
	endif;
	return $title;
}, 10);


function cn_get_wpml_active_langs()
{
	$lang_codes = [];
	$wpml_langs = apply_filters('wpml_active_languages', NULL);
	foreach ($wpml_langs as $lang => $lang_info) {
		$lang_codes[] = $lang;
	}
	return $lang_codes;
}
function citynet_get_wpml_default_lang()
{
	$default_lang = apply_filters('wpml_default_language', NULL);
	return $default_lang;
}
add_action("admin_init", function () {
	if (get_option($opt_name = "cn_show_my_plugin_wizard_notice")) {
		delete_option($opt_name);
		add_action("admin_notices", "cn_wizard_notice");
	}
	return;
});
function cn_wizard_completed()
{
	return false;
}
function cn_wizard_notice()
{
	if (cn_wizard_completed()) {
		return;
	} // completed already
?>
	<div class="cn-layer"></div>
	<div class="cn-updated cn-notice is-dismissible">
		<p><?php _e('Citynet Plugin Enabled!', 'citynet_plugin'); ?></p>
		<p><?php _e('Go to the Plugin Settings page for full activation.', 'citynet_plugin'); ?></p>
		<p><a href="<?php admin_url(); ?>?page=citynet-settings" class="button button-primary"><?php _e('Setting Page', 'citynet_plugin'); ?></a></p>
	</div>
<?php
}

function citynet_deactivation()
{
	foreach (['cn_widget_theme', 'cn_panel_users_theme', 'citynet_pages_ids', 'citynet_pages_to_remove'] as $option_name) {
		delete_option($option_name);
	}
}
register_deactivation_hook(__FILE__, 'citynet_deactivation');

//restrict plugin pages from delete
function cn_page_deletion($post_ID)
{
	$cn_pages    = get_option('citynet_pages_ids');
	$cn_page_ids = explode(',', $cn_pages);
	if (in_array($post_ID, $cn_page_ids)) {
		// wp_update_post([
		// 	'ID'          => $post_ID,
		// 	'post_status' => 'publish'
		// ]);
		$cn_page_ids = array_merge(array_diff($cn_page_ids, [$post_ID]));
		update_option('citynet_pages_ids', implode(',', $cn_page_ids));
		wp_delete_post($post_ID, true);
		wp_redirect(admin_url() . 'edit.php?post_type=page&cn_ids=' . $post_ID);
		exit();
	}
}
add_action('wp_trash_post', 'cn_page_deletion', 10, 1);

//Defines captca api
function generate_captcha_wp_api()
{
	register_rest_route('citynet-api/v1', '/verify-captcha/', [
		'methods'  => 'POST',
		'callback' => 'generate_captcha_info_api'
	]);
}
add_action('rest_api_init', 'generate_captcha_wp_api');

function generate_captcha_info_api($request)
{
	$body = $request->get_json_params();
	$response = wp_remote_post(
		'https://www.google.com/recaptcha/api/siteverify',
		array(
			'method' => 'POST',
			'body' => array('secret' => get_field('cn_secret_key', 'option'), 'response' => $body['captchaToken'])
		)
	);

	return $response;
}

function generate_panel_info()
{
	$selected_services = [];
	$pages_with_panel = [];
	$social_urls = [];
	$themes = [];
	$hotels_sortkey = [];
	$agency_tel = [];
	$agency_tel_txt = [];
	$cn_airport_flight = [];
	$cn_default_hotel = [];
	$cn_default_cip = [];
	$cn_not_found_result_flight = [];
	$cn_not_found_result_hotel = [];
	$cn_not_found_result_flightplushotel = [];
	$cn_not_found_result_tour = [];
	$cn_not_found_result_package = [];
	$cn_not_found_result_cip = [];
	$cn_not_found_result_insurance = [];
	$header_menu_settings = [];
	$pwa = [];
	$default_currency = [];
	$site_langs = [];
	$mobile_codes = [];
	$default_mobile_code = [];
	$default_nationality = [];
	$hide_close_flight = [];
	$hide_zero_price  = [];
	$cities_for_seo = [];
	$hotels_for_seo = [];
	$most_visited_airports = [];
	$most_visited_airports_cols = [];
	$most_visited_countries = [];
	$most_visited_cities = [];
	$most_visited_cities_cols = [];
	$loading_settings = [];
	$menu_show_type = [];
	$flights_show_type_b2b = [];
	$flights_show_type_b2c = [];
	$flights_show_type_admin = [];
	$flights_show_type_counter = [];
	$display_registration_date = [];
 	$class_cabin_in_flight = [];
	$hide_flight_type_label = [];
	$datepicker_locales = [];
	$auth_info = [];
	$hide_suppliers_counter = [];
	$hide_suppliers_admin = [];
	$hide_logo_contract_report = [];
	$hide_wallet = [];
	$hide_credit = [];
	$hide_bank = [];
	$filter_subsystems = [];
	$hide_system_prices = [];
	$hide_charter_prices = [];
	$show_alert_register = [];
	$show_citizens_checkbox = [];


	





	$default_lang = get_field('cn_site_lang', 'option') ? get_field('cn_site_lang', 'option') : 'fa';
	$other_langs = [$default_lang];

	if (cn_is_multilang_active()) {
		$langs = cn_get_wpml_active_langs();
		foreach ($langs as $lang) {
			if ($lang != $default_lang) {
				$other_langs[] = $lang;
			}
		}
	}
	// Start languages loop
	foreach ($other_langs as $lang) {
		$site_langs[] = $lang;
		if ($lang != $default_lang) {
			$lang_prefix =  '_' . $lang;
		} else {
			$lang_prefix = '';
		}
		$services_tabs = cn_repeater('cn_services', ['cn-select-service', 'name', 'active', 'show', 'hide-logo-footer'], $lang_prefix);
		//citynet_print_r( $services_tabs  );
		if ($services_tabs) {
			foreach ($services_tabs as $row) {
				$selected_services[$lang][] = [
					'name' => find_service_name($lang, $row['name'], $row['cn-select-service']),
					'responsive_name' => find_service_name($lang, $row['name'], $row['cn-select-service']),
					'icon' => find_service_tab($row['cn-select-service']),
					'service' => find_service_tab($row['cn-select-service']),
					'active' => ($row['active'] == 1) ? true : false,
					'show' => ($row['show'] == 1) ? true : false,
					'hideLogoFooter' => ($row['hide-logo-footer'] == 1) ? true : false,
				];
			}
		} else {
			$selected_services[$lang] = [
				[
					'name' => [
						'fa' => 'پرواز',
						'en' => 'Flight',
						'ar' => 'طيران'
					],
					'responsive_name' =>  [
						'fa' => 'پرواز',
						'en' => 'Flight',
						'ar' => 'طيران'
					],
					'icon' => 'Flight',
					'service' => 'Flight',
					'active' => true,
					'show' =>  true,
					'hide-logo-footer' => false
				],
				[
					'name' => [
						'fa' => 'هتل',
						'en' => 'Hotel',
						'ar' => 'الفندق'
					],
					'responsive_name' =>  [
						'fa' => 'هتل',
						'en' => 'Hotel',
						'ar' => 'الفندق'
					],
					'icon' => 'Hotel',
					'service' => 'Hotel',
					'active' => true,
					'show' =>  true,
					'hide-logo-footer' => false
				],
				[
					'name' => [
						'fa' => 'پرواز+هتل',
						'en' => 'Flight+Hotel',
						'ar' => 'طيران+الفندق'
					],
					'responsive_name' =>  [
						'fa' => 'پرواز+هتل',
						'en' => 'Flight+Hotel',
						'ar' => 'طيران+الفندق'
					],
					'icon' => 'FlightAndHotel',
					'service' => 'FlightAndHotel',
					'active' => true,
					'show' =>  true,
					'hide-logo-footer' => false
				],
			];
		}

		$auth_info[$lang] = [
			'automaitonOTP' => cn_option('cn-auth-automaiton-otp', $lang_prefix) ? (int)cn_option('cn-auth-automaiton-otp', $lang_prefix) : 0,
			'usernameTitle' => cn_option('cn-auth-username-title', $lang_prefix),
			'subtitle' => cn_option('cn-auth-subtitle', $lang_prefix),
			'loginType' => cn_option('cn_login_type', $lang_prefix) ? cn_option('cn_login_type', $lang_prefix) : null,
			'hideTypes' => cn_option('cn_login_hide_show', $lang_prefix) ? cn_option('cn_login_hide_show', $lang_prefix) : null,
		];

		$optional_tabs = cn_repeater('cn_optional_tabs', ['cn_title', 'cn_url', 'cn_icon'], $lang_prefix);
		if ($optional_tabs) {
			foreach ($optional_tabs as $row) {
				$selected_services[$lang][] = [
					'name'    => [
						'fa' => $row['cn_title'],
						'en' => $row['cn_title'],
					],
					'responsive_name'   => [
						'fa' => $row['cn_title'],
						'en' => $row['cn_title']
					],
					'icon'    => $row['cn_icon'],
					'url'    => $row['cn_url'],
					'service' => 'optional',
					'active'  => true,
					'show'  => false
				];
			}
		}
		$hotels_cities = cn_repeater('cn_hotel-city', ['cn_citypage', 'cn_city', 'cn_search2'], $lang_prefix);
		if ($hotels_cities) {
			foreach ($hotels_cities as $row) {
				$slug = get_page_uri($row['cn_citypage']);
				$cities_for_seo[$lang][] = [
					'slug'  => $slug,
					'city'  => $row['cn_city'],
					'search'  => $row['cn_search2'],
				];
			}
		} else {
			$cities_for_seo[$lang] = [];
		}
		$hotels_single_pages = cn_repeater('cn_hotel-page', ['cn_hotelpage', 'cn_hotelname', 'cn_display_panel'], $lang_prefix);
		if ($hotels_single_pages) {
			foreach ($hotels_single_pages as $row) {
				$slug = get_permalink($row['cn_hotelpage']);
				$hotels_for_seo[$lang][] = [
					'slug'  => $slug,
					'hotel' => $row['cn_hotelname'],
					'show'  => $row['cn_display_panel'],
				];
			}
		} else {
			$hotels_for_seo[$lang] = [];
		}
		//display panel in internal pages or posts
		$panel_pages = cn_repeater('cn_panel_pages', ['cn_panel_page', 'cn_select_tab'], $lang_prefix);
		if ($panel_pages) {
			foreach ($panel_pages as $row) {
				$slug = get_permalink($row['cn_panel_page']);
				$pages_with_panel[$lang][] = [
					'slug'  => $slug,
					'tab'   => ($row['cn_select_tab']) ? $row['cn_select_tab'] : 'All'
				];
			}
		} else {
			$pages_with_panel[$lang] = [];
		}
		$airports = cn_repeater('cn-most-visited-airports', ['cn-title', 'cn-airport'], $lang_prefix);
		if ($airports) {
			foreach ($airports as $row) {
				$most_visited_airports[$lang][] = [
					'title'  => $row['cn-title'],
					'airport'  => $row['cn-airport']
				];
			}
		} else {
			$most_visited_airports[$lang] = [];
		}
		$most_visited_airports_cols[$lang] = cn_option('cn-most-visited-airports-columns', $lang_prefix) ? cn_option('cn-most-visited-airports-columns', $lang_prefix) : 4;

		$hide_flight_type_label[$lang] = cn_option('cn_hide_flight_type_label', $lang_prefix) ? true : false;

		$datepicker_locales[$lang] = cn_option('cn_datepicker_locale', $lang_prefix) ? cn_option('cn_datepicker_locale', $lang_prefix) : null;

		$cities = cn_repeater('cn-most-visited-cities', ['cn-title', 'cn-city'], $lang_prefix);
		if ($cities) {
			foreach ($cities as $row) {
				$most_visited_cities[$lang][] = [
					'title'  => $row['cn-title'],
					'city'  => $row['cn-city']
				];
			}
		} else {
			$most_visited_cities[$lang] = [];
		}
		$most_visited_cities_cols[$lang] = cn_option('cn-most-visited-cities-columns', $lang_prefix) ? cn_option('cn-most-visited-cities-columns', $lang_prefix) : 4;

		//
		$countries = cn_repeater('cn-most-visited-countries', ['cn-title', 'cn-country'], $lang_prefix);
		if ($countries) {
			foreach ($countries as $row) {
				$most_visited_countries[$lang][] = [
					'title'  => $row['cn-title'],
					'country'  => $row['cn-country']
				];
			}
		} else {
			$most_visited_countries[$lang] = [
				[
					'title' => 'ترکیه',
					'country' => 'TR',
				],
				[
					'title' => 'فرانسه',
					'country' => 'FR',
				],
				[
					'title' => 'امارات',
					'country' => 'AE',
				],
				[
					'title' => 'آلمان',
					'country' => 'DE',
				],
				[
					'title' => 'ارمنستان',
					'country' => 'AM',
				],
				[
					'title' => 'چین',
					'country' => 'CN',
				],
				[
					'title' => 'آذربایجان',
					'country' => 'AZ',
				],
				[
					'title' => 'اسپانیا',
					'country' => 'ES',
				],
				[
					'title' => 'عراق',
					'country' => 'IQ',
				],
				[
					'title' => 'تایلند',
					'country' => 'TH',
				],

			];
		}

		$colors[$lang]               = [
			'primary'   => cn_option('cn_main-color', $lang_prefix),
			'buttons'   => cn_option('cn_buttons-color', $lang_prefix),
			'darkmodePrimary'   => cn_option('cn_main-darkmode-color', $lang_prefix),
			'darkmodeButtons'   => cn_option('cn_buttons-darkmode-color', $lang_prefix),

		];
		$socials        = [
			[1 => 'instagram'],
			[2 => 'telegram'],
			[3 => 'twitter'],
			[4 => 'facebook'],
			[5 => 'linkedin'],
			[6 => 'whatsapp']
		];
		$social_counter = 1;
		foreach ($socials as $social) {
			if (cn_option('cn_' . $social[$social_counter], $lang_prefix)) {
				$social_urls[$social[$social_counter]] = cn_option('cn_' . $social[$social_counter], $lang_prefix);
			}
			$social_counter++;
		}
		$themes[$lang] = cn_option('cn_widget_theme', $lang_prefix);

		$hotels_sortkey[$lang] = cn_option('cn-hotels-sortkey', $lang_prefix) ? cn_option('cn-hotels-sortkey', $lang_prefix) : 'default';

		$add_to_wp_menu = cn_option('cn_add-to-wp-menu', $lang_prefix);
		$panel_menu_custom_wrapper_id = cn_option('cn_custom-panel-menu-wrapper-id', $lang_prefix);
		$header_menu_settings[$lang]['addToMenu'] = ($add_to_wp_menu ? true : false);
		$header_menu_settings[$lang]['lightTheme'] = cn_option('cn_menu-theme', $lang_prefix) ? true : false;
		if ($add_to_wp_menu) $header_menu_settings[$lang]['wrapperId'] = ($panel_menu_custom_wrapper_id ? $panel_menu_custom_wrapper_id : null);

		$agency_tel[$lang] = cn_option('cn_agency_phone_number', $lang_prefix) ? cn_option('cn_agency_phone_number', $lang_prefix) : get_field('tel', 'option');
		$agency_tel_txt[$lang] = cn_option('cn_agency_phone_txt', $lang_prefix) ? cn_option('cn_agency_phone_txt', $lang_prefix) : get_field('tel', 'option');
		$cn_airport_flight[$lang] = cn_option('cn_airport_flight', $lang_prefix) ? cn_option('cn_airport_flight', $lang_prefix) : '';
		$cn_default_hotel[$lang] = cn_option('cn_default_hotel', $lang_prefix) ? cn_option('cn_default_hotel', $lang_prefix) : '';
		$cn_default_cip[$lang] = cn_option('cn_default_cip', $lang_prefix) ? cn_option('cn_default_cip', $lang_prefix) : '';
		$cn_cip_optional_passport[$lang] = cn_option('cn-cip-optional-passport', $lang_prefix) ? cn_option('cn-cip-optional-passport', $lang_prefix) : 0;

		$cn_not_found_result_flight[$lang] = cn_option('not-found-result-flight', $lang_prefix) ? cn_option('not-found-result-flight', $lang_prefix) : '';
		$cn_not_found_result_hotel[$lang] = cn_option('not-found-result-hotel', $lang_prefix) ? cn_option('not-found-result-hotel', $lang_prefix) : '';
		$cn_not_found_result_flightplushotel[$lang] = cn_option('not-found-result-flightplushotel', $lang_prefix) ? cn_option('not-found-result-flightplushotel', $lang_prefix) : '';
		$cn_not_found_result_tour[$lang] = cn_option('not-found-result-tour', $lang_prefix) ? cn_option('not-found-result-tour', $lang_prefix) : '';
		$cn_not_found_result_package[$lang] = cn_option('not-found-result-package', $lang_prefix) ? cn_option('not-found-result-package', $lang_prefix) : '';
		$cn_not_found_result_cip[$lang] = cn_option('not-found-result-cip', $lang_prefix) ? cn_option('not-found-result-cip', $lang_prefix) : '';
		$cn_not_found_result_insurance[$lang] = cn_option('not-found-result-insurance', $lang_prefix) ? cn_option('not-found-result-insurance', $lang_prefix) : '';




		$menu_items = [];
		$menu_items_count = cn_option('cn_menu_items', $lang_prefix);
		if ($menu_items_count) {
			$counter = 0;
			while ($counter < $menu_items_count) {
				$menu_items[] = [
					'title' => cn_option('cn_menu_items_' . $counter . '_cn_title', $lang_prefix),
					'link' => cn_option('cn_menu_items_' . $counter . '_cn_link', $lang_prefix)
				];
				$counter++;
			}
		}

		/* $loading_settings[$lang] = [
			'flight' => [
				'text' => cn_option('cn-flight-loading-text', $lang_prefix),
				'img' => wp_get_attachment_image_url(cn_option('cn-flight-loading-img', $lang_prefix), 'full'),
			],
			'hotel' => [
				'text' => cn_option('cn-hotel-loading-text', $lang_prefix),
				'img' => wp_get_attachment_image_url(cn_option('cn-hotel-loading-img', $lang_prefix), 'full'),
			],
			'flightAndHotel' => [
				'text' => cn_option('cn-fph-loading-text', $lang_prefix),
				'img' => wp_get_attachment_image_url(cn_option('cn-fph-loading-img', $lang_prefix), 'full'),
			],
		]; */

		$pwa[$lang] = [
			'menuBanner' => wp_get_attachment_image_url(cn_option('cn_menu_banner', $lang_prefix), 'full'),
			'homepageBanners' => [
				0 => [
					'banner' => wp_get_attachment_image_url(cn_option('cn_pwa_banner1', $lang_prefix), 'full'),
					'url' => cn_option('cn_pwa_banner_link1', $lang_prefix)
				],
				1 => [
					'banner' => wp_get_attachment_image_url(cn_option('cn_pwa_banner2', $lang_prefix), 'full'),
					'url' => cn_option('cn_pwa_banner_link2', $lang_prefix)
				]
			],
			'socialUrls' => $social_urls,
			'menuItems' => $menu_items
		];
		$default_currency[$lang] = cn_option('cn_default_currency', $lang_prefix) ? cn_option('cn_default_currency', $lang_prefix) : null;
		$menu_show_type[$lang] = cn_option('cn-menu-show-type', $lang_prefix) ? cn_option('cn-menu-show-type', $lang_prefix) : 'default';
		$flights_show_type_b2c[$lang] = cn_option('cn-flights-show-type-b2c', $lang_prefix) ? cn_option('cn-flights-show-type-b2c', $lang_prefix) : 'simple';
		$flights_show_type_b2b[$lang] = cn_option('cn-flights-show-type-b2b', $lang_prefix) ? cn_option('cn-flights-show-type-b2b', $lang_prefix) : 'simple';
		$flights_show_type_admin[$lang] = cn_option('cn-flights-show-type-admin', $lang_prefix) ? cn_option('cn-flights-show-type-admin', $lang_prefix) : 'simple';
		$flights_show_type_counter[$lang] = cn_option('cn-flights-show-type-counter', $lang_prefix) ? cn_option('cn-flights-show-type-counter', $lang_prefix) : 'simple';
		$display_registration_date[$lang] = cn_option('display-registration-date', $lang_prefix) ? cn_option('display-registration-date', $lang_prefix) : 'both';
		$class_cabin_in_flight[$lang] = cn_option('cn_class_cabin_in_flight', $lang_prefix) ? cn_option('cn_class_cabin_in_flight', $lang_prefix) : null;
		$hide_suppliers_counter[$lang] = cn_option('cn-hide-suppliers-counter', $lang_prefix) ? true : false;
		$hide_suppliers_admin[$lang] = cn_option('cn-hide-suppliers-admin', $lang_prefix) ? true : false;

		$hide_logo_contract_report[$lang] = cn_option('hide-logo-contract-report', $lang_prefix) ? true : false;

		$mobile_codes[$lang] = cn_option('cn_mobile_codes', $lang_prefix) ? cn_option('cn_mobile_codes', $lang_prefix) : null;
		$default_mobile_code[$lang] = cn_option('cn_default_mobile_code', $lang_prefix) ? cn_option('cn_default_mobile_code', $lang_prefix) : null;

		$default_nationality[$lang] = cn_option('cn_default_nationality', $lang_prefix) ? cn_option('cn_default_nationality', $lang_prefix) : null;
		$hide_close_flight[$lang] = cn_option('cn-hide-close-flight', $lang_prefix) ? true : false;
		$hide_zero_price[$lang] = cn_option('cn-hide-zero-price', $lang_prefix) ? true : false;

		$hide_wallet[$lang] = cn_option('cn-hide-wallet', $lang_prefix) ? true : false;
		$hide_credit[$lang] = cn_option('cn-hide-credit', $lang_prefix) ? true : false;
		$hide_bank[$lang] = cn_option('cn-hide-bank', $lang_prefix) ? true : false;

		$hide_charter_prices[$lang] = cn_option('cn_hide_charter_prices') ? true : false;
		$hide_system_prices[$lang] = cn_option('cn_hide_system_prices') ? true : false;

		//airlins settings
		$filter_subsystems[$lang] =cn_option('cn-filter-subsystems', $lang_prefix) ? true : false;

		$show_alert_register[$lang] = cn_option('cn-show-alert-register', $lang_prefix) ? true : false;
		
		$show_citizens_checkbox[$lang] = cn_option('cn-show-citizens-checkbox', $lang_prefix) ? true : false;


		
		// wp_die(citynet_print_r($social_urls));
	}
	// End languages loop

	//$mobile_codes  = get_field('cn_mobile_codes', 'option');
	$flight_routes = [];

	/** @var wpdb $wpdb WP Database */
	global $wpdb;
	$routes_query = "SELECT `option_name` AS `name`, `option_value` AS `iata` FROM {$wpdb->prefix}options WHERE 
	(`option_name` LIKE 'options%_cn_flight-route_%_cn_origin' OR `option_name` LIKE 'options%_cn_flight-route_%_cn_destination') ORDER BY `option_id`";
	$routes_records = $wpdb->get_results($routes_query, ARRAY_A);
	if ($routes_records) :
		$i = 0;
		while ($i < count($routes_records) - 1) :
			//get route language
			$matches = [];
			preg_match('/options_?(\w*)_cn_flight-route_\d+_cn_\D*/', $routes_records[$i]['name'], $matches);
			// $route_lang = $matches[1]? $matches[1] : $default_lang;
			$route_lang = $default_lang;

			//push route in related language list
			if (!isset($flight_routes[$route_lang])) :
				$flight_routes[$route_lang] = [];
			endif;
			$flight_routes[$route_lang][] = [
				'route' =>  $routes_records[$i]['iata'] . '-' . $routes_records[$i + 1]['iata']
			];

			//go to next route
			$i += 2;
		endwhile;
	endif;


	$routes_query = "SELECT `option_name` AS `name`, `option_value` AS `val` FROM {$wpdb->prefix}options WHERE 
	`option_name` LIKE 'options%_cn_flight-route_%_cn_search' ORDER BY `option_id`";
	$routes_records_search = $wpdb->get_results($routes_query, ARRAY_A);
	if ($routes_records_search) {
		$i = 0;
		while ($i < count($routes_records_search)) :
			$route_lang = $default_lang;

			//push route in related language list
			if (!isset($flight_routes[$route_lang])) :
				$flight_routes[$route_lang] = [];
			endif;
			$flight_routes[$route_lang][$i]['show'] = (int)$routes_records_search[$i]['val'];

			//go to next route
			$i += 1;
		endwhile;
	} else {
		$i = 0;
		for ($j = 0; $j < count($routes_records); $j += 2) {
			$flight_routes[$route_lang][$i]['show'] = 1;
			$i += 1;
		}
	}

	$org_id = (int)cn_option('cn_org-id', '') ? (int)cn_option('cn_org-id', '') : null;
	$base_url = cn_option('cn_baseurl', '');

	$inventory_id = (int)get_field('cn_org-inventory-id', 'option') ? (int)get_field('cn_org-inventory-id', 'option') : null;
	$plugin_data = get_plugin_data(__FILE__);
	$plugin_version = $plugin_data['Version'];

	return [
		'baseUrl'		   => get_home_url(null, '/'),
		'siteName'         => get_bloginfo('name'),
		'agencyPhone'      =>  $agency_tel,
		'agencyPhoneTxt'      =>  $agency_tel_txt,
		'siteAddress'      => home_url(),
		'siteLanguage'     => get_field('cn_site_lang', 'option') ? get_field('cn_site_lang', 'option') : 'fa',
		'contractsByTravel'     => get_field('cn-contracts-by-travel', 'option') ? true : false,
		'selectedServices' => $selected_services,
		'classCabinInFlight' => $class_cabin_in_flight,
		'seoRoutes'        => $flight_routes,
		'seoCities'    	=> $cities_for_seo,
		'seoHotels'    	=> $hotels_for_seo,
		'panelPages'     => $pages_with_panel,
		'mostVisitedAirports'    	=> [
			'items' => $most_visited_airports,
			'cols' => $most_visited_airports_cols
		],
		'mostVisitedCountries' => $most_visited_countries,
		'defaultCity' => $cn_airport_flight,
		'defaultHotel' => $cn_default_hotel,
		'defaultCip' => $cn_default_cip,
		'cipOptionalPassport' => $cn_cip_optional_passport,
		'notFoundResult' => [
			'flight' =>  $cn_not_found_result_flight,
			'hotel' => $cn_not_found_result_hotel,
			'flightplushotel' => $cn_not_found_result_flightplushotel,
			'tour' => $cn_not_found_result_tour,
			'package' => $cn_not_found_result_package,
			'cip' => $cn_not_found_result_cip,
			'insurance' => $cn_not_found_result_insurance,
		],
		'mostVisitedCities'    	=> [
			'items' => $most_visited_cities,
			'cols' => $most_visited_cities_cols
		],
		'loginInfo'        => $auth_info,
		'colors'           => $colors,
		'datepickerLocales'           => $datepicker_locales,
		// 'loadingSettings'  => $loading_settings,
		'widgetTheme'      => $themes,
		'hasTrackOrder'    => get_field('cn_tour_track_order', 'option') ? get_field('cn_tour_track_order', 'option') : 0,
		'hideChargeCreditMenu'    => get_field('cn-hide-charge-credit-menu', 'option') ? get_field('cn-hide-charge-credit-menu', 'option') : 0,
		'hideEditProfileMenu'    => get_field('cn-hide-edit-profile-menu', 'option') ? get_field('cn-hide-edit-profile-menu', 'option') : 0,
		'showTrackOrderBtn'    => get_field('cn_show_track_order_btn', 'option') ? get_field('cn_show_track_order_btn', 'option') : false,
		'cnSiteUrlAlias'    => get_field('cn_site_url_alias', 'option') ? get_field('cn_site_url_alias', 'option') : false,
		'cipManifestDateType'    => get_field('cn-cip-manifest-date-type', 'option') ? (int)get_field('cn-cip-manifest-date-type', 'option')  : 0,
		'cipVoucherPriceEdit'    => (int)get_field('cn-cip-voucher-price-edit', 'option'),
		'signUpOptionalText'    => cn_option('cn-optional-b2b-signup-txt', '') ? cn_option('cn-optional-b2b-signup-txt', '') : '',
		'signUpOptionalTextSec'    => cn_option('cn-optional-b2b-signup-txt-2', '') ? cn_option('cn-optional-b2b-signup-txt-2', '') : '',
		'showAlertRegister'    => $show_alert_register,
		'hideCharterPrices' => $hide_charter_prices,
		'hideSystemyPrices' => $hide_system_prices,
		'menuShowType'   => $menu_show_type,
		'flightsShowTypeB2b' => $flights_show_type_b2b,
		'flightsShowTypeB2c' => $flights_show_type_b2c,
		'flightsShowTypeAdmin' => $flights_show_type_admin,
		'flightsShowTypeCounter' => $flights_show_type_counter,
		'displayRegistrationDate' => $display_registration_date,
		'hideFlightTypeLabel' => $hide_flight_type_label,
		'headerMenu' 	   => $header_menu_settings,
		'mobileCodes' 	   => $mobile_codes,
		'defaultMobileCode' 	   => $default_mobile_code,
		'defaultNationality' 	   => $default_nationality,
		'hideCloseFlight' => $hide_close_flight,
		'showCitizensCheckbox' => $show_citizens_checkbox,
		'hideZeroPriceInTicket' => 	$hide_zero_price,
		'googleCaptcha'    => (get_field('cn_captcha', 'option') == 'on') ? get_field('cn_site_key', 'option') : null,
		'orgId' 		   => $org_id,
		'baseUrl' 		   => $base_url,
		'inventoryId'		=> $inventory_id,
		'defaultCurrency'  => $default_currency,
		'siteLangs'  => $site_langs,
		'hotelsSortkey' 	   => $hotels_sortkey,
		'pwa' 			   => $pwa,
		'version' 			   => $plugin_version,
		'hideSuppliersCounter' => $hide_suppliers_counter,
		'hideSuppliersAdmin' => $hide_suppliers_admin,
		'hideLogoContractReport' => $hide_logo_contract_report,
		'peymentedMethod' => [
			'hideWallet' => $hide_wallet,
			'hideCredit' => $hide_credit,
			'hideBank' => $hide_bank,
		],
		'airlineSettings' => [
			'filterSubsystems' => $filter_subsystems,
		]
	];
}

//disable slug edit on plugin created pages
add_filter('get_sample_permalink_html', 'cn_hide_permalinks', 10, 2);
function cn_hide_permalinks($return, $post_ID)
{
	$cn_pages    = get_option('citynet_pages_ids');
	$cn_page_ids = explode(',', $cn_pages);
	if (in_array($post_ID, $cn_page_ids)) {
		return '';
	}
	return $return;
}

//Load template from bank page
add_filter('page_template', function ($page_template) {

	if (get_page_template_slug() == 'cn-bank-return-template.php') {
		$page_template = dirname(__FILE__) . '/app-templates/cn-bank-return-template.php';
	}else if (get_page_template_slug() == 'cn-login-with-token.php') {
		$page_template = dirname(__FILE__) . '/app-templates/cn-login-with-token.php.php';
	}
	return $page_template;
});


/**
 * Add "Bank" template to page attirbute template section.
 */
add_filter('theme_page_templates', function ($post_templates, $wp_theme, $post, $post_type) {

	$post_templates['cn-bank-return-template.php'] = 'قالب بازگشت بانک پنل سیتی نت';
	$post_templates['cn-login-with-token.php'] = 'قالب login-with-token';
	return $post_templates;
}, 10, 4);


//disable page template edit on plugin created pages
function cn_admin_body_class($classes)
{
	$cn_pages    = get_option('citynet_pages_ids');
	$cn_page_ids = explode(',', $cn_pages);
	$classes .= 'toplevel_page_citynet-settings';
	if (isset($_GET['post']) && in_array($_GET['post'], $cn_page_ids) && isset($_GET['action']) && $_GET['action'] == 'edit') {
		$classes .= ' page-attribute-hidden';
	}

	return $classes;
}
add_filter('admin_body_class', 'cn_admin_body_class');
function cn_plugin_meta_links($links, $file)
{
	if ($file === 'citynet/citynet.php') {
		$links[] = '<a href="' . admin_url() . '/admin.php?page=citynet-setting" title="' . __('Setting Page', 'citynet_plugin') . '">' . __('Setting Page', 'citynet_plugin') . '</a>';
	}
	return $links;
}
add_filter('plugin_row_meta', 'cn_plugin_meta_links', 10, 2);

// Copy logo from acf settings to dir : reservation-logo/logo.png
function cn_get_image_path($attachment_id, $size = 'full')
{
	$file = get_attached_file($attachment_id, true);
	if (empty($size) || $size === 'full' || strtolower(pathinfo($file, PATHINFO_EXTENSION)) == 'svg') {
		// for the original size get_attached_file is fine
		return realpath($file);
	}
	if (!wp_attachment_is_image($attachment_id)) {
		return false; // the id is not referring to a media
	}
	$info = image_get_intermediate_size($attachment_id, $size);
	if (!is_array($info) || !isset($info['file'])) {
		return false; // probably a bad size argument
	}

	return realpath(str_replace(wp_basename($file), $info['file'], $file));
}
add_action('updated_option', function ($option_name, $old_value, $option_value) {
	if ($option_name == 'options_cn_logo') :
		$logo_curr_address = $option_value ? cn_get_image_path($option_value, 'full') : $option_value;
		if ($logo_curr_address) {
			$logo_new_dir = ABSPATH . 'reservation-logo/';
			if (!file_exists($logo_new_dir)) {
				mkdir($logo_new_dir, 0755, true);
			}
			copy($logo_curr_address, $logo_new_dir . 'logo.png');
		}
	endif;

	if ($option_name == 'options_cn_footer') :
		$logo_curr_address = $option_value ? cn_get_image_path($option_value, 'full') : $option_value;
		if ($logo_curr_address) {
			$logo_new_dir = ABSPATH . 'reservation-logo/';
			if (!file_exists($logo_new_dir)) {
				mkdir($logo_new_dir, 0755, true);
			}
			copy($logo_curr_address, $logo_new_dir . 'footer.png');
		}
	endif;

	if (cn_is_multilang_active()) {
		global $sitepress;
		$other_langs = [];
		$current_lang = ICL_LANGUAGE_CODE;
		$my_default_lang = apply_filters('wpml_default_language', NULL);
		//citynet_print_r($my_default_lang );
		$langs = cn_get_wpml_active_langs();
		foreach ($langs as $lang) {
			if ($lang != $my_default_lang) {
				$other_langs[] = $lang;
			}
		}
		if ($my_default_lang == $current_lang) {
			if ($option_name == 'options_cn_create_page') {
				if ($option_value == 1) {
					$cn_real_pages = cn_generate_real_pages();
					foreach ($cn_real_pages as $real_page) {
						// Insert the post into the database and add its id to $cn_page_ids array and check if posts with same slug exist and stop plugin activation
						$cn_same_slug_posts = get_posts(array(
							'name'           => $real_page['slug'],
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'post_status'    => 'publish',
						));

						if ($cn_same_slug_posts) {
							foreach ($cn_same_slug_posts as $cn_same_slug_post) {
								// wp_delete_post( $cn_same_slug_post->ID , false );
								if (!metadata_exists('post', $cn_same_slug_post->ID, 'cn_page')) {
									$meta_value = in_array($cn_same_slug_post->post_name, ['flight', 'hotel', 'tour', 'package', 'flightplushotel', 'insurance', 'cip']) ? 'cn_seo_page' : 'cn_not_seo_page';
									add_post_meta($cn_same_slug_post->ID, 'cn_page', $meta_value);
								}
							}
						} else {
							$cn_post = array(
								'post_title'  => $real_page['title'],
								'post_name'   => $real_page['slug'],
								'post_status' => 'publish',
								'post_author' => 1,
								'post_type'   => 'page',
								'post_content' => '[citynet]',
								'meta_input'   => array(
									'cn_page' => in_array($real_page['slug'], ['flight', 'hotel', 'tour', 'package', 'flightplushotel', 'insurance', 'cip']) ? 'cn_seo_page' : 'cn_not_seo_page',
								)
							);
							if (in_array($real_page['slug'], cn_pages_with_parent('dashboard'))) {
								$cn_post['post_parent'] = get_page_id('dashboard');
							}
							if (in_array($real_page['slug'], cn_pages_with_parent('cipmanagement'))) {
								$cn_post['post_parent'] = get_page_id('cipmanagement');
							}
							if (in_array($real_page['slug'], cn_pages_with_parent('cnpwa'))) {
								$cn_post['post_parent'] = get_page_id('cnpwa');
							}
							$cn_pages_ids[] = wp_insert_post($cn_post);
						}
					}
					add_option('citynet_pages_ids', implode(',', $cn_pages_ids));
				}
			}
		} else {
			foreach ($other_langs as $other_lang) {
				if ($option_name == 'options_' . $other_lang . '_cn_create_page') {
					if ($option_value == 1) {
						$cn_real_pages = cn_generate_real_pages();
						foreach ($cn_real_pages as $real_page) {
							if (!isset($real_page['id'])) {
								$real_page['id'] = get_page_by_path($real_page['slug'], OBJECT, 'page')->ID;
							}
							$pages[] = $real_page;
						}
						foreach ($pages as $page) {

							$trid = $sitepress->get_element_trid($page['id'], 'post_page');
							$page_id = apply_filters('wpml_object_id', $page['id'], 'page', false, $other_lang);

							if (!$page_id) {
								$other_lang_page_id = wp_insert_post([
									'post_title'   => $page['slug'],
									'post_name'    => $page['slug'] + '-citynet',
									'post_status'  => 'publish',
									'post_author'  => 1,
									'post_type'    => 'page',
									'post_content' => '[citynet]'
								]);
								$sitepress->set_element_language_details($other_lang_page_id, 'post_page', $trid, $other_lang);
								wp_update_post(array(
									'ID' => $other_lang_page_id,
									'post_name' => $page['slug'],
									'meta_input'   => array(
										'cn_page' => in_array($page['slug'], ['flight', 'hotel', 'tour', 'package', 'flightplushotel', 'insurance', 'cip']) ? 'cn_seo_page' : 'cn_not_seo_page',
									)
								));
								$slug = get_post_field('post_name', $other_lang_page_id);
								if (in_array($slug, cn_pages_with_parent('dashboard'))) {
									wp_update_post(array(
										'ID' => $other_lang_page_id,
										'post_parent' => get_page_by_path('dashboard')->ID,
									));
								}
								if (in_array($slug, cn_pages_with_parent('cipmanagement'))) {
									wp_update_post(array(
										'ID' => $other_lang_page_id,
										'post_parent' => get_page_by_path('cipmanagement')->ID,
									));
								}

								if (in_array($slug, cn_pages_with_parent('cnpwa'))) {
									wp_update_post(array(
										'ID' => $other_lang_page_id,
										'post_parent' => get_page_by_path('cnpwa')->ID,
									));
								}
							}
						}
					}
				}
			}
		}
	} else {
		if ($option_name == 'options_cn_create_page') {
			if ($option_value == 1) {
				$cn_real_pages = cn_generate_real_pages();
				//citynet_print_r($cn_real_pages);
				foreach ($cn_real_pages as $real_page) {
					// Insert the post into the database and add its id to $cn_page_ids array and check if posts with same slug exist and stop plugin activation
					$cn_same_slug_posts = get_posts(array(
						'name'           => $real_page['slug'],
						'posts_per_page' => 1,
						'post_type'      => 'page',
						'post_status'    => 'publish',
					));

					if ($cn_same_slug_posts) {
						foreach ($cn_same_slug_posts as $cn_same_slug_post) {
							// wp_delete_post( $cn_same_slug_post->ID , false );
							if (!metadata_exists('post', $cn_same_slug_post->ID, 'cn_page')) {
								$meta_value = in_array($cn_same_slug_post->post_name, ['flight', 'hotel', 'tour', 'package', 'flightplushotel', 'insurance', 'cip']) ? 'cn_seo_page' : 'cn_not_seo_page';
								add_post_meta($cn_same_slug_post->ID, 'cn_page', $meta_value);
							}
						}
					} else {
						$cn_post = array(
							'post_title'  => $real_page['title'],
							'post_name'   => $real_page['slug'],
							'post_status' => 'publish',
							'post_author' => 1,
							'post_type'   => 'page',
							'post_content' => '[citynet]',
							'meta_input'   => array(
								'cn_page' => in_array($real_page['slug'], ['flight', 'hotel', 'tour', 'package', 'flightplushotel', 'insurance', 'cip']) ? 'cn_seo_page' : 'cn_not_seo_page',
							)
						);
						if (in_array($real_page['slug'], cn_pages_with_parent('dashboard'))) {
							$cn_post['post_parent'] = get_page_id('dashboard');
						}
						if (in_array($real_page['slug'], cn_pages_with_parent('cipmanagement'))) {
							$cn_post['post_parent'] = get_page_id('cipmanagement');
						}
						if (in_array($real_page['slug'], cn_pages_with_parent('cnpwa'))) {
							$cn_post['post_parent'] = get_page_id('cnpwa');
						}
						$cn_pages_ids[] = wp_insert_post($cn_post);
					}
				}
				add_option('citynet_pages_ids', implode(',', $cn_pages_ids));
				//citynet_print_r('done');
			}
		}
	}
}, 10, 3);

//display cn_create_page for citynet user
add_filter("acf/prepare_field/name=cn_create_page", function ($field) {
	$user = wp_get_current_user();
	// hide from other user
	if (strpos($user->user_email, "@citynet.ir") == false) {
		return false;
	}
	// display just for citynet user
	return $field;
});

//display cn_baseurl for citynet user
add_filter("acf/prepare_field/name=cn_baseurl", function ($field) {
	$user = wp_get_current_user();
	// hide from other user
	if (strpos($user->user_email, "@citynet.ir") == false) {
		return false;
	}
	// display just for citynet user
	return $field;
});

function cn_settings_link($links_array, $plugin_file_name)
{

	// if you use this action hook inside main plugin file, use basename(__FILE__) to check
	if (strpos($plugin_file_name, basename(__FILE__))) {
		// we can add one more array element at the beginning with array_unshift()
		array_unshift($links_array, '<a href="' . admin_url() . 'admin.php?page=citynet-settings">' . __('Setting Page', 'citynet_plugin') . '</a>');
	}

	return $links_array;
}
add_filter('plugin_action_links', 'cn_settings_link', 10, 2);

//update checker
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'http://plugin.citynet.ir/json/plugin.json',
	__FILE__, //Full path to the main plugin file or functions.php.
	'citynet'
);
//edit post row actions and disable quick edit for created plugin pages
function cn_post_row_actions($actions, $post)
{
	$cn_pages    = get_option('citynet_pages_ids');
	$cn_page_ids = explode(',', $cn_pages);
	if (in_array($post->ID, $cn_page_ids)) {
		unset($actions['inline hide-if-no-js']);
	}
	return $actions;
}
add_filter('page_row_actions', 'cn_post_row_actions', 10, 2);
function cn_create_seo_page()
{
	$current_lang = '';
	if (cn_is_multilang_active()) {
		global $sitepress;
		$current_lang = ICL_LANGUAGE_CODE;
		$default_lang = citynet_get_wpml_default_lang();
		$current_lang = ($current_lang == $default_lang) ? '' : '_' . $current_lang;
	}

	$flight_routes_count = get_option('options' . $current_lang . '_cn_flight-route');
	$flight_seo_page_ids = [];
	if ($flight_routes_count) {
		$counter        = 0;
		$other_langs = [];
		if (cn_is_multilang_active()) {
			$langs = cn_get_wpml_active_langs();
			foreach ($langs as $lang) {
				if ($lang != ICL_LANGUAGE_CODE) {
					$other_langs[] = $lang;
				}
			}
		}
		while ($counter < $flight_routes_count) {
			$current_route = get_option('options' . $current_lang . '_cn_flight-route_' . $counter . '_cn_origin')
				. '-' .
				get_option('options' . $current_lang . '_cn_flight-route_' . $counter . '_cn_destination');
			if (cn_is_multilang_active()) {
				$sitepress->switch_lang(ICL_LANGUAGE_CODE);
			}
			$cn_same_seo_flight_posts = get_posts(array(
				'name'           => $current_route,
				'posts_per_page' => 1,
				'post_type'      => 'any',
				'post_status'    => 'publish'
			));
			$flight_page_id = cn_get_flight_page_id();
			if (!$cn_same_seo_flight_posts) {
				$flight_seo_page_id = wp_insert_post([
					'post_title'   => $current_route,
					'post_name'    => $current_route,
					'post_status'  => 'publish',
					'post_author'  => 1,
					'post_type'    => 'page',
					'post_parent'  => $flight_page_id,
					'post_content' => '[citynet]'
				]);

				if ($other_langs) {
					// Get original post's translation ID
					$trid = $sitepress->get_element_trid($flight_seo_page_id, 'post_page');

					foreach ($other_langs as $other_lang) {
						$flight_page_id = apply_filters('wpml_object_id', $flight_page_id, 'page', false, $other_lang);
						$sec_flight_seo_page_id = wp_insert_post([
							'post_title'   => $current_route,
							'post_name'    => $current_route . '-citynet',
							'post_status'  => 'publish',
							'post_author'  => 1,
							'post_type'    => 'page',
							'post_parent'  => $flight_page_id,
							'post_content' => '[citynet]'
						]);

						// Tell WPML the second post is a translation of the first
						$sitepress->set_element_language_details($sec_flight_seo_page_id, 'post_page', $trid, $other_lang);
						wp_update_post(array(
							'ID' => $sec_flight_seo_page_id,
							'post_name' => $current_route
						));
						array_push($flight_seo_page_ids, $sec_flight_seo_page_id);
					}
				}
				array_push($flight_seo_page_ids, $flight_seo_page_id);
			}
			$counter++;
		}
		$cn_pages     = get_option('citynet_pages_ids');
		$cn_pages_ids = explode(',', $cn_pages);
		foreach ($flight_seo_page_ids as $flight_seo_page_id) {
			array_push($cn_pages_ids, $flight_seo_page_id);
		}
		update_option('citynet_pages_ids', implode(',', $cn_pages_ids));
	}
}
add_action('wp_loaded', 'cn_create_seo_page');
function cn_scripts_panel()
{

	$plugin_path_real = plugin_dir_path(__FILE__);
	if (get_field('captcha', 'option') == "on") {
		wp_enqueue_script('captcha', 'https://www.google.com/recaptcha/api.js?hl=fa', [], null, true);
	}
	wp_enqueue_script('citynet-xlsx',   plugin_dir_url(__FILE__) . "assets/other/xlsx.full.min.js", [], filemtime($plugin_path_real . "assets/other/xlsx.full.min.js"), true);
	
	
	wp_enqueue_style("citynet-chunk-vendor", plugin_dir_url(__FILE__) . "public/style/desk/chunk-vendors.css", null, filemtime($plugin_path_real . "public/style/desk/chunk-vendors.css"));

	wp_register_script("citynet-chunk-js", plugin_dir_url(__FILE__) . "public/style/desk/chunk-desktop.js", null, filemtime($plugin_path_real . "public/style/desk/chunk-desktop.js"),   true);
	wp_enqueue_style("citynet-chunk-css", plugin_dir_url(__FILE__) . "public/style/desk/chunk-desktop.css", null, filemtime($plugin_path_real . "public/style/desk/chunk-desktop.css"));
	
	
	
	if (!wp_is_mobile()) {


		wp_enqueue_style("ds-panel-style", plugin_dir_url(__FILE__) . "public/style/desk/panel-style.css", null, filemtime($plugin_path_real . "public/style/desk/panel-style.css"));
		
		wp_enqueue_script("cn-app-js", plugin_dir_url(__FILE__) . "public/js/app.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/app.js"),   true);
	    wp_enqueue_style("cn-ds-app-css", plugin_dir_url(__FILE__) . "public/css/app.css", null, filemtime($plugin_path_real . "public/css/app.css"));
		
		wp_register_script("excel-import-js", plugin_dir_url(__FILE__) . "public/js/excel-import.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/excel-import.js"),   true);
		wp_enqueue_style("excel-import-css", plugin_dir_url(__FILE__) . "public/css/excel-import.css", null, filemtime($plugin_path_real . "public/css/excel-import.css"));

		wp_enqueue_script("ds-citynet-goTo", plugin_dir_url(__FILE__) . "public/js/goTo.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/goTo.js"),   true);
		

		if ( strpos( $_SERVER['REQUEST_URI'], 'flight' ) !== false ) {
			wp_enqueue_script("ds-cn-Flight-js", plugin_dir_url(__FILE__) . "public/js/Flight.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/Flight.js"),   true);
			wp_enqueue_style("ds-cn-Flight-css", plugin_dir_url(__FILE__) . "public/css/Flight.css", null, filemtime($plugin_path_real . "public/css/Flight.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'hotel' ) !== false ) {
			wp_enqueue_script("ds-cn-Hotel-js", plugin_dir_url(__FILE__) . "public/js/Hotel.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/Hotel.js"),   true);
			wp_enqueue_style("ds-cn-Hotel-css", plugin_dir_url(__FILE__) . "public/css/Hotel.css", null, filemtime($plugin_path_real . "public/css/Hotel.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'tour' ) !== false  ) {
			wp_enqueue_script("ds-cn-tour-js", plugin_dir_url(__FILE__) . "public/js/tour.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/tour.js"),   true);
			wp_enqueue_style("ds-cn-tour-css", plugin_dir_url(__FILE__) . "public/css/tour.css", null, filemtime($plugin_path_real . "public/css/tour.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'flightplushotel' ) !== false || strpos( $_SERVER['REQUEST_URI'], 'package' ) !== false  ) {
			wp_enqueue_script("ds-cn-FlightPlusHotel-js", plugin_dir_url(__FILE__) . "public/js/FlightPlusHotel.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/FlightPlusHotel.js"),   true);
			wp_enqueue_style("ds-cn-FlightPlusHotel-css", plugin_dir_url(__FILE__) . "public/css/FlightPlusHotel.css", null, filemtime($plugin_path_real . "public/css/FlightPlusHotel.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'visa' ) !== false || strpos( $_SERVER['REQUEST_URI'], 'visa' ) !== false  ) {
			wp_enqueue_script("ds-cn-visa-js", plugin_dir_url(__FILE__) . "public/js/visa.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/visa.js"),   true);
			wp_enqueue_style("ds-cn-visa-css", plugin_dir_url(__FILE__) . "public/css/visa.css", null, filemtime($plugin_path_real . "public/css/visa.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'linkreports' ) !== false   ) {
			wp_enqueue_script("ds-cn-linkReports-js", plugin_dir_url(__FILE__) . "public/js/linkReports.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/linkReports.js"),   true);
			wp_enqueue_style("ds-cn-linkReports-css", plugin_dir_url(__FILE__) . "public/css/linkReports.css", null, filemtime($plugin_path_real . "public/css/linkReports.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'ledgersrequests' ) !== false   ) {
			wp_enqueue_script("ds-cn-ledgersRequests-js", plugin_dir_url(__FILE__) . "public/js/ledgersRequests.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/ledgersRequests.js"),   true);
			wp_enqueue_style("ds-cn-ledgersRequests-css", plugin_dir_url(__FILE__) . "public/css/ledgersRequests.css", null, filemtime($plugin_path_real . "public/css/ledgersRequests.css"));
		}
		
		if ( strpos( $_SERVER['REQUEST_URI'], 'bankreports' ) !== false   ) {
			wp_enqueue_script("ds-cn-bankReports-js", plugin_dir_url(__FILE__) . "public/js/bankReports.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/bankReports.js"),   true);
			wp_enqueue_style("ds-cn-bankReports-css", plugin_dir_url(__FILE__) . "public/css/bankReports.css", null, filemtime($plugin_path_real . "public/css/bankReports.css"));
		}
		
		if ( strpos( $_SERVER['REQUEST_URI'], 'cip' ) !== false ) {
			wp_enqueue_script("ds-cn-cip-js", plugin_dir_url(__FILE__) . "public/js/cip.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/cip.js"),   true);
			wp_enqueue_style("ds-cn-cip-css", plugin_dir_url(__FILE__) . "public/css/cip.css", null, filemtime($plugin_path_real . "public/css/cip.css"));
		}


		if ( strpos( $_SERVER['REQUEST_URI'], 'insurance' ) !== false ) {
			wp_enqueue_script("ds-cn-insurance-js", plugin_dir_url(__FILE__) . "public/js/insurance.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/insurance.js"),   true);
			wp_enqueue_style("ds-cn-insurance-css", plugin_dir_url(__FILE__) . "public/css/insurance.css", null, filemtime($plugin_path_real . "public/css/insurance.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'cipprint' ) !== false ) {
			wp_enqueue_script("ds-cn-cipprint-js", plugin_dir_url(__FILE__) . "public/js/cipprint.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/cipprint.js"),   true);
			wp_enqueue_style("ds-cn-cipprint-css", plugin_dir_url(__FILE__) . "public/css/cipprint.css", null, filemtime($plugin_path_real . "public/css/cipprint.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'ticket' ) !== false ) {
			wp_enqueue_script("ds-cn-TwoPhaseTicket-js", plugin_dir_url(__FILE__) . "public/js/TwoPhaseTicket.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/TwoPhaseTicket.js"),   true);
			wp_enqueue_style("ds-cn-TwoPhaseTicket-css", plugin_dir_url(__FILE__) . "public/css/TwoPhaseTicket.css", null, filemtime($plugin_path_real . "public/css/TwoPhaseTicket.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'newcipprint' ) !== false ) {
			wp_enqueue_script("ds-cn-newcipprint-js", plugin_dir_url(__FILE__) . "public/js/newcipprint.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/newcipprint.js"),   true);
			wp_enqueue_style("ds-cn-newcipprint-css", plugin_dir_url(__FILE__) . "public/css/newcipprint.css", null, filemtime($plugin_path_real . "public/css/newcipprint.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'boardpassengers' ) !== false ) {
			wp_enqueue_script("ds-cn-BoardPassengers-js", plugin_dir_url(__FILE__) . "public/js/BoardPassengers.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/BoardPassengers.js"),   true);
			wp_enqueue_style("ds-cn-BoardPassengers-css", plugin_dir_url(__FILE__) . "public/css/BoardPassengers.css", null, filemtime($plugin_path_real . "public/css/BoardPassengers.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'errorlogs' ) !== false ) {
			wp_enqueue_script("ds-cn-errorLogs-js", plugin_dir_url(__FILE__) . "public/js/errorLogs.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/errorLogs.js"),   true);
			wp_enqueue_style("ds-cn-errorLogs-css", plugin_dir_url(__FILE__) . "public/css/errorLogs.css", null, filemtime($plugin_path_real . "public/css/errorLogs.css"));
		}


		if ( strpos( $_SERVER['REQUEST_URI'], 'redirect' ) !== false ) {
			wp_enqueue_script("ds-cn-Incoming-js", plugin_dir_url(__FILE__) . "public/js/Incoming.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/Incoming.js"),   true);
			wp_enqueue_style("ds-cn-Incoming-css", plugin_dir_url(__FILE__) . "public/css/Incoming.css", null, filemtime($plugin_path_real . "public/css/Incoming.css"));
		}

		if (  strpos( $_SERVER['REQUEST_URI'], 'book' ) !== false ) {
			wp_enqueue_script("ds-cn-deepLinkIncoming-js", plugin_dir_url(__FILE__) . "public/js/deepLinkIncoming.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/deepLinkIncoming.js"),   true);
			wp_enqueue_style("ds-cn-deepLinkIncoming-css", plugin_dir_url(__FILE__) . "public/css/deepLinkIncoming.css", null, filemtime($plugin_path_real . "public/css/deepLinkIncoming.css"));
		}

		if (  strpos( $_SERVER['REQUEST_URI'], 'panelreturn' ) !== false ) {
			wp_enqueue_script("ds-cn-returnBank-js", plugin_dir_url(__FILE__) . "public/js/returnBank.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/returnBank.js"),   true);
			wp_enqueue_style("ds-cn-returnBank-css", plugin_dir_url(__FILE__) . "public/css/returnBank.css", null, filemtime($plugin_path_real . "public/css/returnBank.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'contracts' ) !== false ) {
			wp_enqueue_script("ds-cn-contracts-js", plugin_dir_url(__FILE__) . "public/js/contracts.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/contracts.js"),   true);
			wp_enqueue_style("ds-cn-contracts-css", plugin_dir_url(__FILE__) . "public/css/contracts.css", null, filemtime($plugin_path_real . "public/css/contracts.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'contractsHTML' ) !== false ) {
			wp_enqueue_script("ds-cn-contractsHTML-js", plugin_dir_url(__FILE__) . "public/js/contractsHTML.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/contractsHTML.js"),   true);
			wp_enqueue_style("ds-cn-contractsHTML-css", plugin_dir_url(__FILE__) . "public/css/contractsHTML.css", null, filemtime($plugin_path_real . "public/css/contractsHTML.css"));
		}
		if (  strpos( $_SERVER['REQUEST_URI'], 'purchases' ) !== false ) {
			wp_enqueue_script("ds-cn-purchases-js", plugin_dir_url(__FILE__) . "public/js/purchases.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/purchases.js"),   true);
			wp_enqueue_style("ds-cn-purchases-css", plugin_dir_url(__FILE__) . "public/css/purchases.css", null, filemtime($plugin_path_real . "public/css/purchases.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'treasury' ) !== false ) {
			wp_enqueue_script("ds-cn-treasury-js", plugin_dir_url(__FILE__) . "public/js/treasury.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/treasury.js"),   true);
			wp_enqueue_style("ds-cn-treasury-css", plugin_dir_url(__FILE__) . "public/css/treasury.css", null, filemtime($plugin_path_real . "public/css/treasury.css"));
		}
		if (  strpos( $_SERVER['REQUEST_URI'], 'purchasesHTML' ) !== false ) {
			wp_enqueue_script("ds-cn-purchasesHTML-js", plugin_dir_url(__FILE__) . "public/js/purchasesHTML.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/purchasesHTML.js"),   true);
			wp_enqueue_style("ds-cn-purchasesHTML-css", plugin_dir_url(__FILE__) . "public/css/purchasesHTML.css", null, filemtime($plugin_path_real . "public/css/purchasesHTML.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'editProfile' ) !== false ) {
			wp_enqueue_script("ds-cn-editProfile-js", plugin_dir_url(__FILE__) . "public/js/editProfile.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/editProfile.js"),   true);
			wp_enqueue_style("ds-cn-editProfile-css", plugin_dir_url(__FILE__) . "public/css/editProfile.css", null, filemtime($plugin_path_real . "public/css/editProfile.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'trackOrder' ) !== false ) {
			wp_enqueue_script("ds-cn-trackOrder-js", plugin_dir_url(__FILE__) . "public/js/trackOrder.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/trackOrder.js"),   true);
			wp_enqueue_style("ds-cn-trackOrder-css", plugin_dir_url(__FILE__) . "public/css/trackOrder.css", null, filemtime($plugin_path_real . "public/css/trackOrder.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'baseinfo' ) !== false ) {
			wp_enqueue_script("ds-cn-BaseInfo-js", plugin_dir_url(__FILE__) . "public/js/BaseInfo.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/BaseInfo.js"),   true);
			wp_enqueue_style("ds-cn-BaseInfo-css", plugin_dir_url(__FILE__) . "public/css/BaseInfo.css", null, filemtime($plugin_path_real . "public/css/BaseInfo.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'userTreasury' ) !== false ) {
			wp_enqueue_script("ds-cn-userTreasury-js", plugin_dir_url(__FILE__) . "public/js/userTreasury.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/duserTreasury.js"),   true);
			wp_enqueue_style("ds-cn-userTreasury-css", plugin_dir_url(__FILE__) . "public/css/userTreasury.css", null, filemtime($plugin_path_real . "public/css/userTreasury.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'currencyconvert' ) !== false ) {
			wp_enqueue_script("ds-cn-currencyConvert-js", plugin_dir_url(__FILE__) . "public/js/currencyConvert.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/currencyConvert.js"),   true);
			wp_enqueue_style("ds-cn-currencyConvert-css", plugin_dir_url(__FILE__) . "public/css/currencyConvert.css", null, filemtime($plugin_path_real . "public/css/currencyConvert.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'printTicket' ) !== false ) {
			wp_enqueue_script("ds-cn-printTicket-js", plugin_dir_url(__FILE__) . "public/js/printTicket.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/printTicket.js"),   true);
			wp_enqueue_style("ds-cn-printTicket-css", plugin_dir_url(__FILE__) . "public/css/printTicket.css", null, filemtime($plugin_path_real . "public/css/printTicket.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'printContract' ) !== false ) {
			wp_enqueue_script("ds-cn-printContract-js", plugin_dir_url(__FILE__) . "public/js/printContract.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/printContract.js"),   true);
			wp_enqueue_style("ds-cn-printContract-css", plugin_dir_url(__FILE__) . "public/css/printContract.css", null, filemtime($plugin_path_real . "public/css/printContract.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'getpdf' ) !== false ) {
			wp_enqueue_script("ds-cn-getPdf-js", plugin_dir_url(__FILE__) . "public/js/getPdf.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/getPdf.js"),   true);
			wp_enqueue_style("ds-cn-getPdf-css", plugin_dir_url(__FILE__) . "public/css/getPdf.css", null, filemtime($plugin_path_real . "public/css/getPdf.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'financialreports' ) !== false  ) {
			wp_enqueue_script("ds-cn-financialReports-js", plugin_dir_url(__FILE__) . "public/js/financialReports.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/financialReports.js"),   true);
			wp_enqueue_style("ds-cn-financialReports-css", plugin_dir_url(__FILE__) . "public/css/financialReports.css", null, filemtime($plugin_path_real . "public/css/financialReports.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'cipfinancialreports' ) !== false ) {
			wp_enqueue_script("ds-cn-cipFinancialReports-js", plugin_dir_url(__FILE__) . "public/js/cipFinancialReports.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/cipFinancialReports.js"),   true);
			wp_enqueue_style("ds-cn-cipFinancialReports-css", plugin_dir_url(__FILE__) . "public/css/cipFinancialReports.css", null, filemtime($plugin_path_real . "public/css/cipFinancialReports.css"));
		}
		if ( strpos( $_SERVER['REQUEST_URI'], 'subsidiary' ) !== false ) {
			wp_enqueue_script("ds-cn-subsiDiary-js", plugin_dir_url(__FILE__) . "public/js/subsiDiary.js", null, filemtime($plugin_path_real . "public/js/subsiDiary.js"),   true);
			wp_enqueue_style("ds-cn-subsiDiary-css", plugin_dir_url(__FILE__) . "public/css/subsiDiary.css", null, filemtime($plugin_path_real . "public/css/subsiDiary.css"));
		}
		if (  strpos( $_SERVER['REQUEST_URI'], 'cipmanagement' ) !== false ) {
			wp_enqueue_script("ds-cn-cipManagement-js", plugin_dir_url(__FILE__) . "public/js/cipManagement.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/cipManagement.js"),   true);
			
			//manifest
			wp_enqueue_script("ds-cn-cipManifest-js", plugin_dir_url(__FILE__) . "public/js/cipManifest.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/cipManifest.js"),   true);
			wp_enqueue_style("ds-cn-cipManifest-css", plugin_dir_url(__FILE__) . "public/css/cipManifest.css", null, filemtime($plugin_path_real . "public/css/cipManifest.css"));

			//transfers
			wp_enqueue_script("ds-cn-cipTransfers-js", plugin_dir_url(__FILE__) . "public/js/cipTransfers.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/cipTransfers.js"),   true);
			wp_enqueue_style("ds-cn-cipTransfers-css", plugin_dir_url(__FILE__) . "public/css/cipTransfers.css", null, filemtime($plugin_path_real . "public/css/cipTransfers.css"));

			//suites
			wp_enqueue_script("ds-cn-cipSuites-js", plugin_dir_url(__FILE__) . "public/js/cipSuites.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/cipSuites.js"),   true);
			wp_enqueue_style("ds-cn-cipSuites-css", plugin_dir_url(__FILE__) . "public/css/cipSuites.css", null, filemtime($plugin_path_real . "public/css/cipSuites.css"));

			//flights
			wp_enqueue_script("ds-cn-cipFlights-js", plugin_dir_url(__FILE__) . "public/js/cipFlights.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/cipFlights.js"),   true);
			wp_enqueue_style("ds-cn-cipFlights-css", plugin_dir_url(__FILE__) . "public/css/cipFlights.css", null, filemtime($plugin_path_real . "public/css/cipFlights.css"));

			//operationsreport
			wp_enqueue_script("ds-cn-operationsReport-js", plugin_dir_url(__FILE__) . "public/js/operationsReport.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/operationsReport.js"),   true);
			wp_enqueue_style("ds-cn-operationsReport-css", plugin_dir_url(__FILE__) . "public/css/operationsReport.css", null, filemtime($plugin_path_real . "public/css/operationsReport.css"));

			//formflights
			wp_enqueue_script("ds-cn-formFlights-js", plugin_dir_url(__FILE__) . "public/js/formFlights.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/formFlights.js"),   true);
			wp_enqueue_style("ds-cn-formFlights-css", plugin_dir_url(__FILE__) . "public/css/formFlights.css", null, filemtime($plugin_path_real . "public/css/formFlights.css"));

			//flightsManifest
			wp_enqueue_script("ds-cn-FlightsManifest-js", plugin_dir_url(__FILE__) . "public/js/FlightsManifest.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/FlightsManifest.js"),   true);
			wp_enqueue_style("ds-cn-FlightsManifest-css", plugin_dir_url(__FILE__) . "public/css/FlightsManifest.css", null, filemtime($plugin_path_real . "public/css/FlightsManifest.css"));

			//operationsTotalReport
			wp_enqueue_script("ds-cn-OperationsTotalReport-js", plugin_dir_url(__FILE__) . "public/js/OperationsTotalReport.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/OperationsTotalReport.js"),   true);
			wp_enqueue_style("ds-cn-OperationsTotalReport-css", plugin_dir_url(__FILE__) . "public/css/OperationsTotalReport.css", null, filemtime($plugin_path_real . "public/css/OperationsTotalReport.css"));

			//flightdeclaration
			wp_enqueue_script("ds-cn-cipFlightDeclaration-js", plugin_dir_url(__FILE__) . "public/js/cipFlightDeclaration.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/cipFlightDeclaration.js"),   true);
			wp_enqueue_style("ds-cn-cipFlightDeclaration-css", plugin_dir_url(__FILE__) . "public/css/cipFlightDeclaration.css", null, filemtime($plugin_path_real . "public/css/cipFlightDeclaration.css"));
		
			//flightdeclaration
			wp_enqueue_script("ds-cn-cipFlightDeclaration-js", plugin_dir_url(__FILE__) . "public/js/cipFlightDeclaration.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/cipFlightDeclaration.js"),   true);
			wp_enqueue_style("ds-cn-cipFlightDeclaration-css", plugin_dir_url(__FILE__) . "public/css/cipFlightDeclaration.css", null, filemtime($plugin_path_real . "public/css/cipFlightDeclaration.css"));
			
			//cipList
			wp_enqueue_script("ds-cn-CipList-js", plugin_dir_url(__FILE__) . "public/js/CipList.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/CipList.js"),   true);
			wp_enqueue_style("ds-cn-CipList-css", plugin_dir_url(__FILE__) . "public/css/CipList.css", null, filemtime($plugin_path_real . "public/css/CipList.css"));

			//cipItem
			wp_enqueue_script("ds-cn-CipItem-js", plugin_dir_url(__FILE__) . "public/js/CipItem.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/CipItem.js"),   true);
			wp_enqueue_style("ds-cn-CipItem-css", plugin_dir_url(__FILE__) . "public/css/CipItem.css", null, filemtime($plugin_path_real . "public/css/CipItem.css"));

			
			//showPassenger
			wp_enqueue_script("ds-cn-ShowPassenger-js", plugin_dir_url(__FILE__) . "public/js/ShowPassenger.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/ShowPassenger.js"),   true);
			wp_enqueue_style("ds-cn-ShowPassenger-css", plugin_dir_url(__FILE__) . "public/css/ShowPassenger.css", null, filemtime($plugin_path_real . "public/css/ShowPassenger.css"));
			
		}
		if(strpos( $_SERVER['REQUEST_URI'], 'dashboard' ) !== false ){
			wp_enqueue_script("ds-cn-dashboard-js", plugin_dir_url(__FILE__) . "public/js/dashboard.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/dashboard.js"),   true);
			wp_enqueue_style("ds-cn-dashboard-css", plugin_dir_url(__FILE__) . "public/css/dashboard.css", null, filemtime($plugin_path_real . "public/css/dashboard.css"));

			//ticketReport
			wp_enqueue_script("ds-cn-ticketReport-js", plugin_dir_url(__FILE__) . "public/js/ticketReport.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/ticketReport.js"),   true);
			wp_enqueue_style("ds-cn-ticketReport-css", plugin_dir_url(__FILE__) . "public/css/ticketReport.css", null, filemtime($plugin_path_real . "public/css/ticketReport.css"));

			
			//pathdeclaration
			wp_enqueue_script("ds-cn-showpathDeclaration-js", plugin_dir_url(__FILE__) . "public/js/showpathDeclaration.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/showpathDeclaration.js"),   true);
			wp_enqueue_style("ds-cn-showpathDeclaration-css", plugin_dir_url(__FILE__) . "public/css/showpathDeclaration.css", null, filemtime($plugin_path_real . "public/css/showpathDeclaration.css"));

			//flightdeclaration
			wp_enqueue_script("ds-cn-flightDeclaration-js", plugin_dir_url(__FILE__) . "public/js/flightDeclaration.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/flightDeclaration.js"),   true);
			wp_enqueue_style("ds-cn-flightDeclaration-css", plugin_dir_url(__FILE__) . "public/css/flightDeclaration.css", null, filemtime($plugin_path_real . "public/css/flightDeclaration.css"));

			//cabindeclaration
			wp_enqueue_script("ds-cn-cabinDeclaration-js", plugin_dir_url(__FILE__) . "public/js/cabinDeclaration.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/cabinDeclaration.js"),   true);
			wp_enqueue_style("ds-cn-cabinDeclaration-css", plugin_dir_url(__FILE__) . "public/css/cabinDeclaration.css", null, filemtime($plugin_path_real . "public/css/cabinDeclaration.css"));


			//costDeclaration
			wp_enqueue_script("ds-cn-showcostDeclaration-js", plugin_dir_url(__FILE__) . "public/js/showcostDeclaration.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/showcostDeclaration.js"),   true);
			wp_enqueue_style("ds-cn-showcostDeclaration-css", plugin_dir_url(__FILE__) . "public/css/showcostDeclaration.css", null, filemtime($plugin_path_real . "public/css/showcostDeclaration.css"));

			//editFlightDeclaration
			wp_enqueue_script("ds-cn-editFlightDeclaration-js", plugin_dir_url(__FILE__) . "public/js/editFlightDeclaration.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/editFlightDeclaration.js"),   true);
			wp_enqueue_style("ds-cn-editFlightDeclaration-css", plugin_dir_url(__FILE__) . "public/css/editFlightDeclaration.css", null, filemtime($plugin_path_real . "public/css/editFlightDeclaration.css"));

			//editCabinDeclaration
			wp_enqueue_script("ds-cn-editCabinDeclaration-js", plugin_dir_url(__FILE__) . "public/js/editCabinDeclaration.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/editCabinDeclaration.js"),   true);
			wp_enqueue_style("ds-cn-editCabinDeclaration-css", plugin_dir_url(__FILE__) . "public/css/editCabinDeclaration.css", null, filemtime($plugin_path_real . "public/css/editCabinDeclaration.css"));

			//editFlight
			wp_enqueue_script("ds-cn-flightManagement-js", plugin_dir_url(__FILE__) . "public/js/flightManagement.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/flightManagement.js"),   true);
			wp_enqueue_style("ds-cn-flightManagement-css", plugin_dir_url(__FILE__) . "public/css/flightManagement.css", null, filemtime($plugin_path_real . "public/css/flightManagement.css"));


			//editFlight
			wp_enqueue_script("ds-cn-flightManagement-js", plugin_dir_url(__FILE__) . "public/js/flightManagement.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/flightManagement.js"),   true);
			wp_enqueue_style("ds-cn-flightManagement-css", plugin_dir_url(__FILE__) . "public/css/flightManagement.css", null, filemtime($plugin_path_real . "public/css/flightManagement.css"));

			//rules
			wp_enqueue_script("ds-cn-rules-js", plugin_dir_url(__FILE__) . "public/js/rules.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/rules.js"),   true);
			wp_enqueue_style("ds-cn-rules-css", plugin_dir_url(__FILE__) . "public/css/rules.css", null, filemtime($plugin_path_real . "public/css/rules.css"));

			//baggage
			wp_enqueue_script("ds-cn-baggage-js", plugin_dir_url(__FILE__) . "public/js/baggage.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/baggage.js"),   true);
			wp_enqueue_style("ds-cn-baggage-css", plugin_dir_url(__FILE__) . "public/css/baggage.css", null, filemtime($plugin_path_real . "public/css/baggage.css"));

			//automationstart
			wp_enqueue_script("ds-cn-automationStart-js", plugin_dir_url(__FILE__) . "public/js/automationStart.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/automationStart.js"),   true);
			wp_enqueue_style("ds-cn-automationStart-css", plugin_dir_url(__FILE__) . "public/css/automationStart.css", null, filemtime($plugin_path_real . "public/css/automationStart.css"));

			//automation
			wp_enqueue_script("ds-cn-automation-js", plugin_dir_url(__FILE__) . "public/js/automation.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/automation.js"),   true);
			wp_enqueue_style("ds-cn-automation-css", plugin_dir_url(__FILE__) . "public/css/automation.css", null, filemtime($plugin_path_real . "public/css/automation.css"));

			//commission
			wp_enqueue_script("ds-cn-commission-js", plugin_dir_url(__FILE__) . "public/js/commission.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/commission.js"),   true);
			wp_enqueue_style("ds-cn-commission-css", plugin_dir_url(__FILE__) . "public/css/commission.css", null, filemtime($plugin_path_real . "public/css/commission.css"));

			//seats
			wp_enqueue_script("ds-cn-seats-js", plugin_dir_url(__FILE__) . "public/js/seats.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/js/seats.js"),   true);
			wp_enqueue_style("ds-cn-seats-css", plugin_dir_url(__FILE__) . "public/css/seats.css", null, filemtime($plugin_path_real . "public/css/seats.css"));
		}

	} else {
		
		wp_enqueue_style("mb-panel-style", plugin_dir_url(__FILE__) . "public/style/mob/panel-style_Mobile.css", null, filemtime($plugin_path_real . "public/style/mob/panel-style_Mobile.css"));

		wp_enqueue_script("cn-app-js", plugin_dir_url(__FILE__) . "public/mobile/js/app.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/app.js"),   true);
		wp_enqueue_style("mb-cn-app-css", plugin_dir_url(__FILE__) . "public/mobile/css/app.css", null, filemtime($plugin_path_real . "public/mobile/css/app.css"));

		if ( strpos( $_SERVER['REQUEST_URI'], 'flight' ) !== false ) {
			wp_enqueue_script("mb-cn-Flight-js", plugin_dir_url(__FILE__) . "public/mobile/js/Flight.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/Flight.js"),   true);
			wp_enqueue_style("ds-cn-Flight-css", plugin_dir_url(__FILE__) . "public/css/Flight.css", null, filemtime($plugin_path_real . "public/css/Flight.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'hotel' ) !== false ) {
			wp_enqueue_script("mb-cn-Hotel-js", plugin_dir_url(__FILE__) . "public/mobile/js/Hotel.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/Hotel.js"),   true);
			wp_enqueue_style("mb-cn-Hotel-css", plugin_dir_url(__FILE__) . "public/mobile/css/Hotel.css", ['citynet-chunk-css'], filemtime($plugin_path_real . "public/mobile/css/Hotel.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'flightPlusHotel' ) !== false ) {
			wp_enqueue_script("mb-cn-FlightPlusHotel-js", plugin_dir_url(__FILE__) . "public/mobile/js/FlightPlusHotel.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/FlightPlusHotel.js"),   true);
			wp_enqueue_style("mb-cn-FlightPlusHotel-css", plugin_dir_url(__FILE__) . "public/mobile/css/FlightPlusHotel.css", null, filemtime($plugin_path_real . "public/mobile/css/FlightPlusHotel.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'package' ) !== false ) {
			wp_enqueue_script("mb-cn-FlightPlusHotel-js", plugin_dir_url(__FILE__) . "public/mobile/js/FlightPlusHotel.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/FlightPlusHotel.js"),   true);
			wp_enqueue_style("mb-cn-FlightPlusHotel-css", plugin_dir_url(__FILE__) . "public/mobile/css/FlightPlusHotel.css", null, filemtime($plugin_path_real . "public/mobile/css/FlightPlusHotel.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'redirect' ) !== false ) {
			wp_enqueue_script("mb-cn-Incoming-js", plugin_dir_url(__FILE__) . "public/mobile/js/Incoming.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/Incoming.js"),   true);
			wp_enqueue_style("mb-cn-Incoming-css", plugin_dir_url(__FILE__) . "public/mobile/css/Incoming.css", null, filemtime($plugin_path_real . "public/mobile/css/Incoming.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'book' ) !== false ) {
			wp_enqueue_script("mb-cn-deepLinkIncoming-js", plugin_dir_url(__FILE__) . "public/mobile/js/deepLinkIncoming.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/deepLinkIncoming.js"),   true);
			wp_enqueue_style("mb-cn-deepLinkIncoming-css", plugin_dir_url(__FILE__) . "public/mobile/css/deepLinkIncoming.css", null, filemtime($plugin_path_real . "public/mobile/css/deepLinkIncoming.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'panelreturn' ) !== false ) {
			wp_enqueue_script("mb-cn-returnBank-js", plugin_dir_url(__FILE__) . "public/mobile/js/returnBank.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/returnBank.js"),   true);
			wp_enqueue_style("mb-cn-returnBank-css", plugin_dir_url(__FILE__) . "public/mobile/css/returnBank.css", null, filemtime($plugin_path_real . "public/mobile/css/returnBank.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'contracts' ) !== false ) {
			wp_enqueue_script("mb-cn-contract-js", plugin_dir_url(__FILE__) . "public/mobile/js/contracts.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/contracts.js"),   true);
			wp_enqueue_style("mb-cn-contract-css", plugin_dir_url(__FILE__) . "public/mobile/css/contracts.css", null, filemtime($plugin_path_real . "public/mobile/css/contracts.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'cip' ) !== false ) {
			wp_enqueue_script("mb-cn-cip-js", plugin_dir_url(__FILE__) . "public/mobile/js/cip.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/cip.js"),   true);
			wp_enqueue_style("mb-cn-cip-css", plugin_dir_url(__FILE__) . "public/mobile/css/cip.css", null, filemtime($plugin_path_real . "public/mobile/css/cip.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'insurance' ) !== false ) {
			wp_enqueue_script("mb-cn-insurance-js", plugin_dir_url(__FILE__) . "public/mobile/js/insurance.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/insurance.js"),   true);
			wp_enqueue_style("mb-cn-insurance-css", plugin_dir_url(__FILE__) . "public/mobile/css/insurance.css", null, filemtime($plugin_path_real . "public/mobile/css/insurance.css"));
		}
		
		if ( strpos( $_SERVER['REQUEST_URI'], 'contractsHTML' ) !== false ) {
			wp_enqueue_script("mb-cn-contractsHTML-js", plugin_dir_url(__FILE__) . "public/mobile/js/contractsHTML.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/contractsHTML.js"),   true);
			wp_enqueue_style("mb-cn-contractsHTML-css", plugin_dir_url(__FILE__) . "public/mobile/css/contractsHTML.css", null, filemtime($plugin_path_real . "public/mobile/css/contractsHTML.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'ticket' ) !== false ) {
			wp_enqueue_script("cn-TwoPhaseTicket-js", plugin_dir_url(__FILE__) . "public/mobile/js/TwoPhaseTicket.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/TwoPhaseTicket.js"),   true);
			wp_enqueue_style("cn-TwoPhaseTicket-css", plugin_dir_url(__FILE__) . "public/mobile/css/TwoPhaseTicket.css", null, filemtime($plugin_path_real . "public/mobile/css/TwoPhaseTicket.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'treasury' ) !== false ) {
			wp_enqueue_script("mb-cn-treasury-js", plugin_dir_url(__FILE__) . "public/mobile/js/treasury.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/treasury.js"),   true);
			wp_enqueue_style("mb-cn-treasury-css", plugin_dir_url(__FILE__) . "public/mobile/css/treasury.css", null, filemtime($plugin_path_real . "public/mobile/css/treasury.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'linkreports' ) !== false ) {
			wp_enqueue_script("mb-cn-linkReports-js", plugin_dir_url(__FILE__) . "public/mobile/js/linkReports.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/linkReports.js"),   true);
			wp_enqueue_style("mb-cn-linkReports-css", plugin_dir_url(__FILE__) . "public/mobile/css/linkReports.css", null, filemtime($plugin_path_real . "public/mobile/css/linkReports.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'bankreports' ) !== false ) {
			wp_enqueue_script("mb-cn-bankReports-js", plugin_dir_url(__FILE__) . "public/mobile/js/bankReports.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/bankReports.js"),   true);
			wp_enqueue_style("mb-cn-bankReports-css", plugin_dir_url(__FILE__) . "public/mobile/css/bankReports.css", null, filemtime($plugin_path_real . "public/mobile/css/bankReports.css"));
		}
		
		if ( strpos( $_SERVER['REQUEST_URI'], 'editProfile' ) !== false ) {
			wp_enqueue_script("mb-cn-editProfile-js", plugin_dir_url(__FILE__) . "public/mobile/js/editProfile.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/editProfile.js"),   true);
			wp_enqueue_style("mb-cn-editProfile-css", plugin_dir_url(__FILE__) . "public/mobile/css/editProfile.css", null, filemtime($plugin_path_real . "public/mobile/css/editProfile.css"));
		}


		if ( strpos( $_SERVER['REQUEST_URI'], 'baseinfo' ) !== false ) {
			wp_enqueue_script("mb-cn-BaseInfo-js", plugin_dir_url(__FILE__) . "public/mobile/js/BaseInfo.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/BaseInfo.js"),   true);
			wp_enqueue_style("mb-cn-BaseInfo-css", plugin_dir_url(__FILE__) . "public/mobile/css/BaseInfo.css", null, filemtime($plugin_path_real . "public/mobile/css/BaseInfo.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'userTreasury' ) !== false ) {
			wp_enqueue_script("mb-cn-userTreasury-js", plugin_dir_url(__FILE__) . "public/mobile/js/userTreasury.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/userTreasury.js"),   true);
			wp_enqueue_style("mb-cn-userTreasury-css", plugin_dir_url(__FILE__) . "public/mobile/css/userTreasury.css", null, filemtime($plugin_path_real . "public/mobile/css/userTreasury.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'currencyconvert' ) !== false ) {
			wp_enqueue_script("mb-cn-currencyConvert-js", plugin_dir_url(__FILE__) . "public/mobile/js/currencyConvert.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/currencyConvert.js"),   true);
			wp_enqueue_style("mb-cn-currencyConvert-css", plugin_dir_url(__FILE__) . "public/mobile/css/currencyConvert.css", null, filemtime($plugin_path_real . "public/mobile/css/currencyConvert.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'getpdf' ) !== false ) {
			wp_enqueue_script("mb-cn-getPdf-js", plugin_dir_url(__FILE__) . "public/mobile/js/getPdf.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/getPdf.js"),   true);
			wp_enqueue_style("mb-cn-getPdf-css", plugin_dir_url(__FILE__) . "public/mobile/css/getPdf.css", null, filemtime($plugin_path_real . "public/mobile/css/getPdf.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'financialreports' ) !== false ) {
			wp_enqueue_script("mb-cn-financialReports-js", plugin_dir_url(__FILE__) . "public/mobile/js/financialReports.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/financialReports.js"),   true);
			wp_enqueue_style("mb-cn-financialReports-css", plugin_dir_url(__FILE__) . "public/mobile/css/financialReports.css", null, filemtime($plugin_path_real . "public/mobile/css/financialReports.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'errorlogs' ) !== false ) {
			wp_enqueue_script("mb-cn-errorLogs-js", plugin_dir_url(__FILE__) . "public/mobile/js/errorLogs.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/errorLogs.js"),   true);
			wp_enqueue_style("mb-cn-errorLogs-css", plugin_dir_url(__FILE__) . "public/mobile/css/errorLogs.css", null, filemtime($plugin_path_real . "public/mobile/css/errorLogs.css"));
		}

		if ( strpos( $_SERVER['REQUEST_URI'], 'cipmanagement' ) !== false ) {
			wp_enqueue_script("mb-cn-cipManagement-js", plugin_dir_url(__FILE__) . "public/mobile/js/cipManagement.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/cipManagement.js"),   true);
			

			wp_enqueue_script("mb-cn-cipManifest-js", plugin_dir_url(__FILE__) . "public/mobile/js/cipManifest.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/cipManifest.js"),   true);
			wp_enqueue_style("mb-cn-cipManifest-css", plugin_dir_url(__FILE__) . "public/mobile/css/cipManifest.css", null, filemtime($plugin_path_real . "public/mobile/css/cipManifest.css"));


			wp_enqueue_script("mb-cn-cipTransfers-js", plugin_dir_url(__FILE__) . "public/mobile/js/cipTransfers.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/cipTransfers.js"),   true);
			wp_enqueue_style("mb-cn-cipTransfers-css", plugin_dir_url(__FILE__) . "public/mobile/css/cipTransfers.css", null, filemtime($plugin_path_real . "public/mobile/css/cipTransfers.css"));

			wp_enqueue_script("mb-cn-cipSuites-js", plugin_dir_url(__FILE__) . "public/mobile/js/cipSuites.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/cipSuites.js"),   true);
			wp_enqueue_style("mb-cn-cipSuites-css", plugin_dir_url(__FILE__) . "public/mobile/css/cipSuites.css", null, filemtime($plugin_path_real . "public/mobile/css/cipSuites.css"));

			wp_enqueue_script("mb-cn-cipFlights-js", plugin_dir_url(__FILE__) . "public/mobile/js/cipFlights.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/cipFlights.js"),   true);
			wp_enqueue_style("mb-cn-cipFlights-css", plugin_dir_url(__FILE__) . "public/mobile/css/cipFlights.css", null, filemtime($plugin_path_real . "public/mobile/css/cipFlights.css"));


			wp_enqueue_script("mb-cn-operationsReport-js", plugin_dir_url(__FILE__) . "public/mobile/js/operationsReport.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/operationsReport.js"),   true);
			wp_enqueue_style("mb-cn-operationsReport-css", plugin_dir_url(__FILE__) . "public/mobile/css/operationsReport.css", null, filemtime($plugin_path_real . "public/mobile/css/operationsReport.css"));

			wp_enqueue_script("mb-cn-formFlights-js", plugin_dir_url(__FILE__) . "public/mobile/js/formFlights.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/formFlights.js"),   true);
			wp_enqueue_style("mb-cn-formFlights-css", plugin_dir_url(__FILE__) . "public/mobile/css/formFlights.css", null, filemtime($plugin_path_real . "public/mobile/css/formFlights.css"));

			wp_enqueue_script("mb-cn-businessReport-js", plugin_dir_url(__FILE__) . "public/mobile/js/businessReport.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/businessReport.js"),   true);
			wp_enqueue_style("mb-cn-businessReport-css", plugin_dir_url(__FILE__) . "public/mobile/css/businessReport.css", null, filemtime($plugin_path_real . "public/mobile/css/businessReport.css"));

			wp_enqueue_script("mb-cn-FlightsManifest-js", plugin_dir_url(__FILE__) . "public/mobile/js/FlightsManifest.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/FlightsManifest.js"),   true);
			wp_enqueue_style("mb-cn-FlightsManifest-css", plugin_dir_url(__FILE__) . "public/mobile/css/FlightsManifest.css", null, filemtime($plugin_path_real . "public/mobile/css/FlightsManifest.css"));

			wp_enqueue_script("mb-cn-cipFlightDeclaration-js", plugin_dir_url(__FILE__) . "public/mobile/js/cipFlightDeclaration.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/cipFlightDeclaration.js"),   true);
			wp_enqueue_style("mb-cn-cipFlightDeclaration-css", plugin_dir_url(__FILE__) . "public/mobile/css/cipFlightDeclaration.css", null, filemtime($plugin_path_real . "public/mobile/css/cipFlightDeclaration.css"));


			wp_enqueue_script("mb-cn-ShowPassenger-js", plugin_dir_url(__FILE__) . "public/mobile/js/ShowPassenger.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/ShowPassenger.js"),   true);
			wp_enqueue_style("mb-cn-ShowPassenger-css", plugin_dir_url(__FILE__) . "public/mobile/css/ShowPassenger.css", null, filemtime($plugin_path_real . "public/mobile/css/ShowPassenger.css"));

		}

		if(strpos( $_SERVER['REQUEST_URI'], 'dashboard' ) !== false ){
			wp_enqueue_script("mb-cn-dashboard-js", plugin_dir_url(__FILE__) . "public/mobile/js/dashboard.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/dashboard.js"),   true);
			wp_enqueue_style("mb-cn-dashboard-css", plugin_dir_url(__FILE__) . "public/mobile/css/dashboard.css", null, filemtime($plugin_path_real . "public/mobile/css/dashboard.css"));

			//ticketReport
			wp_enqueue_script("mb-cn-ticketReport-js", plugin_dir_url(__FILE__) . "public/mobile/js/ticketReport.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/ticketReport.js"),   true);
			wp_enqueue_style("mb-cn-ticketReport-css", plugin_dir_url(__FILE__) . "public/mobile/css/ticketReport.css", null, filemtime($plugin_path_real . "public/mobile/css/ticketReport.css"));

			
			//pathdeclaration
			wp_enqueue_script("mb-cn-showpathDeclaration-js", plugin_dir_url(__FILE__) . "public/mobile/js/showpathDeclaration.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/showpathDeclaration.js"),   true);
			wp_enqueue_style("mb-cn-showpathDeclaration-css", plugin_dir_url(__FILE__) . "public/mobile/css/showpathDeclaration.css", null, filemtime($plugin_path_real . "public/mobile/css/showpathDeclaration.css"));

			// //flightdeclaration
			// wp_enqueue_script("mb-cn-flightDeclaration-js", plugin_dir_url(__FILE__) . "public/mobile/js/flightDeclaration.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/flightDeclaration.js"),   true);
			// wp_enqueue_style("mb-cn-flightDeclaration-css", plugin_dir_url(__FILE__) . "public/mobile/css/flightDeclaration.css", null, filemtime($plugin_path_real . "public/mobile/css/flightDeclaration.css"));

			//cabindeclaration
			wp_enqueue_script("mb-cn-cabinDeclaration-js", plugin_dir_url(__FILE__) . "public/mobile/js/cabinDeclaration.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/cabinDeclaration.js"),   true);
			wp_enqueue_style("mb-cn-cabinDeclaration-css", plugin_dir_url(__FILE__) . "public/mobile/css/cabinDeclaration.css", null, filemtime($plugin_path_real . "public/mobile/css/cabinDeclaration.css"));


			//costDeclaration
			wp_enqueue_script("mb-cn-showcostDeclaration-js", plugin_dir_url(__FILE__) . "public/mobile/js/showcostDeclaration.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/showcostDeclaration.js"),   true);
			wp_enqueue_style("mb-cn-showcostDeclaration-css", plugin_dir_url(__FILE__) . "public/mobile/css/showcostDeclaration.css", null, filemtime($plugin_path_real . "public/mobile/css/showcostDeclaration.css"));

			//editCabinDeclaration
			wp_enqueue_script("mb-cn-editCabinDeclaration-js", plugin_dir_url(__FILE__) . "public/mobile/js/editCabinDeclaration.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/editCabinDeclaration.js"),   true);
			wp_enqueue_style("mb-cn-editCabinDeclaration-css", plugin_dir_url(__FILE__) . "public/mobile/css/editCabinDeclaration.css", null, filemtime($plugin_path_real . "public/mobile/css/editCabinDeclaration.css"));

			//editFlight
			wp_enqueue_script("mb-cn-flightManagement-js", plugin_dir_url(__FILE__) . "public/mobile/js/flightManagement.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/flightManagement.js"),   true);
			wp_enqueue_style("mb-cn-flightManagement-css", plugin_dir_url(__FILE__) . "public/mobile/css/flightManagement.css", null, filemtime($plugin_path_real . "public/mobile/css/flightManagement.css"));


			
			//rules
			wp_enqueue_script("mb-cn-rules-js", plugin_dir_url(__FILE__) . "public/mobile/js/rules.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/rules.js"),   true);
			wp_enqueue_style("mb-cn-rules-css", plugin_dir_url(__FILE__) . "public/mobile/css/rules.css", null, filemtime($plugin_path_real . "public/mobile/css/rules.css"));

			//baggage
			wp_enqueue_script("mb-cn-baggage-js", plugin_dir_url(__FILE__) . "public/mobile/js/baggage.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/baggage.js"),   true);
			wp_enqueue_style("mb-cn-baggage-css", plugin_dir_url(__FILE__) . "public/mobile/css/baggage.css", null, filemtime($plugin_path_real . "public/mobile/css/baggage.css"));

			//automationstart
			wp_enqueue_script("mb-cn-automationStart-js", plugin_dir_url(__FILE__) . "public/mobile/js/automationStart.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/automationStart.js"),   true);
			wp_enqueue_style("mb-cn-automationStart-css", plugin_dir_url(__FILE__) . "public/mobile/css/automationStart.css", null, filemtime($plugin_path_real . "public/mobile/css/automationStart.css"));

			//automation
			wp_enqueue_script("mb-cn-automation-js", plugin_dir_url(__FILE__) . "public/mobile/js/automation.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/automation.js"),   true);
			wp_enqueue_style("mb-cn-automation-css", plugin_dir_url(__FILE__) . "public/mobile/css/automation.css", null, filemtime($plugin_path_real . "public/mobile/css/automation.css"));

			//commission
			wp_enqueue_script("mb-cn-commission-js", plugin_dir_url(__FILE__) . "public/mobile/js/commission.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/commission.js"),   true);
			wp_enqueue_style("mb-cn-commission-css", plugin_dir_url(__FILE__) . "public/mobile/css/commission.css", null, filemtime($plugin_path_real . "public/mobile/css/commission.css"));

			//seats
			wp_enqueue_script("mb-cn-seats-js", plugin_dir_url(__FILE__) . "public/mobile/js/seats.js", ['citynet-chunk-js'], filemtime($plugin_path_real . "public/mobile/js/seats.js"),   true);
			wp_enqueue_style("mb-cn-seats-css", plugin_dir_url(__FILE__) . "public/mobile/css/seats.css", null, filemtime($plugin_path_real . "public/mobile/css/seats.css"));
		}

	}
	$panel_info = generate_panel_info();
	wp_add_inline_script('cn-app-js', 'var citynetPluginWpData =' . json_encode($panel_info));
	wp_add_inline_script('citynet-chunk-js', 'var citynetPluginWpData =' . json_encode($panel_info));
}

add_action('wp_enqueue_scripts', 'cn_scripts_panel');

function cn_admin_scripts($hook)
{
	if (isset($_GET['page']) == 'citynet-settings') {
		wp_enqueue_script('cn-admin-js', plugin_dir_url(__FILE__) . 'admin/js/cn-admin.js', null, filemtime(plugin_dir_path(__FILE__) . 'admin/js/cn-admin.js'), true);
		wp_enqueue_style('cn-admin', plugin_dir_url(__FILE__) . 'admin/css/cn-admin.css', [], filemtime(plugin_dir_path(__FILE__) . 'admin/css/cn-admin.css'));
	}
}

add_action('admin_enqueue_scripts', 'cn_admin_scripts');

function citynet_is_panel_pages()
{
	global $post;
	$page_slug = $post->post_name;
	$flight_routes = generate_panel_info()['seoRoutes'];
	if (in_array($page_slug, $flight_routes)) {
		return true;
	}
	$url = $_SERVER['REQUEST_URI'];
	$url_first = explode('/', $url);
	$url_first = $url_first[1];
	$url = rtrim($url, '/');
	$pos = strrpos($url, '/');
	$url = substr($url, $pos + 1);
	$url = strpos($url, '?') ? substr($url, 0, strpos($url, '?')) : $url;
	$citynet_pages = cn_generate_pages();
	$citynet_pages_tolower = array_map('strtolower', $citynet_pages);
	if (
		in_array($url, $citynet_pages)
		|| in_array($url_first, $citynet_pages)
		|| in_array($url,   $citynet_pages_tolower)
		|| in_array($url_first,  $citynet_pages_tolower)
	) {
		return true;
	}
	return false;
}

// declare a script for the new button
// the script will insert the shortcode on the click event
function cn_add_tinymce_plugin($plugin_array)
{
	$plugin_array['cn_mce_button'] = plugin_dir_url(__FILE__) . 'admin/js/cn-mce-button.js';

	return $plugin_array;
}
// add div id="app" to the urls which are not plugin routes
function add_cn_shortcode()
{
	$panel_info = generate_panel_info();
	$hotels_cities = $panel_info['seoCities'];
	$hotels = $panel_info['seoHotels'];
	$seo_routes = $panel_info['seoRoutes'];
	$panel_pages = $panel_info['panelPages'];
	$url = $_SERVER['REQUEST_URI'];
	$actual_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$is_seo = false;
	foreach ($panel_pages as $key => $val) {
		foreach ($val as $key2 => $val2) {
			if (in_array($actual_url, $val2)) {
				$is_seo = true;
				break 2;
			}
		}
	}
	foreach ($hotels_cities as $key => $val) {
		foreach ($val as $key2 => $val2) {
			$str = get_field('cn_site_lang', 'option') ==  $key ? $val2['slug'] : $key . '/' . $val2['slug'];
			// citynet_print_r(strtolower(trim($str, "/")));
			// citynet_print_r(strtolower(trim($url, "/")));
			if (strtolower(trim($str, "/")) == strtolower(trim($url, "/"))) {
				$is_seo = true;
				break 2;
			}
		}
	}
	foreach ($seo_routes  as $key => $val) {
		foreach ($val as $key2 => $val2) {
			$url_arry = parse_url($actual_url);
			if (strpos($url_arry['path'], $val2['route'])) {
				$is_seo = true;
				break 2;
			}
		}
	}
	global $wp;
	$current_url =  home_url($wp->request);
	foreach ($hotels as $key => $val) {
		foreach ($val as $key2 => $val2) {
			if (strtolower(trim($current_url, "/")) == strtolower(trim($val2['slug'], "/"))) {
				$is_seo = true;
				break 2;
			}
		}
	}
	if (!$is_seo && !citynet_is_panel_pages() && !is_front_page()) {
		echo '<div id="app"></div>';
	}
}
add_action('wp_head', 'add_cn_shortcode');

// Check if flight and tour pages not exist add them after update
add_action('upgrader_process_complete', function ($upgrader_object, $options) {
	// The path to our plugin's main file
	$citynet_plugin = plugin_basename(__FILE__);
	// If an update has taken place and the updated type is plugins and the plugins element exists
	if ($options['action'] == 'update' && $options['type'] == 'plugin' && isset($options['plugins'])) {
		// Iterate through the plugins being updated and check if citynet is there
		foreach ($options['plugins'] as $plugin) {
			if ($plugin == $citynet_plugin) {
				// If it's citynet plugin
				citynet_activate();
			}
		}
	}
}, 10, 2);

//return service name
function find_service_tab($service)
{
	switch ($service):
		case 'flight':
			return  'Flight';
			break;
		case 'hotel':
			return  'Hotel';
			break;
		case 'flighandhotel':
			return  'FlightAndHotel';
			break;
		case 'insurance':
			return  'Insurance';
			break;
		case 'cip':
			return  'Cip';
			break;
		case 'package':
			return  'Package';
			break;
		case 'tour':
			return  'Tour';
		case 'visa':
				return  'Visa';
			break;

	endswitch;
}
//return service tab name in multi lang mode
function find_service_name($lang, $name, $service)
{
	switch ($service):
		case 'flight':
			if ($name) {
				return  [
					$lang => $name,
				];
			} else {
				return  [
					'fa' => 'پرواز',
					'en' => 'Flight',
					'ar' => 'طيران',
					'ru' => 'Полет',
					'tr' => 'Uçuş'
				];
			}

			break;
		case 'hotel':
			if ($name) {
				return  [
					$lang => $name,
				];
			} else {
				return  [
					'fa' => 'هتل',
					'en' => 'Hotel',
					'ar' => 'الفندق',
					'ru' => 'Отель',
					'tr' => 'Otel'
				];
			}
			break;
		case 'flighandhotel':
			if ($name) {
				return  [
					$lang => $name,
				];
			} else {
				return  [
					'fa' => 'پرواز+هتل',
					'en' => 'Flight+Hotel',
					'ar' => 'طيران+الفندق',
					'ru' => 'отель + перелет',
					'tr' => 'Uçuş+Otel',
				];
			}
			break;
		case 'tour':
			if ($name) {
				return  [
					$lang => $name,
				];
			} else {
				return  [
					'fa' => 'تور',
					'en' => 'Tour',
					'ar' => 'سياحة',
					'ru' => 'Тур',
					'tr' => 'Ağ',
				];
			}
			break;
		case 'package':
			if ($name) {
				return  [
					$lang => $name,
				];
			} else {
				return  [
					'fa' => 'پکیج سفر',
					'en' => 'Package',
					'ar' => 'عزیمة السفر',
					'ru' => 'туристический пакет',
					'tr' => 'seyahat paketi',
				];
			}
			break;
		case 'insurance':
			if ($name) {
				return  [
					$lang => $name,
				];
			} else {
				return  [
					'fa' => 'بیمه مسافرتی',
					'en' => 'Insurance',
					'ar' => 'تأمين',
					'ru' => 'страхование',
					'tr' => 'Seyahat sigortası',
				];
			}
			break;
		case 'cip':
			if ($name) {
				return  [
					$lang => $name,
				];
			} else {
				return  [
					'fa' => 'تشریفات فرودگاه',
					'en' => 'CIP',
					'ar' => 'إجراءات المطار',
					'ru' => 'Процедуры в аэропорту',
					'tr' => 'Havaalanı prosedürleri',
				];
			}
			break;
		case 'visa':
				if ($name) {
					return  [
						$lang => $name,
					];
				} else {
					return  [
						'fa' => 'ویزا',
						'en' => 'visa',
						'ar' => 'تأشيرة',
						'ru' => 'виза',
						'tr' => 'vize',
					];
				}
				break;
	endswitch;
}

// // //Not display panel page in admin wordpress
// add_action('pre_get_posts', function ($query) {
// 	if (!is_admin()) {
// 		return;
// 	}
// 	if (!function_exists('get_current_screen')) {
// 		require_once ABSPATH . '/wp-admin/includes/screen.php';
// 	}
// 	$screen = get_current_screen(); //verify which page we're on
// 	if ('page' == $screen->post_type && 'edit' == $screen->base) {
// 		global $wpdb;
// 		$table_name = $wpdb->prefix . 'postmeta';
// 		$prepared_statement = $wpdb->prepare("SELECT post_id FROM {$table_name} where meta_value='cn_not_seo_page' AND meta_key='cn_page'");
// 		$values = $wpdb->get_col($prepared_statement);
// 		$query->set('post__not_in', $values);
// 	}
// });

//delete not seo panel page when deactive plugin
add_action("deactivated_plugin", function ($plugin, $network_deactivating) {
	/** @var wpdb $wpdb WP Database */
	global $wpdb;
	$table_posts = $wpdb->prefix . 'posts';
	$table_postmeta = $wpdb->prefix . 'postmeta';

	$prepared_statement = $wpdb->prepare("SELECT post_id FROM `$table_postmeta` where meta_value='cn_not_seo_page' AND meta_key='cn_page'");
	$values = $wpdb->get_col($prepared_statement);
	foreach ($values as $value) {

		$wpdb->delete($table_posts, ['ID' => $value]);
		$table_postmeta = $wpdb->prefix . 'postmeta';
		$wpdb->delete($table_postmeta, ['post_id' => $value]);
	}
}, 10, 2);

add_action('wp_head', function () {
	global $post;
	if (is_page()  && get_option('cn_create_page')) {
		$cn_page = get_post_meta(get_the_ID(), 'cn_page', false);
		if (in_array("cn_not_seo_page", $cn_page)) {
			echo '<meta name="robots" content="noindex,nofollow" />';
		}
	}
}, 2);
