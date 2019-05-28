<?php $this->layout( 'standard_layout' ) ?>

<?php $this->start( 'page_title' ) ?>
Onze huisjes
<?php $this->stop( 'page_title' ) ?>

<p>
    Een overzicht van de prachtige chalets en bungalows op Camping Duinzicht.
</p>

<section class="houses">
	<?php foreach ( $houses as $house ): ?>
        <article class="house">
	        <h1><?php echo $house['naam'] ?></h1>
            <img src="<?php echo url( '/uploads/' . $house['foto'] ) ?>"/>
            <p>
				<a href="<?php echo url('/onze-huisjes/huis/'.$house['id'])?>" class="btn btn-success my-2">Meer informatie</a>
            </p>
        </article>
	<?php endforeach; ?>
</section>
