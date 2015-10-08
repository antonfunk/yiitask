/**
 * Created by afunk on 08.10.2015.
 */

$(document).ready(function () {




    if (!CKEDITOR.instances['Article_teaser']) {
        CKEDITOR.replace('Article_teaser');
    }

    if (!CKEDITOR.instances['Article_text']) {
        CKEDITOR.replace('Article_text');
    }



});
