<?php
/*
Widget Name: JLB Chartjs
Description: This is for the Chartjs module displayed on the Child Page Mockup.
Author:JLB (Josh Kincheloe)
*/
class JLB_Chartjs extends SiteOrigin_Widget {
  function get_template_name($instance) {
    return 'jlb-chartjs-template';
  }
  function get_template_dir($instance) {
    return 'jlb-chartjs-templates';
  }
  function initialize() {
    $this->register_frontend_styles(
      array(
        array( 'jlb-chartjs-css', '/wp-content/plugins/extend-widgets-bundle/css/jlb-chartjs.min.css', array() ),
      )
    );
    /*
    $this->register_frontend_scripts(
      array(
        array( 'jlb-chartjs-js', '/wp-content/plugins/extend-widgets-bundle/js/jlb-chartjs.js', array( 'jquery' ), '1.0')
      )
    );
    */
  }
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'jlb-chartjs',
      // The name of the widget for display purposes.
      __('JLB Chartjs', 'jlb-chartjs-text-domain'),
      // The widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
        'description' => __('JLB Chartjs', 'jlb-chartjs-text-domain'),
      ),
      //The base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }
  function get_widget_form() {
    // https://siteorigin.com/docs/widgets-bundle/form-building/form-fields/
    return array(
      // put all fields here
        'title' => array(
          'type' => 'text',
          'label' => __('Title of Graph', 'widget-form-fields-text-domain')
        ),
        'paramater_horizontal' => array(
            'type' => 'text',
            'label' => __('Name for horizontal axis', 'widget-form-fields-text-domain')
        ),
        'parameter_vertical' => array(
          'type' => 'text',
          'label' => __('Name for vertical axis', 'widget-form-fields-text-domain')
        ),
        'values' => array(
          'type' => 'repeater',
          'label' => __('Values', 'widget-form-fields-text-domain'),
          'item_name' => __('Values', 'widget-form-fields-text-domain'),
          'fields' => array(
            'x_number' => array(
                'type' => 'number',
                'label' => __( 'Enter a number for horizontal axis', 'widget-form-fields-text-domain' ),
                'default' => '12654'
            ),
            'y_number' => array(
                'type' => 'number',
                'label' => __( 'Enter a number for vertical axis', 'widget-form-fields-text-domain' ),
                'default' => '12654'
            ) 
          )
        ),
    );
  }
}
siteorigin_widget_register('jlb-chartjs', __FILE__, 'JLB_Chartjs');