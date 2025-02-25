<?php
$args = wp_parse_args($args, array(
  'ads' => array(),
  'posicion' => 0
));

$items = $args['ads'];
$posicion = $args['posicion'] - 1;

if (!empty($items) && isset($items[$posicion]['ads'])) { ?>
  <div class="container text-center my-50">
    <?php echo $items[$posicion]['ads']; ?>
  </div>
<?php }
?>