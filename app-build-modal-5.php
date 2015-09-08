<!-- App build modal - step #5-->
<div class="modal fade app-build-modal" id="app-build-modal-5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <form action="#" method="POST" class="modal-content js-validate">
            <a class="modal-close" data-dismiss="modal">
                <?php include("images/svg/icon-modal-close.svg"); ?>
            </a>
            <div class="modal-header">
                <h3 class="modal-title">Создать приложение</h3>

                <nav class="app-build-modal-breadcrumbs">
                    <ul>
                        <li><a href="#app-build-modal-1" data-toggle="modal" data-backdrop="static" data-keyboard="false">1. Заказ</a></li>
                        <li><a href="#app-build-modal-2" data-toggle="modal" data-backdrop="static" data-keyboard="false">2. Тариф и функционал</a></li>
                        <li><a href="#app-build-modal-3" data-toggle="modal" data-backdrop="static" data-keyboard="false">3. Выбор варианта дизайна</a></li>
                        <li><a href="#app-build-modal-4" data-toggle="modal" data-backdrop="static" data-keyboard="false">4. Контент</a></li>
                        <li><span>5. Настройка</span></li>
                    </ul>
                </nav>
            </div>
            <div class="modal-body">

                <div class="colorpicker">
                    <div id="js-phone-color-picker"></div>
                    <input type="text" id="js-phone-color-picker-input" />
                </div>

            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-info btn-lg-2 app-build-modal-submit" value="Далее">
            </div>
        </form>
    </div>
</div>