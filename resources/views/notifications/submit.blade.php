<form action="/submit-message" method="post">
    @csrf
    <div>
        <label for="category">Category:</label>
        <select name="category" id="category">
            @foreach($categories as $category)
                <option value="{{ $category }}">{{ $category }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea>
    </div>
    <button type="submit">Submit</button>
</form>
