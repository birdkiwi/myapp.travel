<!-- App build modal - step #4-->
<div class="modal fade app-build-modal" id="app-build-modal-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                        <li><span>4. Контент</span></li>
                        <li><a href="#app-build-modal-5" data-toggle="modal" data-backdrop="static" data-keyboard="false">5. Настройка</a></li>
                    </ul>
                </nav>
            </div>
            <div class="modal-body">
                <h4>Компания</h4>

                <div class="form-group">
                    <textarea name="about-company" cols="30" rows="10" placeholder="О компании" class="form-control" style="height: 85px; margin-bottom: 20px;"></textarea>
                </div>

                <div class="app-build-modal-file-upload">
                    <h4>Логотип</h4>

                    <div class="form-group">
                        <div class="form-control">
                            загрузить
                            <input type="file" name="logo" autocomplete="off" data-js-filename="#logo-file">
                        </div>

                        <div id="logo-file" class="app-build-modal-upload-filename">
                            <span></span>
                            <a href="#" class="app-build-modal-upload-del" data-js-filename-del="input[name='logo']"><i class="mt-icon mt-icon-trash"></i></a>
                        </div>
                    </div>
                </div>

                <div class="app-build-modal-socials">
                    <h4>
                        Социальные сети

                        <div class="social-profiles-block">
                            <a href="#" data-social-url-input="#facebook-input">
                                <i class="icon-social icon-social-xs icon-social-facebook">
                                    <?php include('images/svg/icon-facebook.svg'); ?>
                                </i>
                            </a>
                            <a href="#" data-social-url-input="#vk-input">
                                <i class="icon-social icon-social-xs icon-social-vk">
                                    <?php include('images/svg/icon-vk.svg'); ?>
                                </i>
                            </a>
                            <a href="#" data-social-url-input="#twitter-input">
                                <i class="icon-social icon-social-xs icon-social-twitter">
                                    <?php include('images/svg/icon-twitter.svg'); ?>
                                </i>
                            </a>
                            <a href="#" data-social-url-input="#ok-input">
                                <i class="icon-social icon-social-xs icon-social-ok">
                                    <?php include('images/svg/icon-ok.svg'); ?>
                                </i>
                            </a>
                            <a href="#" data-social-url-input="#googleplus-input">
                                <i class="icon-social icon-social-xs icon-social-googleplus">
                                    <?php include('images/svg/icon-googleplus.svg'); ?>
                                </i>
                            </a>
                            <a href="#" data-social-url-input="#instagram-input">
                                <i class="icon-social icon-social-xs icon-social-instagram">
                                    <?php include('images/svg/icon-instagram.svg'); ?>
                                </i>
                            </a>
                        </div>
                    </h4>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6" id="facebook-input" style="display: none;">
                            <div class="form-group">
                                <input type="text" name="facebook-url" class="form-control" placeholder="Ссылка на ваш Facebook" required>
                                <i class="form-control-icon"><?php include('images/svg/icon-facebook.svg');?></i>
                                <a href="#" class="app-build-modal-socials-del" data-social-url-input-del="#facebook-input"><span class="mt-icon mt-icon-trash"></span></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6" id="vk-input" style="display: none;">
                            <div class="form-group">
                                <input type="text" name="vk-url" class="form-control" placeholder="Ссылка на ваш VK" required>
                                <i class="form-control-icon"><?php include('images/svg/icon-vk.svg');?></i>
                                <a href="#" class="app-build-modal-socials-del" data-social-url-input-del="#vk-input"><span class="mt-icon mt-icon-trash"></span></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6" id="twitter-input" style="display: none;">
                            <div class="form-group">
                                <input type="text" name="twitter-url" class="form-control" placeholder="Ссылка на ваш Твиттер" required>
                                <i class="form-control-icon"><?php include('images/svg/icon-twitter.svg');?></i>
                                <a href="#" class="app-build-modal-socials-del" data-social-url-input-del="#twitter-input"><span class="mt-icon mt-icon-trash"></span></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6" id="ok-input" style="display: none;">
                            <div class="form-group">
                                <input type="text" name="ok-url" class="form-control" placeholder="Ссылка на Одноклассники" required>
                                <i class="form-control-icon"><?php include('images/svg/icon-ok.svg');?></i>
                                <a href="#" class="app-build-modal-socials-del" data-social-url-input-del="#ok-input"><span class="mt-icon mt-icon-trash"></span></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6" id="googleplus-input" style="display: none;">
                            <div class="form-group">
                                <input type="text" name="googleplus-url" class="form-control" placeholder="Ссылка g+" required>
                                <i class="form-control-icon"><?php include('images/svg/icon-googleplus.svg');?></i>
                                <a href="#" class="app-build-modal-socials-del" data-social-url-input-del="#googleplus-input"><span class="mt-icon mt-icon-trash"></span></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6" id="instagram-input" style="display: none;">
                            <div class="form-group">
                                <input type="text" name="instagram-url" class="form-control" placeholder="Ссылка Instagram" required>
                                <i class="form-control-icon"><?php include('images/svg/icon-instagram.svg');?></i>
                                <a href="#" class="app-build-modal-socials-del" data-social-url-input-del="#instagram-input"><span class="mt-icon mt-icon-trash"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <h4>Где купить?</h4>

                <div class="app-build-modal-offices">
                    <div id="office-1">
                        <h5>Новосибирск, офис №1 <a href="#" data-hide-element="#office-1" data-hide-element-confirm="Удалить офис №1?"><i class="mt-icon mt-icon-trash"></i></a></h5>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="office-phone-1" placeholder="Телефон" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="office-email-1" placeholder="E-mail" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="office-map-desc-1" placeholder="Метка на карте" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="office-email-1" placeholder="Сайт" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="office-2">
                        <h5>Новосибирск, офис №2 <a href="#" data-hide-element="#office-2" data-hide-element-confirm="Удалить офис №2?"><i class="mt-icon mt-icon-trash"></i></a></h5>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="office-phone-1" placeholder="Телефон" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="office-email-1" placeholder="E-mail" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="office-map-desc-1" placeholder="Метка на карте" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="office-email-1" placeholder="Сайт" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-info btn-lg-2 app-build-modal-submit" value="Далее">
            </div>
        </form>
    </div>
</div>