<?php
/*
Widget Name: JLB Image Gallery
Description: This is for the Image Gallery module displayed on the Child Page Mockup.
Author:JLB (Josh Kincheloe)
*/
class JLB_Image_Gallery extends SiteOrigin_Widget {
  function get_template_name($instance) {
    return 'jlb-image-gallery-template';
  }
  function get_template_dir($instance) {
    return 'jlb-image-gallery-templates';
  }
  function initialize() {
    $this->register_frontend_styles(
      array(
        array( 'jlb-image-gallery-css', '/wp-content/plugins/extend-widgets-bundle/css/jlb-image-gallery.min.css', array() ),
      )
    );
    /*
    $this->register_frontend_scripts(
      array(
        array( 'jlb-image-gallery-js', '/wp-content/plugins/extend-widgets-bundle/js/jlb-image-gallery.js', array( 'jquery' ), '1.0')
      )
    );
    */
  }
  function __construct() {
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'jlb-image-gallery',
      // The name of the widget for display purposes.
      __('JLB Image Gallery', 'jlb-image-gallery-text-domain'),
      // The widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
        'description' => __('JLB Image Gallery', 'jlb-image-gallery-text-domain'),
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
          'label' => __('Section Title', 'widget-form-fields-text-domain')
        ),
        'gallery_repeater' => array(
          'type' => 'repeater',
          'label' => __('Gallery', 'widget-form-fields-text-domain'),
          'item_name' => __('', 'widget-form-fields-text-domain'),
          'fields' => array(
            'image_one' => array(
              'type' => 'media',
              'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
              'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
              'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
              'library' => 'image',
            ),
            'link_text_one' => array(
              'type' => 'text',
              'label' => __('Link Text', 'widget-form-fields-text-domain')
            ),
            'link_one' => array(
              'type' => 'text',
              'label' => __('Link URL', 'widget-form-fields-text-domain')
            ),
            'image_two' => array(
                'type' => 'media',
                'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
                'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
                'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
                'library' => 'image',
              ),
              'link_text_two' => array(
                'type' => 'text',
                'label' => __('Link Text', 'widget-form-fields-text-domain')
              ),
              'link_two' => array(
                'type' => 'text',
                'label' => __('Link URL', 'widget-form-fields-text-domain')
              ),
              'image_three' => array(
                'type' => 'media',
                'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
                'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
                'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
                'library' => 'image',
              ),
              'link_text_three' => array(
                'type' => 'text',
                'label' => __('Link Text', 'widget-form-fields-text-domain')
              ),
              'link_three' => array(
                'type' => 'text',
                'label' => __('Link URL', 'widget-form-fields-text-domain')
              ),
              'image_four' => array(
                'type' => 'media',
                'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
                'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
                'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
                'library' => 'image',
              ),
              'link_text_four' => array(
                'type' => 'text',
                'label' => __('Link Text', 'widget-form-fields-text-domain')
              ),
              'link_four' => array(
                'type' => 'text',
                'label' => __('Link URL', 'widget-form-fields-text-domain')
              ),
              'image_five' => array(
                'type' => 'media',
                'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
                'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
                'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
                'library' => 'image',
              ),
              'link_text_five' => array(
                'type' => 'text',
                'label' => __('Link Text', 'widget-form-fields-text-domain')
              ),
              'link_five' => array(
                'type' => 'text',
                'label' => __('Link URL', 'widget-form-fields-text-domain')
              ),
              'image_six' => array(
                'type' => 'media',
                'label' => __('Choose an Image', 'widget-form-fields-text-domain'),
                'choose' => __( 'Choose image', 'widget-form-fields-text-domain' ),
                'update' => __( 'Set image', 'widget-form-fields-text-domain' ),
                'library' => 'image',
              ),
              'link_text_six' => array(
                'type' => 'text',
                'label' => __('Link Text', 'widget-form-fields-text-domain')
              ),
              'link_six' => array(
                'type' => 'text',
                'label' => __('Link URL', 'widget-form-fields-text-domain')
              ),
          )
        ),
    );
  }
}
siteorigin_widget_register('jlb-image-gallery', __FILE__, 'JLB_Image_Gallery');