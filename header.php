<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

        <?php wp_head(); ?>
    
    </head>
<body>
    <header>
        <div class="row">
        <nav class="bg-header epilogue font-nav-bar navbar navbar-expand-lg align-items-center">
            <div class="d-flex flex-row text-light mx-5 py-3">
                <div class=""></div>
                
                <div class="menu-logo text-center pl-2 pe-5">Blogful</div>
                <div class="d-flex flex-row text-decoration-none">
                <?php

                wp_nav_menu(array(
                    'menu' => 'primary',
                    'theme_location' => 'primary',
                    'container' => 'ul',
                    'menu_class' => 'align-items-center justify-content-evenly w-100 navbar-nav m-auto mb-2 mb-lg-0',
                    'add_li_class' => 'nav-item m-1',
                    'link_class' => 'nav-link text-decoration-none nav-item',
                ));
                ?>
                <!--
                    <div class="menu-item text-center mt-3 ms-5 me-4"><a class="active" href="home.html">All</a></div>
                    <div class="menu-item text-center mt-3 mx-4">Culture</div>
                    <div class="menu-item text-center mt-3 mx-4">Ideas</div>
                    <div class="menu-item text-center mt-3 mx-4">Technology</div>
                    <div class="menu-item text-center mt-3 mx-4"><a href="blog.html">Blog</a></div>
                    <div class="menu-item text-center mt-3 mx-4"><a href="contact.html">Contact</a></div>
                    <svg class="menu-item text-center my-4 mx-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="22.03" height="24" stroke-width="2"> <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path> <path d="M21 21l-6 -6"></path> </svg> 
                -->
                </div>
            </div>
        </nav>
        </div>
    </header>