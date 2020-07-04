<?php
require(__DIR__ . '/ArrayWorker.php');
$ArrayWorker = new ArrayWorker;
$ArrayWorker->dump();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Верстка для IT-Buro</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <div class="header-user">
                <div class="user-rank">Junior</div>
                <div class="user-rank">Middle</div>
                <div class="user-rank">Senior</div>
            </div>
    
            <div class="header-name">
                Тестовое задание для Junior веб-разработчика
            </div>
    
            <div class="main-info">
                <div class="main-info-basic">
                    Перед началом выполнения тестового задания, пожалуйста, убедитесь, что данная вакансия открыта.<br> Ознакомиться со списком актуальных вакансий можно по ссылке: <a href="https://voronezh.hh.ru/employer/1132736">https://voronezh.hh.ru/employer/1132736</a>
                </div>
                <div class="main-info-row">
                    <div class="main-info-row-element">
                        Компания IT-Buro специализируется на создании и развитии современных интернет-проектов, сервисов и решений на платформе "1С-Битрикс". Мы прекрасно осознаем преимущества и недостатки платформы, но высокое качество наших услуг и соответствующий высокий спрос, позволяет нам более 10 лет прекрасно себя чувствовать на рынке IT-услуг, работая только на 1С-Битрикс.
                    </div>
    
                    <div class="main-info-row-element">
                        У нас дружная команда и прекрасный офис в стиле лофт в одном из самых красивых зданий Воронежа. Для всех сотрудников созданы комфортные условия труда: работаем исключительно на технике Apple, ведущие программисты имеют в своем распоряжении iMac Retina и AirPods, а освещением и кондиционером в офисе управляет Яндекс.Алиса =)
                    </div>
                </div>
                <div class="main-info-footer">
                    <img src="./images/bitrix.png" alt="Bitrix Logotype">
                    Внимание: в данном задании нет коммерческой составляющей, оно рассчитано исключительно на проверку Ваших базовых знаний (HTML+CSS). На практике заниматься версткой Вам не придется, но для успешного развития в должности backend-разработчика, frontend надо знать на базовом уровне и понимать как он устроен.
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="footer-info">© 2009-2019 IT-Buro</div>
        </footer>
    </div>
    <script src="./scripts/script.js"></script>
</body>
</html>