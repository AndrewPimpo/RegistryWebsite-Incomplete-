<!DOCTYPE html>
<html>
    <head><title>View Couple</title></head>
    <body>
        <div class="viewCoup_descript">
            <!--CSS: Give background color, padding and IMG settings-->
            <img src="<?php POST['IMG LINK'];?>" alt="couple image"/>
            <h1><a href="<?php POST['DONOR ID LINK']; ?>">NAME of COUPLE</a></h1>
            <br />
            <p><strong>MARRIAGE DATE: <?php POST['mDATE']; ?></strong></p>
            <p>Description of the couple and stuff...</p>
            <h3>LIST FUNDING STATS (PHP):</h3>
            <h4>Goal</h4>
            <h4>Current total</h4>
            <h4>Balance</h4>
        </div>
        <!--Add some divider space-->
        <h2>Items on Cruise</h2>
        <div class="viewCoup_items">
        <!--CSS: Block formatting and padding to give a list view-->
            <?php foreach("item" in "result count from SQL table"): ?>
                <h3><?php POST['item name']; ?></h3>
                <h4><?php POST['item descript']; ?></h4>
                <h4><?php POST['BALANCE']; ?></h4>
                <input type="submit" name="Donate" value="???" />
            <?php end foreach;?>
        </div>
    </body>
</html>
