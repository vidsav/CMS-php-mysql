<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h3>Add new page</h3><hr>
            <form method="post" action="?action=insertPost">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Title</label>
                        <input name="title" type="text" class="form-control" placeholder="Title" id="name" required>
                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Content</label>
                        <textarea name="content" rows="5" class="form-control" placeholder="Content" required></textarea>
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Create post</button>
                </div>
            </form>
        </div>
    </div>
</div>

<hr>