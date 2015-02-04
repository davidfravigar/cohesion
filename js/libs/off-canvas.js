/**
 * ----------------------------------------------------------------------
 * Off Canvas Navigation
 * ----------------------------------------------------------------------
 *
 * Site Name:
 * Author:
 * Company:
 * Version: 0.0.1
 *
 * TO DO
 * Use jQuery to do the toggling
 * Use jQuery to remove classes on window resize
 *
 * with fall back to Classie.js
 *
 * ----------------------------------------------------------------------
*/

var menuLeft = document.getElementById('site-menu-left'),
		menuLeftPush = document.getElementById('menuPushLeft'),
		menuBar = document.getElementById('responsive-menubar'),
		container = document.getElementById('site-content'),
		body = document.body;

menuShowLeft.onclick = function() {
	classie.toggle(this, 'active');
	classie.toggle( menuLeft, 'offcanvas-menu-open');
	//disable
}

menuPushLeft.onclick = function() {
	classie.toggle(this, 'active');
	classie.toggle(body, 'push-to-right');
	classie.toggle(menuBar, 'push-to-right');
	classie.toggle(menuLeft, 'offcanvas-menu-open');
}