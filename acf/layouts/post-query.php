<?php while(have_settings()): the_setting();
    $contentClasses = 'class="';
    $wrapperClasses = 'class="';

    // Grid Type
    $gridType = get_sub_field('layout_type');

    if ($gridType == 'standard') {
        if (have_rows('standard_columns')) { 
            while (have_rows('standard_columns')) { the_row();
                $layoutStructure = get_sub_field( 'desktop' ) . ' ' . get_sub_field('tablet') . ' ' . get_sub_field('mobile');
            }
        }

        $contentClasses .= 'layout-item ';
        if (get_sub_field('vertical-alignment') !== 'unset') {
            $contentClasses .= get_sub_field('vertical-alignment') . ' ';
        }

        $wrapperClasses .= 'layout grid-display ' . $layoutStructure . ' ';
    } elseif ($gridType == 'masonry') {
        if (have_rows('masonry_columns')) { 
            while (have_rows('masonry_columns')) { the_row();
                $desktopMasonry = get_sub_field( 'desktop' );
                $containerCount = $desktopMasonry['label'];
                $layoutStructure = $desktopMasonry['value'] . ' ' . get_sub_field('tablet') . ' ' . get_sub_field('mobile') . 'layout grid-display masonry-grid items-start ';
            }
        }

        $wrapperClasses .= 'masonry-layout ' . $layoutStructure;
        $contentClasses .= 'masonry-item ';
    }

    if (get_sub_field('layout_id')) { $layoutID = 'id="' . get_sub_field('layout_id') . '"'; } else {
        $layoutID = '';
    }
    if (get_sub_field('layout_classes')) { $wrapperClasses .= get_sub_field('layout_classes') . ' '; }
    if (get_sub_field('layout_item_classes')) { $contentClasses .= get_sub_field('layout_item_classes') . ' '; }

    $contentClasses = rtrim($contentClasses) . '"';
    $wrapperClasses = rtrim($wrapperClasses) . '"';
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

<div <?php echo $layoutID; ?> <?php echo $wrapperClasses; ?>>
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

            <div <?php echo $contentClasses; ?>>
                <div class="item-<?php echo $itemNumber; ?><?php echo $imageBackgroundClass; ?>" <?php echo $imageBackground; ?>>

                    <?php foreach($queryContent as $contentType):
                        echo '<div class="post-' . $contentType . '">';
                            get_template_part('acf/content/post-' . $contentType);
                        echo '</div>';
                    endforeach; ?>

                </div>
            </div><?php $itemNumber++; ?>
        <?php endwhile; wp_reset_query(); ?>
    <?php else: echo 'No posts found.'; ?><?php endif; ?>
</div>