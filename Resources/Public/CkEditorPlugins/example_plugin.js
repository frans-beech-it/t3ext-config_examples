'use strict';

(function () {

    CKEDITOR.plugins.add('example_plugin', {
        icons: 'exampleplugin',
        init: function (editor) {
            editor.ui.addButton( 'ExamplePlugin', {
                label: 'My button',
                toolbar: 'basicstyles',
                command: 'openExampleModal'
            });

            editor.addCommand( 'openExampleModal', {
                exec: openModal
            });
        }
    });

    function openModal(editor) {
        var selection = editor.getSelection(),
            content = 'No text selected';

        require([
            'TYPO3/CMS/Backend/Modal'
        ], function (Modal) {

            if (selection && selection.getSelectedText()) {
                content = '<em>Remove:</em> ' + selection.getSelectedText();
                Modal.confirm(
                    'Example plugin',
                    content
                ).on('confirm.button.cancel', function () {
                    Modal.dismiss();
                }).on('confirm.button.ok', function () {
                    var range = editor.getSelection().getRanges()[0];
                    range.deleteContents();
                    range.select();
                    Modal.dismiss();
                });

            } else {
                Modal.show(
                    'Example plugin',
                    content
                );
            }

        });
    }

})();