<?php
/**
 * @var object $registers
 */
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">Developer</th>
        <th scope="col">Price</th>
        <th scope="col">Slug</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ( $registers as $register ):?>
    <tr>
        <th scope="row"><?= $register->id; ?></th>
        <td><?= $register->name; ?></td>
        <td><?= $register->developer; ?></td>
        <td><?= $register->price; ?></td>
        <td><?= $register->slug; ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>