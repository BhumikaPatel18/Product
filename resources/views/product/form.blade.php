<div class="form-group">
  <label for="name">Name</label>
  <input type="text" name="name" id="name" class="form-control" placeholder="enter name" value="{{ $product->name ?? '' }}">
</div>

<div class="form-group">
  <label for="description">Description</label>
  <input type="text" name="description" id="description" class="form-control" placeholder="enter description" value="{{ $product->description ?? '' }}">
</div>

<div class="form-group">
  <label for="price">Price</label>
  <input type="text" name="price" id="price" class="form-control" placeholder="enter product price" value="{{ $product->price ?? '' }}">
</div>

<div class="form-group">
  <label for="quantity">Quantity</label>
  <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Enter Product's Quantity" value="{{ $product->quantity ?? '' }}">
</div>

<div class="form-group">
  <label for="image">Image</label>
  <input type="file" name="image" id="image" class="form-control" accept="image/*">
  <span>{{$product->image ?? ''}}</span>
</div>
<br>
