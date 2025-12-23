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
                    $url = get_the_post_thumbnail_url($talent->ID, 'large');
                    $talent_title = get_field("talent_title", $talent->ID)

                    if ($featured):
            ?>
                    <div class="flex flex-col rounded-2xl border-[1px] border-[#2d2820] overflow-hidden w-full">
                        <div class="relative w-full h-[280px] overflow-hidden">
                            <img class="absolute inset-0 w-full h-full object-cover"
                                src="<?php echo $url; ?>"
                                alt="<?php echo esc_attr(get_the_title($talent->ID)); ?>">
                        </div>
                        <div class="bg-[#1a1510] py-[30px] px-[20px] w-[100%]">
                            <div class="flex flex-col">
                                <h2 class="text-[24px] text-white"><?php echo get_the_title($talent->ID); ?></h2>
                                <p class="gold-text "><?php echo $talent_title; ?></p>
                            </div>
                            <div class="flex flex-wrap gap-[5px] py-[20px]">
                                <div class="py-[8px] px-[20px] w-fit rounded-full bg-[#e7b20d1a] border-[#e7b20d33] border-[1px]">
                                    <p class="text-[#a39e96] text-[14px]">3D Modeling</p>
                                </div>
                                <div class="py-[8px] px-[20px] w-fit rounded-full bg-[#e7b20d1a] border-[#e7b20d33] border-[1px]">
                                    <p class="text-[#a39e96] text-[14px]">3D Modeling</p>
                                </div>
                                <div class="py-[8px] px-[20px] w-fit rounded-full bg-[#e7b20d1a] border-[#e7b20d33] border-[1px]">
                                    <p class="text-[#a39e96] text-[14px]">3D Modeling</p>
                                </div>
                            </div>
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