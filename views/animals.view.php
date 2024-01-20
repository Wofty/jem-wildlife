<?php

require('partials/head.php');

require('partials/nav.php');

require('partials/banner.php');

?>

<main>
    <div class="mx-auto max-w-5xl py-6 px-8">
        

    <ul class="my-3 flex flex-col text-center items-center">
        <?php
        foreach ($animals as $animal) {
            echo "<img src='images/animals/" . htmlspecialchars($animal['imageURL']) . "' alt='image of " . htmlspecialchars($animal['common_name']) . "' class='w-1/2'>"
            . "<li><strong>" . htmlspecialchars($animal['common_name'] )."; </strong>" . htmlspecialchars($animal['scientific_name'] ). "</li>"
            . "<li class='my-4'>" .htmlspecialchars( $animal["description"]) . "</li>"
            . "<li>" . htmlspecialchars($animal["classification"]) . "</li>"
            . "<li><a href='/jem-center-php/animal?id=". htmlspecialchars($animal['id']) . "&return=animals' class='py-4 btn btn-primary'>More Details</a></li>";
        } ?>
    </ul>
    </div>
        
</main>

<?php
require 'views/partials/footer.php';
?>