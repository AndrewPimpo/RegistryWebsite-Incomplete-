<!DOCTYPE html>
<html>
    <head><title>Person Search</title></head>
    <body>
        <div class="searchbar">
            <h2>Search for a couple by name...</h2>
            <form action="name-Search.php" method="get">
                <input type="text" name="PARAMS"/> <br />
        </div>
        <div class="search_res_section">
            <?php foreach("item" in "searchresult"): ?>
                <div class="result_item"> 
                <!--FOR CSS: Give padding, height, and background color items for general. Add set img size for images. Adjust h1, p, and a to match within div-->
                    <img src="<?php POST['IMG LINK'];?>" alt="couple image"/>
                    <h1><a href="<?php POST['DONOR ID LINK']; ?>">NAME of COUPLE</a></h1>
                    <br />
                    <p>MARRIAGE DATE: <?php POST['mDATE']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>