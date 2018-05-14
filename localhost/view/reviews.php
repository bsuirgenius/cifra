<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="ru-RU" dir="ltr">
<head>
    <?php require_once "parts/head.php"; ?>
</head>
<body>
<div id="imHeaderBg"></div>
<div id="imFooterBg"></div>
<div id="imPage">
    <?php require_once "parts/header.php" ?>
    <a class="imHidden" href="#imGoToCont" title="Заголовок главного меню">Перейти к контенту</a>
    <a id="imGoToMenu"></a>
    <p class="imHidden">Главное меню:</p>
    <?php require_once "parts/menu.php" ?>
    <div id="imContentContainer">
        <div id="imContentGraphics"></div>
        <div id="imContent">
            <a id="imGoToCont"></a>
            <div class="imContentDataContainer" style="
    padding-left: 0px;
">
                <h2 id="imPgTitle">Отзывы</h2>
            </div>
            <div id="imGroup_1" class="imVGroup">
                <div id="imPageRow_1" class="imPageRow">

                    <div id="imPageRowContent_1" class="imContentDataContainer" style="
    padding-left: 0px;
">
                        <div id="imCell_2" style="
    margin-left: -70px;
">
                            <div id="imCellStyleGraphics_2"></div>
                            <div id="imCellStyle_2" data-responsive-sequence-number="1"><img id="imObjectImage_5_02"
                                                                                             src="images/icon-otziv.png"
                                                                                             title="" alt=""></div>
                        </div>
                        <div id="imCell_1" class="">
                            <div id="imCellStyleGraphics_1"></div>
                            <div id="imCellStyle_1" data-responsive-sequence-number="2">
                                <div id=""
                                     style="height: 650px; overflow-y: auto; overflow-x: hidden;">
                                    <div class="topic-comments">
                                        <div class="topic-summary">
                                            <div>Комментариев нет</div>
                                        </div>
                                        <div class="topic-form">
                                            <form  action="addRewiew.php" method="post">
                                                <div class="topic-form-row">
                                                    <label for="form_name" style="float: left; width: 100px;">
                                                        <span>Имя:</span>
                                                    </label>
                                                    <input type="text" id="form_name" name="name" class="mandatory">
                                                </div>
                                                <div class="topic-form-row">
                                                    <label for="form_email" style="float: left; width: 100px;">
                                                        <span>E-mail:</span>
                                                    </label>
                                                    <input type="text" id="form_email" name="email" class="mandatory valEmail">
                                                </div>
                                                <div class="topic-form-row">
                                                    <label for="form_body" style="clear: both; width: 100px;">
                                                        <span>Сообщение:</span>
                                                    </label>
                                                    <textarea id="form_body" name="text" class="mandatory" style="width: 98%; height: 100px;"></textarea>
                                                </div>
                                                <div class="topic-form-row" style="text-align: center; margin-bottom: 15px;">
                                                    <input type="submit" value="Опубликовать">
                                                    <input type="reset" value="Сброс">
                                                </div>
                                            </form>
                                            <style>
                                                table, th, td {
                                                    border: 1px solid black;
                                                }
                                                table {
                                                    width: 100%;
                                                }
                                            </style>
                                                <?php foreach ($reviews as $review): ?>
                                                <div>
                                                    <p>Имя: <?php echo $review['name']?></p>
                                                    <p>Почта: <?php echo $review['email']?></p>
                                                    <p>Дата: <?php echo $review['date']?></p>
                                                    <p>Отзыв: <?php echo $review['text']?></p>
                                                </div>
                                                <hr>
                                                <?php endforeach; ?>
                                            <script type="text/javascript">x5engine.boot.push(function () {
                                                    x5engine.imForm.initForm('#GuestBookObject_51', false, {
                                                        showAll: true,
                                                        offlineMessage: 'Эта функция доступна только когда веб-сайт доступен в Интернете.'
                                                    });
                                                });</script>
                                        </div>
                                    </div>
                                    <script>x5engine.boot.push(function () {
                                            x5engine.topic({target: '#GuestBookObject_51', scrollbar: false});
                                        }, false, 6);</script>
                                    <input type="hidden" value="jsactive" name="imJsCheck"></div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="imFooPad"></div>
            <div id="imBtMnContainer" class="imContentDataContainer">
                <div id="imBtMn"><a href="index.html">Главная</a> | <a href="page-7.html">Каталог</a> | <a
                            href="page-5.html">Отзывы</a> | <a href="imsitemap.html">Главная Карта Сайта</a></div>
            </div>
            <div class="imClear"></div>
        </div>
    </div>
    <?php require_once "parts/footer.php" ?>
</div>
<span class="imHidden"><a href="#imGoToCont" title="Прочесть эту страницу заново">Назад к содержимому</a> | <a
            href="#imGoToMenu" title="Прочесть этот сайт заново">Назад к главному меню</a></span>
<script type="text/javascript" src="cart/x5cart.js?13-0-2-19-636489297546758060"></script>

<noscript class="imNoScript">
    <div class="alert alert-red">Для использования этого сайта необходимо включить JavaScript.</div>
</noscript>
</body>
</html>
