<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/css/bootstrap.min.css"
        integrity="sha512-fw7f+TcMjTb7bpbLJZlP8g2Y4XcCyFZW8uy8HsRZsH/SwbMw0plKHFHr99DN3l04VsYNwvzicUX/6qurvIxbxw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-light">

<div class="container py-5">
  <h1 class="mb-4 text-center">👨‍🍳 AI Cooking Chef</h1>

  <!-- Ingredient Selection -->
  <div class="mb-4">
  <h4>Choose Your Ingredients:</h4>

  <!-- 🥩 Meat Section -->
  <div class="mb-3">
    <h5>🥩 Meat</h5>
    <div class="row">
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-danger" onclick="addIngredient('chicken')">Chicken</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-danger" onclick="addIngredient('beef')">Beef</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-danger" onclick="addIngredient('pork')">Pork</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-danger" onclick="addIngredient('lamb')">Lamb</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-danger" onclick="addIngredient('bacon')">Bacon</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-danger" onclick="addIngredient('ham')">Ham</button></div>
    </div>
  </div>

  <!-- 🐟 Seafood Section -->
  <div class="mb-3">
    <h5>🐟 Seafood</h5>
    <div class="row">
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-info" onclick="addIngredient('salmon')">Salmon</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-info" onclick="addIngredient('shrimp')">Shrimp</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-info" onclick="addIngredient('tuna')">Tuna</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-info" onclick="addIngredient('crab')">Crab</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-info" onclick="addIngredient('squid')">Squid</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-info" onclick="addIngredient('mussels')">Mussels</button></div>
    </div>
  </div>

  <!-- 🥦 Vegetables Section -->
  <div class="mb-3">
    <h5>🥦 Vegetables</h5>
    <div class="row">
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-success" onclick="addIngredient('onion')">Onion</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-success" onclick="addIngredient('carrot')">Carrot</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-success" onclick="addIngredient('spinach')">Spinach</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-success" onclick="addIngredient('broccoli')">Broccoli</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-success" onclick="addIngredient('tomato')">Tomato</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-success" onclick="addIngredient('garlic')">Garlic</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-success" onclick="addIngredient('bell pepper')">Bell Pepper</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-success" onclick="addIngredient('cabbage')">Cabbage</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-success" onclick="addIngredient('mushroom')">Mushroom</button></div>
    </div>
  </div>

  <!-- 🍚 Grains & Carbs -->
  <div class="mb-3">
    <h5>🍚 Grains & Carbs</h5>
    <div class="row">
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-primary" onclick="addIngredient('rice')">Rice</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-primary" onclick="addIngredient('noodles')">Noodles</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-primary" onclick="addIngredient('pasta')">Pasta</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-primary" onclick="addIngredient('bread')">Bread</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-primary" onclick="addIngredient('potato')">Potato</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-primary" onclick="addIngredient('quinoa')">Quinoa</button></div>
    </div>
  </div>

  <!-- 🧀 Dairy & Eggs -->
  <div class="mb-3">
    <h5>🧀 Dairy & Eggs</h5>
    <div class="row">
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-warning" onclick="addIngredient('egg')">Egg</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-warning" onclick="addIngredient('cheese')">Cheese</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-warning" onclick="addIngredient('milk')">Milk</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-warning" onclick="addIngredient('butter')">Butter</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-warning" onclick="addIngredient('yogurt')">Yogurt</button></div>
    </div>
  </div>

  <!-- 🧂 Spices & Sauces -->
  <div class="mb-3">
    <h5>🧂 Spices & Sauces</h5>
    <div class="row">
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-dark" onclick="addIngredient('salt')">Salt</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-dark" onclick="addIngredient('pepper')">Pepper</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-dark" onclick="addIngredient('soy sauce')">Soy Sauce</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-dark" onclick="addIngredient('chili')">Chili</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-dark" onclick="addIngredient('curry powder')">Curry Powder</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-dark" onclick="addIngredient('ketchup')">Ketchup</button></div>
    </div>
  </div>

  <!-- 🥫 Others -->
  <div class="mb-3">
    <h5>🥫 Others</h5>
    <div class="row">
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-secondary" onclick="addIngredient('tofu')">Tofu</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-secondary" onclick="addIngredient('beans')">Beans</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-secondary" onclick="addIngredient('corn')">Corn</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-secondary" onclick="addIngredient('peas')">Peas</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-secondary" onclick="addIngredient('lemon')">Lemon</button></div>
      <div class="col-12 col-sm-4 mb-2"><button class="btn w-100 btn-outline-secondary" onclick="addIngredient('coconut milk')">Coconut Milk</button></div>
    </div>
  </div>
</div>


  <!-- Selected Ingredients -->
  <div class="mb-4">
    <h5>📝 Selected Ingredients:</h5>
    <div id="selectedIngredients" class="alert alert-info">No ingredients selected.</div>
  </div>

  <!-- Ask Button -->
  <div class="text-center mb-4">
    <button class="btn btn-lg btn-success" onclick="askChef()">Ask the Chef</button>
  </div>

  <!-- AI Response -->
  <div class="mb-4">
    <h5>🍽️ AI Suggestion:</h5>
    <pre id="aiResponse" class="bg-white p-3 border rounded"></pre>
  </div>
</div>

<!-- External Script -->

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/js/bootstrap.min.js"
    integrity="sha512-zKeerWHHuP3ar7kX2WKBSENzb+GJytFSBL6HrR2nPSR1kOX1qjm+oHooQtbDpDBSITgyl7QXZApvDfDWvKjkUw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/ai_chef.js') }}"></script>
</html>
