<?php
$user_id = 1;
$meta_key_first_name = 'first_name';
$meta_key_last_name = 'last_name';
$meta_value_first_name = get_user_meta($user_id, $meta_key_first_name, true);
$meta_value_last_name = get_user_meta($user_id, $meta_key_last_name, true);
?>
<p>&copy <?php echo $meta_value_first_name . ' ' . $meta_value_last_name ?></p>
