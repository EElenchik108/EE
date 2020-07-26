        @csrf
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="slug">Product Slug</label>
            <input type="text" id="slug" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Product Price</label>
            <input type="number" id="price" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Product Description</label>
            <textarea rows="3" cols="5" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}"></textarea>            
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="recommended">Product Recommended</label>
            <select name="recommended" id="recommended"  class="form-control @error('recommended') is-invalid @enderror">
                <option value="0" selected>Not recommended</option>
                <option value="1">Recommended</option> 
            </select>            
            @error('recommended')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div> 

        <div class="form-group">
            <label for="">Category</label>
            <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
            @foreach ($categories as $category)
                <option value="{{ $category->id}}">
                {{ $category->name }}
                </option>
            @endforeach 
                <option value="">No category 
                </option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="img">Product Image</label>
            <input type="file" id="img" name="img" class="form-control @error('img') is-invalid @enderror">
            @error('img')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <button class="btn btn-primary">Save</button>