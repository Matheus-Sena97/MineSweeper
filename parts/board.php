<form action="." method="post" style="display: inline;">
    <?php
        $color = $slot->hidden ? 'rgb(25, 116, 158)' : 'rgb(193, 236, 255)';
    ?>
    <button name="slot" value="<?php echo $slot->pl.":".$slot->pc; ?>" style="background-color: <?php echo $color; ?>; width:30px ; height: 30px ; vertical-align:top;">
        
        <?php if($slot->hidden) { ?>
            <img src="assets/P.png" width="20px" height="20px">
        <?php } else if($slot->bomb) { ?>
            <img src="assets/bomb.png" width="20px" height="20px">

        <?php } else { ?>

            <?php echo $slot->n == 0 ? '' : $slot->n; ?>

        <?php } ?>


    </button>
</form>
