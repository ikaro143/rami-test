<?php
namespace Rami\Inc\Model;

class HelloWorld
{
    function register(){
        add_shortcode( 'hello_world', array($this, 'hello_world')  );
        add_shortcode( 'get_post', array($this, 'get_post')  );


    }

    function hello_world( $atts ) {

        $a = shortcode_atts( array(
            'tag' => 'h1',
            'color' => 'red',
        ), $atts );

        $open_tag = '<' . $a['tag'] . ' style="color: ' . $a['color'] . ' ">';
        $close_tag = '</' . $a['tag'] . '>';

        return $open_tag . "Hello World !!!" . $close_tag;
    }

    function get_post( $atts ) {
        $args = array(
            'numberposts' => -1
        );
        $posts = get_posts($args);
        $html = '';
        foreach ($posts as $post){
            $html .= "<p>" . $post->post_content . "</p>";
        }

        return $html;
    }

}