"use strict";
var KTDatatablesBasicBasic = (function() {
    var initTable1 = function() {
        var table = $("#kt_table_1");

        // begin first table
        table.DataTable({
            responsive: true,

            // DOM Layout settings
            dom: `<'row'<'col-sm-12'tr>>
			<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,

            lengthMenu: [5, 10, 25, 50],

            pageLength: 10,

            language: {
                lengthMenu: "Display _MENU_"
            },

            // Order settings
            order: [[1, "desc"]],
            columnDefs: [
                // {
                //     targets: -1,
                //     title: "Actions",
                //     orderable: false,
                //     render: function(data, type, full, meta) {
                //         console.log(data,type,full,meta)
                //         return `
                //         <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                //           <i class="la la-eye"></i>
				// 		</a>
				// 			<a href="{{route('serviceType.edit)}}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit">
				// 			<i class="la la-edit"></i>
				// 	  	</a>
				// 	  	<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
				// 	  		<i class="la la-trash"></i>
				// 		</a>`;
                //     }
                // },
                {
                    targets: 2,
                    render: function(data, type, full, meta) {
                        var status = {
                            1: { title: "Pending", class: "kt-badge--brand" },
                            2: {
                                title: "Delivered",
                                class: " kt-badge--danger"
                            },
                            3: {
                                title: "Canceled",
                                class: " kt-badge--primary"
                            },
                            4: {
                                title: "Success",
                                class: " kt-badge--success"
                            },
                            5: { title: "Info", class: " kt-badge--info" },
                            6: { title: "Danger", class: " kt-badge--danger" },
                            7: { title: "Warning", class: " kt-badge--warning" }
                        };
                        if (typeof status[data] === "undefined") {
                            return data;
                        }
                        return (
                            '<span class="kt-badge ' +
                            status[data].class +
                            ' kt-badge--inline kt-badge--pill">' +
                            status[data].title +
                            "</span>"
                        );
                    }
                },
                {
                    targets: 3,
                    render: function(data, type, full, meta) {
                        var status = {
                            1: { title: "Online", state: "danger" },
                            2: { title: "Retail", state: "primary" },
                            3: { title: "Direct", state: "success" }
                        };
                        if (typeof status[data] === "undefined") {
                            return data;
                        }
                        return (
                            '<span class="kt-badge kt-badge--' +
                            status[data].state +
                            ' kt-badge--dot"></span>&nbsp;' +
                            '<span class="kt-font-bold kt-font-' +
                            status[data].state +
                            '">' +
                            status[data].title +
                            "</span>"
                        );
                    }
                }
            ]
        });

        table.on("change", ".kt-group-checkable", function() {
            var set = $(this)
                .closest("table")
                .find("td:first-child .kt-checkable");
            var checked = $(this).is(":checked");

            $(set).each(function() {
                if (checked) {
                    $(this).prop("checked", true);
                    $(this)
                        .closest("tr")
                        .addClass("active");
                } else {
                    $(this).prop("checked", false);
                    $(this)
                        .closest("tr")
                        .removeClass("active");
                }
            });
        });

        table.on("change", "tbody tr .kt-checkbox", function() {
            $(this)
                .parents("tr")
                .toggleClass("active");
        });
    };

    return {
        //main function to initiate the module
        init: function() {
            initTable1();
        }
    };
})();

jQuery(document).ready(function() {
    KTDatatablesBasicBasic.init();
});
