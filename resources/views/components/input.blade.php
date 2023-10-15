<?php

$styles = "outline-none focus:border focus:border-red-500 p-3 rounded-xl dark:bg-slate-100"

?>

<input {{ $attributes->merge(['class' => $styles, "type" => "text", "placeholder" => "", "name" => "", "id" => ""])}}>
