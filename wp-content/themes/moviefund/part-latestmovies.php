            <div class="slider-holder">
                <span style="font:normal 16px arial;">LATEST MOVIES</span>
                <ul>
                <?php
                    global $wpdb;
                    $move_rows = $wpdb->get_results( "SELECT ID, post_title, guid FROM movie_posts WHERE post_type = 'latestprojects' AND post_status = 'publish' ORDER BY ID DESC" );
                    $gate = 1;
                    foreach( $move_rows as $key => $row) { 
                        $row = get_object_vars($row);
                        $movie_url = $row['guid'];
                        $thumbnail = wp_get_attachment_url(get_post_meta($row['ID'], '_thumbnail_id', true));
                ?>
                <li <?php echo ($gate > 5)? 'style="display:none;"' : '';?>>
                    <a href="<?php echo $movie_url;?>" target="_blank">
                        <div class="mov_banner" style="background:url(<?php echo $thumbnail; ?>) no-repeat center center;background-size:cover;">
                            <div style="position:relative;height:100%;">
                                <p><?php echo $row['post_title']; ?></p>
                            </div>
                        </div>
                    </a>
                </li>
                <?php $gate++; } ?>
                </ul>
                <i id="l_btn" class="fa fa-chevron-circle-left arr_inact"></i>
                <i id="r_btn" class="fa fa-chevron-circle-right"></i>
            </div>