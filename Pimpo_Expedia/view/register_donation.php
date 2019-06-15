<!DOCTYPE html>
<html>
    <?php include('..\controller\variables.php');
    include($header_view);?>
    
    <head><title>Make Donation</title></head>
    <body>
        <h2>Make a Donation to <?php $coupleName ?> for <?php $cruise_item?></h2>
        <!--Maybe inclue a quick recap of what that item is and the pic?-->
        <!--Donation form begin-->
        <!--CSS: Make standard h3 and input styles for <form>-->
        <form action="make_donation.php" method="post">
        <h3>E-mail: <h3>
            <input type="text" name="Email"/><br />
        <h3>Phone: <h3>
            <input type="text" name="Phone"/><br />
        <h3>First Name: <h3>
            <input type="text" name="Name"/><br />
        <h3>Donation Amount: <h3>
            <input type="text" name="donation"/><br />
            <input type="submit" name="Proceed to PayPal" value="???"/>
    </body>
</html>
