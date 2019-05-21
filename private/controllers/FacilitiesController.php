<?php

/**
 * Class FacilitiesController
 *
 * Deze handelt de logica van de alle te verhuren huisje sop de camping af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class FacilitiesController {

	function housesOverview() {

		$template_engine = get_template_engine();

		echo $template_engine->render( 'onze-huisjes' );
	}

}