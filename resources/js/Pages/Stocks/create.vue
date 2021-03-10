<template>
  <app-layout>
    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            
            <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <p class="mt-1 text-sm text-gray-600">
                Create a new Stock here.
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
            <form action="/purchases" method="POST" @submit.prevent="createPurchase">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="type" class="block text-sm font-medium text-gray-700">
                            type:
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                    Stock
                                </span>
                                
                                <select v-model="form.type" name="type" id="type" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-r-md sm:text-sm border-gray-300" placeholder="Select the item">
                                    <option selected disabled>Select the operation</option>
                                    <option >Stock Adjustment</option>
                                    <option >Purchase operation</option>
                                    <option >Sale operation</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-span-3 sm:col-span-2">
                            <label for="item" class="block text-sm font-medium text-gray-700">
                            item:
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                Item:
                            </span>
                            
                                <select v-model="form.item_id" name="item_id" id="item_id" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-r-md sm:text-sm border-gray-300" placeholder="Select the item">
                                    <option selected disabled>Select the Item</option>
                                    <option :value="y.id" v-for="y in items" :key="y.id">{{ y.name }} </option>
                                </select>
                           
                            </div>
                        </div>
                        <div class="col-span-3 sm:col-span-2">
                            <label for="quantity" class="block text-sm font-medium text-gray-700">
                            Quantity:
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                #:
                            </span>
                            <input type="number" v-model="form.quantity" name="quantity" id="quantity" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-r-md sm:text-sm border-gray-300" placeholder="number">
                            </div>
                        </div>
                        <div class="col-span-3 sm:col-span-2">
                            <label for="stock_date" class="block text-sm font-medium text-gray-700">
                            Stock Date:
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                Date:
                            </span>
                            <input type="date" v-model="form.stock_date" name="stock_date" id="stock_date" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-r-md sm:text-sm border-gray-300" placeholder="Select purchase date">
                            </div>
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
  </app-layout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout'

  export default {
    components: {
      AppLayout,
    },
    props: {
        errors: Object,
        items: Object
    },

    data() {
        return {
            form: {
                item: '',
                stock_date:'',
                quantity:'',
                type:''
            }
        }
    },
    methods: {
        createPurchase() {
            this.$inertia.post('/stocks', this.form)
            .then(() => {
                //code
            })
        }
    }
  }
</script>