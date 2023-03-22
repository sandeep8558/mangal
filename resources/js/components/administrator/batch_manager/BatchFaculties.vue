<template>
    <div class="container-fluid p-0">
        <lits-form :formData="formData"></lits-form>
    </div>
</template>

<script>
import LitsForm from '../../form/NewForm.vue'
export default {

    props: ['id', 'batches', 'faculties'],

    components: {
        LitsForm,
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "BatchFaculty Manager",
                formName : "BatchFacultyForm",
                model : "BatchFaculty",
                action : "CRUD", /* CRUD | EDIT | SEARCH */
                method : "",
                custom_query : [],
                with : [],
                mail : {
                    name : "Sandeep Rathod",
                    to : "sandeep198558@yahoo.com",
                    subject : "Email From Users of Zataks",
                },
                settings : {
                    isTitle : true,
                    isReset : true,
                    isSubmit : true,
                    isDateSearch : false,
                    isExport : true,

                    isForm : true,
                    isSearch : true,
                    isResults : true,
                    isAction : true,
                    isLoadMore : true,
                },
                display : [
                    { key : 'batch_id', val : 'Batch', type : 'text' },
                    { key : 'staff_id', val : 'Staff', type : 'text' },

                ],
                elements : [

                    {
                        label : 'Batch',
                        name : 'batch_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : this.batches,
                        placeholder : 'Please Select Batch',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Select Batch',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Staff',
                        name : 'staff_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : this.faculties,
                        placeholder : 'Please Select Staff',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Select Staff',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                ],
            },
        }
    },

    methods : {

        change(e){
            /* console.log(e.target.value); */
        },

        /* getBusinessPlan(){
            window.axios.get('/auth/crud/showall?model=BusinessPlan&key=plan_name&val=id').then(res => {
                this.formData.elements[1].options = res.data;
            });
        } */
    },

    created(){
        if(this.id == null){
            this.formData.id = 0;
        } else {
            this.formData.id = this.id;
        }
    },

    mounted() {
    },

}
</script>
