<?php

function menu($link){ 
 echo $link == $_SERVER['REQUEST_URI'] ? 'class="active"': '';
}
