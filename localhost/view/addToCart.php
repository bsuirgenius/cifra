<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="ru-RU" dir="ltr">
<head>
<?php require_once "parts/head.php"; ?>
</head>
<body>
<div id="imHeaderBg"></div>
<div id="imFooterBg"></div>
<div id="imPage">
<?php require_once "parts/header.php"?>
    <a class="imHidden" href="#imGoToCont" title="Заголовок главного меню">Перейти к контенту</a>
    <a id="imGoToMenu"></a><p class="imHidden">Главное меню:</p>
    <?php require_once "parts/menu.php"?>
    <div id="imContentContainer">
        <div id="imContentGraphics"></div>
        <div id="imContent" style="
    margin-left: 260px;
    width: 960px;
">
            <div style="width: ">
                <table class="cartTable" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 0;">
                    <thead>
                    <tr>
                        <td class="first-x">Описание</td>
                        <td class="min-width mobile-hide">Цена</td>
                        <td>Количество</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="mobile-65-5 first-x last-y">
                            <p style="display: block;">
                                <img src="img/<?php echo $item['img']; ?>.jpg" alt="DeLonghi ESAM 2600" style="margin: 5px 5px 5px 0; width: 48px; vertical-align: middle;"><b><?php echo $item['name']; ?></b>
                            </p>
                            <p style="display: block; font-size: 0.85em;"><?php echo $item['description']; ?></p>
                        </td>
                        <td class="text-right mobile-hide last-y"><?php echo $item['price']; ?> $</td>
                        <td class="text-right last-y"><?php echo $_POST['amount']; ?></td>

                         </tr>
                    </tbody>
                </table>
                <table class="cartTable priceTable" cellpadding="0" cellspacing="0" border="0" style="margin-top: 0;">
                    <tbody>
                    <tr class="vertical-middle">
                        <td colspan="2" class="invisible"></td>
                        <td class="head dynamic-width odd first-x" style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-top-color: transparent;">ИТОГ</td>
                        <td class="text-right odd last-x" colspan="2" style="width: 16%; border-top-left-radius: 0px; border-top-right-radius: 0px; border-top-color: transparent;"><?php echo $item['price']*$_POST['amount'] ?> $</td>
                    </tr>
                    </tbody>
                </table>
                <div style="padding-left: 50px;/* width: 500px */">
                    <form method="post" action="/safeOrder.php" style="text-align: left">
                        <div style="display: none;">
                            <input type="text"  name="orderItemId" value="<?php echo $item['id']; ?>">
                            <input type="text"  name="orderItemAmount" value="<?php echo $_POST['amount']; ?>">
                            <input type="text"  name="orderItemType" value="<?php echo $_POST['type']; ?>">
                        </div>
                        <div>
                            <label for="name">ФИО</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div>
                            <label for="adress">Адрес</label>
                            <input type="text" id="adress" name="adress">
                        </div>
                        <div>
                            <label for="phone">Номер телефона</label>
                            <input type="text" id="phone" name="phone">
                        </div>
                        <div>
                            <label for="pay_type">Наличные</label>
                            <input value="pay_type_nal" type="radio" id="pay_type" name="pay_type">
                            <label for="pay_type">Карта</label>
                            <input value="pay_type_card" type="radio" id="pay_type" name="pay_type">
                        </div>
                        <div>
                            <input type="submit" value="Заказать">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once "parts/footer.php"?>
</div>
<span class="imHidden"><a href="#imGoToCont" title="Прочесть эту страницу заново">Назад к содержимому</a> | <a href="#imGoToMenu" title="Прочесть этот сайт заново">Назад к главному меню</a></span>
<script type="text/javascript" src="cart/x5cart.js?13-0-2-19-636489297546758060"></script>

<noscript class="imNoScript"><div class="alert alert-red">Для использования этого сайта необходимо включить JavaScript.</div></noscript>
</body>
</html>
