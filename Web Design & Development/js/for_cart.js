function increase(x){
    var number = document.getElementsByTagName('input')[x].value;
    if(number>=1){
        number = Number(number) + 1;
        document.getElementsByTagName('input')[x].value = Number(number);
        if(document.getElementsByTagName('input')[x].value==0){
            document.getElementsByTagName('input')[x].value = 1
        }
        final(x);
    }  
}

function decrease(x){
    var number = document.getElementsByTagName('input')[x].value;
    if(number>=1){
        number = Number(number) - 1;
        document.getElementsByTagName('input')[x].value = Number(number);
        if(document.getElementsByTagName('input')[x].value==0){
            document.getElementsByTagName('input')[x].value = 1
        }
        final(x);
    }
}

function final(z){
    var fv = document.getElementsByClassName('actual')[z-1].innerHTML;
    fv = Number(fv.substring(10,));
    var number = document.getElementsByTagName('input')[z].value;
    total = fv * number;
    document.getElementsByClassName('cartTotalPrice')[z-1].innerHTML = "£ "+ total;
    Total(z);
}

function Total(z){
    var s = [0];
    var i = 0;
    while(i<document.getElementsByClassName('cartTotalPrice').length){
        d = document.getElementsByClassName('cartTotalPrice')[i].innerHTML;
        d = Number(d.substring(2,)); 
        s.push(d);
        i = i + 1;
    }
    i = i + 1
    while(true){
        if(document.getElementsByClassName('cartTotalPrice')[i]!==undefined){
            d = document.getElementsByClassName('cartTotalPrice')[i].innerHTML;
            d = Number(d.substring(2,)); 
            s.push(d);
            
        }
        else{
            break;
        }
        i = i + 1;
    }
    
    var sum = 0;
    for(j=0;j<s.length;j++){
        sum = sum + s[j];
    }
    document.getElementById('total1').innerHTML = "£ "+sum+".00";
    document.getElementById('total2').innerHTML = "£ "+sum+".00";

  }

function done(){
    alert("Your order will be delivered shortly. Thank You!");
}

