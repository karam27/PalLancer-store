<div class="form-group mb-3">
    <label for="">Name:</label>
    <input type="text" name="name" class="form-control" value="{{ $category->name }} ">
</div>

<div class="form-group mb-3">
    <label for="">Description:</label>
    <textarea name="description" class="form-control"> {{ $category->description }}</textarea>
</div>
<div class="form-group mb-3">
    <label for="">Parent</label>
    <select name="parnet_id" class="form-control">
        @foreach ($parents as $parent)
            <option value=" {{ $parent->id }}"@if ($parent->id == $category->parent_id) > selected @endif>
                {{ $parent->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group mb-3">
    <label for="">Image:</label>
    <input type="file" name="image" class="form-control">
</div>
<div class="form-group mb-3">
    <label for="">Status:</label>
    <label for=""> <input type="radio" name="status" value="active"
            @if ($category->status == 'active') checked @endif>
        Active</label>
    <label for=""> <input type="radio" name="status" value="inactive"
            @if ($category->status == 'active') checked @endif>
        inactive</label>
</div>
<div>
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'Save' }}</button>
</div>
