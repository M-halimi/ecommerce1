
<div>
<button class="bg-slate" wire:navigate href="/addnewproduct/create">Ajouter new product</button>
    <h1>Product List</h1>
    <table class="table-fixed">
        <thead>
            <tr>
                <th>Product</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Image</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($products))
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->Titre }}</td>
                        <td>{{ $product->Description }}</td>
                        <td>{{ $product->Prix }}</td>
                        <td class="text-center">
                            <img src="/image/{{ $product->image }}" alt="Product Image" style="border-radius: 50%" width="50px">
                        </td>
                        <td>{{ $product->categorie->id }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">No products available</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
