<?php
    function cio_index_styles_scripts() {
        wp_enqueue_style('magnific');
        wp_enqueue_style('owl-carousel');

        wp_enqueue_script('webgl-fluid-simulation');
        wp_enqueue_script('typedjs');
        wp_enqueue_script('count-to');
        wp_enqueue_script('isotope');
        wp_enqueue_script('magnific');
        wp_enqueue_script('owl-carousel');
        wp_enqueue_script('nill');
    }

    add_action('wp_enqueue_scripts', 'cio_index_styles_scripts');

    get_header();
?>
    <body <?php body_class($body_classes); ?> data-spy="scroll" data-target="#scrollspy" data-offset="1">

        <!--  Pre Loader  -->
        <div id="overlayer">
            <span class="spinner-grow spinner-grow-lg loader" role="status" aria-hidden="true"></span>
        </div>

           <!-- Blog Single Modal -->
           <!-- <div class="blog-single modal fade" id="blog-single" tabindex="-1" role="dialog" aria-labelledby="blogModalScrollable" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h5 class="modal-title" id="blogModalScrollable">Write Your Dreams</h5>
                        <button type="button" class="close text-muted" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"> -->
                        <!--   Blog-single   Start -->
                        <!-- <div class="pt-4 pb-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1 blog">
                                        <div class="rounded px-lg-5">
                                            <div class="text-md-left">
                                                <h4 class="mb-4">The best way to become a good web designer</h4>
                                                <img src="http://placehold.it/900x500" alt="" class="img-fluid w-100 rounded">
                                                <span class="d-inline-block py-4"> 1 April 2019
                                        / By <span class="purple-color text-right"> John Doe. </span>
                                        </span>
                                                <p class="text-muted">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                                <div class="px-md-5 px-3 py-4 quotation">
                                                    <i class="base-color lni-quotation size-md"></i>
                                                    <h6 class="base-color font-italic mb-0">We Love Buna, lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper.</h6>
                                                </div>
                                                <p class="my-3 text-muted">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                                <ul class="list-unstyled mt-4 checkmark-list"> -->
                                                    <!-- Item-01 -->
                                                   <!--  <li class="mb-2">
                                                        <span class="text-muted ml-1">The purpose of lorem ipsum is to create</span>
                                                    </li> -->
                                                    <!-- Item-02 -->
                                                    <!-- <li class="mb-2">
                                                        <span class="text-muted ml-1">In particular, the garbled words of lorem ipsum</span>
                                                    </li> -->
                                                    <!-- Item-03 -->
                                                    <!-- <li class="mb-2">
                                                        <span class="text-muted ml-1">occasionally circumstances occur in which toil</span>
                                                    </li>
                                                </ul> -->

                                                <!--Blog Reply-->
                                                <!-- <div class="contact mt-4">
                                                    <div class="contact-form">
                                                        <h2 class="text-left mb-4">Leave a reply</h2>
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-lg-6 form-item">
                                                                    <div class="form-group">
                                                                        <input name="name" id="blog-name" type="text" class="form-control" placeholder="Your Name*" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 form-item">
                                                                    <div class="form-group">
                                                                        <input name="email" id="blog-email" type="email" class="form-control" placeholder="Your Email*" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 form-item">
                                                                    <div class="form-group">
                                                                        <textarea name="comments" id="blog-comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 mt-4 text-left">
                                                                    <button type="submit" class="pill-button" id="blog-submit-btn">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!--   Blog-Single End  -->
                    <!-- </div>
                </div>
            </div>
        </div> -->

        <!-- Portfolio Single Modal -->
        <?php
            $portfolio_entry = pods('portfolio_entry');
            $portfolio_entry->find('weight ASC');

            while ( $portfolio_entry->fetch() ):
        ?>
        <div class="portfolio-single modal fade" id="<?php echo $portfolio_entry->field('css_id'); ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModalScrollable" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h5 class="modal-title" id="portfolioModalScrollable"><?php echo $portfolio_entry->field('name'); ?></h5>
                        <button type="button" class="close text-muted" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="pt-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-10 offset-md-1">
                                        <div class="text-center">
                                        <?php foreach ( explode( "\n", $portfolio_entry->field('content') ) as $paragraph ): ?>
                                            <p class="text-muted mb-3 text-left max-width-700"><?php echo $paragraph; ?></p>
                                        <?php endforeach; ?>
                                        </div>
                                        <div class="row contact-info mt-5">
                                            <div class="col-md-4 mt-3 mt-md-0">
                                                <div class="text-center">
                                                    <div>
                                                        <h6>Live Demo:</h6>
                                                        <p class="text-muted mb-0"><a href="<?php echo $portfolio_entry->field('live_demo_url'); ?>"><?php echo $portfolio_entry->field('live_demo_name'); ?></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3 mt-md-0">
                                                <div class="text-center">
                                                    <div>
                                                        <h6>Website Code:</h6>
                                                        <p class="text-muted mb-0"><a href="<?php echo $portfolio_entry->field('code_repo_url'); ?>"><?php echo $portfolio_entry->field('code_repo_name'); ?></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3 mt-md-0">
                                                <div class="text-center">
                                                    <div>
                                                        <h6>Made with:</h6>
                                                        <p class="text-muted mb-0"><?php echo strip_tags( get_the_term_list( $portfolio_entry->field('ID'), 'portfolio_technology', '', ' / ' ) ); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <div class="portfolio-single-item">
                                            <?php $image_properties = get_post_featured_image( $portfolio_entry->field('ID'), 'portfolio-large' ); ?>
                                            <?php if ( isset( $image_properties['url'] ) ): ?>
                                                <img src="<?php echo $image_properties['url']; ?>" class="d-block w-100 rounded" alt="<?php echo $image_properties['alt']; ?>">
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="text-md-left mt-5">
                                            <p class="my-3 text-muted"></p>
                                            <!-- <p class="mt-3 mb-0 text-muted"></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>

        <!--  Page Pilling  Strat  -->
		 <div id="pagepiling" class="pagepiling">

             <!--   Header Start -->
             <header>
                 <div class="logo-area">
                     <a href="<?php site_url() ?>" class="">
                     <a href="/" class="">
                        <span class="size-xs mb-0 font-weight-bold pl-3 text-dark text-left">Carlos<span class="base-color">.io</span></span>
                     </a>
                 </div>
                 <div class="header-info-area">
                     <a class="overlay-menu-toggler lni-menu size-md" href="javascript:void(0);"></a>
                 </div>
             </header>
             <!--   Header End   -->

             <!--    Overlay Menu Start    -->
             <div class="overlay-menu bg-blue py-3 px-4 text-center center-item">
                 <!-- Overlay Menu -->
                 <div id="scrollspy" class="overlay-menu-list">
                     <div class="container">
                         <div class="row">
                             <div class="col-lg-8 offset-lg-2 overlay-nav">
                                 <ul class="list-group text-left" id="myMenu">
                                     <li data-menuanchor="hero" class="list-group-item"><a href="<?php site_url() ?>">Home</a></li>
                                     <li data-menuanchor="about" class="list-group-item"><a href="#about">About me</a></li>
                                     <li data-menuanchor="services" class="list-group-item"><a href="#services">Services</a></li>
                                     <li data-menuanchor="portfolio" class="list-group-item"><a href="#portfolio">Portfolio</a></li>
                                     <!-- <li data-menuanchor="client" class="list-group-item"><a href="#testimonial">Client</a></li> -->
                                     <!-- <li data-menuanchor="blog" class="list-group-item"><a href="#blog">Blog</a></li> -->
                                     <li data-menuanchor="contact" class="list-group-item"><a href="#contact">Contact</a></li>
                                 </ul>
                                 <ul class="list-group contact-info text-left mb-0">
                                     <!-- <li class="list-group-item"><span>Contact Info :</span></li> -->
                                     <!-- <li class="list-group-item"><span><i class="lni-map-marker"></i> PA 19130, USA</span></li> -->
                                     <!-- <li class="list-group-item"><span><i class="lni-phone-handset"></i></span></li> -->
                                     <!-- <li class="list-group-item"><span><i class="lni-envelope"></i> contact@carlos.io</span></li> -->
                                     <li class="list-group-item"><span>Follow me :</span></li>
                                     <li class="list-group-item">
                                         <ul class="list-inline socails">
                                             <li class="list-inline-item"><a href="https://www.linkedin.com/in/carlos-v-30559991"><i class="lni-linkedin-original"></i></a></li>
                                             <li class="list-inline-item"><a href="https://github.com/carlos-io"><i class="lni-github-original"></i></a></li>
                                             <li class="list-inline-item"><a href="https://sourcerer.io/carlos-io">
                                                 <svg class="sourcerer" width="32px" height="40px" viewBox="0 0 32 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                     <!-- Generator: Sketch 48.1 (47250) - http://www.bohemiancoding.com/sketch -->
                                                     <defs>
                                                         <polygon id="path-01" points="6.50557515 6.8668505 0.0122782746 6.8668505 0.0122782746 0.0647553409 6.50557515 0.0647553409 6.50557515 6.8668505"></polygon>
                                                         <polygon id="path-03" points="0 12.417702 0 0.000470332226 31.9731277 0.000470332226 31.9731277 12.417702 31.9731277 24.8349337 0 24.8349337 0 12.417702"></polygon>
                                                     </defs>
                                                     <g id="Desktop/tablet-home-Copy-03" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-160.000000, -15.000000)">
                                                         <g id="Page-01" transform="translate(160.000000, 15.000000)">
                                                             <g>
                                                                 <g id="Group-03" transform="translate(5.193228, 33.016852)">
                                                                     <mask id="mask-02" fill="white">
                                                                         <use xlink:href="#path-01"></use>
                                                                     </mask>
                                                                     <g id="Clip-02"></g>
                                                                     <path d="M4.5146214,5.01707148 C4.5146214,5.7882282 4.73023309,6.17371249 5.16173469,6.17371249 C5.59620385,6.17371249 5.81320658,5.7882282 5.81320658,5.01707148 C5.81320658,4.24600883 5.59620385,3.86052454 5.16173469,3.86052454 C4.73023309,3.86052454 4.5146214,4.24600883 4.5146214,5.01707148 M5.16173469,6.86688813 C4.2657174,6.86688813 3.81789423,6.25028258 3.81789423,5.01707148 C3.81789423,3.78414258 4.2657174,3.1673489 5.16173469,3.1673489 C6.05775198,3.1673489 6.50557515,3.78414258 6.50557515,5.01707148 C6.50557515,6.25028258 6.05775198,6.86688813 5.16173469,6.86688813 M0.935560007,6.752033 C0.926286386,6.7368883 0.926286386,6.7200504 0.935560007,6.70151931 L4.86766816,0.174813082 C4.87963113,0.16267851 4.8915941,0.156564191 4.90383528,0.156564191 L5.55094857,0.156564191 C5.56903214,0.156564191 5.58182973,0.164842039 5.5894341,0.181773999 C5.59676026,0.198517826 5.59620385,0.216296384 5.58702296,0.234545274 L1.64128259,6.75673632 C1.62931961,6.76896496 1.61707843,6.77498521 1.60502273,6.77498521 L0.976178469,6.77498521 C0.958094907,6.77498521 0.94455542,6.76745989 0.935560007,6.752033 M0.704646838,1.91457199 C0.704646838,2.6854465 0.921927784,3.07111893 1.35621147,3.07111893 C1.78762033,3.07111893 2.00323202,2.6854465 2.00323202,1.91457199 C2.00323202,1.1433212 1.78762033,0.757742843 1.35621147,0.757742843 C0.921927784,0.757742843 0.704646838,1.1433212 0.704646838,1.91457199 M0.0122782746,1.91457199 C0.0122782746,0.681266823 0.460379654,0.0647553409 1.35621147,0.0647553409 C2.24916846,0.0647553409 2.69560059,0.681266823 2.69560059,1.91457199 C2.69560059,3.15069914 2.24916846,3.76871569 1.35621147,3.76871569 C0.460379654,3.76871569 0.0122782746,3.15069914 0.0122782746,1.91457199" id="Fill-01" fill="#00E7AA" mask="url(#mask-02)"></path>
                                                                 </g>
                                                                 <path d="M4.68537659,26.6342461 L4.68537659,25.6450433 C4.68537659,25.6143777 4.7017909,25.5990449 4.73517593,25.5990449 L5.71029721,25.5990449 C5.74052921,25.5990449 5.75564522,25.6143777 5.75564522,25.6450433 L5.75564522,26.6342461 C5.75564522,26.6679219 5.74052921,26.6846657 5.71029721,26.6846657 L4.73517593,26.6846657 C4.7017909,26.6846657 4.68537659,26.6679219 4.68537659,26.6342461 M1.06606768,28.1247289 L1.06606768,27.5128267 C1.06606768,27.4822551 1.08109095,27.4668282 1.11141569,27.4668282 L2.12288956,27.4668282 C2.15293609,27.4668282 2.16823757,27.4500844 2.16823757,27.4162204 L2.16823757,26.7124153 C2.16823757,25.9518881 2.60511786,25.5806078 3.47887846,25.5990449 L4.10021108,25.5990449 C4.13350338,25.5990449 4.1501959,25.6143777 4.1501959,25.6450433 L4.1501959,26.3535518 C4.1501959,26.3842175 4.13350338,26.3995503 4.10021108,26.3995503 L3.48787387,26.3995503 C3.35182985,26.3995503 3.24527594,26.441598 3.16821215,26.5261637 C3.09114835,26.6103532 3.05266283,26.7262431 3.05266283,26.873363 L3.05266283,27.4162204 C3.05266283,27.4500844 3.06768609,27.4668282 3.09801083,27.4668282 L5.61514985,27.4668282 C5.64528912,27.4668282 5.66049786,27.4822551 5.66049786,27.5128267 L5.66049786,32.1868943 C5.66049786,32.217654 5.64528912,32.2329868 5.61514985,32.2329868 L4.82587195,32.2329868 C4.79554721,32.2329868 4.78052394,32.217654 4.78052394,32.1868943 L4.78052394,28.2213351 C4.78052394,28.1876594 4.76540794,28.1707274 4.73517593,28.1707274 L3.09801083,28.1707274 C3.06768609,28.1707274 3.05266283,28.1876594 3.05266283,28.2213351 L3.05266283,32.1868943 C3.05266283,32.217654 3.03736135,32.2329868 3.00722208,32.2329868 L2.21803691,32.2329868 C2.18465188,32.2329868 2.16823757,32.217654 2.16823757,32.1868943 L2.16823757,28.2213351 C2.16823757,28.1876594 2.15293609,28.1707274 2.12288956,28.1707274 L1.11141569,28.1707274 C1.08109095,28.1707274 1.06606768,28.1553946 1.06606768,28.1247289" id="Fill-04" fill="#00E7AA"></path>
                                                                 <path d="M31.8151516,28.9182923 C31.8151516,27.0944379 30.3576165,25.6159956 28.5595541,25.6159956 C26.7614917,25.6159956 25.3039566,27.0944379 25.3039566,28.9182923 C25.3039566,30.7421466 26.7614917,32.2205889 28.5595541,32.2205889 C30.3576165,32.2205889 31.8151516,30.7421466 31.8151516,28.9182923" id="Fill-06" fill="#00E7AA"></path>
                                                                 <path d="M16.2791281,32.8724787 C14.4732758,32.8724787 13.0092492,34.3574117 13.0092492,36.1893557 C13.0092492,38.0210175 14.4732758,39.5060445 16.2791281,39.5060445 C18.0850731,39.5060445 19.5490069,38.0210175 19.5490069,36.1893557 C19.5490069,34.3574117 18.0850731,32.8724787 16.2791281,32.8724787 M16.2791281,33.7060015 C17.6289964,33.7060015 18.7271786,34.8200304 18.7271786,36.1893557 C18.7271786,37.5583987 17.6289964,38.6724276 16.2791281,38.6724276 C14.9292597,38.6724276 13.8310775,37.5583987 13.8310775,36.1893557 C13.8310775,34.8200304 14.9292597,33.7060015 16.2791281,33.7060015" id="Fill-08" fill="#00E7AA"></path>
                                                                 <g id="Group-012" transform="translate(0.000000, 0.093596)">
                                                                     <mask id="mask-04" fill="white">
                                                                         <use xlink:href="#path-03"></use>
                                                                     </mask>
                                                                     <g id="Clip-011"></g>
                                                                     <path d="M2.58984421,17.9694942 C3.18910562,18.517055 3.7585987,18.9790153 4.29841619,19.3562217 C4.83767727,19.7333341 5.54497636,20.0801571 6.42086989,20.3959382 C7.29565058,20.7121896 8.08131178,20.9671096 8.777668,21.1596636 C9.47411695,21.352782 10.3142143,21.5201263 11.2991656,21.6629191 C12.2830041,21.8052416 13.0686653,21.9188739 13.6564274,22.00391 C14.2442823,22.0893223 15.0355076,22.2028605 16.0301962,22.3462178 C16.1680023,22.3668183 16.4912807,22.4135693 17.000217,22.4863768 C17.5087824,22.5594664 17.8845496,22.6136487 18.1274257,22.6488295 C18.3703018,22.6840104 18.7513549,22.7388511 19.2718833,22.8142924 C19.7917625,22.8898278 20.2100956,22.9626352 20.5279026,23.034596 C20.8445967,23.1058043 21.2430842,23.2150155 21.7234578,23.3608185 C22.2031822,23.5070918 22.5808968,23.6584447 22.8569725,23.8162882 C23.1330482,23.9742257 23.4384286,24.1753398 23.7745046,24.4182194 C23.9614608,24.5532988 24.1221727,24.692329 24.2571039,24.8349337 L31.9731277,24.8349337 C31.905894,24.4863235 31.8230805,24.1508825 31.7248729,23.8288931 C30.7890717,20.7674066 28.3068015,18.6532632 24.2770422,17.4869333 C22.7895533,17.0606242 20.0187807,16.5865293 15.9643535,16.0656834 C15.725836,16.0284331 15.3238245,15.9655027 14.7588755,15.8760455 C14.1933701,15.7870586 13.672378,15.7045623 13.1964558,15.6296855 C12.7201626,15.5542442 12.3133288,15.490373 11.97614,15.436567 C11.6382092,15.3833254 11.2540031,15.2888827 10.8233361,15.1516398 C10.3931328,15.0153375 9.90283647,14.8232538 9.35318893,14.5749184 C8.80344866,14.3269593 8.38010785,14.0539784 8.08381565,13.7563522 C7.78641062,13.458726 7.53407539,13.0927134 7.32588259,12.6583146 C7.11824621,12.2240098 7.01410344,11.7463404 7.01410344,11.224836 C7.01410344,9.91063372 7.69117053,8.76932554 9.04632481,7.80100555 C10.4010154,6.83324996 12.3737001,6.3489959 14.9630806,6.3489959 C17.8885372,6.3489959 20.1546393,6.96390826 21.7615724,8.1916635 C23.3674854,9.41998314 24.1714156,11.0800678 24.1714156,13.1721055 C24.1714156,13.4155495 24.2908599,13.536707 24.5314176,13.536707 L30.8618697,13.536707 C31.0531845,13.536707 31.1494447,13.4155495 31.1494447,13.1721055 C31.1494447,10.3259371 30.4237838,7.89403727 28.9734822,5.87499509 C27.5221604,3.85632917 25.5979768,2.3721488 23.2004675,1.42386497 C20.8020308,0.475110801 18.0565752,0.000451518937 14.9630806,0.000451518937 C10.5032107,0.000451518937 6.89373184,1.071398 4.13631329,3.21122149 C1.37843106,5.35198565 0,7.99101977 0,11.1287942 C0,12.1263688 0.11360186,13.0564978 0.341454735,13.9197456 C0.569493082,14.7835578 0.85113296,15.5376885 1.18711626,16.1817614 C1.52272861,16.826681 1.99011912,17.4224978 2.58984421,17.9694942 Z" id="Fill-010" fill="#00E7AA" mask="url(#mask-04)"></path>
                                                                 </g>
                                                                 <polygon id="Fill-013" fill="#00E7AA" points="20.230312 39.4948317 26.7765613 39.4948317 26.7765613 32.8545873 20.230312 32.8545873"></polygon>
                                                             </g>
                                                         </g>
                                                     </g>
                                                 </svg>
                                             </a></li>
                                        </ul>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!--    Overlay Menu End    -->

            <!--    Hero Start    -->
            <?php
                $top = pods('top_section');
            ?>
            <section class="section pp-scrollable hero hero-01" id="hero">
                <a href="#about"><div class="angle-quote">&rsaquo;</div></a>
                <?php if ( $top->field('background_image') ): ?>
                    <style>
                        .hero-01 {
                            background: -moz-linear-gradient(top,  rgba(255,255,255,0.4) 0%, rgba(255,255,255,0.4) 100%),
                                        url("<?php echo $top->field('background_image')['guid']; ?>") no-repeat center;
                            background: -webkit-linear-gradient(top,  rgba(255,255,255,0.4) 0%,rgba(255,255,255,0.4) 100%),
                                        url("<?php echo $top->field('background_image')['guid']; ?>") no-repeat center;
                            background: linear-gradient(to bottom,  rgba(255,255,255,0.4) 0%,rgba(255,255,255,0.4) 100%),
                                        url("<?php echo $top->field('background_image')['guid']; ?>") no-repeat center;
                        }
                    </style>
                <?php else: ?>
                    <canvas></canvas>
                <?php endif; ?>
                <div class="display-table">
                    <div class="display-content">
                        <div class="container">
                            <div class="title-small">
                                <p class="text-dark">Home</p>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="hero-content text-center">
                                        <h1 class="text-dark mb-3"><?php echo $top->field('opening_statement'); ?></h1>
                                        <h3 class="text-dark mb-0">
                                            <span class="element" data-elements="<?php echo $top->field('roles'); ?>"></span>
                                        </h3>
                                        <p class="text-dark mx-0 my-4"><?php echo $top->field('caption'); ?></p>
                                            <ul class="list-inline social-icon mt-2">
                                                <!-- <li class="list-inline-item"><a href="javascript:void(0);"><i class="lni-facebook-filled text-dark"></i></a></li> -->
                                                <!-- <li class="list-inline-item"><a href="javascript:void(0);"><i class="lni-twitter-filled text-dark"></i></a></li> -->
                                                <li class="list-inline-item"><a href="https://www.linkedin.com/in/carlos-v-30559991"><i class="lni-linkedin-original text-dark"></i></a></li>
                                                <li class="list-inline-item"><a href="https://github.com/carlos-io"><i class="lni-github-original text-dark"></i></a></li>
                                                <li class="list-inline-item"><a href="https://sourcerer.io/carlos-io">
                                                    <svg class="sourcerer svg-dark" width="32px" height="40px" viewBox="0 0 32 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <!-- Generator: Sketch 48.1 (47250) - http://www.bohemiancoding.com/sketch -->
                                                        <defs>
                                                            <polygon id="path-1" points="6.50557515 6.8668505 0.0122782746 6.8668505 0.0122782746 0.0647553409 6.50557515 0.0647553409 6.50557515 6.8668505"></polygon>
                                                            <polygon id="path-3" points="0 12.417702 0 0.000470332226 31.9731277 0.000470332226 31.9731277 12.417702 31.9731277 24.8349337 0 24.8349337 0 12.417702"></polygon>
                                                        </defs>
                                                        <g id="Desktop/tablet-home-Copy-3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-160.000000, -15.000000)">
                                                            <g id="Page-1" transform="translate(160.000000, 15.000000)">
                                                                <g>
                                                                    <g id="Group-3" transform="translate(5.193228, 33.016852)">
                                                                        <mask id="mask-2" fill="white">
                                                                            <use xlink:href="#path-1"></use>
                                                                        </mask>
                                                                        <g id="Clip-2"></g>
                                                                        <path d="M4.5146214,5.01707148 C4.5146214,5.7882282 4.73023309,6.17371249 5.16173469,6.17371249 C5.59620385,6.17371249 5.81320658,5.7882282 5.81320658,5.01707148 C5.81320658,4.24600883 5.59620385,3.86052454 5.16173469,3.86052454 C4.73023309,3.86052454 4.5146214,4.24600883 4.5146214,5.01707148 M5.16173469,6.86688813 C4.2657174,6.86688813 3.81789423,6.25028258 3.81789423,5.01707148 C3.81789423,3.78414258 4.2657174,3.1673489 5.16173469,3.1673489 C6.05775198,3.1673489 6.50557515,3.78414258 6.50557515,5.01707148 C6.50557515,6.25028258 6.05775198,6.86688813 5.16173469,6.86688813 M0.935560007,6.752033 C0.926286386,6.7368883 0.926286386,6.7200504 0.935560007,6.70151931 L4.86766816,0.174813082 C4.87963113,0.16267851 4.8915941,0.156564191 4.90383528,0.156564191 L5.55094857,0.156564191 C5.56903214,0.156564191 5.58182973,0.164842039 5.5894341,0.181773999 C5.59676026,0.198517826 5.59620385,0.216296384 5.58702296,0.234545274 L1.64128259,6.75673632 C1.62931961,6.76896496 1.61707843,6.77498521 1.60502273,6.77498521 L0.976178469,6.77498521 C0.958094907,6.77498521 0.94455542,6.76745989 0.935560007,6.752033 M0.704646838,1.91457199 C0.704646838,2.6854465 0.921927784,3.07111893 1.35621147,3.07111893 C1.78762033,3.07111893 2.00323202,2.6854465 2.00323202,1.91457199 C2.00323202,1.1433212 1.78762033,0.757742843 1.35621147,0.757742843 C0.921927784,0.757742843 0.704646838,1.1433212 0.704646838,1.91457199 M0.0122782746,1.91457199 C0.0122782746,0.681266823 0.460379654,0.0647553409 1.35621147,0.0647553409 C2.24916846,0.0647553409 2.69560059,0.681266823 2.69560059,1.91457199 C2.69560059,3.15069914 2.24916846,3.76871569 1.35621147,3.76871569 C0.460379654,3.76871569 0.0122782746,3.15069914 0.0122782746,1.91457199" id="Fill-1" fill="#00E7AA" mask="url(#mask-2)"></path>
                                                                    </g>
                                                                    <path d="M4.68537659,26.6342461 L4.68537659,25.6450433 C4.68537659,25.6143777 4.7017909,25.5990449 4.73517593,25.5990449 L5.71029721,25.5990449 C5.74052921,25.5990449 5.75564522,25.6143777 5.75564522,25.6450433 L5.75564522,26.6342461 C5.75564522,26.6679219 5.74052921,26.6846657 5.71029721,26.6846657 L4.73517593,26.6846657 C4.7017909,26.6846657 4.68537659,26.6679219 4.68537659,26.6342461 M1.06606768,28.1247289 L1.06606768,27.5128267 C1.06606768,27.4822551 1.08109095,27.4668282 1.11141569,27.4668282 L2.12288956,27.4668282 C2.15293609,27.4668282 2.16823757,27.4500844 2.16823757,27.4162204 L2.16823757,26.7124153 C2.16823757,25.9518881 2.60511786,25.5806078 3.47887846,25.5990449 L4.10021108,25.5990449 C4.13350338,25.5990449 4.1501959,25.6143777 4.1501959,25.6450433 L4.1501959,26.3535518 C4.1501959,26.3842175 4.13350338,26.3995503 4.10021108,26.3995503 L3.48787387,26.3995503 C3.35182985,26.3995503 3.24527594,26.441598 3.16821215,26.5261637 C3.09114835,26.6103532 3.05266283,26.7262431 3.05266283,26.873363 L3.05266283,27.4162204 C3.05266283,27.4500844 3.06768609,27.4668282 3.09801083,27.4668282 L5.61514985,27.4668282 C5.64528912,27.4668282 5.66049786,27.4822551 5.66049786,27.5128267 L5.66049786,32.1868943 C5.66049786,32.217654 5.64528912,32.2329868 5.61514985,32.2329868 L4.82587195,32.2329868 C4.79554721,32.2329868 4.78052394,32.217654 4.78052394,32.1868943 L4.78052394,28.2213351 C4.78052394,28.1876594 4.76540794,28.1707274 4.73517593,28.1707274 L3.09801083,28.1707274 C3.06768609,28.1707274 3.05266283,28.1876594 3.05266283,28.2213351 L3.05266283,32.1868943 C3.05266283,32.217654 3.03736135,32.2329868 3.00722208,32.2329868 L2.21803691,32.2329868 C2.18465188,32.2329868 2.16823757,32.217654 2.16823757,32.1868943 L2.16823757,28.2213351 C2.16823757,28.1876594 2.15293609,28.1707274 2.12288956,28.1707274 L1.11141569,28.1707274 C1.08109095,28.1707274 1.06606768,28.1553946 1.06606768,28.1247289" id="Fill-4" fill="#00E7AA"></path>
                                                                    <path d="M31.8151516,28.9182923 C31.8151516,27.0944379 30.3576165,25.6159956 28.5595541,25.6159956 C26.7614917,25.6159956 25.3039566,27.0944379 25.3039566,28.9182923 C25.3039566,30.7421466 26.7614917,32.2205889 28.5595541,32.2205889 C30.3576165,32.2205889 31.8151516,30.7421466 31.8151516,28.9182923" id="Fill-6" fill="#00E7AA"></path>
                                                                    <path d="M16.2791281,32.8724787 C14.4732758,32.8724787 13.0092492,34.3574117 13.0092492,36.1893557 C13.0092492,38.0210175 14.4732758,39.5060445 16.2791281,39.5060445 C18.0850731,39.5060445 19.5490069,38.0210175 19.5490069,36.1893557 C19.5490069,34.3574117 18.0850731,32.8724787 16.2791281,32.8724787 M16.2791281,33.7060015 C17.6289964,33.7060015 18.7271786,34.8200304 18.7271786,36.1893557 C18.7271786,37.5583987 17.6289964,38.6724276 16.2791281,38.6724276 C14.9292597,38.6724276 13.8310775,37.5583987 13.8310775,36.1893557 C13.8310775,34.8200304 14.9292597,33.7060015 16.2791281,33.7060015" id="Fill-8" fill="#00E7AA"></path>
                                                                    <g id="Group-12" transform="translate(0.000000, 0.093596)">
                                                                        <mask id="mask-4" fill="white">
                                                                            <use xlink:href="#path-3"></use>
                                                                        </mask>
                                                                        <g id="Clip-11"></g>
                                                                        <path d="M2.58984421,17.9694942 C3.18910562,18.517055 3.7585987,18.9790153 4.29841619,19.3562217 C4.83767727,19.7333341 5.54497636,20.0801571 6.42086989,20.3959382 C7.29565058,20.7121896 8.08131178,20.9671096 8.777668,21.1596636 C9.47411695,21.352782 10.3142143,21.5201263 11.2991656,21.6629191 C12.2830041,21.8052416 13.0686653,21.9188739 13.6564274,22.00391 C14.2442823,22.0893223 15.0355076,22.2028605 16.0301962,22.3462178 C16.1680023,22.3668183 16.4912807,22.4135693 17.000217,22.4863768 C17.5087824,22.5594664 17.8845496,22.6136487 18.1274257,22.6488295 C18.3703018,22.6840104 18.7513549,22.7388511 19.2718833,22.8142924 C19.7917625,22.8898278 20.2100956,22.9626352 20.5279026,23.034596 C20.8445967,23.1058043 21.2430842,23.2150155 21.7234578,23.3608185 C22.2031822,23.5070918 22.5808968,23.6584447 22.8569725,23.8162882 C23.1330482,23.9742257 23.4384286,24.1753398 23.7745046,24.4182194 C23.9614608,24.5532988 24.1221727,24.692329 24.2571039,24.8349337 L31.9731277,24.8349337 C31.905894,24.4863235 31.8230805,24.1508825 31.7248729,23.8288931 C30.7890717,20.7674066 28.3068015,18.6532632 24.2770422,17.4869333 C22.7895533,17.0606242 20.0187807,16.5865293 15.9643535,16.0656834 C15.725836,16.0284331 15.3238245,15.9655027 14.7588755,15.8760455 C14.1933701,15.7870586 13.672378,15.7045623 13.1964558,15.6296855 C12.7201626,15.5542442 12.3133288,15.490373 11.97614,15.436567 C11.6382092,15.3833254 11.2540031,15.2888827 10.8233361,15.1516398 C10.3931328,15.0153375 9.90283647,14.8232538 9.35318893,14.5749184 C8.80344866,14.3269593 8.38010785,14.0539784 8.08381565,13.7563522 C7.78641062,13.458726 7.53407539,13.0927134 7.32588259,12.6583146 C7.11824621,12.2240098 7.01410344,11.7463404 7.01410344,11.224836 C7.01410344,9.91063372 7.69117053,8.76932554 9.04632481,7.80100555 C10.4010154,6.83324996 12.3737001,6.3489959 14.9630806,6.3489959 C17.8885372,6.3489959 20.1546393,6.96390826 21.7615724,8.1916635 C23.3674854,9.41998314 24.1714156,11.0800678 24.1714156,13.1721055 C24.1714156,13.4155495 24.2908599,13.536707 24.5314176,13.536707 L30.8618697,13.536707 C31.0531845,13.536707 31.1494447,13.4155495 31.1494447,13.1721055 C31.1494447,10.3259371 30.4237838,7.89403727 28.9734822,5.87499509 C27.5221604,3.85632917 25.5979768,2.3721488 23.2004675,1.42386497 C20.8020308,0.475110801 18.0565752,0.000451518937 14.9630806,0.000451518937 C10.5032107,0.000451518937 6.89373184,1.071398 4.13631329,3.21122149 C1.37843106,5.35198565 0,7.99101977 0,11.1287942 C0,12.1263688 0.11360186,13.0564978 0.341454735,13.9197456 C0.569493082,14.7835578 0.85113296,15.5376885 1.18711626,16.1817614 C1.52272861,16.826681 1.99011912,17.4224978 2.58984421,17.9694942 Z" id="Fill-10" fill="#00E7AA" mask="url(#mask-4)"></path>
                                                                    </g>
                                                                    <polygon id="Fill-13" fill="#00E7AA" points="20.230312 39.4948317 26.7765613 39.4948317 26.7765613 32.8545873 20.230312 32.8545873"></polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--    Hero End    -->

            <!--   About Start   -->
            <?php
                $about = pods('about');
            ?>
            <section id="about" class="section pp-scrollable about text-dark mt-5">
                <div class="display-table">
                    <div class="display-content">
                        <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">About me</p>
                            </div>
                        </div>
                        <h2 class="text-dark mb-2 text-center">About <span class="base-color">Me</span></h2>
                        <div class="row mt-4">
                            <div class="col-sm-12 col-lg-4 text-center">
                                <img src="<?php echo $about->field('image')['guid']; ?>" alt="/" class="round img-thumbnail">
                            </div>
                            <div class="col-sm-12 col-lg-8 personal-item  mb-4 mb-lg-0">
                                <?php foreach ( explode( "\n", $about->field('content') ) as $paragraph ): ?>
                                    <p class="text-dark"><?php echo $paragraph; ?></p>
                                <?php endforeach; ?>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#contact" class="pill-button mt-3 mb-lg-0">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="count-up" class="text-center">
                            <div class="container">
                                <div class="row mt-4">
                                    <!-- Item-01 -->
                                    <!-- <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-download size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="286" data-speed="5000">286</span>
                                        </div>
                                        <p class="mb-0 ">Files Download</p>
                                    </div> -->
                                    <!-- Item-02 -->
                                    <!-- <div class="col-6 col-md-6 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-pencil-alt size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="3" data-speed="5000">0</span>
                                        </div>
                                        <p class="mb-0">Projects Done</p>
                                    </div> -->
                                    <!-- Item-03 -->
                                    <!-- <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-medall size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="793" data-speed="5000">793</span>
                                        </div>
                                        <p class="mb-0">Get Award</p>
                                    </div> -->
                                    <!-- Item-04 -->
                                    <!-- <div class="col-6 col-md-6 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-emoji-smile size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="1" data-speed="5000">0</span>
                                        </div>
                                        <p class="mb-0">Happy Clients</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <!--    About End    -->

             <!--   Resume Start   -->
             <section id="resume" class="section pp-scrollable resume">
                 <div class="display-table">
                     <div class="display-content">
                         <div class="container">
                         <div class="row">
                             <div class="title-small">
                                 <p class="text-dark">Resume</p>
                             </div>
                             <div class="col-lg-12">
                                 <div class="text-left">
                                     <h2 class="text-dark mb-3">My <span class="base-color">Resume</span></h2>
                                     <p class="text-muted">I Am Available For Freelance Projects.</p>
                                 </div>
                             </div>
                         </div>
                         <div class="row mt-4">
                             <div class="col-lg-6">
                                 <h3 class="text-dark mb-2"><i class="lni-graduation base-color"></i>Education</h3>
                                 <ul class="timeline">
                                     <li>
                                         <h6 class="base-color mb-0">Master In Computer Science</h6>
                                         <small class="text-muted ">2012 - 2014</small>
                                         <p class="text-dark py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.</p>
                                     </li>
                                     <li>
                                         <h6 class="base-color mb-0">Studied at New York University</h6>
                                         <small class="text-muted ">2008 - 2012</small>
                                         <p class="text-dark py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.</p>
                                     </li>
                                 </ul>
                             </div>
                             <div class="col-lg-6">
                                 <h3 class="text-dark mb-2 mt-5 mt-lg-0"><i class="lni-pencil base-color"></i>Experience</h3>
                                 <ul class="timeline">
                                     <li>
                                         <h6 class="base-color mb-0">UI/UX Developer </h6>
                                         <small class="text-muted ">2014 - 2015</small>
                                         <p class="text-dark py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.</p>
                                     </li>
                                     <li>
                                         <h6 class="base-color mb-0">Senior Developer </h6>
                                         <small class="text-muted ">2015 - 2019</small>
                                         <p class="text-dark py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.</p>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="row pt-6">
                             <div class="col-lg-6">
                                 <div class="skill-box pt-4 pt-lg-0 mt-4 mt-lg-0">
                                     <div class="skillbar clearfix" data-percent="95%">
                                         <div class="skillbar-title"><span>HTML</span></div>
                                         <div class="skillbar-bar"></div>
                                         <div class="skill-bar-percent">95%</div>
                                     </div>
                                     <div class="skillbar clearfix " data-percent="85%">
                                         <div class="skillbar-title"><span>CSS</span></div>
                                         <div class="skillbar-bar"></div>
                                         <div class="skill-bar-percent">85%</div>
                                     </div>
                                     <div class="skillbar clearfix" data-percent="75%">
                                         <div class="skillbar-title"><span>PHP</span></div>
                                         <div class="skillbar-bar"></div>
                                         <div class="skill-bar-percent">75%</div>
                                     </div>
                                     <div class="skillbar clearfix" data-percent="80%">
                                         <div class="skillbar-title"><span>JQuery</span></div>
                                         <div class="skillbar-bar"></div>
                                         <div class="skill-bar-percent">80%</div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="skill-box pt-4 pt-lg-0 mt-4 mt-lg-0">
                                    <div class="skillbar clearfix" data-percent="95%">
                                        <div class="skillbar-title"><span>angular js</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">95%</div>
                                    </div>
                                    <div class="skillbar clearfix " data-percent="85%">
                                        <div class="skillbar-title"><span>javascript</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">85%</div>
                                    </div>
                                    <div class="skillbar clearfix" data-percent="75%">
                                        <div class="skillbar-title"><span>wordpress</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">75%</div>
                                    </div>
                                    <div class="skillbar clearfix" data-percent="80%">
                                        <div class="skillbar-title"><span>Photoshop</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div>
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                     </div>
                 </div>
             </section> -->
             <!--   Resume End   -->

            <!--   Services Start   -->
             <?php
                $services = pods('services');

                $services_item = pods('services_item');
                $services_item->find('weight ASC');
             ?>
            <section id="services" class="section pp-scrollable services">
                <div class="display-table">
                    <div class="display-content">
                        <div class="container">
                            <div class="row">
                                <div class="title-small">
                                    <p class="text-dark">My Services</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h2 class="text-dark mb-3">My <span class="base-color">Services</span></h2>
                                        <?php if ( $services->field('caption') ): ?>
                                            <p class="text-muted"><?php echo $services->field('caption'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                            <?php while ( $services_item->fetch() ): ?>
                                <div class="col-lg-4 text-left">
                                    <div class="services-item">
                                        <div class="float-left mt-lg-1 d-inline-block services-icon">
                                            <i class="<?php echo $services_item->field('icon_class'); ?> size-md base-color"></i>
                                        </div>
                                        <div class="services-content">
                                            <h5><?php echo $services_item->field('name'); ?></h5>
                                            <p class="text-muted mt-3 mb-0"><?php echo $services_item->field('content'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--   Services End   -->

            <!--  Portfolio Start  -->
            <?php
                $portfolio = pods('portfolio');

                $term_list = [];
                $portfolio_entry->reset();
                while ( $portfolio_entry->fetch() ) {
                    array_push( $term_list, ...explode( ",", strip_tags( get_the_term_list( $portfolio_entry->field('ID'), "portfolio_category", "", "," ) ) ) );
                }
                $term_list = array_unique($term_list);
            ?>
            <section id="portfolio" class="section pp-scrollable portfolio">
                <div class="display-table">
                    <div class="display-content">
                        <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Portfolio</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <h2 class="text-dark">My <span class="base-color">Portfolio</span></h2>
                                    <?php if ( $portfolio->field('caption') ): ?>
                                        <p class="text-muted mx-auto section-subtitle mt-3"><?php echo $portfolio->field('caption'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <!--   Portfolio Filters   -->
                            <ul id="portfolio-filter" class="list-unstyled list-inline mb-0 col-lg-12 text-center portfolio-filter">
                                <li class="list-inline-item">
                                    <a href="#" data-filter="*" class="active my-1">All</a>
                                </li>
                                <?php foreach ( $term_list as $term ): ?>
                                <li class="list-inline-item">
                                    <a href="#" data-filter=".<?php echo strtolower($term); ?>" class="my-1"><?php echo ucwords($term); ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="portfolio-items mt-4 row">
                        <?php
                            $portfolio_entry->reset();
                            while ( $portfolio_entry->fetch() ):
                                $image_properties = get_post_featured_image( $portfolio_entry->field('ID'), 'portfolio-thumbnail' );

                                if ( isset( $image_properties['url'] ) ):
                        ?>
                            <div class="col-lg-4 portfolio-item my-3 <?php echo strtolower( strip_tags( get_the_term_list( $portfolio_entry->field('ID'), 'portfolio_category', '', ' ' ) ) ); ?>">
                                <div class="portfolio-item-content round">
                                    <img src="<?php echo $image_properties['url']; ?>" alt="<?php echo $image_properties['alt']; ?>">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-toggle="modal" data-target="#<?php echo $portfolio_entry->field('css_id'); ?>">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="<?php echo $image_properties['url']; ?>" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0"><?php echo $portfolio_entry->field('name'); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <!--   Portfolio End   -->

            <!-- Testimonial Start -->
            <!-- <section id="testimonial" class="section pp-scrollable testimonial text-center">
                <div class="display-table">
                    <div class="display-content">
                        <div class="container">
                            <div class="row">
                                <div class="title-small">
                                    <p class="text-dark">Testimonial</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="text-left">
                                        <h2 class="text-dark">My  <span class="base-color">Clients</span></h2>
                                        <p class="text-muted mt-1">What my clients say about me</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="owl-carousel"> -->
                                        <!-- Item 01 -->
                                        <!-- <div class="testimonial-item text-left">
                                            <p class="mb-2 text-muted">" In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder a publication to be made. "</p>
                                            <div class="float-left mt-4 mr-3 mr-sm-4">
                                                <img src="http://placehold.it/125x125" alt="/" class="rounded-circle">
                                            </div>
                                            <h4 class="float-left mt-5">-Jone Doe, <span class="font-weight-bold">Seo Manager</span></h4>
                                        </div> -->
                                        <!-- Item 02 -->
                                        <!-- <div class="testimonial-item text-left">
                                            <p class="mb-2 text-muted">" In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder a publication to be made. "</p>
                                            <div class="float-left mt-4 mr-3 mr-sm-4">
                                                <img src="http://placehold.it/125x125" alt="/" class="rounded-circle">
                                            </div>
                                            <h4 class="float-left mt-5">-Jessy Doe, <span class="font-weight-bold">UI Designer</span></h4>
                                        </div> -->
                                        <!-- Item 03 -->
                                        <!-- <div class="testimonial-item text-left">
                                            <p class="mb-2 text-muted">" In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder a publication to be made. "</p>
                                            <div class="float-left mt-4 mr-3 mr-sm-4">
                                                <img src="http://placehold.it/125x125" alt="/" class="rounded-circle">
                                            </div>
                                            <h4 class="float-left mt-5">-Jully Doe, <span class="font-weight-bold">UX Designer</span></h4>
                                        </div> -->
                                        <!-- Item 04 -->
                                        <!-- <div class="testimonial-item text-left">
                                            <p class="mb-2 text-muted">" In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder a publication to be made. "</p>
                                            <div class="float-left mt-4 mr-3 mr-sm-4">
                                                <img src="http://placehold.it/125x125" alt="/" class="rounded-circle">
                                            </div>
                                            <h4 class="float-left mt-5">-Jully Doe, <span class="font-weight-bold">UX Designer</span></h4>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!--  Testimonial End  -->

            <!--   Blog Start   -->
            <!-- <section id="blog" class="section pp-scrollable blog">
                <div class="display-table">
                    <div class="display-content">
                        <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Blog</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-left">
                                    <h2 class="text-dark">Latest <span class="base-color">News</span></h2>
                                    <p class="text-muted mt-1">Check Out My Latest Blog Posts</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4"> -->
                            <!-- Item-01 -->
                            <!-- <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="image-blog">
                                        <img src="http://placehold.it/600x400" alt="/" class="img-fluid rounded-top">
                                    </div>
                                    <div class="blog-content rounded-bottom text-left p-3">
                                        <h5 class="mb-0 mt-3"><a href="javascript:void(0)" data-toggle="modal" data-target="#blog-single" class="text-dark font-weight-light">Be Your Best Version</a></h5>
                                        <ul class="list-inline mt-3">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="base-color font-weight-bold">by</i>
                                                    <span class="text-dark font-italic">John Doe</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                                        <div class="blog-link pb-3">
                                            <button type="button" class="base-color" data-toggle="modal" data-target="#blog-single">Read More...</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Item-02 -->
                            <!-- <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="image-blog">
                                        <img src="http://placehold.it/600x400" alt="/" class="img-fluid rounded-top">
                                    </div>
                                    <div class="blog-content rounded-bottom text-left p-3">
                                        <h5 class="mb-0 mt-3"><a href="javascript:void(0)" data-toggle="modal" data-target="#blog-single" class="text-dark font-weight-light">5 Tips In UI/UX Web Design</a></h5>
                                        <ul class="list-inline mt-3">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="base-color font-weight-bold">by</i>
                                                    <span class="text-dark font-italic">John Doe</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                                        <div class="blog-link pb-3">
                                            <button type="button" class="base-color" data-toggle="modal" data-target="#blog-single">Read More...</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Item-03 -->
                            <!-- <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="image-blog">
                                        <img src="http://placehold.it/600x400" alt="/" class="img-fluid rounded-top">
                                    </div>
                                    <div class="blog-content rounded-bottom text-left p-3">
                                        <h5 class="mb-0 mt-3"><a href="javascript:void(0)" data-toggle="modal" data-target="#blog-single" class="text-dark font-weight-light">Write Your Dreams</a></h5>
                                        <ul class="list-inline mt-3">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="base-color font-weight-bold">by</i>
                                                    <span class="text-dark font-italic">John Doe</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                                        <div class="blog-link pb-3">
                                            <button type="button" class="base-color" data-toggle="modal" data-target="#blog-single">Read More...</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section> -->
            <!--   Blog End   -->

            <!--   Contact Start   -->
            <?php
                $contact = pods('contact');
            ?>
            <section id="contact" class="section pp-scrollable contact">
                <div class="display-table">
                    <div class="display-content">
                        <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Get in Touch</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <h2 class="text-dark">Get <span class="base-color">In Touch</span></h2>
                                    <?php if ( $contact->field('caption') ): ?>
                                        <p class="text-muted mx-auto section-subtitle mt-3"><?php echo $contact->field('caption'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row mt-5">
                            <div class="col-lg-12">
                                <div id="my-map"></div>
                            </div>
                        </div> -->
                        <div class="row mt-1">
                            <div class="col-lg-6 text-left">
                                <div class="contact-form">
                                    <!-- <h6 class="font-weight-semibold">I&rsquo;m here to help</h6> -->
                                    <!-- <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p> -->
                                    <div class="">
                                        <!-- <p class="mt-2 font-weight-bold"> Address : <span class="text-muted"> New York NY 10018, USA</span></p> -->
                                        <!-- <p class="mt-2 font-weight-bold"> Phone : <span class="text-muted"></span></p> -->
                                        <!-- <p class="mt-2 font-weight-bold"> Email : <span class="text-muted">contact@carlos.io</span></p> -->
                                        <!-- <p class="mt-2 font-weight-bold"> Web : <span class="text-muted">www.retrina.com </span></p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-left">
                                <form id="contactForm" class="form mt-3">
                                    <div class="row">
                                        <div class="col-lg-12 form-item">
                                            <div class="form-group">
                                                <input name="name" id="name" type="text" class="form-control" placeholder="Your Name*" required >
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-item">
                                            <div class="form-group">
                                                <input name="email" id="email" type="email" class="form-control" placeholder="Your Email*" required >
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-item">
                                            <div class="form-group">
                                                <input name="subject" id="subject" type="subject" class="form-control" placeholder="Message Subject*" required >
                                            </div>
                                        </div>
                                        <div class="col-12 form-item">
                                            <div class="form-group">
                                                <textarea name="comments" id="comments" rows="2" class="form-control h-auto" placeholder="Message..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-1 text-left">
                                            <button type="button" class="pill-button" id="submit-btn" onclick="sendEmail()">Send Message</button>
                                            <div id="message" class="toast text-white shadow-none border-0" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" >
                                                <div class="toast-body d-inline-block"></div>
                                                <button type="button" class="pr-3 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true" class="lni-close size-xs text-white"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <!--   Contact End   -->
<?php get_footer(); ?>