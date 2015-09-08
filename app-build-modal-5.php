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

                <h4>Настройка дизайна</h4>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="app-build-modal-menutype">
                            <h5>Тип меню</h5>

                            <a href="#">Меню 1</a>
                            <a href="#">Меню 2</a>
                            <a href="#">Меню 3</a>
                            <a href="#">Меню 4</a>
                        </div>

                        <div class="app-build-modal-color">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <h5>Цвет</h5>

                                    <div class="app-build-modal-color-item active" data-colorpicker="#js-phone-color-picker">
                                        <input type="text" id="js-phone-color-picker-input-1" name="color-1" value="#38569c" style="background: #38569c;" autocomplete="off">
                                        Основной цвет
                                    </div>

                                    <div class="app-build-modal-color-item" data-colorpicker="#js-phone-color-picker">
                                        <input type="text" id="js-phone-color-picker-input-2" name="color-2" value="#ffba00" style="background: #ffba00;" autocomplete="off">
                                        Дополнительный цвет
                                    </div>

                                    <div class="app-build-modal-color-item" data-colorpicker="#js-phone-color-picker">
                                        <input type="text" id="js-phone-color-picker-input-3" name="color-3" value="#ecf0f4" style="background: #ecf0f4;" autocomplete="off">
                                        Фон
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="app-build-modal-colorpicker">
                                        <div id="js-phone-color-picker"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="iphone-block"></div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-info btn-lg-2 app-build-modal-submit" value="Создать">
            </div>
        </form>
    </div>
</div>