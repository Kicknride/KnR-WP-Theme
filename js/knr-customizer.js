/**
 * Customizer custom js
 */

jQuery(document).ready(function() {
   jQuery('.wp-full-overlay-sidebar-content').prepend('<div class="knr-ads"> <a href="http://oceanwebthemes.com/webthemes/knr-plus-premium-wordpress-theme/" class="button" target="_blank">{pro}</a></div>'.replace('{pro}',knr_customizer_js_obj.pro));
});