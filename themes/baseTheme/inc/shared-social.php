<?php
function baseTheme__socialShare()
{
    global $post;
    $showBlock = get_field('show_share_icons', 'option');
    if (is_singular('post') && $showBlock) {
        // Get current page URL
        $iconURL = get_permalink();

        // Get current page title
        $iconTitle = str_replace(' ', '%20', get_the_title());
        $sumary = str_replace(' ', '%20', get_the_excerpt());


        // Get Post Thumbnail for pinterest
        $iconThumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');

        // Construct sharing URL without using any script
        $twitterURL = 'https://twitter.com/intent/tweet?text=' . $iconTitle . '&amp;url=' . $iconURL . '&amp;via=icon';
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $iconURL;
        // $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $iconURL . '&amp;title=' . $iconTitle . '&sumary="' . $sumary . '"';

        $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $iconURL . '';


        //Svg icons
        $twitterIcon = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 455 455" style="enable-background:new 0 0 455 455;" xml:space="preserve">
        <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M0,0v455h455V0H0z M352.751,163.259c0.123,2.773,0.186,5.561,0.186,8.36
            c0,85.403-65.002,183.876-183.873,183.876c-36.496,0-70.466-10.697-99.065-29.037c5.056,0.601,10.199,0.907,15.417,0.907
            c30.278,0,58.143-10.331,80.262-27.668c-28.28-0.519-52.148-19.204-60.373-44.88c3.948,0.757,7.997,1.163,12.161,1.163
            c5.894,0,11.604-0.794,17.027-2.268c-29.563-5.939-51.841-32.057-51.841-63.368c0-0.273,0-0.544,0.006-0.814
            c8.712,4.84,18.676,7.748,29.271,8.084c-17.342-11.589-28.748-31.371-28.748-53.79c0-11.845,3.187-22.945,8.751-32.492
            c31.873,39.101,79.493,64.828,133.203,67.526c-1.103-4.732-1.677-9.665-1.677-14.729c0-35.688,28.938-64.623,64.626-64.623
            c18.589,0,35.385,7.847,47.173,20.406c14.719-2.895,28.551-8.276,41.038-15.681c-4.824,15.092-15.071,27.754-28.415,35.754
            c13.074-1.563,25.528-5.038,37.118-10.178C376.336,142.766,365.38,154.149,352.751,163.259z"/>        
        </svg>
        ';

        $facebookIcon = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 455 455" style="enable-background:new 0 0 455 455;" xml:space="preserve">
        <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M0,0v455h455V0H0z M301.004,125.217H265.44
            c-7.044,0-14.153,7.28-14.153,12.696v36.264h49.647c-1.999,27.807-6.103,53.235-6.103,53.235h-43.798V385h-65.266V227.395h-31.771
            v-53.029h31.771v-43.356c0-7.928-1.606-61.009,66.872-61.009h48.366V125.217z"/>
        </svg>
        ';

        $linkedInIcon = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 455 455" style="enable-background:new 0 0 455 455;" xml:space="preserve">
        <g>
            <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M246.4,204.35v-0.665c-0.136,0.223-0.324,0.446-0.442,0.665H246.4z"/>
            <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M0,0v455h455V0H0z M141.522,378.002H74.016V174.906h67.506V378.002z
                    M107.769,147.186h-0.446C84.678,147.186,70,131.585,70,112.085c0-19.928,15.107-35.087,38.211-35.087
                c23.109,0,37.31,15.159,37.752,35.087C145.963,131.585,131.32,147.186,107.769,147.186z M385,378.002h-67.524V269.345
                c0-27.291-9.756-45.92-34.195-45.92c-18.664,0-29.755,12.543-34.641,24.693c-1.776,4.34-2.24,10.373-2.24,16.459v113.426h-67.537
                c0,0,0.905-184.043,0-203.096H246.4v28.779c8.973-13.807,24.986-33.547,60.856-33.547c44.437,0,77.744,29.02,77.744,91.398V378.002
                z"/>
        </g>
        
        </svg>
        ';


        // Add sharing button at the end of page/page content
        $variable .= '<div class="icon-social"><i class="fa fa-share-alt" aria-hidden="true"></i><b>SHARE IT ON</b> <div class="icons">';
        $variable .= '<a class="icon-link" href="' . $twitterURL . '" target="_blank">' . $twitterIcon . '</a>';
        $variable .= '<a class="icon-link" href="' . $facebookURL . '" target="_blank">' . $facebookIcon . '</a>';
        $variable .= '<a class="icon-link" href="' . $linkedInURL . '" target="_blank">' . $linkedInIcon . '</a>';
        $variable .= '</div></div>';

        return $variable;
    }
};
