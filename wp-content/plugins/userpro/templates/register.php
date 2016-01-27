<div class="proj_register">
<div class="userpro userpro-<?php echo $i; ?> userpro-<?php echo $layout; ?>" <?php userpro_args_to_data( $args ); ?>>

	<a href="#" class="userpro-close-popup"><?php _e('Close','userpro'); ?></a>
	
	<div class="userpro-head">
		<div class="userpro-left"><?php echo $args["{$template}_heading"]; ?></div>
		<?php if ($args["{$template}_side"]) { ?>
		<div class="userpro-right"><a href="#" data-template="<?php echo $args["{$template}_side_action"]; ?>"><?php echo $args["{$template}_side"]; ?></a></div>
		<?php } ?>
		<div class="userpro-clear"></div>
	</div>
	
	<div class="userpro-body">
	
		<?php do_action('userpro_pre_form_message'); ?>

		<form action="" method="post" data-action="<?php echo $template; ?>">
		
			<input type="hidden" name="redirect_uri-<?php echo $i; ?>" id="redirect_uri-<?php echo $i; ?>" value="<?php if (isset( $args["{$template}_redirect"] ) ) echo $args["{$template}_redirect"]; ?>" />
			
			<?php // Hook into fields $args, $user_id
			if (!isset($user_id)) $user_id = 0;
			$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
			 
			 do_action('userpro_before_fields', $hook_args);
			 
			?>
			
			<?php
			// Multiple Registration Forms Support
			if (isset($args['type']) && $userpro->multi_type_exists($args['type'])) {
				$group = array_intersect_key( userpro_fields_group_by_template( $template, $args["{$template}_group"] ), array_flip($userpro->multi_type_get_array($args['type'])) );
			} else {
				$group = userpro_fields_group_by_template( $template, $args["{$template}_group"] );
			}
			?>
			<div class="projects_main">
			
			<?php foreach( $group as $key => $array ) { ?>
				<?php if ($array) echo userpro_edit_field( $key, $array, $i, $args ) ?>
				<?php if($key == 'video'){
					//echo do_shortcode('[vidrack]'); 
				} ?>
				
			<?php }
			//adding form?>
			</div>
			
			
			<?php // Hook into fields $args, $user_id
			if (!isset($user_id)) $user_id = 0;
			$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
				do_action('userpro_after_fields', $hook_args);
			?>
						
			<?php // Hook into fields $args, $user_id
			if (!isset($user_id)) $user_id = 0;
			$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
				do_action('userpro_before_form_submit', $hook_args);
			?>
			
			<?php if ($args["{$template}_button_primary"] ||  $args["{$template}_button_secondary"] ) { ?>
			<div class="userpro-field userpro-submit userpro-column">
			
				<?php // Hook into fields $args, $user_id
				if (!isset($user_id)) $user_id = 0;
				$hook_args = array_merge($args, array('user_id' => $user_id, 'unique_id' => $i));
					do_action('userpro_inside_form_submit', $hook_args);
					
				?>
				
				<?php if ($args["{$template}_button_primary"]) { ?>
				<input type="submit" value="<?php echo $args["{$template}_button_primary"]; ?>" class="userpro-button" />
				<?php } ?>
				
				<?php if ($args["{$template}_button_secondary"]) { ?>
				<input type="button" value="<?php echo $args["{$template}_button_secondary"]; ?>" class="userpro-button secondary" data-template="<?php echo $args["{$template}_button_action"]; ?>" />
				<?php } ?>

				<img src="<?php echo $userpro->skin_url(); ?>loading.gif" alt="" class="userpro-loading" />
				<div class="userpro-clear"></div>
				
			</div>
			<?php } ?>
		
		</form>
	
	</div>


		<div class = "col-sm-6 col-md-3 outer">
			<div class="projectpreview1">
							<div class="pro-box">
								<div class="img-thumb">
									<h4><div class="project_name_show"></div></h4><br />
									 <a target="_blank" href="<?php print_r($meta[link][0]);?>"><img id="blah" src="#" alt="your image" /></a>
								</div>
								<div class="pro-content">
									<div class="scrollbars short_synopsis_content"> </div> 				    
										
									<p class="readmore">read more</p>
									 <div class="scrollbars excrt-cont re-<?php echo get_the_ID();?>"><?php the_content(); ?></div>  
								</div>
									
								<div class="pro-table margin-t">
									<div class="scrollbars ">
										<div class="table">
										<div class="latst-filds">
											<div class="orange">Budget</div>
											<div class="fild-st"><div id="budd"></div></div>
										</div>
										<div class="latst-filds">
											<div class="orange">Genre</div>
											<div class="fild-st"><div id="genn"></div></div>
										</div>
										<div class="latst-filds">
											<div class="orange">Production Stage</div>
											<div class="fild-st"><div id="stage"></div></div>
										</div>
										<div class="latst-filds">
											<div class="orange">Compares</div>
											<div class="fild-st"><div class="comp"></div></div>
										</div>
										<div class="latst-filds">
											<div class="orange">Tax Break</div>
											<div class="fild-st"><div class="tax"></div></div>
										</div>
										<div class="latst-filds">
											<div class="orange">Production Team</div>
											<div class="fild-st"><div class="tea"></div></div>
										</div>
										<div class="latst-filds">
											<div class="orange">Cast</div>
											<div class="fild-st"><div class="cas"></div></div>
										</div>
										<div class="latst-filds">
											<div class="orange">Investor Info</div>
											<div class="fild-st"><div class="invest"></div></div>
										</div>
										</div>
									</div>
								</div>

			<div class="pro-bottom">
			<ul class="list-inline">
			<li>
			<a class="latest-loa" data-mode="hide" data-id="gh-<?php echo get_the_ID();?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/pro-load-3.png" /></a>
			</li>
			<li><a href="#"><span><div class="tar"></div></span><br/>Target</a></li>
			<li><a href="#"><span> <div class="inves"></div></span><br/>Invested</a></li>
			<li><a href="#"><span><div class="sof"></div></span> <br/>Soft</a></li>
			<li><a href="#"><span><div class="inv"></div></span> <br/>Investers</a></li>
			</ul>
			</div>

				</div>
			</div>
		</div>
					<?php//closing form
					?>

		<script>
			setInterval(function(){
				var abc = $("#add_image-"+<?php echo $i; ?>).attr('value');
				if(typeof abc === 'undefined'){
					//do nothing
				} else {
					$('#blah').attr('src', abc);
				}
			}, 2000);
			

			/* var aa = $("#add_image-"+<?php echo $i; ?>).attr('id');
			$('#'+aa).change(function(e){
				e.preventDefault();
				alert(22);
			});
			$('#'+aa).on('change', gotPic);
			
			function gotPic(event) {alert(11);
				if (event.target.files.length === 1 && event.target.files[0].type.indexOf("image/") === 0) {
					alert(URL.createObjectURL(event.target.files[0]));
					//$("#yourimage").attr("src", URL.createObjectURL(event.target.files[0]));
				}
			} */
			//alert(aa);
			
			//URL.createObjectURL(event.target.files[0])
		 
			$('.projects_main').children('.userpro-field').keyup(function(){
			  
			  if($(this).attr('data-key') == 'project_name'){
				var project_name = $(this).children('.userpro-input').children('input').val();
			  }
			  $('div.project_name_show').html(project_name);
			  
			  if($(this).attr('data-key') == 'short_synopsis'){
				var short_synopsis = $(this).children('.userpro-input').children('textarea').val();
			  }
			  $('div.short_synopsis_content').html(short_synopsis);
			  
			  if($(this).attr('data-key') == 'compares'){
				var compares = $(this).children('.userpro-input').children('input').val();
			  }
			  $('div.comp').html(compares);
			  
			   if($(this).attr('data-key') == 'cast'){
				var cast = $(this).children('.userpro-input').children('input').val();
			  }
			  $('div.cas').html(cast);
			  
			   if($(this).attr('data-key') == 'investor_info'){
				var investor_info = $(this).children('.userpro-input').children('textarea').val();
			  }
			  $('div.invest').html(investor_info);
			  
			  if($(this).attr('data-key') == 'target'){
				var target = $(this).children('.userpro-input').children('input').val();
			  }
			  $('div.tar').html(target);
			  
			  if($(this).attr('data-key') == 'invested'){
				var invested = $(this).children('.userpro-input').children('input').val();
			  }
			  $('div.inves').html(invested);
			  
			  if($(this).attr('data-key') == 'soft'){
				var soft = $(this).children('.userpro-input').children('input').val();
			  }
			  $('div.sof').html(soft);
			  
			   if($(this).attr('data-key') == 'investers'){
				var investers = $(this).children('.userpro-input').children('input').val();
			  }
			  $('div.inv').html(investers);
			  
			  if($(this).attr('data-key') == 'tax_break'){
				var tax_break = $(this).children('.userpro-input').children('input').val();
			  }
			  $('div.tax').html(tax_break);
			  
			  if($(this).attr('data-key') == 'production_team'){
				var production_team = $(this).children('.userpro-input').children('input').val();
			  }
			  $('div.tea').html(production_team);
			});

			jQuery('.chosen-select:eq(0)').change(function(){ 
			  var aa = jQuery('option:selected', this).val();
			 jQuery('#budd').html(aa);    
			});
			
			jQuery('.chosen-select:eq(1)').change(function(){ 
			  var aa = jQuery('option:selected', this).val();
			  jQuery('#genn').html(aa);    
			});
			
			jQuery('.chosen-select:eq(2)').change(function(){ 
			  var aa = jQuery('option:selected', this).val();
			 jQuery('#stage').html(aa);    
			});
			
		 $(document).ready(function(){$('.scrollbars').ClassyScroll();$(".remore").click(function(){$('.lig,.excrt-cont').hide();var rel=$(this).attr('data-id');var mode=$(this).attr('data-mode');if(mode=='hide'){$('.'+rel).slideToggle();$(this).attr('data-mode','show');}else{$(this).attr('data-mode','hide');}});$(".latest-loa").click(function(){$('.lig,.excrt-cont').hide();var rel=$(this).attr('data-id');var mode=$(this).attr('data-mode');if(mode=='hide'){$('.'+rel).slideToggle();$(this).attr('data-mode','show');}else{$(this).attr('data-mode','hide');}});});
		</script>
</div>
</div>