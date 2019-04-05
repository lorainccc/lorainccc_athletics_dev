/**
 * 
 *	Checking for mobile screen size, alter top menu to function for mobile.
 * 
 * 
 */

jQuery(document).ready(function( $ ){
	if ($(window).width() < 450 ){
		$('#menu-primary-menu').removeClass('dropdown menu');
		$('#menu-primary-menu').wrap("<div class='is-drilldown' style='min-height: 175px; max-width: 400;px;'></div>");
		$('#menu-primary-menu').wrap("<ul id='mobile-menu' class='vertical menu' data-drilldown data-parent-link='true' role='menubar'></ul>");
		$('#menu-primary-menu').addClass('vertical menu');
		$('#menu-primary-menu').removeAttr('data-dropdown-menu');
		$('#menu-primary-menu').removeAttr('role');
		$('ul#menu-primary-menu').removeClass('opens-right');
		$('.first-sub').removeClass('first-sub');
		$('ul#menu-primary-menu li').removeAttr('id');
		$('.is-dropdown-submenu-parent').addClass('is-drilldown-submenu-parent').removeClass('is-dropdown-submenu-parent opens-right');
		$('.is-dropdown-submenu-item').addClass('is-submenu-parent-item is-drilldown-submenu-item').removeClass('is-dropdown-submenu-item');
		$('.is-dropdown-submenu').addClass('is-drilldown-submenu').removeClass('is-dropdown-submenu');
		$('#responsive-menu').append("<ul id='mobile-menu' class='vertical menu'></ul>")
		$('#menu-header-menu').children().clone().appendTo('#mobile-menu');
	}

 });