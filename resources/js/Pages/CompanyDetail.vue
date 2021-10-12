<template>
    <div class="bg-white">
        <div
            class="
                max-w-2xl
                mx-auto
                pt-16
                pb-24
                px-4
                sm:px-6
                lg:max-w-7xl lg:px-8
            "
        >
            <h1
                class="
                    text-3xl
                    font-extrabold
                    tracking-tight
                    text-gray-900
                    sm:text-4xl
                "
            >
                Web Site Detail Report
            </h1>
            <form
                class="
                    mt-12
                    lg:grid lg:grid-cols-12 lg:gap-x-12 lg:items-start
                    xl:gap-x-16
                "
            >
                <section aria-labelledby="cart-heading" class="lg:col-span-7">
                    <h2 id="cart-heading" class="sr-only">
                        Items in your shopping cart
                    </h2>

                    <ul
                        role="list"
                        class="
                            border-t border-b border-gray-200
                            divide-y divide-gray-200
                        "
                    >
                        <li class="flex py-6 sm:py-10">
                            <div class="flex-shrink-0">
                                <img
                                    :src="detail.logo"
                                    alt="Front of men&#039;s Basic Tee in sienna."
                                    class="
                                        w-24
                                        h-24
                                        rounded-md
                                        object-center object-cover
                                        sm:w-48 sm:h-48
                                    "
                                />
                            </div>

                            <div
                                class="
                                    ml-4
                                    flex-1 flex flex-col
                                    justify-between
                                    sm:ml-6
                                "
                            >
                                <div
                                    class="
                                        relative
                                        pr-9
                                        sm:grid
                                        sm:grid-cols-2
                                        sm:gap-x-6
                                        sm:pr-0
                                    "
                                >
                                    <div>

                                        <div class="mt-1 flex text-sm">
                                            <p class="text-gray-500">DA</p>

                                            <p
                                                class="
                                                    ml-4
                                                    pl-4
                                                    border-l border-gray-200
                                                    text-gray-500
                                                "
                                            >
                                                {{ detail.da }}
                                            </p>
                                        </div>


 <div class="mt-1 flex text-sm">
                                            <p class="text-gray-500">
                                                Anchor Text
                                            </p>

                                            <p
                                                class="
                                                    ml-4
                                                    pl-4
                                                    border-l border-gray-200
                                                    text-gray-500
                                                "
                                            >
                                                {{ detail.anchor_text }}
                                            </p>
                                        </div>

<div class="mt-1 flex text-sm">
                                            <p class="text-gray-500">
                                                Page Rank
                                            </p>

                                            <p
                                                class="
                                                    ml-4
                                                    pl-4
                                                    border-l border-gray-200
                                                    text-gray-500
                                                "
                                            >
                                                {{ detail.page_rank }}
                                            </p>
                                        </div>


<div class="mt-1 flex text-sm">
                                            <p class="text-gray-500">
                                                Relevance
                                            </p>

                                            <p
                                                class="
                                                    ml-4
                                                    pl-4
                                                    border-l border-gray-200
                                                    text-gray-500
                                                "
                                            >
                                                {{ detail.relevance }}
                                            </p>
                                        </div>
