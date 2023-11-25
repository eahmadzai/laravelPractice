<div class="mb-3 col-md-12">
    <label class="form-label">Title</label>
    <input type="text" value="{{ old('title') ?? $detail->title }}" class="form-control" name="title"
        placeholder="Title">
</div>
<div class="mb-3 col-md-12">
    <label class="form-label">Content</label>
    <input type="text" value="{{ old('content') ?? $detail->content }}" class="form-control" name="content"
        placeholder="Content">
</div>
<div class="mb-3 col-md-12">
    <label class="form-label">Name</label>
    <input type="text" value="{{ old('name') ?? $detail->name }}" class="form-control" name="name"
        placeholder="Content">
</div>
<div class="mb-3 col-md-12">
    <label class="form-label">Job</label>
    <input type="text" value="{{ old('content') ?? $detail->job }}" class="form-control" name="job"
        placeholder="Content">
</div>
<div class="mb-3 col-md-12">
    <label class="form-label">Testimonial Image</label>
    <input type="file" name="image" class="form-control">
</div>
