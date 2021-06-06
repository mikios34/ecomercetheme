<?php 

    if(post_password_required()){
        return;
    }
    ?>

    <section>
        <?php if(have_comments()):?>
            <h2 class="py-3"><?php $number =  get_comments_number();
                if( $number === 1){
                    printf(
                        _x(
                            'One comment on &ldquo; %s &rdquo;',
                            'comments title',
                            'velvet'
                        ),
                        get_the_title()
                    );
                }else{
                   
                }
            ?></h2>
            
            <?php endif; ?>

            
    </section>
    <?php endif; ?>