<?php
    $title = "О нас";
    require_once "./../functions/functions.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require_once "./../blocks/head.php"; 
?>
</head>
<body onload="onLoad()">
    <?php
        require_once "./../blocks/header.php";
    ?>

    <section class = "main-page">   
        <div class = "main-page-container">
            <section class = "about">
                <div class = "history">
                    <h1 class = "history-h1">НАША ИСТОРИЯ</h1>
                    <h1 class = "history-h1--lvl">РАСШИРЯЕМ ГРАНИЦЫ ТОРГОВ КРИПТОВАЛЮТ И ТЕХНОЛОГИЙ</h1>
                    <p>В январе 2022 года мы собрали небольшую команду 
                       трейдеров и аналитиков для создания продукта, который
                       позволит за счет криптовалюты обогатить нас. В течение года мы смогли
                        преувеличили свой капитал и по-немногу начали выходить на рынок компаний,
                        предоставляющих услуги управления финансами. В течение еще полугода, мы привлекли
                        около 2 тысяч пользователей и в связи с большой нагруженностью менеджеров, 
                        было принято решение автоматизировать рутинную работу и создать данный
                        сервис. Но на этом мы не останавливаемся. Сейчас мы - команда из 20 
                        человек, работающая над нейросетью, которая позволит любому человеку без посредников
                        зарабатывать на трейдинге криптовалюты.</p>
                </div>
                <div class = "about-blocks">
                    <div class = "about-blocks-values">
                        <span>Ценности нашей команды</span>
                        <p>Мы стремимся создавать инновационные продукты и уникальный опыт 
                            торговли для всех с переходной экономикой будущего.</p>
                    </div>
                    <div class = "about-blocks-community">
                        <div class = "about-blocks-community--one">
                            <div>
                                <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="rgb(26, 199, 149)" style="width: 24px; height: 24px;">
                                    <path d="M5 20v-1a7 7 0 017-7v0a7 7 0 017 7v1M12 12a4 4 0 100-8 4 4 0 000 8z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span>Сообщество - прежде всего</span>
                            </div>
                            
                            <p>Движущей силой всего, что мы делаем, является наше сообщество.</p>
                        </div>
                        <div  class = "about-blocks-community--one">
                        <div>
                        <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="rgb(91, 83, 255)" style="width: 24px; height: 24px;"><circle cx="12" cy="12" r="8" stroke="currentColor"></circle><path d="M17.5 6.348c2.297-.538 3.945-.476 4.338.312.73 1.466-3.158 4.89-8.687 7.645-5.528 2.757-10.602 3.802-11.333 2.336-.392-.786.544-2.134 2.349-3.64" stroke="currentColor"></path><path d="M9.5 10.51l.01-.011" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <span>Раздвигая границы</span>
                            </div>
                            
                            <p>Использование передовых технологий для трейдинга криптовалют.</p>
                        </div>
                    </div>
                    <div class = "about-blocks-security">
                    <div class = "about-blocks-community--one">
                            <div>
                            <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="rgb(91, 83, 255)" style="width: 24px; height: 24px;"><path d="M16 12h1.4a.6.6 0 01.6.6v6.8a.6.6 0 01-.6.6H6.6a.6.6 0 01-.6-.6v-6.8a.6.6 0 01.6-.6H8m8 0V8c0-1.333-.8-4-4-4S8 6.667 8 8v4m8 0H8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <span>Безопасность и сохранность</span>
                            </div>
                            
                            <p>Меры безопасности и строгий контроль для защиты конфиденциальности данных.</p>
                        </div>
                        <div  class = "about-blocks-community--one">
                        <div>
                        <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="rgb(91, 83, 255)" style="width: 24px; height: 24px;"><path d="M9 2h6M12 10v4M12 22a8 8 0 100-16 8 8 0 000 16z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            <span>Многолетнее путешествие</span>
                            </div>
                            
                            <p>Создание экосистемы продуктов для поддержки торговли следующего поколения.</p>
                        </div>
                    </div>

                </div>
                <div class = "about-command">
                    <div class = "about-command-team">
                        <h1>НАША КОМАНДА</h1>
                        <h2>Все дело в людях</h2>
                        <p>Мы всегда ищем удивительных людей, которые могли бы присоединиться к нам. 
                            Если вы заинтересованы в построении будущего крипто-трейдинга вместе с нами, 
                            ознакомьтесь с нашими доступными позициями ниже.</p>

                        <button class = "about-command-team-position">Вакансии</button>
                    </div>
                    <div class = "about-command-blocks">
                        <div class = "about-command-blocks-block">
                            <img src="./../img/team/Aexp122fVFM0EobrnGJwytDYYc.webp" alt="">
                            <div class = "about-command-blocks-block--shadow">
                            </div>
                            <div class = "about-command-blocks-block-description">
                                <span>Иван Иванов</span>
                                <p>Senior Developer</p>
                            </div>
                        </div>
                        <div class = "about-command-blocks-block">
                            <img src="./../img/team/LLvABg6D3qROQjaNfJpTXiR6Y.webp" alt="">
                            <div class = "about-command-blocks-block--shadow">
                            </div>
                            <div class = "about-command-blocks-block-description">
                                <span>Иван Иванов</span>
                                <p>Senior Developer</p>
                            </div>
                        </div>
                        <div class = "about-command-blocks-block">
                            <img src="./../img/team/QZgZQ8QdxxwqxKF7u9JZc6mceuc.webp" alt="">
                            <div class = "about-command-blocks-block--shadow">
                            </div>
                            <div class = "about-command-blocks-block-description">
                                <span>Иван Иванов</span>
                                <p>Senior Developer</p>
                            </div>
                        </div>
                        <div class = "about-command-blocks-block">
                            <img src="./../img/team/xd9EMo0PAsLCKk9wluRSyZPIR7I.webp" alt="">
                            <div class = "about-command-blocks-block--shadow">
                            </div>
                            <div class = "about-command-blocks-block-description">
                                <span>Иван Иванов</span>
                                <p>Senior Developer</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
        </div>
    </section>
   
    
    <?php
        require_once "./../blocks/footer.php";
    ?>
    <script src="./../js/main.js"></script>
</body>
</html>