<?php

$openApiJsonPath = __DIR__ . "/swagger.json";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swagger API Docs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/swagger-ui/5.0.0/swagger-ui.css">
</head>
<body>
    <div id="swagger-ui"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/swagger-ui/5.0.0/swagger-ui-bundle.js"></script>
    <script>
        window.onload = function() {
            const spec = <?php echo json_encode(file_get_contents($openApiJsonPath)); ?>;
            
            const ui = SwaggerUIBundle({
                spec: JSON.parse(spec),  // Load JSON content directly
                dom_id: "#swagger-ui",
            });
        };
    </script>
</body>
</html>

