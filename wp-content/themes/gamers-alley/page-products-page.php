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

    <?php 

        $products = new WP_Query(array(
            'post_type' => 'product',
            'posts_per_page' => -1
        ));
    
        while($products->have_posts()){
            $products->the_post();
            ?> 
            <span class="product-item ${data[i].category}">
                <a href="product-detail.html?id=${data[i].product_id}"><img src="${data[i].image_1}" alt="Product-1-Image"></a>
                <h4><a class="product-item__a-name" href="product-detail.html?id=${data[i].product_id}"><?php the_title(); ?></a></h4>
                <p class="product-item__p-price"></p>
            </span>
            <?php
        }
    ?>

<?php get_footer(); ?>    

</body>
</html> 