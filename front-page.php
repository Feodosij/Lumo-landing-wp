<?php
/**
 * Template Name: Home page
 */
get_header();
?>

  
<main>
    <section class="hero">
        <div class="hero__inner">
            <div class="hero__content">
                <?php if ( !empty( get_field( 'hero_subtitle' ) ) ) { ?>
                    <div class="hero__subtitle"><?php echo esc_html( get_field( 'hero_subtitle' ) ); ?></div>
                <?php } ?>

                <?php if ( !empty( get_field('hero_title') ) ) { ?>
                    <h1 class="hero__title"><?php echo wp_kses_post( get_field( 'hero_title' ) ); ?></h1>
                <?php } ?>
                
                <?php if ( !empty( get_field( 'hero_description' ) ) ) { ?>
                    <div class="hero__description"><?php echo esc_html( get_field( 'hero_description' ) ); ?></div>
                <?php } ?>

                <?php 
                $hero_button = get_field('hero_button');
                if( $hero_button ) {
                    $hero_button_url = $hero_button['url'];
                    $hero_button_title = $hero_button['title'];
                    ?>
                    <a href="<?php echo esc_url( $hero_button_url ); ?>" class="book-button book-button--primary"><?php echo esc_html( $hero_button_title ); ?></a>
                <?php } ?>

                <?php if ( !empty( get_field( 'hero_text_bottom' ) ) ) { ?>
                    <div class="hero__text-bottom"><?php echo esc_html( get_field( 'hero_text_bottom' ) ); ?></div>
                <?php } ?>
            </div>

            <div class="hero__image">
                <?php if ( !empty( get_field( 'background_image' ) ) ) { ?>
                    <img src="<?php echo esc_url( get_field( 'background_image' ) ); ?>" alt="hero images">
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="winterfest">
        <div class="container">
            <div class="winterfest__header">
                <div class="winterfest__content">
                    <?php if ( !empty( get_field( 'winterfest_title' ) ) ) { ?>
                        <h2 class="winterfest__title"><?php echo esc_html( get_field( 'winterfest_title' ) ); ?></h2>
                    <?php } ?>
                    
                    <?php if ( !empty( get_field( 'winterfest_description' ) ) ) { ?>
                        <p class="winterfest__description"><?php echo esc_html( get_field( 'winterfest_description' ) ); ?></p>
                    <?php } ?>
                </div>

                <?php if ( have_rows( 'winterfest_gallery' ) ) { ?>
                    <div class="winterfest__gallery">
                        <?php while ( have_rows( 'winterfest_gallery' ) ) {
                            the_row(); ?>

                            <?php if ( !empty( get_sub_field( 'winterfest_image' ) ) ) { ?>
                                <div class="winterfest__image">
                                    <img src="<?php echo esc_url( get_sub_field( 'winterfest_image' ) ); ?>" alt="images">
                                </div>
                            <?php } ?>

                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            
            <?php if ( have_rows( 'winterfest_features' ) ) { ?>
                <div class="winterfest__features">
                    <?php while ( have_rows( 'winterfest_features' ) ) {
                        the_row(); ?>
                    
                        <article class="feature">
                            <a class="feature__link" href="google.com"></a>
                            <?php if ( !empty( get_sub_field( 'feature_icon' ) ) ) { ?>
                                <div class="feature__icon"><img src="<?php echo esc_url( get_sub_field( 'feature_icon' ) ); ?>" alt="icon"></div>
                            <?php } ?>

                            <?php if ( !empty( get_sub_field( 'feature_title' ) ) ) { ?>
                                <h4 class="feature__title"><?php echo esc_html( get_sub_field( 'feature_title' ) ); ?></h4>
                            <?php } ?>
                            
                            <?php if ( !empty( get_sub_field( 'feature_subtitle' ) ) ) { ?>
                                <div class="feature__subtitle"><?php echo esc_html( get_sub_field( 'feature_subtitle' ) ); ?></div>
                            <?php } ?>
                           
                            <?php if ( !empty( get_sub_field( 'feature_description' ) ) ) { ?>
                                <p class="feature__description"><?php echo esc_html( get_sub_field( 'feature_description' ) ); ?></p>
                            <?php } ?>

                            <?php 
                            $feature_button = get_sub_field('feature_button');
                            if( $feature_button ) {
                                $feature_button_url = $feature_button['url'];
                                $feature_button_title = $feature_button['title'];
                                ?>

                            <div class="feature__button">
                                <a href="<?php echo esc_url( $feature_button_url ); ?>" class="arrow-button"><span><?php echo esc_html( $feature_button_title ); ?></span></a>
                            </div>

                            <?php } ?>
                        </article>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>

    <section class="discount">
        <div class="container">
            <div class="discount__inner">
                <?php if ( !empty( get_field( 'discount_image' ) ) ) { ?>
                    <div class="discount__image">
                        <img src="<?php echo esc_url( get_field( 'discount_image' ) ); ?>" alt="images">
                    </div>
                <?php } ?>
                <div class="discount__content">
                    <?php if ( !empty( get_field( 'discount_subtitle' ) ) ) { ?>
                        <div class="discount__subtitle"><?php echo esc_html( get_field( 'discount_subtitle' ) ); ?></div>
                    <?php } ?>
                    
                    <?php if ( !empty( get_field( 'discount_title' ) ) ) { ?>
                        <h2 class="discount__title"><?php echo wp_kses_post( get_field( 'discount_title' ) ); ?></h2>
                    <?php } ?>

                    <?php 
                    $discount_button = get_field('discount_button');
                    if( $discount_button ) {
                        $discount_button_url = $discount_button['url'];
                        $discount_button_title = $discount_button['title'];
                        ?>

                    <a href="<?php echo esc_url( $discount_button_url ); ?>" class="book-button book-button--light"><?php echo esc_html( $discount_button_title ); ?></a>

                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
 
    <section class="fleet">
        <div class="container">
            <?php if ( !empty( get_field( 'fleet_title' ) ) ) { ?>
                <h2 class="fleet__title"><?php echo esc_html( get_field( 'fleet_title' ) ); ?></h2>
            <?php } ?>
            
            <?php if ( have_rows( 'fleet_grid' ) ) { ?>
                <div class="fleet__grid">
                    <?php while ( have_rows( 'fleet_grid' ) ) { 
                        the_row(); 
                        
                        $item_type = get_sub_field( 'item_type' ); ?>
                        
                        <?php if ( $item_type === 'content' ) { ?>

                            <div class="fleet__item fleet__item--with-info">
                                <div class="fleet__info">

                                    <?php if ( !empty( get_sub_field( 'fleet_grid_icon' ) ) ) { ?>
                                        <div class="fleet__icon">
                                            <img src="<?php echo esc_url( get_sub_field( 'fleet_grid_icon' ) ); ?>" alt="Fleet Icon">
                                        </div>
                                    <?php } ?>

                                    <?php if ( !empty( get_sub_field( 'fleet_grid_subtitle' ) ) ) { ?>
                                        <div class="fleet__subtitle"><?php echo esc_html( get_sub_field( 'fleet_grid_subtitle' ) ); ?></div>
                                    <?php } ?>
                                    
                                    <?php if ( !empty( get_sub_field( 'fleet_grid_title' ) ) ) { ?>
                                        <h3 class="fleet__name"><?php echo esc_html( get_sub_field( 'fleet_grid_title' ) ); ?></h3>
                                    <?php } ?>

                                    <?php 
                                    $fleet_grid_button = get_sub_field('fleet_grid_button');
                                    if( $fleet_grid_button ) {
                                        $fleet_grid_button_url = $fleet_grid_button['url'];
                                        $fleet_grid_button_title = $fleet_grid_button['title'];
                                        ?>

                                    <a href="<?php echo esc_url( $fleet_grid_button_url ); ?>" class="arrow-button"><?php echo esc_html( $fleet_grid_button_title ); ?></a>

                                    <?php } ?>
                                </div>
                                <?php if ( !empty( get_sub_field( 'fleet_grid_image' ) ) ) { ?>
                                    <img class="fleet__image" src="<?php echo esc_url( get_sub_field( 'fleet_grid_image' ) ); ?>" alt="Image">
                                <?php } ?>
                            </div>
                        <?php } elseif ( $item_type === 'image' ) { ?>
                            <?php if ( !empty( get_sub_field( 'fleet_grid_image' ) ) ) { ?>
                                <div class="fleet__item">
                                    <img class="fleet__image" src="<?php echo esc_url( get_sub_field( 'fleet_grid_image' ) ); ?>" alt="Image">
                                </div>
                            <?php } ?>
                        <?php } ?>
                       
                        
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>

    <section class="venue">
        <div class="container">
            <?php 
            $venue_image = get_field('venue_image'); 
            if ( !empty( $venue_image ) ) { ?>
                <div class="venue__inner" style="background-image: url('<?php echo esc_url( $venue_image ); ?>');">
            <?php } else { ?>
                <div class="venue__inner" style="background-color: #333C4F ">
            <?php } ?>

                    <?php 
                    $venue_button = get_field('venue_button');
                    if( $venue_button ) {
                        $venue_button_url = $venue_button['url'];
                        $venue_button_title = $venue_button['title'];
                        ?>

                    <div class="venue__button">
                        <a href="<?php echo esc_url( $venue_button_url ); ?>" class="book-button book-button--light"><?php echo esc_html( $venue_button_title ); ?></a>
                    </div>

                    <?php } ?>

                    <?php if ( !empty( get_field( 'venue_subtitle' ) ) ) { ?>
                        <div class="venue__subtitle"><?php echo esc_html( get_field( 'venue_subtitle' ) ); ?></div>
                    <?php } ?>
                    
                    <?php if ( !empty( get_field( 'venue_title' ) ) ) { ?>
                        <h2 class="venue__title"><?php echo esc_html( get_field( 'venue_title' ) ); ?></h2>
                    <?php } ?>
                    
                    <?php if ( !empty( get_field( 'venue_description' ) ) ) { ?>
                        <p class="venue__text"><?php echo esc_html( get_field( 'venue_description' ) ); ?></p>
                    <?php } ?>
                </div>
        </div>
    </section>

    <section class="booking">
        <div class="container">
            <div class="booking__inner">
                <div class="booking__header">
                    <div class="booking__text">
                        <?php if ( !empty( get_field( 'booking_subtitle' ) ) ) { ?>
                            <div class="booking__subtitle"><?php echo esc_html( get_field( 'booking_subtitle' ) ); ?></div>
                        <?php } ?>
                        
                        <?php if ( !empty( get_field( 'booking_title' ) ) ) { ?>
                            <h2 class="booking__title"><?php echo esc_html( get_field( 'booking_title' ) ); ?></h2>
                        <?php } ?>
                    </div>
                    <div class="booking__decor">
                        <?php if ( !empty( get_field( 'booking_decor_img' ) ) ) { ?>
                            <img src="<?php echo esc_url( get_field( 'booking_decor_img' ) ); ?>" alt="Decor images">
                        <?php } ?>
                    </div>
                </div>

                <form class="booking__form">
                    <div class="booking__form-group">
                        <div class="booking__form-row">
                            <label class="booking__label" for="name">Full Name</label>
                            <input class="booking__input" type="text" id="name" placeholder="Eg. Jane Doe">
                        </div>
                        <div class="booking__form-row">
                            <label class="booking__label" for="email">Email Address</label>
                            <input class="booking__input" type="email" id="email" placeholder="Eg. janedoe@gmail.com">
                        </div>
                    </div>
                    <div class="booking__form-row">
                        <label class="booking__label" for="referral">Where did you hear about the Lumo Winter Fest?</label>
                        <input class="booking__input" type="text" id="referral" placeholder="Eg. YouTube">
                    </div>
                    <div class="booking__form-row">
                        <label class="booking__label" for="social">If you're an influencer, please share your YouTube or TikTok URL</label>
                        <input class="booking__input" type="url" id="social" placeholder="Eg. https://www.youtube.com/...">
                    </div>
                    <div class="booking__form-row">
                        <label class="booking__label" for="interest">What do you like to see in the Winter Fest?</label>
                        <input class="booking__input" type="text" id="interest" placeholder="Eg. Coats">
                    </div>
                    <button class="book-button book-button--light" type="submit">OPT-IN</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>