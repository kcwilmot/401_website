<hr>
<div id="footer">
    <div id="footer-left">
        <a href="/contact.php"> Contact Info </a>
        <li class="footer-socials">
            <a href="https://www.facebook.com/biteycatcustoms/"> Facebook </a>
        </li>
        <li class="footer-socials">
            <a href="https://www.instagram.com/biteycatcustoms/?hl=en"> Instagram </a>
        </li>
        <li class="footer-socials">
            <a href="https://www.etsy.com/shop/BiteyCatCustoms"> Etsy </a>
        </li>
    </div>
    <div id="footer-right">
        <li class="footer-accounts">
            <a href="/orderhistory.php"> Order History </a>
        </li>
        <li class="footer-accounts">
            <a href="/trackpkg.php"> Track Package </a>
        </li>
        <li class="footer-accounts">
            <a href="/myaccount.php"> My Account </a>
        </li>
        <?php
            //Only display access to the admin page if user is an administrator. 
            if($_SESSION['authLevel'] == 1) {
                echo "<li class=\"footer-temp\">";
                echo "<a href=\"/admin.php\"> Admin Page </a>";
                echo "</li>";
            }
        ?>
    </div>
</div>
<!--You have found an easter-egg! Be one of the first people 
to email me about it and you will pass me on all the things!-->
<!--Github repo: https://github.com/kcwilmot/401-->
