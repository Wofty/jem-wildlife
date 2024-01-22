<?php

require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');

?>


<main>
    <article class="flex flex-col justify-center items-center ">
        <img class="featured-image w-1/2 h-auto" src="images/animals/<?= htmlspecialchars($animal['imageURL']) ?>" alt="image of <?= htmlspecialchars($animal['common_name']) ?>">

        <div class="px-32 py-10 font-medium leading-[2rem]">
            <?php
            foreach ($animal as $key => $value) {
                if ($key == 'id' || $key == 'imageURL') {
                    continue;
                }
                if ($key == 'date_of_arrival') {
                    $date = DateTime::createFromFormat('Y-m-d', $value);
                    $formatted_date = $date ? $date->format('j F,Y') : 'Invalid Date';
                    echo '<p><span class="text-xl font-bold">Date of Arrival:</span> ' . $formatted_date . '</p>';
                } else {
                    $formatted_key = ucwords(str_replace('_', ' ', $key));
                    echo '<p><span class="text-xl font-bold">' . $formatted_key . ':</span> ' . htmlspecialchars($value) . '</p>';
                }
            }
            ?>
        </div>

        <button class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-2 px-4 mt-10 rounded">
            <a href="/jem-center-php/animals">Back to Animals</a>
        </button>
    </article>
</main>

<?php

require 'views/partials/footer.php';

?>