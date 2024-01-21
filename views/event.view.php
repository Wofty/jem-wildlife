<?php
require("partials/head.php");
require("partials/nav.php");
require("partials/banner.php");
?>

<main>
    <div class="mx-auto max-w-5xl py-6 px-8 flex flex-col items-center gap-6">
        <img src="images/events/<?= htmlspecialchars($event['imageURL']) ?>" alt="image of <?= htmlspecialchars($event['name']) ?>" class="w-full">
        <div class="flex flex-col gap-6">
            <?php
            foreach ($event as $key => $value) {
                if (in_array($key, ['id', 'imageURL'])) {
                    continue;
                }
                $formatted_key = ucwords(str_replace('_', ' ', $key));
                if ($key == 'time') {
                    $time = new DateTime($value);
                    $formatted_time = $time->format('g:i A');
                    echo "<p class='text-xl'><span class='font-bold'>$formatted_key:</span> $formatted_time</p>";
                } else {
                    echo "<p class='text-xl'><span class='font-bold'>$formatted_key:</span> " . htmlspecialchars($value) . "</p>";
                }
            }
            ?>
        </div>

        <a href="/jem-center-php/events" class="py-4 p-10 bg-slate-500 text-white text-3xl text-center  ">Back to Events</a>
    </div>
</main>

<?php
require 'partials/footer.php';
?>