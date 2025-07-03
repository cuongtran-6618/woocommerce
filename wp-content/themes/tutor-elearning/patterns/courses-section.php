<?php
/**
 * Category Section
 * 
 * slug: tutor-elearning/courses-section
 * title: Category Section
 * categories: tutor-elearning
 */

return array(
    'title'      =>__( 'Courses Section', 'tutor-elearning' ),
    'categories' => array( 'tutor-elearning' ),
    'content'    => '<!-- wp:group {"className":"courses-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group courses-section" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"color":{"text":"var(--wp--preset--color--accent)"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}}},"fontSize":"large","fontFamily":"poppins"} -->
    <h2 class="wp-block-heading has-text-align-center has-text-color has-link-color has-poppins-font-family has-large-font-size" style="color:var(--wp--preset--color--accent);margin-top:0;margin-bottom:0;font-style:normal;font-weight:600">'. esc_html__('Featured Online Courses','tutor-elearning').'</h2>
    <!-- /wp:heading -->
    
    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"color":{"background":"var(--wp--preset--color--accent)"},"border":{"radius":"10px"},"spacing":{"padding":{"left":"var:preset|spacing|80","right":"var:preset|spacing|80","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"upper-heading","fontFamily":"poppins"} -->
    <div class="wp-block-button has-custom-font-size has-poppins-font-family has-upper-heading-font-size" style="font-style:normal;font-weight:400"><a class="wp-block-button__link has-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:10px;background-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--80)" rel="">'. esc_html__('DEGREE','tutor-elearning').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:columns {"verticalAlignment":"center","className":"course-section-column","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|60","bottom":"0"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center course-section-column" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","className":"block-wrap-inner wow pulse","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-column is-vertically-aligned-center block-wrap-inner wow pulse" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":71,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topRight":"10px","topLeft":"10px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/course01.png" alt="" class="wp-image-71" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;object-fit:cover"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:group {"className":"course-content","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
    <div class="wp-block-group course-content" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"className":"courses-price","style":{"elements":{"link":{"color":{"text":"#ffffffcc"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"},"color":{"background":"var(--wp--preset--color--accent)","text":"#ffffffcc"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"5px"}}} -->
    <div class="wp-block-button has-custom-font-size courses-price" style="font-size:20px;font-style:normal;font-weight:600"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;color:#ffffffcc;background-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--70)" rel="">'. esc_html__('Price $3,615','tutor-elearning').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"},"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","bottom":"var:preset|spacing|30","top":"var:preset|spacing|20"}},"color":{"text":"var(--wp--preset--color--secaccent)"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--secaccent)"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"upper-heading","fontFamily":"poppins"} -->
    <h3 class="wp-block-heading has-text-align-center has-text-color has-link-color has-poppins-font-family has-upper-heading-font-size" style="color:var(--wp--preset--color--secaccent);margin-top:var(--wp--preset--spacing--20);margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60);font-style:normal;font-weight:600">'. esc_html__('Bachelor of Science in Computer Science','tutor-elearning').'</h3>
    <!-- /wp:heading -->
    
    <!-- wp:columns {"verticalAlignment":"center","className":"lesson-count","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}}} -->
    <div class="wp-block-columns are-vertically-aligned-center lesson-count" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"color":{"text":"var(--wp--preset--color--accent)"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
    <p class="has-text-color has-link-color has-medium-font-size" style="color:var(--wp--preset--color--accent);font-style:normal;font-weight:600">'. esc_html__('6 lessons','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"color":{"text":"var(--wp--preset--color--accent)"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
    <p class="has-text-align-right has-text-color has-link-color has-medium-font-size" style="color:var(--wp--preset--color--accent);font-style:normal;font-weight:600">'. esc_html__('40 Students','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"className":"review-sec","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns review-sec" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"text":"#31313b"},"elements":{"link":{"color":{"text":"#31313b"}}}}} -->
    <p class="has-text-color has-link-color" style="color:#31313b"><img class="wp-image-52" style="width: 90px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="">'. esc_html__('(4.9/5.00)','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"right"}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textAlign":"right","className":"is-style-fill course-button","style":{"color":{"background":"#00000000","text":"var(--wp--preset--color--accent)"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontSize":"extra-small"} -->
    <div class="wp-block-button has-custom-font-size is-style-fill course-button has-extra-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><a class="wp-block-button__link has-text-color has-background has-link-color has-text-align-right wp-element-button" style="color:var(--wp--preset--color--accent);background-color:#00000000;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">'. esc_html__('READ MORE','tutor-elearning').'<img class="wp-image-55" style="width: 17px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/vector.png" alt=""></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","className":"block-wrap-inner wow pulse","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center block-wrap-inner wow pulse" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":80,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topRight":"10px","topLeft":"10px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/course02.png" alt="" class="wp-image-80" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:group {"className":"course-content","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
    <div class="wp-block-group course-content" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"className":"courses-price","style":{"elements":{"link":{"color":{"text":"#ffffffcc"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"},"color":{"background":"var(--wp--preset--color--accent)","text":"#ffffffcc"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"5px"}}} -->
    <div class="wp-block-button has-custom-font-size courses-price" style="font-size:20px;font-style:normal;font-weight:600"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;color:#ffffffcc;background-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--70)" rel="">'. esc_html__('Price $3,615','tutor-elearning').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"},"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70","bottom":"var:preset|spacing|30","top":"var:preset|spacing|20"}},"color":{"text":"var(--wp--preset--color--secaccent)"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--secaccent)"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"upper-heading","fontFamily":"poppins"} -->
    <h3 class="wp-block-heading has-text-align-center has-text-color has-link-color has-poppins-font-family has-upper-heading-font-size" style="color:var(--wp--preset--color--secaccent);margin-top:var(--wp--preset--spacing--20);margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--70);font-style:normal;font-weight:600">'. esc_html__('Bachelor of Business Administration','tutor-elearning').'</h3>
    <!-- /wp:heading -->
    
    <!-- wp:columns {"verticalAlignment":"center","className":"lesson-count","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}}} -->
    <div class="wp-block-columns are-vertically-aligned-center lesson-count" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"color":{"text":"var(--wp--preset--color--accent)"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
    <p class="has-text-color has-link-color has-medium-font-size" style="color:var(--wp--preset--color--accent);font-style:normal;font-weight:600">'. esc_html__('6 lessons','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"color":{"text":"var(--wp--preset--color--accent)"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
    <p class="has-text-align-right has-text-color has-link-color has-medium-font-size" style="color:var(--wp--preset--color--accent);font-style:normal;font-weight:600">'. esc_html__('40 Students','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"className":"review-sec","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns review-sec" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"text":"#31313b"},"elements":{"link":{"color":{"text":"#31313b"}}}}} -->
    <p class="has-text-color has-link-color" style="color:#31313b"><img class="wp-image-52" style="width: 90px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="">'. esc_html__('(4.9/5.00)','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"right"}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textAlign":"right","className":"is-style-fill course-button","style":{"color":{"background":"#00000000","text":"var(--wp--preset--color--accent)"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontSize":"extra-small"} -->
    <div class="wp-block-button has-custom-font-size is-style-fill course-button has-extra-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><a class="wp-block-button__link has-text-color has-background has-link-color has-text-align-right wp-element-button" style="color:var(--wp--preset--color--accent);background-color:#00000000;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">'. esc_html__('READ MORE','tutor-elearning').'<img class="wp-image-55" style="width: 17px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/vector.png" alt=""></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","className":"block-wrap-inner wow pulse","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center block-wrap-inner wow pulse" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":81,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topRight":"10px","topLeft":"10px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/course03.png" alt="" class="wp-image-81" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:group {"className":"course-content","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
    <div class="wp-block-group course-content" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"className":"courses-price","style":{"elements":{"link":{"color":{"text":"#ffffffcc"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"},"color":{"background":"var(--wp--preset--color--accent)","text":"#ffffffcc"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"5px"}}} -->
    <div class="wp-block-button has-custom-font-size courses-price" style="font-size:20px;font-style:normal;font-weight:600"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;color:#ffffffcc;background-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--70)" rel="">'. esc_html__('Price $3,615','tutor-elearning').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"},"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70","bottom":"var:preset|spacing|30","top":"var:preset|spacing|20"}},"color":{"text":"var(--wp--preset--color--secaccent)"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--secaccent)"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"upper-heading","fontFamily":"poppins"} -->
    <h3 class="wp-block-heading has-text-align-center has-text-color has-link-color has-poppins-font-family has-upper-heading-font-size" style="color:var(--wp--preset--color--secaccent);margin-top:var(--wp--preset--spacing--20);margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--70);font-style:normal;font-weight:600">'. esc_html__('Bachelor of Arts in Psychology','tutor-elearning').'</h3>
    <!-- /wp:heading -->
    
    <!-- wp:columns {"verticalAlignment":"center","className":"lesson-count","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}}} -->
    <div class="wp-block-columns are-vertically-aligned-center lesson-count" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"color":{"text":"var(--wp--preset--color--accent)"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
    <p class="has-text-color has-link-color has-medium-font-size" style="color:var(--wp--preset--color--accent);font-style:normal;font-weight:600">'. esc_html__('6 lessons','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"color":{"text":"var(--wp--preset--color--accent)"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
    <p class="has-text-align-right has-text-color has-link-color has-medium-font-size" style="color:var(--wp--preset--color--accent);font-style:normal;font-weight:600">'. esc_html__('40 Students','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"className":"review-sec","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns review-sec" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"text":"#31313b"},"elements":{"link":{"color":{"text":"#31313b"}}}}} -->
    <p class="has-text-color has-link-color" style="color:#31313b"><img class="wp-image-52" style="width: 90px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="">'. esc_html__('(4.9/5.00)','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"right"}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textAlign":"right","className":"is-style-fill course-button","style":{"color":{"background":"#00000000","text":"var(--wp--preset--color--accent)"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontSize":"extra-small"} -->
    <div class="wp-block-button has-custom-font-size is-style-fill course-button has-extra-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><a class="wp-block-button__link has-text-color has-background has-link-color has-text-align-right wp-element-button" style="color:var(--wp--preset--color--accent);background-color:#00000000;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">'. esc_html__('READ MORE','tutor-elearning').'<img class="wp-image-55" style="width: 17px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/vector.png" alt=""></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"verticalAlignment":"center","className":"course-section-column","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|60","bottom":"0"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center course-section-column" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","className":"block-wrap-inner wow pulse","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-column is-vertically-aligned-center block-wrap-inner wow pulse" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":8,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topRight":"10px","topLeft":"10px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/course04.png" alt="" class="wp-image-8" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;object-fit:cover"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:group {"className":"course-content","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
    <div class="wp-block-group course-content" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"className":"courses-price","style":{"elements":{"link":{"color":{"text":"#ffffffcc"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"},"color":{"background":"var(--wp--preset--color--accent)","text":"#ffffffcc"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"5px"}}} -->
    <div class="wp-block-button has-custom-font-size courses-price" style="font-size:20px;font-style:normal;font-weight:600"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;color:#ffffffcc;background-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--70)" rel="">'. esc_html__('Price $3,615','tutor-elearning').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"},"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","bottom":"var:preset|spacing|30","top":"var:preset|spacing|20"}},"color":{"text":"var(--wp--preset--color--secaccent)"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--secaccent)"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"upper-heading","fontFamily":"poppins"} -->
    <h3 class="wp-block-heading has-text-align-center has-text-color has-link-color has-poppins-font-family has-upper-heading-font-size" style="color:var(--wp--preset--color--secaccent);margin-top:var(--wp--preset--spacing--20);margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60);font-style:normal;font-weight:600">'. esc_html__('Bachelor of Science in Software Engineering','tutor-elearning').'</h3>
    <!-- /wp:heading -->
    
    <!-- wp:columns {"verticalAlignment":"center","className":"lesson-count","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}}} -->
    <div class="wp-block-columns are-vertically-aligned-center lesson-count" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"color":{"text":"var(--wp--preset--color--accent)"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
    <p class="has-text-color has-link-color has-medium-font-size" style="color:var(--wp--preset--color--accent);font-style:normal;font-weight:600">'. esc_html__('6 lessons','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"color":{"text":"var(--wp--preset--color--accent)"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
    <p class="has-text-align-right has-text-color has-link-color has-medium-font-size" style="color:var(--wp--preset--color--accent);font-style:normal;font-weight:600">'. esc_html__('40 Students','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"className":"review-sec","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns review-sec" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"text":"#31313b"},"elements":{"link":{"color":{"text":"#31313b"}}}}} -->
    <p class="has-text-color has-link-color" style="color:#31313b"><img class="wp-image-52" style="width: 90px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="">'. esc_html__('(4.9/5.00)','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"right"}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textAlign":"right","className":"is-style-fill course-button","style":{"color":{"background":"#00000000","text":"var(--wp--preset--color--accent)"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontSize":"extra-small"} -->
    <div class="wp-block-button has-custom-font-size is-style-fill course-button has-extra-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><a class="wp-block-button__link has-text-color has-background has-link-color has-text-align-right wp-element-button" style="color:var(--wp--preset--color--accent);background-color:#00000000;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">'. esc_html__('READ MORE','tutor-elearning').'<img class="wp-image-55" style="width: 17px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/vector.png" alt=""></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","className":"block-wrap-inner wow pulse","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center block-wrap-inner wow pulse" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":9,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topRight":"10px","topLeft":"10px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/course05.png" alt="" class="wp-image-9" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:group {"className":"course-content","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
    <div class="wp-block-group course-content" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"className":"courses-price","style":{"elements":{"link":{"color":{"text":"#ffffffcc"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"},"color":{"background":"var(--wp--preset--color--accent)","text":"#ffffffcc"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"5px"}}} -->
    <div class="wp-block-button has-custom-font-size courses-price" style="font-size:20px;font-style:normal;font-weight:600"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;color:#ffffffcc;background-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--70)" rel="">'. esc_html__('Price $3,615','tutor-elearning').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"},"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70","bottom":"var:preset|spacing|30","top":"var:preset|spacing|20"}},"color":{"text":"var(--wp--preset--color--secaccent)"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--secaccent)"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"upper-heading","fontFamily":"poppins"} -->
    <h3 class="wp-block-heading has-text-align-center has-text-color has-link-color has-poppins-font-family has-upper-heading-font-size" style="color:var(--wp--preset--color--secaccent);margin-top:var(--wp--preset--spacing--20);margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--70);font-style:normal;font-weight:600">'. esc_html__('Bachelor of Science in Data Science','tutor-elearning').'</h3>
    <!-- /wp:heading -->
    
    <!-- wp:columns {"verticalAlignment":"center","className":"lesson-count","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}}} -->
    <div class="wp-block-columns are-vertically-aligned-center lesson-count" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"color":{"text":"var(--wp--preset--color--accent)"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
    <p class="has-text-color has-link-color has-medium-font-size" style="color:var(--wp--preset--color--accent);font-style:normal;font-weight:600">'. esc_html__('6 lessons','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"color":{"text":"var(--wp--preset--color--accent)"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
    <p class="has-text-align-right has-text-color has-link-color has-medium-font-size" style="color:var(--wp--preset--color--accent);font-style:normal;font-weight:600">'. esc_html__('40 Students','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"className":"review-sec","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns review-sec" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"text":"#31313b"},"elements":{"link":{"color":{"text":"#31313b"}}}}} -->
    <p class="has-text-color has-link-color" style="color:#31313b"><img class="wp-image-52" style="width: 90px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="">'. esc_html__('(4.9/5.00)','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"right"}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textAlign":"right","className":"is-style-fill course-button","style":{"color":{"background":"#00000000","text":"var(--wp--preset--color--accent)"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontSize":"extra-small"} -->
    <div class="wp-block-button has-custom-font-size is-style-fill course-button has-extra-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><a class="wp-block-button__link has-text-color has-background has-link-color has-text-align-right wp-element-button" style="color:var(--wp--preset--color--accent);background-color:#00000000;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">'. esc_html__('READ MORE','tutor-elearning').'<img class="wp-image-55" style="width: 17px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/vector.png" alt=""></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","className":"block-wrap-inner wow pulse","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center block-wrap-inner wow pulse" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":10,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topRight":"10px","topLeft":"10px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
    <figure class="wp-block-image size-full has-custom-border"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/course06.png" alt="" class="wp-image-10" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:group {"className":"course-content","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
    <div class="wp-block-group course-content" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"className":"courses-price","style":{"elements":{"link":{"color":{"text":"#ffffffcc"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"},"color":{"background":"var(--wp--preset--color--accent)","text":"#ffffffcc"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"5px"}}} -->
    <div class="wp-block-button has-custom-font-size courses-price" style="font-size:20px;font-style:normal;font-weight:600"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;color:#ffffffcc;background-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--70)" rel="">'. esc_html__('Price $3,615','tutor-elearning').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons -->
    
    <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"},"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70","bottom":"var:preset|spacing|30","top":"var:preset|spacing|20"}},"color":{"text":"var(--wp--preset--color--secaccent)"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--secaccent)"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"upper-heading","fontFamily":"poppins"} -->
    <h3 class="wp-block-heading has-text-align-center has-text-color has-link-color has-poppins-font-family has-upper-heading-font-size" style="color:var(--wp--preset--color--secaccent);margin-top:var(--wp--preset--spacing--20);margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--70);font-style:normal;font-weight:600">'. esc_html__('Bachelor of Science in Artificial Intelligence','tutor-elearning').'</h3>
    <!-- /wp:heading -->
    
    <!-- wp:columns {"verticalAlignment":"center","className":"lesson-count","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}}} -->
    <div class="wp-block-columns are-vertically-aligned-center lesson-count" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"color":{"text":"var(--wp--preset--color--accent)"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
    <p class="has-text-color has-link-color has-medium-font-size" style="color:var(--wp--preset--color--accent);font-style:normal;font-weight:600">'. esc_html__('6 lessons','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"color":{"text":"var(--wp--preset--color--accent)"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
    <p class="has-text-align-right has-text-color has-link-color has-medium-font-size" style="color:var(--wp--preset--color--accent);font-style:normal;font-weight:600">'. esc_html__('40 Students','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    
    <!-- wp:columns {"className":"review-sec","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns review-sec" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"text":"#31313b"},"elements":{"link":{"color":{"text":"#31313b"}}}}} -->
    <p class="has-text-color has-link-color" style="color:#31313b"><img class="wp-image-52" style="width: 90px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="">'. esc_html__('(4.9/5.00)','tutor-elearning').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"right"}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textAlign":"right","className":"is-style-fill course-button","style":{"color":{"background":"#00000000","text":"var(--wp--preset--color--accent)"},"elements":{"link":{"color":{"text":"var(--wp--preset--color--accent)"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontSize":"extra-small"} -->
    <div class="wp-block-button has-custom-font-size is-style-fill course-button has-extra-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><a class="wp-block-button__link has-text-color has-background has-link-color has-text-align-right wp-element-button" style="color:var(--wp--preset--color--accent);background-color:#00000000;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">'. esc_html__('READ MORE','tutor-elearning').'<img class="wp-image-55" style="width: 17px;" src="'.esc_url(get_template_directory_uri()) .'/assets/images/vector.png" alt=""></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);