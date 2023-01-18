<div>


    <x-select2 id="prueba" onclick="valor()">
        { label: 'uno', value: '1' },
        { label: 'dos', value: '2' },
        { label: 'tres', value: '3' },
        { label: 'cuatro', value: '4' },
        { label: 'cinco', value: '5' },
        { label: 'uno1', value: '6' },
        { label: 'dos1', value: '7' },
        { label: 'tres1', value: '8' },
        { label: 'cuatro1', value: '9' },
        { label: 'cinco1', value: '10' },
    </x-select2>




    {{-- <div class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <svg class="mb-2 w-10 h-10 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                clip-rule="evenodd"></path>
            <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
        </svg>
        <a href="#">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Need a help in Claim?
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to
            certify for your weekly benefits:</p>
        <a href="#" class="inline-flex items-center text-blue-600 hover:underline">
            See our guideline
            <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                </path>
                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
            </svg>
        </a>
    </div> --}}

    {{-- <div
        class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <svg class="mb-2 w-10 h-10 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                clip-rule="evenodd"></path>
            <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
        </svg>
        <a href="#">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Need a help in Claim?
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to
            certify for your weekly benefits:</p>
        <a href="#" class="inline-flex items-center text-blue-600 hover:underline">
            See our guideline
            <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                </path>
                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
            </svg>
        </a>
    </div> --}}


    <a href="#"
        class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        {{-- <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" --}}
        {{-- src="/docs/images/blog/image-4.jpg" alt=""> --}}
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                acquisitions 2021</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                acquisitions of 2021 so far, in reverse chronological order.</p>
        </div>
    </a>

    <h2 class="h2">Video Category</h2>

    <div class="select-box">
        <div class="options-container">
            <div class="option">
                <input type="checkbox" class="radio" id="automobiles" name="category" />
                <label for="automobiles">Automobiles</label>
            </div>

            <div class="option">
                <input type="checkbox" class="radio" id="film" name="category" />
                <label for="film">Film & Animation</label>
            </div>

            <div class="option">
                <input type="checkbox" class="radio" id="science" name="category" />
                <label for="science">Science & Technology</label>
            </div>

            <div class="option">
                <input type="checkbox" class="radio" id="art" name="category" />
                <label for="art">Art</label>
            </div>

            <div class="option">
                <input type="checkbox" class="radio" id="music" name="category" />
                <label for="music">Music</label>
            </div>

            <div class="option">
                <input type="checkbox" class="radio" id="travel" name="category" />
                <label for="travel">Travel & Events</label>
            </div>

            <div class="option">
                <input type="checkbox" class="radio" id="sports" name="category" />
                <label for="sports">Sports</label>
            </div>

            <div class="option">
                <input type="checkbox" class="radio" id="news" name="category" />
                <label for="news">News & Politics</label>
            </div>

            <div class="option">
                <input type="checkbox" class="radio" id="tutorials" name="category" />
                <label for="tutorials">Tutorials</label>
            </div>
        </div>

        <div class="selected">
            Select Video Category
        </div>

        {{-- <div class="search-box">
            <input type="text" placeholder="Start Typing..." />
        </div> --}}
    </div>


    <div>
        <div class="container-select ">
            <div class="select-btn">
                <span class="btn-text">Select lenguage</span>
                <span class="arrow-dwn">
                    <i class="fas fa-chevron-down"></i>
                </span>
            </div>
            <div class="list-items  h-4-7 overflow-hidden">
                <li class="items">
                    <span class="checkbox">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="item-text">HTML & CSS</span>
                    <label for="">HTML & CSS</label>
                </li>
                <li class="items">
                    <span class="checkbox">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="item-text">BOOTSTRAP</span>
                </li>
                <li class="items">
                    <span class="checkbox">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="item-text">JAVASCRIPT</span>
                </li>
                <li class="items">
                    <span class="checkbox">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="item-text">NODE.JS</span>
                </li>
                <li class="items">
                    <span class="checkbox">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="item-text">REACT JS</span>
                </li>
                <li class="items">
                    <span class="checkbox">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="item-text">MONGO DB</span>
                </li>
                <li class="items">
                    <span class="checkbox">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="item-text">MONGO DB</span>
                </li>
            </div>
        </div>
    </div> 




    {{-- <select id="select" multiple name="native-select" placeholder="Native Select" data-search="false"
        data-silent-initial-value-set="true">
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
        <option value="4">Option 4</option>
        <option value="5">Option 5</option>
        <option value="6">Option 6</option>
        <option value="7">Option 7</option>
        ...
    </select> --}}

</div>
@section('scripts')
    <script>
        // VirtualSelect.init({
        //     ele: '#select'
        // });

        function valor() {
            // var select;
            select = document.getElementById('prueba').value;

            console.log(select);
        }

        const selectedAll = document.querySelectorAll(".selected");
        // console.log(selectedAll);
        selectedAll.forEach((selected) => {
            const optionsContainer = selected.previousElementSibling;
            // console.log("🚀 ~ file: manual.blade.php:218 ~ selectedAll.forEach ~ optionsContainer", optionsContainer)
            const searchBox = selected.nextElementSibling;
            // console.log("🚀 ~ file: manual.blade.php:220 ~ selectedAll.forEach ~ searchBox", searchBox)

            const optionsList = optionsContainer.querySelectorAll(".option");
            // console.log("🚀 ~ file: manual.blade.php:223 ~ selectedAll.forEach ~ optionsList", optionsList)

            selected.addEventListener("click", () => {
                if (optionsContainer.classList.contains("active")) {
                    optionsContainer.classList.remove("active");
                    // console.log("🚀 ~ file: manual.blade.php:228 ~ selected.addEventListener ~ optionsContainer", optionsContainer)

                } else {
                    let currentActive = document.querySelector(".options-container.active");

                    if (currentActive) {
                        currentActive.classList.remove("active");
                    }

                    optionsContainer.classList.add("active");
                    // console.log("🚀 ~ file: manual.blade.php:238 ~ selected.addEventListener ~ optionsContainer", optionsContainer)
                }

                searchBox.value = "";
                filterList("");

                if (optionsContainer.classList.contains("active")) {
                    searchBox.focus();
                }
            });
            let vari = [];
            optionsList.forEach((o) => {
                o.addEventListener("click", () => {

                    vari.push(o.querySelector("label").innerHTML);
                    // console.log("🚀 ~ file: manual.blade.php:251 ~ o.addEventListener ~ var", vari)
                    // selected.innerHTML = o.querySelector("label").innerHTML;
                    selected.innerHTML = ` ${vari} `;
                    // selected.innerHTML = `<li> `+ vari + `</li>`;
                    // optionsContainer.classList.remove("active");
                    // console.log("🚀 ~ file: manual.blade.php:252 ~ o.addEventListener ~ optionsContainer", optionsContainer)
                });
            });

            searchBox.addEventListener("keyup", function(e) {
                filterList(e.target.value);
            });

            const filterList = (searchTerm) => {
                searchTerm = searchTerm.toLowerCase();
                optionsList.forEach((option) => {
                    let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
                    if (label.indexOf(searchTerm) != -1) {
                        option.style.display = "block";
                    } else {
                        option.style.display = "none";
                    }
                });
            };
        });

        const selectBtn = document.querySelector(".select-btn");
        items = document.querySelectorAll(".items");

        // console.log(selectBtn,items);
        selectBtn.addEventListener('click', () => {
            selectBtn.classList.toggle('open');
        })

        items.forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('checked');

                let checked = document.querySelectorAll('.checked'),
                    btnText = document.querySelector('.btn-text');

                if (checked && checked.length > 0) {
                    btnText.innerText = `${checked.length} selected`;
                } else {
                    btnText.innerText = "select Language";
                }
            })
        });
    </script>
@endsection
