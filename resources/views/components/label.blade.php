<?php

    $styles = "dark:text-slate-100"

?>

<label {{ $attributes->merge(['class' => $styles, "for" => ""]) }}>{{ $slot }}</label>
