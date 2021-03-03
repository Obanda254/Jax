<template>
  <layout title="Create user">
    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            
            <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <p class="mt-1 text-sm text-gray-600">
                Enter your credentials in the fields provided.
                </p>
            </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">

            <div v-if="Object.keys(errors).length > 0" class="alert alert-danger mt-4">
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error! </strong>
                    <span class="block sm:inline">{{ errors[Object.keys(errors)[0]] }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>        
            </div>    
            <form action="/users" method="POST" @submit.prevent="createUser">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="name" class="block text-sm font-medium text-gray-700">
                            Name:
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                Mr/Ms
                            </span>
                            <input type="text" v-model="form.name" name="name" id="name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-r-md sm:text-sm border-gray-300" placeholder="Jon Doe">
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                        <label for="about" class="block text-sm font-medium text-gray-700">
                            Email:
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" v-model="form.email" name="email" id="email" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="example@email.com">
                        </div>
                        <p class="mt-2 text-sm text-gray-500">
                            Provide your email address the the field above.
                        </p>
                        </div>
                    </div>
                    <div >
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">
                                Password
                            </label>
                        </div>
                        <div class="mt-1 flex rounded-md shadow-sm">
                        <span class="inline-block rounded-full bg-gray-100">
                        <input type="password" v-model="form.password" name="password" id="password" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-l-md rounded-r-md sm:text-sm border-gray-300" placeholder="">

                        </span>
                            
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                    </button>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
  </layout>
</template>

<script>
  import Layout from '@/Shared/Layout'

  export default {
    components: {
      Layout,
    },
    props: {
        errors: Object,
    },

    data() {
        return {
            form: {
                name:'',
                email:'',
                password:'',
            }
        }
    },
    methods: {
        createUser() {
            this.$inertia.post('/users', this.form)
            .then(() => {
                //code
            })
        }
    }
  }
</script>