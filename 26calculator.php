<script>
    function doNum(no)
    {
        //console.log(no);
        var display = document.querySelector("#display");
        display.value = no;
    }
</script>

<div class="row">
    <div class="col-8">
        <input type="text" class="form-control text-end fw-bold" id="display" value="0" readonly>   
    </div>
    <div class="col">    
    </div>
</div>
<div class="row">
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btn1" onClick="doNum(1)">1</button>    
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btn2" onClick="doNum(2)">2</button>    
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btn3">3</button>    
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btnPlus" onClick="doPlus()">+</button>    
    </div>
    <div class="col">    
    </div>
</div>
<div class="row">
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btn4">4</button>    
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btn5">5</button>    
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btn6">6</button>    
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btnMinus">-</button>    
    </div>
    <div class="col">    
    </div>
</div>
<div class="row">
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btn7">7</button>    
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btn8">8</button>    
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btn9">9</button>    
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btnProduct">*</button>    
    </div>
    <div class="col">    
    </div>
</div>

<div class="row">
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btn0">0</button>    
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btnDivide">/</button>    
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btnCE">CE</button>    
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-primary form-control" id="btnEqual" onClick="doEqual()">=</button>    
    </div>
    <div class="col">    
    </div>
</div>
