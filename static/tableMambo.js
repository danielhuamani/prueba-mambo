(function($) {

    $.fn.alerter = function(options){
        this.each( function(){
            alert(this);
        });
    }
})(jQuery);
