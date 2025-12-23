<div class="bg-[#0d0700]">
    <div class="custom-container px-[50px] py-[80px]">
        <div class="flex flex-col justify-center items-center pb-[20px]">
                <h2 class="gold-text text-[42px] text-center">Featured Talent Categories</h2>
                <p class="text-[#a39e96] text-center">Find the perfect professional for your next project</p>
                <a class="gold-button text-center" href="">See All Categories</a>
        </div>

        <?php
            $categories = get_posts([
                'post_type' => 'talents-category',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
            ]);

            if ($categories): 
        ?>
            <div class="flex gap-[20px]">
                    <?php foreach ($categories as $cat): ?>
                        <div class="bg-[#12100C] p-[20px] rounded-[10px] border border-[1px] border-[#2d2820] hover:border-[#e7b20d] shadow-[0_4px_6px_rgba(231,178,13,0)] hover:shadow-[2px_6px_6px_rgba(231,178,13,0.5)] transition-all duration-300 ease">
                            <div>
                                <h3 class="text-[24px] font-bold gold-text"><?php echo get_the_title($cat->ID); ?></h3>
                                <p class="text-[#a39e96]">From concept art to photorealistic renders, our artists bring visions to life with technical precision and creative excellence.</p>
                            </div>
                            <div>
                                <p class="text-[#2d2820]">150+ professionals</p>
                                <a class="gold-text" href="<?php echo get_permalink($cat->ID); ?>">Explore</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</div>