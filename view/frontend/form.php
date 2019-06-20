<form action="traitement.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="new_article">
    <div class="form-article col-4">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" class="form-control" required>
                <option value="">--Please choose an option--</option>
                <option value="Action">Action</option>
                <option value="Aventure">Aventure</option>
                <option value="Combat">Independant</option>
                <option value="Hack'n Slash">Hack'n Slash</option>
                <option value="Independant">Combat</option>
                <option value="Race">Race</option>
                <option value="Rpg">Rpg</option>
                <option value="Solo">Solo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
        </div>
            <button type="submit" name="submit">Submit</button>
    </div>
</form>
