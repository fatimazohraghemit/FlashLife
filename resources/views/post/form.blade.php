@csrf        
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Post</span>
    </div>
    <input type="text" name="post_content" id="post_content" class="form-control @error('post_content') is-invalid @enderror" placeholder="Write Your Post Here ..." value="{{ old('post_content') ?? $post->post_content }}">
</div>            


<div class="form-group">
    <input type="submit" value="Save" class="btn btn-success">
    <input type="reset" value="Cancel" class="btn btn-warning">
</div>