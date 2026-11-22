<?php

if (!extension_loaded('geos') || !GEOSVersion()) {
    http_response_code(500);
    exit(1);
}

echo "GEOS OK\n";
