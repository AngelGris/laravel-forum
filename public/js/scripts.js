function initWYSIWYG(selector) {
    tinymce.init({
        branding : false,
        height : 300,
        menu : {},
        plugins : ['link', 'media'],
        selector : selector,
        toolbar : 'undo redo | bold italic underline strikethrough subscript superscript | link media',
    });
}