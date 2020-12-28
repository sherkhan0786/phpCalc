// Declaring Variable
var dispValue = '';
var preValue = 0;
var result =0;
opt = '+';
var reset = 1;


// To Clear screen 
function clearBox(){
    dispValue = '';
    opt = "+";
    document.getElementById('display').value = dispValue;
}

function ajaxx(opt){
    $.ajax({
        type:'POST',
        url:'main.php',
        data:{'num':dispValue,'old':preValue ,'opt1':opt},
        success:function(data){
            console.log(this.data);
            preValue = data;
            document.getElementById('display').value = data;
            result = data;
        }
    });
}

// Cla
// function dis()
// {
//     document.getElementById('display').value=0;
// }
// To get Numeric Input
function calculate (operand) {
    if (reset == 0){
        dispValue = 0;
        preValue = 0;
        opt = '+';
        result = 0;
        reset = 1;
    }
    dispValue += operand;
    console.log(dispValue);
    document.getElementById('display').value = dispValue;
}

// To perform operator on numeric value;
function operator (optt) {
    switch (opt) {
        case '+':
        ajaxx(opt);
            break;
    
        case '-':
            ajaxx(opt);
            break;

        case '*':
            ajaxx(opt);
            break;

        case '/':
            ajaxx(opt);
            break;
    }
    dispValue = '';
    opt = optt;

    //  Getting Value after Result
    if (opt == '='){
        result = preValue;
        document.getElementById('display').value = result;
        opt = '+';

       
    }
}
    // else{
    //     x=result+optt;
    //     document.getElementById('display').value = x;
    // }