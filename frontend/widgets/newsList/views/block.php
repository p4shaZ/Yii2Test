<?php foreach ($list as $item):?>

    <h3><a href="<?php echo Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]) //route ?>">
            <?php echo $item['title']; ?>
        </a> </h3>

<?php echo $item['content']; ?>
    <hr>
<?php endforeach; ?>