<span>
	<?php 
    $rating = $obj->rating;

    if($rating < 1){
        echo "<i class='fas fa-star-half-alt'></i>";  
    }
    
    for($i = 0; $i <= ($rating - 1); $i++){
        echo "<i class='fas fa-star'></i>";
        
        if(($i + 1.5) == $rating){
            echo "<i class='fas fa-star-half-alt'></i>";
        }
    }

    if((5 - $rating) != 0){
        for($i = 1; $i <= (5 - $rating); $i++){
            echo "<i class='far fa-star'></i>";
        }
    }
    ?>
</span>