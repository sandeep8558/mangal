<template>
    <div class="container-fluid p-3 border-bottom">

        <form @submit.prevent="submitForm($event)" :name="Model+'Form'" method="POST" enctype="multipart/form-data">

            <div class="row">

                <div v-for="(elm, index) in myForm" :key="elm.name" class="col-12 mb-2">

                    <!-- Email -->
                    <div v-if="elm.type == 'email'" class="mb-2">
                        <label :for="elm.name" class="form-label">{{ elm.label }}</label>
                        <input @input="removeError(index)" @change="setEvent($event, index)" type="email" :id="elm.name" :placeholder="elm.placeholder" :name="elm.name" v-model="elm.value" :readonly="elm.readonly" class="form-control" :class="[(elm.isError ? 'is-invalid' : '')]">
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>

                    <!-- Text -->
                    <div v-if="elm.type == 'text'" class="mb-2">
                        <label :for="elm.name" class="form-label">{{ elm.label }}</label>
                        <input @input="removeError(index)" @change="setEvent($event, index)" type="text" :id="elm.name" :placeholder="elm.placeholder" :name="elm.name" v-model="elm.value" :readonly="elm.readonly" class="form-control" :class="[(elm.isError ? 'is-invalid' : '')]">
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>

                    <!-- Date -->
                    <div v-if="elm.type == 'date'" class="mb-2">
                        <label :for="elm.name" class="form-label">{{ elm.label }}</label>
                        <input @input="removeError(index)" @change="setEvent($event, index)" type="date" :id="elm.name" :placeholder="elm.placeholder" :name="elm.name" v-model="elm.value" :readonly="elm.readonly" class="form-control" :class="[(elm.isError ? 'is-invalid' : '')]">
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>

                    <!-- Time -->
                    <div v-if="elm.type == 'time'" class="mb-2">
                        <label :for="elm.name" class="form-label">{{ elm.label }}</label>
                        <input @input="removeError(index)" @change="setEvent($event, index)" type="time" :id="elm.name" :placeholder="elm.placeholder" :name="elm.name" v-model="elm.value" :readonly="elm.readonly" class="form-control" :class="[(elm.isError ? 'is-invalid' : '')]">
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>

                    <!-- Password -->
                    <div v-if="elm.type == 'password'" class="mb-2">
                        <label :for="elm.name" class="form-label">{{ elm.label }}</label>
                        <input @input="removeError(index)" @change="setEvent($event, index)" type="password" :id="elm.name" :placeholder="elm.placeholder" :name="elm.name" v-model="elm.value" :readonly="elm.readonly" class="form-control" :class="[(elm.isError ? 'is-invalid' : '')]">
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>

                    <!-- Textarea -->
                    <div  v-if="elm.type == 'textarea'" class="mb-2">
                        <label :for="elm.name" class="form-label">{{ elm.label }}</label>
                        <textarea @input="removeError(index)" @change="setEvent($event, index)" class="form-control" :id="elm.name" :placeholder="elm.placeholder" :name="elm.name" v-model="elm.value" :readonly="elm.readonly" rows="3" :class="[(elm.isError ? 'is-invalid' : '')]"></textarea>
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>

                    <!-- Select -->
                    <div v-if="elm.type == 'select'" class="mb-2">
                        <label :for="elm.name" class="form-label">{{ elm.label }}</label>
                        <select @input="removeError(index)" @change="setEvent($event, index)" class="form-select" :name="elm.name" :id="elm.name" v-model="elm.value" :readonly="elm.readonly" :class="[(elm.isError ? 'is-invalid' : '')]">
                            <option value="">Select {{ elm.label }}</option>
                            <option v-for="option in elm.options" :key="option.value" :value="option.value">{{ option.text }}</option>
                        </select>
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>


                    <!-- Radio -->
                    <div v-if="elm.type=='radio'" class="mb-2">
                        <label class=" text-capitalize" :for="elm.name">{{elm.label}}</label>
                        <span class="d-block ">
                            <span v-for="option in elm.options" :key="option.value" class="d-inline-block">
                                <input @input="removeError(index)" @change="setEvent($event, index)" class="form-check-input" type="radio" :name="elm.name" v-model="elm.value" :id="option.value" :value="option.value" :readonly="elm.readonly" :class="[(elm.isError ? 'is-invalid' : '')]">
                                <label :for="option.value" class="form-check-label mr-3">{{option.text}}</label>
                            </span>
                        </span>
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>

                    <!-- Checkbox -->
                    <div v-if="elm.type=='checkbox'" class="mb-2">
                        <label class=" text-capitalize" :for="elm.name">{{elm.label}}</label>
                        <span class="d-block">
                            <span v-for="option in elm.options" :key="option.value" class="d-block">
                                <input @input="removeError(index)" @change="setEvent($event, index)" class="form-check-input" type="checkbox" :id="elm.name + option.value" :value="option.value" v-model="elm.values" :name="elm.name" :readonly="elm.readonly" :class="[(elm.isError ? 'is-invalid' : '')]">
                                <label class="form-check-label mr-3" :for="elm.name + option.value" style="cursor:pointer;">{{option.text}}</label>
                            </span>
                        </span>
                        <span class="small text-capitalize text-muted">{{elm.hint}}</span>
                    </div>


                    <!-- File -->
                    <div v-if="elm.type=='file'" class="mb-2">
                        <label class="mb-2" :for="elm.name">{{elm.label}}</label>
                        <div class="custom-file">
                            <input @input="removeError(index)" @change="setEvent($event, index)" type="file" class="form-control" :id="elm.name" :name="elm.name" :readonly="elm.readonly" :class="[(elm.isError ? 'is-invalid' : '')]">
                            <span class="small text-capitalize text-muted">{{elm.hint}}</span>
                        </div>
                        
                    </div>

                </div>

                <div class="col-12">
                    <input class="btn btn-primary" type="submit" value="Submit">
                    <input class="btn btn-warning" type="button" value="Reset" @click="clearForm()">
                </div>

            </div>

        </form>

    </div>
