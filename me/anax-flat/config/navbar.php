<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Report"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "theme selector" => [
                "text"  => t("Theme-selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Theme selector")
            ],

            "theme" => [
                "text"  => t("Theme"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Theme")
            ],


            "typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("typography")
            ],

            "vgrid" => [
                "text"  => t("vgrid"),
                "url"   => $this->di->get("url")->create("vgrid"),
                "title" => t("vgrid")
            ],

            "analysis" => [
                "text"  => t("Analysis"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("analysis")
            ],

            "images" => [
                "text"  => t("Images"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("images")
            ],

            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Blogg")
            ],

            "Designprinciper" => [
                "text"  => t("Designprinciper"),
                "url"   => $this->di->get("url")->create("design-principles"),
                "title" => t("Designprinciper")
            ],

            "Designkomponenter" => [
                "text"  => t("Designkomponenter"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("Designkomponenter")
            ],
        ],
    ],



/*
    // Used as menu together with responsive menu
    // Name of this menu
    */

    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Report"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],
        ],
    ],


    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
