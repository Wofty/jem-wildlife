<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>
<main>
    <div class="mx-auto max-w-7xl py-6 px-8">
        <p class="mb-4"></p>
        <form method="get">
            <label for="txtSearch" class="block text-sm font-medium leading-6 text-gray-900">Type and Description</label>
            <div class="mt-2">
                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-slate-600 sm:max-w-md">
                    <input type="text" name="name" id="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" required value="<?= isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '' ?>">
                    <button type="submit" class="py-4 p-6 bg-slate-500 text-white text-3xl">Search</button>
                </div>
            </div>
        </form>
        <p class="mt-4 mb-2"><?= $records ?></p>
        <ul>
            <?php
            foreach ($events as $event) {
                $output = "<li>" . "<a href='/jem-center-php/event?id=" . $event['id'] . "&return=" . $return . "' class='text-red-500 hover:underline'>" . $event['name'] . "</a>  " . $event['description'] . "</li>";
                echo $output;
            } ?>
        </ul>
    </div>
</main>

<?php
require('partials/footer.php');
?>