<?php
/*
Template Name: Book a Demo - New
Template Post Type: page
 */

get_header('home');
?>
<style>
	.qp-points-list{
    display:flex;
    flex-direction:column;
    width:100%;
    list-style: none;
    gap:1rem;
    margin-top:32px;

    li{
        display:flex;
        align-items:center;
        justify-content:flex-start;
        gap:8px;
        font-size:16px;
        font-weight:400;

        b{
            font-weight:600;
        }
        
        span{
            display:block;
            line-height:1.2;
        }

        svg{
            width:16px;
            height:auto;
        }
        
    }
}
@media only screen and (min-width: 950px){
	.demo-page-hero.page-hero-inner{
		.page-hero-contents{
			width: 60% !important;
			padding: 0 0 0 4rem !important;
		}
		.page-hero-image{
			width: 40% !important;
			padding: 0 !important;
			
			.qp-hp-form-container{
				margin-right: var(--img-mr);
			}

		}
	}
}

@media only screen and (max-width: 600px){
	.demo-page-hero.page-hero-inner{
	
		.page-hero-image{
			padding: 0rem 1rem 0 !important;
		}
	}
}

.demo-page-hero{
	.page-hero-image{
		padding: 0rem 4rem 0 !important;
	}
	.qp-hp-form-container{
		display:flex;
		width:100%;
		padding:2rem;
		background:var(--q-primary);
		border-radius:12px;
		flex-direction:column;
		color: var(--q-secondary);
		gap:2rem;
		z-index: 10;
		
		.fluentform .ff-el-group{
			margin-bottom: 16px !important;
		}
		h2{
			font-size:24px;
		}

		.ff-el-form-control{
			border:1px solid rgba(29, 37, 44, 0.1);
			background: var(--q-white);
			color: var(--q-secondary);
			font-family : var(--q-font-body);
			font-size:15px;
			padding: 10px 12px;
			border-radius:8px;
			transition: ease border 0.3s;

			&:focus, &:hover, &:focus-within{
				border-color: rgba(29, 37, 44, 0.3);
				outline:none;
			}
		}

		.ff-btn-submit:not(.ff_btn_no_style){
			display:flex;
			width:100%;
			font-family : var(--q-font-body);
			font-size:16px;
			padding: 12px 12px;
			border-radius:8px;
			transition: ease all 0.3s;
			border:0; 
			align-items:center;
			justify-content:center;
			font-weight:500;
			background: var(--q-secondary);
			color: var(--q-white);
			cursor:pointer;

			&:hover, &:focus{
				background: #0d1317 !important;
				color: var(--q-white) ;
				opacity: 1 !important;
			}
		}

		.ff_submit_btn_wrapper{
			margin: 16px 0 0 !important;
		}

		.ff-message-success {
			margin-top: 0 !important;
			background: #1d252c;
			border: 1px solid #1d252c !important;
			color: #fff;
			border-radius: 12px;
			font-family: var(--q-font-body);
			font-size: 14px;
			line-height: 1.4;
		}

		/* HubSpot Form Styles */
		.hs-form {
			display: flex;
			flex-direction: column;
			gap: 0;
		}

		.hs-form fieldset {
			max-width: 100% !important;
		}

		/* Two-column layout for side-by-side fields - desktop only */
		@media only screen and (min-width: 600px) {
			.hs-form fieldset.form-columns-2 {
				display: flex;
				gap: 12px;
			}

			.hs-form fieldset.form-columns-2 .hs-form-field {
				flex: 1;
			}
		}

		/* Mobile: stack all fields */
		@media only screen and (max-width: 599px) {
			.hs-form fieldset.form-columns-2 {
				display: block;
			}

			.hs-form fieldset.form-columns-2 .hs-form-field {
				width: 100%;
			}
		}

		.hs-form-field {
			margin-bottom: 16px !important;
		}

		.hs-form-field label {
			display: block;
			font-family: var(--q-font-body);
			font-size: 14px;
			font-weight: 500;
			color: var(--q-secondary);
			margin-bottom: 6px;
		}

		.hs-form-field label .hs-form-required {
			color: #c44b4b;
			margin-left: 2px;
		}

		.hs-input {
			width: 100% !important;
			border: 1px solid rgba(29, 37, 44, 0.1);
			background: var(--q-white);
			color: var(--q-secondary);
			font-family: var(--q-font-body);
			font-size: 15px;
			padding: 10px 12px;
			border-radius: 8px;
			transition: ease border 0.3s;
			box-sizing: border-box;
		}

		.hs-input:focus,
		.hs-input:hover {
			border-color: rgba(29, 37, 44, 0.3);
			outline: none;
		}

		.hs-input::placeholder {
			color: rgba(29, 37, 44, 0.5);
		}

		/* Select dropdown styling */
		select.hs-input {
			appearance: none;
			-webkit-appearance: none;
			-moz-appearance: none;
			background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%231D252C' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
			background-repeat: no-repeat;
			background-position: right 12px center;
			padding-right: 36px;
			cursor: pointer;
		}

		.hs-submit {
			margin-top: 16px !important;
		}

		.hs-button {
			display: flex;
			width: 100%;
			font-family: var(--q-font-body);
			font-size: 16px;
			padding: 12px 12px;
			border-radius: 8px;
			transition: ease all 0.3s;
			border: 0;
			align-items: center;
			justify-content: center;
			font-weight: 500;
			background: var(--q-secondary);
			color: var(--q-white);
			cursor: pointer;
		}

		.hs-button:hover,
		.hs-button:focus {
			background: #0d1317 !important;
			color: var(--q-white);
			opacity: 1 !important;
		}

		.hs-error-msgs {
			list-style: none;
			padding: 0;
			margin: 4px 0 0;
		}

		.hs-error-msgs li {
			color: #c44b4b;
			font-size: 13px;
			font-family: var(--q-font-body);
		}

		.submitted-message {
			background: #1d252c;
			border: 1px solid #1d252c !important;
			color: #fff;
			border-radius: 12px;
			font-family: var(--q-font-body);
			font-size: 14px;
			line-height: 1.4;
			padding: 16px;
			text-align: center;
		}

		/* Hide HubSpot legal consent if not needed */
		.legal-consent-container {
			margin-top: 8px;
		}

		.legal-consent-container .hs-form-booleancheckbox-display {
			display: flex;
			align-items: flex-start;
			gap: 8px;
		}

		.legal-consent-container .hs-form-booleancheckbox-display input {
			margin-top: 4px;
		}

		.legal-consent-container .hs-form-booleancheckbox-display span {
			font-size: 13px;
			color: var(--q-secondary);
			font-family: var(--q-font-body);
		}

	}
}
</style>
<main class="quipli main">
	<section class="page-hero dark-bg">
		<div class="max-container">
			<div class="pattern-bg pattern-bottom-right">
				<div class="page-hero-inner demo-page-hero">
					<div class="page-hero-contents">
						<div class="page-heading left-aligned">
							<h1 class="qp-highlighted-text">
								<?php
									$hero_group = get_field('hero_section');
									if($hero_group['hero_heading'] == ''){
										$hero_group['hero_heading'] = 'See the <em>#1 rated equipment rental platform</em> in action';
									}
									echo $hero_group['hero_heading'];
								?>
							 </h1>

							<p style="--max-w: 600px; margin-bottom: 32px !important"><?php echo $hero_group['hero_desc'] ? $hero_group['hero_desc'] : "Unlimited inventory. Unlimited users. Features that grow with your business. There's a reason why hundreds of top rental companies trust Quipli."; ?></p>
							<?php get_template_part('template-parts/solutions/ratings-light'); ?>
							<?php 
								$default_points = array(
									"How to <b>manage rentals, deliveries, and payments</b> all in one place",
									"Protecting equipment with <b>built-in insurance & damage waiver</b> options",
									"Turning your rental website into a <b>24/7 booking and sales engine</b>",
									"<b>Integrations, support, and tools</b> to help you grow your business",
								);
								$points = get_field('points_list');
								if(empty($points['points_list']) || $point === null){
									$points = $default_points;
								}
								
								if(is_array($points) && count($points) > 0):
							?>
							<ul class="qp-points-list">
							<?php  foreach($points as $point): ?>
								<li>
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10 20.0003C15.5228 20.0003 20 15.5231 20 10.0003C20 4.47743 15.5228 0.000274658 10 0.000274658C4.47715 0.000274658 0 4.47743 0 10.0003C0 15.5231 4.47715 20.0003 10 20.0003Z" fill="white"/>
										<path d="M6 9.5717L9.27273 13.0003L15 7.00027" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"/>
									</svg>
									<span><?php echo $point; ?></span>
								</li>
								<?php endforeach;?>
							</ul>
							<?php endif; ?>
						</div>
					</div>
					<div class="page-hero-image align-top page-hero-form" style="--img-max-w: 5rem; --img-mr: -3rem">
						<div class="qp-hp-form-container">
							<h2 class="qp-hp-form-title">Request a personalized demo</h2>
							<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
							<script>
								hbspt.forms.create({
									portalId: "8737923",
									formId: "dc333d01-71ed-4222-a177-c8037ba57f14",
									region: "na1"
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
		get_template_part('template-parts/rental-partners');
		get_template_part('template-parts/reviews'); 
	?>
</main>

<?php
get_sidebar();
get_footer();
