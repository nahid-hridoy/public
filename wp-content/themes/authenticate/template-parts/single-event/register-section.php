<?php
$register_vis = get_field( 'register_vis' );
?>
<?php if( 1 == $register_vis ): ?>

    <section id="register" class="py-md-10">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="text-uppercase text-primary">Register</h2>
            </div>
            <div class="register-wrapper">
                <div class="row d-flex">

                <?php //vars
                $rg_content = get_field( 'register_content' ); ?>

                <?php if( !empty( $rg_content ) ): ?>
                    <div class="col-12">
                        <p><?php echo $rg_content; ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>