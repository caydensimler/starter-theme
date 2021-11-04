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

$queryContent = get_sub_field('post_query_content');

$queryAmount = get_sub_field('query_amount');
if (get_sub_field('query_amount') === 0) { $queryAmount = -1; }

$postArguments = '';
$postArguments = array(
    'post_type' => get_sub_field('post_type'),
    'posts_per_page' => $queryAmount, 
);

$topLevelLinked = get_sub_field('top_level_linked');
$featuredImageBackground = get_sub_field('featured_image_background');

$postQuery = new WP_Query($postArguments); ?>


<div <?php echo $layoutID; ?> <?php echo $wrapperClasses; ?>>

    <?php $itemNumber = 1; ?>

    <?php if ($gridType === 'masonry'): ?>
        <?php for ($i = 1; $i <= $containerCount; $i++): ?>
            <div class="layout-item col-<?php echo $i; ?>"></div>
        <?php endfor; ?>
    <?php endif;

    while ( $postQuery->have_posts() ) : $postQuery->the_post(); ?>

        <div <?php echo $contentClasses; ?>>
            <div class="item-<?php echo $itemNumber; ?>">

                <?php foreach($queryContent as $contentType): ?>
                    <?php echo '<div class="post-' . $contentType . '">'; ?>
                        <?php get_template_part('acf/content/post-' . $contentType); ?>
                    <?php echo '</div>'; ?>
                <?php endforeach; ?>

            </div>
        </div>
        <?php $itemNumber++; ?>
    <?php endwhile;  ?>
</div>