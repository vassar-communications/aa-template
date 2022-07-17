<?php
function show_code() {
    echo <<<TMP
<details>
<summary style="font-size: 1rem">Template code</summary>
  <pre>
TMP;

    $rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
    $temp_code = file_get_contents($rootDir . $_SERVER['PHP_SELF']);
    $temp_code = explode('<!-- %'.'%% -->', $temp_code);

    echo htmlentities($temp_code[1]);

    echo '</pre></details>';

}