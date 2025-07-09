// スクロール
if($('body.home').size()){

	var target = $('<div class="js-slide"></div>');
	$('body').append(target);

	target.ready(function() {
		$('#scrollslide1').delay(400).each( function(i){
			$(this).delay(60 * i).velocity({ top: 0, opacity: 1.0 }, { duration: 600, easing: 'easeInOutQuart', complete: function(elements) {
			}});
		});

		$('#scrollslide2').delay(400).each( function(i){
			$(this).delay(60 * i).velocity({ bottom: 0, opacity: 1.0 }, { duration: 600, easing: 'easeInOutQuart', complete: function(elements) {

			}});
		});
    $("#scrollslide1").simplyScroll({
       className:'vert',
       horizontal:false,
       frameRate:60,
       pauseOnHover: false,
       speed:1
    });
    $("#scrollslide2").simplyScroll({
       className:'vert',
       horizontal:false,
       direction: 'backwards',
       frameRate:60,
       pauseOnHover: false,
       speed:1
    });
	});
};

// スクロールトップ
$(function() {
  var topBtn = $('#page-top');
  topBtn.hide();
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });
  topBtn.click(function() {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
});



// ページ内スクロール ここから
$(function() {
    $('a[href^=#]').click(function() {
        var speed = 400;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - 100;
        $('html,body').animate({
            scrollTop: position
        }, speed, 'swing');
        return false;
    });
});




// PC SP画像切り替え ここから
$(function() {
    var $elem = $('.switch');
    var sp = '_sp.';
    var pc = '_pc.';
    var replaceWidth = 640;

    function imageSwitch() {
        var windowWidth = parseInt($(window).width());
        $elem.each(function() {
            var $this = $(this);
            if (windowWidth >= replaceWidth) {
                $this.attr('src', $this.attr('src').replace(sp, pc));
            } else {
                $this.attr('src', $this.attr('src').replace(pc, sp));
            }
        });
    }
    imageSwitch();

    var resizeTimer;
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            imageSwitch();
        }, 200);
    });
});


// アニメーションエフェクト
$(function() {
    $('.fadebox').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {
            $(this).stop().addClass('fadeInUp');
        }
    });
});
