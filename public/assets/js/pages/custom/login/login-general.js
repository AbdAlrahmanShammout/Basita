"use strict";

// Class Definition
var KTLoginGeneral = (function() {
    var arrows = {
        leftArrow: '<i class="la la-angle-left"></i>',
        rightArrow: '<i class="la la-angle-right"></i>'
    };

    // Public Functions
    return {
        // public functions
        init: function() {
            $(".kt-selectpicker").selectpicker();
            $("#birth_datepicker").datepicker({
                todayHighlight: true,
                orientation: "bottom left",
                templates: arrows
            });
        }
    };
})();

// Class Initialization
jQuery(document).ready(function() {
    KTLoginGeneral.init();
});
