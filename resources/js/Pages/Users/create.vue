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
            <form action="#" method="POST">
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
                        <input type="text" name="name" id="name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-r-md sm:text-sm border-gray-300" placeholder="Jon Doe">
                        </div>
                    </div>
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                    <label for="about" class="block text-sm font-medium text-gray-700">
                        Email:
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <textarea id="about" name="about" rows="1" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-r-md sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">
                        Provide your email address the the field above.
                    </p>
                    </div>

                    <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                    <span class="inline-block h-12  rounded-full bg-gray-100">
                    <input type="password" name="password" id="password" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-l-md rounded-r-md sm:text-sm border-gray-300" placeholder="">

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
    props: [],

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
            alert('creating user');
        }
    }
  }
</script>