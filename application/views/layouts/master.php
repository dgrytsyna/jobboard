<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board</title>

    <?php $this->load->view('partials/links') ?>
</head>

<body>
    <header>
        <?php $this->load->view('partials/navbar') ?>
    </header>

    <?php $this->load->view($page) ?>

    <?php $this->load->view('partials/scripts') ?>
</body>

</html>