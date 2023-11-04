const produits = document.querySelectorAll('.produits li');

produits.forEach(produit => {
  produit.addEventListener('mouseover', function() {
    this.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.5)';
  });
  
  produit.addEventListener('mouseout', function() {
    this.style.boxShadow = 'none';
  });
});
