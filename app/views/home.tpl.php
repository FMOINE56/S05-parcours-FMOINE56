<div class="container my-5">
<table>
    <thead>
        <tr>
            <th>Look</th>
            <th>Nom</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php for($id=0 ; $id < count($data) ; $id++): ?>
        <tr>
            <td><img src="<?= $absoluteUrl . '/assets/img/' .$data[$id]->getPicture() ?>"></td>
            <td> <?= $data[$id]->getName() ?> </td>
            <td><?=$data[$id]->getTypeId()?></td>
            <td><?=$data[$id]->getDescription() ?></td>
            <td></td>
        </tr>
        <?php endfor ; ?>
    </tbody>
</table>
</div>