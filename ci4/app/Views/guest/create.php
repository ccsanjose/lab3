<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/guest/create" method="post">
    <?= csrf_field() ?>

    <label for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="email">Email</label>
    <textarea name="email" cols="45" rows="4"><?= set_value('email') ?></textarea>
    <br>
	
	<label for="website">website</label>
    <textarea name="website" cols="45" rows="4"><?= set_value('website') ?></textarea>
    <br>
	
	<label for="comment">comment</label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>
	
	<label for="gender">gender</label>
    <textarea name="gender" cols="45" rows="4"><?= set_value('gender') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create guest entry">
</form>