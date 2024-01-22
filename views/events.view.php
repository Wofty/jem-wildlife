<?php

require("partials/head.php");
require("partials/nav.php");
require("partials/banner.php");


$eventsData = [];
foreach ($events as $event) {
    $time = new DateTime($event['time']);
    $formattedTime = $time->format('g:i A');

    $eventsData[] = [
        'imageURL' => htmlspecialchars($event['imageURL']),
        'name' => htmlspecialchars($event['name']),
        'description' => htmlspecialchars($event['description']),
        'date' => htmlspecialchars($event['date']),
        'formattedTime' => $formattedTime,
        'location' => htmlspecialchars($event['location']),
        'id' => htmlspecialchars($event['id'])
    ];
}

?>



<main>
    <section class="grid grid-cols-2 gap-4 ">
        <?php foreach ($eventsData as $event) : ?>
            <div class="flex flex-col justify-center items-center">
                <div class="flex items-center justify-center py-10 w-4/5">
                    <img src='images/events/<?= $event['imageURL']; ?>' alt='image of <?= $event['name']; ?>' class="w-full h-[24rem]">
                </div>
                <div class="flex gap-4 flex-col items-center justify-center w-3/5">
                    <p class="text-3xl"><?= $event['name']; ?></p>
                    <p><?= $event['location']; ?></p>
                    <div class='my-4'>
                        <?php
                        echo substr($event['description'], 0, 100);
                        if (strlen($event['description']) > 100) echo '...';
                        ?>
                    </div>
                    <p><?= $event['date']; ?></p>
                    <p><?= $event['formattedTime']; ?></p>

                    <div class="my-10">
                        <a href='/jem-center-php/event?id=<?= $event['id']; ?>&return=animals' class='p-4 my-10 bg-slate-500 text-white text-2xl text-center '>More Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

</main>

<?php require 'partials/footer.php'; ?>


<?php

require 'partials/footer.php';

?>