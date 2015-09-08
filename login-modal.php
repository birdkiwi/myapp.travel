<!-- Login modal -->
<div class="modal fade login-modal" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="#" method="POST" class="modal-content js-validate">
            <a class="modal-close" data-dismiss="modal">
                <?php include("images/svg/icon-modal-close.svg"); ?>
            </a>
            <div class="modal-header">
                <h3 class="modal-title">Войти в личный кабинет</h3>
            </div>
            <div class="modal-body">
                <p>Доступ в личный кабинет – lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="form-group">
                    <input type="text" class="form-control" name="login" placeholder="Логин" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Пароль" required>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-info btn-lg-2" value="Войти">

                <div class="login-modal-restore">
                    <a href="#">Забыли пароль?</a>
                </div>
            </div>
        </form>
    </div>
</div>