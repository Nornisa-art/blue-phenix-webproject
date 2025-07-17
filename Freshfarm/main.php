
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #FEFBC7;
        }
        .logo {
            height: 60px;
            width: auto;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: contain;
          }

       nav {
           background: #0D5EA6;
           color: white;
           display: flex;
           justify-content: space-between;
           align-items: center;
           padding: 0 30px;
           height: 80px;
           flex-wrap: wrap;
           box-shadow: 0 2px 5px rgba(0,0,0,0.15);
           position: sticky;
           top: 0;
           z-index: 1000;
          }

        .nav-left {
           display: flex;
           align-items: center;
           gap: 10px;
        }

       .nav-links {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        nav h2 {
            font-size: 1.8rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            white-space: nowrap;
        }

        nav h2 .green-text {
            color: rgb(246, 248, 248);
            margin-right: 4px;
        }

        nav h2 .gold-text {
            color: #d4af37;
        }
        nav {
            border-radius: 10px;
            padding: 10px; 
            margin: 0;
            height: 90px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 2.5rem;
            padding: 10px 15px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            font-weight: 600;
            white-space: nowrap;
       }

        nav a:hover,
        nav a:focus {
            background-color: rgba(255, 255, 255, 0.15);
        }
        .products {
           flex-grow: 1;
           display: grid;
           grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
           gap: 30px;
           max-width: 1200px;
           margin: 0 auto;
           padding: 0 15px;
           padding-top: 30px;
        }

        .card {
            padding: 50px;
            background: #ffffff;
            border-radius: 15px;
            color: #2e7d32;
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

       .card:hover {
           transform: scale(1.05);
           box-shadow: 0 15px 30px rgba(0,0,0,0.25);
           cursor: pointer;
        }

       .card img {
          height: 180px;
          object-fit: cover;
          border-top-left-radius: 15px;
          border-top-right-radius: 15px;
          transition: transform 0.4s ease;
       }

       .card:hover img {
          transform: scale(1.1);
       }

      .card-body {
         padding: 20px;
         flex-grow: 1;
         display: flex;
         flex-direction: column;
         justify-content: space-between;
      }

     .card-title {
        font-weight: 700;
        font-size: 1.3rem;
        margin-bottom: 10px;
     }

    .price {
       font-size: 1.1rem;
       font-weight: 700;
       margin-bottom: 20px;
       color:rgb(18, 19, 18);
    }
    form button {
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

    form button:hover {
      animation: bounce 0.5s;
      background:rgb(60, 97, 206);
      box-shadow: 0 8px 18px rgba(62, 124, 30, 0.7);
      transform: translateY(-4px);
    }


        
    </style>
</head>
<body>
<nav role="navigation" aria-label="Main navigation">
  <div class="nav-left">
    <img src="assets/images/logo.jpg" alt="Freshfarm Logo" class="logo" />
    <h2>
      <span class="green-text">Fresh</span><span class="gold-text">farm</span>
    </h2>
  </div>
  <div class="nav-links">
    <a href="#" tabindex="0">Cart</a>
  </div>
  </nav>
   
  <div class="products">
    <div class="card">
        <img src="assets/images/assorted.jpg" >
        <h2>Assorted Vegetables</h2>
        <h3>P 120 per kilo</h3>
        <form method="POST" action="vieworder.php">
            <button type="submit">Add to Cart 🛒</button>
            <button type="submit">View Order</button>
          </form>
    </div>
    <div class="card">
        <img src="assets/images/tomatoes.jpg" >
        <h2>Tomatoes</h2>
        <h3>P 100 per kilo</h3>
        <form method="POST" action="vieworder.php">
            <button type="submit" href>Add to Cart 🛒</button>
            <button type="submit">View Order</button>
          </form>
    </div>
    <div class="card">
        <img src="assets/images/corn.jpg" >
        <h2>Fresh Corn</h2>
        <h3>P 80 per kilo</h3>
        <form method="POST" action="vieworder.php">
            <button type="submit">Add to Cart 🛒</button>
            <button type="submit">View Order</button>
          </form>
    </div>

  </div>

</body>
</html>