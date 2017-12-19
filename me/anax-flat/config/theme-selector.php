<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/style.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => ["css/light.min.css"]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => ["css/color.min.css"]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => ["css/dark.min.css"]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => ["css/colorful.min.css"]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => ["css/typographytheme.min.css"]
        ],

        "separator2" => "------------------------------------------------",

        "fun"       => [
            "title"      => "All fun, test and play, make it stand out!",
            "class"      => "fun",
            "stylesheets" => []
        ],

        "separator3" => "------------------------------------------------",

        "Design1317"       => [
            "title"      => "Principer 13 och 17",
            "class"      => "Design1317",
            "stylesheets" => ["css/design1317.min.css"]
        ],

        "Design1119"       => [
            "title"      => "Principer 11 och 19",
            "class"      => "Design1119",
            "stylesheets" => ["css/design1119.min.css"]
        ],

        "separator4" => "------------------------------------------------",

        "Design-bildbakgrund"       => [
            "title"      => "Bildbakgrund",
            "class"      => "Bildbakgrund",
            "stylesheets" => ["css/design-bildbakgrund.min.css"]
        ],

        "Design-gradient"       => [
            "title"      => "Design-gradient",
            "class"      => "Design-gradient",
            "stylesheets" => ["css/design-gradient.min.css"]
        ],

        "Design-struktur"       => [
            "title"      => "Struktur",
            "class"      => "Struktur",
            "stylesheets" => ["css/design-struktur.min.css"]
        ],
    ]
];
