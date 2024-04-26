<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Захарова Н.В.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
  
    <div class="container nav_bar">
        <div class="row">
            <div class="col-10">
                <div class="nav_text">Страничка милых IT котюнчиков</div>
            </div> 
            <div class="col-12 nav_logo">
                <div class="row"><p class="p1"></p></div>         
        </div>
    </div>
   
    <div class="container">
        <div class="row">
            <div class="button_js col-12">
                <button id ="myButton">Click me</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>

    <div class="containerM">
        <div class="row">
            <div class="col-10">
                <h2>Котюнчик, Захарова Наталия Вениаминовна, создала подобие сайта для привлечения внимания к теме
                    милых котюнчиков. В далёком уголке галактики, на планете Мяурис, жили уникальные котята, обладающие невероятными технологическими знаниями. Они были известны как IT-котята, и их главная цель — защитить свою планету от любого вторжения.
                    Однажды, разведданные IT-котят показали, что соседняя планета Песелиус планирует напасть на Мяурис. Чтобы предотвратить вторжение, котята решили первыми нанести удар, используя своё секретное оружие — КиберМяу-5000.
                    КиберМяу-5000 — это мощнейший вирус, созданный самыми умными котятами-кодерами.
                    Вирус способен проникать в любые защитные системы и выводить их из строя, заставляя технику врага вести себя крайне странно. Например, все роботы на Песелиусе начинали мяукать и преследовать лазерные указки, вместо того чтобы выполнять боевые задачи.
                    В день Х, IT-котята запустили КиберМяу-5000 через свои мощные серверы.
                    Вирус моментально распространился по всем военным системам Песелиуса, вызвав хаос.
                    Пока Песелиус был поглощён решением внезапно возникших "котячьих" проблем, IT-котята усилили свою киберзащиту и разработали дополнительные технологии для обеспечения безопасности Мяуриса. Песелиус,
                    осознав безуспешность своих планов на вторжение и столкнувшись с непонятным поведением своей техники, был вынужден отступить.
                    Так, благодаря уму и технологическим способностям IT-котята установили новые стандарты в кибервойне, показав всем, что даже самые маленькие и милые существа способны на великие дела, если за дело берутся их лапки и умы.
                    Не стоит недооценивать милых котят, кто знает, что у них на уме. Просмотрите фото котят!
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1>Фотографии котят</h1>
                <div class="row photo"></div>
                <div class="row"><p class="title_photo">Захарова Н.В.</p></div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">
                    Привет, <?php echo $_COOKIE['User']; ?>
                </h1>
            </div>
            <div class="col-12">
                <form method="POST" action="profile.php" enctype="multipart/form-data" name="upload">
                    <input type="text" class="form" type="text" name="title" placeholder="Заголовок вашего поста">
                    <textarea name="text" cols="30" rows="10" placeholder="Введите текст вашего поста..."></textarea>
                    <input type="file" name="file"/><br>
                    <button type="submit" class="btn_red" name="submit">Сохранить пост!</button>
                </form>
            </div>
        </div>
    </div>



    <div class="container coms">
        <div class="row">
            <div class="col-12">
                <h1>Отзывы</h1>
            <div class="testimonial">
                <p>"Этот сайт о котятах - просто великолепный! Я нашел здесь много полезной информации и интересных историй о котятах. Рекомендую!"</p>
                <p class="author">- Кот Борис</p>
            </div>
            <div class="testimonial">
                <p>"Я всегда искал информацию о котятах, но нигде не находил такую подробную и полезную. Спасибо за создание этого сайта!"</p>
                <p class="author">- Кот Феликс</p>
            </div> 
            </div>
        </div> 
    </div>

    <div class="container cont">
        <div class="row">
            <div class="col-12">
                <h1>Контакты</h1>
                <p> Связаться с нами можно тут:</p>
                <ul>
                    <li>Email: <a href>kisunchikus@mail.ru </a></li>
                    <li>Telegram: <a href>@kisunchikus123 </a></li>
                    <li>Телефон: +1 234 567 890</li>
                    <li>Адрес: 123 Улица КИС-КИС, Город Кисинбург, Россия</li>
                </ul>
            </div>
        </div> 
    </div>
    <script type="text/javascript" src="js/button.js"></script>
</body>
</html>

<?php 
    require_once('db.php');

    $link=mysqli_connect('db', 'root', 'kali', 'first');

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text) die ("Заполните все поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";

    if (!mysqli_query($link, $sql)) die("Не удалось добавить пост");
}
    if(!empty($_FILES["file"]))
    {
        if (((@$_FILES["file"]["type"] == "image/gif") || (@$_FILES["file"]["type"] == "image/jpeg")
        || (@$_FILES["file"]["type"] == "image/jpg") || (@$_FILES["file"]["type"] == "image/pjpeg")
        || (@$_FILES["file"]["type"] == "image/x-png") || (@$_FILES["file"]["type"] == "image/png"))
        && (@$_FILES["file"]["size"] < 102400))
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "Load in:  " . "upload/" . $_FILES["file"]["name"];
        }
        else
        {
            echo "upload failed!";
        }
    }
?>
