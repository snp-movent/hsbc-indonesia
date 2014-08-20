$( document ).ready(function() {
	var snp_app = {
		navigation:function(btn, blk){
			if (!$(btn).length) {
				return;
			}

			$(btn).click(function(){
				$(this).toggleClass("expanded");
				$(blk).toggleClass("blk-hidden");
			});

		}
		, faqtoggle: function (el) {
			 if (!$(el).length) {
				return;
			}

			$(el).each(function() {
				$(this).click(function(e) {
					e.preventDefault();
					$(this).parent('.faq-question').siblings().children('div').removeClass('opened');
					$(this).parent('.faq-question').siblings().children('a').children('span').removeClass('spin');
					$(this).children('span').toggleClass('spin')
					$(this).siblings('div').toggleClass('opened');
				});
			});
		}
	}

	snp_app.navigation($('#snp-navbtn'), $('#snp-navblk'));
	snp_app.faqtoggle($('.faq-question a'));

	


});