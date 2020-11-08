;
(function($,Themify){
	'use strict';

            var $body = $('body');

            if($body.hasClass('fixed-header-enabled')){
                    Themify.FixedHeader();
            }
            /////////////////////////////////////////////
            // Scroll to top 							
            /////////////////////////////////////////////
            $('.back-top a').on('click',function (e) {
                    e.preventDefault();
                    Themify.scrollTo();
            });

            if( Themify.isTouch) {
                Themify.loadDropDown($( '#main-nav' ));
            }

            Themify.sideMenu($('#menu-icon'),{
                    close: '#menu-icon-close',
                    side: 'left'
            });

            Themify.edgeMenu();

})(jQuery,Themify);
