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

            


        </div>
    </div>
</section>