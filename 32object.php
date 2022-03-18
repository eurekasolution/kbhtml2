<script>
    function popWindow()
    {
        // window.alert('pop');
        for(let i=1; i<=1; i++)
        {
            let j = i * 50;
            window.open('pop.html', 'kbPopWindow'+i, 'top='+j+', left='+j+', width=500, height=300, resizable=yes');
        }
    }
</script>

<div class="row">
    <div class="col-2">팝업</div>
    <div class="col">
        <button type="button" class="btn btn-primary form-control" onClick=popWindow()>팝업 생성</button>
    </div>
</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col"></div>
</div>

<div class="row">
    <div class="col-2"></div>
    <div class="col"></div>
</div>

