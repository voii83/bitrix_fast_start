<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
</div>
<?php if (ERROR_404 == 'Y') : ?>
</div>
<?php else : ?>
<div class="sticky-push"></div>
<?php endif; ?>
</div>

<footer>
    <div class="sticky-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <address>
                        <?php
                        $APPLICATION->IncludeFile(
                            SITE_DIR . 'include/address.php',
                            [],
                            ['MODE' => 'html']
                        );
                        ?>
                    </address>
                </div>

                <div class="col-md-4 col-md-push-4">
                    <div class="copyright">
                        Данный шаблон предоставлен компанией<br/>© <a href="http://www.intervolga.ru">ИНТЕРВОЛГА</a> для
                        Академии 1С-Битрикс
                    </div>
                </div>

                <div class="col-md-4 col-md-pull-4 hidden-print">
                    <?php
                    $APPLICATION->IncludeFile(
                        SITE_DIR . 'include/social-links.php',
                        [],
                        ['MODE' => 'html']
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--ОБЯЗАТЕЛЬНО ПОДКЛЮЧИТЕ ЭТИ СКРИПТЫ И СТИЛИ-->
<?php
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/jquery.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/bootstrap/collapse.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/bootstrap/tooltip.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/plugins.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/jquery.touchSwipe.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/jquery.ba-throttle-debounce.min.js');
?>

<!--Уникальные JS для данной страницы-->
<?php
//Слайдер
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/cookesHelp.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/bootstrap-switch.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/jquery.carouFredSel-packed.js');
?>

<!--ОБЯЗАТЕЛЬНО ПОДКЛЮЧИТЕ ЭТИ СКРИПТЫ И СТИЛИ-->
<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/main.js'); ?>

</body>
</html>