<?php
add_action('cmb2_init', 'lf_metabox_food_actor');
function lf_metabox_food_actor()
{
    $prefix = 'actor_';

    $cmb = new_cmb2_box(array(
        'id' => $prefix . 'main_info',
        'title' => __('General Info', 'linkedfarm'),
        'object_types' => array('food_actor'),
        'context' => 'normal',
        'priority' => 'high',
    ));

    $cmb->add_field(array(
        'name' => __('Name', 'linkedfarm'),
        'id' => $prefix . 'name',
        'type' => 'text',
        'attributes' => array(
            'class' => 'cmb2-qtranslate'
        )
    ));

    $cmb->add_field(array(
        'name' => __('Short Description', 'linkedfarm'),
        'id' => $prefix . 'desc_short',
        'type' => 'textarea_small',
        'attributes' => array(
            'class' => 'cmb2-qtranslate'
        )
    ));
//
//    $cmb->add_field(array(
//        'name' => __('Full Description', 'linkedfarm'),
//        'id' => $prefix . 'desc_full',
//        'type' => 'textarea',
//        'attributes' => array(
//            'class' => 'cmb2-qtranslate'
//        )
//    ));

    $cmb->add_field(array(
        'name' => __('Latitude', 'linkedfarm'),
        'id' => $prefix . 'lat',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Longitude', 'linkedfarm'),
        'id' => $prefix . 'lon',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Address', 'linkedfarm'),
        'id' => $prefix . 'address',
        'type' => 'address'

    ));

    $contact_field_id = $cmb->add_field( array(
        'id' => $prefix . 'contact_info',
        'name' => __( 'Contact Info', 'linkedfarm' ),
        'type'        => 'group',
        'options'     => array(
            'group_title'   => __( 'Entry {#}', 'linkedfarm' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Another Entry', 'linkedfarm' ),
            'remove_button' => __( 'Remove Entry', 'linkedfarm' ),
            'sortable'      => true, // beta
            'closed'     => true, // true to have the groups closed by default
        ),
    ) );


    $cmb->add_group_field($contact_field_id, array(
        'name' => __('Contact Name:', 'linkedfarm'),
        'id' => $prefix . 'name',
        'type' => 'text'
    ));

    $cmb->add_group_field($contact_field_id, array(
        'name' => __('Tel:', 'linkedfarm'),
        'id' => $prefix . 'tel',
        'type' => 'text'
    ));

    $cmb->add_group_field($contact_field_id, array(
        'name' => __('Email:', 'linkedfarm'),
        'id' => $prefix . 'email',
        'type' => 'text_email'
    ));

    $cmb->add_group_field($contact_field_id, array(
        'name' => __('Web:', 'linkedfarm'),
        'id' => $prefix . 'www',
        'type' => 'text_url'
    ));

    $cmb->add_field(array(
        'name' => __('Currency', 'linkedfarm'),
        'id' => $prefix . 'currency',
        'type' => 'text',
        'default' => 'eur',
    ));

    $cmb->add_field(array(
        'name' => __('Language', 'linkedfarm'),
        'id' => $prefix . 'lang',
        'type' => 'multicheck',
        'default' => 'en,nl,fr',
        'options' => array(
            'en' => __('en', 'linkedfarm'),
            'fr' => __('fr', 'linkedfarm'),
            'nl' => __('nl', 'linkedfarm'),
        ),
    ));

//    $cmb->add_field(array(
//        'name' => __('Our Rating', 'linkedfarm'),
//        'id' => $prefix . 'our_rating',
//        'type' => 'select',
//        'default' => 'weekly',
//        'options' => array(
//            '0' => __('0', 'linkedfarm'),
//            '1' => __('1', 'linkedfarm'),
//            '2' => __('2', 'linkedfarm'),
//            '3' => __('3', 'linkedfarm'),
//            '4' => __('4', 'linkedfarm'),
//            '5' => __('5', 'linkedfarm'),
//        ),
//    ));

    $cmb->add_field(array(
        'name' => __('VAT number', 'linkedfarm'),
        'id' => $prefix . 'vat_no',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Bank Account', 'linkedfarm'),
        'id' => $prefix . 'bank_acc',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Pictures', 'linkedfarm'),
        'id' => $prefix . 'pics',
        'type' => 'file_list',
    ));

    $cmb->add_field(array(
        'name' => __('Video', 'linkedfarm'),
        'id' => $prefix . 'video',
        'type' => 'file_list',
    ));

    $cmb->add_field(array(
        'name' => __('Media', 'linkedfarm'),
        'id' => $prefix . 'media',
        'type' => 'oembed',
        'repeatable' => true
    ));
}

?>