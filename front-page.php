<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero__background"></div>
        <div class="hero__content">
            <h1 class="hero__headline">Sanctuary, Upgraded</h1>
            <p class="hero__subhead">Sustainable luxury for the modern living space.</p>
            <a href="#collection" class="btn btn--pill hero__btn">Explore Collection</a>
        </div>
    </section>

    <!-- Category Grid (Masonry) -->
    <section class="categories" id="collection">
        <div class="categories__grid">
            <!-- Large Item (Left) -->
            <div class="category-card category-card--large">
                <div class="category-card__image-wrapper">
                    <!-- Placeholder for Kitchen Image -->
                    <div class="category-card__placeholder"></div>
                </div>
                <div class="category-card__content">
                    <h3 class="category-card__title">Kitchen</h3>
                </div>
            </div>

            <!-- Right Column (Stacked Items) -->
            <div class="categories__column">
                <div class="category-card category-card--small">
                    <div class="category-card__image-wrapper">
                        <!-- Placeholder for Entertainment Image -->
                        <div class="category-card__placeholder"></div>
                    </div>
                    <div class="category-card__content">
                        <h3 class="category-card__title">Entertainment</h3>
                    </div>
                </div>
                <div class="category-card category-card--small">
                    <div class="category-card__image-wrapper">
                        <!-- Placeholder for Energy Essentials Image -->
                        <div class="category-card__placeholder"></div>
                    </div>
                    <div class="category-card__content">
                        <h3 class="category-card__title">Energy Essentials</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Spotlight Section -->
    <section class="spotlight">
        <div class="spotlight__wrapper">
            <div class="spotlight__image-side">
                <!-- Placeholder for Spotlight Image -->
                <div class="spotlight__placeholder"></div>
            </div>
            <div class="spotlight__text-side">
                <h2 class="spotlight__title">Powered by Nature</h2>
                <p class="spotlight__description">Harness the sun to power your sanctuary. Our energy solutions blend
                    seamlessly into your home's aesthetic while providing robust off-grid capabilities.</p>
                <a href="#" class="btn btn--text">Learn More &rarr;</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>