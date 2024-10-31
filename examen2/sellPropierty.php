<?php include "includes/header.php"; 
    require "includes/config/connectdb.php";

    $db = connectdb();

    if ($_POST) {
        $soldPropID = $_POST['propierty'];

        $querySell = "UPDATE propierties SET status='SOLD' WHERE id='$soldPropID'";

        if (mysqli_query($db, $querySell)) {
            echo "The propierty was successfully sold!";
        }
        else {
            echo "The propierty could not be sold";
        }
    }

    $queryProp = "SELECT id, title FROM propierties WHERE status = 'ONSA';";
    $responseProp = mysqli_query($db, $queryProp);

?>

<section>
    <h2>Sell Propierty</h2>
    <div>
        <form action="" method="POST">
            <fieldset>
                <legend>Choose a Propierty to sell</legend>
                <div>
                    <label for="propierty">Propierty</label>
                    <select name="propierty" id="propierty">
                        <?php while ($propierty = mysqli_fetch_assoc($responseProp)) { ?>
                            <option value="<?php echo $propierty["id"]; ?>"> <?php echo $propierty["title"] ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <br>
                    <button type="submit">Sell Propierty</button>
                </div>

            </fieldset>
        </form>
    </div>
</section>

<?php include "includes/footer.php"; ?>