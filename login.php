<?php
// Dados de conexão com a base de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utilizadores";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se o método do form é o POST
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo "usuario" está presente no formulário
    if (isset($_POST["usuario"])) {
        $texto = $_POST["usuario"];
        $palavra_pass = $_POST["senha"];

        // Verifica se o campo "usuario" contém um e-mail válido
        if (strpos($texto, "@gmail.com") === false && strpos($texto, "@outlook.pt") === false) {
            echo "Email inválido";
            return;
        }

        // Verifica se o nome do utilizador já existe na base de dados
        $query = "SELECT * FROM login WHERE username = '$texto'";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            $senha = "SELECT * FROM login WHERE Password = '$palavra_pass'";
            $resultado = $conn->query($senha);
            if ($resultado->num_rows > 0) {
                echo "Login efetuado com sucesso";
                $_SESSION["login_user"] = $texto;//Cria uma variavel cahamada "login_user" e 
                //atribui o valor da variável $senha a ela.
                header('Location: Início.php');
            } else {
                echo "Password incorreta";
            }
            return;
        } else {
            // Verifica a conexão com o banco de dados
            if ($conn->connect_error) {
                die("Falha na conexão com a base de dados: " . $conn->connect_error);
            }

            // Verifica se os campos "nome" e "Telefone" estão presentes no formulário
            if (isset($_POST["nome"]) && isset($_POST["Telefone"])) {
                $nome_Pessoa = $_POST["nome"];
                $num_telefone = $_POST["Telefone"];
                $confirmar_pass = $_POST["confirmar_pass"];
                if ($palavra_pass != $confirmar_pass)
                {
                    echo 'Palavra Pass é diferente';
                    return;
                }

                // Verifica se o campo "usuario" contém um e-mail válido novamente
                if (strpos($texto, "@gmail.com") === false && strpos($texto, "@outlook.pt") === false) {
                    echo "Email inválido";
                } else {
                    // Inserção dos dados na tabela "login"
                    $sql = "INSERT INTO login (username, Password, Nome_Pessoa, Numero_Telefone) VALUES ('$texto', 
                    '$palavra_pass', '$nome_Pessoa', '$num_telefone')";

                    if ($conn->query($sql) === TRUE) {
                        echo "Dados de login salvos com sucesso!";
                    } else {
                        echo "Erro ao salvar os dados de login: " . $conn->error;
                    }

                    // Fechar conexão com o banco de dados
                    $conn->close();
                }
            } else {
                echo "A conta de utilizador não existe.";
            }
        }
    } else {
        echo "Campo 'usuario' não está presente no formulário";
    }
}
?>