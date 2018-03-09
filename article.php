<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>

    <body>

    <!-- L'en-tête -->
    <?php
        include ("header.php");
        /* create a condition : when I charge a page, a different title h1 appear */
        $header= "Article";
        
    ?>

    <!-- Le corps -->
    <div id="corps">
        <h1>Mon super Article</h1>

        <p>
            Apprendre le Zoulou<br />
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum impedit voluptatibus tempora doloremque magnam modi. Enim consectetur non aspernatur iure quos impedit, quis quaerat. Neque asperiores esse in praesentium facilis.<br />
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem illo possimus quo voluptas error ab laboriosam placeat provident est rem, dicta aut sapiente animi id quis sit saepe omnis. Odit.<br />
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, voluptate sit nostrum magnam similique, hic impedit nemo laudantium itaque error excepturi perferendis! Perferendis doloribus in, sint libero dolores vel ut.<br />
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, placeat totam. Iure temporibus perferendis, veniam nobis magnam eaque incidunt magni! Maiores, nisi. Eos non facilis dignissimos? Ex sunt officia porro.<br />
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum mollitia nostrum quidem unde aperiam error sint, ullam in delectus illum ea, ducimus quam fugiat at atque nam alias odio voluptate.<br />
        </p>
    </div>

    <!-- Le pied de page -->
    <?php
        include ("footer.php");
    ?>

    </body>
</html>