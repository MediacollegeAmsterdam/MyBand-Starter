<?php $this->layout('standard_layout')?>

<?php $this->start( 'page_title' ) ?>
<?php echo $movie['movie_title']?>
<?php $this->stop( 'page_title' ) ?>

<p><?php echo $movie['movie_genre']?> - Rating: <?php echo $movie['rating']?></p>
