require('./bootstrap');


/** initial tinymce */
tinymce.init({
    selector:'textarea:not(".default")',
    plugins: ['paste', 'link', 'image', 'imagetools', 'preview', 'autoresize', 'code', 'wordcount', 'emoticons'],
    tollbar: 'code',
    autoresize_bottom_margin: 50,
    // height: 620,
    max_height: 1000, 
});

import './admin/blog';
import './admin/actions';