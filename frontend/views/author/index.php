    <?php
    /** @var yii\web\View $this */
    use yii\helpers\Url;
    ?>
    <h1>author/index</h1>

    <br>

    <a href="<?php echo Url::to(['author/create']) ?>" class="btn btn-primary">Create New Author</a>
    <br>
    <br>
    <table class="table table-condensed">
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Edit</th>
            <th></th>
        </tr>
    <?php foreach ($authorsList as $author): ?>

            <tr>
                <td><?php echo $author->id; ?></td>
                <td><?php echo $author->first_name; ?></td>
                <td><?php echo $author->last_name; ?></td>
                <td><a href="<?php echo Url::to(['author/update', 'id' => $author->id ])?>">Edit</a></td>
                <td></td>
                <td></td>

            </tr>
    <?php endforeach; ?>
    </table>
