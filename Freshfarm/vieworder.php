<?php include 'databaseconnection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FreshFarm Online Market</title>
  <style>
    body{
        background: white;
        color:rgb(12, 12, 12);
    }
    button {
      background:rgb(255, 222, 6);
      border: none;
      margin: 5px;
      padding: 16px;
      border-radius: 30px;
      color: white;
      font-weight: 700;
      font-size: 1.1rem;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      box-shadow: 0 6px 12px rgba(86, 171, 47, 0.5);
      width: 100%;
    }
    button:hover {
      animation: bounce 0.5s;
      background:rgb(60, 97, 206);
      box-shadow: 0 8px 18px rgba(62, 124, 30, 0.7);
      transform: translateY(-4px);
    }

  </style>
</head>
<body>
  <h1 class="title">FreshFarm Online Market</h1>

  <div class="product-container">
    <?php
    $sql = "SELECT * FROM tbl_products";
    $result = $conn->query($sql);
    if ($result->num_rows > 0):
      while($row = $result->fetch_assoc()):
    ?>
    <div class="product-card">
      <img src="<?php echo $row['image_url']; ?>" alt="Product Image" onclick="openImage('<?php echo $row['image_url']; ?>')">
      <h2><?php echo $row['product_name']; ?></h2>
      <p>₱<?php echo number_format($row['price'], 2); ?> / <?php echo $row['unit_type']; ?></p>
      <button onclick="addToCart(<?php echo $row['product_id']; ?>)">Add to Cart</button>
      <button onclick="viewOrder()">View Order</button>
    </div>
    <?php endwhile; endif; ?>
  </div>

  
  <div id="imageModal" class="modal" onclick="closeImage()">
    <span class="close">&times;</span>
    <img class="modal-content" id="popupImage">
  </div>

 
<div id="orderModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeOrderModal()">&times;</span>
    <h2>Your Order</h2>
    <form id="orderForm">
      <div id="orderItems"></div>
      <p>Total: ₱<span id="totalPrice">0.00</span></p>
      <input type="text" id="customerName" name="customerName" placeholder="Customer Name" required>
      <input type="text" id="contactNumber" name="contactNumber" placeholder="Contact Number" required>
      <button type="submit">Confirm Order</button>
    </form>
  </div>
</div>

<script>
  let cart = {};

  function addToCart(productId) {
    if (!cart[productId]) {
      cart[productId] = { quantity: 1 };
    } else {
      cart[productId].quantity += 1;
    }
    renderCart();
    openOrderModal();
  }

  function renderCart() {
    const orderItems = document.getElementById('orderItems');
    orderItems.innerHTML = '';

    let total = 0;

    <?php
    $products_js = [];
    $result = $conn->query("SELECT * FROM tbl_products");
    while ($row = $result->fetch_assoc()) {
        $products_js[$row['product_id']] = [
            'name' => $row['product_name'],
            'price' => $row['price'],
            'unit' => $row['unit_type']
        ];
    }
    echo "const products = " . json_encode($products_js) . ";\n";
    ?>

    for (let id in cart) {
      const item = cart[id];
      const product = products[id];

      const itemTotal = product.price * item.quantity;
      total += itemTotal;

      orderItems.innerHTML += `
        <div style="margin-bottom: 10px;">
          <strong>${product.name}</strong> - ₱${product.price.toFixed(2)} / ${product.unit}<br>
          Quantity: 
          <input type="number" min="1" value="${item.quantity}" onchange="updateQuantity(${id}, this.value)">
          Subtotal: ₱${itemTotal.toFixed(2)}
        </div>
      `;
    }

    document.getElementById('totalPrice').textContent = total.toFixed(2);
  }

  function updateQuantity(productId, newQty) {
    const qty = parseInt(newQty);
    if (qty > 0) {
      cart[productId].quantity = qty;
    } else {
      delete cart[productId];
    }
    renderCart();
  }

  function openOrderModal() {
    document.getElementById('orderModal').style.display = 'block';
  }

  function closeOrderModal() {
    document.getElementById('orderModal').style.display = 'none';
  }

  function openImage(src) {
    document.getElementById('imageModal').style.display = 'block';
    document.getElementById('popupImage').src = src;
  }

  function closeImage() {
    document.getElementById('imageModal').style.display = 'none';
  }

  
  document.getElementById('orderForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert("Order confirmed!");
    cart = {};
    renderCart();
    closeOrderModal();
  });
</script>

</body>
</html>