<?php
// functions/product-token.php
function encodeProductId($id) {
    return rtrim(strtr(base64_encode($id), '+/', '-_'), '=');
}

function decodeProductId($token) {
    $decoded = base64_decode(strtr($token, '-_', '+/'));
    return is_numeric($decoded) ? (int)$decoded : null;
}
?>