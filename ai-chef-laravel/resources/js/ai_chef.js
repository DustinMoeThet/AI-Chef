let selected = [];

function addIngredient(ingredient) {
  if (!selected.includes(ingredient)) {
    selected.push(ingredient);
    updateSelectedIngredients();
  }
}

function removeIngredient(ingredient) {
  selected = selected.filter(item => item !== ingredient);
  updateSelectedIngredients();
}

function updateSelectedIngredients() {
  const container = document.getElementById('selectedIngredients');
  container.innerHTML = ''; // Clear previous badges

  if (selected.length === 0) {
    container.innerText = 'No ingredients selected.';
    return;
  }

  selected.forEach(ingredient => {
    const badge = document.createElement('span');
    badge.className = 'badge bg-info text-dark me-2 mb-1';
    badge.style.cursor = 'pointer';
    badge.innerHTML = `${ingredient} <span onclick="removeIngredient('${ingredient}')">&times;</span>`;
    container.appendChild(badge);
  });
}

async function askChef() {
  const prompt = "Suggest a recipe using: " + selected.join(', ');
  document.getElementById('aiResponse').innerText = prompt;

  // API call goes here later
}
