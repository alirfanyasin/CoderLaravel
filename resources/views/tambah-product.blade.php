<h1>Tambah Product</h1>
<form action="/products" method="POST">
  @csrf
  <div style="margin-bottom: 20px;">
    <label for="name">Nama Produk</label>
    <input type="text" name="name" id="name">
    @error('name')
      <small style="color: red;">{{ $message }}</small>
    @enderror
  </div>
  <div style="margin-bottom: 20px;">
    <label for="img">Image URL</label>
    <input type="text" name="image" id="img">
    @error('image')
      <small style="color: red;">{{ $message }}</small>
    @enderror
  </div>
  <div style="margin-bottom: 20px;">
    <label for="price">Price</label>
    <input type="text" name="price" id="price">
    @error('price')
      <small style="color: red;">{{ $message }}</small>
    @enderror
  </div>
  <div style="margin-bottom: 20px;">
    <label for="stock">Stok</label>
    <input type="text" name="stock" id="stock">
    @error('stock')
      <small style="color: red;">{{ $message }}</small>
    @enderror
  </div>

  <button type="submit">Submit</button>
</form>
