<?php include "includes/header.php";
    require "includes/config/connectdb.php";

    $db = connectdb();

    $querySellers = "SELECT id, name FROM sellers;";
    $responseSellers = mysqli_query($db, $querySellers);


    if($_POST){
        $title = $_POST["title"];
        $price = $_POST["price"];
        $image = $_POST["image"];
        $description = $_POST["description"];
        $rooms = $_POST["rooms"];
        $wc = $_POST["wc"];
        $garage = $_POST["garage"];
        $timestamp = $_POST["timestamp"];
        $seller = $_POST["seller"];
        

        $query = "INSERT INTO propierties(title,price,image,description,rooms,wc,garage,timestamp,id_seller,status) VALUES('$title','$price','$image','$description','$rooms','$wc','$garage','$timestamp','$seller','ONSA');";
    
        $response = mysqli_query($db, $query);
    
        if ($response) {
            echo "Propierty created successfully";
        }
        else{
            echo "Propierty NO created";
        }
    }
?>

<section>
    <h2>Propierties Form</h2>
    <div>
        <form action="crearPropiedades.php" method="POST">
            <fieldset>
                <legend>Fill all your form fields to create a new propierty</legend>
                <div>
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Propierty Title" minlength="3" maxlength="32" required>
                </div>
                <div>
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" placeholder="$1000000" required min="0" max="999999999">
                </div>
                <div>
                    <label for="image">Image URL</label>
                    <input type="text" id="image" name="image" placeholder="imageURL.com/image.png">
                </div>
                <div>
                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="Propierty description"></textarea>
                </div>
                <div>
                    <label for="rooms">Rooms</label>
                    <input type="number" id="rooms" name="rooms" placeholder="5" min="0" max="99">
                </div>
                <div>
                    <label for="wc">wc</label>
                    <input type="number" id="wc" name="wc" placeholder="3" min="0" max="99">
                </div>
                <div>
                    <label for="garage">Garage</label>
                    <input type="number" id="garage" name="garage" placeholder="2" min="0" max="99">
                </div>
                <div>
                    <label for="timestamp">TimeStamp</label>
                    <input type="date" id="timestamp" name="timestamp">
                </div>
                <div>
                    <label for="seller">Seller</label>
                    <select name="seller" id="seller">
                        <?php while ($sellerID = mysqli_fetch_assoc($responseSellers)) { ?>
                            <option value="<?php echo $sellerID["id"]; ?>"> <?php echo $sellerID["name"] ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <button type="submit">Create a New Propierty</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php include "includes/footer.php";?>