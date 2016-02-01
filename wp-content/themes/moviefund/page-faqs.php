<?php get_header('faqs'); ?>
<style>
#accordion a[aria-expanded="true"] {
    background: rgba(0, 0, 0, 0) url("http://adsli.com/demo/moviefund/wp-content/uploads/2015/10/MINUS.png") no-repeat scroll right 0;
}
#accordion a[aria-expanded="false"] {
    background: rgba(0, 0, 0, 0) url("http://adsli.com/demo/moviefund/wp-content/uploads/2015/10/PLUS.png") no-repeat scroll right 0;
}
#accordion a{
    display: block;
}
</style>

<div class="holder">
    <div class="container">
        <div class="faq">
            <h2>FAQs ?</h2>
            <div class="faq-tab">
            
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#abts" aria-controls="home" role="tab" data-toggle="tab">ABOUT US</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">CROWDFUNDING & EQUITYCROWDFUNDING </a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">EQUITY CROWDFUNDING</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">MY ACCOUNT</a></li>
                <li role="presentation"><a href="#fees" aria-controls="fees" role="tab" data-toggle="tab">FEES</a></li>
                <li role="presentation"><a href="#investors" aria-controls="investors" role="tab" data-toggle="tab">INVESTORS</a></li>
                <li role="presentation"><a href="#film-m" aria-controls="film-m" role="tab" data-toggle="tab">FILM MAKERS</a></li>
              </ul>
            
              <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="abts">
                        <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                            <div class="exp-all">
                            <button class="btn btn-default openall">open all</button> <button class="btn btn-default closeall">close all</button>
                            </div>
                                <?php
                                    global $post;
                                    $i=1;
                                $incr = have_posts();
                                    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'faqs','FAQs_cat' => 'about-us-faqs','order' => 'ASC'
                                    );
                                    $myposts = get_posts( $args );
                                    foreach( $myposts as $post ) { setup_postdata($post);
                                ?>
                        
                        
                                <div class="panel panel-default">
                                
                                    <div id="headingOne<?php echo $i;?>" role="tab" class="panel-heading cstm-panel">
                                        <h4 class="panel-title cstm-panel-tit">
                                        <a aria-controls="collapseOne<?php echo $i;?>" aria-expanded="<?php if($i == 1){?>true<?php } else{?>false<?php }?>" href="#collapseOne<?php echo $i;?>" data-parent="#accordion" data-toggle="collapse" role="button" class="collapsed">
                                            <div class="row">
                                                <div class="col-sm-11 col-xs-11">
                                                    <h5><?php echo $i;?>. <?php the_title();?></h5>
                                                </div>
                                            </div>
                                        </a>
                                        </h4>
                                   </div>
                                    <div aria-labelledby="headingOne<?php echo $i; ?>" role="tabpanel"
                                    class="<?php if($i == 1){?>panel-collapse collapse in<?php }else{ ?>panel-collapse collapse<?php }?> "
                                    id="collapseOne<?php echo $i; ?>" aria-expanded="<?php if($i == 1){ ?>true<?php }else{ ?>false<?php } ?>"  
                                    style=" <?php if($i == 1){ ?>  <?php }else{ ?>height:0px;<?php } ?> " >

                                        <div class="panel-body cstm-panel-body">
                                           <?php the_content();?>
                                        </div>
                                    </div>
                            </div>
                    <?php
                    $i++;
                        }wp_reset_query();
                    ?>
                    </div>
                </div><!--Tab Content-->
                
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                            <div class="exp-all">
                            <button class="btn btn-default openall">open all</button> <button class="btn btn-default closeall">close all</button>
                            </div>
                                <?php
                                    global $post;
                                    $i=1;
                                $incr = have_posts();
                                    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'faqs','FAQs_cat' => 'crowdfunding','order' => 'ASC'
                                    );
                                    $myposts = get_posts( $args );
                                    foreach( $myposts as $post ) { setup_postdata($post);
                                ?>
                        
                        
                                <div class="panel panel-default">
                                
                                    <div id="headingOne<?php echo $i;?>" role="tab" class="panel-heading cstm-panel">
                                        <h4 class="panel-title cstm-panel-tit">
                                        <a aria-controls="collapseOne11<?php echo $i;?>" aria-expanded="<?php if($i == 1){?>true<?php } else{?>false<?php }?>" href="#collapseOne11<?php echo $i;?>" data-parent="#accordion" data-toggle="collapse" role="button" class="collapsed">
                                            <div class="row">
                                                <div class="col-sm-11 col-xs-11">
                                                    <h5><?php echo $i;?>. <?php the_title();?></h5>
                                                </div>
                                            </div>
                                        </a>
                                        </h4>
                                   </div>
                                    <div aria-labelledby="headingOne<?php echo $i; ?>" role="tabpanel"
                                    class="<?php if($i == 1){?>panel-collapse collapse in<?php }else{ ?>panel-collapse collapse<?php }?> "
                                    id="collapseOne11<?php echo $i; ?>" aria-expanded="<?php if($i == 1){ ?>true<?php }else{ ?>false<?php } ?>"  
                                    style=" <?php if($i == 1){ ?>  <?php }else{ ?>height:0px;<?php } ?> " >

                                        <div class="panel-body cstm-panel-body">
                                           <?php the_content();?>
                                        </div>
                                    </div>
                            </div>
                    <?php
                    $i++;
                        }wp_reset_query();
                    ?>
                    </div>
                </div><!--Tab Content-->
                
                    <div role="tabpanel" class="tab-pane active" id="messages">
                        <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                            <div class="exp-all">
                            <button class="btn btn-default openall">open all</button> <button class="btn btn-default closeall">close all</button>
                            </div>
                                <?php
                                    global $post;
                                    $i=1;
                                $incr = have_posts();
                                    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'faqs','FAQs_cat' => 'equity','order' => 'ASC'
                                    );
                                    $myposts = get_posts( $args );
                                    foreach( $myposts as $post ) { setup_postdata($post);
                                ?>
                        
                        
                                <div class="panel panel-default">
                                
                                    <div id="headingOne<?php echo $i;?>" role="tab" class="panel-heading cstm-panel">
                                        <h4 class="panel-title cstm-panel-tit">
                                        <a aria-controls="collapseOne2<?php echo $i;?>" aria-expanded="<?php if($i == 1){?>true<?php } else{?>false<?php }?>" href="#collapseOne2<?php echo $i;?>" data-parent="#accordion" data-toggle="collapse" role="button" class="collapsed">
                                            <div class="row">
                                                <div class="col-sm-11 col-xs-11">
                                                    <h5><?php echo $i;?>. <?php the_title();?></h5>
                                                </div>
                                            </div>
                                        </a>
                                        </h4>
                                   </div>
                                    <div aria-labelledby="headingOne<?php echo $i; ?>" role="tabpanel"
                                    class="<?php if($i == 1){?>panel-collapse collapse in<?php }else{ ?>panel-collapse collapse<?php }?> "
                                    id="collapseOne2<?php echo $i; ?>" aria-expanded="<?php if($i == 1){ ?>true<?php }else{ ?>false<?php } ?>"  
                                    style=" <?php if($i == 1){ ?>  <?php }else{ ?>height:0px;<?php } ?> " >

                                        <div class="panel-body cstm-panel-body">
                                           <?php the_content();?>
                                        </div>
                                    </div>
                            </div>
                    <?php
                    $i++;
                        }wp_reset_query();
                    ?>
                    </div>
                </div><!--Tab Content-->
                
                    <div role="tabpanel" class="tab-pane active" id="settings">
                        <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                            <div class="exp-all">
                            <button class="btn btn-default openall">open all</button> <button class="btn btn-default closeall">close all</button>
                            </div>
                                <?php
                                    global $post;
                                    $i=1;
                                $incr = have_posts();
                                    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'faqs','FAQs_cat' => 'my-account','order' => 'ASC'
                                    );
                                    $myposts = get_posts( $args );
                                    foreach( $myposts as $post ) { setup_postdata($post);
                                ?>
                        
                        
                                <div class="panel panel-default">
                                
                                    <div id="headingOne<?php echo $i;?>" role="tab" class="panel-heading cstm-panel">
                                        <h4 class="panel-title cstm-panel-tit">
                                        <a aria-controls="collapseOne3<?php echo $i;?>" aria-expanded="<?php if($i == 1){?>true<?php } else{?>false<?php }?>" href="#collapseOne3<?php echo $i;?>" data-parent="#accordion" data-toggle="collapse" role="button" class="collapsed">
                                            <div class="row">
                                                <div class="col-sm-11 col-xs-11">
                                                    <h5><?php echo $i;?>. <?php the_title();?></h5>
                                                </div>
                                            </div>
                                        </a>
                                        </h4>
                                   </div>
                                    <div aria-labelledby="headingOne<?php echo $i; ?>" role="tabpanel"
                                    class="<?php if($i == 1){?>panel-collapse collapse in<?php }else{ ?>panel-collapse collapse<?php }?> "
                                    id="collapseOne3<?php echo $i; ?>" aria-expanded="<?php if($i == 1){ ?>true<?php }else{ ?>false<?php } ?>"  
                                    style=" <?php if($i == 1){ ?>  <?php }else{ ?>height:0px;<?php } ?> " >

                                        <div class="panel-body cstm-panel-body">
                                           <?php the_content();?>
                                        </div>
                                    </div>
                            </div>
                    <?php
                    $i++;
                        }wp_reset_query();
                    ?>
                    </div>
                </div><!--Tab Content-->
                
                    <div role="tabpanel" class="tab-pane active" id="fees">
                        <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                            <div class="exp-all">
                            <button class="btn btn-default openall">open all</button> <button class="btn btn-default closeall">close all</button>
                            </div>
                                <?php
                                    global $post;
                                    $i=1;
                                $incr = have_posts();
                                    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'faqs','FAQs_cat' => 'fees','order' => 'ASC'
                                    );
                                    $myposts = get_posts( $args );
                                    foreach( $myposts as $post ) { setup_postdata($post);
                                ?>
                        
                        
                                <div class="panel panel-default">
                                
                                    <div id="headingOne<?php echo $i;?>" role="tab" class="panel-heading cstm-panel">
                                        <h4 class="panel-title cstm-panel-tit">
                                        <a aria-controls="collapseOne4<?php echo $i;?>" aria-expanded="<?php if($i == 1){?>true<?php } else{?>false<?php }?>" href="#collapseOne4<?php echo $i;?>" data-parent="#accordion" data-toggle="collapse" role="button" class="collapsed">
                                            <div class="row">
                                                <div class="col-sm-11 col-xs-11">
                                                    <h5><?php echo $i;?>. <?php the_title();?></h5>
                                                </div>
                                            </div>
                                        </a>
                                        </h4>
                                   </div>
                                    <div aria-labelledby="headingOne<?php echo $i; ?>" role="tabpanel"
                                    class="<?php if($i == 1){?>panel-collapse collapse in<?php }else{ ?>panel-collapse collapse<?php }?> "
                                    id="collapseOne4<?php echo $i; ?>" aria-expanded="<?php if($i == 1){ ?>true<?php }else{ ?>false<?php } ?>"  
                                    style=" <?php if($i == 1){ ?>  <?php }else{ ?>height:0px;<?php } ?> " >

                                        <div class="panel-body cstm-panel-body">
                                           <?php the_content();?>
                                        </div>
                                    </div>
                            </div>
                    <?php
                    $i++;
                        }wp_reset_query();
                    ?>
                    </div>
                </div><!--Tab Content-->
                
                    <div role="tabpanel" class="tab-pane active" id="investors">
                        <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                            <div class="exp-all">
                            <button class="btn btn-default openall">open all</button> <button class="btn btn-default closeall">close all</button>
                            </div>
                                <?php
                                    global $post;
                                    $i=1;
                                $incr = have_posts();
                                    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'faqs','FAQs_cat' => 'investors','order' => 'ASC'
                                    );
                                    $myposts = get_posts( $args );
                                    foreach( $myposts as $post ) { setup_postdata($post);
                                ?>
                        
                        
                                <div class="panel panel-default">
                                
                                    <div id="headingOne<?php echo $i;?>" role="tab" class="panel-heading cstm-panel">
                                        <h4 class="panel-title cstm-panel-tit">
                                        <a aria-controls="collapseOne5<?php echo $i;?>" aria-expanded="<?php if($i == 1){?>true<?php } else{?>false<?php }?>" href="#collapseOne5<?php echo $i;?>" data-parent="#accordion" data-toggle="collapse" role="button" class="collapsed">
                                            <div class="row">
                                                <div class="col-sm-11 col-xs-11">
                                                    <h5><?php echo $i;?>. <?php the_title();?></h5>
                                                </div>
                                            </div>
                                        </a>
                                        </h4>
                                   </div>
                                    <div aria-labelledby="headingOne<?php echo $i; ?>" role="tabpanel"
                                    class="<?php if($i == 1){?>panel-collapse collapse in<?php }else{ ?>panel-collapse collapse<?php }?> "
                                    id="collapseOne5<?php echo $i; ?>" aria-expanded="<?php if($i == 1){ ?>true<?php }else{ ?>false<?php } ?>"  
                                    style=" <?php if($i == 1){ ?>  <?php }else{ ?>height:0px;<?php } ?> " >

                                        <div class="panel-body cstm-panel-body">
                                           <?php the_content();?>
                                        </div>
                                    </div>
                            </div>
                    <?php
                    $i++;
                        }wp_reset_query();
                    ?>
                    </div>
                </div><!--Tab Content-->
                
                    <div role="tabpanel" class="tab-pane active" id="film-m">
                        <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                            <div class="exp-all">
                            <button class="btn btn-default openall">open all</button> <button class="btn btn-default closeall">close all</button>
                            </div>
                                <?php
                                    global $post;
                                    $i=1;
                                $incr = have_posts();
                                    $args = array('numberposts' => -1,'suppress_filters' => true,'post_type' => 'faqs','FAQs_cat' => 'filmmakers','order' => 'ASC'
                                    );
                                    $myposts = get_posts( $args );
                                    foreach( $myposts as $post ) { setup_postdata($post);
                                ?>
                        
                        
                                <div class="panel panel-default">
                                
                                    <div id="headingOne<?php echo $i;?>" role="tab" class="panel-heading cstm-panel">
                                        <h4 class="panel-title cstm-panel-tit">
                                        <a aria-controls="collapseOne6<?php echo $i;?>" aria-expanded="<?php if($i == 1){?>true<?php } else{?>false<?php }?>" href="#collapseOne6<?php echo $i;?>" data-parent="#accordion" data-toggle="collapse" role="button" class="collapsed">
                                            <div class="row">
                                                <div class="col-sm-11 col-xs-11">
                                                    <h5><?php echo $i;?>. <?php the_title();?></h5>
                                                </div>
                                            </div>
                                        </a>
                                        </h4>
                                   </div>
                                    <div aria-labelledby="headingOne<?php echo $i; ?>" role="tabpanel"
                                    class="<?php if($i == 1){?>panel-collapse collapse in<?php }else{ ?>panel-collapse collapse<?php }?> "
                                    id="collapseOne6<?php echo $i; ?>" aria-expanded="<?php if($i == 1){ ?>true<?php }else{ ?>false<?php } ?>"  
                                    style=" <?php if($i == 1){ ?>  <?php }else{ ?>height:0px;<?php } ?> " >

                                        <div class="panel-body cstm-panel-body">
                                           <?php the_content();?>
                                        </div>
                                    </div>
                            </div>
                    <?php
                    $i++;
                        }wp_reset_query();
                    ?>
                    </div>
                </div><!--Tab Content-->
                
            </div><!--Faq-->    
        </div>
    </div>
</div>





<?php get_footer(); ?>