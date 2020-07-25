<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Company</th>
            <th scope="col">Category</th>
            <th scope="col">Type</th>
            <th scope="col">Date</th>
            <th scope="col">Logo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $item) : ?>
            <tr>
                <th scope="row"><?= $item['id'] ?></th>
                <td><a href="<?= site_url('home/item/' . $item['id'] . '/' . $item['category']) ?>"><?= $item['name'] ?></a></td>

                <td><?= $item['company'] ?></td>
                <td><?= $item['category'] ?></td>
                <td><?= $item['type'] ?></td>
                <td><?= $item['date'] ?></td>
                <td><img src="<?= $item['logo'] ?>" alt=""></td>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>