<div class="mt-1 flex text-sm">
                                            <p class="text-gray-500">
                                                Bounce Rate
                                            </p>

                                            <p
                                                class="
                                                    ml-4
                                                    pl-4
                                                    border-l border-gray-200
                                                    text-gray-500
                                                "
                                            >
                                                {{ detail.bounce_rate }}
                                            </p>
                                        </div>
                                        <div class="mt-1 flex text-sm">
                                            <p class="text-gray-500">
                                                Spam Single
                                            </p>

                                            <p
                                                class="
                                                    ml-4
                                                    pl-4
                                                    border-l border-gray-200
                                                    text-gray-500
                                                "
                                            >
                                                {{ detail.spam_signle }}
                                            </p>
                                        </div>


                                    </div>
                                </div>

                                <p
                                    class="
                                        mt-4
                                        flex
                                        text-sm text-gray-700
                                        space-x-2
                                    "
                                >
                                    <!-- Heroicon name: solid/check -->
                                    <svg
                                        class="
                                            flex-shrink-0
                                            h-5
                                            w-5
                                            text-green-500
                                        "
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    <span>
                                        {{ detail.link }}
                                    </span>
                                </p>
                            </div>
                        </li>
                    </ul>
                </section>

                <!-- Order summary -->
                <section
                    aria-labelledby="summary-heading"
                    class="
                        mt-16
                        bg-gray-50
                        rounded-lg
                        px-4
                        py-6
                        sm:p-6
                        lg:p-8 lg:mt-0 lg:col-span-5
                    "
                >
                    <h2
                        id="summary-heading"
                        class="text-lg font-medium text-gray-900"
                    >
                        Order summary
                    </h2>

                    <dl class="mt-6 space-y-4">
                        <div class="flex items-center justify-between">
                            <dt class="text-sm text-gray-600">Subtotal</dt>
                            <dd class="text-sm font-medium text-gray-900">
                                $50.00
                            </dd>
                        </div>
                        <div
                            class="
                                border-t border-gray-200
                                pt-4
                                flex
                                items-center
                                justify-between
                            "
                        >
                            <dt class="flex items-center text-sm text-gray-600">
                                <span>Service Charges</span>
                                <a
                                    href="#"
                                    class="
                                        ml-2
                                        flex-shrink-0
                                        text-gray-400
                                        hover:text-gray-500
                                    "
                                >
                                    <span class="sr-only"
                                        >Learn more about how shipping is
                                        calculated</span
                                    >
                                    <!-- Heroicon name: solid/question-mark-circle -->
                                    <svg
                                        class="h-5 w-5"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </a>
                            </dt>
                            <dd class="text-sm font-medium text-gray-900">
                                $5.00
                            </dd>
                        </div>
                        <div
                            class="
                                border-t border-gray-200
                                pt-4
                                flex
                                items-center
                                justify-between
                            "
                        >
                            <dt class="flex text-sm text-gray-600">
                                <span>Tax estimate</span>
                                <a
                                    href="#"
                                    class="
                                        ml-2
                                        flex-shrink-0
                                        text-gray-400
                                        hover:text-gray-500
                                    "
                                >
                                    <span class="sr-only"
                                        >Learn more about how tax is
                                        calculated</span
                                    >
                                    <!-- Heroicon name: solid/question-mark-circle -->
                                    <svg
                                        class="h-5 w-5"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </a>
                            </dt>
                            <dd class="text-sm font-medium text-gray-900">
                                $8.32
                            </dd>
                        </div>
                        <div
                            class="
                                border-t border-gray-200
                                pt-4
                                flex
                                items-center
                                justify-between
                            "
                        >
                            <dt class="text-base font-medium text-gray-900">
                                Order total
                            </dt>
                            <dd class="text-base font-medium text-gray-900">
                                $63.32
                            </dd>
                        </div>
                    </dl>

                    <div class="mt-6">
                        <button
                            @click.prevent="purchase()"
                            type="submit"
                            class="
                                w-full
                                bg-indigo-600
                                border border-transparent
                                rounded-md
                                shadow-sm
                                py-3
                                px-4
                                text-base
                                font-medium
                                text-white
                                hover:bg-indigo-700
                                focus:outline-none
                                focus:ring-2
                                focus:ring-offset-2
                                focus:ring-offset-gray-50
                                focus:ring-indigo-500
                            "
                        >
                            Purchase
                        </button>
                    </div>
                </section>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        detail: Object,
    },
    created() {
    },
    methods: {
        purchase() {
            alert('Dear Customer Thanks for purchase report!')
        }
    }
};
</script>
