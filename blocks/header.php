<?php 
    function active($currect_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array);  
        if($currect_page == $url){
            echo 'menu_list-item--checked';
        } 
      }
?>

<header class = "header">
<svg  style = "display:none" xmlns="http://www.w3.org/2000/svg">
<symbol id = "sandwich"
  viewBox="0 0 24 24"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round">
  <line x1="3" y1="12" x2="21" y2="12" />
  <line x1="3" y1="6" x2="21" y2="6" />
  <line x1="3" y1="18" x2="21" y2="18" />
</svg>
    <div class = "header-container">
        <div class = "left_menu">
            <div class = "logo">
                <a href="/">
                    <img src="./../img/logo.svg" alt="">
                    <span>Market</span>
                </a>
            </div>
            <div class = "menu">
                <ul class = "menu_list">
                    <li class = "menu_list-item"><a class = "menu_list-item-a <?php active('');?>" href="/">Главная</a></li>
                    <li class = "menu_list-item"><a class = "menu_list-item-a <?php active('payment.php');?>" href="./../pages/payment.php">Вложения</a></li>
                    <li class = "menu_list-item"><a class = "menu_list-item-a <?php active('info.php');?>" href="./../pages/info.php">Информация</a></li>
                    <li class = "menu_list-item"><a class = "menu_list-item-a <?php active('about.php');?>" href="./../pages/about.php">О нас</a></li>
                </ul>
            </div>
        </div>
        <div class = "right_menu">
            <div class = "right_menu_buttons">
                <button class = "btn--1">

                </button>
                <button class = "btn--1">

                </button>
                <button class = "btn--1">

                </button>
            </div>
            <div class = "right_menu_autorization">
                <div class = "register">
                    <a href="./../pages/register.php">Регистрация</a>
                </div>
                <div class = "entrance">
                    <a href="./../pages/login.php">Вход</a>
                </div>
            </div>
            <div class = "right_menu_user">
                <img src="./../img/photo.svg" alt="user">
            </div>
            <div class = "right_menu_sandwich">
                <svg class="sandwich_icon" width="24" height="24">
                    <use href = "#sandwich"></use>
                </svg>
            </div>
        </div>
        
    </div>
</header>