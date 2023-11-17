function init() {

    menuReplaceInContainer();
}


function menuReplaceInContainer() {
    const headerLocation = jQuery('#lc-header .site-header .container .row .container-right .container-right-menu-dynamic');
    const headerMenu = jQuery('body>.container-element-dynamic .menu-primarymenu-container');
    jQuery(headerLocation).append(headerMenu);
}


jQuery(document).ready(init);