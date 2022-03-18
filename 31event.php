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
    <div class="col-2"></div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col"></div>
</div>