document.addEventListener('DOMContentLoaded', function() {


  let children = 0;
  let children_8 = 0;
  let adult = 0;
  let children_price = 12.50;
  let children_8_price = 13.50;
  let adult_price = 15;


  document.querySelector('#children').addEventListener('change', () => {
    children = document.querySelector('#children').value;
    Price()
  });

  document.querySelector('#children_8').addEventListener('change', () => {
    children_8 = document.querySelector('#children_8').value;
    Price()
  });

  document.querySelector('#adult').addEventListener('change', () => {
    adult = document.querySelector('#adult').value;
    Price()
  });

  function Price() {
    document.querySelector('#total_price').innerHTML = children * children_price + children_8 * children_8_price + adult * adult_price +'€';
  }
});
