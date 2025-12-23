<div class="bg-white">
    <div class="custom-container px-[50px] py-[80px]">
        <div class="flex flex-col justify-center items-center pb-[20px]">
                <h2 class="gold-text text-[42px] text-center">Featured Talents</h2>
                <p class="text-[#a39e96] text-center">Access to top talent from around the globe at your fingertips, showcasing the effectiveness of remote hiring.</p>
                <a class="gold-button text-center" href="">Browse All Talents</a>
        </div>
       <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <?php
            $talents = get_posts([
                'post_type' => 'talent',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
            ]);

            if ($talents):
                foreach ($talents as $talent):
                    setup_postdata($talent);
                    
                    $featured = get_field('featured', $talent->ID);
                    if ($featured):
            ?>
                    <div class="flex flex-col rounded-2xl border-[1px] border-[#2d2820] overflow-hidden w-full">
                        <div class="relative w-full h-[280px] overflow-hidden">
                            <img class="absolute inset-0 w-full h-full object-cover"
                                src="<?php echo get_template_directory_uri(); ?>/assets/guy1.jpeg"
                                alt="<?php echo esc_attr(get_the_title($talent->ID)); ?>">
                        </div>

                        <div class="bg-[#1a1510] py-[30px] px-[20px] w-full">
                            <h2 class="text-[24px] text-white"><?php echo get_the_title($talent->ID); ?></h2>
                            <p class="gold-text">3D Artist</p>

                            <div class="gold-button w-fit mt-4">
                                <a href="<?php echo get_permalink($talent->ID); ?>">View Profile</a>
                            </div>
                        </div>
                    </div>
            <?php
                    endif;
                endforeach;
                wp_reset_postdata();
            endif;
            ?>
        </div>

    </div>
</div>