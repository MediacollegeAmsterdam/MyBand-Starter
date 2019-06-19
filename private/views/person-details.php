<?php $this->layout( 'standard_layout' ) ?>

<?php $this->start( 'page_title' ) ?>
<?php echo $person['first_name'] . ' ' . $person['last_name'] ?>
<?php $this->stop( 'page_title' ) ?>

<p><?php echo $person['description'] ?></p>

<ul>
    <li>City: <?php echo $person['city'] ?></li>
    <li>E-mail: <a href="mailto:<?php echo $person['email'] ?>"><?php echo $person['email'] ?></a></li>
</ul>



