<x-layout>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">create from</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white text-center">
                        <h4>Add New Book</h4>
                    </div>
                    <div class="card-body  ">
                        <form action="{{ route('Book.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="title" class="form-control" placeholder="Book Title" required>
                            </div>
                            <div class="mb-3">
                                <textarea name="description" class="form-control" rows="3" placeholder="Book Description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="author" class="form-control" placeholder="Author" required style="height: 60px;">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-dark btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
