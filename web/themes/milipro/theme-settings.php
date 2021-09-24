<?php

/**
 * @file
 * Custom setting for MiliPro theme.
 */

function milipro_form_system_theme_settings_alter(&$form, &$form_state) {
  $theme_update_info = file_get_contents("https://drupar.com/theme-update-info/milipro.txt");
  $form['milipro'] = [
    '#type'       => 'vertical_tabs',
    '#title'      => '<h3>' . t('MiliPro Theme Settings') . '</h3>',
    '#default_tab' => 'general',
  ];

  // General settings tab.
  $form['general'] = [
    '#type'  => 'details',
    '#title' => t('General'),
    '#description' => t('<h3>Thanks for using MiliPro Theme</h3>MiliPro is a premium Drupal 8 theme designed and developed by <a href="https://drupar.com" target="_blank">Drupar.com</a>'),
    '#group' => 'milipro',
  ];

  // Social tab.
  $form['social'] = [
    '#type'  => 'details',
    '#title' => t('Social'),
    '#description' => t('Social icons settings. These icons appear in footer region.'),
    '#group' => 'milipro',
  ];

  // Slider tab.
  $form['slider'] = [
    '#type'  => 'details',
    '#title' => t('Homepage Slider'),
    '#group' => 'milipro',
  ];

  // Header tab.
  $form['header'] = [
    '#type'  => 'details',
    '#title' => t('Header'),
    '#group' => 'milipro',
  ];

  // Sidebar tab.
  $form['sidebar'] = [
    '#type'  => 'details',
    '#title' => t('Sidebar'),
    '#group' => 'milipro',
  ];

  // Content tab.
  $form['content'] = [
    '#type'  => 'details',
    '#title' => t('Content'),
    '#group' => 'milipro',
  ];

  // Footer tab.
  $form['footer'] = [
    '#type'  => 'details',
    '#title' => t('Footer'),
    '#group' => 'milipro',
  ];
  // Main Tabs ->Insert codes
  $form['insert_codes'] = [
    '#type'  => 'details',
    '#title' => t('Insert Codes'),
    '#group' => 'milipro',
  ];
  // Main Tabs -> Licensing.
  $form['license'] = [
    '#type'  => 'details',
    '#title' => t('Theme License'),
    '#group' => 'milipro',
  ];

  // Main Tabs -> Update.
  $form['update'] = [
    '#type'  => 'details',
    '#title' => t('Update'),
    '#description' => t('<h4>Check For Update</h4>'),
    '#group' => 'milipro',
  ];

  // Support tab.
  $form['support'] = [
    '#type'  => 'details',
    '#title' => t('Support'),
    '#description' => t('For any support related to MiliPro theme, please post on our <a href="https://www.drupar.com/node/add/ticket" target="_blank">open a support ticket</a>.'),
    '#group' => 'milipro',
  ];

  // General tab -> Theme version info.
  $form['general']['general_version'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Current Theme Version'),
    '#description' => t('8.4.1'),
  ];

  // General -> info.
  $form['general']['general_info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Theme Info'),
    '#description' => t('<a href="https://www.drupar.com/theme/milipro" target="_blank">Theme Homepage</a> || <a href="//demo2.drupar.com/milipro/" target="_blank">Theme Demo</a> || <a href="https://www.drupar.com/milipro-documentation" target="_blank">Theme Documentation</a> || <a href="https://www.drupar.com/support" target="_blank">Theme Support</a>'),
  ];

  // Settings under social tab.
  // Show or hide all icons.
  $form['social']['all_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Show Social Icons'),
  ];

  $form['social']['all_icons']['all_icons_show'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show social icons in footer'),
    '#default_value' => theme_get_setting('all_icons_show', 'milipro'),
    '#description'   => t("Check this option to show social icons in footer. Uncheck to hide."),
  ];

  // Facebook.
    $form['social']['facebook'] = [
    '#type'        => 'details',
    '#title'       => t("Facebook"),
  ];

  $form['social']['facebook']['facebook_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Facebook Url'),
    '#description'   => t("Enter yours facebook profile or page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('facebook_url', 'milipro'),
  ];

  // Twitter.
  $form['social']['twitter'] = [
    '#type'        => 'details',
    '#title'       => t("Twitter"),
  ];

  $form['social']['twitter']['twitter_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Twitter Url'),
    '#description'   => t("Enter yours twitter page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('twitter_url', 'milipro'),
  ];

  // Instagram.
  $form['social']['instagram'] = [
    '#type'        => 'details',
    '#title'       => t("Instagram"),
  ];

  $form['social']['instagram']['instagram_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Instagram Url'),
    '#description'   => t("Enter yours instagram page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('instagram_url', 'milipro'),
  ];

  // Linkedin.
  $form['social']['linkedin'] = [
    '#type'        => 'details',
    '#title'       => t("Linkedin"),
  ];

  $form['social']['linkedin']['linkedin_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Linkedin Url'),
    '#description'   => t("Enter yours linkedin page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('linkedin_url', 'milipro'),
  ];

  // YouTube.
  $form['social']['youtube'] = [
    '#type'        => 'details',
    '#title'       => t("YouTube"),
  ];

  $form['social']['youtube']['youtube_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('YouTube Url'),
    '#description'   => t("Enter yours youtube.com page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('youtube_url', 'milipro'),
  ];

  // Vimeo
  $form['social']['vimeo'] = [
    '#type'        => 'details',
    '#title'       => t("Vimeo"),
  ];

  $form['social']['vimeo']['vimeo_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Vimeo Url'),
    '#description'   => t("Enter yours vimeo.com page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('vimeo_url', 'milipro'),
  ];

  // Google Plus.
  $form['social']['gplus'] = [
    '#type'        => 'details',
    '#title'       => t("Google Plus"),
  ];

  $form['social']['gplus']['gplus_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Google Plus'),
    '#description'   => t("Enter yours youtube.com page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('gplus_url', 'milipro'),
  ];

  // telegram.
    $form['social']['telegram'] = [
    '#type'        => 'details',
    '#title'       => t("Telegram"),
  ];

  $form['social']['telegram']['telegram_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Telegram Url'),
    '#description'   => t("Enter yours Telegram profile or page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('telegram_url', 'milipro'),
  ];

  // WhatsApp.
    $form['social']['whatsapp'] = [
    '#type'        => 'details',
    '#title'       => t("WhatsApp"),
  ];

  $form['social']['whatsapp']['whatsapp_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('WhatsApp Url'),
    '#description'   => t("Enter yours whatsapp message url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('whatsapp_url', 'milipro'),
  ];

  // Github.
    $form['social']['github'] = [
    '#type'        => 'details',
    '#title'       => t("GitHub"),
  ];

  $form['social']['github']['github_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('GitHub Url'),
    '#description'   => t("Enter yours github page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('github_url', 'milipro'),
  ];

    // Social -> vk.com url.
    $form['social']['vk'] = [
      '#type'        => 'details',
      '#title'       => t("vk.com"),
    ];
    $form['social']['vk']['vk_url'] = [
        '#type'          => 'textfield',
        '#title'         => t('vk.com'),
        '#description'   => t("Enter yours vk.com page url. Leave the url field blank to hide this icon."),
        '#default_value' => theme_get_setting('vk_url', 'milipro'),
    ];

  // Slider sub-vertical tab
  $form['slider']['slider_tab'] = [
    '#type'  => 'vertical_tabs',
  ];
  // Slider -> Main tab
  $form['slider']['slider_main_tab'] = [
    '#type'        => 'details',
    '#title'       => t('Slider Options'),
    '#description' => t('Please refer to <a href="https://www.drupar.com/node/673" target="_blank">slider documentation page</a> for detailed information.'),
    '#group' => 'slider_tab',
  ];
  // Slider -> Classic tab
  $form['slider']['slider_classic_tab'] = [
    '#type'        => 'details',
    '#title'       => t('Classic Slider'),
    '#group' => 'slider_tab',
    '#description'   => t("Classic slider is the free mili slider. This is the same slider that is available in the free Mili theme."),
  ];
  // Slider -> Single slide tab
  $form['slider']['slider_single_tab'] = [
    '#type'        => 'details',
    '#title'       => t('Single Slide'),
    '#group' => 'slider_tab',
  ];
  // Slider -> Layered slider tab
  $form['slider']['slider_layered_tab'] = [
    '#type'        => 'details',
    '#title'       => t('Layered Slider'),
    '#group' => 'slider_tab',
  ];
  // Slider -> Main tab -> options
  $form['slider']['slider_main_tab']['slider_enable_option'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Enable Slider'),
  ];
  $form['slider']['slider_main_tab']['slider_enable_option']['slider_show'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show Slider on Homepage'),
    '#default_value' => theme_get_setting('slider_show'),
    '#description'   => t("Check this option to show slider on homepage. Uncheck to hide."),
  ];
  // Slider -> Select slider type
  $form['slider']['slider_main_tab']['slider_type_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Slider Style'),
  ];
  $form['slider']['slider_main_tab']['slider_type_section']['slider_type'] = [
    '#type'        => 'radios',
    '#title'       => t('Select Slider Style'),
    '#options' => array(
      'slider-classic' => t('Classic'),
      'slider-single' => t('Single Slide'),
      'slider-layered' => t('Layered'),
    ),
    '#default_value' => theme_get_setting('slider_type'),
    '#description'   => t('You can customize each slider type in their respective tab.'),
  ];
  // Slider -> Slider classic
  $form['slider']['slider_classic_tab']['slider_classic_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Classic Slider Code'),
    '#default_value' => theme_get_setting('slider_classic_code'),
    '#description'   => t('Leave slider code box empty to show default classic slider.<br />Please refer to this <a href="https://www.drupar.com/mili-documentation/homepage-slider" target="_blank">documentation page</a> for slider code tutorial.'),
  ];
  // Slider -> Single slide
  $form['slider']['slider_single_tab']['slider_single_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Single Slide Code'),
    '#default_value' => theme_get_setting('slider_single_code'),
    '#description'   => t('Leave slider code box empty to show default classic slider.<br />Use HTML tags for slider code.'),
  ];
  // Slider -> Slider layered
  $form['slider']['slider_layered_tab']['time'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Slider Interval Time'),
  ];
  $form['slider']['slider_layered_tab']['time']['slider_time'] = [
    '#type'          => 'number',
    '#title'         => t('Autoplay Interval Time'),
    '#default_value' => theme_get_setting('slider_time', 'milipro'),
    '#description'   => t('Default value is 10000, this means 10 seconds.'),
  ];
  $form['slider']['slider_layered_tab']['Slider_animation'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Slider Animation'),
  ];
  $form['slider']['slider_layered_tab']['Slider_animation']['slider_animatein'] = [
    '#type'          => 'select',
    '#title'         => t('SlideIn Animation'),
    '#options' => array(
    	'bounceIn' => t('BounceIn'),
    	'fadeIn' => t('FadeIn'),
    	'flip' => t('Flip'),
    	'flipInX' => t('FlipInX'),
    	'flipInY' => t('FlipInY'),
    	'slideInDown' => t('SlideInDown'),
    	'slideInLeft' => t('SlideInLeft'),
    	'slideInRight' => t('SlideInRight'),
    	'slideInUp' => t('SlideInUp'),
    	'zoomIn' => t('ZoomIn'),),
    '#default_value' => theme_get_setting('slider_animatein', 'milipro'),
    '#description'   => t('Default value is <strong>slideInDown</strong>.'),
  ];

  $form['slider']['slider_layered_tab']['Slider_animation']['slider_animateout'] = [
    '#type'          => 'select',
    '#title'         => t('SlideOut Animation'),
    '#options' => array(
    	'bounceOut' => t('BounceOut'),
    	'fadeOut' => t('FadeOut'),
    	'flipOutX' => t('FlipOutX'),
    	'flipOutY' => t('FlipOutY'),
    	'slideOutDown' => t('SlideOutDown'),
    	'slideOutLeft' => t('SlideOutLeft'),
    	'slideOutRight' => t('SlideOutRight'),
    	'slideOutUp' => t('SlideOutUp'),
    	'zoomOut' => t('ZoomOut'),),
    '#default_value' => theme_get_setting('slider_animateout', 'milipro'),
    '#description'   => t('Default value is <strong>SlideOutDown</strong>.'),
  ];
  $form['slider']['slider_layered_tab']['slider_dots_field'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Slider Dots Navigation'),
  ];
  $form['slider']['slider_layered_tab']['slider_dots_field']['slider_dots'] = [
    '#type'          => 'select',
    '#title'         => t('Show or Hide Slider Dots Navigation'),
    '#options' => array(
      'true' => t('Show'),
      'false' => t('Hide'),),
    '#default_value' => theme_get_setting('slider_dots', 'milipro'),
    '#description'   => t('Show or hide slider dots navigation that appears at the bottom of slider.'),
  ];
  $form['slider']['slider_layered_tab']['slider_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Slider Code'),
    '#default_value' => theme_get_setting('slider_code', 'milipro'),
    '#description'   => t('Leave slider code box empty to show default slider.<br />Please refer to this <a href="https://www.drupar.com/milipro-documentation/homepage-slider" target="_blank">documentation page</a> for slider code tutorial.'),
  ];

  /**
   * Settings under header tab.
   */

  // Header -> sticky header.
  $form['header']['sticky_header'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Sticky Header'),
  ];
  $form['header']['sticky_header']['sticky_header_option'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Sticky Header'),
    '#default_value' => theme_get_setting('sticky_header_option', 'milipro'),
    '#description'   => t("Check this option to enable sticky header. Uncheck to disable."),
  ];

  /**
   * Settings under sidebar tab.
   */
  // Settings under sidebar.
  $form['sidebar']['front_sidebar_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Homepage Sidebar'),
  ];
  $form['sidebar']['front_sidebar_section']['front_sidebar'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show Sidebars On Homepage'),
    '#default_value' => theme_get_setting('front_sidebar', 'milipro'),
    '#description'   => t("<p>Check this option to enable left and right sidebar on homepage.</p>"),
  ];
  // Sidebar -> Animated sidebar.
  $form['sidebar']['animated_sidebar'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Animated Sidebar'),
  ];
  $form['sidebar']['animated_sidebar']['animated_sidebar_option'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable animated sidebar'),
    '#default_value' => theme_get_setting('animated_sidebar_option', 'milipro'),
    '#description'   => t("Check this option to enable animated sidebar feature. Uncheck to hide.<br />Please refer to this tutorial for details. <a href='https://www.drupar.com/milipro-documentation/how-create-animated-sidebar' target='_blank'>How To Create Animated Sidebar</a>"),
  ];

  /**
   * Settings under content tab.
   */
  // Content -> Page Loading.
  $form['content']['preloader'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Pre Page Loader'),
  ];
  $form['content']['preloader']['preloader_option'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show a loading icon before page loads.'),
    '#default_value' => theme_get_setting('preloader_option', 'milipro'),
    '#description'   => t("Check this option to show a cool animated image until your website is loading. Uncheck to disable this feature."),
  ];

  // Settings under content tab -> Homepage.
  $form['content']['homepage'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Homepage Content'),
    '#description'   => t('Please follow this tutorial to add content on homepage. <a href="https://www.drupar.com/milipro-documentation/how-add-content-homepage" target="_blank">How to add content on homepage</a>'),
  ];

  // Settings under content tab -> Animated Content.
  $form['content']['animated_content'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Animated Page Content'),
    '#description'   => t('Please visit this tutorial page for details. <a href="https://www.drupar.com/milipro-documentation/how-create-animated-content" target="_blank">How to create animated content</a>.'),
  ];

  // Settings under content tab -> Material font icons.
  $form['content']['material_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Google Material Font Icons'),
    '#description'   => t('MiliPro theme has included Google material font icons. You can create any Google material icon with MiliPro theme.<br />Please visit this tutorial page for details. <a href="https://www.drupar.com/milipro-documentation/font-icons" target="_blank">How To Use Google Material Font Icons</a>.'),
  ];

  $form['content']['material_icons']['material_icon'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Google Material Font Icons'),
    '#default_value' => theme_get_setting('material_icon', 'milipro'),
    '#description'   => t("Check this option to enable Google Material Font Icons. Uncheck to disable."),
  ];
  // Settings under content tab -> FontAwesome
  $form['content']['fontawesome_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('FontAwesome Font Icons'),
    '#description'   => t('<br /><hr /><br />MiliPro theme has included FontAwesome v4.7.0 and FontAwesome v5. You can create thousands of icons with FontAwesome font icons.<br />Please visit this tutorial page for details. <a href="https://www.drupar.com/custom-shortcodes-set-two/fontawesome-font-icons" target="_blank">How To Use FontAwesome Font Icons</a>.'),
  ];

  $form['content']['fontawesome_icons']['fontawesome'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable FontAwesome 4 Font Icons'),
    '#default_value' => theme_get_setting('fontawesome', 'milipro'),
    '#description'   => t("Check this option to enable FontAwesome Font Icons. Uncheck to disable."),
  ];
  $form['content']['fontawesome_icons']['fontawesome_five'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable FontAwesome 5 Font Icons'),
    '#default_value' => theme_get_setting('fontawesome_five', 'milipro'),
    '#description'   => t("Check this option to enable FontAwesome 5 Font Icons. Uncheck to disable."),
  ];
  // Content -> iconmonstr font icons.
  $form['content']['font_icons_iconmonstr'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Iconmonstr Font Icons'),
    '#description'   => t('<br /><hr /><br />MiliPro theme has included iconmonstr font icons v1.3.0. You can create 300+ icons with iconmonstr font icons.<br />Please visit this tutorial page for details. <a href="https://www.drupar.com/custom-shortcodes-set-two/iconmonstr-font-icons" target="_blank">How To Use Iconmonstr Icons</a>.<br /><strong>Please Note:</strong> This will increase page load by about 50 KB.'),
  ];
  $form['content']['font_icons_iconmonstr']['iconmonstr'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Iconmonstr Font Icons'),
    '#default_value' => theme_get_setting('iconmonstr', 'milipro'),
    '#description'   => t("Check this option to enable Iconmonstr Font Icons. Uncheck to disable."),
  ];

  // Node author picture.
  $form['content']['node'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Node'),
  ];

  $form['content']['node']['node_author_pic'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Node Author Picture'),
    '#default_value' => theme_get_setting('node_author_pic', 'milipro'),
    '#description'   => t("Check this option to show node author picture in submitted details. Uncheck to hide."),
  ];

  // Content -> Node -> Node sharing option.
  // Content tab -> Node.
  $form['content']['node_share'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Node Sharing on Social Media'),
  ];

  $form['content']['node_share']['node_share_page'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Share Page Content Type'),
    '#default_value' => theme_get_setting('node_share_page', 'milipro'),
    '#description'   => t("Check this option to show social sharing buttons (facebook, twitter, Instagram etc) on <strong>Basic page</strong> content type nodes. Uncheck to hide."),
  ];

  $form['content']['node_share']['node_share_article'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Share Article Content Type'),
    '#default_value' => theme_get_setting('node_share_article', 'milipro'),
    '#description'   => t("Check this option to show social sharing buttons (facebook, twitter, Instagram etc) on <strong>Article</strong> content type nodes. Uncheck to hide."),
  ];

  $form['content']['node_share']['node_share_other'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Share Other Content Types'),
    '#default_value' => theme_get_setting('node_share_other', 'milipro'),
    '#description'   => t("Check this option to show social sharing buttons (facebook, twitter, Instagram etc) on other content type nodes. Uncheck to hide."),
  ];

  $form['content']['node_share']['node_share_front'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Share Homepage'),
    '#default_value' => theme_get_setting('node_share_front', 'milipro'),
    '#description'   => t("Check this option to show social sharing buttons (facebook, twitter, Instagram etc) on <strong>Homepage</strong>. Uncheck to hide."),
  ];

  // Show tags in node submitted.
  $form['content']['node']['node_tags'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Node Tags'),
    '#default_value' => theme_get_setting('node_tags', 'milipro'),
    '#description'   => t("Check this option to show node tags (if any) in submitted details. Uncheck to hide."),
  ];

  // Show user picture in comment.
  $form['content']['comment'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Comment'),
  ];

  $form['content']['comment']['comment_user_pic'] = [
    '#type'          => 'checkbox',
    '#title'         => t('User Picture in comments'),
    '#default_value' => theme_get_setting('comment_user_pic', 'milipro'),
    '#description'   => t("Check this option to show user picture in comment. Uncheck to hide."),
  ];

  // Settings under footer tab.
  // Scroll to top.
  $form['footer']['scrolltotop'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Scroll To Top'),
  ];

  $form['footer']['scrolltotop']['scrolltotop_on'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable scroll to top feature.'),
    '#default_value' => theme_get_setting('scrolltotop_on', 'milipro'),
    '#description'   => t("Check this option to enable scroll to top feature. Uncheck to disable this feature and hide scroll to top icon."),
  ];

  // Footer -> Copyright.
  $form['footer']['copyright'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Website Copyright Text'),
  ];

  $form['footer']['copyright']['copyright_text'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show website copyright text in footer.'),
    '#default_value' => theme_get_setting('copyright_text', 'milipro'),
    '#description'   => t("Check this option to show website copyright text in footer. Uncheck to hide."),
  ];

  // Footer -> copyright -> custom copyright text
  $form['footer']['copyright']['copyright_text_custom'] = [
    '#type'          => 'textarea',
    '#title'         => t('Custom Copyright Text'),
    '#default_value' => theme_get_setting('copyright_text_custom', 'milipro'),
    '#description'   => t("Enter custom copyright text. Leave it blank to show default copyright text."),
  ];

  // Footer -> Cookie.
  $form['footer']['cookie'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Cookie Consent message'),
  ];
  $form['footer']['cookie']['cookie_message'] = [
    '#type'          => 'checkbox',
    '#title'       => t('Show Cookie Consent Popup Message'),
    '#default_value' => theme_get_setting('cookie_message', 'milipro'),
    '#description'   => t('Required to place a Cookie Consent message on your site, as per the EU cookie law? Make your website EU Cookie Law Compliant.<br />According to EU cookies law, websites need to get consent from visitors to store or retrieve cookies.'),
  ];

  // Footer -> Cookie -> custom cookie message.
  $form['footer']['cookie']['cookie_message_custom'] = [
    '#type'          => 'textarea',
    '#title'         => t('Custom Cookie Consent Message'),
    '#default_value' => theme_get_setting('cookie_message_custom', 'milipro'),
    '#description'   => t("Enter Cookie Consent Message. Leave it blank to show default message text."),
  ];

  /**
   * Settings under Custom Styling tab.
   */
  $form['insert_codes']['insert_codes_tab'] = [
    '#type'  => 'vertical_tabs',
  ];
  // Insert Codes -> Head
  $form['insert_codes']['head'] = [
    '#type'        => 'details',
    '#title'       => t('Head'),
    '#description' => t('<h3>Insert Codes Before &lt;/HEAD&gt;</h3><hr />'),
    '#group' => 'insert_codes_tab',
  ];
  // Insert Codes -> Body
  $form['insert_codes']['body'] = [
    '#type'        => 'details',
    '#title'       => t('Body'),
    '#group' => 'insert_codes_tab',
  ];
  // Insert Codes -> CSS
  $form['insert_codes']['css'] = [
    '#type'        => 'details',
    '#title'       => t('CSS Codes'),
    '#group'       => 'insert_codes_tab',
  ];
  // Insert Codes -> Head -> Head codes
  $form['insert_codes']['head']['insert_head'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable custom codes in &lt;head&gt; section'),
    '#default_value' => theme_get_setting('insert_head'),
    '#description'   => t("Check this option to enable custom codes in &lt;head&gt; section. Uncheck to disable this feature."),
  ];
  $form['insert_codes']['head']['head_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('&lt;head&gt; Codes'),
    '#default_value' => theme_get_setting('head_code'),
    '#description'   => t("Please enter your custom codes for &lt;head&gt; section. These codes will be inserted just before <strong>&lt;/head&gt;</strong>."),
  ];
  // Insert Codes -> Body -> Body start codes
  $form['insert_codes']['body']['insert_body_start_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Insert code after &lt;BODY&gt; tag'),
  ];
  $form['insert_codes']['body']['insert_body_start_section']['insert_body_start'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable custom codes after &lt;body&gt; tag'),
    '#default_value' => theme_get_setting('insert_body_start'),
    '#description'   => t("Check this option to enable custom codes after &lt;body&gt; tag. Uncheck to disable this feature."),
  ];
  $form['insert_codes']['body']['insert_body_start_section']['body_start_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Codes'),
    '#default_value' => theme_get_setting('body_start_code'),
    '#description'   => t("Please enter your custom codes after &lt;body&gt; tag. These codes will be inserted just after <strong>&lt;body&gt;</strong> tag."),
  ];
  // Insert Codes -> Body -> Body end codes
  $form['insert_codes']['body']['insert_body_end_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Insert code before &lt;/BODY&gt; tag'),
  ];
  $form['insert_codes']['body']['insert_body_end_section']['insert_body_end'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable custom codes before &lt;/body&gt; tag.'),
    '#default_value' => theme_get_setting('insert_body_end'),
    '#description'   => t("Check this option to enable custom codes before &lt;/body&gt; tag. Uncheck to disable this feature."),
  ];
  $form['insert_codes']['body']['insert_body_end_section']['body_end_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Codes'),
    '#default_value' => theme_get_setting('body_end_code'),
    '#description'   => t("Please enter your custom codes before &lt;/body&gt; tag. These codes will be inserted just before <strong>&lt;/body&gt;</strong>."),
  ];
  // Insert Codes -> css
  $form['insert_codes']['css']['css_custom'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Addtional CSS'),
  ];

  $form['insert_codes']['css']['custom']['styling'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable custom css'),
    '#default_value' => theme_get_setting('styling', 'milipro'),
    '#description'   => t("Check this option to enable custom styling. Uncheck to disable this feature.<br />Please refer to this tutorial page. <a href='https://www.drupar.com/milipro-documentation/custom-css' target='_blank'>How To Use Custom Styling</a>"),
  ];

  $form['insert_codes']['css']['custom']['styling_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Custom CSS Codes'),
    '#default_value' => theme_get_setting('styling_code', 'milipro'),
    '#description'   => t('Please enter your custom css codes in this text box. You can use it to customize the appearance of your site.<br />Please refer to this tutorial for detail: <a href="https://www.drupar.com/milipro-documentation/custom-css" target="_blank">Custom CSS</a>'),
  ];

  /**
   * Settings under License tab.
   */
  $form['license']['info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('License Type'),
    '#description' => t('<p>Your theme license is: <strong>Single Domain License</strong></p>
    <p>You are allowed to use this theme on a single website.</p>
    <hr /><br /><a href="https://www.drupar.com/upgrade/milipro" target="_blank">Upgrade to unlimited domain license</a>. Upgrade fee is $30 only.'),
  ];

  /**
   * Settings under update tab.
   */
  $form['update']['update_version'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Current Theme Version'),
    '#description' => t('8.4.1'),
  ];
  $form['update']['update_info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Latest MiliPro Version'),
    '#description' => t("<pre>$theme_update_info</pre>"),
  ];
  // Settings under support tab.
  $form['support']['info'] = [
    '#type'        => 'fieldset',
    '#description' => t('<h4>Documentation</h4>
    <p>We have a detailed documentation about how to use theme. Please read the <a href="https://www.drupar.com/milipro-documentation" target="_blank">MiliPro Theme Documentation</a>.</p>
    <hr />
    <h4>Open Support Ticket</h4>
    <p>If you need support that is beyond our theme documentation, please open a support ticket.<br /><a href="https://www.drupar.com/node/add/ticket" target="_blank">Create a support ticket</a></p>'),
  ];
// End form.
}
