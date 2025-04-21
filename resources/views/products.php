<div class="container">
    <h2>Product Table</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price (INR)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $product)
            echo"
                <tr>
                    <td>{{ $product[Product_name] }}</td>
                    <td>{{ $product[Price] }}</td>
                </tr>
            ";
            ?>
        </tbody>
    </table>
</div>