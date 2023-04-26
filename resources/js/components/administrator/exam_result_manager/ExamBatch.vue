<template>
    <div class="container-fluid p-0">
        <lits-form :formData="formData" @OnChange="change($event)"></lits-form>
    </div>
</template>

<script>
import LitsForm from '../../form/NewForm.vue'
export default {

    props: ['id', 'examination_id', 'batches'],

    components: {
        LitsForm,
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "ExamBatch Manager",
                formName : "ExamBatchForm",
                model : "ExamBatch",
                action : "CRUD", /* CRUD | EDIT | SEARCH */
                method : "",
                custom_query : ['examination_id', '==', this.examination_id],
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
                    { key : 'batch_id', val : 'Batch ID', type : 'text' },
                    { key : 'examination_id', val : 'Exam ID', type : 'text' },
                     
                ],
                elements : [

                    {
                        label : 'Examination ID',
                        name : 'examination_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Please Select Examination ID',
                        type : 'text',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3',
                        labelClass : '',
                        hint : 'Please Select Examination ID',
                        error : '',
                        isError : false,
                        readonly : false,
                    },

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
                        class : 'col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3',
                        labelClass : '',
                        hint : 'Please Select Batch',
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
            this.formData.elements[0].value = this.examination_id;
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
