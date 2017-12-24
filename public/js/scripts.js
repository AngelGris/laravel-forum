function initWYSIWYG(selector) {
    $(selector).froalaEditor({
        height : 300,
        width : '85%',
        toolbarButtons : ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|', 'color', '|', 'formatOL', 'formatUL', 'outdent', 'indent', 'quote', '-', 'insertLink', 'insertImage', 'insertVideo', '|', 'emoticons', 'insertHR', 'selectAll', 'clearFormatting', '|', 'undo', 'redo'],
    });
}