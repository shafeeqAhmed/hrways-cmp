<template>
  <!-- <div>
        <h1>All users</h1>
        <li v-for="user in users" :key="user.id">{{user.email}}</li>
    </div> -->
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="grid grid-cols-4 gap-4 mb-3">
            <div>
              <input
                type="number"
                v-model="da"
                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                placeholder="Domain Authority 1-100"
              />
            </div>
            <div>
              <input
                type="number"
                v-model="linkingDomainAccount"
                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                placeholder="Linking domain Count"
              />
            </div>
            <div>
              <input
                type="text"
                v-model="search"
                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                placeholder="youtube.com / youtube"
              />
            </div>
            <div>
              <button
                @click="searchInput"
                type="submit"
                class="flex items-center justify-center px-5 py-1 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
              >
                Search
              </button>
            </div>
          </div>

          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div
                class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8"
              >
                <div
                  class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
                >


<div class="flex justify-center loaderCenter" v-show="loader">
    <div>
    <div style="border-top-color:transparent"
        class="w-16 h-16 border-4 border-blue-400 border-solid rounded-full animate-spin"></div>
</div>
<div>
    <div style="border-top-color:transparent"
        class="w-16 h-16 border-4 border-blue-400 border-dashed rounded-full animate-spin"></div>
</div>
<div>
    <div style="border-top-color:transparent"
        class="w-16 h-16 border-4 border-blue-400 border-dotted rounded-full animate-spin"></div>
</div>
<div>
    <div style="border-top-color:transparent"
        class="w-16 h-16 border-4 border-blue-400 border-double rounded-full animate-spin"></div>
</div>
</div>

                 <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th
                          scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        >
                          Logo
                        </th>
                        <th
                          scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        >
                          Url
                        </th>
                        <th
                          scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        >
                          DA
                        </th>
                        <th
                          scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        >
                          Linking Domain
                        </th>
                        <th
                          scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        >
                          Details
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                          <span class="sr-only">Edit</span>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr
                        v-for="(
                                                    company, index
                                                ) in companies"
                        :key="index"
                      >
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                              <img
                                class="h-10 w-10 rounded-full"
                                :src="
                                                                    company.logo
                                                                "
                                alt=""
                              />
                            </div>
                            <div class="ml-4">
                              <div class="text-sm font-medium text-gray-900">
                                {{
                                                                    company.company_name
                                }}
                              </div>
                              <!-- <div class="text-sm text-gray-500">
                                                                {{ company.link }}
                                                            </div> -->
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">
                            {{ company.link }}
                          </div>
                          <!-- <div class="text-sm text-gray-500">Optimization</div> -->
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"
                          >
                            {{ company.da }}
                          </span>
                        </td>
                        <td
                          class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                        >
                          <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"
                          >
                            {{
                                                            company.linking_root_domain
                            }}
                          </span>
                        </td>
                        <td
                          class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                        >
                          <!-- <InertiaLink :href="route('company.detail', { id: company.id })">
                                                    show
                                                    </InertiaLink> -->
                          <a
                            :href="
                                                            route(
                                                                'company.detail',
                                                                {
                                                                    id: company.id,
                                                                }
                                                            )
                                                        "
                            class="text-indigo-600 hover:text-indigo-900"
                            >Detail</a
                          >
                        </td>
                      </tr>

                      <!-- More people... -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <nav
      v-if="Object.keys(data).length > 0"
      class="border-t border-gray-200 px-4 flex items-center justify-between sm:px-0">
  <div
     v-for="(link, key, index) in data.companies.links"
    :key="index"
  class="hidden md:-mt-px md:flex">
    <a
    v-if="link.url != 'null' || link.label == '...'"
    v-html="link.label"
    :class="{ 'border-indigo-500 text-indigo-600 border-t-2': link.active == true }"
    @click="apiCall(link.url)"
    href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium">
    </a>
    <a
    v-else
    v-html="link.label"
    @click="apiCall(link.url)"
    href="#" class="border-indigo-500 text-indigo-600 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium" aria-current="page">
    </a>
  </div>
</nav>
    </div>
    <!-- This example requires Tailwind CSS v2.0+ -->

  </div>
</template>

<script>
import axios from 'axios';
export default {

    data() {
        return {
            data: {},
            companies: {},
            search: "",
            da: "",
            linkingDomainAccount: "",
            loader: false
        };
    },

    methods: {
        searchInput() {
            this.loader = true
            const url = 'http://hrways.oriasoft.co.uk/api/filter-company?search='+this.search+'&da='+this.da+'&linkcount='+this.linkingDomainAccount
            this.apiCall(url)

        },
        apiCall(url) {
            this.loader = true
        axios.get(url).then(response => {
            this.data = response.data.data
            this.companies = response.data.data.companies.data
            this.loader = false
        }).catch(() => {
            this.loader = false
        })
        }
    },
    created() {
    },
};
</script>
<style scoped>
.loaderCenter {
  margin: auto;
  width: 60%;
  padding: 10px;
  position:absolute;
}
</style>
