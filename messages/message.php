<p class="text-left" style="color: red">
    <?php
    if (isset($_SESSION['Error'])) {
        echo $_SESSION['Error'];

        unset($_SESSION['Error']);

    }
    ?>
</p>
<p class="text-left" style="color: white; background-color: green" >
    <?php
    if( isset($_SESSION['success']) )
    {
        echo $_SESSION['success'];

        unset($_SESSION['success']);

    }
    ?>
</p>
