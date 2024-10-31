<?php include "includes/header.php"?>

    <section>
        <h2>Contacto</h2>
        <!--Imagen-->
    </section>
    <section>
        <h2>Llene el formulario de contacto</h2>
        <div>
            <form action="">
                <fieldset>
                        <legend>Informacion personal</legend>
                        <div>
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" placeholder="Your Name">
                        </div>
                        <div>
                            <label for="email">e-mail:</label>
                            <input type="text" name="email" id="email" placeholder="your@email.com">
                        </div>
                        <div>
                            <label for="phone">Phone:</label>
                            <input type="text" name="phone" id="phone" placeholder="555 555 5555">
                        </div>
                        <div>
                            <label for="msg">Message:</label>
                            <textarea type="text" name="msg" id="msg" placeholder="Your message"></textarea>
                        </div>
                </fieldset>

                <fieldset>
                    <legend>Informacion de la propiedad</legend>
                    <div>
                        <label for="vencom">Vende o Compra</label>
                        <input type="select" name="vencom" id="vencom">
                    </div>
                    <div>
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity" id="quantity">
                    </div>
                </fieldset>
                
                <fieldset>
                    <legend>Contacto</legend>
                    <div>
                        <label for="contactForm">Como desea ser contactado</label>
                        <label for="tel">Phone</label>
                        
                        <input type="radio" name="tel" id="tel">
                        <label for="e-mail">E-mail</label>
                        <input type="radio" name="e-mail" id="e-mail">
                    </div>
                    <div>
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date">
                    </div>
                    <div>
                        <label for="time">Time</label>
                        <input type="time" name="time" id="time">

                    </div>
                </fieldset>
                <div>
                    <button>Contactame</button>
                </div>
            </form>
        </div>
    </section>


<?php include "includes/footer.php"?>