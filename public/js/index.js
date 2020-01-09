"use strict";

// Class Definition
var Master = (function() {
    var login = $("#kt_login");
    return {
        // public functions
        init: function() {
            $(".kt-selectpicker").selectpicker();
        }
    };
})();

// Class Initialization
jQuery(document).ready(function() {
    Master.init();
});
