jQuery(document).ready(function () {
    jQuery(window).load(function () {
        jQuery('.method_heading').click(function () {
            jQuery(this).toggleClass('method-less');
            jQuery(this).parent().toggleClass('method-all');
        });
    })
})