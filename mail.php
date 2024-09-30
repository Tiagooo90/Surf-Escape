<?php
include 'header.php';

?>

<?php


$base_dados = "projeto_final";
$host = "127.0.0.1";
$user = "root";
$password = "";

// Create a connection to the database
$conn = new mysqli($host, $user, $password, $base_dados);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


// Insert data into the table
$name = "John Doe";
$email = "johndoe@example.com";
$message = "Hello, world!";

$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === true) {
    echo '<div class="mensagem">Informação inserida com sucesso.<br></div>
    ';

    // Simulate sending email
    echo '<div class="mensagem">Email enviado com sucesso aguarde o nosso contacto!</div>';
    
} else {
    echo "Error inserting data: " . $conn->error;
}

echo '<button onclick="window.location.href=\'contacts.php\'" class="btn btn-info">Voltar atrás</button>';

// Close the database connection
$conn->close();

echo '
<style>
.mensagem {
  width: 400px;
  box-shadow: 0px 10px 20px #0000001d;
  background-color: #ede5fc;
  margin: 20px auto;
  margin-bottom: 20px;
  text-align: center;
  font-family: \'Poppins\', sans-serif;
  font-size: large;
  padding-bottom: 50px;
}

.btn {
  display: block;
  margin: 20px auto;
  padding: 10px 20px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


</style>';

?>

