<form name="addpanel" action="save" method="post" enctype="multipart/form-data">
        <div class="container mt-3">
            <div class="row form-group">
                <label class="col-md-2 text-left lead mt-1">1. Name: </label>
                <input type="text" class="col-md-10 form-control input-form" name="name" placeholder="Name" required>
            </div>
            <div class="row form-group">
                <label class="col-md-2 text-left lead mt-1">2. Company: </label>
                <input type="text" class="col-md-10 form-control input-form" name="company" placeholder="Company" required>
            </div>
            <div class="row form-group">
                <label class="col-md-2 text-left lead mt-1">3. Category: </label>
                <select name="category" class="col-md-10 form-control input-form" required>
                    <?php for ($i = 1; $i <= count($categories); ++$i) : ?>
                        <option value="<?= $categories[$i]['id'] ?>"><?= $categories[$i]['category'] ?></option>
                    <?php endfor ?>
                </select>
            </div>

            <div class="row form-group">
                <label class="col-md-2 text-left lead mt-1">4. Type: </label>
                <input type="text" class="col-md-10 form-control input-form" name="type" placeholder="Type" required>
            </div>

            <div class="row form-group">
                <label class="col-md-2 text-left lead mt-1">5. Company: </label>
                <textarea class="col-md-10 form-control input-form" name="description" placeholder="Description" rows="5" required></textarea>
            </div>
                       
            <div class="row form-group">
                <label class="col-md-2 text-left lead mt-2">6. Logo: </label>
                <input type="file" class="col-md-10 form-control-file mt-2" name="logo" required>
            </div>
           <a href="https://t.me/bets_it_jobs_in_ua"><button type="submit" class="btn btn-dark">Add</button></a>    
        </div>
    </form>