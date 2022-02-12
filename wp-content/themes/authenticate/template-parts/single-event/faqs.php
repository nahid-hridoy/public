<style>
.faq-row.open.active .text span {
    visibility: visible;
}

.faq-row .text {
    display: none;
}

.faq-row {
    padding: .5rem 0;
	transition: .5s;
}

.faq-row.open.active .text {
    display: block;
    margin-top: 1rem;
}
</style>

<section id="faqs" class="faqs-blocks py-md-10">
    <div class="container">
		<div class="section-heading text-center pb-5">
			<h2 class="text-uppercase text-primary">FAQ’s</h2>
		</div>
        <div class="row">
			<div class="page_left col-md-3">
				<?php if( have_rows('faq') ):
					$count = 0;
					while( have_rows('faq') ) : the_row();
						$heading = get_sub_field('heading'); 
						$count++; ?>
						<div class="heading faq-row text-uppercase">
							<a href="#faq-<?php echo $count; ?>"><?php echo $heading; ?></a>
						</div>
					<?php endwhile;
				endif; ?>
			</div>
			<div class="page_right col-md-9">
				<div class="section-heading">
					<div class="section-heading-text">
						<?php if( have_rows('faq') ):
							$count = 0;
							while( have_rows('faq') ) : the_row();
								$heading = get_sub_field('heading'); 
								$count++; ?>
								<div id="faq-<?php echo $count; ?>" class="faq-section">
									<div class="heading">
										<h3><?php echo $heading; ?></h3>
									</div>
									<?php if( have_rows('row') ):
										while( have_rows('row') ) : the_row();
										$title = get_sub_field('title'); 
										$text = get_sub_field('text'); 
									?>
									<div class="faq-row">
										<div class="title"><a href="#"><strong><?php echo $title; ?></strong></a></div>
										<div class="text"><?php echo $text; ?></div>
									</div>
										<?php endwhile;
									endif; ?>
								</div>		
							<?php endwhile;
						endif; ?>
					</div>
				</div>
			</div>
        </div>
    </div>
</section>
<script>
jQuery(document).ready(function(){
    jQuery('.faq-section .faq-row .title a').click(function(e){
        e.preventDefault();
        jQuery(this).parent().parent().parent().find('.faq-row').removeClass('open');
        if( !jQuery(this).parent().parent().hasClass('open') && !jQuery(this).parent().parent().hasClass('active') ) {
            jQuery(this).parent().parent().addClass('open');
            jQuery(this).parent().parent().parent().find('.faq-row').removeClass('active');
            jQuery(this).parent().parent().addClass('active');
        }
        else {
            jQuery(this).parent().parent().parent().find('.faq-row').removeClass('active');
        }
    });
    jQuery('.faq-section .faq-row .text.open.active a').click(function(e){
        e.returnValue = true;
    });
});
</script>