<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="<?= base_url() ?>">Job Board</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('vacancy/add') ?>">Add vacancy <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0" action="<?= site_url('home/category')?>" method="POST">
      <input class="form-control" type="text" placeholder="Search" name="category">
      <input class="ml-2 btn btn-success" type="submit" name="submit" value="submit">
    </form>
      </div>
    </nav>