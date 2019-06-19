<?php $this->layout('standard_layout')?>

<?php $this->start( 'page_title' ) ?>
Zoekresultaten
<?php $this->stop( 'page_title' ) ?>

<p>Er zijn <?php echo count( $zoekresultaten ) ?> zoekresultaten voor "<?php echo $searchterm; ?>".</p>

<?php foreach ( $zoekresultaten as $result ): ?>
	<div class="result result-<?php echo $result['type'] ?>">
		<h2><?php echo $result['title'] ?> (<?php echo $result['type'] ?>)</h2>
		<p><?php echo $result['description'] ?></p>
		<?php
		switch ( $result['type'] ) {
			case 'movie':
				?>
				<a href="<?php echo url('/movie/' . $result['id'])?>">Ga naar deze film</a>
				<?php
				break;
			case 'person':
				?>
				<a href="<?php echo url('/person/' . $result['id'])?>">Ga naar deze persoon</a>
				<?php
				break;
		}
		?>
	</div>
<?php endforeach; ?>
