$().ready(function() {
        $('li').on('click', function(e) {
            e.stopPropagation();
            $(this).toggleClass('selected');
        });
        var ns = $('ol.sortable, ol.moved').nestedSortable({

            connectWith: 'ol.moved, ol.sortable',

            forcePlaceholderSize: true,
            handle: 'div',
            helper: function(e, item) {
                console.log('parent-helper');
                console.log(item);
                if (!item.hasClass('selected'))
                    item.addClass('selected');
                var elements = $('.selected').not('.ui-sortable-placeholder').clone();
                var helper = $('<ul/>');
                item.siblings('.selected').addClass('hidden');
                return helper.append(elements);
            },
            start: function(e, ui) {
                var elements = ui.item.siblings('.selected.hidden').not('.ui-sortable-placeholder');
                ui.item.data('items', elements);
            },
            receive: function(e, ui) {
                ui.item.before(ui.item.data('items'));
            },
            stop: function(e, ui) {
                ui.item.siblings('.selected').removeClass('hidden');
                $('.selected').removeClass('selected');
            },
            items: 'li',
            opacity: .6,
            placeholder: 'placeholder',
            revert: 250,
            tabSize: 25,
            tolerance: 'pointer',
            toleranceElement: '> div',
            maxLevels: 4,
            isTree: true,
            expandOnHover: 700,
            startCollapsed: false,
            change: function() {
                console.log('Relocated item');
            }
        });

        $('.expandEditor').attr('title', 'Click to show/hide item editor');
        $('.disclose').attr('title', 'Click to show/hide children');
        $('.deleteMenu').attr('title', 'Click to delete item.');

        $('.disclose').on('click', function() {
            $(this).closest('li').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');
            $(this).toggleClass('ui-icon-plusthick').toggleClass('ui-icon-minusthick');
        });

        $('.expandEditor, .itemTitle').click(function() {
            var id = $(this).attr('data-id');
            $('#menuEdit' + id).toggle();
            $(this).toggleClass('ui-icon-triangle-1-n').toggleClass('ui-icon-triangle-1-s');
        });

        $('.deleteMenu').click(function() {
            var id = $(this).attr('data-id');
            $('#menuItem_' + id).remove();
        });

        $('#serialize').click(function() {
            serialized = $('ol.moved').nestedSortable('serialize');
            $('#serializeOutput').text(serialized + '\n\n');
        })

        $('#toHierarchy').click(function(e) {
            hiered = $('ol.moved').nestedSortable('toHierarchy', {
                startDepthCount: 0
            });
            hiered = dump(hiered);
            (typeof($('#toHierarchyOutput')[0].textContent) != 'undefined') ?
            $('#toHierarchyOutput')[0].textContent = hiered: $('#toHierarchyOutput')[0].innerText = hiered;
        })

        $('#toArray').click(function(e) {
            arraied = $('ol.moved').nestedSortable('toArray', {
                startDepthCount: 0
            });
            arraied = dump(arraied);
            (typeof($('#toArrayOutput')[0].textContent) != 'undefined') ?
            $('#toArrayOutput')[0].textContent = arraied: $('#toArrayOutput')[0].innerText = arraied;
        });
    });

    function dump(arr, level) {
        var dumped_text = "";
        if (!level) level = 0;

        //The padding given at the beginning of the line.
        var level_padding = "";
        for (var j = 0; j < level + 1; j++) level_padding += "    ";

        if (typeof(arr) == 'object') { //Array/Hashes/Objects
            for (var item in arr) {
                var value = arr[item];

                if (typeof(value) == 'object') { //If it is an array,
                    dumped_text += level_padding + "'" + item + "' ...\n";
                    dumped_text += dump(value, level + 1);
                } else {
                    dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
                }
            }
        } else { //Strings/Chars/Numbers etc.
            dumped_text = "===>" + arr + "<===(" + typeof(arr) + ")";
        }
        return dumped_text;
    }

(function($) {
	
	
    "use strict";

    $(".sortable").sortable({
        placeholder: "list-group-item list-group-item-placeholder"
    });
    $(".sortable").disableSelection();

    $('ol.list-ns').nestedSortable({
        forcePlaceholderSize: true,
        handle: 'div',
        helper: 'clone',
        items: 'li',
        opacity: .7,
        placeholder: 'list-ns-placeholder',
        tabSize: 25,
        tolerance: 'pointer',
        toleranceElement: '> div',
        maxLevels: 3,
        branchClass: 'list-ns-branch',
        collapsedClass: 'list-ns-collapsed',
        disableNestingClass: 'list-ns-no-nesting',
        errorClass: 'list-ns-error',
        expandedClass: 'list-ns-expanded',
        hoveringClass: 'list-ns-hovering',
        leafClass: 'list-ns-leaf',
        disabledClass: 'list-ns-disabled',
        isTree: true,
        expandOnHover: 700,
        startCollapsed: true
    });

    $('ol.list-ns-1').nestedSortable({
        forcePlaceholderSize: true,
        handle: 'span.list-ns-handler',
        helper: 'clone',
        items: 'li',
        opacity: .7,
        placeholder: 'list-ns-placeholder',
        tabSize: 25,
        tolerance: 'pointer',
        toleranceElement: '> div',
        maxLevels: 3,
        branchClass: 'list-ns-branch',
        collapsedClass: 'list-ns-collapsed',
        disableNestingClass: 'list-ns-no-nesting',
        errorClass: 'list-ns-error',
        expandedClass: 'list-ns-expanded',
        hoveringClass: 'list-ns-hovering',
        leafClass: 'list-ns-leaf',
        disabledClass: 'list-ns-disabled',
        isTree: true,
        expandOnHover: 700,
        startCollapsed: true
    });

    $('.disclose').on('click', function() {
        $(this).closest('li').toggleClass('list-ns-collapsed').toggleClass('list-ns-expanded');
    });

})(jQuery);