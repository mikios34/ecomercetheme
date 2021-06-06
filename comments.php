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
                    printf(
                        _nx(
                            '%1$s comment on &ldquo; %2$s &rdquo;',
                            '%1$s comments on &ldquo; %2$s &rdquo;',
                            $number,
                            'comments title', 
                            'velvet' 
                        ),
                        number_format_i18n($number),
                        get_the_title()
                    );
                }
            ?></h2>
            
            <?php endif; ?>

            
    </section>
    <?php endif; ?>