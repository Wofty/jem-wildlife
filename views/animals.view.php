<?php

require 'partials/head.php';
require 'partials/nav.php';
require 'partials/banner.php';


$animalsData = [];
foreach ($animals as $animal) {
    $animalsData[] = [
        'commonName' => htmlspecialchars($animal['common_name']),
        'scientificName' => htmlspecialchars($animal['scientific_name']),
        'imageURL' => htmlspecialchars($animal['imageURL']),
        'description' => htmlspecialchars($animal['description']),
        'classification' => htmlspecialchars($animal['classification']),
        'id' => htmlspecialchars($animal['id'])
    ];
}

?>


<main class="">
    <section class="grid grid-cols-2 gap-4 ">
        <?php foreach ($animalsData as $animal) : ?>
            <div class="flex flex-col justify-center items-center">
                <div class="flex items-center justify-center py-10 w-[70%]">
                    <img src='images/animals/<?= $animal['imageURL']; ?>' alt='image of <?= $animal['commonName']; ?>' class="w-full h-[22rem]">
                </div>
                <div class="flex flex-col gap-4 items-center justify-center w-3/5">
                    <p class="text-3xl"><?= $animal['commonName']; ?> </p>
                    <p><?= $animal['scientificName']; ?></p>
                    <div class='my-4'>
                        <?php
                        echo substr($animal['description'], 0, 100);
                        if (strlen($animal['description']) > 100) echo '...';
                        ?>
                    </div>
                    <div class="my-10">
                        <a href='/jem-center-php/animal?id=<?= $animal['id']; ?>&return=animals' class='p-4 my-10 bg-slate-500 text-white text-2xl text-center '>More Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>

<?php require 'views/partials/footer.php'; ?>