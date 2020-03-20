<?php
    //Grab some options
    //$main_logo = of_get_option('header_primary_logo');
    $main_logo = get_header_image();
    //Set the fixed class, only on the homepage.
    $fixed_class = ' fixed';
?>

    <div class="top-bar-container contain-to-grid show-for-medium-up<?php echo $fixed_class;?>">
        <nav class="top-bar row" data-topbar role="navigation">
            <span class="user_panel">
                <span class="na_servers">
                    North American Servers
                </span>
            </span>
            <ul class="title-area large-4 medium-4 small-12 columns">
                <li class="name">
                    <h1>
                        <a href="<?php echo site_url(); ?>">
                            <?php 
                                $primary_logo = get_header_image();
                                if(!empty($primary_logo)){
                                    $logo_str = "<img src='" . $primary_logo . "' alt='" . get_bloginfo('name') . "'/>\n";
                                }else{
                                    $logo_str = bloginfo('name');
                                }
                                echo $logo_str;
                            ?>
                        </a>
                    </h1>
                </li>
            </ul>
            <section class="top-bar-section large-8 medium-8 small-12 columns">
                <?php dpnalibrary_2015_top_bar_right(); ?>
            </section>
        </nav>
    </div>
<?php
    if(!empty($fixed_class) or $fixed_class!=0){
        echo "</div>";
    }
?>
