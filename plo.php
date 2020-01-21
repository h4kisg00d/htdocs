

<?php



$ze = file_get_contents("https://steamcommunity.com/sharedfiles/filedetails/?id=1135568027");




$zo = '
<div class="supernav_container">
<a class="menuitem supernav" href="https://store.steampowered.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
STORE	</a>
<div class="submenu_store" style="display: none;" data-submenuid="store">
<a class="submenuitem" href="https://store.steampowered.com/">Featured</a>
<a class="submenuitem" href="https://store.steampowered.com/explore/">Explore</a>
<a class="submenuitem" href="https://store.steampowered.com/curators/">Curators</a>
<a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">Wishlist</a>
<a class="submenuitem" href="https://store.steampowered.com/news/">News</a>
<a class="submenuitem" href="https://store.steampowered.com/stats/">Stats</a>
</div>
';


$lop = '
<div class="supernav_container">
<a class="menuitem supernav" href="https://store.steampowered.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
STORES	</a>
<div class="submenu_store" style="display: none;" data-submenuid="store">
<a class="submenuitem" href="https://store.steampowered.com/">Featured</a>
<a class="submenuitem" href="https://store.steampowered.com/explore/">Explore</a>
<a class="submenuitem" href="https://store.steampowered.com/curators/">Curators</a>
<a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">Wishlist</a>
<a class="submenuitem" href="https://store.steampowered.com/news/">HI</a>
<a class="submenuitem" href="https://store.steampowered.com/stats/">Stats</a>
</div>
';



$output = str_replace(array("\r\n", "\r"), "\n", $zo);
$lines = explode("\n", $output);
$new_lines = array();

foreach ($lines as $i => $line) {
    if(!empty($line))
        $new_lines[] = trim($line);
}
//echo implode($new_lines);


$lem = $new_lines;




$output = str_replace(array("\r\n", "\r"), "\n", $lop);
$lines = explode("\n", $output);
$new_liness = array();

foreach ($lines as $i => $line) {
    if(!empty($line))
        $new_liness[] = trim($line);
}
//echo implode($new_liness);




$zoo = str_replace($lem,$new_liness,$ze);

echo $zoo;

?>