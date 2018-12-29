<?php
    require_once('header.php');
?>

<div class="container" style="padding-top: 150px;">
    <div class="page-header">
        <h2 align="center">Teste</h2>
    </div>
</div>
<?
    if( $queryTaxonomy ) {
        $taxonomy_args = array(
            array(
                'taxonomy' => 'localizacao',
                'field' => 'slug',
                'terms' => $_GET['taxonomy']
            )
        );
    }
    $args = array(
        'post_type' => 'produto',
        'tax_query' => $taxonomy_args
    );
    $loop = new WP_Query( $args );
?>
<?php if($loop->have_posts()) : ?>
    <?php while($loop->have_posts()): $loop->the_post(); ?>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><?= $loop->the_title(); ?></h3>
                </div>
                <div >
                    <?= $loop->the_content(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php  require_once('footer.php');?>