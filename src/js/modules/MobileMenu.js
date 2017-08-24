var $ = require("jquery");
        
function MobileMenu() {
    var $mainMenu = $(".main-menu");
    var $menuIcon = $(".menu-icon");

    $menuIcon.on("click", toggleMenu);

    function toggleMenu() {
        $mainMenu.toggleClass("main-menu--shown");
        $menuIcon.toggleClass("menu-icon--close-x");
    }
}

module.exports = new MobileMenu;