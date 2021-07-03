<?php

/**
 * Dump a preformatted variable via var_dump()
 *
 * @param any $variable
 * @return void
 */
function dump($variable)
{
    var_dump($variable);
    $vardump = ob_get_clean();
    echo '<pre>' . $vardump . '</pre>';
}

/**
 * Generates the active nav-item name based on the script name or a GET parameter
 * 
 * Returns the 'nav' GET parameter extended by 'nav-' if presents else
 * replaces the 'page' to 'nav' in the script name and removes additional characters and the extension
 * Useful for simple websites where page-NAVNAME.php could be used as page name convention.
 *
 * @return string A string can be used to indicate the active nav-item on the navbar
 */
function generate_navname(): string
{
    if (isset($_GET['nav'])) {
        return 'nav-' . $_GET['nav'];
    }
    $scriptnameArray = explode('/', $_SERVER['SCRIPT_NAME']);
    $scriptname = str_replace(".php", "", $scriptnameArray[count($scriptnameArray) - 1]);
    return str_replace("page", "nav", $scriptname);
}
