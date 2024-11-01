<?php

namespace PluginCube\Options;

class API 
{
    /**
     * Parent instance.
     *
     * @since 1.0.0
     * @access private
     * @var string
     */
    private $parent;

    /**
     * Class constructer.
     * 
     * @since 1.0.0
     * @access public
     * 
     * @param array $parent The parent instance.
     * 
     * @return void
     */
    public function __construct($parent)
    {
        $this->parent = $parent;
    }

    /**
     * Add a section
     * 
     * @since 1.0.0
     * @access public
     * 
     * @param array $args Section arguments.
     * 
     * @return void
     */
    public function add_section($args)
    {
        $id = $this->parent->args['id'];

        $args = apply_filters("plugincube/options/$id/add/section", $args);
        $args = apply_filters("plugincube/options/$id/add/section/$args[id]", $args);

        $args = wp_parse_args($args, [
            'title' => null,
            'description' => null,
            'fields' => []
        ]);

        $this->parent->args['sections'][] = $args;
    }

    /**
     * Add a field
     * 
     * @since 1.0.0
     * @access public
     * 
     * @param array $args Field arguments.
     * 
     * @return void
     */
    public function add_field($args)
    {
        $id = $this->parent->args['id'];

        $args = apply_filters("plugincube/options/$id/add/field", $args);
        $args = apply_filters("plugincube/options/$id/add/field/$args[section]/$args[id]", $args);

        $args = wp_parse_args($args, [
            'type' => 'text',
            'title' => null,
            'description' => null,
            'priority' => 10,
            'default' => null,
        ]);
        
        $this->parent->args['fields'][] = $args;

        foreach ($this->parent->args['sections'] as &$section) {
            if ($section['id'] === $args['section']) {
                $section['fields'][] = $args;
            }
        }
    }

    /**
     * Add a link to the menu
     * 
     * @since 1.0.0
     * @access public
     * 
     * @param array $args Menu item arguments.
     * 
     * @return void
     */
    public function add_link($args)
    {
        $id = $this->parent->args['id'];

        $args = apply_filters("plugincube/options/$id/add/link", $args);

        $args = wp_parse_args($args, [
            'type' => 'section',
            'title' => null,
            'icon' => 'ri-settings-4-fill',
            'priority' => 10,
        ]);

        $this->parent->args['menu'][] = $args;
    }
}