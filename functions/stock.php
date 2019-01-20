<span>
<div class="alert alert-<?= ($obj->in_stock > 0) ? 'success' : 'danger';?>" style="margin-left:0px !important;">
    <?php 
    if($obj->in_stock <= 0){
        echo 'out of stock';
    } else{
        if($obj->in_stock > 100){
            echo "in stock (100+)";
        } else {
            echo 'in stock ('.$obj->in_stock.')';
        }
    }
    ?>
</div>
</span>