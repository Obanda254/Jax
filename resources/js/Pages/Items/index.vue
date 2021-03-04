<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Items
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- <welcome /> -->
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            
                            <div class="my-5">
                                <button type="button"  class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <a  href="/items/create" >Add new item</a>
                                </button>
                            
                            </div>
                            <table class="table-fixed w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Role
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="x in items" :key="x.id">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                        {{ x.name }}
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Regional </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    {{ x.created_at }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

        <template #footer>
            <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3 m-auto" data-toggle="modal" data-target="#addItem">Create New Item</button>
            <!-- Modal -->
            <div class="modal fade" id="addItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add a new Item</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form id="itemForm" @submit.prevent="addItem">
                                    <div class="form-group">
                                        <label for="name">Item Name</label>
                                        <input type="text" v-model="item.name" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Enter item Name">
                                        <small id="helpId" class="form-text text-muted">Enter the full name of the item</small>
                                    </div>
                                    <button type="submit" class="btn btn-primary">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
            
        },
        props: ['items', 'successMessage'],
        
    //     data(){
    //         return{
    //             items:[],
    //             item:{
    //                 name:''
    //             }
    //         }
    //     },
    //     methods:{
    //         async addItem(){
    //             const res = await axios.post('/api/items', this.item)

    //             if(res.status === 201) {
    //                 Toast.fire({
    //                     icon:'success',
    //                     title:res.data
    //                 })
    //                 document.getElementById('itemForm').reset()
    //                 $("#addItem").modal('hide')
    //                 // this.$emit('addedItem')
    //             }
    //         },
    //         getItems(){
    //             axios.get('/api/items')
    //             .then((res) => {
    //                 this.items = res.data
    //             }).catch((err) => {
    //                 console.log(err)
    //             });
    //         },
    //     },
    //     created(){
    //         this.getItems()
    //         // this.$on('addedItem', ()=>{
    //         //     this.getItems()
    //         // })
    //     }
    }
</script>