</template>

<script>
export default {
    
    components: {},


    /* Data */
    data(){
        return {
            id: 0,
        };
    },


    /* Properties */
    props: ['myForm', 'Model'],


    /* All methods goes here */
    methods: {

        submitForm(e){
            const fd = new FormData(e.target);
            
            /* Adding elements to form data */
            const elements = [];
            this.myForm.forEach(item => {
                
                let elm = {
                    'name' : item.name,
                    'type' : item.type,
                    'validation' : item.validation
                };
                
                elements.push(elm);

                /* Checkbox Values Setted Here */
                if(elm.type == 'checkbox'){
                    fd.append(item.name, item.values);
                }

            });
            fd.append('elements', JSON.stringify(elements));
            fd.append('model', this.Model);
            fd.append('id', this.id);

            /* Sending request to server */
            window.axios.post('/crud/store', fd).then(response => {
                this.clearForm();
                this.$root.$emit('OnAdd', response.data);
            })
            .catch(error=>{
                if(error.response.status == 422){

                    this.myForm.forEach(item => {
                        let errors = error.response.data.errors;
                        item.isError = item.name in errors ? true : false;
                    });
                    
                }
            });
        },

        removeError(ind){
            this.myForm[ind].isError = false;
        },

        fillForm(data){
            if(!this.ShowForm){}
            this.myForm.forEach(elm => {
                elm.value = data[elm.name];
                console.log(data[elm.name]);
                console.log(elm.value);
            });
            this.id = data.id;
        },

        clearForm(){
            this.id = 0;
            this.myForm.forEach(item=>{
                item.value = "";
                item.values = [];
            });
        },

        setEvent(e, index){
            this.$root.$emit('OnChange', e);

            let elm = this.myForm[index];

            if('data' in elm){
                if(elm.data.load != null){
                    this.myForm.forEach((item, ind)=> {
                        if(item.name == elm.data.load){
                            item.value = '';
                            item.data.link_value = elm.value;
                            window.axios.post('/crud/fetch', item.data).then(response => {
                                item.options = response.data;
                            });
                        }
                    });
                }
            }
        },

        fetchData(){
            this.myForm.forEach((elm, index)=>{
                if(elm.type == 'select' || elm.type == 'checkbox' || elm.type == 'radio'){
                    if('data' in elm){
                        window.axios.post('/crud/fetch', elm.data).then(response => {
                            elm.options = response.data;
                        });
                    }
                }
            });
        },

    },


    /* Lifecycle Hooks */
    created(){

        this.$root.$on("FillForm", (data)=>{
            this.fillForm(data);
        });

        this.fetchData();

    },

}
</script>

<style>
</style>