<?php

require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');

?>  


<main>
    <div class="mx-auto max-w-5xl py-6 px-8 flex flex-col ">
        <p class="text-3xl text-center"><?=$animal['scientific_name'] ?></p>      
        <p class="text-xl"><?=$animal['scientific_name'] ?></p>
        <p> <?=$animal['description'] ?></p>
        <p> <?=$animal['classification'] ?></p>
        <p class="text-red-500"> <?=$animal['conservation_status'] ?></p>
        <p> <?=$animal['habitat']?></p>

        <img src="/jem-center-php/images/<?=$animal['image'] ?>" alt="image of <?=$animal['common_name'] ?>" class="w-1/2">
        <a href="/jem-center-php/animals" class="">Back to Animals</a>
    </div>
</main>

<?php

require 'views/partials/footer.php';

?>