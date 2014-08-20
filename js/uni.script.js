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
	}

	snp_app.navigation($('#snp-navbtn'), $('#snp-navblk'));

});