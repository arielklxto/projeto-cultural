<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once("connection.php");
include_once("url.php");

// Verificar se a requisição é do tipo POST ou GET
if ($_SERVER['REQUEST_METHOD'] !== 'POST' && $_SERVER['REQUEST_METHOD'] !== 'GET') {
    die('Acesso não autorizado');
}

    $data = $_POST;

    //MODIFICAÇÕES NO BANCO

    if (!empty($data)) {

        // Validação de PDF

        class ValidatePDF
        {
            private $allowedType = ['application/pdf'];

            public function validateFile($file)
            {
                // Verificar se o arquivo foi enviado corretamente
                if ($file['error'] !== UPLOAD_ERR_OK) {

                    $_SESSION["msg"] = "Erro no envio do arquivo. Código: " . $file['error'];
                }

                // Verificar se o arquivo é realmente um arquivo enviado pelo formulário
                if (!is_uploaded_file($file['tmp_name'])) {

                    $_SESSION["msg"] = "Arquivo não enviado pelo formulário.";
                }

                // Tentar obter o tipo MIME
                $fileType = mime_content_type($file['tmp_name']);

                if (in_array($fileType, $this->allowedType)) {
                    // Arquivo é um PDF e foi enviado sem erros
                    return true;

                } else {
                    // Exibir mensagem de erro
                    $_SESSION["msg"] = "Apenas formato PDF é permitido.";
                }
            }
        }

        if ($data["type"] === "create") {

            // Verificar se o arquivo foi enviado
            if (isset($_FILES["file"]) && $_FILES["file"]["error"] === UPLOAD_ERR_OK) {
                $name = $data["name"];
                $enrollment = $data["enrollment"];
                $school = $data["school"];
                $file = $_FILES["file"];

                // Instanciar o ValidadorPDF
                $validatePDF = new ValidatePDF();

                // Validar o arquivo PDF
                $validationResult = $validatePDF->validateFile($file);

                if ($validationResult === true) {
                    // Se a validação do arquivo for bem-sucedida, proceder com a inserção no banco de dados
                    $query = "INSERT INTO students (name, enrollment, school, file) VALUES (:name, :enrollment, :school, :file)";

                    $stmt = $conn->prepare($query);

                    $stmt->bindParam(":name", $name);
                    $stmt->bindParam(":enrollment", $enrollment);
                    $stmt->bindParam(":school", $school);
                    $stmt->bindParam(":file", $file["name"]);

                    try {
                        $stmt->execute();
                        $_SESSION["msg"] = "Arquivo enviado com sucesso!";

                    } catch (PDOException $e) {
                        // erro na conexão
                        $error = $e->getMessage();
                        $_SESSION["msg"] = "Erro na execução da consulta: $error";
                    }

                } else {
                    // Se a validação do arquivo falhar, tratar a mensagem de erro adequadamente
                    $_SESSION["msg"] = "Apenas formato PDF é permitido.";
                }

            } else {
                // Se o arquivo não foi enviado corretamente
                $_SESSION["msg"] = "Erro no envio do arquivo.";
            }

        } else {
            // Se o tipo não for "create"
            $_SESSION["msg"] = "Tipo inválido.";
        }

        // Redireciona para o site
        header("Location:" . $BASE_URL . "../student.php");

    } else {
        $id;

        if (!empty($_GET)) {
            $id = $_GET["id"];
        }
    }

    // FECHAR CONEXÃO
    $conn = null;