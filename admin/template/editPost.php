<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <h3>Edit "<?php echo $post['title']; ?>" page</h3><hr>
            <form method="post" action="?action=updatePost&ID=<?php echo $post['id']; ?>">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Title</label>
                        <input value="<?php echo $post['title']; ?>" name="title" type="text" class="form-control" placeholder="Title" id="name" required>
                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Content</label>
                        <textarea name="content" rows="5" class="form-control" placeholder="Content" required><?php echo $post['content']; ?></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Edit post</button>
                </div>
            </form>
        </div>
    </div>
</div>

<hr>