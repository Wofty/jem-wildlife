<?php

require('partials/head.php');

require('partials/nav.php');

require('partials/banner.php');

?>


<?php

$animalsData = [];
foreach ($animals as $animal) {
    $commonName = htmlspecialchars($animal['common_name']);
    $imageURL = htmlspecialchars($animal['imageURL']);
    $scientificName = htmlspecialchars($animal['scientific_name']);
    $description = htmlspecialchars($animal['description']);
    $classification = htmlspecialchars($animal['classification']);

    $animalsData[] = [
        'commonName' => $commonName,
        'scientificName' => $scientificName,
        'imageURL' => $imageURL,
        'description' => $description,
        'classification' => $classification
    ];
}

// Process events data
$eventsData = [];
foreach ($events as $event) {
    $time = new DateTime($event['time']);
    $formattedTime = $time->format('g:i A');

    $name = htmlspecialchars($event['name']);
    $imageURL = htmlspecialchars($event['imageURL']);
    $description = htmlspecialchars($event['description']);
    $date = htmlspecialchars($event['date']);
    $location = htmlspecialchars($event['location']);

    $eventsData[] = [
        'name' => $name,
        'imageURL' => $imageURL,
        'description' => $description,
        'date' => $date,
        'formattedTime' => $formattedTime,
        'location' => $location
    ];
}
?>


<main class=" flex">


    <div class="mx-auto">
        <section class="grid grid-cols-3 gap-4 ">
            <?php foreach ($animalsData as $animal) : ?>
                <div class="flex flex-col justify-center items-center">
                    <div class="flex items-center justify-center py-10 w-4/5">
                        <img src='images/animals/<?= $animal['imageURL']; ?>' alt='image of <?= $animal['commonName']; ?>' class="w-full h-[18rem]">
                    </div>
                    <div class="flex flex-col items-center justify-center w-3/5">
                        <p class="text-3xl"><?= $animal['commonName']; ?> </p>
                        <p><?= $animal['scientificName']; ?></p>
                        <div class='my-4'>
                            <?php
                            echo substr($animal['description'], 0, 100);
                            if (strlen($animal['description']) > 100) echo '...';
                            ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
        <div class="py-4 p-10 bg-slate-500 text-white text-3xl text-center w-full">
            <a href="/jem-center-php/animals" class="">More Animals</a>
        </div>

        <h3 class="text-slate-500 text-5xl text-center my-10">Events</h3>
        <section class="grid grid-cols-3 gap-4">
            <?php foreach ($eventsData as $event) : ?>
                <div class="flex flex-col items-center justify-center p-4">
                    <img src='images/events/<?= $event['imageURL']; ?>' alt='image of <?= $event['name']; ?>' class='w-full h-[18rem]'>
                    <div class="text-center py-4">
                        <p><strong><?= $event['name']; ?></strong></p>
                        <div class='my-4'>
                            <?php
                            echo substr($event['description'], 0, 100);
                            if (strlen($event['description']) > 100) echo '...';
                            ?>
                            <p><?= $event['date']; ?></p>
                            <p><?= $event['formattedTime']; ?></p>
                            <p><?= $event['location']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </section>
        <div class="py-4 p-10 bg-slate-500 text-white text-3xl text-center w-full">
            <a href="/jem-center-php/events" class="">More Events</a>
        </div>
</main>



<?php

require('partials/footer.php');

?>