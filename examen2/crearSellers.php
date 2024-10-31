<?php include "includes/header.php";
    
    require "includes/config/connectdb.php"; 
    $db = connectdb();

    if ($_POST) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        $query = "INSERT INTO sellers(name,email,phone) VALUES('$name','$email','$phone');";

        $response = mysqli_query($db, $query);

        if ($response) {
            echo "Seller created";
        }
        else{
            echo "Seller no created";
        }
    }
?>

<section>
    <h2>Sellers Form</h2>
    <div>
        <form action="crearSellers.php" method="POST">
            <fieldset>
                <legend>FIll all Fields to Create a New Seller</legend>
                <div>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" minlength="3" maxlength="32" required>
                </div>
                <div>
                    <label for="email">E-Mail</label>
                    <input type="email" id="email" name="email" placeholder="your@email.com" minlength="8" maxlength="32" required>
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" placeholder="6645555555" minlength="10" maxlength="10">
                </div>
                <div>
                    <button type="submit">Create a New Seller</button>
                </div>

            </fieldset>
        </form>
    </div>
</section>

<?php include "includes/footer.php";?>