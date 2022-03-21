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

    function setFontColor(rgb)
    {
        var editor = document.querySelector("#editor");
        var html = document.querySelector("#html");
        var content = document.querySelector("#content");

        document.execCommand("foreColor", false,  rgb);

        html.innerHTML = editor.innerHTML;
        content.innerText = editor.innerText;
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
    <div class="col">

        <div class="dropdown">
            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                <span class="material-icons text-danger">format_color_text</span>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <button type="button" class="btn btn-sm btn-light text-danger" onClick="setFontColor('#FF0000')">가</button>
                    <button type="button" class="btn btn-sm btn-light text-primary" onClick="setFontColor('#0000FF')">가</button>
                    <button type="button" class="btn btn-sm btn-light text-dark" onClick="setFontColor('#000000')">가</button>
                </li>
                
            </ul>
        </div>
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

