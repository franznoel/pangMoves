<?php get_header('filmpanel'); ?>
        <div class="content">
            <!-- get_template_part("part","moviesearch"); -->
            <div class="project-holder text-center" id="Projects">

                <div class="container">
                    <div class="movies-latt">
                        <?php 
                            if(have_posts()):
                                while ( have_posts() ) :
                                    the_post();
                                endwhile; 
                            endif;
                        ?>
                        <div class="row">
                            <?php
                                global $post;
                                $args = array('suppress_filters' => true,'post_type' => 'latestprojects','posts_per_page' => -1,'order' => 'ASC');
                                $cust_loop = new WP_Query($args);
                                if ($cust_loop->have_posts()) : 
                                    while ($cust_loop->have_posts()) : 
                                        $cust_loop->the_post();
                                        $postcount++;
                                        $meta = get_post_meta(get_the_id());
                                        $key_1_values = get_post_meta( get_the_ID(), '' ,true );

                                        $field = get_field_object('budget');
                                        $field1 = get_field_object('genre');
                                        $field2 = get_field_object('compares');
                                        $field3 = get_field_object('tax_breaks');
                                        $field4 = get_field_object('team');
                                        $field5 = get_field_object('cast');
                                        $field6 = get_field_object('investor_info');
                                        $field7 = get_field_object('target');
                                        $field8 = get_field_object('invested');
                                        $field9 = get_field_object('pledged');
                                        $field10 = get_field_object('investers');
                            ?>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="pro-box">
                                            <div class="img-thumb">
                                                <h4><?php the_title(); ?></h4><br />
                                                <a target="_blank" href="<?php print_r($meta[link][0]);?>">
                                                    <?php the_post_thumbnail('latest-pro',array('class' => "img-responsive")); ?>
                                                </a>
                                            </div>
                                            <div class="pro-content">
                                                <p><?php echo substr(get_the_content(), 0, 80); ?><span class="remore" data-mode="hide" data-id="re-<?php echo get_the_ID();?>">read more...</span></p>
                                                <div class="scrollbars excrt-cont re-<?php echo get_the_ID();?>"><?php the_content(); ?> </div>          
                                            </div>
                                            <div class="pro-table margin-t">
                                                <div class="scrollbars">
                                                    <div class="table">
                                                        <div class="latst-filds">
                                                            <div class="orange"><?php echo $field['label']; ?></div>
                                                            <div class="fild-st"><?php the_field( "budget" );?></div>
                                                        </div>
                                                        <div class="latst-filds">
                                                            <div class="orange"><?php echo $field1['label']; ?></div>
                                                            <div class="fild-st"><?php the_field( "genre" );?></div>
                                                        </div>
                                                        <div class="latst-filds">
                                                            <div class="orange"><?php echo $field2['label']; ?></div>
                                                            <div class="fild-st"><?php the_field( "compares" );?></div>
                                                        </div>
                                                        <div class="latst-filds">
                                                            <div class="orange"><?php echo $field3['label']; ?></div>
                                                            <div class="fild-st"><?php the_field( "tax_breaks" );?></div>
                                                        </div>
                                                        <div class="latst-filds">
                                                            <div class="orange"><?php echo $field4['label']; ?></div>
                                                            <div class="fild-st"><?php the_field( "team" );?></div>
                                                        </div>
                                                        <div class="latst-filds">
                                                            <div class="orange"><?php echo $field5['label']; ?></div>
                                                            <div class="fild-st"><?php the_field( "cast" );?></div>
                                                        </div>
                                                        <div class="latst-filds">
                                                            <div class="orange"><?php echo $field6['label']; ?></div>
                                                            <div class="fild-st"><?php the_field( "investor_info" );?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lig gh-<?php echo get_the_ID();?>">
                                                    <?php $grap = get_field('graph'); ?>
                                                    <?php if( !empty($grap) ): ?>
                                                        <img src="<?php echo $grap['url']; ?>"/>
                                                    <?php else: ?>
                                                        <img src="<?php echo get_home_url();?>/wp-content/uploads/2015/10/graphics.png" />
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="pro-bottom">
                                                <ul class="list-inline">
                                                    <li><a class="latest-loa" data-mode="hide" data-id="gh-<?php echo get_the_ID();?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/pro-load-3.png" /></a></li>
                                                    <li><a href="#"><span><?php the_field( "target" );?></span><br/> <?php echo $field7['label']; ?></a></li>
                                                    <li><a href="#"><span> <?php the_field( "invested" );?></span><br/><?php echo $field8['label']; ?></a></li>
                                                    <li><a href="#"><span><?php the_field( "pledged" );?></span> <br/><?php echo $field9['label']; ?></a></li>
                                                    <li><a href="#"><span><?php the_field( "investers" );?></span> <br/><?php echo $field10['label']; ?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            <?php 
                                    endwhile; 
                                endif;
                                wp_reset_query(); 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
        var $p = jQuery;
        $p('.slider-holder > i#r_btn').click(function() {
            if (!$p(this).hasClass('arr_inact')) {
                var $t_obj = $p('.slider-holder > ul').find('li:visible:first');
                var $t_ind = $t_obj.index();
                var $l_ind = $p('.slider-holder > ul').find('li:last').index();
                if ($t_ind == 0) {
                    $p('.slider-holder > i#l_btn').removeClass('arr_inact');
                }
                if (($t_ind + 5) == $l_ind) {
                    $p(this).addClass('arr_inact');
                }
                $t_obj.hide();
                var $t_ind = $t_ind + 5;
                $p('.slider-holder > ul > li:eq(' + $t_ind + ')').show();

            }
        });

        $p('.slider-holder > i#l_btn').click(function() {
            if (!$p(this).hasClass('arr_inact')) {
                var $t_obj = $p('.slider-holder > ul').find('li:visible:last');
                var $t_ind = $t_obj.index();
                var $l_ind = $p('.slider-holder > ul').find('li:last').index();
                if ($t_ind == $l_ind) {
                    $p('.slider-holder > i#r_btn').removeClass('arr_inact');
                }
                if ($t_ind == 5) {
                    $p(this).addClass('arr_inact');
                }

                $t_obj.hide();
                var $s_ind = $t_ind - 5;
                $p('.slider-holder > ul > li:eq(' + $s_ind + ')').show();
            }
        });
        $p('.slider-holder2 > i#r_btn').click(function() {
            if (!$p(this).hasClass('arr_inact')) {
                var $t_obj = $p('.slider-holder2 > ul').find('li:visible:first');
                var $t_ind = $t_obj.index();
                var $l_ind = $p('.slider-holder2 > ul').find('li:last').index();
                if ($t_ind == 0) {
                    $p('.slider-holder2 > i#l_btn').removeClass('arr_inact');
                }
                if (($t_ind + 5) == $l_ind) {
                    $p(this).addClass('arr_inact');
                }
                $t_obj.hide();
                var $t_ind = $t_ind + 5;
                $p('.slider-holder2 > ul > li:eq(' + $t_ind + ')').show();

            }
        });

        $p('.slider-holder2 > i#l_btn').click(function() {
            if (!$p(this).hasClass('arr_inact')) {
                var $t_obj = $p('.slider-holder2 > ul').find('li:visible:last');
                var $t_ind = $t_obj.index();
                var $l_ind = $p('.slider-holder2 > ul').find('li:last').index();
                if ($t_ind == $l_ind) {
                    $p('.slider-holder2 > i#r_btn').removeClass('arr_inact');
                }
                if ($t_ind == 5) {
                    $p(this).addClass('arr_inact');
                }

                $t_obj.hide();
                var $s_ind = $t_ind - 5;
                $p('.slider-holder2 > ul > li:eq(' + $s_ind + ')').show();
            }
        });
        </script>
<?php get_footer(); ?>

