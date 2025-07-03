<?php
/**
 * Banner Section
 * 
 * slug: tutor-elearning/banner
 * title: Banner
 * categories: tutor-elearning
 */

return array(
    'title'      =>__( 'Banner', 'tutor-elearning' ),
    'categories' => array( 'tutor-elearning' ),
    'content'    => '<!-- wp:group {"tagName":"main","className":"wp-block-group slider-main-box alignfull wow bounceInDown center","layout":{"type":"constrained","contentSize":"100%"}} -->
    <main class="wp-block-group slider-main-box alignfull wow bounceInDown center"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/banner-image.png","id":23,"dimRatio":0,"isUserOverlayColor":true,"minHeight":600,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"className":"banner-section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
        <div class="wp-block-cover is-light banner-section" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-23" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner-image.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"0"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40%"><!-- wp:image {"id":12,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner-icon.png" alt="" class="wp-image-12"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:heading {"className":"banner-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white","fontFamily":"poppins"} -->
        <h2 class="wp-block-heading banner-heading has-white-color has-text-color has-link-color has-poppins-font-family" style="margin-top:0;margin-bottom:0;font-size:40px;font-style:normal;font-weight:600">'. esc_html__('Master Any Subject with Expert Tutors!','tutor-elearning').'</h2>
        <!-- /wp:heading -->
        
        <!-- wp:buttons {"className":"banner-button","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex"}} -->
        <div class="wp-block-buttons banner-button" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"color":{"background":"var(--wp--preset--color--accent)"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"medium","fontFamily":"poppins"} -->
        <div class="wp-block-button has-custom-font-size has-poppins-font-family has-medium-font-size" style="font-style:normal;font-weight:400"><a class="wp-block-button__link has-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:10px;background-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">'. esc_html__('READ MORE','tutor-elearning').'</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"verticalAlignment":"center","className":"banner-image-wrap"} -->
        <div class="wp-block-column is-vertically-aligned-center banner-image-wrap"></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:cover --></main>
        <!-- /wp:group -->',
);