<x-layout>
    <div class="container mt-4">
        <h2 class="mb-4 text-center">Book List</h2>

        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Books as $index => $b)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $b->title }}</td>
                    <td>{{ $b->description }}</td>
                    <td>{{ $b->author }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
