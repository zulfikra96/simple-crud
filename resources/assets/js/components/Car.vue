<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3 panel-col">
                <div class="panel panel-danger">
                    <div class="panel-heading">List Data</div>
                    <div class="panel-body"></div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data: function()
        {
            return{
                list:[],
                car:{
                    id:'',
                    body:''
                }
            }
        }
    }
</script>