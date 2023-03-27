<template>
    <div class="container-fluid p-0">
        <div class="input-group">
            <button class="btn btn-sm" @click="update(options[1])" :class="[(val == options[0] ? 'btn-success' : 'btn-outline-success disabled'), (disabled == '0' ? 'disabled' : '')]" type="button">{{ options[0] }}</button>
            <button class="btn btn-sm" @click="update(options[0])" :class="[(val == options[1] ? 'btn-success' : 'btn-outline-success disabled'), (disabled == '0' ? 'disabled' : '')]" type="button">{{ options[1] }}</button>
        </div>
    </div>
</template>

<script>
export default {

    props: ['options', 'value', 'model', 'column', 'id', 'disabled'],

    components: {
    },

    data: function (){
        return {
            val: this.value,
        }
    },

    methods : {

        startClass(){
            alert("PTL");
        },

        change(e){
            /* console.log(e.target.value); */
        },

        /* getBusinessPlan(){
            window.axios.get('/auth/crud/showall?model=BusinessPlan&key=plan_name&val=id').then(res => {
                this.formData.elements[1].options = res.data;
            });
        } */

        update(value){
            window.axios.post('/mystaff/table_update', {model: this.model, column:this.column, value: value, id: this.id}).then(res => {
                this.val = value;
                console.log(res);
            });
        },

    },

    created(){
        
    },

    mounted() {
    },

}
</script>
