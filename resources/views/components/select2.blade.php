{{-- <div>

    <div> --}}
{{-- <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script> --}}
{{-- <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script> --}}

{{-- <style>
            [x-cloak] {
                display: none;
            }
        </style>
        <select x-cloak id="select" style="display:none">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
            <option value="4">Option 4</option>
            <option value="5">Option 5</option>
            <option value="6">Option 6</option>
            <option value="7">Option 7</option>
            <option value="8">Option 8</option>
            <option value="9">Option 9</option>
            <option value="10">Option 10</option>
            <option value="11">Option 11</option>
            <option value="12">Option 12</option>
        </select>

        <div x-data="dropdown()" x-init="loadOptions()"
            class="w-full md:w-1/2 flex flex-col items-center h-64 mx-auto">
            <form>
                <input name="values" type="hidden" x-bind:value="selectedValues()">
                <div class="inline-block relative w-64">
                    <div class="flex flex-col items-center relative">
                        <div x-on:click="open" class="w-full  svelte-1l8159u">
                            <div class="my-2 p-1 flex border border-gray-200 bg-white rounded svelte-1l8159u">
                                <div class="flex flex-auto flex-wrap">
                                    <template x-for="(option,index) in selected" :key="options[option].value">
                                        <div
                                            class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-full text-teal-700 bg-teal-100 border border-teal-300 ">
                                            <div class="text-xs font-normal leading-none max-w-full flex-initial x-model="
                                                options[option]" x-text="options[option].text"></div>
                                            <div class="flex flex-auto flex-row-reverse">
                                                <div x-on:click="remove(index,option)">
                                                    <svg class="fill-current h-6 w-6 " role="button"
                                                        viewBox="0 0 20 20">
                                                        <path
                                                            d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                             c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                             l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                             C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                    <div x-show="selected.length    == 0" class="flex-1">
                                        <input placeholder="Select a option"
                                            class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800"
                                            x-bind:value="selectedValues()">
                                    </div>
                                </div>
                                <div
                                    class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">

                                    <button type="button" x-show="isOpen() === true" x-on:click="open"
                                        class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                        <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                            <path
                                                d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                                            c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                                            L17.418,6.109z" />
                                        </svg>

                                    </button>
                                    <button type="button" x-show="isOpen() === false" @click="close"
                                        class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                        <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                            <path
                                                d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
      c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
      " />
                                        </svg>

                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 overflow-x-hidden overflow-y-auto">
                            <div x-show.transition.origin.top="isOpen()"
                                class="absolute shadow top-100 bg-white z-40 w-full lef-0 rounded max-h-select  overflow-x-hidden overflow-y-auto"
                                x-on:click.away="close">
                                <div class="flex flex-col w-full">
                                    <template x-for="(option,index) in options" :key="option">
                                        <div>
                                            <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-teal-100"
                                                @click="select(index,$event)">
                                                <div x-bind:class="option.selected ? 'border-teal-600' : ''"
                                                    class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                    <div class="w-full items-center flex">
                                                        <div class="mx-2 leading-6" x-model="option"
                                                            x-text="option.text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>


        <script>
            function dropdown() {
                return {
                    options: [],
                    selected: [],
                    show: false,
                    open() {
                        this.show = true
                    },
                    close() {
                        this.show = false
                    },
                    isOpen() {
                        return this.show === true
                    },
                    select(index, event) {

                        if (!this.options[index].selected) {

                            this.options[index].selected = true;
                            this.options[index].element = event.target;
                            this.selected.push(index);

                        } else {
                            this.selected.splice(this.selected.lastIndexOf(index), 1);
                            this.options[index].selected = false
                        }
                    },
                    remove(index, option) {
                        this.options[option].selected = false;
                        this.selected.splice(index, 1);


                    },
                    loadOptions() {
                        const options = document.getElementById('select').options;
                        for (let i = 0; i < options.length; i++) {
                            this.options.push({
                                value: options[i].value,
                                text: options[i].innerText,
                                selected: options[i].getAttribute('selected') != null ? options[i].getAttribute(
                                    'selected') : false
                            });
                        }


                    },
                    selectedValues() {
                        return this.selected.map((option) => {
                            return this.options[option].value;
                        })
                    }
                }
            }
        </script>
    </div>

</div> --}}
{{-- <div> --}}
    {{-- <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>
            Multi-Select-Box with tags and (optional) duplicates: @alpinejs,
            @tailwindcss
        </title>

        <!-- Dependencies -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="p-12 bg-gray-900 flex flex-col items-center min-h-screen">
        <div class="mt-12">
            <h1 class="text-3xl text-center font-bold text-amber-300 mb-1">
                Custom Multi-Select Component
            </h1>
            <h2 class="text-xl text-center text-amber-300">AlpineJS + TailwindCSS</h2>
        </div> --}}

    {{-- <div class="w-full mt-24 max-w-lg"> --}}
        <!-- Start Component -->
        <div x-data="multiselect({
            items: [
                {{-- { label: 'prueba', value: '#ff00ff' }, --}}
                {{-- { label: 'Blue', value: '#0000FF' },
                    { label: 'Green', value: '#00FF00' },
                    { label: 'Red', value: '#FF0000' },
                    { label: 'Yellow', value: '#FFFF00' },
                    { label: 'Gray', value: '#CCC' },
                    { label: 'I am a very long value and will show a maximum of 50 chars!', value: '#FF0F0E' }, --}}
                {{ $slot }}
            ],
            size: 6, prueba: $wire.driving
        })" x-init="onInit" @focusout="handleBlur" class="relative">

            {{-- <template x-for="(selectedItem, idx) in selectedItems">
                <h2  x-text="shortenedLabel(selectedItem.value, maxTagChars)" class="text-xl text-center text-amber-300">
                </h2>
            </template> --}}
            <input type="text" wire:model="{{$id}}" id="array" value="" name="array[]">
            <!-- Start Item Tags And Input Field -->
            <h2></h2>
            <div 
                class="flex items-center justify-between px-1 border border-2 rounded-md relative pr-8 bg-white dark:border-gray-600 dark:bg-gray-700">
                <ul class="flex flex-wrap items-center w-full dark:border-gray-600 dark:bg-gray-700 ">
                    <!-- Tags (Selected) -->
                    <template x-for="(selectedItem, idx) in selectedItems">
                        <li x-text="shortenedLabel(selectedItem.label, maxTagChars)" @click="removeElementByIdx(idx)"
                            @keyup.backspace="removeElementByIdx(idx)" @keyup.delete="removeElementByIdx(idx)"
                            tabindex="0"
                            class=" text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100 relative m-1 px-2 py-1.5 border rounded-md cursor-pointer hover:bg-gray-100 after:content-['x'] after:ml-1.5 after:text-red-300 outline-none focus:outline-none ring-0 focus:ring-2 focus:ring-amber-300 ring-inset transition-all">
                        </li>
                    </template>

                    <!-- Search Input -->
                    <input x-ref="searchInput" x-model="search" @click="expanded = true"
                        @focusin="expanded = true" @input="expanded = true"
                        @keyup.arrow-down="expanded = true; selectNextItem()"
                        @keyup.arrow-up="expanded = true; selectPrevItem()" @keyup.escape="reset"
                        @keyup.enter="addActiveItem" :placeholder="searchPlaceholder" type="text"
                        {{-- class="flex-grow py-2 px-2 mx-1 my-1.5 outline-none focus:outline-none focus:ring-amber-300 focus:ring-2 ring-inset transition-all rounded-md w-24" /> --}}
                        class="block w-full py-2 px-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />

                    <!-- Arrow Icon -->
                    <svg @click="expanded = !expanded; expanded && $refs.searchInput.focus()"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" stroke-width="0" fill="#ccc"
                        :class="expanded && 'rotate-180'"
                        class="absolute right-2 top-1/2 -translate-y-1/2 cursor-pointer focus:outline-none"
                        tabindex="-1">
                        <path d="M12 17.414 3.293 8.707l1.414-1.414L12 14.586l7.293-7.293 1.414 1.414L12 17.414z" />
                    </svg>
                </ul>
            </div>
            <!-- End Item Tags And Input Field -->

            <!-- Start Items List -->
            <template x-if="expanded">
                <ul x-ref="listBox"
                    class="w-full list-none border border-2 border-t-0 rounded-md focus:outline-none overflow-y-auto outline-none focus:outline-none bg-white absolute left-0 bottom-100 dark:border-gray-600 dark:bg-gray-700"
                    tabindex="0" :style="listBoxStyle">
                    <!-- Item Element -->
                    <template x-if="filteredItems.length">
                        <template x-for="(filteredItem, idx) in filteredItems">
                            <li x-text="shortenedLabel(filteredItem.label, maxItemChars)"
                                @click="handleItemClick(filteredItem)" :class="idx === activeIndex && 'bg-amber-200'"
                                :title="filteredItem.label" class="hover:bg-amber-200 cursor-pointer px-2 py-2"></li>
                        </template>
                    </template>

                    <!-- Empty Text -->
                    <template x-if="!filteredItems.length">
                        <li x-text="emptyText" class="cursor-pointer px-2 py-2 text-gray-400"></li>
                    </template>
                </ul>
            </template>
            <!-- End Items List -->
        </div>
        <!-- End Component -->
    {{-- </div> --}}
    {{-- </body>

    </html> --}}


