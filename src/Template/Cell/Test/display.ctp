<?= $this->Form->postLink(
    'Testing link from cell',
    [
        'controller' => 'tests',
        'action' => 'index'
    ],
    [
        'block' => true
    ]
); ?>

<br>

<?= $this->Form->postLink(
    'Testing link from cell different block',
    [
        'controller' => 'tests',
        'action' => 'index'
    ],
    [
        'block' => 'testing'
    ]
); ?>
