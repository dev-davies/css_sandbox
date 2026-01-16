<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Header -->
    <header class="header">
        <div class="header__container">
            <button class="header__menu-btn" aria-label="Menu">
                <!-- Hamburger Icon Placeholder -->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>
            
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo">NOVEL HOMES</a>
            
            <div class="header__actions">
                <button class="header__action-btn" aria-label="Search">
                    <!-- Search Icon Placeholder -->
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </button>
                <button class="header__action-btn" aria-label="Cart">
                    <!-- Cart Icon Placeholder -->
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu Overlay -->
        <nav class="mobile-menu">
            <ul class="mobile-menu__list">
                <li><a href="#collection" class="mobile-menu__link">Collection</a></li>
                <li><a href="#" class="mobile-menu__link">Sustainability</a></li>
                <li><a href="#" class="mobile-menu__link">About</a></li>
                <li><a href="#" class="mobile-menu__link">Journal</a></li>
            </ul>
        </nav>
    </header>
