<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

			<footer id="site-footer" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<?php
						if ( function_exists( 'the_privacy_policy_link' ) ) {
							the_privacy_policy_link( '<p class="privacy-policy">', '</p>' );
						}
						?>

						<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); ?>">
								<?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
							</a>
						</p><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->
			<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <form method="POST" class="mform">
    	
    	<div id="form-area"></div>
    
    <button type="button" value="" id="submit" onclick="submit_form()">Submit</button>
    </form>
    
  </div>

</div>
<script>


 

</script>
		<?php wp_footer(); ?>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>		
<script>
// Get the modal
function modal_mform(e){
var modal = document.getElementById("myModal");
modal.style.display = "block";

var ID=e;	
$.ajax({
      type: 'POST',
      url: '<?php echo admin_url('admin-ajax.php');?>',
      data: { action : 'wpget_user' , ID:ID },
      success: function( response ) {
          $( '#form-area' ).html( response ); 
      }
  });   

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}
var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}



 function submit_form()  {
 	var ID =$("#post_id").val();
 	var first_name =$("#first_name").val();
 	var last_name =$("#last_name").val();

    $.ajax({
      type: "POST",
      url: "<?php echo admin_url('admin-ajax.php');?>",
      data: { action : 'wpttuts_updateuser' , ID:ID,first_name:first_name,last_name:last_name },
    }).done(function (data) {
      console.log(data);
      get_all_user();
    });

    
  }

 function get_all_user()  {
    $.ajax({
      type: "POST",
      url: "<?php echo admin_url('admin-ajax.php');?>",
      data: { action : 'get_all_user'},
    }).done(function (data) {
    	modal.style.display = "none";
       $( '#all_user' ).html( data ); 
    });

    
  }

</script>
	</body>
</html>
