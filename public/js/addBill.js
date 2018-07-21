$(document).ready(function () {
    //Get
    var form = document.querySelector('#form');
    var button = document.querySelector('.addItems');
    var divJs = document.querySelector(".divJs");
    button.addEventListener('click' , onClick);

//Append
    function onClick(e) {
        //Create Parent Div
        var div = document.createElement('div');
        div.className ="form-group row";
        /*
         ================ Quantity =============
         */
        var div_1 = document.createElement('div');
        div_1.className ="col-sm-2";
        var inputQuantity = document.createElement('input');
        inputQuantity.setAttribute('name' , 'quantity1');
        inputQuantity.className = "form-control";
        var labelQuantity = document.createElement('label');
        labelQuantity.appendChild(document.createTextNode('الكمية المطلوبة'));
        div_1.appendChild(inputQuantity);
        div.appendChild(div_1);
        div.appendChild(labelQuantity);
        /*
         //Create Parent Div for category
         var ParentDivCategory = document.createElement('div');
         div.className ="col-sm-3";
         //Create Input for category
         var inputCategory = document.createElement('input');
         inputCategory.setAttribute('name' , 'price1');
         inputCategory.className = "form-control";
         //Create Label Price
         var labelCategory = document.createElement('label');
         //labelCategory.className = "col-sm-1 col-form-label";
         labelCategory.appendChild(document.createTextNode('صنف'));
         */
        //Create
        //Append
        // ParentDivCategory.appendChild(labelCategory);
        // ParentDivCategory.appendChild(inputCategory);
        //div.appendChild(ParentDivCategory);

        divJs.appendChild(div);
        //form.appendChild(divJs);
        //form.appendChild(input);
    }
});