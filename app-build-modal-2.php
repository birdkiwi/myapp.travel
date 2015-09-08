<!-- App build modal - step #2-->
<div class="modal fade app-build-modal" id="app-build-modal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                        <li><span>2. Тариф и функционал</span></li>
                        <li><a href="#app-build-modal-3" data-toggle="modal" data-backdrop="static" data-keyboard="false">3. Выбор варианта дизайна</a></li>
                        <li><a href="#app-build-modal-4" data-toggle="modal" data-backdrop="static" data-keyboard="false">4. Контент</a></li>
                        <li><a href="#app-build-modal-5" data-toggle="modal" data-backdrop="static" data-keyboard="false">5. Настройка</a></li>
                    </ul>
                </nav>
            </div>
            <div class="modal-body">
                <h4>Тариф</h4>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="custom-radio-block custom-radio-block-rate" data-custom-input="rate" data-custom-input-radio="true" data-custom-input-value="Start">
                            <h4 class="custom-radio-block-title">Start</h4>
                            <p>Lorem ipsum dolor sit amet <br> 1000 руб. в месяц</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="custom-radio-block custom-radio-block-rate" data-custom-input="rate" data-custom-input-radio="true" data-custom-input-value="Pro">
                            <h4 class="custom-radio-block-title">Pro</h4>
                            <p>Lorem ipsum dolor sit amet <br> 1000 руб. в месяц</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="custom-radio-block custom-radio-block-rate" data-custom-input="rate" data-custom-input-radio="true" data-custom-input-value="Business">
                            <h4 class="custom-radio-block-title">Business</h4>
                            <p>Lorem ipsum dolor sit amet <br> 1000 руб. в месяц</p>
                        </div>
                    </div>

                    <input type="hidden" name="rate" value="" required autocomplete="off">
                </div>

                <h4>Функционал</h4>
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="custom-checkbox-block" data-custom-input="functions" data-custom-input-value="витрина">
                            <i class="mt-icon mt-icon-shop"></i>
                            <div class="custom-checkbox-block-title">витрина<br>&nbsp;</div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="custom-checkbox-block" data-custom-input="functions" data-custom-input-value="горящие туры">
                            <i class="mt-icon mt-icon-flame"></i>
                            <div class="custom-checkbox-block-title">горящие <br>туры</div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="custom-checkbox-block" data-custom-input="functions" data-custom-input-value="поиск">
                            <i class="mt-icon mt-icon-search"></i>
                            <div class="custom-checkbox-block-title">поиск<br>&nbsp;</div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="custom-checkbox-block" data-custom-input="functions" data-custom-input-value="о компании">
                            <i class="mt-icon mt-icon-about"></i>
                            <div class="custom-checkbox-block-title">о компании<br>&nbsp;</div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="custom-checkbox-block" data-custom-input="functions" data-custom-input-value="заказы">
                            <i class="mt-icon mt-icon-cart"></i>
                            <div class="custom-checkbox-block-title">заказы<br>&nbsp;</div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="custom-checkbox-block" data-custom-input="functions" data-custom-input-value="клиенты">
                            <i class="mt-icon mt-icon-client"></i>
                            <div class="custom-checkbox-block-title">клиенты<br>&nbsp;</div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="custom-checkbox-block" data-custom-input="functions" data-custom-input-value="геолокация">
                            <i class="mt-icon mt-icon-map"></i>
                            <div class="custom-checkbox-block-title">геолокация<br>&nbsp;</div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="custom-checkbox-block" data-custom-input="functions" data-custom-input-value="настройка дизайна">
                            <i class="mt-icon mt-icon-measure"></i>
                            <div class="custom-checkbox-block-title">настройка <br>дизайна</div>
                        </div>
                    </div>

                    <input type="hidden" name="functions" value="" autocomplete="off">
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-info btn-lg-2 app-build-modal-submit" value="Далее">
            </div>
        </form>
    </div>
</div>