<h1>Edit Product</h1>
<form action="/products/{{ $data->id }}" method="POST">
  @csrf
  @method('PATCH')
  <div style="margin-bottom: 20px;">
    <label for="name">Nama Produk</label>
    <input type="text" name="name" id="name" value="{{ $data->name }}">
    @error('name')
      <small style="color: red;">{{ $message }}</small>
    @enderror
  </div>
  <div style="margin-bottom: 20px;">
    <label for="img">Image URL</label>
    <input type="text" name="image" id="img" value="{{ $data->image }}">
    @error('image')
      <small style="color: red;">{{ $message }}</small>
    @enderror
  </div>
  <div style="margin-bottom: 20px;">
    <label for="price">Price</label>
    <input type="number" name="price" id="price" value="{{ $data->price }}">
    @error('price')
      <small style="color: red;">{{ $message }}</small>
    @enderror
  </div>
  <div style="margin-bottom: 20px;">
    <label for="stock">Stok</label>
    <input type="number" name="stock" id="stock" value="{{ $data->stock }}">
    @error('stock')
      <small style="color: red;">{{ $message }}</small>
    @enderror
  </div>

  <button type="submit">Update</button>
</form>
