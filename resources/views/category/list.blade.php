<table class="table table-hover table-bordered align-middle mb-0">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Owner</th>
        <th>Control</th>
        <th>Created_At</th>
    </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->user->name }}</td>
                <td>
                    <a href="{{ route("category.edit",$category->id) }}" class="btn btn-warning btn-sm ">
                        Edit
                    </a>
                    <form action="{{ route('category.destroy',$category->id) }}" method="post" class="d-inline-block">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger btn-sm">
                            Del
                        </button>
                    </form>
                </td>
                <td>
                    <p class="mb-0 small" >
                        {{ $category->created_at->format('d/m/Y') }}
                    </p>

                    <p class="mb-0 small" >
                        {{ $category->created_at->format('h:i A') }}
                    </p>
                </td>
            </tr>
        @empty
            <td colspan="5">There is no category</td>
        @endforelse
    </tbody>
</table>

{{ $categories->links() }}
