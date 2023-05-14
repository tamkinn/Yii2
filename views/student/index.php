

<h1>Список статей</h1>
<?php foreach($students as $student): ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?= $student->name_?></h3>
        </div>
        <div class="panel-body">
            <?= $student->surename ?>
        </div>
    </div>
<?php endforeach; ?>

