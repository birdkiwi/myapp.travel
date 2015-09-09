<?php include_once("header.php"); ?>

<article class="static-page">
    <div class="wrapper">
        <h1 class="page-title">О проекте</h1>
    </div>

    <div class="static-page-block static-page-block-fw static-page-block-gray">
        <div class="wrapper">
            <h3 class="static-page-block-title">Lorem ipsum dolor sit amet</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
    </div>


    <div class="wrapper">
        <div class="static-page-block">
            <div class="media">
                <div class="media-left">
                    <img src="images/feature-speed.png" alt="">
                </div>
                <div class="media-body">
                    <h3 class="static-page-block-title">Быстро</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="static-page-block static-page-block-gray">
        <div class="wrapper">
            <div class="media">
                <div class="media-body">
                    <h3 class="static-page-block-title">Легко</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="media-right">
                    <img src="images/feature-thumb.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="static-page-block">
        <div class="wrapper">
            <div class="media">
                <div class="media-left">
                    <img src="images/feature-wallet.png" alt="">
                </div>
                <div class="media-body">
                    <h3 class="static-page-block-title">Доступно</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="static-page-block static-page-block-gray">
        <div class="wrapper">
            <div class="media">
                <div class="media-body">
                    <h3 class="static-page-block-title">Варианты оформления</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="media-right">
                    <img src="images/feature-design.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="static-page-block">
        <div class="wrapper">
            <div class="media">
                <div class="media-left">
                    <img src="images/feature-push.png" alt="">
                </div>
                <div class="media-body">
                    <h3 class="static-page-block-title">Push-уведомления</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="static-page-block static-page-block-gray">
        <div class="wrapper">
            <div class="media">
                <div class="media-body">
                    <h3 class="static-page-block-title">Геолокация</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="media-right">
                    <img src="images/feature-location.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="wrapper">
        <h2 class="static-page-block-title text-center">B2C &mdash; для туроператоров / турагентов</h2>

        <?php include('work-scheme-agencies.php'); ?>

        <h2 class="static-page-block-title text-center">B2B &mdash; для поставщиков тур услуг</h2>

        <?php include('work-scheme-operators.php'); ?>

        <div class="text-center">
            <a href="#app-build-modal-1" class="btn btn-info btn-lg" style="width: 250px;" data-toggle="modal" data-backdrop="static" data-keyboard="false">Заказать</a>
        </div>
    </div>
</article>

<?php include_once("footer.php"); ?>

<script src="build/script.min.js"></script>
</body>
</html>