(function( $ ) {
    $.fn.btnUp = function() {
        var $btn = $('<a href="" class="to-top-scroll"></a>');
        $('body').append($btn);
        $btn.click(function(){
            $('html,body').animate({
                scrollTop: 0
            }, 600);

            return false;
        });

        function btnState() {
            var scrolled = $(window).scrollTop();
            if(scrolled > 100) {
                $btn.addClass('active');
            } else {
                $btn.removeClass('active');
            }
        }

        btnState();

        $(window).scroll(function(){
            btnState();
        });
    };
})(jQuery);