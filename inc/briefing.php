<?php
/**
 * Flight booking system for RFE or similar events.
 * Created by Donat Marko (IVAO VID 540147) 
 * Any artwork/content displayed on IVAO is understood to comply with the IVAO Intellectual Property Policy (https://doc.ivao.aero/rules2:ipp)
 * @author Donat Marko
 * @copyright 2021 Donat Marko | www.donatus.hu
 */

global $config;
?>

<main class="container" role="page">
	<h1>About <?=$config["event_name"]?></h1>
	<?php include_once("contents/briefing.html"); ?>
</main>
