<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)) : ?>
<nav>
    <div class="navbar navbar-intervolga">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-nav">
                    <span class="sr-only">Переключить навигацию</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">InterVolga.ru</a>
            </div>
            <div class="collapse navbar-collapse" id="top-nav">
                <ul class="nav navbar-nav">
                    <?php foreach ($arResult as $arItem) : ?>
                        <li <?php if ($arItem["SELECTED"]) : ?>  class="active" <?php endif; ?>>
                            <a href="<?= $arItem["LINK"] ?>" ><?= $arItem["TEXT"] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php endif; ?>
