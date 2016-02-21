        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo text-center">
                            <a href="<?php echo get_home_url(); ?>">
                                <img src="<?php echo of_get_option('logo'); ?>" alt="Logo" class="img-responsive" />
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="login-panel text-right">
                            <ul class="list-inline">
                                <?php if (is_user_logged_in()): ?>
                                    <li><a href="<?php echo home_url(); ?>/contact-us/" class="btn btn-1" style="border:1px solid #0CC71A;">INVEST NOW</a></li>
                                    <li><a href="<?php echo home_url(); ?>/contact-us/" class="btn btn-2" style="border: 1px solid #E8D600;">UPLOAD PROJECT</a></li>
                                <?php else: ?>
                                    <li><a href="<?php echo site_url();?>/profile/" class="btn btn-1" style="border:1px solid #0CC71A;">Login / Register</a></li>
                                    <li><a href="<?php echo site_url();?>/profile/" class="btn btn-2" style="border: 1px solid #E8D600;">Create a Campaign</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>