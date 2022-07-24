<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_form');
function crb_attach_form()
{
    Container::make('post_meta', __('Form'))
        ->where('post_type', '=', 'page')
        ->add_fields(array(
            Field::make('text', 'crb_phone_number', __('Phone Number'))
                ->set_help_text('Add number here'),
            /* Field::make('sidebar', 'crb_custom_sidebar')
                ->set_help_text('Add sidebar') */
        ));
}

/* 
    Container::make('post_meta', 'Custom Data')
        ->where('post_type', '=', 'page')
        ->add_fields(array(
            Field::make('map', 'crb_location')
                ->set_position(37.423156, -122.084917, 14),
            Field::make('sidebar', 'crb_custom_sidebar'),
            Field::make('image', 'crb_photo'),
        ));
} */
