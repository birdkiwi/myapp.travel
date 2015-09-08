$(document).ready(function(){
    $('body').append(
        '<div id="verstka" style="position: fixed; top: 40%; right: 0; background: #fff; border: 1px solid #cecece; box-shadow: 2px 3px 10px #808080; padding: 15px; z-index: 999;"><span  id="close" style="cursor:pointer; border: 1px solid #cecece;">X</span> Страницы верстки:<br />' +
        '1. √ <a href="index.php">Главная</a><br />' +
        '2. √ <a href="prices.php">Цены</a><br />' +
        '3. √ <a href="agencies.php">Турагенствам</a><br />' +
        '4. √ <a href="operators.php">Туроператорам</a><br />' +
        '5. √ <a href="about.php">О проекте</a><br />' +
        '6. √ <a href="#app-build-modal-1" data-toggle="modal" data-backdrop="static" data-keyboard="false">Создание приложения - 1</a><br />' +
        '7. √ <a href="#app-build-modal-2" data-toggle="modal" data-backdrop="static" data-keyboard="false">Создание приложения - 2</a><br />' +
        '8. √ <a href="#app-build-modal-3" data-toggle="modal" data-backdrop="static" data-keyboard="false">Создание приложения - 3</a><br />' +
        '9. √ <a href="#app-build-modal-4" data-toggle="modal" data-backdrop="static" data-keyboard="false">Создание приложения - 4</a><br />' +
        '10. √ <a href="#app-build-modal-5" data-toggle="modal" data-backdrop="static" data-keyboard="false">Создание приложения - 5</a><br />' +
        '</div>');
    $('#close').click(function(e) {
        $('#verstka').hide();
        e.preventDefault();
    });
});