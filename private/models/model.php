<?php
/**
 * Model
 *
 * In dit bestand zet je ALLE functions die iets met data of de database doen
 *
 */


/**
 * Deze function wordt gebruikt voor het ajax search voorbeeld
 */
function searchTitels($text)
{
    $database = dbConnect();
    // filter de data die binnenkomt
    $text = htmlspecialchars($text);

    // select alleen de titels die overeen komen
    $get_titel = $database->prepare("SELECT titel FROM posts WHERE titel LIKE concat('%', :titel, '%')");

    // execute de query
    $get_titel->execute(array('titel' => $text));

    $results = [];

    // laat de titels op de pagina zien
    while ($titels = $get_titel->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $titels;
    }

    return $results;
}

function getAllHouses() {

	$database = dbConnect();

	// Haal alles op uit de table 'huisjes'
	$statement = $database->query('SELECT * FROM `huisjes` ORDER BY `naam`');

	$results = [];

	// laat de titels op de pagina zien
	while ($huisje = $statement->fetch(PDO::FETCH_ASSOC)) {
		$results[] = $huisje;
	}

	return $results;

}

function getHouse($id){
	$database = dbConnect();

	// Haal het huisje met de opgegeven id op uit de database
	$statement = $database->prepare('SELECT * FROM `huisjes` WHERE id = ?');
	$data = [$id];
	$statement->execute($data);

	$huisje = $statement->fetch(PDO::FETCH_ASSOC);

	return $huisje;
}

/**
 * Haal alle agenda / evenementen
 * @return array
 */
function getAllEvents(){
	$database = dbConnect();

	// Haal alles op uit de table 'huisjes'
	$statement = $database->query('SELECT * FROM `evenementen` ORDER BY `datum` ASC');

	$results = [];

	// laat de titels op de pagina zien
	while ($evenement = $statement->fetch(PDO::FETCH_ASSOC)) {
		$results[] = $evenement;
	}

	return $results;
}

function searchDatabase($searchterm){

	$results = [];
	$pdo = dbConnect();

	$sql = 'SELECT * FROM movies WHERE movie_title LIKE :search_term OR movie_genre LIKE :search_term';

	$statement = $pdo->prepare( $sql );
	$params    = [
		'search_term' => '%' . $searchterm . '%'
	];
	$statement->execute( $params );
	foreach($statement as $movie){

		$rij = [];
		$rij['id'] = $movie['ID'];
		$rij['type'] = 'movie';
		$rij['title'] = $movie['movie_title'];
		$rij['description'] = 'A movie with genre ' . $movie['movie_genre'];

		$results[] = $rij;
	}

	//Zoeken naar people
	$sql = 'SELECT * FROM people 
			WHERE 
			first_name LIKE :search_term OR 
			last_name LIKE :search_term OR
			city LIKE :search_term OR
			description LIKE :search_term
	';

	$statement = $pdo->prepare($sql);
	$params = [
		'search_term' => '%' . $searchterm . '%'
	];
	$statement->execute($params);
	foreach($statement as $person){

		$rij = [];
		$rij['id'] = $person['id'];
		$rij['type'] = 'person';
		$rij['title'] = $person['first_name'] . ' ' . $person['last_name'];
		$rij['description'] = $person['description'];

		$results[] = $rij;
	}

	return $results;
}


function getMovie($id){

	$pdo = dbConnect();

	$query = 'SELECT * FROM `movies` WHERE ID = :id';
	$statement = $pdo->prepare($query);
	$params = [
		'id' => $id
	];
	$statement->execute($params);
	$movie = $statement->fetch();

	return $movie;

}

function getPerson($id){

	$pdo = dbConnect();

	$query = 'SELECT * FROM `people` WHERE ID = :id';
	$statement = $pdo->prepare($query);
	$params = [
		'id' => $id
	];
	$statement->execute($params);
	$person = $statement->fetch();

	return $person;

}