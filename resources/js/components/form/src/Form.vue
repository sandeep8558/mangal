<template>
    <div class="container-fluid p-3 border-bottom">

        <form @submit.prevent="submitForm($event)" action="" method="POST" enctype="multipart/form-data">

            <div class="row">

                <div v-for="elm in myForm" :key="elm.name" class="col-12 mb-2">

                    <!-- Email -->
                    <div v-if="elm.type == 'email'" class="mb-2">
                        <label :for="elm.name" class="form-label">{{ elm.label }}</label>
                        <input type="email" :id="elm.name" :placeholder="elm.placeholder" :name="elm.name" v-model="elm.value" :readonly="elm.readonly" class="form-control">
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>

                    <!-- Text -->
                    <div v-if="elm.type == 'text'" class="mb-2">
                        <label :for="elm.name" class="form-label">{{ elm.label }}</label>
                        <input type="text" :id="elm.name" :placeholder="elm.placeholder" :name="elm.name" v-model="elm.value" :readonly="elm.readonly" class="form-control">
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>

                    <!-- Date -->
                    <div v-if="elm.type == 'date'" class="mb-2">
                        <label :for="elm.name" class="form-label">{{ elm.label }}</label>
                        <input type="date" :id="elm.name" :placeholder="elm.placeholder" :name="elm.name" v-model="elm.value" :readonly="elm.readonly" class="form-control">
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>

                    <!-- Time -->
                    <div v-if="elm.type == 'time'" class="mb-2">
                        <label :for="elm.name" class="form-label">{{ elm.label }}</label>
                        <input type="time" :id="elm.name" :placeholder="elm.placeholder" :name="elm.name" v-model="elm.value" :readonly="elm.readonly" class="form-control">
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>

                    <!-- Password -->
                    <div v-if="elm.type == 'password'" class="mb-2">
                        <label :for="elm.name" class="form-label">{{ elm.label }}</label>
                        <input type="password" :id="elm.name" :placeholder="elm.placeholder" :name="elm.name" v-model="elm.value" :readonly="elm.readonly" class="form-control">
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>

                    <!-- Textarea -->
                    <div  v-if="elm.type == 'textarea'" class="mb-2">
                        <label :for="elm.name" class="form-label">{{ elm.label }}</label>
                        <textarea class="form-control" :id="elm.name" :placeholder="elm.placeholder" :name="elm.name" v-model="elm.value" :readonly="elm.readonly" rows="3"></textarea>
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>

                    <!-- Select -->
                    <div v-if="elm.type == 'select'" class="mb-2">
                        <label :for="elm.name" class="form-label">{{ elm.label }}</label>
                        <select class="form-select" :name="elm.name" :id="elm.name" v-model="elm.value" :readonly="elm.readonly">
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
                                <input class="form-check-input" type="radio" :name="elm.name" :id="option.value" :value="option.value" v-model="elm.value" :readonly="elm.readonly">
                                <label :for="option.value" class="form-check-label mr-3">{{option.text}}</label>
                            </span>
                        </span>
                        <span class="small text-capitalize">{{ elm.hint }}</span>
                    </div>

                    <!-- Checkbox -->
                    <div v-if="elm.type=='checkbox'">
                        <label class=" text-capitalize" :for="elm.name">{{elm.label}}</label>
                        <span class="d-block">
                            <span v-for="option in elm.options" :key="option.value" class="d-block">
                                <input class="" type="checkbox" :id="elm.name + option.value" :value="option.value" :name="elm.name" v-model="elm.values" :readonly="elm.readonly">
                                <label :for="elm.name + option.value" class="mr-3" style="cursor:pointer;">{{option.text}}</label>
                            </span>
                        </span>
                        <span v-if="!elm.isError" class=" small text-capitalize text-muted">{{elm.hint}}</span>
                    </div>

                </div>

                <div class="col-12">
                    <input class="btn btn-primary" type="submit" value="Submit">
                    <input class="btn btn-warning" type="reset" value="Reset">
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
        return {};
    },


    /* Properties */
    props: ['myForm'],


    /* All methods goes here */
    methods: {

        submitForm(e){
            console.log(e);
        },

    },


    /* Lifecycle Hooks */

    created(){
        console.log(this.myForm);
    },

}
</script>

<style>
</style>