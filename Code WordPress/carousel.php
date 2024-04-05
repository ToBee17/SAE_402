<!-- SECTION CAROUSEL -->

<div class="w-screen h-auto sm:p-10 md:p-20 bg-clrtransitone">
    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative w-full sm:h-72 overflow-hidden rounded-xl md:h-96">
            <!-- Image 1 -->
            <div class="hidden duration-700 ease-in-out group/image1" data-carousel-item="active">
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/image1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                <div class="absolute h-full w-full bg-clrnav/80 flex flex-col gap-2 items-center justify-center -bottom-10 group-hover/image1:bottom-0 opacity-0 group-hover/image1:opacity-100 transition-all duration-300 text-white">

                    <img class="transition-all hover:scale-105 hover:rotate-12" src="<?php echo get_template_directory_uri(); ?>/src/assets/bar.svg" alt="">
                    <p class="font-nunito text-lg">“Sautez en utilisant la touche espace !”</p>

                </div>
            </div>
            <!-- Image 2 -->
            <div class="hidden duration-700 ease-in-out group/image2" data-carousel-item>
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/image2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                <div class="absolute h-full w-full bg-clrtextsection/80 flex flex-col gap-2 items-center justify-center -bottom-10 group-hover/image2:bottom-0 opacity-0 group-hover/image2:opacity-100 transition-all duration-300 text-white">

                    <img class="transition-all hover:scale-105 hover:rotate-12" src="<?php echo get_template_directory_uri(); ?>/src/assets/crown.svg" alt="">
                    <p class="w-full font-nunito text-base text-center">“Récolter les fèves sur votre passage pour récolter un maximum de points !”</p>
                </div>
            </div>
            <!-- Image 3 -->
            <div class="hidden duration-700 ease-in-out group/image3" data-carousel-item>
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/image3.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                <div class="absolute h-full w-full bg-clrtextsection/80 flex flex-col gap-2 items-center justify-center -bottom-10 group-hover/image3:bottom-0 opacity-0 group-hover/image3:opacity-100 transition-all duration-300 text-white">

                    <img class="transition-all hover:scale-105 hover:rotate-12" src="<?php echo get_template_directory_uri(); ?>/src/assets/ennemy.png" alt="">
                    <p class="w-full font-nunito text-base text-center">“Ne vous faites pas manger, évitez les ennemis !”</p>
                </div>
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
            <button type="button" class="w-5 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-5 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-5 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex transition-all duration-300 items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 dark:group-hover:bg-cyan-400/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-white-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 dark:group-hover:bg-cyan-400/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>