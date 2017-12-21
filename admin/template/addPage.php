<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h3>Add new page</h3><hr>
            <form method="post" action="?action=insertPage">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Title</label>
                        <input name="title" type="text" class="form-control" placeholder="Title" id="name" required>
                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Content</label>
                        <textarea name="content" rows="5" class="form-control" placeholder="Content" id="message" required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div class="control-group">
                    <div class="form-group col-xs-3 controls">
                        <label>Page active?</label>

                    </div>
                    <div class="form-group col-xs-9 controls">
                        <select name="is_active" class="form-control">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>

                    </div>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Create new page</button>
                </div>
            </form>
        </div>
    </div>
</div>

<hr>