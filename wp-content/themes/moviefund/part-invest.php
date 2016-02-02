<div id="invest-box" class="row">
<?php
global $post;
$i = 1;
$args = array('suppress_filters' => true,'posts_per_page' => 4,'post_type' => 'invest','order' => 'ASC');
$myposts = get_posts( $args );
foreach( $myposts as $post ): 
    setup_postdata($post);
    $meta = get_post_meta(get_the_id());
    $key = get_post_meta($post->ID, 'overtext1');
?>
    <div class="col-sm-3">
        <div class="invest-box">
            <a href="<?php the_field("rio_invest"); ?>" class="superTrigger"><?php the_post_thumbnail('wayinst'); ?>
                <div class="blue text-center">
                    <i class="fa fa-plus"></i>
                    <h6><?php print_r($meta[link][1]);?><br/><?php print_r($meta[link][2]);?></h6>
                </div>
            </a>

            <h5><?php the_title(); ?></h5>
            <a href="<?php the_field("rio_invest"); ?>"><?php the_content(); ?></a>
            <div class="way-invstbx">
                <div class="row">
                    <div class="col-xs-8 text-left">
                        <b>Min.Investment</b>
                    </div>
                    <div class="col-xs-4">
                        <p><?php the_field("min.investment"); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 text-left">
                        <b>Raising</b>
                    </div>
                    <div class="col-xs-4">
                        <p><?php the_field("raising"); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 text-left">
                        <b>For 15% Equity</b>
                    </div>
                    <div class="col-xs-4">
                        <p><?php the_field("for_15%_equity"); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 text-left">
                        <b>Average Carry</b>
                    </div>
                    <div class="col-xs-4">
                        <p><?php the_field("average_carry"); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 text-left">
                        <b>Interest per anumm</b>
                    </div>
                    <div class="col-xs-4">
                        <p><?php the_field("interest_per_anumm"); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 text-left">
                        <b>RIO</b>
                    </div>
                    <div class="col-xs-4">
                        <p><?php the_field("rio"); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 jeba_invest">
                        <div class="button text-center">

                        <ul class="list-inline">

                            <li><a href="<?php the_field("rio_invest"); ?>" class="btn btn-6">INVEST NOW</a></li>

                        </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
<?php endforeach; ?>
<?php wp_reset_query();?>
</div>