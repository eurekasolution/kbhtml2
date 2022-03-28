<style>
    .preview_ul {
        margin-top : 0px;
        background-color:#FFFFFF;
        max-height:300px;
        overflow-y:auto;
    }
    .preview_li {
        padding-left: 10px;
        /* hand(X), pointer */
        cursor: pointer;
        color: #FFFFFF;
    }
</style>

<div class="row">
    <div class="col">
        <h5 class="text-primary">검색어 미리보기</h5>
    </div>
</div>

<div class="row">
    <div class="col-2 colLine">
        검색어
    </div>
    <div class="col colLine">
        <div class="form-group">
            <input type="text" id="keyword" class="form-control" placeholder="검색어" >

            <div id="keylist" style="width:50%; z-index:1000; background-color:#FFFF00;"></div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        $("#keyword").on("keyup", function(e){
            let key = $("#keyword").val();
            
            if(key !== "")
            {
                $.ajax({
                    url: "56ajaxPreview.php",
                    type: "post",
                    cache: false,
                    data: {
                        searchKey : key
                    }, 
                    success : function(rcvData) {
                        $("#keylist").html(rcvData);
                        $("#keylist").fadeIn();
                    }
                });
            }
        });

        $(".preview_li").on("click", function(e){
            
        });


    });
</script>
