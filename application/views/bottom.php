
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-content">
                    <div class="col-md-4">
                        <h5>About Us</h5>
                        <hr>
                        <div class="thumbnail footer-pie">
                            <img src="imgs/avatars/logo-footer.png" alt="Cacao nóng blog">
                            <div class="pie-content">
                                <p>Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, torta justo sit amet risus.</p>
                                <div class="social-icon">
                                    <h6>
                                        <a class="fb-social" href="https://www.facebook.com/hey.cuteguy/" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a class="tw-social" href="https://twitter.com/5nowMovie" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a class="gp-social" href="https://plus.google.com/u/1/105193026828833921766" target="_blank">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                        <a class="in-social" href="https://www.instagram.com/movie5now/" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a class="tm-social" href="https://www.tumblr.com/blog/movie5now" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copy right -->
            <div class="col-md-12 footer-bottom">
                <p><i class="fa fa-rss" aria-hidden="true"></i> <small>Be yours and happiness</small></p>
            </div>
        </div>
    </div>
</footer>

</div>

<!-- Go to top -->
<div id="back-to-top" class="go-top">
    <a href="#"><h5>TOP</h5></a>
</div>


<!-- jQuery -->
<script src="<?php echo base_url() ?>public/js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<!--<script src="--><?php //echo base_url() ?><!--public/js/bootstrap.min.js"></script>-->

<script src="<?php echo base_url() ?>public/js/scroller.js"></script>

<script type="text/javascript">
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.navbar a.dropdown-toggle').on('click', function(e) {
            var $el = $(this);
            var $parent = $(this).offsetParent(".dropdown-menu");
            $(this).parent("li").toggleClass('open');
            if(!$parent.parent().hasClass('nav')) {
                $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
            }
            $('.nav li.open').not($(this).parents("li")).removeClass("open");
            return false;
        });
    });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-64451067-11"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-64451067-11');
</script>

</body>
</html>