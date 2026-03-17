<section class="section section--faq">
		<div class="qp faq">
			<div class="container">
				<div class="faq__row">
					<div class="faq__header">
						<h2>
						<?php 
							$section_group = get_field('faq_section');
							echo $section_group['title']; 
						?>
						</h2>
					</div>
					<div class="faq__col-accordion">
						<div class="faq__accordion accordion">
							<div class="accordion__wrap no-more">
								<?php 
								
									$faq_lists = $section_group['faqs'];
									$faq_count = $faq_lists ? count($faq_lists) + 1 : 0;
									$current_faq = 1;
									

									if( $faq_count > 0 ):
										foreach($faq_lists as $faq):
										    $faq_id = 'faq_group_' . $current_faq;
											$faq_title = $faq['title'];
											$faq_content = $faq['content'];
											if($faq_title && $faq_content):
								?>
									<div class="accordion__item">
										<div class="accordion__title">
											<button type="button" aria-expanded="<?php echo $current_faq == 1 ? 'true' : 'false'; ?>" aria-controls="<?php echo $faq_id; ?>">
												<?php echo $faq_title; ?>
											</button>
										</div>
										<div class="accordion__content <?php echo $current_faq == 1 ? 'is__open' : ''; ?>" aria-hidden="false" id="<?php echo $faq_id; ?>">
											<p>
												<?php echo $faq_content; ?>
											</p>
										</div>
									</div>
								<?php
											endif;
											$current_faq = $current_faq + 1;
										endforeach;
									endif;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>