<?php
/**
 * @file
 * Theme settings for Materialize parent theme
 *
*/


function materialize_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

if (isset($form_id)) {
   return;
  }

$form['disclaimer00'] = array(
  '#markup' => '<p><strong>' . t('These settings for the parent theme do NOT extend into the subtheme.') . '</strong></p>',
);

$form['materialize_cdn_css'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use Cloudflare CDN</b> to serve the Materialize CSS as one minified CSS file.  <br>Uncheck</b> to serve the CSS from your web server.'),
    '#default_value' => theme_get_setting('materialize_cdn_css', 'materialize'),
  );

$form['materialize_cdn_js'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Novice mode: <b>serve the whole Materialize library as one minified Javascript file.</b> <br>Uncheck</b> to serve the individual JS files from your web server.'),
    '#default_value' => theme_get_setting('materialize_cdn_js', 'materialize'),
  );

$form['materialize_dropdown'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use a drowdown menu for the main menu</b> to load scripts which make your main menu into a Materialize menu.  <br>Uncheck</b> to leave your main menu as the default or use your own menu module.'),
    '#default_value' => theme_get_setting('materialize_dropdown', 'materialize'),
  );

$form['disclaimer'] = array(
  '#markup' => '<p>' . t('Advanced mode: Uncheck above and selectively check below to only include these certain Javascript files if you only need certain components.  WARNING: some of the components may rely on multiple scripts, and you are responsible for adding the theme template functions to utilize these functionalities.  If you do not need these functionalities for this website, you may leave each unchecked.') . '</p>',
);

$form['materialize_script1'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script animation.js'),
      '#default_value' => theme_get_setting('materialize_script1', 'materialize'),
    );

$form['materialize_script2'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script buttons.js'),
      '#default_value' => theme_get_setting('materialize_script2', 'materialize'),
    );

$form['materialize_script3'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script cards.js'),
      '#default_value' => theme_get_setting('materialize_script3', 'materialize'),
    );

$form['materialize_script4'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script character_counter.js'),
      '#default_value' => theme_get_setting('materialize_script4', 'materialize'),
    );

$form['materialize_script5'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script collapsible.js'),
      '#default_value' => theme_get_setting('materialize_script5', 'materialize'),
    );

$form['materialize_script6'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script picker.date.js'),
      '#default_value' => theme_get_setting('materialize_script6', 'materialize'),
    );

$form['materialize_script7'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script picker.js'),
      '#default_value' => theme_get_setting('materialize_script7', 'materialize'),
    );

$form['materialize_script8'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script dropdown.js'),
      '#default_value' => theme_get_setting('materialize_script8', 'materialize'),
    );

$form['materialize_script9'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script forms.js'),
      '#default_value' => theme_get_setting('materialize_script9', 'materialize'),
    );

$form['materialize_script10'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script hammer.js for touch interactions'),
      '#default_value' => theme_get_setting('materialize_script10', 'materialize'),
    );

$form['materialize_script11'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery.hammer.js for JQuery based touch interactions'),
      '#default_value' => theme_get_setting('materialize_script11', 'materialize'),
    );

$form['materialize_script12'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery.easing.js for JQuery based animations'),
      '#default_value' => theme_get_setting('materialize_script12', 'materialize'),
    );

$form['materialize_script13'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery.timeago.js'),
      '#default_value' => theme_get_setting('materialize_script13', 'materialize'),
    );

$form['materialize_script14'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script leanModal.js'),
      '#default_value' => theme_get_setting('materialize_script14', 'materialize'),
    );

$form['materialize_script15'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script materialbox.js'),
      '#default_value' => theme_get_setting('materialize_script15', 'materialize'),
    );

$form['materialize_script16'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script parallax.js'),
      '#default_value' => theme_get_setting('materialize_script16', 'materialize'),
    );

$form['materialize_script17'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script prism.js'),
      '#default_value' => theme_get_setting('materialize_script17', 'materialize'),
    );

$form['materialize_script18'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script pushpin.js'),
      '#default_value' => theme_get_setting('materialize_script18', 'materialize'),
    );

$form['materialize_script19'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script scrollFire.js'),
      '#default_value' => theme_get_setting('materialize_script19', 'materialize'),
    );

$form['materialize_script20'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script scrollspy.js'),
      '#default_value' => theme_get_setting('materialize_script20', 'materialize'),
    );

