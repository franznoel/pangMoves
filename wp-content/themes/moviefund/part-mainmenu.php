        <div class="mainmenu">
            <div class="container">
                <nav class="navbar top-navbar" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>                       
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ,'menu_class' => 'nav navbar-nav' ) ); ?>
                    </div>
                </nav>
            </div>
        </div>