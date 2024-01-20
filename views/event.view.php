<?php

require ("partials/head.php");
require ("partials/nav.php");
require ("partials/banner.php");

?>

<main>
    <div class="mx-auto max-w-5xl py-6 px-8 flex flex-col ">
        <p class="text-3xl text-center"><?=$event['name'] ?></p>      
        <p class="text-xl"><?=$event['name'] ?></p>
        <p> <?=$event['description'] ?></p>
        <p> <?=$event['date'] ?></p>
        <p class="text-red-500"> <?=$event['time'] ?></p>
        <p> <?=$event['type']?></p>

        <img src="/jem-center-php/images/<?=$event['imageURL'] ?>" alt="image of <?=$event['title'] ?>" class="w-1/2">
        <a href="/jem-center-php/events" class="">Back to Events</a>
    </div>
</main>


<?php

require 'partials/footer.php';

?>