var inputSearch = document.getElementById('inputSearch');
var boxSearch = document.getElementById('box-search');

inputSearch.addEventListener('input', function() {
    if (this.value.trim().length > 0) {
      boxSearch.style.display = 'block';
    } else {
      boxSearch.style.display = 'none';
    }
  });