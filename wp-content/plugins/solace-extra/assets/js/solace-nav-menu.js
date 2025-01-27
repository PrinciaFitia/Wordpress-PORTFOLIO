( function ($) {
    $('.solace-elementor-menu-toggle').click(function() {
        $(this).toggleClass('elementor-active');
        
        // Get current value of 'aria-expanded' and toggle it
        const isExpanded = $(this).attr('aria-expanded') === 'true';
        $(this).attr('aria-expanded', !isExpanded); // Set to opposite value
    });

    // Open submenu.
    $('.elementor-widget-solace-extra-nav-menu .solace-elementor-nav-menu--dropdown .menu-item-has-children > .sub-arrow').click(function(event) {
        // Prevent default action for the anchor tag
        // event.preventDefault();
        
        // Stop event propagation to prevent affecting other nested items
        // event.stopPropagation();

        // Select the parent element with the class .menu-item-has-children
        var $parentItem = $(this).parent();

        // Close any open submenu on the same level by removing 'active' class from siblings
        $parentItem.siblings('.menu-item-has-children').removeClass('active');
        
        // Toggle 'active' class on the clicked item to open/close the submenu
        $parentItem.toggleClass('active');
    });
   
} )( jQuery );
