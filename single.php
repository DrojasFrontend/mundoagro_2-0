<?php
$post = $wp_query->post;

if (is_singular('courses')) { 
    include(TEMPLATEPATH . '/single-course.php'); 
} elseif (in_category('editorial')) { 
    include(TEMPLATEPATH . '/single-editorial.php'); 
} else { 
    include(TEMPLATEPATH . '/single-all.php'); 
}
?>
