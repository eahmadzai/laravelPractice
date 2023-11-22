<div class="mb-3 col-md-12">
    <label class="form-label">Title</label>
    <input type="text" value="{{ old('title') ?? $provide->title }}" class="form-control" name="title"
        placeholder="Title">
</div>
<div class="mb-3 col-md-12">
    <label class="form-label">Content</label>
    <input type="text" value="{{ old('content') ?? $provide->content }}" class="form-control" name="content"
        placeholder="Content">
</div>
