<?php

/**
 * Theme settings
 *
 * @param array $settings
 * @return array
 */
function theme_app_settings($settings) {
    return json_decode(<<<JSON
    {
    "colorScheme": {
        "bodyColors": [
            "#292c2c",
            "#ffffff"
        ],
        "bgColor": "#ffffff",
        "colors": [
            "#f7cf00",
            "#17cad0",
            "#4c5166",
            "#858a9f",
            "#b7e2e4"
        ],
        "shadingContrast": "body-alt-color",
        "whiteContrast": "body-color",
        "bgContrast": "body-color",
        "name": "u13"
    },
    "fontScheme": {
        "name": "custom-font-family-9",
        "fonts": {
            "heading": "Ubuntu, sans-serif",
            "text": "Open Sans, sans-serif",
            "accent": "Arial, sans-serif",
            "headingTitle": "Ubuntu",
            "textTitle": "Open Sans"
        }
    },
    "typography": {
        "name": "Light",
        "isDefault": true,
        "title": {
            "font-weight": "300",
            "line-height": "1_1",
            "font-size": 4.5,
            "margin-top": 20,
            "margin-bottom": 20,
            "SM": {
                "font-size": 3.75
            },
            "XS": {
                "font-size": 3
            }
        },
        "subtitle": {
            "font-weight": "300",
            "line-height": "1_2",
            "font-size": 2.25,
            "margin-top": 20,
            "margin-bottom": 20,
            "SM": {
                "font-size": 1.5
            }
        },
        "h1": {
            "font-weight": "300",
            "line-height": "1_1",
            "font-size": 3.75,
            "margin-top": 20,
            "margin-bottom": 20,
            "SM": {
                "font-size": 3
            },
            "XS": {
                "font-size": 1.875
            }
        },
        "h2": {
            "font-weight": "300",
            "line-height": "1_2",
            "font-size": 2.25,
            "margin-top": 20,
            "margin-bottom": 20,
            "SM": {
                "font-size": 1.5
            }
        },
        "h3": {
            "bold": false,
            "font-weight": "300",
            "line-height": "1_2",
            "font-size": 1.875,
            "margin-top": 20,
            "margin-bottom": 20,
            "SM": {
                "font-size": 1.5
            }
        },
        "h4": {
            "font-weight": "300",
            "line-height": "1_2",
            "font-size": 1.5,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "h5": {
            "font-weight": "300",
            "line-height": "1_2",
            "font-size": 1.25,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "h6": {
            "font-weight": "300",
            "line-height": "1_2",
            "font-size": 1.125,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "largeText": {
            "bold": false,
            "line-height": "1_6",
            "font-size": 1,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "text": {
            "bold": false,
            "line-height": "1_6",
            "font-size": 1,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "smallText": {
            "bold": false,
            "line-height": "1_6",
            "font-size": 0.875,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "hyperlink": {
            "line-height": "1_8",
            "text-color": "palette-1-base"
        },
        "link": {},
        "button": {
            "letter-spacing": "1",
            "font-size": 1,
            "line-height": "1_4",
            "color": "palette-1-base",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "blockquote": {
            "font-style": "italic",
            "line-height": "1_6",
            "font-size": 1.25,
            "indent": 20,
            "border": 4,
            "border-color": "palette-1-base",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "metadata": {
            "font-size": 0.75,
            "letter-spacing": "1",
            "line-height": "1_4",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "list": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "orderedlist": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "postContent": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "theme": {
            "gradient": "",
            "image": "",
            "sheet-width-xl": 1140,
            "sheet-width-lg": 940,
            "sheet-width-md": 720,
            "sheet-width-sm": 540,
            "sheet-width-xs": 340
        },
        "htmlBaseSize": 16
    }
}
JSON
, true);
}
add_filter('np_theme_settings', 'theme_app_settings');

function theme_analytics() {
?>
    <?php $GLOBALS['googleAnalyticsMarker'] = false; ?>
<?php
}
add_action('wp_head', 'theme_analytics', 0);


function theme_intlTelInputMeta() {
    $GLOBALS['meta_tel_input'] = true; ?>
    <meta data-intl-tel-input-cdn-path="<?php echo get_template_directory_uri(); ?>/intlTelInput/" />
    <?php
}
add_action('wp_head', 'theme_intlTelInputMeta', 0);

function theme_favicon() {
    $custom_favicon_id = get_theme_mod('custom_favicon');
    @list($favicon_src, ,) = wp_get_attachment_image_src($custom_favicon_id, 'full');
    if (!$favicon_src) {
        $favicon_src = "";
        if ($favicon_src) {
            $favicon_src = get_template_directory_uri() . '/images/' . $favicon_src;
        }
    }

    if ($favicon_src) {
        echo "<link rel=\"icon\" href=\"$favicon_src\">";
    }
}
add_action('wp_head', 'theme_favicon');

function theme_gtm_header() {
    ?>
    <?php $GLOBALS['gtmMarker'] = false; ?>
    <?php
}
add_action('wp_head', 'theme_gtm_header', 0);

function theme_gtm_body() {
    ob_start(); ?>
    
    <?php $gtmCodeNoScript = ob_get_clean(); ?>
    <script>
        jQuery(document).ready(function () {
            jQuery(document).find('body').prepend(`<?php echo $gtmCodeNoScript; ?>`)
        });
    </script>
    <?php
}
add_action('wp_footer', 'theme_gtm_body');