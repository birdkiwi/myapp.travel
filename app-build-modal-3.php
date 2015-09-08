<!-- App build modal - step #3-->
<div class="modal fade app-build-modal" id="app-build-modal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                        <li><span>3. Выбор варианта дизайна</span></li>
                        <li><a href="#app-build-modal-4" data-toggle="modal" data-backdrop="static" data-keyboard="false">4. Контент</a></li>
                        <li><a href="#app-build-modal-5" data-toggle="modal" data-backdrop="static" data-keyboard="false">5. Настройка</a></li>
                    </ul>
                </nav>
            </div>
            <div class="modal-body">
                <h4>Выбор варианта дизайна</h4>

                <ul class="js-modal-bxslider app-build-modal-design-scroll" data-bx-slider-min-slides="1" data-bx-slider-max-slides="4" data-bx-slider-slide-width="180px" data-bx-slider-slide-margin="30" data-bx-slider-pager="false" data-bx-slider-controls="true">
                    <li>
                        <a href="images/screens/ios-app-country-select.jpg" data-design-screen-choose="1">
                            <img src="images/screens/thumbs/ios-app-country-select.jpg" width="180" height="320" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="images/screens/ios-app-country-select.jpg" data-design-screen-choose="2">
                            <img src="images/screens/thumbs/ios-app-country-select.jpg" width="180" height="320" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="images/screens/ios-app-country-select.jpg" data-design-screen-choose="3">
                            <img src="images/screens/thumbs/ios-app-country-select.jpg" width="180" height="320" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="images/screens/ios-app-country-select.jpg" data-design-screen-choose="4">
                            <img src="images/screens/thumbs/ios-app-country-select.jpg" width="180" height="320" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="images/screens/ios-app-country-select.jpg" data-design-screen-choose="5">
                            <img src="images/screens/thumbs/ios-app-country-select.jpg" width="180" height="320" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="images/screens/ios-app-country-select.jpg" data-design-screen-choose="6">
                            <img src="images/screens/thumbs/ios-app-country-select.jpg" width="180" height="320" alt="">
                        </a>
                    </li>
                </ul>

                <input type="hidden" name="design-template" value="">
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-info btn-lg-2 app-build-modal-submit" value="Далее">
                <a href="#" class="app-build-modal-skip">Пропустить</a>
            </div>
        </form>
    </div>
</div>