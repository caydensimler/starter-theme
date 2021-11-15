<?php while(have_settings()): 
    $layoutArray = generateLayout(the_setting()); 
    $gridType = get_sub_field('layout_type');
endwhile;

$queryType = get_sub_field('query_type');
$postArguments = [];

if ($queryType !== 'choose') {
    $queryAmount = get_sub_field('post_query_amount');
    if ($queryAmount === 0) { $queryAmount = -1; }

    $postArguments['posts_per_page'] = $queryAmount; 
} else {
    $selectedPosts = get_sub_field('select_posts');

    $postArguments['orderby'] = 'post__in';
    $postArguments['post__in'] = $selectedPosts;
}

if ($queryType === 'post-type') { 
    $postArguments['post_type'] = get_sub_field('post_type'); 
} else { $postArguments['post_type'] = 'any'; }

if ($queryType === 'category') {
    $postArguments['category__in'] = get_sub_field('post_query_category');
    $postArguemnts['orderby'] = 'category__in';
} elseif ($queryType === 'tags') {
    $postArguments['tag__in'] = get_sub_field('post_query_tag');
    $postArguemnts['orderby'] = 'tag__in';
}  

$postQuery = new WP_Query($postArguments);
$queryContent = get_sub_field('post_query_content');

$topLevelLinked = get_sub_field('top_level_linked');
$featuredImageBackground = get_sub_field('featured_image_background');

if (get_sub_field('featured_image_size')) { $imageSize = get_sub_field('featured_image_size'); } ?>

<div <?php echo $layoutArray['wrapper-id']; ?> <?php echo $layoutArray['wrapper-classes']; ?>>
    <?php $itemNumber = 1;

    if ($gridType === 'masonry'):
        for ($i = 1; $i <= $containerCount; $i++): ?>
            <div class="layout-item col-<?php echo $i; ?>"></div>
        <?php endfor;
    endif;

    if ($postQuery->have_posts()):
        while ( $postQuery->have_posts() ) : $postQuery->the_post();
            $imageBackground = ''; $imageBackgroundClass = '';

            if ($featuredImageBackground && get_the_post_thumbnail_url(get_the_ID(), $imageSize) && !in_array('image', $queryContent)):
                $imageBackground = 'style="background-image:url(' . get_the_post_thumbnail_url(get_the_ID(), $imageSize) . ');"';
                $imageBackgroundClass = ' post-image-background post-image-' . $imageSize;
            endif; ?>

            <div <?php echo $layoutArray['content-classes']; ?>>
                <div class="item-<?php echo $itemNumber; ?><?php echo $imageBackgroundClass; ?>" <?php echo $imageBackground; ?>>

                    <?php foreach($queryContent as $contentType):
                        if ($contentType === 'wrapper') {
                            get_template_part('acf/content/' . $contentType);
                        } elseif ($contentType === 'wrapper-end') {
                            echo '</div></div>';
                        } else {   
                            echo '<div class="post-' . $contentType . '">';
                                get_template_part('acf/content/post-' . $contentType);
                            echo '</div>';
                        }
                    endforeach; ?>

                </div>
            </div><?php $itemNumber++; ?>
        <?php endwhile; wp_reset_query(); ?>
    <?php else: echo 'No posts found.'; ?><?php endif; ?>
</div>