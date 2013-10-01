<?php

header('Content-Type: application/ld+json');

echo file_get_contents ("entrypoint.jsonld");

