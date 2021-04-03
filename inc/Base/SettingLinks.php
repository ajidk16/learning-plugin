<?php

namespace Inc\Base;

class SettingLinks
{
    protected $plugin;

    public function __construct()
    {
        $this->plugin = PLUGIN;
    }

    public function register()
    {
        add_filter("plugin_action_links_$this->plugin", [$this, 'setting_link']);
    }

    public function setting_link($links)
    {
        $setting_link = '<a href="admin.php?page=plugin_learning">Settings</a>';
        array_push($links, $setting_link);
        return $links;
    }
}
