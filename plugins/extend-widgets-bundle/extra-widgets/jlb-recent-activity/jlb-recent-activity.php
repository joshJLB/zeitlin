<?php
/*
Widget Name: JLB Recent Activity
Description: This is for the Recent Activity module displayed on the Child Page Mockup.
Author:JLB (Josh Kincheloe)
*/
class JLB_Recent_Activity extends SiteOrigin_Widget {
  function get_template_name($instance) {
    return 'jlb-recent-activity-template';
  }
  function get_template_dir($instance) {
    return 'jlb-recent-activity-templates';
  }
  function initialize() {
    $this->register_frontend_styles(
      array(
        array( 'jlb-recent-activity-css', '/wp-content/plugins/extend-widgets-bundle/css/jlb-recent-activity.min.css', array() ),
      )
    );
    $this->register_frontend_scripts(
      array(
        array( 'jlb-recent-activity-js', '/wp-content/plugins/extend-widgets-bundle/js/jlb-recent-activity.js', array( 'jquery' ), '1.0')
      )
    );
  }
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'jlb-recent-activity',
      // The name of the widget for display purposes.
      __('JLB Recent Activity', 'jlb-recent-activity-text-domain'),
      // The widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
        'description' => __('JLB Recent Activity', 'jlb-recent-activity-text-domain'),
      ),
      //The base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }
  function get_widget_form() {
    // https://siteorigin.com/docs/widgets-bundle/form-building/form-fields/
    return array(
      // put all fields here
        'recent_repeater' => array(
          'type' => 'repeater',
          'label' => __('Recent Repeater', 'widget-form-fields-text-domain'),
          'item_name' => __('', 'widget-form-fields-text-domain'),
          'fields' => array(
            'section_one' => array(
              'type' => 'text',
              'label' => __('Section One', 'widget-form-fields-text-domain')
            ),
            'section_two' => array(
              'type' => 'text',
              'label' => __('Section Two', 'widget-form-fields-text-domain')
            ),
            'section_three' => array(
              'type' => 'text',
              'label' => __('Section Three', 'widget-form-fields-text-domain')
            ),
            'section_four' => array(
              'type' => 'text',
              'label' => __('Section Four', 'widget-form-fields-text-domain')
            ),
          )
        ),
    );
  }
}
siteorigin_widget_register('jlb-recent-activity', __FILE__, 'JLB_Recent_Activity');