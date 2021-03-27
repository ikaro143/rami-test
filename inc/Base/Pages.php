<?php

/*
*
* @package Yariko
*
*/

namespace Wrmm\Inc\Base;
use Wrmm\Inc\Model\Customer;

class Pages{

    public function register(){

        add_action('admin_menu', function(){
            add_menu_page(
                __( 'Custom Menu Title', 'textdomain' ),
                'custom menu',
                'manage_options',
                'custompage',
                array($this,'my_custom_menu_page'),
                '',
                6
            );
        });
    }

    function my_custom_menu_page(){
        $customer = new Customer();
        var_dump($customer->getCustomer());
    }


    

}
?>