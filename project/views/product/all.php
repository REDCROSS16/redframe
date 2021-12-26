<h1><?=$h1;?></h1>
<table class="table">
    <tr>
        <th>Название</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>страница</th>
    </tr>
    <?php
    foreach ($products as $product) {
        echo "<tr>
                <td> {$product['name']} </td>
                <td> {$product['cost']} </td>
                <td> {$product['quantity']} </td>
                <td> <a href='/product/{$product['id']}/'>{$product['name']}</a> </td>
        </tr>";
    }
    ?>
</table>
