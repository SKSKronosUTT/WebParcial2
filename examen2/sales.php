<?php include "includes/header.php"; 
    require "includes/config/connectdb.php";

    $db = connectdb();

    $queryProp = "SELECT title, price, name FROM propierties AS p INNER JOIN sellers AS s ON p.id_seller = s.id WHERE status = 'SOLD';";
    $responseProp = mysqli_query($db, $queryProp);

?>

<section>
    <h2>Sold Propierties</h2>
    <div>
        <form action="" method="POST">
            <fieldset>
                <legend>List of sold propierties</legend>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>Seller</th>
                                <th>Propierty</th>
                                <th>Price</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php while ($propierty = mysqli_fetch_assoc($responseProp)) { ?>
                                <tr>
                                    <td> <?php echo $propierty["name"]; ?></td>
                                    <td> <?php echo $propierty["title"]; ?></td>
                                    <td> <?php echo "$".$propierty["price"]; ?></td>
                                </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php include "includes/footer.php"; ?>