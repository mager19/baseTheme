<?php

    /**
     * 
     * Description: Shortcode link button within the content
     * 
     * Usage: [button link="https://www.google.com.co" target="_blank" size="large"]go to google[/button]
     * 
     */
    function fps_buttons( $atts= [], $content = null ) { 

        $a = shortcode_atts( array( 
            'class' => 'btn', 
            'color' => '', 
            'style' => '', 
            'size'  => '', 
            'link'  =>  '/#', 
            'target'=> '_self' 
        ), $atts ); 

        if( !empty( $a["link"] ) ) { 
            $siteUrl = get_bloginfo('url'); 
            $linkDomain = parse_url( $a["link"] )['host']; //get domain link, example: ( namedomain.com ) 
            
            // Check if link button has a domain example: ( namedomain.com ) 
            if( !empty($linkDomain) ) { 
                $btnLink = $a["link"]; 
            }else { 
                $btnLink = $siteUrl.$a["link"]; 
            } 
        } 
        if( str_replace(' ', '', $a["target"] ) == '_blank' ) { 
            $attsTargetrel = 'rel="noreferrer noopener"'; 
        } 
        return '<a class="'.esc_attr( $a['class'] ).' '.esc_attr($a['color']).' '.esc_attr($a['style']).' '.esc_attr($a['size']).'"  href="'.esc_attr( $btnLink ).'" '.$attsTargetrel.' target="'.esc_attr($a['target']).'" > 
                    '.$content. 
                '</a>'; 
    } 

    add_shortcode('button', 'fps_buttons'); 