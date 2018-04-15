<?php

// ==============================================================================
// Push site header down 28px when user is logged in to avoid covering up header
// ==============================================================================

// ======================================
// SECURITY: Hide WP Version
// ======================================

function lbe_remove_version() {
  return '';
}
add_filter('the_generator', 'lbe_remove_version');

// ======================================
// Enqueue Stylesheets and Scripts
// ======================================

require get_template_directory() . '/includes/function-enqueue-stylesheets.php';

// =====================================================
// CUSTOM POST TYPE: Sales Page Copy and Admin columns
// =====================================================

require get_template_directory() . '/includes/function-cpt-salescopy.php';

// =====================================================
// CUSTOM POST TYPE: Sales Page Copy and Admin columns
// =====================================================

require get_template_directory() . '/includes/function-get-salescopy.php';

require get_template_directory() . '/includes/function-render-faq-item.php';
