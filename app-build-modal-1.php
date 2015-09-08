<!-- App build modal - step #1-->
<div class="modal fade app-build-modal" id="app-build-modal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <form action="#" method="POST" class="modal-content js-validate">
            <a class="modal-close" data-dismiss="modal">
                <?php include("images/svg/icon-modal-close.svg"); ?>
            </a>
            <div class="modal-header">
                <h3 class="modal-title">Создать приложение</h3>

                <nav class="app-build-modal-breadcrumbs">
                    <ul>
                        <li><span>1. Заказ</span></li>
                        <li><a href="#app-build-modal-2" data-toggle="modal" data-backdrop="static" data-keyboard="false">2. Тариф и функционал</a></li>
                        <li><a href="#app-build-modal-3" data-toggle="modal" data-backdrop="static" data-keyboard="false">3. Выбор варианта дизайна</a></li>
                        <li><a href="#app-build-modal-4" data-toggle="modal" data-backdrop="static" data-keyboard="false">4. Контент</a></li>
                        <li><a href="#app-build-modal-5" data-toggle="modal" data-backdrop="static" data-keyboard="false">5. Настройка</a></li>
                    </ul>
                </nav>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4>Тип компании</h4>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="custom-radio-block" data-custom-input="company-type" data-custom-input-value="Турагентство">
                                    <div class="custom-radio-block-icon">
                                        <i class="mt-icon mt-icon-build-agency"></i>
                                    </div>
                                    <div class="custom-radio-block-title">
                                        Тур&shy;агент&shy;ство
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="custom-radio-block" data-custom-input="company-type" data-custom-input-value="Туроператор">
                                    <div class="custom-radio-block-icon">
                                        <i class="mt-icon mt-icon-build-operator"></i>
                                    </div>
                                    <div class="custom-radio-block-title">
                                        Тур&shy;опера&shy;тор
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="business-type" value="" required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4>Тип бизнеса</h4>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="custom-radio-block" data-custom-input="business-type" data-custom-input-value="B2C">
                                    <div class="custom-radio-block-icon">
                                        <i class="mt-icon mt-icon-build-clients"></i>
                                    </div>
                                    <div class="custom-radio-block-title">
                                        B2C
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="custom-radio-block" data-custom-input="business-type" data-custom-input-value="B2B">
                                    <div class="custom-radio-block-icon">
                                        <i class="mt-icon mt-icon-build-business"></i>
                                    </div>
                                    <div class="custom-radio-block-title">
                                        B2B
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="company-type" value="" required autocomplete="off">
                        </div>
                    </div>
                </div>

                <h4>О компании</h4>

                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="company" required placeholder="Название компании">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" required placeholder="Телефон" data-masked="+7 999 999-99-99">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="contact" required placeholder="Контактное лицо">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="phone" required placeholder="E-mail">
                        </div>
                    </div>
                </div>

                <h4>В каких городах представлено</h4>

                <div class="app-build-modal-cities">
                    <ul class="app-build-modal-cities-list">
                        <li>
                            Новосибирск, 2 офиса <a href="#" class="app-build-modal-cities-list-del"><i class="mt-icon mt-icon-trash"></i></a>
                        </li>
                        <li>
                            Москва, 2 офиса <a href="#" class="app-build-modal-cities-list-del"><i class="mt-icon mt-icon-trash"></i></a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <select name="office-num" class="form-control js-selectpicker" data-live-search="true">
                                    <option value="Москва">Москва</option>
                                    <option value="Новосибирск">Новосибирск</option>
                                    <option value="Владивосток">Владивосток</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <select name="office-num" class="form-control js-selectpicker" autocomplete="off">
                                            <option value="0">Кол-во офисов</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-add btn-block">Добавить</button>
                                    </div>
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