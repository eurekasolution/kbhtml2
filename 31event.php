
<script>
    function controlClick()
    {
        // alert('click');
        let idClick = document.querySelector("#idClick");
        idClick.className = "col text-primary text-end";
    }

    function controlDblClick(obj)
    {
        alert(obj.innerText);
    }

    function overImage(obj)
    {
        // son -> paris

        //alert(obj.src);
        obj.src = "data/img/paris.jpg";

    }
    function outImage(obj)
    {
        // paris -> son

        //alert(obj.src);
        obj.src = "data/img/son.jpg";

    }    

    gCount = 0;

    function moveMouse(obj)
    {
        console.log("move..." + (++gCount));
    }
    function downMouse(obj)
    {
        console.log("down...");
    }
    function upMouse(obj)
    {
        console.log("up...");
    }

    function keyDown()
    {
        console.log("key Down...");
    }
    function keyUp()
    {
        console.log("key Up...");
    }
    function keyPress()
    {
        console.log("key Press...");
    }
    function keyFocus()
    {
        let help = document.querySelector("#help");
        help.className = "col text-primary";
        help.innerText = "이름을 입력하세요";
    }
    function keyBlur()
    {
        let help = document.querySelector("#help");
        help.className = "col";
        help.innerText = "";
    }

    function controlChange()
    {
        //alert(obj.value);
        /*
        if(obj.value != "0")
        {

        }
        */

        var f = document.testForm;
        alert(f.city.value);
    }

    function showHide(obj)
    {
        //alert(obj.checked);
        let idShow = document.querySelector("#idShow");
        if(obj.checked == true)
        {
            idShow.style.display = '';
        }else
        {
            idShow.style.display = 'none';
        }
    }
</script>

<div class="row">
    <div class="col-2">onClick</div>
    <div class="col" id="idClick"  onClick="controlClick()">
        Col EVENT
    </div>
</div>
<div class="row">
    <div class="col-2">onDblClick</div>
    <div class="col" onDblClick="controlDblClick(this)">Dobule Click Event </div>
</div>
<div class="row">
    <div class="col-2">Mouse</div>
    <div class="col">
        <img src="data/img/son.jpg" class="img-fluid rounded" onMouseOver=overImage(this) onMouseOut=outImage(this) onMouseMove=moveMouse(this) onMouseDown=downMouse(this) onMouseUp=upMouse(this)>
    </div>
</div>
<div class="row">
    <div class="col-2">Key</div>
    <div class="col">
        <input type="text" id="idKey" onFocus=keyFocus() onBlur=keyBlur() onKeyUp=keyUp() onKeyPress=keyPress() onKeyDown=keyDown() class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-2">도움말</div>
    <div class="col" id="help"></div>
</div>
<form name="testForm">
<div class="row">
    <div class="col-2">onChange</div>
    <div class="col">
        <select name="city" class="form-control" onChange=controlChange()>
            <option value="0">=== 선택하세요 ===</option>
            <option value="1">서울</option>
            <option value="2">경기</option>
        </select>
    </div>
</div>
</form>
<div class="row">
    <div class="col-2">onClick</div>
    <div class="col">
        <input type="checkbox" onClick=showHide(this) checked> ShowHide

    </div>
</div>
<div class="row" id="idShow" >
    <div class="col-2">AAA</div>
    <div class="col">BBB</div>
</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col"></div>
</div>