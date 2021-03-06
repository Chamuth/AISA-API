<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/science/facts', function (Request $request, Response $response) {

   	$data_array = array("The Earth is travelling through at 66700 miles per hour."
                        , "Dynamite contains peanut as an ingredient."
                        , "Gabriel Fahrenheit invented the mercury thermometer in 1714."
                        , "A cubic yard of air weights 2 pounds at sea level."
                        , "The average galaxy contains only 4 billion stars."
                        , "10% of the human dry weight comes from bacteria."
                        , "Electrons and protons have equal amount of charge (1.6 x 10-19 coulombs each.)"
                        , "The moon travels a distance of 1423000 miles ( 2290000 km ) around the Earth."
                        , "Space is not a complete vacuum , there are about 3 atoms per cubic meter of space."
                        , "The Earth's atmosphere weights about 5.5 quadrillion tons."
                        , "If you were to put Staurn in water, it would float."
                        , "The atmosphere in Titan, Saturn\'s Moon, is so thick and the gravity is so slow, that humans could fly through
                        it by flapping \"wings\" attached to their arms."
                        , "There are 5 planets you can see with the naked eye, not using a telescope: Mercury, Jupiter, Venus, Mars, Jupiter
                        and Saturn."
                        , "Saturn's rings are younger than the dinosours. They were likely formed just 100 million years ago."
                        , "The surface gravities of Venus, Saturn, Uranus, and Neptune are all quite similar (within 15%) to Earth's"
                        , "The Eiffel tower can be 15cm taller during the Summer."
                        , "20% of the Earth's Oxygen is produced by the Amazon rainforest.");

    $response->getBody()->write(json_encode(
        array("fact" => $data_array[rand(0,sizeof($data_array))])
        )
    );

    return $response->withHeader("Content-type", "application/json");
});

$app->get('/mathematics/facts', function (Request $request, Response $response)
{
	$data_array = array(
		"If you write out pi to two decimal places, backwards it spells \"pie\"",
		"A French word for pie chart is \"camembert\".",
		"The spiral shapes of sunflowers follow Fibonacci sequence",
		"A pizza that has radius \"z\" and height \"a\" has volume Pi by� z by� z by� a.",
		"The word hundred is derived from the word \"hundrath\", which actually means 120 and not 100.",
		"111,111,111 multiplied by 111,111,111 = 12,345,678,987,654,321.",
		"In a room of just 23 people there's a 50% chance that two people have the same birthday.",
		"Zero is the only number that can't be represented in Roman numerals."
	);

    $response->getBody()->write(json_encode(
        array("fact" => $data_array[rand(0,sizeof($data_array) - 1)])
        )
    );


    return $response->withHeader("Content-type", "application/json");
});

$app->run();
