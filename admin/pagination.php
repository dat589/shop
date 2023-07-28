
<?php
if ($current_page > 1) {
    $first_page = 1; ?>
    <a class="page_item" href="?per_page=<?= $item_page ?>&page=<?= $first_page ?>">First</a>
    <a class="page_item" href="?per_page=<?= $item_page ?>&page=<?= $current_page - 1 ?>">Pre</a>
<?php } else { ?>
    <a class="page_item" href="?per_page=<?= $item_page ?>&page=<?= $current_page ?>">Pre</a>
<?php } ?>


<!-- Danh trang -->
<?php if($totalPage < 6){
    for ($i = 1; $i <= $totalPage; $i++) {
        if ($current_page != $i) { ?>
            <a class="page_item" href="?per_page=<?= $item_page ?>&page=<?= $i ?>"><?= $i ?></a>
        <?php }
        else { ?>
            <a class="page_item current_page" href="?per_page=<?= $item_page ?>&page=<?= $i ?>"><?= $i ?></a>
        <?php }
    }
}else{
    switch($current_page){
        case 1:
        case 2:
        case 3:
            for($i=1; $i<=5; $i++){
                if ($current_page != $i) { ?>
                    <a class="page_item" href="?per_page=<?= $item_page ?>&page=<?= $i ?>"><?= $i ?></a>
                <?php }
                else { ?>
                    <a class="page_item current_page" href="?per_page=<?= $item_page ?>&page=<?= $i ?>"><?= $i ?></a>
                <?php }
            }
            break;
        case $totalPage-2:
        case $totalPage-1:
        case $totalPage:
            for($i=$totalPage-4; $i<=$totalPage; $i++){
                if ($current_page != $i) { ?>
                    <a class="page_item" href="?per_page=<?= $item_page ?>&page=<?= $i ?>"><?= $i ?></a>
                <?php }
                else { ?>
                    <a class="page_item current_page" href="?per_page=<?= $item_page ?>&page=<?= $i ?>"><?= $i ?></a>
                <?php }
            }
            break;
        default:
            for($i=2; $i<=$totalPage-1; $i++){
                if($current_page>$i-3 && $current_page<$i+3){
                    if ($current_page != $i) { ?>
                        <a class="page_item" href="?per_page=<?= $item_page ?>&page=<?= $i ?>"><?= $i ?></a>
                    <?php }
                    else { ?>
                        <a class="page_item current_page" href="?per_page=<?= $item_page ?>&page=<?= $i ?>"><?= $i ?></a>
                    <?php }
                }
            }       
    }
} ?>


<!-- Cuoi trang -->
<?php
if ($current_page < $totalPage) {
    $last_page = $totalPage; ?>
    <a class="page_item" href="?per_page=<?= $item_page ?>&page=<?= $current_page + 1 ?>">Next</a>
    <a class="page_item" href="?per_page=<?= $item_page ?>&page=<?= $last_page ?>">Last</a>
<?php } else { ?>
    <a class="page_item" href="?per_page=<?= $item_page ?>&page=<?= $current_page ?>">Next</a>
<?php } ?>