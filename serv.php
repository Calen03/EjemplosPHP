<?php
// Common server variables:
// Contiene el método de solicitud utilizado para acceder a la página;
// puede ser 'GET', 'POST', 'PUT', 'DELETE', etc.
$requestMethod = $_SERVER['REQUEST_METOD'] ?? '';
// Protocolo de solicitud utilizado para acceder a la página. Por ejemplo, HTTP/1.1.
$serverProtocol = $_SERVER['SERVER_PROTOCOL'] ?? '';
//El nombre del servidor host bajo el cual se está ejecutando el script actual.
// Por lo general, es el nombre de dominio del servidor. Apareceria como algo.com
$serverName = $_SERVER['SERVER_NAME'] ?? '';
//El número de puerto en el cual el servidor web está escuchando.
$serverPort = $_SERVER['SERVER_PORT'] ?? '';
//Cadena de identificación del servidor, dada en las cabeceras HTTP. Generalmente apache
$serverSoftware = $_SERVER['SERVER_SOFTWARE'] ?? '';
//El valor dado para la directiva SERVER_ADMIN en el archivo de configuración del servidor web.
$serverAdmin = $_SERVER['SERVER_ADMIN'] ?? '';
// El directorio raíz bajo el cual el script actual está 
//ejecutándose, como se define en el archivo de configuración del servidor.
$documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? '';
//La ruta absoluta del script que se está ejecutando actualmente.
$scriptFilename = $_SERVER['SCRIPT_FILENAME'] ?? '';
// Contiene la ruta del script actual desde el directorio raíz del documento.
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
//El nombre del archivo script que se está ejecutando actualmente,
// relativo al directorio raíz del documento.
$phpSelf = $_SERVER['PHP_SELF'] ?? '';
//La dirección IP desde la cual el usuario está viendo la página actual.
$remoteAddr = $_SERVER['REMOTE_ADDR'] ?? '';
//Tipo de conexión HTTP utilizada (keep-alive, close).
$connection = $_SERVER['HTTP_CONNECTION'] ?? '';
//El valor de la cabecera Host de la solicitud HTTP actual.
$host = $_SERVER['HTTP_HOST'] ?? '';
//a URL de la página que remitió al usuario a la página actual.
$referer = $_SERVER['HTTP_REFERER'] ?? '';
//La cadena del agente de usuario de la solicitud HTTP.
$userAgent = $_SERVER['SERVER_USER_AGENT'] ?? '';
// La cadena de consulta, si hay alguna, que se usa para acceder a la página.
$queryString = $_SERVER['QUERY_STRING'] ?? '';
//La URI que se utilizó para acceder a la página.
$requestUri = $_SERVER['REQUEST_URI'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-8 bg-white shadow-md mt-10 rounded-lg">
    <h1 class="text-3xl font-semibold mb-4 text-center">Server Information</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Request Method:</strong>
        <?= $requestMethod ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Protocol:</strong>
        <?= $serverProtocol ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Name:</strong>
        <?= $serverName ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Port:</strong>
        <?= $serverPort ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Software:</strong>
        <?= $serverSoftware ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Admin:</strong>
        <?= $serverAdmin ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Document Root:</strong>
        <?= $documentRoot ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Script Filename:</strong>
        <?= $scriptFilename ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Script Name:</strong>
        <?= $scriptName ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">PHP Self:</strong>
        <?= $phpSelf ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Remote Addr:</strong>
        <?= $remoteAddr ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Connection:</strong>
        <?= $connection ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Host:</strong>
        <?= $host ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Referer:</strong>
        <?= $referer ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">User Agent:</strong>
        <?= $userAgent ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Query String:</strong>
        <?= $queryString ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Request Uri:</strong>
        <?= $requestUri ?>
      </div>
    </div>
</body>

</html>