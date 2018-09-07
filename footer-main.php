<footer>
    <section class="footer3 cid-qTf8bNwAbE" id="footer3-19">





        <div class="container">
            <div class="media-container-row content">


                <div class="col-md-6 col-sm-12">
                    <p class="mb-4 mbr-fonts-style foot-title display-7" id="ftitle">
                        SUBSCRIBE TO OUR EMAILS
                    </p>
                    <p class="mbr-text form-text mbr-fonts-style display-7" id="txt2">Recieve the latest updates, coupons and exclusive offers in your inbox</p>
                    <div class="media-container-column" data-form-type="formoid">
                        <div data-form-alert="" hidden="" class="align-center">Thanks for filling out the form!</div>
                        <form action="" method="post">
                        <div class="row no-gutter">
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Your Email Id" required="" />
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="col-md-4">
                            <button class="btn" type="submit" id="join">JOIN</button>
                        </div>
                        </div>
                        </form>
                    </div>
                    <div class="foot-logo">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                    <img src="<?php echo (has_custom_logo()) ? esc_url( $logo[0] ) : get_template_directory_uri().'/assets/images/foot-logo.png' ?>" alt="<?php echo esc_attr( get_bloginfo('name', 'display') ); ?>" title="<?php echo esc_attr( get_bloginfo('name') ); ?>" id="foot-logo">
                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="row">
                        <div class="col-md-6 white-text" id="abt-us" style="background-color: #ff6600; color: white; padding-top: 15px;">
                            <p class="mb-4 mbr-fonts-style foot-title display-7" id="ftitle">
                                ABOUT US</p>
                            <p class="mbr-text mbr-links-column mbr-fonts-style display-7" id="txt2" "><a href="#">Careers</a>
                                <br><a href="#">Delivery details</a>
                            <br><a href="#">Get in touch</a>
                            <br><a href="#">FAQs</a>
                            <br><br></p>
                        </div>
                        <div class="col-md-6" id="help" style="background-color: #ff6600; color: white;">
                        <p class="mb-4 mbr-fonts-style foot-title display-7" id="ftitle">
                            HELP</p>
                        <p class="mbr-text mbr-fonts-style mbr-links-column display-7" id="txt2"><a href="#">Return policy</a>
                            <br><a href="#">Delivery details</a>
                            <br><a href="#">Get in touch</a>
                            <br><a href="#">FAQs</a>
                            <br><br></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4" id="con" >
                    <p id="ftitle" id="txt2">
                            CONNECT WITH US</p>
                    <br>
                    <br> 
                    <div class="row no-gutter">
                    	<div class="col-xs-4">
                    	<a href="https://twitter.com/">
                    		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="tweet" >
                    	</a>
                    	</div>

                    	<div class="col-xs-4">
                    	<a href="https://www.facebook.com/">
	                    	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="facebook">
	                    </a>
	                	</div>
	                    <div class="col-xs-4">
	                    <a href="https://www.instagram.com/thefoxytot/">
	                    	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.png" alt="insta">
	                    </a>
                    	</div>
                    </div>
                </div>

            </div>
            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-sm-12">
                        <hr>
                    </div>
                </div>
                <div class="media-container-row">
                    <div class="col-sm-6 copyright">
                        <p class="mbr-text mbr-fonts-style display-7">
                            © Copyright 2018 The Foxy Tot - All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
    
    <script type="text/javascript">
$(document).ready(function(){
    $('#navbarSupportedContent2').on('shown.bs.collapse', function () {
        $("#upDown").removeClass('fa-sort-down').addClass('fa-sort-up');
    });

    $('#navbarSupportedContent2').on('hidden.bs.collapse', function () {
        $("#upDown").removeClass('fa-sort-up').addClass('fa-sort-down');
    });
});
    </script>
</body>
</html>
