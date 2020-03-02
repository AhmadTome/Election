<p class="text-right" style="color: red;padding-right: 15px">
    <?php
    if (isset($_SESSION['Error'])) {
        echo $_SESSION['Error'];

        unset($_SESSION['Error']);

    }
    ?>
</p>
<p class="text-right" style="color: white; background-color: green;padding-right: 15px" >
    <?php
    if( isset($_SESSION['success']) )
    {
        echo $_SESSION['success'];

        unset($_SESSION['success']);

    }
    ?>
</p>