$form['materialize_script21'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script sideNav.js'),
      '#default_value' => theme_get_setting('materialize_script21', 'materialize'),
    );

$form['materialize_script22'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script slider.js'),
      '#default_value' => theme_get_setting('materialize_script22', 'materialize'),
    );

$form['materialize_script23'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tabs.js'),
      '#default_value' => theme_get_setting('materialize_script23', 'materialize'),
    );

$form['materialize_script24'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script toasts.js'),
      '#default_value' => theme_get_setting('materialize_script24', 'materialize'),
    );

$form['materialize_script25'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tooltip.js'),
      '#default_value' => theme_get_setting('materialize_script25', 'materialize'),
    );

$form['materialize_script26'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script transitions.js'),
      '#default_value' => theme_get_setting('materialize_script26', 'materialize'),
    );

$form['materialize_script27'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script velocity.js'),
      '#default_value' => theme_get_setting('materialize_script27', 'materialize'),
    );

$form['materialize_script28'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script waves.js for button effects'),
      '#default_value' => theme_get_setting('materialize_script28', 'materialize'),
    );

$form['materialize_script29'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script materialize_custom.js for an example of some sample webpage effects'),
      '#default_value' => theme_get_setting('materialize_script29', 'materialize'),
    );

$form['materialize_script30'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script modernizr.js'),
      '#default_value' => theme_get_setting('materialize_script30', 'materialize'),
    );

$form['materialize_script31'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery-validate.js'),
      '#default_value' => theme_get_setting('materialize_script31', 'materialize'),
    );

$form['materialize_script32'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script fastclick.js'),
      '#default_value' => theme_get_setting('materialize_script32', 'materialize'),
    );

$form['materialize_juiced_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('materialize_juiced_main_background', 'materialize'),
    );

$form['materialize_juiced_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('materialize_juiced_main_background_blurred', 'materialize'),
    );

$form['materialize_juiced_big_statement_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the big statement page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('materialize_juiced_big_statement_background', 'materialize'),
    );

$form['materialize_juiced_big_statement_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('materialize_juiced_big_statement_background_blurred', 'materialize'),
    );

$form['materialize_body_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area in a core layout.'),
      '#default_value' => theme_get_setting('materialize_body_main_background', 'materialize'),
    );

$form['materialize_body_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('materialize_body_main_background_blurred', 'materialize'),
    );

$form['materialize_footer_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the footer area in a core layout.'),
      '#default_value' => theme_get_setting('materialize_footer_main_background', 'materialize'),
    );

$form['materialize_footer_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('materialize_footer_main_background_blurred', 'materialize'),
    );

$form['recommended'] = array(
  '#markup' => '<p>' . t('Looking for additional theme features?  You might find what you are looking in layouts or modules.  Some common items to add to your site might be:<br><a href="https://backdropcms.org/modules">Modules</a><br><a href="https://backdropcms.org/layouts">Layouts</a><br>Menus<br><a href="https://backdropcms.org/project/mobile_navigation">Mobile Navigation</a><br><a href="https://backdropcms.org/project/responsive_menus">Responsive Menus</a><br><a href="https://backdropcms.org/project/wpmenu">WPMenu</a><br>Widgets<br><a href="https://backdropcms.org/project/google_fonts">Google Fonts</a><br><a href="https://backdropcms.org/project/back_to_top">Back To Top</a><br><a href="https://backdropcms.org/project/fanciblock">FanciBlock</a><br><a href="https://backdropcms.org/project/flexslider">FlexSlider</a><br>Parallax<br><a href="https://backdropcms.org/project/parallax_bg">Parallax_BG</a><br><a href="https://backdropcms.org/project/scrollreveal">Scroll Reveal</a><br><a href="https://backdropcms.org/project/void_menu">Void Menu</a> ') . '</p>',
);

}


function materialize_ajax_settings_save($form, $form_state) {
  $config = config('materialize.settings');
  $theme = $form_state['build_info']['args'][0];
  $theme_settings = config_get('theme_' . $theme . '_settings', array());
  $trigger = $form_state['triggering_element'] ['#name'];

  $theme_settings[$trigger] = $form_state['input'][$trigger];

  if (empty($theme_settings[$trigger])) {
    $theme_settings[$trigger] = 0;
  }
  config_set('theme_' . $theme . '_settings', $theme_settings);
  backdrop_set_message("configuration saved.");
}
