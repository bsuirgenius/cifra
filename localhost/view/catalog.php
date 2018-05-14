<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="ru-RU" dir="ltr">
<head>
    <?php require_once "parts/head.php" ?>
</head>
<body>
<div id="imHeaderBg"></div>
<div id="imFooterBg"></div>
<div id="imPage">
    <div id="imHeader">
        <h1 class="imHidden"><?php echo $title?></h1>
        <div id="imHeaderObjects">
            <div id="imHeader_imObjectImage_01_wrapper" class="template-object-wrapper">
                <div id="imHeader_imCell_1" class="">
                    <div id="imHeader_imCellStyleGraphics_1"></div>
                    <div id="imHeader_imCellStyle_1"><img id="imHeader_imObjectImage_01" src="images/hand.png" title=""
                                                          alt=""/></div>
                </div>
            </div>
            <div id="imHeader_imObjectImage_15_wrapper" class="template-object-wrapper">
                <div id="imHeader_imCell_15" class="">
                    <div id="imHeader_imCellStyleGraphics_15"></div>
                    <div id="imHeader_imCellStyle_15"><img id="imHeader_imObjectImage_15"
                                                           src="images/Grey_no.circle_twitter.png" title="" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="imHidden" href="#imGoToCont" title="Заголовок главного меню">Перейти к контенту</a>
    <a id="imGoToMenu"></a>
    <p class="imHidden">Главное меню:</p>
    <?php require_once "parts/menu.php" ?>
    <div id="imContentContainer">
        <div id="imContentGraphics"></div>
        <div id="imContent">
            <a id="imGoToCont"></a>
            <div id="imPgMnContainer"><?php require_once "parts/sidebar.php" ?></div>
            <div class="imContentDataContainer">
                <h2 id="imPgTitle">Кофемашины</h2>
                <div id="imBreadcrumb">Каталог</div>
            </div>
            <div id="imPageRow_1" class="imPageRow">

                <div id="imPageRowContent_1" class="imContentDataContainer">
                    <div id="imCell_1" class="">
                        <div id="imCellStyleGraphics_1"></div>
                        <div id="imCellStyle_1" data-responsive-sequence-number="1">


                            <div id="imProductList_7_01">

                                <?php $i = 1; foreach($items as $item): ?>
                                    <div class="imProductListCont imOddProduct <?php if ($i%2 == 0) {echo 'imLastCol';} ?>">
                                        <meta itemprop="name" content="DeLonghi ESAM 2600">
                                        <div class="imProductListImage" style="height:132px; line-height:132px;">
                                            <img src="img/<?php echo $item['img'] ?>.jpg" alt="DeLonghi ESAM 2600"
                                                 title="DeLonghi ESAM 2600"
                                                 onclick="x5engine.imShowBox({media:[{ type: 'image', url: 'img/<?php echo $item["img"] ?>.jpg', width: 600, height: 450, text: 'DeLonghi ESAM 2600', effect: 'none' }]}, 0, this)"
                                                 style="max-width:175px; max-height: 132px;cursor: pointer;"/>
                                        </div>
                                        <meta itemprop="image" content="img/<?php echo $item['name'] ?>.jpg">
                                        <div class="imProductListText">
                                            <div class="height-2 overflow-controller">
                                                <h4 itemprop="name"><?php echo $item['name'] ?></h4>
                                                <p itemprop="description">
                                                    <?php echo $item['description'] ?>
                                                </p>
                                            </div>
                                            <div class="product-availability">
                                                <?php if ($item['amount'] == 0):?>
                                                    <span style="vertical-align: middle; display: inline-block; width: 22px; height: 22px; background-image: url('cart/images/cart-available.png'); background-position: 22px 0;"></span>
                                                    Нет в наличии
                                                <?php else: ?>
                                                    <span style="vertical-align: middle; display: inline-block; width: 22px; height: 22px; background-image: url('cart/images/cart-available.png'); background-position: 0 0;"></span>
                                                    В наличии
                                                <?php endif;?>
                                            </div>
                                            <span class="imProductListPrice">
								<span id="product_1l642zz50_fullprice"><?php echo $item['price'] ?> $</span>
								<meta itemprop="price" content="300">
				</span>
                                            <?php if ($item['amount'] != 0):?>
                                                <form action="/addToCart.php" method="post">
                                                    <input type="submit" style="display: none" id="push-me<?= $item['id']?>">
                                                    <label style="cursor: pointer; position: absolute; bottom: 0; right:0;"  for="push-me<?= $item['id']?>">
                                                        <img  width="16" height="16" src="cart/images/cart-add.png" alt="Добавить" title="Добавить"/>
                                                    </label>
                                                    <input type="text" name="amount" id="product_1l642zz50_qty" value="1" style="right: 21px;"/>
                                                    <input type="text" name="type" value="<?php echo $table ?>" style="display: none"/>
                                                    <input type="text" name="id" value="<?= $item['id']?>" style="display: none"/>
                                                </form>
                                            <?php endif;?>

                                        </div>
                                    </div>

                                <?php $i++; endforeach; ?>

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
<script type="text/javascript" src="cart/x5cart.js?13-0-2-19-636502453644378735"></script>

<noscript class="imNoScript">
    <div class="alert alert-red">Для использования этого сайта необходимо включить JavaScript.</div>
</noscript>
</body>
</html>
