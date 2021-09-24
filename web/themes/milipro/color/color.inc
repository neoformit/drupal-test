<?php

/**
 * @file
 * Lists available colors and color schemes for the MiliPro theme.
 */

$info = [
  // Available colors and color labels used in theme.
  'fields' => [
    'top' => t('Theme base color'),
    'bottom' => t('Theme Base Color Second'),
    'bg' => t('Body background'),
    'sidebar' => t('Sidebar Block Background'),
    'text' => t('Text color'),
    'heading' => t('Heading color'),
    'link_hover' => t('Link hover color'),
    'button_hover' => t('Button hover color'),
    'border' => t('Line and Border color'),
  ],
  // Pre-defined color schemes.
  'schemes' => [
    'default' => [
      'title' => t('MiliPro (default)'),
      'colors' => [
        'top' => '#d1392b',
        'bottom' => '#841309',
        'bg' => '#fcfbf8',
        'sidebar' => '#ffffff',
        'text' => '#404040',
        'heading' => '#191919',
        'link_hover' => '#111111',
        'button_hover' => '#222222',
        'border'  => '#d6d6d6',
      ],
    ],
  ],

  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => [
    'css/colors.css',
  ],

  // Files to copy.
  'copy' => [
    'logo.svg',
  ],

  // Gradient definitions.
  'gradients' => [
    [
      // (x, y, width, height).
      'dimension' => [0, 0, 0, 0],
      // Direction of gradient ('vertical' or 'horizontal').
      'direction' => 'vertical',
      // Keys of colors to use for the gradient.
      'colors' => ['top', 'bottom'],
    ],
  ],

  // Preview files.
  'preview_library' => 'milipro/color.preview',
  'preview_html' => 'color/preview.html',

  // Attachments.
  '#attached' => [
    'drupalSettings' => [
      'color' => [
        // Put the logo path into JavaScript for the live preview.
        'logo' => theme_get_setting('logo.url', 'milipro'),
      ],
    ],
  ],
];
