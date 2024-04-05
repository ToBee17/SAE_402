<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Rolling Cake Website</title>
</head>

<body id="top" class="w-screen overflow-x-hidden bg-clrnav">

<!-- HAUT DE PAGE -->

<header class="bg-inherit">
    <nav class="bg-clrnav text-white p-4 font-retrogaming">
        <div class="container mx-auto flex items-center justify-between">
            <div class="p-2">
                <a href="#top" class=""><img class="w-28" src="<?php echo get_template_directory_uri(); ?>/src/assets/logo.svg" alt=""></a>
            </div>

            <div class="md:hidden">
                <button id="menu-btn" class="transition-all text-white sm:active:bg-clrtextsection rounded-lg  p-2 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
            <div class="hidden justify-center items-center md:block">
                
            <?php wp_nav_menu([
                'theme_location' => 'header2',
                'container' => false,
                'menu_class' => 'flex justify-center items-center space-x-4'
                ]); 
                ?>
            
            
            <!-- <ul class="flex justify-center items-center space-x-4">
                    <li><a href="#" class="transition-all hover:text-clrtextsection hover:underline">Informations</a></li>
                    <li><a href="#" class="transition-all hover:text-clrtextsection hover:underline">Personnages</a></li>
                    <li><a href="#" class="transition-all hover:text-clrtextsection hover:underline">Réseaux</a></li>
                </ul> -->
            </div>

            <!-- <button href="/page.php" class="transition-all rounded-md hover:bg-clrtextsection"><img class="w-28 h-auto" src="<?php echo get_template_directory_uri(); ?>/src/assets/btnplay.svg" alt=""></button> -->


        </div>
    </nav>

    <!-- Menu Burger pour les écrans mobiles -->
    <div id="mobile-menu" class="sm:block md:hidden lg: bg-clrnav text-white py-3 hidden">
            <?php wp_nav_menu([
            'theme_location' => 'Burger',
            'container' => false,
            'menu_class' => 'flex font-retrogaming flex-col items-center space-y-2'
            ])
            
            ?>
    
    <!-- <ul class="flex font-retrogaming flex-col items-center space-y-2">
            <li><a href="#" class="transition-all hover:text-clrtextsection hover:underline">Informations</a></li>
            <li><a href="#" class="transition-all hover:text-clrtextsection hover:underline">Personnages</a></li>
            <li><a href="#" class="transition-all hover:text-clrtextsection hover:underline">Réseaux</a></li>
            <li class="py-3"><a href="/page.php" class="transition-all text-white active:bg-clrtextsection rounded-lg p-2">JOUER</a></li>

        </ul> -->
    </div>

    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

</header>