<?php

require('partials/head.php');

require('partials/nav.php');

require('partials/banner.php');

?>

<main>
    <div class="mx-auto max-w-5xl py-6 px-8 test_class">
        <p>Welcome to the home page.</p>
    </div>

        <ul class="py-10">
            <?php
            foreach ($animals as $animal) {
                echo "<li>"
                    . "<strong>" . htmlspecialchars($animal['common_name']) . "; </strong>"
                    . htmlspecialchars($animal['scientific_name'])
                    . "<img src='images/animals/" . htmlspecialchars($animal['imageURL']) . "' alt='image of " . htmlspecialchars($animal['common_name']) . "' class='w-1/2'>"
                    . "<div class='my-4'>" . htmlspecialchars($animal["description"]) . "</div>"
                    . "<div>" . htmlspecialchars($animal["classification"]) . "</div>";
            }
            ?>
        </ul>

        <h3 class="text-red-500 text-5xl">Events</h3>
    <ul class="flex flex-col">
        
        <?php 
                    foreach ($events as $event) {
            $time = new DateTime($event['time']);
            $formattedTime = $time->format('g:i A'); 
            

            echo "<img src='images/events/" . htmlspecialchars($event['imageURL']) . "' alt='image of " . htmlspecialchars($event['name']) . "' class='w-1/2'>"
                . "<li><strong>" . htmlspecialchars($event['name']) . "</strong></li>"
                . "<li>" . htmlspecialchars($event['description']) . "</li>"
                . "<li>" . htmlspecialchars($event['date']) . "</li>"
                . "<li>" . htmlspecialchars($formattedTime) . "</li>"
                . "<li>" . htmlspecialchars($event['location']) . "</li>";
            }

            ?>
    </ul>
</main>


<?php

require('partials/footer.php');

?>