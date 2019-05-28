<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Camping Duinzicht - <?php echo $this->section( 'page_title', 'Standaard pagina titel') ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo url( '/css/style.css' ) ?>" media="all">
</head>
<body>
<div class="container">
    <nav>
        <ul>
            <li><a href="<?php echo url('/')?>">Home</a></li>
            <li><a href="<?php echo url('/onze-huisjes')?>">Onze huisjes</a></li>
            <li><a href="<?php echo url('/evenementen')?>">Evenementen</a></li>
            <li><a href="<?php echo url('/over-ons')?>">Over ons</a></li>
        </ul>
    </nav>
    <div class="page-wrapper">

        <header>
            <h1 class="page-title"><?php echo $this->section( 'page_title', 'Standaard pagina titel') ?></h1>
        </header>

        <main>
            <?php echo $this->section( 'content' ) ?>
        </main>

        <footer>
            &copy; <?php echo date( 'Y' ) ?> - Camping Duinzicht
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
