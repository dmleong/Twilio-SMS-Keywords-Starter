<?php

// TODO: People want tracking on keywords.

/**
 * Include twilio-php, the offical Twilio PHP Helper Library, which can be found at
 * http://www.twilio.com/docs/libraries
 */ 
include('Services/Twilio.php');

/* ## Controller ## */
function menu(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Dino facts! Reply with one of the following: brachiosaurus, stegosaurus, iguanodon, trex, raptor, or brontosaurus.');
	echo $response;
}

function index(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Sorry, but you didn\'t spell your dino right. Reply with one of the following: brachiosaurus,  stegosaurus, iguanodon, trex, raptor, or brontosaurus.');
	echo $response;
}

function brontosaurus(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Sorry, but brontosaurus is not a real dinosaur. It is actually known as Apatosaurus. :)');
	echo $response;
}

function brachiosaurus(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Brachiosaurus is a large sauropod dino that had longer forelegs than back legs. Long dino is long.');
	echo $response;
}

function stegosaurus(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Stegosaurus are the most recognizable dinosaurs. Even more than T-rex. According to Wikipedia.');
	echo $response;
}

function iguanodon(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Did you know Iguanodons walk on all four feet? Also, no one knows what their thumb spikes are for.');
	echo $response;
}

function trex(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Juvenile t-rexes may have been covered in feathers. It\'s weird.');
	echo $response;
}

function raptor(){
	$response = new Services_Twilio_Twiml();
	$response->sms('A real velociraptor is about the size of a medium sized dog.');
	echo $response;
}

function apatosaurus(){
	$response = new Services_Twilio_Twiml();
	$response->sms('Apatosaurus belongs to the genus Brontosaurus, which is scientifically redundant.');
	echo $response;
}


/* Read the contents of the 'Body' field of the Request. */
$body = $_REQUEST['Body'];

/* Remove formatting from $body until it is just lowercase characters without punctuation or spaces. */
$result = preg_replace("/[^A-Za-z0-9]/u", " ", $body);
$result = trim($result);
$result = strtolower($result);

/* ##Router## */
switch ($result) {
	case 'menu':
        menu();
        break;
    case 'brachiosaurus':
        brachiosaurus();
        break;
    case 'brontosaurus':
        brontosaurus();
        break;
    case 'stegosaurus':
        stegosaurus();
        break;
    case 'iguanodon':
       	iguanodon();
        break;
    case 'trex':
       	trex();
        break;	
    case 'raptor':
       	raptor();
        break;
    case 'apatosaurus':
       	apatosaurus();
        break;
    /* Add new routing logic above this line. */
    default:
        index();
}