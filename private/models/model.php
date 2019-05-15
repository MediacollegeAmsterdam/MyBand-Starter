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