
<div class="mdl-cell mdl-shadow--2dp mdl-color--white mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone inner-cell-container mobile-cell-container">
<h2 class="h2-header">
    <a href="#" class="link-header">Edit Post</a>
</h2>
<form id="post-form" action="<?php echo site_url('/backend/post/save_edit_post/' . $article['article_id']); ?>" method="post">
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--6-col">
            <div class="mdl-textfield mdl-cell--12-col">
              <label><strong>Title</strong></label>
              <input id="f-title" class="mdl-textfield__input" name="title" type="text" required value="<?php echo $article['title']; ?>" placeholder="input title...">
            </div>
            <div class="mdl-textfield mdl-cell--12-col">
              <label><strong>Image thumbnail</strong></label>
              <input id="f-thumbnail" class="mdl-textfield__input" name="thumbnail" type="text" required value="<?php echo $article['img_thumbnail']; ?>" placeholder="input Thumbnail...">
            </div>
            <div class="mdl-textfield mdl-cell--12-col">
              <label><strong>Posted Date</strong></label>
              <input id="f-date" class="mdl-textfield__input" name="posted_date" type="datetime-local" required value="<?php echo strftime('%Y-%m-%dT%H:%M:%S', strtotime($article['created_at']));?>" placeholder="input Thumbnail...">
              <small style="color:#999">Use Chrome or Opera for this</small>
            </div>
            <div class="mdl-textfield mdl-cell--12-col">
                <input id="f-code" class="" name="contain_code" type="checkbox">
                Contain Code <small style="color:#999">(javascript, php etc)</small>?
            </div>
            <button class="mdl-button mdl-button--raised" id="submit-post" type="submit">
            Submit
            </button>
        <br>
    </div>
    <div class="mdl-cell mdl-cell--6-col">
        <label><strong>Content</strong></label>
        </hr>
        <textarea  id="content" name="content"><?php echo $article['content']; ?></textarea>
    </div>
</div>
</form>
</div>
