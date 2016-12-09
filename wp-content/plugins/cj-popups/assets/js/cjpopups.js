jQuery(document).ready(function($) {

    $(window).load(function() {
        //$('body').live('each', '.cjpopup', function() {
        $('.cjpopup').each(function() {
            var click = $(this).attr('data-click');
            var right_click = $(this).attr('data-right-click');
            var popup = $(this);
            if (click === '' && right_click === 'no') {
                show_popup(popup);
            } else if (right_click == 'yes') {
                document.oncontextmenu = function() {
                    return false;
                };
                $(document).mousedown(function(e) {
                    if (e.button == 2) {
                        show_popup(popup);
                        return false;
                    }
                    return true;
                });
            } else {
                $(click).on('click', function() {
                    show_popup(popup);
                    return false;
                });
            }
        });
    });

    function show_popup(el) {
        $('body').addClass('cjpopup-on');
        var popid = el.attr('id');
        var disable_body_scroll = el.attr('data-disable-body-scroll');
        var bgcolor = el.attr('data-bgcolor');
        var textcolor = el.attr('data-textcolor');
        var linkcolor = el.attr('data-linkcolor');
        var closebgcolor = el.attr('data-closebgcolor');
        var closetextcolor = el.attr('data-closetextcolor');
        var delay = el.attr('data-delay');
        var autohide = el.attr('data-autohide');
        var hideclosebutton = el.attr('data-hideclosebutton');
        var padding = el.attr('data-padding');
        var width = el.attr('data-width');
        var popup_height = el.attr('data-height');
        var animation_in = el.attr('data-animation-in');
        var animation_out = el.attr('data-animation-out');
        var cookie_expires = el.attr('data-cookie');
        var popuptype = el.attr('data-popup-type');
        var backdrop_id = el.attr('data-backdrop-id');
        var window_width = $(window).width();
        var onclick = el.attr('data-click');
        var onclick_close = el.attr('data-close-click');
        var right_click = el.attr('data-right-click');
        var esc_key = el.attr('data-esc-key');
        var anywhere_click_close = el.attr('data-anywhere-click-close');

        if(onclick_close != undefined || onclick_close != ''){
            $(onclick_close).on('click', function(){
                el.find('.close-cjpopup').trigger('click');
            });
        }

        if (disable_body_scroll == 'on') {
            $('body').addClass('cjpopup-body-no-scroll');
        }

        // Auto hide
        var autohide_duration = autohide * 1000;
        if (autohide > 0) {
            setTimeout(function() {
                el.find('.close-cjpopup').trigger('click');
            }, autohide_duration);
        }

        if (hideclosebutton == 'on') {
            $('.close-cjpopup').hide(0);
        }

        // Cookie management
        var cookie = getCookie(popid);
        if (cookie == 'hide') {
            return;
        }

        // responsive
        if (window_width < 1023) {
            width = 'auto';
        } else {
            width = width;
        }

        if (popup_height != '' || popup_height != undefined) {
            el.css('height', popup_height);
        }

        el.css('width', width);
        el.css('visibility', 'visible');
        el.find('.popup-content').css('padding', padding);

        el.css('background-color', bgcolor);
        el.css('color', textcolor);
        el.find('a').css('color', linkcolor);
        el.find('a.close-cjpopup').css('background-color', closebgcolor);
        el.find('a.close-cjpopup').css('color', closetextcolor);
        el.find('a.close-cjpopup span').css('color', closetextcolor);
        el.find('.popup-content').css('color', textcolor);

        $(window).resize(function() {
            window_width = $(window).width();
            if (window.innerWidth == screen.width) {
                $('body').addClass('fullscreen-popup');
                el.removeClass(animation_in, animation_out);
            } else {
                $('body').removeClass('fullscreen-popup');
                el.removeClass(animation_in);
            }
            if (window_width < 1023) {
                el.css('width', 'auto');
            } else {
                el.css('width', width);
            }
            if (popuptype == 'modal-box') {
                if (window_width < 1023) {
                    el.css('left', '20px');
                    el.css('width', 'auto');
                    el.css('margin-left', 0);
                }
                if (window_width > 1023) {
                    width = width.replace('px', '');
                    var modal_margin_left = width / 2 * -1;
                    el.css('left', '50%');
                    el.css('width', width);
                    el.css('margin-left', modal_margin_left);
                }
            }
        });



        setTimeout(function() {
            $('#' + backdrop_id).removeClass('cjpopup-hidden');
            $('#' + backdrop_id).toggleClass('animated fadeIn');
        }, delay * 1000);

        setTimeout(function() {
            el.removeClass('cjpopup-hidden');
            if (popuptype == 'modal-box' && window_width > 1023) {
                var modal_margin_left = el.innerWidth() / 2 * -1;
                el.css('margin-left', modal_margin_left);
            }
            if (popuptype == 'modal-box' && window_width < 1023) {
                var modal_margin_left = 'auto';
                el.css('margin-left', 'auto');
            }
            animate(el, animation_in);
            // $('body').css('overflow', 'hidden');
        }, delay * 1000 + 500);

        el.finish();


        el.find('.close-cjpopup, .close-popup').on('click', function() {
            // Close PopUp Code
            $('body').removeClass('cjpopup-on');
            $('body').removeClass('cjpopup-body-no-scroll');
            $('#' + backdrop_id).toggleClass('fadeIn fadeOut');
            animate(el, animation_out);
            $(el).removeClass(animation_in);
            setTimeout(function() {
                $('#' + backdrop_id).addClass('cjpopup-hidden');
                $('#' + backdrop_id).removeClass('animated fadeOut');
                $(el).addClass('cjpopup-hidden');
                $(el).removeClass(animation_out);
                // $('body').css('overflow', 'auto');
                if (onclick === '' && right_click != 'yes') {
                    el.remove();
                    $('#' + backdrop_id).remove();
                    setCookie(popid, 'hide', cookie_expires);
                }
                el.finish();
            }, 1000);
            // Close PopUp Code ends
            return false;
        });


        if (esc_key == 'yes') {
            $(document).keyup(function(e) {
                if (e.keyCode == 27 && $('body').hasClass('cjpopup-on')) {
                    $('.cjpopup').each(function() {
                        var el = $(this);
                        var backdrop_id = $(this).attr('data-backdrop-id');
                        if (el.hasClass('cjpopup-hidden') === false) {
                            // Close PopUp Code
                            $('body').removeClass('cjpopup-on');
                            $('#' + backdrop_id).toggleClass('fadeIn fadeOut');
                            animate(el, animation_out);
                            $(el).removeClass(animation_in);
                            setTimeout(function() {
                                $('#' + backdrop_id).addClass('cjpopup-hidden');
                                $('#' + backdrop_id).removeClass('animated fadeOut');
                                $(el).addClass('cjpopup-hidden');
                                $(el).removeClass(animation_out);
                                // $('body').css('overflow', 'auto');
                                if (onclick === '' && right_click != 'yes') {
                                    el.remove();
                                    $('#' + backdrop_id).remove();
                                    setCookie(popid, 'hide', cookie_expires);
                                }
                                el.finish();
                            }, 1000);
                            // Close PopUp Code ends
                        }
                    });
                    return false;
                }
            });
        }


        if (anywhere_click_close == 'yes') {

            $(document).click(function() {
                if ($('body').hasClass('cjpopup-on')) {
                    $('.cjpopup').each(function() {
                        var el = $(this);
                        var backdrop_id = $(this).attr('data-backdrop-id');
                        if (el.hasClass('cjpopup-hidden') === false) {
                            // Close PopUp Code
                            $('body').removeClass('cjpopup-on');
                            $('#' + backdrop_id).toggleClass('fadeIn fadeOut');
                            animate(el, animation_out);
                            $(el).removeClass(animation_in);
                            setTimeout(function() {
                                $('#' + backdrop_id).addClass('cjpopup-hidden');
                                $('#' + backdrop_id).removeClass('animated fadeOut');
                                $(el).addClass('cjpopup-hidden');
                                $(el).removeClass(animation_out);
                                // $('body').css('overflow', 'auto');
                                if (onclick === '' && right_click != 'yes') {
                                    el.remove();
                                    $('#' + backdrop_id).remove();
                                    setCookie(popid, 'hide', cookie_expires);
                                }
                                el.finish();
                            }, 1000);
                            // Close PopUp Code ends
                        }
                    });
                }
            });
            $(el).click(function(e) {
                e.stopPropagation(); // This is the preferred method.
                // return false; // This should not be used unless you do not want
                // any click events registering inside the div
            });
        }

    }


    function animate(el, x) {
        $(el).removeClass('cjpopup-hidden');
        $(el).addClass('animated ' + x);
    }


    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + "; " + expires+ "; path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
        }
        return "";
    }

    $('.cjpopup-fullscreen').each(function(){
        var win_width = $(window).width();
        var win_height = $(window).height();
        $(this).css({
            width: win_width,
            height: win_height
        });
        $(this).find('iframe').css({
            width: win_width,
            height: win_height,
            margin: 0
        });
    });

    $(window).resize(function(){
        $('.cjpopup-fullscreen').each(function(){
            var win_width = $(window).width();
            var win_height = $(window).height();
            $(this).css({
                width: win_width,
                height: win_height
            });
            $(this).find('iframe').css({
                width: win_width,
                height: win_height,
                margin: 0
            });
        });
    })


});