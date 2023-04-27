<!DOCTYPE html>
<html>
  <head>
    <title>Calculator</title>
    
       <!-- CSS styling for calculator--> 
      <style>
        .calculator {
    margin: auto;
    width: 300px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    font-family: Arial, sans-serif;
  }
  
  .screen {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    height: 60px;
    padding: 0 10px;
    font-size: 30px;
    border-bottom: 1px solid #ccc;
  }
  
  .button-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 50px;
    padding: 0 10px;
  }
  
  button {
    width: 70px;
    height: 40px;
    border: none;
    border-radius: 5px;
    font-size: 20px;
    color: #fff;
    background-color: #333;
    cursor: pointer;
    margin: 3px;
  }
  
  button:hover {
    background-color: #555;
  }
  
  button:active {
    background-color: #222;
  }
  
      </style>
    
  </head>
  <body>
    <div class="calculator">
      <div class="screen">
        <!-- Display screen for calculator -->
      </div>
      <div class="button-row">
        <button>1</button>
        <button>2</button>
        <button>3</button>
        <button>+</button>
      </div>
      <div class="button-row">
        <button>4</button>
        <button>5</button>
        <button>6</button>
        <button>-</button>
      </div>
      <div class="button-row">
        <button>7</button>
        <button>8</button>
        <button>9</button>
        <button>*</button>
      </div>
      
      <div class="button-row">
        <button>0</button>
        <button>.</button>
        <button>Clear</button>
        <button>=</button>
        <button>/</button>
    </div>
    </div>

    <script>
      // JavaScript code for calculator functionality


      // Get the calculator display screen element
        var screen = document.querySelector('.screen');

      // Get all the calculator buttons
        var buttons = document.querySelectorAll('.button-row button');

     // Add click event listeners to each button
        buttons.forEach(function(button) {
        button.addEventListener('click', function() {
    // Get the button label
        var label = this.innerHTML;

    // If the label is "=" calculate the result
        if (label === '=') {
      var result = eval(screen.innerHTML);
      screen.innerHTML = result;
        }
    // If the label is "Clear" reset the screen
        else if (label === 'Clear') {
      screen.innerHTML = '';
        }
    // Otherwise append the label to the screen
        else {
      screen.innerHTML += label;
    }
  });
});

    </script>

    <?php
      // PHP code for calculator functionality
        

    ?>
  </body>
</html>
