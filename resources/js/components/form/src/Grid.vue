<template>
    <div class="container-fluid p-3">
        
        <div class="row border-bottom mb-5 p-0">
            <div class="col-auto mb-3">
                <select class="form-select" aria-label="Default select example" v-model="pagination.rows" @change="rowsChange()">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="250">250</option>
                    <option value="500">500</option>
                </select>
            </div>
            <div class="col-auto mb-3">
                <select class="form-select" aria-label="Default select example" v-model="filterForm.column">
                    <option value="">Select Column</option>
                    <option v-for="g in myGrid" :key="g.key" :value="g.key">{{ g.text }}</option>
                </select>
            </div>
            <div class="col-auto mb-3">
                <select class="form-select" aria-label="Default select example" v-model="filterForm.match">
                    <option value="Start">Start</option>
                    <option value="Anywhere">Anywhere</option>
                    <option value="Exact">Exact</option>
                </select>
            </div>
            <div class="col mb-3">
                <div class="">
                    <input type="text" class="form-control" v-model="filterForm.search">
                </div>
            </div>
            <div class="col-auto mb-3"><button @click="searchData()" class="btn btn-dark">GO</button></div>
        </div>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>

                    <th v-for="g in myGrid" :key="g.key" scope="col">{{ g.text }}</th>

                    <th class="text-right" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="data in gridData" :key="data.id">
                    <th scope="row">{{data.id}}</th>
                    
                    <td v-for="g in myGrid" :key="g.key">
                        <template v-if="g.type == 'text'">
                            {{ getColumnValue(g.key, data) }}
                        </template>
                        <template v-if="g.type == 'image'"><img style="height:40px;" :src="data[g.key]"></template>
                    </td>
                    
                    <td class="text-right">
                        <button @click="editData(item)" class="btn btn-sm shadow-none btn-outline-warning"><i class="fas fa-edit"></i></button>
                        <button @click="deleteData(item.id)" class="btn btn-sm shadow-none btn-outline-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div>
            <button @click="getGridData()" :class="[(pagination.next_page_url == null ? 'disabled' : '')]" class="btn btn-dark">Load More</button>
        </div>

    </div>
</template>

<script>
export default {
    
    components: {},


    /* Data */
    data(){
        return {
            myGrid: this.GridData.Grid,
            gridData: [],
            pagination: {
                rows: this.GridData.Rows,
                current_page : 1,
                next_page_url: null,
            },
            filterForm: {
                column: '',
                match: 'Anywhere',
                search: '',
            },
        };
    },


    /* Properties */
    props: ['GridData'],


    /* All methods goes here */
    methods: {

        getGridData(){
            let url = '/crud/get/grid';
            let data = {
                model : this.GridData.Model,
                page : this.pagination.current_page,
                with : this.GridData.With,
                where : this.GridData.Where,
                where_in : this.GridData.WhereIn,
                rows: this.pagination.rows,

                column: this.filterForm.column,
                match: this.filterForm.match,
                search: this.filterForm.search,
            };
            window.axios.post(url, data).then(res =>{
                res.data.data.forEach(item => {
                    this.gridData.push(item);
                });
                this.pagination.current_page = res.data.current_page + 1;
                this.pagination.next_page_url = res.data.next_page_url;
            });
        },

        getColumnValue(str, data){
            let arr = str.split('.');
            let a = data;
            arr.forEach(element => {
                a = a[element];
            });
            return a;
        },

        rowsChange(){
            this.pagination.current_page = 1;
            this.gridData = [];
            this.getGridData();
        },

        searchData(){
            if(this.filterForm.column != '' || this.filterForm.search != ''){
                this.pagination.current_page = 1;
                this.gridData = [];
                this.getGridData();
            } else {
                alert("Please select column and set search value");
            }
        },

    },


    /* Lifecycle Hooks */

    created(){
        this.getGridData();
    },

}
</script>

<style>
</style>