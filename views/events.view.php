<?php

require ("partials/head.php");
require ("partials/nav.php");
require ("partials/banner.php");

?>


<main>
    <ul class="mx-auto max-w-5xl py-6 px-8 flex flex-col ">
        <?php
        foreach ($events as $event) {
            $time = new DateTime($event['time']);
            $formattedTime = $time->format('g:i A'); 

            echo "<img src='images/events/" . htmlspecialchars($event['imageURL']) . "' alt='image of " . htmlspecialchars($event['name']) . "' class='w-1/2'>"
                . "<li><strong>" . htmlspecialchars($event['name']) . "</strong></li>"
                . "<li>" . htmlspecialchars($event['description']) . "</li>"
                . "<li>" . htmlspecialchars($event['date']) . "</li>"
                . "<li>" . htmlspecialchars($formattedTime) . "</li>"
                . "<li>" . htmlspecialchars($event['location']) . "</li>"
                . "<li><a href='/jem-center-php/event?id=". htmlspecialchars($event['id']) . "&return=events' class='py-4 btn btn-primary'>More Details</a></li>";
        }
        ?>

    </ul>
</main>

<?php

require 'partials/footer.php';

?>