<?php

/**
 * Class SearchController
 *
 * Handlet de zoekfunctie af
 *
 */
class SearchController {

	public function search() {
		$searchterm      = filter_var( $_GET['term'], FILTER_SANITIZE_STRING );
		$zoekresultaten  = searchDatabase( $searchterm );
		$template_engine = get_template_engine();

		echo $template_engine->render( 'zoekresultaten', [
			'zoekresultaten' => $zoekresultaten,
			'searchterm'     => $searchterm
		] );
	}

	public function movieDetails( $id ) {
		$movie           = getMovie( $id );
		$template_engine = get_template_engine();

		echo $template_engine->render( 'movie-details', [
			'movie' => $movie
		] );
	}


	public function personDetails( $id ) {
		$person           = getPerson( $id );
		$template_engine = get_template_engine();

		echo $template_engine->render( 'person-details', [
			'person' => $person
		] );
	}

}