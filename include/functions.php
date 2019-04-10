<?php


function checkout() {
echo  "<div class=". "checkout" . ">
               <a href=". "checkout.php" . ">
               <img src=". "https://png.pngtree.com/svg/20161205/ys_shopping_cart__30072.png" . " style="."max-width:45px;position:absolute;top:175px;left:92%;".">
               </a>
               </div>";

}

function logout () {
if($_SESSION['loggedin'] = TRUE)
                {
                unset($_SESSION['loggedin']);

                }
                header("location:index.php");
}
?>
