<form action="." method="post" style="display: inline;">
    <button name="slot" value="<?php echo $slot->pl.":".$slot->pc; ?>" style="background-color: rgb(25, 116, 158); width:30px ; height: 30px ; vertical-align:top;">
        
        <?php if($slot->hidden) { ?>
            <img src="assets/P.png" width="20px" height="20px">
        <?php } else if($slot->bomb) { ?>
            <img src="assets/bomb.png" width="20px" height="20px">

        <?php } else { ?>

            <?php echo $slot->n; ?>

        <?php } ?>


    </button>
</form>
