<?php

function nav_item(string $lien, string $titre, string $linkClass): string
{
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .=  ' active';
    }
    return <<<HTML
        <li class=" $classe">
            <a class="$linkClass" href="$lien">$titre</a>
        </li>
HTML;
}

function nav_menu(string $linkClass = ''): string
{
    return
        nav_item('/ICA1_php/Retention.php', '<img src="Media/Retention.png" class="png" ></img>', $linkClass) .
        nav_item('/ICA1_php/Apps_usuell.php', '<img src="Media/Apps_usuell.png" class="png" ></img>', $linkClass) .
        nav_item('/ICA1_php/International.php', '<img src="Media/International.png" class="png" ></img>', $linkClass) .
        nav_item('/ICA1_php/Partners&Alliances.php', '<img src="Media/Partners&Alliances.png" class="png"></img>', $linkClass) .
        nav_item('/ICA1_php/Product_Sales.php', ' <img src="Media/Product_Sales.png" class="png"></img>', $linkClass);
}

