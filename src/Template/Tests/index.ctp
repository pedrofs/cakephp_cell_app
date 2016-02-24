<?= $this->Form->postLink(
    'Testing link from controller',
    [
        'controller' => 'tests',
        'action' => 'index'
    ],
    [
        'block' => true
    ]
); ?>

<br>

<?= $this->cell('Test'); ?>

<?= $this->fetch('postLink'); ?>
<?= $this->fetch('testing'); ?>
