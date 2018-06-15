
		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/foot-logo.png" id="foot-logo">
                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="row">
                        <div class="col-md-6" id="abt-us" >
                            <p class="mb-4 mbr-fonts-style foot-title display-7" id="ftitle">
                                ABOUT US</p>
                            <p class="mbr-text mbr-links-column mbr-fonts-style display-7" id="txt2">Careers
                                <br>Terms
                                <br>Privacy
                                <br>Legal
                                <br><br></p>
                        </div>
                        <div class="col-md-6" id="help">
                        <p class="mb-4 mbr-fonts-style foot-title display-7" id="ftitle">
                            HELP</p>
                        <p class="mbr-text mbr-fonts-style mbr-links-column display-7" id="txt2">Return policy
                            <br>Delivery details
                            <br>Get in touch
                            <br>FAQs
                            <br><br></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4" id="con">
                    <p id="ftitle" id="txt2">
                            CONNECT WITH US</p>
                    <br>
                    <br> 
                    <div class="row no-gutter">
                    	<div class="col-xs-4">
                    		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="tweet" >
                    	</div>
                    	<div class="col-xs-4">
	                    	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="facebook">
	                	</div>
	                    <div class="col-xs-4">
	                    	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.png" alt="insta">
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



<?php wp_footer(); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/mbr-flip-card.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/mbr-testimonials-slider.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script_theme.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script_gallery.js"></script>
    <script>
$(document).ready(function(){
    if($("div > p").hasClass('form-row')){
        $("div > p").removeClass('form-row');
    }

    $(".ajax_add_to_cart").click(function () {
        $("#bag-total").html(function () {
            var bagTotal = parseInt($(this).html());
            return ++bagTotal;
        });
    });
    
    $(".woocommerce-product-gallery__wrapper > div > a").addClass('woocommerce-product-gallery__trigger');

});
</script>

</body>
</html>
