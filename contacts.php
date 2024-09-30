<?php
include 'header.php';
?>

<html>

<body>
    <div class="container">
       
        <section class="section">
        
            <h2 class="section-heading">Contactos</h2>
         
            <p class="section-description">Entre em contacto connosco para mais informações:</p>

            <div class="row">
                <!--Grid column-->
                <div class="col-md-8 col-xl-9">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST" onsubmit="return validateForm()">

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <label for="name" class="">Nome</label>
                                    <input type="text" id="name" name="name" required class="form-control">
                                </div>
                            </div>
                            <!--Grid column-->
                            <br>
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <label for="email" class="">Email</label>
                                    <input type="text" id="email" name="email" class="form-control" required placeholder="karl@mail.com">
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                        <br>
                        <!--Grid row-->
              <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <label for="subject" class="">Assunto</label>
                                        <input type="text" id="subject" name="subject" class="form-control" placeholder="..." value="<?php echo isset($_GET['subject']) ? $_GET['subject'] : ''; ?>"><br>
                                        <input type="number" id="people" name="people" class="form-control" placeholder="Numero de pessoas" value="<?php echo isset($_GET['people']) ? $_GET['people'] : ''; ?>" min="1" required><br>
                                        <input type="date" id="date" name="date" class="form-control" placeholder="Data pretendida" value="<?php echo isset($_GET['date']) ? $_GET['date'] : ''; ?>"><br>
                                    </div>
                                </div>
                            </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <br>
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form">
                                    <label for="message" class="">Mensagem</label>
                                    <textarea type="text" id="message" name="message" rows="12" class="form-control md-textarea" cols="25"></textarea>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <div class="center-on-small-only" style="margin-top: 20px;">
                            <button class="btn btn-info" type="submit">Enviar</button>
                        </div>
                        <div class="status" id="status"></div>
                    </form>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 col-xl-3 ml-auto">
                    <ul class="contact-icons">
                        <li><i class="fa fa-map-marker fa-2x"></i>
                            <p class="contacts">R. António Feio,2775-598 Carcavelos, PT</p>
                        </li>
                        <li><i class="fa fa-phone fa-2x"></i>
                            <p class="contacts">+ 351 21 000 0000</p>
                        </li>
                        <li><i class="fa fa-envelope fa-2x"></i>
                            <p class="contacts">contact@surfescape.com</p>
                        </li>
                    </ul>
                   
                    <div class="game-container">
                    <div>
                        <h6 style="margin-top: 10px;">Á espera do nosso contacto?</h6>
                    </div>
                    <div class="button-container">
                        <a href="jogoDoGalo.php">Jogar agora</a>
                    </div>
                    </div>
                                            
                    </section>
        
        
       

    </div>
<br>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <!--Custom scripts-->
    <script>
        function validateForm() {
            document.getElementById('status').innerHTML = "Enviando...";
        }


    </script>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "recipient@example.com";
    $subject = "New Contact Form Submission";
    $message = $_POST["message"];
    $headers = "From: " . $_POST["email"];

    if (mail($to, $subject, $message, $headers)) {
        echo "Email enviado.";
    } else {
        echo "Erro no envio.";
    }
}
?>

    
</body>

</html>

<?php
include 'footer.php';
?>
