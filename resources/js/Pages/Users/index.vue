<template>
  <layout title="Welcome">
    <h1>Welcome to the users page</h1>
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
                                <a  href="/users/create" >Add new user</a>
                                </button>
                            
                            </div>
                            <table class="table-fixed w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="">Edit</span>
                                </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="user in users" :key="user.id">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                            {{ user.name }}
                                            </div>
                                        </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            {{ user.email }} 
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-auto text-sm font-medium ">
                                        <inertia-link :href="`/users/${user.id}/edit`" class="text-indigo-600 hover:text-indigo-900">Edit</inertia-link>
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
  </layout>
</template>

<script>
  import Layout from '@/Shared/Layout'

  export default {
    components: {
      Layout,
    },
    props: ['users'],
  }
</script>