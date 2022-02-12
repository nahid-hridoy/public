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

<section id="pricing" class="pb-md-10 pt-md-0 py-5">
    <div class="container">
        <div class="row d-flex">

        <?php
            if( have_rows('hotel') ):
            while( have_rows('hotel') ): the_row(); 
        ?>
            <?php 
            $table = get_sub_field( 'pricing_table' );
            if ( ! empty ( $table ) ) { ?>

                <div class="section-heading text-center m-auto pb-10 pt-5">
                    <h2 class="text-uppercase text-primary">Pricing</h2>
                </div>
                <?php
                echo '<table border="0" class="table" style="background-color: #f9f9f9;">';
                if ( ! empty( $table['caption'] ) ) {
                    echo '<caption>' . $table['caption'] . '</caption>';
                }
                if ( ! empty( $table['header'] ) ) {
                    echo '<thead>';
                    echo '<tr>';
                    foreach ( $table['header'] as $th ) {
                        echo '<th>';
                        echo $th['c'];
                        echo '</th>';
                    }
                    echo '</tr>';
                    echo '</thead>';
                }
                echo '<tbody>';
                foreach ( $table['body'] as $tr ) {
                    echo '<tr>';
                    foreach ( $tr as $td ) {
                        echo '<td>';
                        echo $td['c'];
                        echo '</td>';
                    }
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
            }
            ?>
            <?php
                $mp_vis = get_field('member_plen_ves');
                $m_pln_content = get_field('member_plen');
            ?>
            <?php if( 1 == $mp_vis ): ?>
            <div>
                <?php echo $m_pln_content; ?>
            </div>
            <?php endif; ?>
            
            <?php endwhile; endif; ?>
            

            
            <div class="reg-buttons">
                <?php 
                    if( have_rows('register_buttons') ):
                        while( have_rows('register_buttons') ): the_row();

                        $reg_link = get_sub_field('add_link');
                        $link_url = $reg_link['url'];
                        $link_title = $reg_link['title'];
                        $link_target = $reg_link['target'] ? $reg_link['target'] : '_self';
                ?>

                <a href="<?php echo esc_url( $link_url ); ?>" class="btn btn-primary mt-5" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a><br>

                <?php endwhile; endif; ?>
            </div>

        </div>
    </div>
</section>