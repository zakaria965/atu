<!-- <x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white text-center">
                        <h4>Edit Book</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('Book.update', $book->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <input type="text" name="title" class="form-control" value="{{ $book->title }}" placeholder="Book Title" required>
                            </div>
                            <div class="mb-3">
                                <textarea name="description" class="form-control" rows="3" placeholder="Book Description" required>{{ $book->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="author" class="form-control" value="{{ $book->author }}" placeholder="Author" required style="height: 60px;">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout> -->
