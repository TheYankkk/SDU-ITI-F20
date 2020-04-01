<?php include '../app/views/partials/menu.php'; ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--    Hello there, --><?//=$viewbag['username']?>
    <form>
        <div class="form-group">
            <label for="exampleInputTitle">Title</label>
            <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="TitleHelp" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="exampleInputPicture">Picture</label>
            <input type="file" class="form-control" id="exampleInputPicture" placeholder="Picture">
        </div>
        <div class="form-group">
            <label for="exampleInputDescription">Description for picture:</label>
            <textarea cols="50" rows="6" name="description" id="description" value="" maxlength="250" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php include '../app/views/partials/foot.php'; ?>