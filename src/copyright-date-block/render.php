<?php
    $block_props = get_block_wrapper_attributes();
    $starting_year = $attributes['startingYear'];
    $current_year = date( 'Y' );
    $company_name = $attributes['companyName'];
?>
<p <?php echo $block_props?>>
    Copyright &copy; <?php echo $starting_year?> - <?php echo $current_year; ?> <?php echo $company_name; ?> All rights reserved.
</p>