<script>
    function setCommand(cmd)  // bold, italic
    {
        var editor = document.querySelector("#editor");
        var html = document.querySelector("#html");
        var content = document.querySelector("#content");

        document.execCommand(cmd);

        html.innerHTML = editor.innerHTML;
        content.innerText = editor.innerText;
    }

    function setHTML()
    {
        var editor = document.querySelector("#editor");
        var html = document.querySelector("#html");
        var content = document.querySelector("#content");

        html.innerHTML = editor.innerHTML;
        content.innerText = editor.innerText;

        // google. wysiwyg execCommand example
    }
</script>


<div class="row">
    <div class="col">
        <button type="button" class="btn btn-secondary btn-sm" onClick="setCommand('bold')">
            <span class="material-icons">format_bold</span>
        </button> 
        <button type="button" class="btn btn-secondary btn-sm" onClick="setCommand('italic')">
            <span class="material-icons">format_italic</span>
        </button>
    </div>
</div>
<div class="row">
    <div class="col border"  id="editor"  onKeyUp="setHTML()" contenteditable="true" style="height:500px; overflow-y:auto;">
        
    </div>
</div>
<div class="row">
    <div class="col">
        <textarea id="html" class="form-control"  rows="5"></textarea>
    </div>
</div>
<div class="row">
    <div class="col">
        <textarea id="content" class="form-control"  rows="5"></textarea>
    </div>
</div>

