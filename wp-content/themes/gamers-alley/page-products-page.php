<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>

    <?php get_header(); ?>
    <div class="main">

        <div class="product-filter">
            <input class="product-filter__input" name="board-games" type="checkbox">
            <h4 class="product-filter__h4">Board Games</h4>
            <input class="product-filter__input" name="card-games" type="checkbox">
            <h4 class="product-filter__h4">Card Games</h4>
            <input class="product-filter__input" name="role-playing-games" type="checkbox">
            <h4 class="product-filter__h4">Role Playing Games</h4>
            <input class="product-filter__input" name="kids-games" type="checkbox">
            <h4 class="product-filter__h4">Kids Games</h4>
        </div>
        
        <?php 

        $products = new WP_Query(array(
            'posts_per_page' => 6,
            'post_type' => 'product'
        ));
    
        while($products->have_posts()){
            $products->the_post();
            $image = get_field('images');
            $price = get_field('price');
            ?>
        <span class="product-item">
            <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image); ?></a>
            <h4><a class="product-item__a-name" href="product-detail.html"><?php the_title(); ?></a></h4>
            <p class="product-item__p-price"><?php echo $price; ?></p>
        </span>
        <?php
        }
        ?>
    </div>

    <?php get_footer(); ?>

</body>

</html>