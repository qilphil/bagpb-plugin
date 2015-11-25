(function ($) {
    'use strict';
    var lang_de = {
        "sEmptyTable": "Keine Daten in der Tabelle vorhanden",
        "sInfo": "_START_ bis _END_ von _TOTAL_ Einträgen",
        "sInfoEmpty": "0 bis 0 von 0 Einträgen",
        "sInfoFiltered": "(gefiltert von _MAX_ Einträgen)",
        "sInfoPostFix": "",
        "sInfoThousands": ".",
        "sLengthMenu": "_MENU_ Einträge anzeigen",
        "sLoadingRecords": "Wird geladen...",
        "sProcessing": "Bitte warten...",
        "sSearch": "Suchen",
        "sZeroRecords": "Keine Einträge vorhanden.",
        "oPaginate": {
            "sFirst": "Erste",
            "sPrevious": "Zurück",
            "sNext": "Nächste",
            "sLast": "Letzte"
        },
        "oAria": {
            "sSortAscending": ": aktivieren, um Spalte aufsteigend zu sortieren",
            "sSortDescending": ": aktivieren, um Spalte absteigend zu sortieren"
        }
    };
    var dbTable = $('#bagdbTable').DataTable({
        data: contactData,
        "language": lang_de,
        'columns': [
            {width: 15, 'title': 'ID', 'name': 'id', 'data': 'id', className: 'colId'},
            {'title': 'Name', 'name': 'Name', 'data': 'Name'},
            {width: 30, 'title': 'PLZ', 'name': 'PLZ', 'data': 'PLZ'},
            {'title': 'Ort', 'name': 'Ort', 'data': 'Ort'},
            {'title': 'Email', 'name': 'Email', 'data': 'Email', 'render': function (data) {
                    return "<a href='mailto:" + data + "'>" + data + "</a>";
                }}
        ]
    });
    var dataDict = {};
    $.each(contactData, function (index, row) {
        dataDict["id" + row.id] = row;
    });

    function getContact(id) {
        return dataDict["id" + id];
    }
    var singleView = $('#bagSingle');
    var clickHandler = function (data) {
        var colId = $(this).find('.colId').html();
        var contact = getContact(colId);
        singleView.show();
        $('#bagdbTable tr').removeClass("highlight");
        $(this).addClass("highlight");
        setData(singleView, contact);
    };
    function setData(view, contact) {
        $.each(contact, function (name, value) {
            var dRow = $(view.find("#dr" + name));
            if (value) {

                if (name === "Email" || name === "Email2") {
                    value = "<a href='mailto:" + value + "'>" + value + "</a>";
                }
                dRow.show().find(".bagDataValue").html(value);
            } else {
                dRow.hide();
            }
            ;

        })
    }
    singleView.hide();
    $('#bagdbTable tr').on('click', clickHandler);
    /**
     * All of the code for your public-facing JavaScript source
     * should reside in this file.
     *
     * Note: It has been assumed you will write jQuery code here, so the
     * $ function reference has been prepared for usage within the scope
     * of this function.
     *
     * This enables you to define handlers, for when the DOM is ready:
     *
     * $(function() {
     *
     * });
     *
     * When the window is loaded:
     *
     * $( window ).load(function() {
     *
     * });
     *
     * ...and/or other possibilities.
     *
     * Ideally, it is not considered best practise to attach more than a
     * single DOM-ready or window-load handler for a particular page.
     * Although scripts in the WordPress core, Plugins and Themes may be
     * practising this, we should strive to set a better example in our own work.
     */

})(jQuery);