{{-- </div> --}}
<script>
    function multiselect(config) {
        return {
            prueba: [],

            items: config.items ?? [],

            allItems: null,

            selectedItems: null,

            search: config.search ?? "",

            searchPlaceholder: config.searchPlaceholder ?? "Type here...",

            expanded: config.expanded ?? false,

            emptyText: config.emptyText ?? "No items found...",

            allowDuplicates: config.allowDuplicates ?? false,

            size: config.size ?? 4,

            itemHeight: config.itemHeight ?? 40,

            maxItemChars: config.maxItemChars ?? 50,

            maxTagChars: config.maxTagChars ?? 25,

            activeIndex: -1,

            onInit() {
                // Set the allItems array since we want to filter later on and keep the original (items) array as reference
                this.allItems = [...this.items];

                this.$watch("filteredItems", (newValues, oldValues) => {
                    // Reset the activeIndex whenever the filteredItems array changes
                    if (newValues.length !== oldValues.length) this.activeIndex = -1;
                });

                this.$watch("selectedItems", (newValues, oldValues) => {
                    if (this.allowDuplicates) return;

                    // Remove already selected items from the items (allItems) array (if allowDuplicates is false)
                    this.allItems = this.items.filter((item, idx, all) =>
                        newValues.every((n) => n.value !== item.value)
                    );

                });

                // Scroll to active element whenever activeIndex changes (if expanded is true and we have a value)
                this.$watch("activeIndex", (newValue, oldValue) => {
                    if (
                        this.activeIndex == -1 ||
                        !this.filteredItems[this.activeIndex] ||
                        !this.expanded
                    )
                        return;

                    this.scrollToActiveElement();
                });

                // Check whether there are selected values or not and set them
                this.selectedItems = this.items ?
                    this.items.filter((item) => item.selected) : [];

                // console.log(this.selectedItems);
            },

            handleBlur(e) {
                // If the current active element (relatedTarget) is a child element of the component itself, return
                // Note: The current active element must have a tabindex attribute set in order to appear as a relatedTarget
                if (this.$el.contains(e.relatedTarget)) {
                    return;
                }

                this.reset();
            },

            reset() {
                // 1) Clear the search value
                this.search = "";

                // 2) Close the list
                this.expanded = false;

                // 3) Reset the active index
                this.activeIndex = -1;
            },

            handleItemClick(item) {
                // 1) Add the item
                this.selectedItems.push(item);

                // 2) Reset the search input
                this.search = "";

                // 3) Keep the focus on the search input
                this.$refs.searchInput.focus();

                for (let key in this.selectedItems) {
                    // console.log(limitcar + ":", limitcar[key]);
                    value = this.selectedItems[key].value;
                }
                this.prueba.push(value);
                    console.log(this.prueba);
                    // @this.set(id, this.prueba);
                    document.getElementById('array').value = 101;

            },

            selectNextItem() {
                if (!this.filteredItems.length) return;

                // Array count starts at 0, so we abstract 1
                if (this.filteredItems.length - 1 == this.activeIndex) {
                    return (this.activeIndex = 0);
                }

                this.activeIndex++;
            },

            selectPrevItem() {
                if (!this.filteredItems.length) return;

                if (this.activeIndex == 0 || this.activeIndex == -1)
                    return (this.activeIndex = this.filteredItems.length - 1);

                this.activeIndex--;

            },

            addActiveItem() {
                if (!this.filteredItems[this.activeIndex]) return;

                this.selectedItems.push(this.filteredItems[this.activeIndex]);

                this.search = "";
            },

            scrollToActiveElement() {
                // Remove the first two child elements since they are <template> tags
                const availableListElements = [...this.$refs.listBox.children].slice(
                    2,
                    -1
                );

                // Scroll to active <li> element
                availableListElements[this.activeIndex].scrollIntoView({
                    block: "end",
                });
            },

            removeElementByIdx(itemIdx) {
                this.selectedItems.splice(itemIdx, 1);

                this.prueba.splice(itemIdx, 1);
                
                // console.log(this.prueba);
                // Focus the input element to keep the blur functionlity
                // otherwise @focusout on the root element will not be triggered
                if (!this.selectedItems.length) this.$refs.searchInput.focus();
            },

            shortenedLabel(label, maxChars) {
                return !maxChars || label.length <= maxChars ?
                    label :
                    `${label.substr(0, maxChars)}...`;

            },

            get filteredItems() {
                return this.allItems.filter((item) =>
                    item.label.toLowerCase().includes(this.search?.toLowerCase())
                );
            },

            get listBoxStyle() {
                // We add 2 since there is border that takes space
                return {
                    maxHeight: `${this.size * this.itemHeight + 2}px`,
                };
            },
        };
    }
</script>
