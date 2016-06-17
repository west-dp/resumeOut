String.prototype.capitalize = function () {
    return this.charAt(0).toUpperCase() + this.slice(1);
}

/*$('body, html').mouseleave(function () {
    console.log('You are exit');
});*/
$(".clickToForm").click(function () {
    $("html,body").animate({
        scrollTop: 0
    }, 500);
    $('#userName').focus();
});

$(".buttomBlock img").click(function () {
    $("html,body").animate({
        scrollTop: $('.triangleblock').offset().top
    }, 500);
    
});

function height_Content() {
    $('.afterContactReletive').height($('#portfolio-wrap').position().top);
}


function auto_grow(element) {
    element.style.height = "50px";
    element.style.height = (element.scrollHeight) + "px";
}

$(".twoBlock").mouseout(function(e){
 $(".oneBlock .circleblock").css("opacity", "1");
});
$(".twoBlock").mousemove(function(e){
 $(".oneBlock .circleblock").css("opacity", "0");
});
$(".thereBlock").mouseout(function(e){
 $(".twoBlock .circleblock").css("opacity", "1");
});
$(".thereBlock").mousemove(function(e){
 $(".twoBlock .circleblock").css("opacity", "0");
});

//одинаковая высота блоков на странице внизу(два блока)
    var columns = $('.fourBlocks .content > div');
    $(window).resize(function () {
        setEqualHeight(columns);
    });
    $(document).ready(function () {
        setEqualHeight(columns);
    });
    $(window).ready(function () {
        setEqualHeight(columns);
    });
    function setEqualHeight(columns) {
        if (columns.length < 5) {
        var tallestcolumn = 0;
        columns.css('height', '');
        columns.each(function() {
            currentHeight = $(this).height();
            if(currentHeight > tallestcolumn) {
                tallestcolumn = currentHeight;
            }
        });
        columns.height(tallestcolumn);
        }
    }

    var columns1 = $('header .content > div');
    $(window).resize(function () {
        setEqualHeight(columns1);
    });
    $(document).ready(function () {
        setEqualHeight(columns1);
    });
    $(window).ready(function () {
        setEqualHeight(columns1);
    });
    function setEqualHeight(columns1) {
        if (columns1.length < 5) {
        var tallestcolumn1 = 0;
        columns1.css('height', '');
        columns1.each(function() {
            currentHeight1 = $(this).height();
            if(currentHeight1 > tallestcolumn1) {
                tallestcolumn1 = currentHeight1;
            }
        });
        columns1.height(tallestcolumn1);
        }
    }
/************************************* Validation Form ********************************************/
$(document).ready(function () {

    if ($('#content').val() == '') {
        $('.textareaMes p, .textareaMes ul').css('opacity', '1');
    } else {
        $('.textareaMes p, .textareaMes ul').css('opacity', '0');
    }

    var IE = '\v' == 'v';
    if (IE) {
        $('header .content .text-block h2').css('font-family', 'BebasNeueRegular');
    }
    navigator.sayswho = (function () {
        var ua = navigator.userAgent,
            tem,
            M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*([\d\.]+)/i) || [];
        if (/trident/i.test(M[1])) {
            tem = /\brv[ :]+(\d+(\.\d+)?)/g.exec(ua) || [];
            return 'IE ' + (tem[1] || '');
        }
        M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
        if ((tem = ua.match(/version\/([\.\d]+)/i)) != null) M[2] = tem[1];
        return M.join(' ');
    })();


    if (navigator.sayswho == 'IE 11.0') {
        $('header .content .text-block h2').css('font-family', 'BebasNeueRegular');
    }

    $("#subject").val('Request for developers at resume.outsoftsolutions.com');
    jQuery('form').submit(function () {
        var valid = validateContact();
        var contentURL = 'Name: ' + $("#userName").val() + '\n' + $('#content').val() + '\n' + 'URL: ' + location.href + '\n' + 'IP: ';
        var formData = {
            userName: $("#userName").val(),
            userEmail: $("#userEmail").val(),
            content: contentURL,
            cleanContent: $('#content').val(),
            titleMail: $('.hideRequestTitle').text(),
            subject: $("#subject").val(),
            the_req: $("#the_req").val(),
            the_source: $("#the_source").val()
        };
        if (valid) {
            $('.after_contact').show(100);
            jQuery.ajax({
                url: "http://resume.outsoft.com/contact-form.php",
                data: formData,
                type: "POST",
                success: function () {
                    location.href = 'http://resume.outsoftsolutions.com/thank-you.html';
                    dataLayer.push({'event': 'Send_form'});
                },
                error: function (xhr, status, error) {
                    console.log(xhr, status, error);
                }

            });

        }
        return false;
    });


    function validateContact() {
        var valid = true;
        //$(".button_click").removeAttr('disabled');
        //$(".info").html('');
        if ($("#userEmail").val() == '') {
            valid = false;
        }
        if ($("#userName").val() == '') {
            valid = false;
        }
        if ($("#content").val() == '') {
            valid = false;
        }
        return valid;
    }

    function changeInput() {
        if ($('#userName').val() != "" && $('#userEmail').val() != "" && $('#userEmail').val().indexOf("@") > -1 && $("#content").val() !== "") {
            $(".button_click").removeAttr('disabled').css('border', 'rgba(255, 255, 255, 1) !important');
        } else {
            $(".button_click").attr('disabled', true).css('border', 'rgba(255, 255, 255, 0.1) !important');
        }
    }

    $('#userEmail, #userName, #content').change(function () {
        changeInput();
    });

    $('#userName').change(function () {
        if ($('#userName').val() != "") {
            $(this).css('border-color', '#fff');
        } else {
            $(this).css('border-color', '#ff673e');
        }
    });

    $('#userEmail').change(function () {
        if ($("#userEmail").val() !== '' && $('#userEmail').val().indexOf("@") > -1) {
            $(this).css('border-color', '#fff');
        } else {
            $(this).css('border-color', '#ff673e');
        }
    });

    //Chenge input in Textarea
    function textareaKey() {
        //var countT = 100 - $('#content').val().length;
        //$('.countTextatea').html('Minimum required characters:  ' + countT).show();
        /*if (countT < 0) {
            $('.countTextatea').hide();
            $('#content').css('border-color', '#fff');
        } else {
            $('#content').css('border-color', '#ff673e');
            $(".button_click").attr('disabled', true);
        }*/
    }
    /*$('#content').change(function () {
        textareaKey();
    });*/

    /*$('#userName, #userEmail, #userPhone').click(function () {
        if ($('#content').val() == '') {
            $('.textareaMes p, .textareaMes ul').css('opacity', '1');
        }
    });
    $('#content').focus(function (event) {
        $('.textareaMes p, .textareaMes ul').css('opacity', '0');
    });*/
    $('#content').keydown(function () {
        //textareaKey();
        changeInput();
    });
    jQuery('#filters a').click(function () {
        jQuery('#filters a').removeClass('active');
        jQuery(this).addClass('active');
        var selector = jQuery(this).attr('data-filter');
        $('#portfolio-wrap').isotope({
            filter: selector
        });
        return false
    });
});