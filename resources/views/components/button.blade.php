<?php

    $styles = "text-". $color ."-500 py-3 px-7 rounded-xl border-2 transition border-". $color ."-500 hover:bg-". $color ."-500 hover:border-collapse dark:text-slate-100"

?>

<button {{ $attributes->merge(['class' => $styles, "type" => "button"]) }}>{{ $slot }}</button>
