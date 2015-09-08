Array.prototype.remove = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};

//Fixing scrollbar shift for fixed positioned header and footer && BxSlider
$(document.body).on('show.bs.modal', function () {
    if (this.clientHeight <= window.innerHeight) {
        return;
    }

    var getScrollBarWidth = function () {
        this.$body = $(document.body);
        var scrollDiv = document.createElement('div');
        scrollDiv.className = 'modal-scrollbar-measure';
        this.$body.append(scrollDiv);
        var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
        this.$body[0].removeChild(scrollDiv);
        return scrollbarWidth;
    };

    var scrollbarWidth = getScrollBarWidth();
    if (scrollbarWidth) {
        $('.main-header').css('padding-right', scrollbarWidth);
        $('.to-top-scroll.active').css('margin-right', scrollbarWidth);
    }
});

$(document.body).on('shown.bs.modal', function (e) {
    $(e.target).find('.js-modal-bxslider').bxSliderAlt();
});

$(document.body).on('hidden.bs.modal', function () {
    $(document.body).css('padding-right', 0);
    $('.main-header').css('padding-right', 0);
    $('.to-top-scroll.active').css('margin-right', 0);
});

$(document).on('click', '.main-header-toggler-wrap', function() {
    $(this).toggleClass('active');
    $('.main-header-fixed').toggleClass('open');

    return false;
});

$(document).on('click', '[data-function-icon]', function() {
    var button = $(this),
        elem = button.data('function-icon');

    $('[data-function-desc]').removeClass('active');
    $('[data-function-icon]').removeClass('active');
    button.addClass('active');

    $('[data-function-screen]:visible').fadeOut(function(){
        $('[data-function-desc="' + elem + '"]').addClass('active');
        $('[data-function-screen="' + elem + '"]').fadeIn();
    });

    return false;
});

$(document).ready(function(){
    $('[data-btn-up]').btnUp();

    $('.js-validate').each(function(){
        $(this).validate({
            errorPlacement: function(error, element) {},
            highlight: function(element) {
                $(element).closest('.form-group').addClass('has-error');
                if ($(element).data('error-placeholder')) {
                    $(element).attr('placeholder', $(element).data('error-placeholder'));
                }
            },
            unhighlight: function(element) {
                $(element).closest('.form-group').removeClass('has-error');
                if ($(element).data('error-placeholder')) {
                    $(element).attr('placeholder', $(element).data('default-placeholder'));
                }
            }
        });
    });

    $('[data-toggle="tooltip"]').tooltip();

    $('.js-bxslider').bxSliderAlt();

    $(".js-custom-scroll").mCustomScrollbar();

    $('.js-selectpicker').selectpicker();

    if ($('#js-phone-color-picker').length > 0) {
        $('#js-phone-color-picker').farbtastic('#js-phone-color-picker-input');
    }

    $('.js-fancybox').fancybox();

    $('[data-masked]').each(function(){
        var mask = $(this).data('masked');
        $(this).mask(mask);
    });

    // Mobile menu
    $('[data-offcanvas]').click(function(){
        function showMobileMenu() {
            $('.main-offcanvas').addClass('active');
            $('[data-offcanvas]').addClass('active');

            function hideEvent(e) {
                if( !$(e.target).closest('.main-offcanvas').length || !$(e.target).closest('[data-offcanvas]') ) {
                    hideMobileMenu();
                    $(document).off('click', 'body', hideEvent);
                }
            }

            $(document).on('click', 'body', hideEvent);
        }

        function hideMobileMenu() {
            $('.main-offcanvas').removeClass('active');
            $('[data-offcanvas]').removeClass('active');
        }

        if ($(this).hasClass('active')) {
            hideMobileMenu();
        } else {
            showMobileMenu();
        }
        return false;
    });

    $('[data-custom-input]').click(function(){
        var button = $(this),
            isRadio = button.attr('data-custom-input-radio'),
            isActive = button.hasClass('active'),
            inputName = button.attr('data-custom-input'),
            input = $('input[name="' + inputName + '"]'),
            value = button.attr('data-custom-input-value'),
            currentActiveValues = [];

        if (!isActive) {
            if (isRadio) {
                $(input).val(value);
                $('[data-custom-input="' + inputName + '"]').removeClass('active');
                button.addClass('active');
            } else {
                // добавляем значение к текущим
                button.addClass('active');
                $('.active[data-custom-input="' + inputName + '"]').each(function(){
                    var value = $(this).data('custom-input-value');
                    currentActiveValues.push(value);
                });
                input.val(currentActiveValues);
            }

        } else {
            if (isRadio) {
                $(input).val('');
            } else {
                // удаляем только одно значение
                var value = button.data('custom-input-value');
                currentActiveValues.remove(value);
                input.val(currentActiveValues);
            }
            button.removeClass('active');
        }

        //console.log('Текущие значения: ' + currentActiveValues);
    });

    $('[data-design-screen-choose]').click(function(){
        var current = $(this),
            designId = current.data('design-screen-choose');

        $('[data-design-screen-choose]').removeClass('active');
        current.addClass('active');
        $('input[name="design-template"]').val(designId);

        return false;
    });

    $('.js-devices-slider').each(function(){
        var slider = $(this);

        setInterval(function () {
            var currentDevice = slider.find('div:visible');

            if (currentDevice.next().length > 0) {
                currentDevice.fadeOut(function(){
                    currentDevice.next().fadeIn();
                });
            } else {
                currentDevice.fadeOut(function(){
                    slider.find('div:first-child').fadeIn();
                });
            }
        }, 7000);
    });

    $('[data-switch-table-link]').click(function(){
        if (!$(this).hasClass('active')) {
            var e = $(this).data('switch-table-link');
            $('[data-switch-table-link]').removeClass('active');
            $(this).addClass('active');
            $('[data-switch-table]').fadeOut('fast', function(){
                $(e).fadeIn('fast');
            });
        }
        return false;
    });

    $('[data-social-url-input]').click(function(){
        var e = $(this).data('social-url-input');
        $(e).slideToggle();
        $(this).find('.icon-social').toggleClass('active');

        return false;
    });

    $('[data-social-url-input-del]').click(function(){
        var e = $(this).data('social-url-input-del');
        $(e).slideUp();
        $('[data-social-url-input="' + e + '"]').find('.icon-social').removeClass('active');

        return false;
    });

    $('[data-hide-element]').click(function(){
        var e = $(this).data('hide-element');

        if ($(this).data('hide-element-confirm')) {
            var confirmMsg = $(this).data('hide-element-confirm') || "Вы действительно хотите удалить этот элемент?";
            var agree = confirm(confirmMsg);

            if (agree) {
                $(e).slideUp();
            }
        } else {
            $(e).slideUp();
        }

        return false;
    });
});

// Vertical centered Bootstrap Modals
$(function() {
    function reposition() {
        var modal = $(this),
            dialog = modal.find('.modal-dialog-centered');

        modal.css('display', 'block');

        // Dividing by two centers the modal exactly, but dividing by three
        // or four works better for larger screens.
        dialog.css('margin-top', Math.max(0, ($(window).height() - dialog.height()) / 2));
    }

    // Reposition when a modal is shown
    $('.modal').on('show.bs.modal', reposition);

    // Reposition when the window is resized
    $(window).on('resize', function() {
        $('.modal:visible').each(reposition);
    });
});