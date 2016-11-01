(function($) {

    $.fn.tableMambo = function(){


        this.each( function(){
        	var head = {"key_name":[]};
        	var table_tr = $(this).find('thead tr td')
        	$.each(table_tr, function(index, val) {
        		 /* iterate through array or object */
        		 head.key_name.push($(this).attr('data-td'));
        	});

        });
    }
   /* $.fn.tableMambo.default = {
        inicial_str : "Mensaje: "
        final_str : "."
    };*/

})(jQuery);
