<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Demo</title>
</head>

<body>

    <h1>Site URL:<?= $this->config->site_url(); ?></br></br></h1>
    <h1>Base URL: <?php echo $this->config->base_url(); ?></br></br></h1>
    <h1>System URL: <?= $this->config->system_url(); ?></br></br></h1>

</body>

</html>