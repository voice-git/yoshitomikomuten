<?php ?>

<footer class="footer">
<div class="container">
<p>吉富工務店株式会社　<br class="sp_only">〒451-0072　<br class="sp_only">名古屋市西区笠取町3-78-2<br class="pc_only">
	<span class="pc_only">TEL. 052-523-1571</span><span class="tel sp_only"><a href="tel:0525231571">TEL. 052-523-1571</a></span><span class="fax">FAX. 052-523-1572</span></p>
</div>
<!-- container -->
</footer>

</main>

<div class="copyright">
<small>Copyright（C）Yoshitomi Komuten All Rights Reserved.</small>
</div>
<!-- copy -->

<div id="page-top">
	<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/retop.png" alt="ページトップへ戻る"></a>
</div>
<!-- page-top -->



<!--js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<script src='<?php echo get_template_directory_uri(); ?>/js/drawer.min.js'></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.simplyscroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/velocity.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.base.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('.drawer').drawer();
});
</script>


<?php wp_footer(); ?>
</body>
</html>
