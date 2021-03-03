<?php get_header(); ?>

<section class="mainstage hyper-lazyload-bg">
    <div class="mainstage__content">
        <div class="mainstage__content--text">
            <span class="custom-text-primary">Just like Magic</span>
            <span class="custom-text-secondary">Own a Water Heater for as little as</span>
            <span class="custom-text-primary">$15 per month!</span>
        </div>
        <div class="mainstage__content--image">
            <img
            src="http://52.73.242.68/~servicewizards/wp-content/uploads/featured-water-heaters-isolated.png"
            alt="Mainstage Image"
            srcset=""
            />
        </div>
    </div>
</section>

<section class="form">
    <div class="form__content">
        <div class="form__content--title">
            <span class="form__title">Get Your Endless Supply of Hot Water</span>
        </div>

        <div class="form__container">
            <h3 class="custom-text-primary">Contact Us</h3>
        </div>
    </div>
</section>

<div class="form__mobile">
    <h3 class="form__container--title custom-text-primary">Contact Us</h3>
</div>

<section class="brand">
    <div class="brand__content">
        <span class="custom-text-primary">Our Customers</span> &nbsp;
        <span class="custom-text-secondary">Say It Best!</span>
    </div>
</section>

<section class="reviews hyper-lazyload-bg">
    <?php echo do_shortcode('[brb_collection id="8"]'); ?>
</section>

<section class="cta">
    <div class="cta__content">
        <span class="custom-text-primary">Contact Us</span>
        <span class="custom-text-secondary">To Get Started</span>
        
    </div>
    <div class="cta__content cta__content--btns">
        <a class="btn-custom icon-button" href="tel:<?php echo do_shortcode('[company_phone]'); ?>" aria-label="Button">
            <fa-icon
            icon="phone-square"
            family="solid"
            role="presentation"
            aria-label="Display Icon"
            ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM94 416c-7.033 0-13.057-4.873-14.616-11.627l-14.998-65a15 15 0 0 1 8.707-17.16l69.998-29.999a15 15 0 0 1 17.518 4.289l30.997 37.885c48.944-22.963 88.297-62.858 110.781-110.78l-37.886-30.997a15.001 15.001 0 0 1-4.289-17.518l30-69.998a15 15 0 0 1 17.16-8.707l65 14.998A14.997 14.997 0 0 1 384 126c0 160.292-129.945 290-290 290z"
                ></path></svg
            ></fa-icon>
            <span><?php echo do_shortcode('[company_phone]'); ?></span>
        </a>

        <a
            is="hypercore-button"
            class="btn-custom hypercore-button desktop"
            href="#form-mainstage"
            aria-label="Button"
            >Request a FREE Quote
            <fa-icon
            icon="caret-right"
            family="solid"
            role="presentation"
            aria-label="Display Icon"
            ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                <path
                d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"
                ></path></svg
            ></fa-icon>
        </a>
    </div>
</section>

<section class="wcu">
    <div class="wcu__content wcu__content--award">
        <?php
            if(is_active_sidebar('wcu-logo-widget')){
            dynamic_sidebar('wcu-logo-widget');
            }
        ?>
    </div>
    <div class="wcu__content wcu__content--list">
        <h3 class="custom-text-primary">Why Choose Us</h3>
        <?php
            if(is_active_sidebar('wcu-list-widget')){
            dynamic_sidebar('wcu-list-widget');
            }
        ?>
        

        <a
            is="hypercore-button"
            class="btn-custom hypercore-button"
            href="tel:<?php echo do_shortcode('[company_phone]'); ?>"
            aria-label="Button"
        >
            Contact Us
            <fa-icon
            icon="caret-right"
            family="solid"
            role="presentation"
            aria-label="Display Icon"
            ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                <path
                d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"
                ></path></svg
            ></fa-icon>
        </a>
    </div>
</section>

<?php get_footer(); ?>
