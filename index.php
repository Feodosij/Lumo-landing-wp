<?php
/**
 * Front page Lumo landing
 */

get_header(); ?>

  
<main>
    <section class="hero">
        <div class="hero__inner">
            <div class="hero__content">
                <div class="hero__subtitle">embrace the chill</div>
                <h1 class="hero__title">Lumo’s <span>Winter fest</span> Collection <span>2024-2025</span></h1>
                <div class="hero__description">Stay warm, stylish, and ready for winter.</div>
                <a href="#" class="book-button book-button--primary">prep for the winterfest</a>
                <div class="hero__text-buttom">check last year’s edition</div>
            </div>
            <div class="hero__image">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/hero.png" alt="hero images">
            </div>
        </div>
    </section>

    <section class="winterfest">
        <div class="container">
            <div class="winterfest__header">
                <div class="winterfest__content">
                    <h2 class="winterfest__title">THIS YEAR’S WINTERFEST</h2>
                    <p class="winterfest__description">Introducing Lumo's Winterfest 2024/2025, where warmth meets cutting-edge style. This season’s collection blends modern, functional designs with premium fabrics to keep you cozy during the coldest months. From sleek, insulated jackets to effortlessly stylish knitwear, each piece is crafted with both comfort and fashion in mind. Whether you're hitting the slopes or strolling through the city, Lumo's Winterfest line ensures you're prepared for every winter adventure—while looking your absolute best. Stay ahead of the trends and embrace the chill with confidence.</p>
                </div>
                <div class="winterfest__gallery">
                    <div class="winterfest__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/g1.png" alt="images">
                    </div>
                    <div class="winterfest__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/g2.png" alt="images">
                    </div>
                    <div class="winterfest__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/g3.png" alt="images">
                    </div>
                    <div class="winterfest__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/g4.png" alt="images">
                    </div>
                </div>
            </div>
            <div class="winterfest__features">
                <article class="feature">
                    <div class="feature__icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/Group 5.png" alt="icon"></div>
                        <h4 class="feature__title">Innovative Fabrics</h4>
                    <div class="feature__subtitle">Our Best Technology Yet</div>
                    <p class="feature__description">Lumo’s Winterfest collection uses cutting-edge, weather-resistant fabrics that adapt to your environment. Stay warm without overheating, and enjoy water-repellent, windproof materials that ensure comfort in every condition.</p>
                    <div class="feature__button">
                        <a href="#" class="arrow-button"></a>
                    </div>
                    
                </article>

                <article class="feature">
                    <div class="feature__icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/Group 6.png" alt="icon"></div>
                    <h4 class="feature__title">Innovative Fabrics</h4>
                    <div class="feature__subtitle">Our Best Technology Yet</div>
                    <p class="feature__description">Every garment in the 2024/2025 line is crafted with sustainability in mind. We prioritize eco-friendly materials and responsible production practices, ensuring that you can stay stylish while supporting the planet.</p>
                    <div class="feature__button">
                        <a href="#" class="arrow-button"></a>
                    </div>
                </article>
                    
                <article class="feature">
                    <div class="feature__icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/Group 7.png" alt="icon"></div>
                    <h4 class="feature__title">Innovative Fabrics</h4>
                    <div class="feature__subtitle">Our Best Technology Yet</div>
                    <p class="feature__description">Our Winterfest clothing line features inclusive sizing and tailored fits, making it easy to find pieces that flatter and move with you. Comfort and confidence come standard with every item.</p>
                    <div class="feature__button">
                        <a href="#" class="arrow-button"></a>
                    </div>
                </article>

                <article class="feature">
                    <div class="feature__icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/Group 8.png" alt="icon"></div>
                    <h4 class="feature__title">Innovative Fabrics</h4>
                    <div class="feature__subtitle">Our Best Technology Yet</div>
                    <p class="feature__description">Whether you're heading to the office or exploring the outdoors, Lumo’s Winterfest collection blends functionality with sleek design. Layer effortlessly for any occasion, making every outfit a statement in warmth and style.</p>
                    <div class="feature__button">
                        <a href="#" class="arrow-button"></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="discount">
        <div class="container">
            <div class="discount__inner">
                <div class="discount__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/orange-girl.png" alt="images">
                </div>
                <div class="discount__content">
                    <div class="discount__subtitle">Don't miss out on exclusive savings!</div>
                    <h2 class="discount__title"><span>35%</span> discount on launch day</h2>
                    <a href="#" class="book-button book-button--light">BOOK YOUR SEAT</a>
                </div>
            </div>
        </div>
    </section>

    <section class="fleet">
        <div class="container">
            <h2 class="fleet__title">Upcoming Fleet</h2>
            <div class="fleet__grid">
                <div class="fleet__item fleet__item--with-info">
                    <div class="fleet__info">
                        <div class="fleet__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/hanger-fashion.svg" alt="Winter Fest Line Icon">
                        </div>
                        <div class="fleet__subtitle">Winter Fest Line</div>
                        <h3 class="fleet__name">Ice Duchess</h3>
                        <a href="#" class="arrow-button"></a>
                    </div>
                    <img class="fleet__image" src="<?php echo get_template_directory_uri(); ?>/dist/images/fleet1.png" alt="Ice Duchess">
                </div>
                <div class="fleet__item">
                    <img class="fleet__image" src="<?php echo get_template_directory_uri(); ?>/dist/images/fleet2.png" alt="Model 1">
                </div>
                <div class="fleet__item">
                    <img class="fleet__image" src="<?php echo get_template_directory_uri(); ?>/dist/images/fleet3.png" alt="Model 2">
                </div>
                <div class="fleet__item">
                    <img class="fleet__image" src="<?php echo get_template_directory_uri(); ?>/dist/images/fleet4.png" alt="Model 3">
                </div>
                <div class="fleet__item">
                    <img class="fleet__image" src="<?php echo get_template_directory_uri(); ?>/dist/images/fleet5.png" alt="Model 4">
                </div>
                <div class="fleet__item fleet__item--with-info">
                    <div class="fleet__info">
                        <div class="fleet__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/hanger-fashion.svg" alt="Winter Fest Line Icon">
                        </div>
                        <div class="fleet__subtitle">Winter Fest Line</div>
                        <h3 class="fleet__name">Arctic Puff</h3>
                        <a href="#" class="arrow-button"></a>
                    </div>
                    <img class="fleet__image" src="<?php echo get_template_directory_uri(); ?>/dist/images/fleet6.png" alt="Arctic Puff">
                </div>
                <div class="fleet__item fleet__item--with-info">
                    <div class="fleet__info">
                        <div class="fleet__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/hanger-fashion.svg" alt="Winter Fest Line Icon">
                        </div>
                        <div class="fleet__subtitle">Winter Fest Line</div>
                        <h3 class="fleet__name">Arctic Puff</h3>
                        <a href="#" class="arrow-button"></a>
                    </div>
                    <img class="fleet__image" src="<?php echo get_template_directory_uri(); ?>/dist/images/fleet7.png" alt="Arctic Puff">
                </div>
                <div class="fleet__item">
                    <img class="fleet__image" src="<?php echo get_template_directory_uri(); ?>/dist/images/fleet8.png" alt="Model 5">
                </div>
                <div class="fleet__item">
                    <img class="fleet__image" src="<?php echo get_template_directory_uri(); ?>/dist/images/fleet9.png" alt="Model 6">
                </div>
            </div>
        </div>
    </section>

    <section class="venue">
        <div class="container">
            <div class="venue__inner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/mask-venue.png');">
                <div class="venue__button">
                    <a href="#" class="book-button book-button--light">THIS YEAR’S VENUE</a>
                </div>
                <div class="venue__subtitle">Lumo’s Winterfest VENUE</div>
                <h2 class="venue__title">DENVER, COLORADO</h2>
                <p class="venue__text">Lumo's Winterfest show is launching in Colorado for its perfect blend of urban sophistication and breathtaking winter landscapes. Denver, with its thriving cultural scene, offers the ideal backdrop for showcasing our 2024/2025 collection, while the nearby Rocky Mountains evoke the heart of winter. Colorado's unique connection to both modern fashion and the great outdoors reflects the spirit of Lumo’s designs—functional, stylish, and crafted for all winter adventures. It's the perfect location to unveil a collection that celebrates the beauty and versatility of the season.</p>
            </div>
        </div>
    </section>

    <section class="booking">
        <div class="container">
            <div class="booking__inner">
                <div class="booking__header">
                    <div class="booking__text">
                        <div class="booking__subtitle">Join this year's Winter Fest Show</div>
                        <h2 class="booking__title">Book a Spot</h2>
                    </div>
                    <div class="booking__decor">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/Vector.svg" alt="Decor iages">
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