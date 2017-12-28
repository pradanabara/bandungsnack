/*

 *  Document   : tablesDatatables.js

 *  Author     : pixelcave

 *  Description: Custom javascript code used in Tables Datatables page

 */



var TablesDatatables = function() {



    return {

        

        init: function() {

            /* Initialize Bootstrap Datatables Integration */

            App.datatables();



            /* Initialize Datatables */

            $('#example-datatable').dataTable({

                "aoColumnDefs": [ { "bSortable": true, "aTargets": [ 1, 6 ] } ],

                "iDisplayLength": 10,

                "aLengthMenu": [[10, 20, 30, -1], [10, 20, 30, "All"]],



                "ajax": window.location.protocol + "//" + window.location.host + "/Seller/data_seller",

                            "columns": 

                                [

                                    {"data":"no"},

                                    {"data":"id_seller"},

                                    {"data":"seller_name"},

                                    {"data":"contact"},
                                    {"data":"email"},

                                    {"data":"address"},

                                    {"data":"flag"},

                                    {"data":"link"}

                                ],



            });

            

            /* Add placeholder attribute to the search input */

            $('.dataTables_filter input').attr('placeholder', 'Search');

        }

    };

}();