<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 panel-col">
                <div class="panel panel-danger">
                    <div class="panel-heading">List Data: {{myCar.cars}} </div>
                    <div class="panel-body">
                            <table class="table table-default" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama Mobil</th>
                                        <th>Dibuat</th>
                                        <th>Action</th>
                                    </tr>        
                                </thead>
                                <tbody v-for="car in list">
                                    <tr>
                                    <td>{{car.id}}</td>
                                    <td>{{car.cars}}</td>
                                    <td>{{car.created_at}}</td>
                                    <td><a v-on:click.stop.prevent="deleteData(car.id)" class="btn btn-warning" name="id">Hapus</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        
                            </div> 
                            <form action="#" v-on:submit.prevent="onSubmit" method="POST">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit">Create</button>
                                </span>
                                <input type="text" class="form-control" placeholder="Create" name="car" v-model="myCar.cars">
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
        data(){
            return{
                list:[],
                myCar:{
                    id:'',
                    cars:''
                }
            }
        },

        created()
        {
            this.fetchData()
            
        },

        methods:{
            fetchData()
            {
                
                this.$http.get('/cars').then(function(response){
                    this.list = response.data
                })
                
            },

            onSubmit()
            {
                this.$http.post('/cars/store', this.myCar)
                this.myCar.cars = ''
                this.fetchData()
                
            },

            deleteData(id)
            {
                this.$http.post('/cars/delete/'+ id ,id)
                console.log(id)
                this.fetchData()
            }
        }

    
    }
</script>