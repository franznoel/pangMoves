        <div class="header-bottom">
            <div id="carousel-banner" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">                    
                    <?php 
                    global $post;
                    $tmp_post = $post;
                    $args = array( 'post_type' => 'innerslider', 'numberposts' => -1, 'offset'=> 0, 'orderby'  => 'post_date', 'order'  => 'DESC');
                    $myposts = get_posts( $args );
                    $meta = get_post_meta(get_the_id());

                    foreach( $myposts as $key => $post ):  setup_postdata($post); ?>
                        <div class="item<?php echo ($key==0?' active':''); ?>">
                            <?php if (has_post_thumbnail( $post->ID ) ):
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'innerslider' );?>
                            <a href="<?php print_r($meta[link][0]);?>" data-toggle="modal" data-target="#mySliderVideo"><?php the_post_thumbnail('slider'); ?></a><?php endif; ?>
                            <div class="carousel-content">
                                <div class="container">
                                    <div class="carousel-content-panel">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="carousel-nav">
                    <ol class="carousel-indicators custm-indic">
                    <?php 
                    foreach( $myposts as $key => $post ) { setup_postdata($post); ?>
                        <li data-target="#carousel-banner" data-slide-to="<?php echo $key;?>" <?php if($key == 0){?>class="active"<?php } ?>></li>
                    <?php }?>
                    </ol>
                </div>                  
            </div>
        </div>
        <div class="modal fade" id="mySliderVideo" tabindex="-1" role="dialog" aria-labelledby="mySliderVideo">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <iframe src="https://player.vimeo.com/video/136802486?title=0&byline=0&portrait=0" width="100%" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>