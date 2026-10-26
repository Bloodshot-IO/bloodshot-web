<?php
// version.php
// Devuelve el SHA del commit desplegado. Lo usa health-check.yml para confirmar
// que Hostinger publicó el merge a main (el sitio anterior también responde 200).
// Hostinger despliega con un clon de Git, así que se lee .git directamente.

header("Content-Type: text/plain; charset=utf-8");
header("Cache-Control: no-store");

$git = __DIR__ . "/.git";
$head = @file_get_contents("$git/HEAD");

if ($head === false) {
    http_response_code(503);
    echo "unknown";
    exit;
}

$head = trim($head);

// HEAD apunta a una rama ("ref: refs/heads/main") o, si está desacoplado, al SHA mismo
if (strpos($head, "ref: ") === 0) {
    $ref = substr($head, 5);
    $sha = @file_get_contents("$git/$ref");

    // Tras un gc la rama puede vivir solo en packed-refs
    if ($sha === false) {
        $packed = @file_get_contents("$git/packed-refs") ?: "";
        if (preg_match("/^([0-9a-f]{40}) " . preg_quote($ref, "/") . "$/m", $packed, $m)) {
            $sha = $m[1];
        }
    }
} else {
    $sha = $head;
}

$sha = trim((string) $sha);

if (!preg_match("/^[0-9a-f]{40}$/", $sha)) {
    http_response_code(503);
    echo "unknown";
    exit;
}

echo $sha;
