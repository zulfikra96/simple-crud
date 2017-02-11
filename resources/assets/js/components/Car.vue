<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3 panel-col">
                <div class="panel panel-danger">
                    <div class="panel-heading">List Data: {{myCar.cars}} </div>
                    <div class="panel-body" v-for="car in list">
                        <ul class="list-group" >
                           <li class="list-group-item" >
                                {{car.cars}}
                           </li>
                        </ul>
                        
                            </div> 
                            <form action="#" v-on:submit.prevent="onSubmit" method="POST">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit">Go!</button>
                                </span>
                                <input type="text" class="form-control" placeholder="Search for..." name="car" v-model="myCar.cars">
                                </div> 
                            </form>          
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data: function(){
            return{
                list:[],
                myCar:{
                    id:'',
                    cars:''
                }
            }
        },

        created: function()
        {
            this.fetchData()
            
        },

        methods:{
            fetchData: function()
            {
                
                this.$http.get('/cars').then(function(response){
                    this.list = response.data
                })
                
            },

            onSubmit: function()
            {
                this.$http.post('/cars/store', this.myCar)
                this.myCar.cars = ''
                this.fetchData()
                
            }
        }

    
    }
</script>