<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>BMI Calculator</title>
</head>
<body style="background-image: linear-gradient(to left, #36d68a, #00c5bf, #00aedd, #2591d8, #7d71b3);">

    <div class="container">
        <h1 style="text-align: center;">BMI Calculator</h1>
        <div class="d-flex flex-row justify-content-center">
            <body>
                <form action = "pwebmeki.php" method="post">
                <p><label> Masukkan tinggi badan anda dalam CM: </label><input name="hai1" type="text" id="height"></p>
                <p><label> Masukkan berat badan anda dalam KG: </label><input name="hai2" type="text" id="weight"></p>
                <div class="form-group">
                    <button style="align-content: center;">Hitung !</button>
                </div>
                <div id="results"></div>
                <div id="weight-guide">
                <h3>BMI Weight Guide</h3>
                <p>Under Weight = Less than 18.6</p>
                <p>Normal Range = 18.6 and 24.9</p>
                <p>Overweight = Greater than 24.9</p>
                </div>
                </form>
                </div>
            </body>
            <script src="script.js"></script>
                </div>
        </div>   
    </div>
</body>
<script>
    const form = document.querySelector('form');

form.addEventListener('submit', function(e){
    e.preventDefault();
    
    const height = parseInt(document.querySelector('#height').value);
    const weight = parseInt(document.querySelector('#weight').value);
    const results = document.querySelector('#results');
    
    if((height === '') || (height < 0) || (isNaN(height))){
        
        results.innerHTML = "Please provide a valid height";
        
    } else if (weight === '' || weight < 0 || isNaN(weight)){
        results.innerHTML = "Please provide a valid weight";
    } else {

    const bmi = (weight / ((height*height)/10000)).toFixed(2);
    
    results.innerHTML = `<span>${bmi}</span>`
    }
    
    
});
</script>
</html>
