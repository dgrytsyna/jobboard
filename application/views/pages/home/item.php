<div class="container">
    <div class="container">
        <?php foreach ($items as $item) : ?>
            <?php $id = $item['id'] ?>
            <h1 class="mt-5"><?= $item['name'] ?></h1>
            <p class="lead"><?= $item['description'] ?></p>
            <img src="<?= site_url($item['logo']) ?>" alt="" />
        <?php endforeach ?>
    </div>

</div>

<table class="table table-width">
    <!-- <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Company</th>
            <th scope="col">Category</th>
            <th scope="col">Type</th>
            <th scope="col">Date</th>
            <th scope="col">Logo</th>

        </tr>
    </thead> -->
    <tbody>
        <?php foreach ($items_category as $item) : ?>
            <?php if ($item['id'] !== $id) : ?>
                <tr>
                    <th scope="row"><?= $item['id'] ?></th>
                    <td><a href="<?= site_url('home/item/' . $item['id'] . '/' . $item['category']) ?>"><?= $item['name'] ?></a></td>
                    <td><?= $item['company'] ?></td>
                    <td><?= $item['category'] ?></td>
                    <td><?= $item['type'] ?></td>
                    <td><?= $item['date'] ?></td>
                    <td><img src="<?= site_url($item['logo']) ?>" alt=""></td>

                </tr>
            <?php endif ?>
        <?php endforeach ?>
    </tbody>
</table>