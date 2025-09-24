<x-layout>
    <div class="container mt-4">
        <h2 class="mb-4 text-center">Book List</h2>

        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($Books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->description }}</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('Book.edit', $book->id) }}" class="btn btn-success btn-sm">Edit</a>
                            
                            <form action="{{ route('Book.destroy', $book->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
