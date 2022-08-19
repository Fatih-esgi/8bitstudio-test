<?php get_header(); ?>
<?php
$args = array(
    'post_type' => 'vehicules',
    'posts_per_page' => -1,
    'order' => 'ASC',
);
$the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : ?>
<div class="containerGrid">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="card">
        <a class="cardLink" href="<?php the_permalink(); ?>">
            <div class="titleBlock">
                <h1>
                    <?php the_title(); ?>
                </h1>
                <?php if( get_field('favoris') ): ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/heart.svg" alt="favourit icon" />
                <?php endif; ?>
            </div>
            <p class="category">
                <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo esc_html( $categories[0]->name );   
                } ?>
            </p>
            <div class="imageBox">
                <?php if ( get_the_post_thumbnail() ) :?>
                <?php the_post_thumbnail('full'); ?>
                <?php endif; ?>
                <div class="gradientWhite"></div>
            </div>
            <div class="specification">
                <p class="reservoir">
                    <span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/reservoir.svg"
                            alt="reservoir icon" />
                    </span>
                    <?php the_field('reservoir'); ?>L
                </p>
                <p class="motors">
                    <span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/car.svg" alt="car icon" />
                    </span>
                    <?php the_field('type_de_boite_a_vitesse'); ?>
                </p>
                <p class="seats">
                    <span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/users.svg"
                            alt="user icon" />
                    </span>
                    <?php the_field('nbre_de_places'); ?> People
                </p>
            </div>
        </a>
        <div class="footerCard">
            <div class="price">
                <div class="standardPrice">
                    <p>$<?php the_field('prix'); ?>/<span class="day">day</span></p>
                </div>
                <div class="soldedPrice">
                    <?php if( get_field('prix_solde') ): ?>
                    <p>$<?php the_field('prix_solde'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="button">
                <a href="/#">Rent Now</a>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
<div class="productsFooter">
    <div class="button">
        <a href="/#">Show more car</a>
    </div>
    <p class="productsCount">120 Car</p>
</div>
<?php get_footer(); ?>