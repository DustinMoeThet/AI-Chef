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
  container.innerHTML = '';

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
  const aiBox = document.getElementById('aiResponse');
  aiBox.innerText = "Loading recipe...";

  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  const response = await fetch('/ask', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': csrfToken,
      'Accept': 'application/json'
    },
    body: JSON.stringify({ ingredients: selected })
  });

  const data = await response.json();
    aiBox.innerText = data.reply;

    selected = [];
    updateSelectedIngredients();
}
