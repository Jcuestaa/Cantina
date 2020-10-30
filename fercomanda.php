<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("include.inc") ?>
    <title>CANTINA PEDRALBES</title>
</head>
<script>
    function Cart() {
    this.items = [];          
}
Cart.prototype.add = function(item) {
    this.items.push(item);
    return this.items;
};
Cart.prototype.remove = function(id) {
    for (var i = 0; i < this.items.length; i++) {
        id == this.items[i].id ? this.items.splice(i, 1) : false;
    }
    return this.items;
};
Cart.prototype.get = function() {
    return this.items;
};
Cart.prototype.set = function(items) {
    this.items = items;
};
Cart.prototype.getTotal = function() {
    var total = 0;
    $.each(this.items, function(key, value) {
        total += value.price;
    });
    return total;
};
Cart.prototype.printHTMLEdit = function(div) {
    $(div).empty();
    $.each(this.items, function(key, value) {
        $(div).append('// Your HTML code here...');
    });
    $(div).append('<p>Total: ' + this.getTotal() + ' €</p>');
};

var cart = new Cart();
$('.buy-item').click(function(){
    var item = {
        'id': $(this).attr('data-id'),
        'title': $(this).attr('data-title'),
        'description': $(this).attr('data-description'),
        // Your fields here...
        'price': parseFloat($(this).attr('data-price'))
    }
    cart.add(item);
});

</script>
<body>

    <?php include("header1.php")?>
    
    

    <?php include("footer.php")?>

    

</body>
</html>


