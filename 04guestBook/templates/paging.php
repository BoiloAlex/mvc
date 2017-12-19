<?php
/*
  * input:
  *  items: list of items
  *  prev : true/false = show/hide
  *  next : true/false = show/hide
  *  active: number active page
  *  last: last page in paging
  *  pages: number all pages
  *  item_per_page: item per page
  * */
/*##*/
$active = (isset($active)) ? $active : 1;

$item_per_page = 5;
$last          = floor(count($result) / $item_per_page) + 1;
if (count($result) < $item_per_page) {
    return '--'; // no paging
}
if ($active < 0) {
    return 'error';
}
if ($active > $last) {
    return 'error';
}

$prev = ($active > 1) ? $active - 1 : false;
$next = ($active < $last) ? $active +1 : false;

$page_list = array();
?>

<ul class="paging">
    <?php if ($prev): ?>
        <li><a href="<?php echo '?page='.$prev ?>">prev</a></li>
    <?php endif; ?>
    <?php for ($counter = 0; $counter < count($result); $counter = $counter + $item_per_page): ?>
        <?php $page_number =  $counter / $item_per_page + 1; ?>
        <?php if ($page_number  != $active): ?>
            <li><a href="<?php echo '?page='.$page_number  ?>"><?php echo $page_number  ?></a></li>
        <?php else: ?>
            <?php $page_list = array_slice($result, $counter,$item_per_page);?>
            <li class="active"><span><?php echo $page_number  ?></span></li>
        <?php endif;?>
    <?php endfor; ?>
    <?php if ($next): ?>
        <li><a href="<?php echo '?page='.$next ?>">next</a></li>
    <?php endif; ?>
</ul>
